/**
 * DRE — slide 10 (derivado do economics + custódia mensal do PL)
 *
 * Receita ROA (12m) = Σ custódia m × (ROA a.a. ÷ 12)
 * Custódia m = custódia m−1 × (1 + cresc.) + captação do mês
 * Receita − impulsionamento − SDR − assessor = resultado
 */
(function () {
  const DRE_SIM_FIELDS = ['slide11.custoSdr', 'slide11.custoAssessor'];

  function fieldEl(key) {
    return document.querySelector('[data-field="' + key + '"]');
  }

  function fieldText(key) {
    const el = fieldEl(key);
    if (!el) return '';
    return (el.matches('input, textarea') ? el.value : el.textContent).trim();
  }

  function setFieldText(key, value, options) {
    const opts = options || {};
    document.querySelectorAll('[data-field="' + key + '"]').forEach(function (el) {
      if (el.matches('input, textarea')) {
        el.value = value;
      } else {
        el.textContent = value;
      }
    });
    if (opts.skipSave) return;
    if (window.PresentationContent?.saveFieldFromEditor) {
      window.PresentationContent.saveFieldFromEditor(key, value);
    }
  }

  function isFocused(key) {
    return document.activeElement === fieldEl(key);
  }

  function parsePct(str) {
    const raw = String(str || '').replace('%', '').replace(/a\.a\./gi, '').replace(',', '.').trim();
    const n = parseFloat(raw.replace(/[^\d.]/g, ''));
    return isNaN(n) ? 0 : n / 100;
  }

  function parseMoney(str) {
    let text = String(str || '').trim().toUpperCase();
    if (!text) return 0;
    let mult = 1;
    if (text.includes('M')) mult = 1e6;
    else if (text.includes('K')) mult = 1e3;
    text = text
      .replace(/R\$\s?/g, '')
      .replace(/[KM]/g, '')
      .replace(/\s/g, '')
      .replace(/\./g, '')
      .replace(',', '.');
    const n = parseFloat(text);
    return isNaN(n) ? 0 : n * mult;
  }

  function formatMoney(value) {
    const rounded = Math.round(value);
    const prefix = rounded < 0 ? '-R$ ' : 'R$ ';
    return prefix + Math.abs(rounded).toLocaleString('pt-BR');
  }

  function formatPct(value) {
    return value.toLocaleString('pt-BR', { minimumFractionDigits: 1, maximumFractionDigits: 1 }) + '%';
  }

  function formatSimField(key) {
    if (isFocused(key)) return;
    const parsed = parseMoney(fieldText(key));
    if (parsed > 0) setFieldText(key, formatMoney(parsed), { skipSave: true });
  }

  function growthRate() {
    const rate = parsePct(fieldText('slide12.crescimentoCarteira'));
    return rate > 0 ? rate : 0.01;
  }

  function investAnnual() {
    return window.PresentationEconomics?.getInvestAnnual
      ? window.PresentationEconomics.getInvestAnnual()
      : parseMoney(fieldText('slide10.investimentoCaptacao'));
  }

  function monthlyCustodyPoints(index) {
    const ticket = parseMoney(fieldText('slide10.s' + index + 'Ticket'));
    const cpl = parseMoney(fieldText('slide10.s' + index + 'Cpl'));
    const conv = parsePct(fieldText('slide10.s' + index + 'Conv'));
    const growth = growthRate();
    const investMonth = investAnnual() / 12;
    const clientsMonth = (cpl > 0 ? investMonth / cpl : 0) * conv;
    const captureMonth = ticket * clientsMonth;
    let custody = 0;
    const points = [];
    let i;

    for (i = 1; i <= 12; i++) {
      custody = custody * (1 + growth) + captureMonth;
      points.push({ month: i, custody: custody, capture: captureMonth });
    }

    return points;
  }

  function revenueAnnual(index) {
    const roa = parsePct(fieldText('slide10.anchorRoa'));
    const roaMonth = roa / 12;
    return monthlyCustodyPoints(index).reduce(function (sum, point) {
      return sum + point.custody * roaMonth;
    }, 0);
  }

  function syncPremises(index, impulsionamento, custoSdr, custoAssessor) {
    const roa = fieldText('slide10.anchorRoa');
    setFieldText('slide11.s' + index + 'PremImp', formatMoney(impulsionamento), { skipSave: true });
    setFieldText('slide11.s' + index + 'PremCpl', fieldText('slide10.s' + index + 'Cpl'), { skipSave: true });
    setFieldText('slide11.s' + index + 'PremConv', fieldText('slide10.s' + index + 'Conv'), { skipSave: true });
    setFieldText('slide11.s' + index + 'PremTicket', fieldText('slide10.s' + index + 'Ticket'), { skipSave: true });
    setFieldText('slide11.s' + index + 'PremRoa', roa, { skipSave: true });
    setFieldText('slide11.s' + index + 'PremSdr', formatMoney(custoSdr), { skipSave: true });
    setFieldText('slide11.s' + index + 'PremAssessor', formatMoney(custoAssessor), { skipSave: true });
    setFieldText('slide11.s' + index + 'PremLeads', fieldText('slide10.s' + index + 'Leads'), { skipSave: true });
  }

  function recalcScenario(index, custoSdr, custoAssessor) {
    const clients = parseInt(fieldText('slide10.s' + index + 'Clients'), 10) || 0;
    const impulsionamento = window.PresentationEconomics?.getInvestAnnual
      ? window.PresentationEconomics.getInvestAnnual()
      : parseMoney(fieldText('slide10.investimentoCaptacao'));
    const receita = revenueAnnual(index);

    syncPremises(index, impulsionamento, custoSdr, custoAssessor);

    const sdrTotal = custoSdr * 12;
    const assessorTotal = custoAssessor * 12;
    const custosTotal = impulsionamento + sdrTotal + assessorTotal;
    const resultado = receita - custosTotal;
    const margem = receita > 0 ? (resultado / receita) * 100 : 0;

    setFieldText('slide11.s' + index + 'Receita', formatMoney(receita), { skipSave: true });
    setFieldText('slide11.s' + index + 'Impulsionamento', formatMoney(-impulsionamento), { skipSave: true });
    setFieldText('slide11.s' + index + 'Sdr', formatMoney(-sdrTotal), { skipSave: true });
    setFieldText('slide11.s' + index + 'Assessor', formatMoney(-assessorTotal), { skipSave: true });
    setFieldText('slide11.s' + index + 'Custos', formatMoney(-custosTotal), { skipSave: true });
    setFieldText('slide11.s' + index + 'Resultado', formatMoney(resultado), { skipSave: true });
    setFieldText('slide11.s' + index + 'Margem', formatPct(margem), { skipSave: true });
    setFieldText('slide11.s' + index + 'Clientes', String(clients), { skipSave: true });

    return { resultado: resultado, margem: margem, clients: clients };
  }

  function updateSummary(base) {
    setFieldText('slide11.resumoResultado', formatMoney(base.resultado), { skipSave: true });
    setFieldText('slide11.resumoMargem', formatPct(base.margem), { skipSave: true });
    setFieldText('slide11.resumoClientes', base.clients + ' clientes', { skipSave: true });
  }

  function updateInsight(base, custoSdr, custoAssessor) {
    const invest = formatMoney(
      window.PresentationEconomics?.getInvestAnnual
        ? window.PresentationEconomics.getInvestAnnual()
        : parseMoney(fieldText('slide10.investimentoCaptacao'))
    );
    setFieldText(
      'slide11.insight',
      'Visão 12 meses · cenário base · ' + base.clients + ' clientes · impulsionamento ' + invest +
        ' · SDR ' + formatMoney(custoSdr) + '/mês · assessor ' + formatMoney(custoAssessor) + '/mês' +
        ' → resultado ' + formatMoney(base.resultado) + ' (' + formatPct(base.margem) + ' margem).',
      { skipSave: true }
    );
  }

  function recalcDre() {
    if (!document.querySelector('.slide-dre')) return;

    DRE_SIM_FIELDS.forEach(function (key) {
      if (!isFocused(key)) formatSimField(key);
    });

    const custoSdr = parseMoney(fieldText('slide11.custoSdr'));
    const custoAssessor = parseMoney(fieldText('slide11.custoAssessor'));

    if (custoSdr <= 0 || custoAssessor <= 0) return;

    recalcScenario(1, custoSdr, custoAssessor);
    const base = recalcScenario(2, custoSdr, custoAssessor);
    recalcScenario(3, custoSdr, custoAssessor);

    updateSummary(base);
    updateInsight(base, custoSdr, custoAssessor);
    document.dispatchEvent(new CustomEvent('presentation-dre-updated'));
  }

  function onSimInput() {
    recalcDre();
  }

  function onSimBlur(e) {
    const el = e.currentTarget;
    const key = el.dataset.field || '';
    formatSimField(key);
    recalcDre();
    if (window.PresentationContent?.saveFieldFromEditor) {
      window.PresentationContent.saveFieldFromEditor(key, el.value.trim());
    }
  }

  function onSimKeydown(e) {
    if (e.key === 'Escape' || e.key === 'Enter') {
      e.preventDefault();
      e.currentTarget.blur();
      return;
    }
    if (!['ArrowLeft', 'ArrowRight', ' ', 'Home', 'End'].includes(e.key)) {
      e.stopPropagation();
    }
  }

  function bindSimInputs() {
    document.querySelectorAll('[data-dre-sim]').forEach(function (el) {
      if (el.dataset.dreBound) return;
      el.dataset.dreBound = '1';
      el.addEventListener('input', onSimInput);
      el.addEventListener('blur', onSimBlur);
      el.addEventListener('keydown', onSimKeydown);
    });
  }

  document.addEventListener('presentation-fields-applied', function () {
    document.querySelectorAll('[data-dre-sim][data-dre-bound]').forEach(function (el) {
      delete el.dataset.dreBound;
    });
    bindSimInputs();
    recalcDre();
  });

  document.addEventListener('presentation-economics-updated', recalcDre);
  document.addEventListener('presentation-pl-updated', recalcDre);

  bindSimInputs();
  recalcDre();

  window.PresentationDre = { recalc: recalcDre };
})();
