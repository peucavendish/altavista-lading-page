/**
 * Simulador — slide 10
 *
 * Premissas editáveis: investimento · CPL · conv. (lead→cliente) · ticket · ROA (a.a.)
 * Toggle mensal: apenas exibição do investimento em impulsionamento
 *
 * Leads    = investimento ÷ CPL
 * Clientes = leads × conv.
 * AUC      = clientes × ticket
 * Receita  = AUC × ROA  (sempre anual)
 */
(function () {
  const SIM_FIELDS = [
    'slide10.investimentoCaptacao',
    'slide10.anchorCpl',
    'slide10.anchorConv',
    'slide10.anchorTicket',
    'slide10.anchorRoa',
  ];

  const SCENARIO_FACTORS = {
    1: { conv: 0.5, cpl: 1.5 },
    2: { conv: 1, cpl: 1 },
    3: { conv: 1.5, cpl: 0.67 },
  };

  let investView = 'annual';
  let investAnnual = 0;

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
    return 'R$ ' + Math.round(value).toLocaleString('pt-BR');
  }

  function formatInvestDisplay(annual) {
    return formatMoney(investView === 'monthly' ? annual / 12 : annual);
  }

  function parseInvestInput() {
    const raw = parseMoney(fieldText('slide10.investimentoCaptacao'));
    return investView === 'monthly' ? raw * 12 : raw;
  }

  function formatCpl(value) {
    const n = Math.round(value * 100) / 100;
    return 'R$ ' + n.toLocaleString('pt-BR', { minimumFractionDigits: 0, maximumFractionDigits: 1 });
  }

  function formatCacPct(decimal) {
    return (decimal * 100).toLocaleString('pt-BR', { minimumFractionDigits: 1, maximumFractionDigits: 2 }) + '%';
  }

  function formatConv(decimal) {
    const pct = decimal * 100;
    const d = pct === Math.floor(pct) ? 0 : 1;
    return pct.toLocaleString('pt-BR', { minimumFractionDigits: d, maximumFractionDigits: d }) + '%';
  }

  function formatRoa(decimal) {
    return (decimal * 100).toLocaleString('pt-BR', { minimumFractionDigits: 1, maximumFractionDigits: 2 }) + '% a.a.';
  }

  function formatRatio(value) {
    return value.toLocaleString('pt-BR', { minimumFractionDigits: 1, maximumFractionDigits: 1 }) + '×';
  }

  function formatLeads(value) {
    return Math.round(value).toLocaleString('pt-BR');
  }

  function formatSimField(key) {
    if (isFocused(key)) return;

    if (key === 'slide10.investimentoCaptacao') {
      if (investAnnual > 0) setFieldText(key, formatInvestDisplay(investAnnual), { skipSave: true });
      return;
    }

    if (key === 'slide10.anchorTicket') {
      const parsed = parseMoney(fieldText(key));
      if (parsed > 0) setFieldText(key, formatMoney(parsed), { skipSave: true });
      return;
    }

    if (key === 'slide10.anchorCpl') {
      const parsed = parseMoney(fieldText(key));
      if (parsed > 0) setFieldText(key, formatCpl(parsed), { skipSave: true });
      return;
    }

    if (key === 'slide10.anchorConv') {
      const parsed = parsePct(fieldText(key));
      if (parsed > 0) setFieldText(key, formatConv(parsed), { skipSave: true });
      return;
    }

    if (key === 'slide10.anchorRoa') {
      const parsed = parsePct(fieldText(key));
      if (parsed > 0) setFieldText(key, formatRoa(parsed), { skipSave: true });
    }
  }

  function syncScenariosFromSim() {
    const ticket = parseMoney(fieldText('slide10.anchorTicket'));
    const conv = parsePct(fieldText('slide10.anchorConv'));
    const cpl = parseMoney(fieldText('slide10.anchorCpl'));

    if (ticket <= 0 || conv <= 0 || cpl <= 0) return;

    [1, 2, 3].forEach(function (i) {
      const f = SCENARIO_FACTORS[i];
      setFieldText('slide10.s' + i + 'Ticket', formatMoney(ticket), { skipSave: true });
      setFieldText('slide10.s' + i + 'Conv', formatConv(conv * f.conv), { skipSave: true });
      setFieldText('slide10.s' + i + 'Cpl', formatCpl(cpl * f.cpl), { skipSave: true });
    });
  }

  function syncAnchorsFromBase() {
    setFieldText('slide10.anchorCac', fieldText('slide10.s2CacPct'), { skipSave: true });
    setFieldText('slide10.anchorAucCaptado', fieldText('slide10.s2Auc'), { skipSave: true });
    setFieldText('slide10.anchorReceita', fieldText('slide10.s2Revenue'), { skipSave: true });
  }

  function recalcScenario(index, roa) {
    const ticket = parseMoney(fieldText('slide10.s' + index + 'Ticket'));
    const conv = parsePct(fieldText('slide10.s' + index + 'Conv'));
    const cpl = parseMoney(fieldText('slide10.s' + index + 'Cpl'));

    const leads = cpl > 0 ? investAnnual / cpl : 0;
    const clients = Math.max(0, Math.round(leads * conv));
    const cacVal = conv > 0 ? cpl / conv : 0;
    const cacPct = ticket > 0 ? cacVal / ticket : 0;
    const auc = clients * ticket;
    const revenueAnnual = auc * roa;
    const roi = investAnnual > 0 ? revenueAnnual / investAnnual : 0;
    const monthlyRevPerClient = (ticket * roa) / 12;
    const payback = monthlyRevPerClient > 0 ? Math.max(1, Math.round(cacVal / monthlyRevPerClient)) : 0;

    setFieldText('slide10.s' + index + 'CacVal', formatMoney(cacVal), { skipSave: true });
    setFieldText('slide10.s' + index + 'CacPct', formatCacPct(cacPct), { skipSave: true });
    setFieldText('slide10.s' + index + 'Clients', String(clients), { skipSave: true });
    setFieldText('slide10.s' + index + 'Leads', formatLeads(leads), { skipSave: true });
    setFieldText('slide10.s' + index + 'Auc', formatMoney(auc), { skipSave: true });
    setFieldText('slide10.s' + index + 'Revenue', formatMoney(revenueAnnual), { skipSave: true });
    setFieldText('slide10.s' + index + 'Spend', formatInvestDisplay(investAnnual), { skipSave: true });
    setFieldText('slide10.s' + index + 'Roi', formatRatio(roi), { skipSave: true });
    setFieldText('slide10.s' + index + 'Payback', payback + ' meses', { skipSave: true });

    return { clients: clients, auc: auc, revenueAnnual: revenueAnnual, leads: leads, cacVal: cacVal };
  }

  function updateInvestLabels() {
    const investLabel = investView === 'monthly' ? 'Invest. impulsionamento (mês)' : 'Invest. impulsionamento';
    document.querySelectorAll('[data-econ-invest-label]').forEach(function (el) {
      el.textContent = investLabel;
    });
    const spendLabel = investView === 'monthly' ? 'Investimento (mês)' : 'Investimento';
    document.querySelectorAll('[data-econ-spend-label]').forEach(function (el) {
      el.textContent = spendLabel;
    });
    const toggle = document.getElementById('econInvestToggle');
    if (toggle) {
      toggle.textContent = investView === 'monthly' ? 'Ver anual' : 'Ver mensal';
      toggle.setAttribute('aria-pressed', investView === 'monthly' ? 'true' : 'false');
    }
  }

  function updateSummaryBar(base) {
    setFieldText('slide10.resumoInvest', formatInvestDisplay(investAnnual), { skipSave: true });
    setFieldText('slide10.resumoLeads', formatLeads(base.leads) + ' leads', { skipSave: true });
    setFieldText('slide10.resumoClientes', base.clients + ' clientes', { skipSave: true });
    setFieldText('slide10.anchorAucCaptado', formatMoney(base.auc), { skipSave: true });
    setFieldText('slide10.anchorReceita', formatMoney(base.revenueAnnual), { skipSave: true });
  }

  function updateInsight(base) {
    const conv = fieldText('slide10.anchorConv');
    const cpl = fieldText('slide10.anchorCpl');
    const ticket = fieldText('slide10.anchorTicket');
    const cac = fieldText('slide10.anchorCac');
    const roa = fieldText('slide10.anchorRoa');
    const investLabel = investView === 'monthly' ? formatInvestDisplay(investAnnual) + '/mês' : formatMoney(investAnnual);

    setFieldText(
      'slide10.insight',
      'Invest. ' + investLabel + ' · CPL ' + cpl +
        ' · conv. ' + conv + ' → ' + formatLeads(base.leads) + ' leads · ' + base.clients + ' clientes' +
        ' · CAC ' + cac + ' do ticket · AUC ' + formatMoney(base.auc) +
        ' · receita ROA/ano ' + formatMoney(base.revenueAnnual) + ' (' + roa + ').',
      { skipSave: true }
    );
  }

  function recalcEconomics() {
    SIM_FIELDS.forEach(function (key) {
      if (key !== 'slide10.investimentoCaptacao' && !isFocused(key)) formatSimField(key);
    });

    if (isFocused('slide10.investimentoCaptacao')) {
      investAnnual = parseInvestInput();
    } else if (investAnnual <= 0) {
      investAnnual = parseMoney(fieldText('slide10.investimentoCaptacao'));
    }

    if (investAnnual <= 0) return;

    if (!isFocused('slide10.investimentoCaptacao')) {
      setFieldText('slide10.investimentoCaptacao', formatInvestDisplay(investAnnual), { skipSave: true });
    }

    syncScenariosFromSim();

    const roa = parsePct(fieldText('slide10.anchorRoa'));
    if (roa <= 0) return;

    const base = recalcScenario(2, roa);
    recalcScenario(1, roa);
    recalcScenario(3, roa);

    syncAnchorsFromBase();
    updateSummaryBar(base);
    updateInvestLabels();
    updateInsight(base);
    document.dispatchEvent(new CustomEvent('presentation-economics-updated'));
  }

  function persistSimField(key, value) {
    if (window.PresentationContent?.saveFieldFromEditor) {
      window.PresentationContent.saveFieldFromEditor(key, value);
    }
  }

  function onSimInput() {
    recalcEconomics();
  }

  function onSimBlur(e) {
    const el = e.currentTarget;
    const key = el.dataset.field || '';
    formatSimField(key);
    recalcEconomics();
    if (key === 'slide10.investimentoCaptacao') {
      persistSimField(key, formatMoney(investAnnual));
    } else {
      persistSimField(key, el.value.trim());
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
    document.querySelectorAll('[data-econ-sim]').forEach(function (el) {
      if (el.dataset.simBound) return;
      el.dataset.simBound = '1';
      el.addEventListener('input', onSimInput);
      el.addEventListener('blur', onSimBlur);
      el.addEventListener('keydown', onSimKeydown);
    });
  }

  function bindInvestToggle() {
    const btn = document.getElementById('econInvestToggle');
    if (!btn || btn.dataset.bound) return;
    btn.dataset.bound = '1';
    btn.addEventListener('click', function () {
      investView = investView === 'annual' ? 'monthly' : 'annual';
      recalcEconomics();
    });
  }

  document.addEventListener('presentation-fields-applied', function () {
    document.querySelectorAll('[data-econ-sim][data-sim-bound]').forEach(function (el) {
      delete el.dataset.simBound;
    });
    investAnnual = parseMoney(fieldText('slide10.investimentoCaptacao'));
    bindSimInputs();
    bindInvestToggle();
    recalcEconomics();
  });

  bindSimInputs();
  bindInvestToggle();
  if (document.querySelector('.slide-economics')) {
    investAnnual = parseMoney(fieldText('slide10.investimentoCaptacao'));
    recalcEconomics();
  }

  window.PresentationEconomics = {
    recalc: recalcEconomics,
    getInvestAnnual: function () {
      return investAnnual;
    },
  };
})();
