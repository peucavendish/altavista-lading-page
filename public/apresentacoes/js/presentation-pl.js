/**
 * PL mensal — slide 11 (evolução da custódia)
 *
 * Captação/mês = ticket × clientes/mês
 * Custódia m = custódia m−1 × (1 + crescimento) + captação do mês
 */
(function () {
  var MONTH_LABELS = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];

  var SCENARIO_STYLE = {
    1: { stroke: '#0A1628', fill: 'rgba(10, 22, 40, 0.14)', width: 2.5, dimStroke: 'rgba(10, 22, 40, 0.12)', dimFill: 'rgba(10, 22, 40, 0.03)' },
    2: { stroke: '#C9A227', fill: 'rgba(201, 162, 39, 0.18)', width: 2.5, dimStroke: 'rgba(201, 162, 39, 0.15)', dimFill: 'rgba(201, 162, 39, 0.04)' },
    3: { stroke: '#0A1628', fill: 'rgba(10, 22, 40, 0.1)', width: 2.5, dimStroke: 'rgba(10, 22, 40, 0.1)', dimFill: 'rgba(10, 22, 40, 0.02)' }
  };

  var cachedSeries = null;
  var selectedScenario = 2;

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
    var raw = String(str || '').replace('%', '').replace(/a\.a\./gi, '').replace(/a\.m\./gi, '').replace(',', '.').trim();
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
    var prefix = rounded < 0 ? '-R$ ' : 'R$ ';
    return prefix + Math.abs(rounded).toLocaleString('pt-BR');
  }

  function formatMoneyCompact(value) {
    var abs = Math.abs(value);
    if (abs >= 1e6) {
      return 'R$ ' + (value / 1e6).toLocaleString('pt-BR', { maximumFractionDigits: 1 }) + 'M';
    }
    if (abs >= 1e3) {
      return 'R$ ' + (value / 1e3).toLocaleString('pt-BR', { maximumFractionDigits: 0 }) + 'K';
    }
    return formatMoney(value);
  }

  function formatClientsMonth(value) {
    return value.toLocaleString('pt-BR', { minimumFractionDigits: 1, maximumFractionDigits: 1 });
  }

  function formatPctDisplay(value) {
    return (value * 100).toLocaleString('pt-BR', { minimumFractionDigits: 1, maximumFractionDigits: 1 }) + '%';
  }

  function scenarioName(index) {
    var name = fieldText('slide12.scenario' + index + 'Name');
    if (name) return name;
    return ['Conservador', 'Base', 'Acelerado'][index - 1];
  }

  function investAnnual() {
    if (window.PresentationEconomics?.getInvestAnnual) {
      return window.PresentationEconomics.getInvestAnnual();
    }
    return parseMoney(fieldText('slide10.investimentoCaptacao'));
  }

  function growthRate() {
    var rate = parsePct(fieldText('slide12.crescimentoCarteira'));
    return rate > 0 ? rate : 0.01;
  }

  function monthlySeries(index) {
    var ticket = parseMoney(fieldText('slide10.s' + index + 'Ticket'));
    var cpl = parseMoney(fieldText('slide10.s' + index + 'Cpl'));
    var conv = parsePct(fieldText('slide10.s' + index + 'Conv'));
    var clients12 = parseInt(fieldText('slide10.s' + index + 'Clients'), 10) || 0;
    var growth = growthRate();
    var investMonth = investAnnual() / 12;
    var clientsMonth = (cpl > 0 ? investMonth / cpl : 0) * conv;
    var captureMonth = ticket * clientsMonth;
    var custody = 0;
    var points = [];
    var i;

    for (i = 1; i <= 12; i++) {
      var growthVal = custody * growth;
      custody = custody * (1 + growth) + captureMonth;
      points.push({
        month: i,
        label: MONTH_LABELS[i - 1],
        capture: captureMonth,
        growth: growthVal,
        custody: custody
      });
    }

    return {
      plMonth: captureMonth,
      pl12: custody,
      clientsMonth: clientsMonth,
      clients12: clients12,
      ticket: ticket,
      growth: growth,
      points: points
    };
  }

  function recalcScenario(index) {
    var data = monthlySeries(index);

    setFieldText('slide12.s' + index + 'Ticket', fieldText('slide10.s' + index + 'Ticket'), { skipSave: true });
    setFieldText('slide12.s' + index + 'ClientesMes', formatClientsMonth(data.clientsMonth), { skipSave: true });
    setFieldText('slide12.s' + index + 'PlMes', formatMoney(data.plMonth), { skipSave: true });
    setFieldText('slide12.s' + index + 'Clientes12', String(data.clients12), { skipSave: true });
    setFieldText('slide12.s' + index + 'Pl12', formatMoney(data.pl12), { skipSave: true });
    setFieldText('slide12.s' + index + 'Crescimento', formatPctDisplay(data.growth), { skipSave: true });

    return data;
  }

  function formatMoneyTable(value) {
    if (value >= 1e6) {
      return 'R$ ' + (value / 1e6).toLocaleString('pt-BR', { minimumFractionDigits: 1, maximumFractionDigits: 1 }) + 'M';
    }
    if (value >= 1e4) {
      return 'R$ ' + (value / 1e3).toLocaleString('pt-BR', { maximumFractionDigits: 0 }) + 'K';
    }
    return formatMoney(value);
  }

  function renderMonthTable(scenario) {
    var tbody = document.getElementById('plMonthTableBody');
    if (!tbody || !scenario) return;

    var rows = '';
    scenario.points.forEach(function (p) {
      var highlight = p.month === 12 ? ' class="pl-month-final"' : '';
      rows +=
        '<tr' + highlight + '>' +
        '<td>' + p.month + '</td>' +
        '<td>' + formatMoneyTable(p.capture) + '</td>' +
        '<td class="pl-col-total">' + formatMoneyTable(p.custody) + '</td>' +
        '</tr>';
    });
    tbody.innerHTML = rows;
  }

  function buildAreaPath(points, xScale, yScale, baselineY, valueKey) {
    if (!points.length) return '';
    var key = valueKey || 'custody';
    var d = 'M ' + xScale(0) + ' ' + yScale(points[0][key]);
    var i;
    for (i = 1; i < points.length; i++) {
      d += ' L ' + xScale(i) + ' ' + yScale(points[i][key]);
    }
    d += ' L ' + xScale(points.length - 1) + ' ' + baselineY;
    d += ' L ' + xScale(0) + ' ' + baselineY + ' Z';
    return d;
  }

  function buildLinePath(points, xScale, yScale, valueKey) {
    if (!points.length) return '';
    var key = valueKey || 'custody';
    var d = 'M ' + xScale(0) + ' ' + yScale(points[0][key]);
    var i;
    for (i = 1; i < points.length; i++) {
      d += ' L ' + xScale(i) + ' ' + yScale(points[i][key]);
    }
    return d;
  }

  function renderCurve(allSeries, activeIdx) {
    var container = document.getElementById('plCurveChart');
    if (!container) return;

    var maxVal = 0;
    allSeries.forEach(function (s) {
      s.points.forEach(function (p) {
        if (p.custody > maxVal) maxVal = p.custody;
      });
    });
    if (maxVal <= 0) {
      container.innerHTML = '';
      return;
    }

    var width = 800;
    var height = 220;
    var pad = { top: 14, right: 24, bottom: 28, left: 52 };
    var chartW = width - pad.left - pad.right;
    var chartH = height - pad.top - pad.bottom;
    var baselineY = pad.top + chartH;

    function xScale(i) {
      return pad.left + (i / 11) * chartW;
    }

    function yScale(v) {
      return pad.top + chartH - (v / maxVal) * chartH;
    }

    var gridLines = '';
    var yTicks = 3;
    var tick;
    for (tick = 0; tick <= yTicks; tick++) {
      var val = (maxVal / yTicks) * tick;
      var y = yScale(val);
      gridLines +=
        '<line class="pl-grid-line" x1="' + pad.left + '" y1="' + y + '" x2="' + (width - pad.right) + '" y2="' + y + '"/>' +
        '<text class="pl-axis-y" x="' + (pad.left - 8) + '" y="' + (y + 3) + '" text-anchor="end">' +
        formatMoneyCompact(val) + '</text>';
    }

    var refPoints = allSeries[activeIdx - 1].points;
    var monthLabels = '';
    refPoints.forEach(function (p, i) {
      monthLabels +=
        '<text class="pl-axis-x" x="' + xScale(i) + '" y="' + (height - 6) + '" text-anchor="middle">' +
        p.label + '</text>';
    });

    var seriesSvg = '';
    var drawOrder = [1, 3, 2].filter(function (idx) {
      return idx !== activeIdx;
    });
    drawOrder.push(activeIdx);

    drawOrder.forEach(function (idx) {
      var s = allSeries[idx - 1];
      var style = SCENARIO_STYLE[idx];
      var isActive = idx === activeIdx;
      var stroke = isActive ? style.stroke : style.dimStroke;
      var fill = isActive ? style.fill : style.dimFill;
      var widthLine = isActive ? style.width : 1.25;
      seriesSvg +=
        '<path class="pl-area" d="' + buildAreaPath(s.points, xScale, yScale, baselineY, 'custody') + '" fill="' + fill + '"/>' +
        '<path class="pl-line" d="' + buildLinePath(s.points, xScale, yScale, 'custody') + '" fill="none" stroke="' + stroke + '" stroke-width="' + widthLine + '"/>';
    });

    var active = allSeries[activeIdx - 1];
    var last = active.points[11];
    var endLabel =
      '<text class="pl-end-label" x="' + xScale(11) + '" y="' + (yScale(last.custody) - 8) + '" text-anchor="middle">' +
      formatMoneyCompact(last.custody) + '</text>';

    container.innerHTML =
      '<svg class="pl-curve-svg" viewBox="0 0 ' + width + ' ' + height + '" preserveAspectRatio="xMidYMid meet" role="img" aria-label="Evolução da custódia mês a mês">' +
      gridLines + seriesSvg + endLabel + monthLabels +
      '</svg>';
  }

  function updateSummary(scenario) {
    setFieldText('slide12.resumoPlMes', formatMoney(scenario.plMonth), { skipSave: true });
    setFieldText('slide12.resumoPl12', formatMoney(scenario.pl12), { skipSave: true });
    setFieldText('slide12.resumoClientesMes', formatClientsMonth(scenario.clientsMonth) + ' clientes/mês', { skipSave: true });
    setFieldText('slide12.resumoCrescimento', formatPctDisplay(scenario.growth) + '/mês', { skipSave: true });
  }

  function updateInsight(scenario, index) {
    var name = scenarioName(index);
    setFieldText(
      'slide12.insight',
      'Cenário ' + name.toLowerCase() + ' · PL captado ' + formatMoney(scenario.plMonth) + '/mês · carteira +' +
        formatPctDisplay(scenario.growth) + '/mês · PL acumulado ' + formatMoney(scenario.pl12) + ' no mês 12.',
      { skipSave: true }
    );

    var label = document.getElementById('plTableScenarioLabel');
    if (label) label.textContent = name + ' · mês a mês';
  }

  function updateScenarioUI() {
    document.querySelectorAll('[data-pl-scenario]').forEach(function (btn) {
      var idx = parseInt(btn.getAttribute('data-pl-scenario'), 10);
      var active = idx === selectedScenario;
      btn.classList.toggle('active', active);
      btn.setAttribute('aria-pressed', active ? 'true' : 'false');
    });
  }

  function updateView() {
    if (!cachedSeries) return;
    var scenario = cachedSeries[selectedScenario - 1];
    renderCurve(cachedSeries, selectedScenario);
    renderMonthTable(scenario);
    updateSummary(scenario);
    updateInsight(scenario, selectedScenario);
    updateScenarioUI();
  }

  function recalcPl() {
    if (!document.querySelector('.slide-pl')) return;

    cachedSeries = [
      recalcScenario(1),
      recalcScenario(2),
      recalcScenario(3)
    ];
    updateView();
    document.dispatchEvent(new CustomEvent('presentation-pl-updated'));
  }

  function onScenarioClick(e) {
    var btn = e.currentTarget;
    var idx = parseInt(btn.getAttribute('data-pl-scenario'), 10);
    if (!idx || idx === selectedScenario) return;
    selectedScenario = idx;
    updateView();
  }

  function onScenarioKeydown(e) {
    if (e.key === ' ' || e.key === 'Enter') {
      e.preventDefault();
      onScenarioClick(e);
      return;
    }
    e.stopPropagation();
  }

  function onSimInput() {
    recalcPl();
  }

  function onSimBlur(e) {
    var el = e.currentTarget;
    recalcPl();
    if (window.PresentationContent?.saveFieldFromEditor) {
      window.PresentationContent.saveFieldFromEditor(el.dataset.field || '', el.value.trim());
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

  function bindScenarioFilter() {
    document.querySelectorAll('[data-pl-scenario]').forEach(function (btn) {
      if (btn.dataset.plScenarioBound) return;
      btn.dataset.plScenarioBound = '1';
      btn.addEventListener('click', onScenarioClick);
      btn.addEventListener('keydown', onScenarioKeydown);
    });
  }

  function bindSimInputs() {
    document.querySelectorAll('[data-pl-sim]').forEach(function (el) {
      if (el.dataset.plBound) return;
      el.dataset.plBound = '1';
      el.addEventListener('input', onSimInput);
      el.addEventListener('blur', onSimBlur);
      el.addEventListener('keydown', onSimKeydown);
    });
  }

  document.addEventListener('presentation-fields-applied', function () {
    document.querySelectorAll('[data-pl-sim][data-pl-bound]').forEach(function (el) {
      delete el.dataset.plBound;
    });
    document.querySelectorAll('[data-pl-scenario][data-pl-scenario-bound]').forEach(function (btn) {
      delete btn.dataset.plScenarioBound;
    });
    bindSimInputs();
    bindScenarioFilter();
    recalcPl();
  });

  document.addEventListener('presentation-economics-updated', recalcPl);

  bindSimInputs();
  bindScenarioFilter();
  recalcPl();

  window.PresentationPl = { recalc: recalcPl, setScenario: function (idx) {
    selectedScenario = idx;
    updateView();
  }};
})();
