/**
 * Navegação — respeita slides ocultos na apresentação
 */
(function () {
  const slides = Array.from(document.querySelectorAll('.slide'));
  const total = slides.length;
  let current = 0;

  const navDots = document.getElementById('navDots');
  const navCounter = document.getElementById('navCounter');
  const sidebarNav = document.getElementById('sidebarNav');
  const slideSidebar = document.getElementById('slideSidebar');
  const sidebarToggle = document.getElementById('sidebarToggle');
  const sidebarMeta = document.querySelector('.sidebar-meta');

  function slideNum(index) {
    return parseInt(slides[index]?.dataset.slide || String(index + 1), 10);
  }

  function isHidden(index) {
    return window.PresentationContent?.isSlideHidden(slideNum(index)) ?? false;
  }

  function visibleIndices() {
    return slides.map((_, i) => i).filter((i) => !isHidden(i));
  }

  function updateSidebarMeta() {
    if (!sidebarMeta) return;
    const hidden = visibleIndices().length;
    const n = total - hidden;
    sidebarMeta.textContent = n > 0
      ? `${total} slides · ${n} oculto${n > 1 ? 's' : ''}`
      : `${total} slides · Apresentação Executiva`;
  }

  function buildSidebar() {
    if (!sidebarNav) return;
    sidebarNav.innerHTML = '';

    slides.forEach((slide, i) => {
      const num = slideNum(i);
      const title = slide.dataset.title || `Slide ${num}`;
      const label = slide.dataset.label || '';
      const hidden = isHidden(i);

      const row = document.createElement('div');
      row.className = 'sidebar-item-row' + (hidden ? ' is-slide-hidden' : '');

      const btn = document.createElement('button');
      btn.type = 'button';
      btn.className = 'sidebar-item' + (i === current ? ' active' : '');
      btn.dataset.index = i;
      btn.innerHTML = `
        <span class="sidebar-item-num">${String(num).padStart(2, '0')}</span>
        <span class="sidebar-item-text">
          ${label ? `<span class="sidebar-item-label">${label}</span>` : ''}
          <span class="sidebar-item-title">${title}</span>
        </span>
      `;
      btn.addEventListener('click', () => {
        goTo(i);
        if (window.innerWidth <= 1100) slideSidebar.classList.remove('open');
      });

      const hideBtn = document.createElement('button');
      hideBtn.type = 'button';
      hideBtn.className = 'sidebar-hide-btn' + (hidden ? ' hidden' : '');
      hideBtn.title = hidden ? 'Exibir na apresentação' : 'Ocultar da apresentação';
      hideBtn.setAttribute('aria-label', hideBtn.title);
      hideBtn.innerHTML = hidden
        ? '<svg viewBox="0 0 24 24"><path d="M3 3l18 18M10.5 10.7a3 3 0 004.6 4.6M9.9 5.1A10.8 10.8 0 0112 5c5 0 9.3 3.1 11 7.5a11.2 11.2 0 01-2.1 3.6M6.7 6.7A11.8 11.8 0 003 12.5 11.2 11.2 0 004.7 16"/></svg>'
        : '<svg viewBox="0 0 24 24"><path d="M2 12.5C3.7 8.1 8 5 12 5s8.3 3.1 10 7.5c-1.7 4.4-6 7.5-10 7.5S3.7 16.9 2 12.5z"/><circle cx="12" cy="12.5" r="3"/></svg>';
      hideBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        window.PresentationContent?.toggleSlideHidden(num);
      });

      row.appendChild(btn);
      row.appendChild(hideBtn);
      sidebarNav.appendChild(row);
    });

    updateSidebarMeta();
  }

  function buildDots() {
    if (!navDots) return;
    navDots.innerHTML = '';
    visibleIndices().forEach((i) => {
      const dot = document.createElement('div');
      dot.className = 'nav-dot' + (i === current ? ' active' : '');
      dot.dataset.index = i;
      dot.addEventListener('click', () => goTo(i));
      navDots.appendChild(dot);
    });
  }

  function updateUI() {
    slides.forEach((slide, i) => {
      slide.classList.toggle('active', i === current);
      slide.classList.toggle('slide-hidden-in-present', isHidden(i));
    });

    document.querySelectorAll('.sidebar-item-row').forEach((row, i) => {
      const hidden = isHidden(i);
      row.classList.toggle('is-slide-hidden', hidden);
      const item = row.querySelector('.sidebar-item');
      const hideBtn = row.querySelector('.sidebar-hide-btn');
      if (item) item.classList.toggle('active', i === current);
      if (hideBtn) {
        hideBtn.classList.toggle('hidden', hidden);
        hideBtn.title = hidden ? 'Exibir na apresentação' : 'Ocultar da apresentação';
      }
    });

    const vis = visibleIndices();
    const pos = vis.indexOf(current);
    const visiblePos = pos >= 0 ? pos + 1 : 0;
    const visibleTotal = vis.length;

    document.querySelectorAll('.nav-dot').forEach((dot) => {
      const idx = parseInt(dot.dataset.index, 10);
      dot.classList.toggle('active', idx === current);
    });

    if (navCounter) {
      navCounter.textContent = visibleTotal
        ? `${visiblePos} / ${visibleTotal}`
        : '0 / 0';
    }

    if (window.PresentationEditor) {
      window.PresentationEditor.setCurrentSlide(current);
    }
  }

  function goTo(index) {
    if (index < 0 || index >= total) return;
    current = index;
    updateUI();
  }

  function goToRelative(delta) {
    const vis = visibleIndices();
    if (!vis.length) return;

    let pos = vis.indexOf(current);
    if (pos < 0) {
      goTo(vis[0]);
      return;
    }

    const nextPos = pos + delta;
    if (nextPos >= 0 && nextPos < vis.length) {
      goTo(vis[nextPos]);
    }
  }

  function ensureCurrentVisible() {
    const vis = visibleIndices();
    if (!vis.length) return;
    if (!vis.includes(current)) {
      goTo(vis[0]);
    }
  }

  function init() {
    buildSidebar();
    buildDots();
    ensureCurrentVisible();
    updateUI();
  }

  window.PresentationNav = {
    refresh() {
      buildSidebar();
      buildDots();
      ensureCurrentVisible();
      updateUI();
    },
  };

  document.getElementById('prevBtn')?.addEventListener('click', () => goToRelative(-1));
  document.getElementById('nextBtn')?.addEventListener('click', () => goToRelative(1));

  sidebarToggle?.addEventListener('click', () => {
    slideSidebar?.classList.toggle('open');
  });

  function toggleFullscreen() {
    if (!document.fullscreenElement) {
      document.documentElement.requestFullscreen().catch(() => {});
    } else {
      document.exitFullscreen();
    }
  }

  function updateFullscreenUI() {
    document.body.classList.toggle('fullscreen', !!document.fullscreenElement);
    const sidebarBtn = document.getElementById('presentBtnSidebar');
    if (sidebarBtn) sidebarBtn.style.display = document.fullscreenElement ? 'none' : 'flex';
  }

  document.getElementById('presentBtnSidebar')?.addEventListener('click', toggleFullscreen);
  document.getElementById('presentBtnNav')?.addEventListener('click', toggleFullscreen);
  document.getElementById('exitFullscreenBtn')?.addEventListener('click', () => {
    if (document.fullscreenElement) document.exitFullscreen();
  });

  function isEditingSlideText() {
    const el = document.activeElement;
    if (!el) return false;
    if (el.matches('.econ-sim-input')) return true;
    if (el.matches('input, textarea, select')) {
      if (el.readOnly || el.disabled) return false;
      return document.body.classList.contains('edit-mode');
    }
    if (el.isContentEditable) return true;
    return !!el.closest?.('[data-field][contenteditable="true"]');
  }

  document.addEventListener('keydown', (e) => {
    if (isEditingSlideText()) {
      const navKeys = ['ArrowLeft', 'ArrowRight', ' ', 'Home', 'End'];
      if (navKeys.includes(e.key)) return;
    }
    if (e.key === 'ArrowRight' || e.key === ' ') { e.preventDefault(); goToRelative(1); }
    if (e.key === 'ArrowLeft') { e.preventDefault(); goToRelative(-1); }
    if (e.key === 'Home') { e.preventDefault(); goTo(visibleIndices()[0] ?? 0); }
    if (e.key === 'End') { e.preventDefault(); goTo(visibleIndices().at(-1) ?? 0); }
    if (e.key === 'f' || e.key === 'F') { e.preventDefault(); toggleFullscreen(); }
  });

  document.addEventListener('fullscreenchange', updateFullscreenUI);

  let touchStartX = 0;
  document.addEventListener('touchstart', (e) => { touchStartX = e.changedTouches[0].screenX; });
  document.addEventListener('touchend', (e) => {
    const diff = touchStartX - e.changedTouches[0].screenX;
    if (Math.abs(diff) > 50) {
      diff > 0 ? goToRelative(1) : goToRelative(-1);
    }
  });

  document.addEventListener('presentation-content-ready', init);
  document.addEventListener('presentation-visibility-changed', () => {
    buildSidebar();
    buildDots();
    ensureCurrentVisible();
    updateUI();
  });

  if (window.PresentationContent) {
    init();
  }
})();
