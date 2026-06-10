/**
 * Camada de conteúdo — Apresentações internas (Laravel)
 */
(function () {
  const config = window.PRESENTATION_CONFIG || {};
  const STORAGE_KEY = config.storageKey || ('uv-presentation:' + (config.id || 'growth-univalores'));

  let baseFields = config.fields || {};
  let baseHiddenSlides = normalizeHidden(config.hiddenSlides || []);
  let overrides = { fields: {}, hiddenSlides: null };

  function normalizeHidden(arr) {
    return [...new Set((arr || []).map((n) => parseInt(n, 10)).filter((n) => n > 0))].sort((a, b) => a - b);
  }

  function csrfToken() {
    const meta = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
    if (meta) return meta;
    const match = document.cookie.match(/XSRF-TOKEN=([^;]+)/);
    return match ? decodeURIComponent(match[1]) : '';
  }

  function loadOverrides() {
    try {
      const raw = localStorage.getItem(STORAGE_KEY);
      if (!raw) return;
      const data = JSON.parse(raw);
      if (data.fields) {
        overrides = {
          fields: data.fields || {},
          hiddenSlides: data.hiddenSlides != null ? normalizeHidden(data.hiddenSlides) : null,
        };
      } else {
        overrides = { fields: data, hiddenSlides: null };
      }
    } catch {
      overrides = { fields: {}, hiddenSlides: null };
    }
  }

  function saveOverrides() {
    localStorage.setItem(STORAGE_KEY, JSON.stringify({
      fields: { ...overrides.fields },
      hiddenSlides: overrides.hiddenSlides,
    }));
  }

  function mergedFields() {
    return { ...baseFields, ...overrides.fields };
  }

  function mergedHiddenSlides() {
    return overrides.hiddenSlides !== null ? overrides.hiddenSlides : baseHiddenSlides;
  }

  function applyFields(fields) {
    document.querySelectorAll('[data-field]').forEach((el) => {
      const key = el.dataset.field;
      if (fields[key] === undefined) return;
      if (el.matches('input, textarea')) {
        el.value = String(fields[key]).replace(/<[^>]*>/g, '');
      } else {
        el.innerHTML = fields[key];
      }
    });
    document.dispatchEvent(new CustomEvent('presentation-fields-applied'));
  }

  function collectFromDom() {
    const fields = {};
    document.querySelectorAll('[data-field]').forEach((el) => {
      fields[el.dataset.field] = el.matches('input, textarea')
        ? el.value
        : el.innerHTML;
    });
    return fields;
  }

  async function saveToServer() {
    if (!config.saveUrl) return false;

    try {
      const res = await fetch(config.saveUrl, {
        method: 'PUT',
        credentials: 'same-origin',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json',
          'X-CSRF-TOKEN': csrfToken(),
          'X-Requested-With': 'XMLHttpRequest',
        },
        body: JSON.stringify({
          fields: mergedFields(),
          hiddenSlides: mergedHiddenSlides(),
        }),
      });

      if (!res.ok) return false;
      const data = await res.json();
      return data.success === true;
    } catch {
      return false;
    }
  }

  function updateEditorStatus(msg) {
    const el = document.getElementById('editorStatus');
    if (el) {
      el.textContent = msg;
      el.classList.add('visible');
      clearTimeout(updateEditorStatus._t);
      updateEditorStatus._t = setTimeout(() => el.classList.remove('visible'), 2800);
    }
  }

  async function init() {
    loadOverrides();

    if (config.contentUrl && !Object.keys(baseFields).length) {
      try {
        const res = await fetch(config.contentUrl);
        if (res.ok) {
          const data = await res.json();
          baseFields = data.fields || {};
          baseHiddenSlides = normalizeHidden(data.hiddenSlides);
        }
      } catch {
        /* usa dados do Blade */
      }
    }

    if (!Object.keys(baseFields).length) {
      baseFields = collectFromDom();
    }

    applyFields(mergedFields());
    window.PresentationContent = api;
    document.dispatchEvent(new CustomEvent('presentation-content-ready'));

    if (config.editMode) {
      document.dispatchEvent(new CustomEvent('presentation-open-editor'));
    }
  }

  async function setField(key, value) {
    overrides.fields[key] = value;
    saveOverrides();

    const el = document.querySelector(`[data-field="${key}"]`);
    if (el) {
      if (el.matches('input, textarea')) {
        el.value = String(value).replace(/<[^>]*>/g, '');
      } else {
        el.innerHTML = value;
      }
    }

    const saved = await saveToServer();
    updateEditorStatus(saved ? 'Salvo no servidor' : 'Salvo localmente');
  }

  async function setHiddenSlides(slideNums) {
    overrides.hiddenSlides = normalizeHidden(slideNums);
    saveOverrides();

    const saved = await saveToServer();
    updateEditorStatus(saved ? 'Visibilidade salva' : 'Visibilidade salva localmente');
    document.dispatchEvent(new CustomEvent('presentation-visibility-changed', {
      detail: { hiddenSlides: mergedHiddenSlides() },
    }));
  }

  function toggleSlideHidden(slideNum) {
    const num = parseInt(slideNum, 10);
    const hidden = mergedHiddenSlides();
    const next = hidden.includes(num)
      ? hidden.filter((n) => n !== num)
      : [...hidden, num];
    setHiddenSlides(next);
  }

  function exportJson() {
    const payload = {
      version: 1,
      id: 'growth-univalores',
      exportedAt: new Date().toISOString(),
      fields: mergedFields(),
      hiddenSlides: mergedHiddenSlides(),
    };
    const blob = new Blob([JSON.stringify(payload, null, 2)], { type: 'application/json' });
    const a = document.createElement('a');
    a.href = URL.createObjectURL(blob);
    a.download = 'growth-univalores-conteudo.json';
    a.click();
    URL.revokeObjectURL(a.href);
    updateEditorStatus('JSON exportado');
  }

  function importJson(file) {
    const reader = new FileReader();
    reader.onload = async () => {
      try {
        const data = JSON.parse(reader.result);
        overrides.fields = data.fields || data;
        overrides.hiddenSlides = data.hiddenSlides != null
          ? normalizeHidden(data.hiddenSlides)
          : null;
        saveOverrides();
        applyFields(mergedFields());
        const saved = await saveToServer();
        updateEditorStatus(saved ? 'Importado e salvo no servidor' : 'JSON importado');
        document.dispatchEvent(new CustomEvent('presentation-visibility-changed', {
          detail: { hiddenSlides: mergedHiddenSlides() },
        }));
        if (window.PresentationEditor) window.PresentationEditor.refreshPanel();
        if (window.PresentationNav) window.PresentationNav.refresh();
      } catch {
        updateEditorStatus('Erro ao importar JSON');
      }
    };
    reader.readAsText(file);
  }

  async function resetContent() {
    if (!confirm('Restaurar conteúdo e visibilidade padrão? Suas edições serão apagadas.')) return;
    overrides = { fields: {}, hiddenSlides: null };
    localStorage.removeItem(STORAGE_KEY);
    applyFields(baseFields);
    await saveToServer();
    updateEditorStatus('Conteúdo restaurado');
    document.dispatchEvent(new CustomEvent('presentation-visibility-changed', {
      detail: { hiddenSlides: mergedHiddenSlides() },
    }));
    if (window.PresentationEditor) window.PresentationEditor.refreshPanel();
    if (window.PresentationNav) window.PresentationNav.refresh();
  }

  const api = {
    init,
    mergedFields,
    getHiddenSlides: mergedHiddenSlides,
    isSlideHidden(slideNum) {
      return mergedHiddenSlides().includes(parseInt(slideNum, 10));
    },
    toggleSlideHidden,
    setField,
    exportJson,
    importJson,
    resetContent,
    getFieldsForSlide(slideNum) {
      const prefix = `slide${slideNum}.`;
      const fields = mergedFields();
      return Object.entries(fields)
        .filter(([k]) => k.startsWith(prefix))
        .map(([key, value]) => ({ key, label: key.replace(prefix, ''), value }));
    },
    saveFieldFromEditor(key, value) {
      setField(key, value);
    },
  };

  init();
})();
