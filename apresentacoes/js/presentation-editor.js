/**
 * Edição inline no slide + ferramentas na sidebar
 */
(function () {
  let editMode = false;
  let currentSlideIndex = 0;
  let uiBound = false;

  const panel = () => document.getElementById('editorPanel');
  const fieldsContainer = () => document.getElementById('editorFields');

  function slideNumFromIndex(index) {
    const slideEl = document.querySelectorAll('.slide')[index];
    return parseInt(slideEl?.dataset.slide || String(index + 1), 10);
  }

  function onFieldFocus(e) {
    e.currentTarget.classList.add('field-editing');
  }

  function onFieldBlur(e) {
    const el = e.currentTarget;
    el.classList.remove('field-editing');
    const key = el.dataset.field;
    if (!key || !window.PresentationContent) return;
    const value = el.innerHTML.trim();
    window.PresentationContent.saveFieldFromEditor(key, value);
  }

  function onFieldKeydown(e) {
    if (e.key === 'Escape') {
      e.preventDefault();
      e.currentTarget.blur();
      return;
    }
    e.stopPropagation();
  }

  function onFieldPaste(e) {
    e.preventDefault();
    const text = (e.clipboardData || window.clipboardData).getData('text/plain');
    if (!text) return;
    const sel = window.getSelection();
    if (!sel?.rangeCount) return;
    sel.deleteFromDocument();
    sel.getRangeAt(0).insertNode(document.createTextNode(text));
    sel.collapseToEnd();
  }

  function bindField(el) {
    if (el.dataset.inlineBound) return;
    el.dataset.inlineBound = '1';
    el.addEventListener('focus', onFieldFocus);
    el.addEventListener('blur', onFieldBlur);
    el.addEventListener('keydown', onFieldKeydown);
    el.addEventListener('paste', onFieldPaste);
  }

  function enableInlineEditing() {
    document.querySelectorAll('[data-field]').forEach((el) => {
      el.setAttribute('contenteditable', 'true');
      el.setAttribute('spellcheck', 'false');
      el.classList.add('field-editable');
      bindField(el);
    });
  }

  function disableInlineEditing() {
    const active = document.activeElement;
    if (active?.closest?.('[data-field]')) active.blur();

    document.querySelectorAll('[data-field]').forEach((el) => {
      el.removeAttribute('contenteditable');
      el.classList.remove('field-editable', 'field-editing');
    });
  }

  function refreshPanel() {
    const container = fieldsContainer();
    if (!container || !window.PresentationContent) return;

    const slideNum = slideNumFromIndex(currentSlideIndex);
    const isHidden = window.PresentationContent.isSlideHidden(slideNum);
    const fieldCount = window.PresentationContent.getFieldsForSlide(slideNum).length;

    container.innerHTML = `
      <p class="editor-inline-hint">
        Clique no texto <strong>destacado no slide</strong> para editar.
        ${fieldCount ? `<span class="editor-inline-meta">${fieldCount} campo${fieldCount > 1 ? 's' : ''} neste slide</span>` : ''}
      </p>
      <p class="editor-inline-keys"><kbd>Enter</kbd> nova linha · <kbd>Esc</kbd> concluir</p>
      <label class="editor-field editor-field-toggle">
        <span class="editor-field-label">Visibilidade na apresentação</span>
        <button type="button" class="editor-hide-toggle ${isHidden ? 'is-hidden' : ''}" id="editorHideToggle">
          ${isHidden ? '👁‍🗨 Slide oculto — clique para exibir' : '👁 Slide visível — clique para ocultar'}
        </button>
      </label>
    `;

    document.getElementById('editorHideToggle')?.addEventListener('click', () => {
      window.PresentationContent.toggleSlideHidden(slideNum);
      refreshPanel();
    });
  }

  function setEditMode(on) {
    editMode = on;
    document.body.classList.toggle('edit-mode', on);
    panel()?.classList.toggle('open', on);
    document.getElementById('editModeBtn')?.classList.toggle('active', on);

    if (on) {
      enableInlineEditing();
      refreshPanel();
    } else {
      disableInlineEditing();
    }
  }

  function bindUI() {
    if (uiBound) return;
    uiBound = true;

    const editBtn = document.getElementById('editModeBtn');
    if (!editBtn) return;

    editBtn.addEventListener('click', () => setEditMode(!editMode));
    document.getElementById('exportContentBtn')?.addEventListener('click', () => window.PresentationContent?.exportJson());
    document.getElementById('importContentBtn')?.addEventListener('click', () => document.getElementById('importContentInput')?.click());
    document.getElementById('importContentInput')?.addEventListener('change', (e) => {
      const file = e.target.files?.[0];
      if (file) window.PresentationContent?.importJson(file);
      e.target.value = '';
    });
    document.getElementById('resetContentBtn')?.addEventListener('click', () => window.PresentationContent?.resetContent());
    document.getElementById('editorCloseBtn')?.addEventListener('click', () => setEditMode(false));
  }

  function boot() {
    bindUI();
    if (window.PRESENTATION_CONFIG?.editMode) {
      setEditMode(true);
    }
  }

  window.PresentationEditor = {
    refreshPanel,
    setCurrentSlide(index) {
      currentSlideIndex = index;
      if (editMode) refreshPanel();
    },
    syncInlineEditing() {
      if (editMode) enableInlineEditing();
    },
  };

  document.addEventListener('presentation-content-ready', boot);
  document.addEventListener('presentation-open-editor', () => setEditMode(true));
  document.addEventListener('presentation-visibility-changed', () => {
    if (editMode) refreshPanel();
  });
  document.addEventListener('presentation-fields-applied', () => {
    if (editMode) enableInlineEditing();
  });

  if (window.PresentationContent) {
    boot();
  }
})();
