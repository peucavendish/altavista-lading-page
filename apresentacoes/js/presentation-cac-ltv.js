/**
 * CAC & LTV — slide 10 (derivado do economics + custos DRE)
 *
 * CAC mídia = CPL ÷ conv.
 * SDR/cliente = (SDR/mês × 12) ÷ clientes novos
 * Assessor/cliente = (assessor/mês × 12) ÷ clientes novos
 * CAC total = CAC mídia + SDR/cliente + assessor/cliente
 *
 * Receita/ano = ticket × ROA
 * LTV = receita/ano ÷ churn
 * LTV/CAC = LTV ÷ CAC total (R$)
 */
(function () {
  function fieldEl(key) {
    return document.querySelector('[data-field="' + key + '"]');
  }

  function fieldText(key) {
    var el = fieldEl(key);
    if (!el) return '';
    return (el.matches('input, textarea') ? el.value : el.textContent).trim();
  }

  function setFieldText(key, value, options) {
    var opts = options || {};
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

  function parsePct(str) {
    var raw = String(str || '').replace('%', '').replace(/a\.a\./gi, '').replace(',', '.').trim();
    var n = parseFloat(raw.replace(/[^\d.]/g, ''));
    return isNaN(n) ? 0 : n / 100;
  }

  function parseMoney(str) {
    var text = String(str || '').trim().toUpperCase();
    if (!text) return 0;
    var mult = 1;
    if (text.includes('M')) mult = 1e6;
    else if (text.includes('K')) mult = 1e3;
    text = text
      .replace(/R\$\s?/g, '')
      .replace(/[KM]/g, '')
      .replace(/\s/g, '')
      .replace(/\./g, '')
      .replace(',', '.');
    var n = parseFloat(text);
    return isNaN(n) ? 0 : n * mult;
  }

  function formatMoney(value) {
    var rounded = Math.round(value);
    return 'R$ ' + Math.abs(rounded).toLocaleString('pt-BR');
  }

  function formatPct(value) {
    return (value * 100).toLocaleString('pt-BR', { minimumFractionDigits: 1, maximumFractionDigits: 1 }) + '%';
  }

  function formatRatio(value) {
    return value.toLocaleString('pt-BR', { minimumFractionDigits: 1, maximumFractionDigits: 1 }) + '×';
  }

  function formatYears(value) {
    return value.toLocaleString('pt-BR', { minimumFractionDigits: 0, maximumFractionDigits: 1 }) + ' anos';
  }

  function churnRate() {
    var rate = parsePct(fieldText('slide14.churn'));
    return rate > 0 ? rate : 0.1;
  }

  function peopleCostPerClient(index) {
    var clients = parseInt(String(fieldText('slide10.s' + index + 'Clients')).replace(/\D/g, ''), 10) || 0;
    var sdrAnnual = parseMoney(fieldText('slide11.custoSdr')) * 12;
    var assessorAnnual = parseMoney(fieldText('slide11.custoAssessor')) * 12;
    if (clients <= 0) {
      return { sdrPerClient: 0, assessorPerClient: 0, clients: 0 };
    }
    return {
      sdrPerClient: sdrAnnual / clients,
      assessorPerClient: assessorAnnual / clients,
      clients: clients
    };
  }

  function recalcScenario(index) {
    var ticket = parseMoney(fieldText('slide10.s' + index + 'Ticket'));
    var roa = parsePct(fieldText('slide10.anchorRoa'));
    var cacMidia = parseMoney(fieldText('slide10.s' + index + 'CacVal'));
    var people = peopleCostPerClient(index);
    var cacVal = cacMidia + people.sdrPerClient + people.assessorPerClient;
    var cacPct = ticket > 0 ? cacVal / ticket : 0;
    var churn = churnRate();
    var receitaAno = ticket * roa;
    var ltv = churn > 0 ? receitaAno / churn : 0;
    var ltvCac = cacVal > 0 ? ltv / cacVal : 0;
    var paybackYears = receitaAno > 0 ? cacVal / receitaAno : 0;

    setFieldText('slide14.s' + index + 'CacMidia', formatMoney(cacMidia), { skipSave: true });
    setFieldText('slide14.s' + index + 'SdrCliente', formatMoney(people.sdrPerClient), { skipSave: true });
    setFieldText('slide14.s' + index + 'AssessorCliente', formatMoney(people.assessorPerClient), { skipSave: true });
    setFieldText('slide14.s' + index + 'Cac', formatMoney(cacVal), { skipSave: true });
    setFieldText('slide14.s' + index + 'CacPct', formatPct(cacPct), { skipSave: true });
    setFieldText('slide14.s' + index + 'ReceitaAno', formatMoney(receitaAno), { skipSave: true });
    setFieldText('slide14.s' + index + 'Ltv', formatMoney(ltv), { skipSave: true });
    setFieldText('slide14.s' + index + 'LtvCac', formatRatio(ltvCac), { skipSave: true });

    return {
      cacMidia: cacMidia,
      sdrPerClient: people.sdrPerClient,
      assessorPerClient: people.assessorPerClient,
      cacVal: cacVal,
      cacPct: cacPct,
      receitaAno: receitaAno,
      ltv: ltv,
      ltvCac: ltvCac,
      paybackYears: paybackYears,
      churn: churn
    };
  }

  function formatPayback(years) {
    if (years <= 0) return '—';
    if (years < 1.05) {
      return 'Payback ~' + Math.max(1, Math.round(years * 12)) + ' meses';
    }
    return 'Payback ~' + years.toLocaleString('pt-BR', { minimumFractionDigits: 1, maximumFractionDigits: 1 }) + ' anos';
  }

  function formatCacBreakdown(base) {
    return (
      'mídia ' + formatMoney(base.cacMidia) +
      ' · SDR ' + formatMoney(base.sdrPerClient) +
      ' · assessor ' + formatMoney(base.assessorPerClient)
    );
  }

  function updateSummary(base) {
    var vidaMedia = base.churn > 0 ? 1 / base.churn : 0;
    setFieldText('slide14.resumoCac', formatMoney(base.cacVal), { skipSave: true });
    setFieldText('slide14.resumoCacPct', formatPct(base.cacPct) + ' do ticket', { skipSave: true });
    setFieldText('slide14.resumoCacBreakdown', formatCacBreakdown(base), { skipSave: true });
    setFieldText('slide14.resumoLtv', formatMoney(base.ltv), { skipSave: true });
    setFieldText('slide14.resumoReceitaAno', formatMoney(base.receitaAno) + '/ano · ROA', { skipSave: true });
    setFieldText('slide14.resumoLtvCac', formatRatio(base.ltvCac), { skipSave: true });
    setFieldText('slide14.resumoPayback', formatPayback(base.paybackYears), { skipSave: true });
    setFieldText('slide14.resumoVidaMedia', formatYears(vidaMedia), { skipSave: true });
  }

  function updateInsight(base) {
    setFieldText(
      'slide14.insight',
      'Cenário base · CAC total ' + formatMoney(base.cacVal) + ' (' + formatCacBreakdown(base) + ') · LTV ' +
        formatMoney(base.ltv) + ' com churn ' + formatPct(base.churn) + ' a.a. · relação ' +
        formatRatio(base.ltvCac) + ' — cada R$ 1 investido na aquisição completa gera R$ ' +
        base.ltvCac.toLocaleString('pt-BR', { minimumFractionDigits: 1, maximumFractionDigits: 1 }) +
        ' de receita ROA na vida do cliente.',
      { skipSave: true }
    );
  }

  function recalcCacLtv() {
    if (!document.querySelector('.slide-cac-ltv')) return;

    recalcScenario(1);
    var base = recalcScenario(2);
    recalcScenario(3);

    updateSummary(base);
    updateInsight(base);
  }

  function onSimInput() {
    recalcCacLtv();
  }

  function onSimBlur(e) {
    recalcCacLtv();
    if (window.PresentationContent?.saveFieldFromEditor) {
      window.PresentationContent.saveFieldFromEditor(e.currentTarget.dataset.field || '', e.currentTarget.value.trim());
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
    document.querySelectorAll('[data-cac-sim]').forEach(function (el) {
      if (el.dataset.cacBound) return;
      el.dataset.cacBound = '1';
      el.addEventListener('input', onSimInput);
      el.addEventListener('blur', onSimBlur);
      el.addEventListener('keydown', onSimKeydown);
    });
  }

  document.addEventListener('presentation-fields-applied', function () {
    document.querySelectorAll('[data-cac-sim][data-cac-bound]').forEach(function (el) {
      delete el.dataset.cacBound;
    });
    bindSimInputs();
    recalcCacLtv();
  });

  document.addEventListener('presentation-economics-updated', recalcCacLtv);
  document.addEventListener('presentation-dre-updated', recalcCacLtv);

  bindSimInputs();
  recalcCacLtv();

  window.PresentationCacLtv = { recalc: recalcCacLtv };
})();
