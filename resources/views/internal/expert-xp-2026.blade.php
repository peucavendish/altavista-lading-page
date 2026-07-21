<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="Agenda e links de fotos da Expert XP 2026 — uso interno Alta Vista Investimentos.">
    <title>Expert XP 2026 | Alta Vista (interno)</title>
    <link rel="icon" type="image/png" href="/img/favicon-96x96.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --navy: #001845;
            --ink: #16213e;
            --gold: #FFC971;
            --gold-light: #ffd89b;
            --text: #EBEDF2;
            --muted: rgba(235, 237, 242, 0.72);
            --line: rgba(255, 201, 113, 0.18);
            --panel: rgba(22, 33, 62, 0.72);
            --card: rgba(8, 18, 40, 0.55);
        }
        @font-face {
            font-family: 'GT America';
            src: url('/fonts/GT-America-LCGV-Standard-Regular/GT-America-LCGV-Standard-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        * { scroll-behavior: smooth; box-sizing: border-box; }
        body {
            font-family: 'GT America', 'Inter', Arial, sans-serif;
            background: var(--navy);
            color: var(--text);
            margin: 0;
            min-height: 100vh;
        }

        .page-header {
            background: linear-gradient(135deg, var(--navy) 0%, var(--ink) 100%);
            padding: 2.5rem 0 2rem;
            position: relative;
            overflow: hidden;
            border-bottom: 1px solid var(--line);
        }
        .page-header::before {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at 25% 40%, rgba(255, 201, 113, 0.14) 0%, transparent 55%),
                radial-gradient(circle at 75% 20%, rgba(255, 201, 113, 0.08) 0%, transparent 50%);
            pointer-events: none;
        }
        .page-header .container { position: relative; z-index: 1; }
        .logo {
            max-width: 220px;
            width: 100%;
            display: block;
            margin: 0 auto 1.5rem;
            filter: drop-shadow(0 4px 16px rgba(0, 0, 0, 0.3));
        }
        .internal-badge {
            display: inline-block;
            background: rgba(255, 201, 113, 0.15);
            border: 1px solid rgba(255, 201, 113, 0.35);
            color: var(--gold);
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            padding: 0.35rem 0.85rem;
            border-radius: 999px;
            margin-bottom: 0.85rem;
        }
        .page-header h1 {
            font-size: clamp(1.75rem, 4vw, 2.6rem);
            font-weight: 800;
            line-height: 1.15;
            margin: 0 0 0.75rem;
            text-align: center;
        }
        .page-header h1 .accent { color: var(--gold); }
        .page-header .lead {
            text-align: center;
            color: var(--muted);
            font-size: 1.05rem;
            line-height: 1.6;
            max-width: 640px;
            margin: 0 auto 1.25rem;
        }
        .event-meta {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 0.65rem;
        }
        .meta-chip {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid var(--line);
            border-radius: 999px;
            padding: 0.45rem 0.9rem;
            font-size: 0.82rem;
            color: var(--muted);
        }
        .meta-chip i { color: var(--gold); }

        main { padding: 2rem 0 3rem; }
        .content-wrap { max-width: 960px; margin: 0 auto; }

        .controls-bar {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 0.85rem 1.25rem;
            margin-bottom: 1.25rem;
            padding: 0.95rem 1.1rem;
            background: var(--panel);
            border: 1px solid var(--line);
            border-radius: 16px;
        }
        .controls-group {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 0.55rem;
        }
        .control-label {
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--muted);
            white-space: nowrap;
        }
        .segmented {
            display: flex;
            flex-wrap: wrap;
            gap: 0.45rem;
        }
        .filter-btn {
            appearance: none;
            border: 1px solid var(--line);
            background: rgba(0, 24, 69, 0.45);
            color: var(--text);
            padding: 0.45rem 0.8rem;
            border-radius: 999px;
            font-size: 0.78rem;
            font-weight: 600;
            cursor: pointer;
            line-height: 1.2;
            transition: border-color 0.2s, color 0.2s, background 0.2s, box-shadow 0.2s;
        }
        .filter-btn:hover {
            color: var(--gold);
            border-color: rgba(255, 201, 113, 0.4);
        }
        .filter-btn[aria-pressed="true"] {
            border-color: rgba(255, 201, 113, 0.55);
            color: var(--gold);
            background: rgba(255, 201, 113, 0.12);
            box-shadow: inset 0 0 0 1px rgba(255, 201, 113, 0.18);
        }
        .filter-meta {
            margin-left: auto;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: var(--muted);
            font-size: 0.78rem;
        }
        .filter-meta strong { color: var(--gold); }
        .filter-clear {
            appearance: none;
            border: 0;
            background: transparent;
            color: var(--gold);
            font-size: 0.78rem;
            font-weight: 600;
            cursor: pointer;
            padding: 0;
            text-decoration: underline;
            text-underline-offset: 2px;
        }
        .hide { display: none !important; }

        .content-panel {
            background: var(--panel);
            border: 1px solid var(--line);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 14px 40px rgba(0, 0, 0, 0.18);
            margin-bottom: 1.5rem;
            scroll-margin-top: 1rem;
        }
        .panel-head {
            padding: 1.15rem 1.35rem;
            border-bottom: 1px solid var(--line);
            background: rgba(0, 24, 69, 0.45);
            display: flex;
            align-items: baseline;
            justify-content: space-between;
            gap: 1rem;
            flex-wrap: wrap;
        }
        .panel-head h2 {
            margin: 0;
            font-size: 1.15rem;
            font-weight: 800;
            color: var(--gold);
        }
        .panel-head p,
        .panel-head span {
            margin: 0;
            font-size: 0.82rem;
            color: var(--muted);
        }
        .panel-body { padding: 0; }
        .panel-note {
            font-size: 0.82rem;
            color: var(--muted);
        }

        .agenda-legend {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem 0.85rem;
            padding: 0.85rem 1.35rem 1rem;
            border-bottom: 1px solid var(--line);
            background: rgba(0, 24, 69, 0.2);
        }
        .legend-item {
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
            font-size: 0.76rem;
            color: var(--muted);
        }
        .legend-dot {
            width: 0.55rem;
            height: 0.55rem;
            border-radius: 50%;
            flex-shrink: 0;
        }
        .legend-dot.session { background: rgba(235, 237, 242, 0.55); }
        .legend-dot.meeting { background: #60a5fa; }
        .legend-dot.av { background: var(--gold); }

        .day-block {
            border-bottom: 1px solid var(--line);
            scroll-margin-top: 1rem;
        }
        .day-block:last-child { border-bottom: 0; }
        .day-block-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            padding: 0.9rem 1.5rem;
            background: rgba(0, 24, 69, 0.28);
            border-bottom: 1px solid rgba(255, 201, 113, 0.1);
        }
        .day-block-head h3 {
            margin: 0;
            font-size: 1rem;
            font-weight: 700;
            color: var(--text);
        }
        .day-block-head span {
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            color: var(--gold);
            white-space: nowrap;
        }
        .day-empty {
            padding: 2rem 1.5rem;
            text-align: center;
            color: var(--muted);
            font-size: 0.92rem;
        }
        .day-empty i {
            display: block;
            font-size: 1.4rem;
            color: var(--gold);
            margin-bottom: 0.45rem;
        }
        .filter-empty {
            padding: 2.5rem 1.5rem;
            text-align: center;
            color: var(--muted);
            font-size: 0.92rem;
        }
        .filter-empty i {
            display: block;
            font-size: 1.5rem;
            color: var(--gold);
            margin-bottom: 0.5rem;
        }

        .slot-list { padding: 0.35rem 0; }
        .slot-row {
            display: grid;
            grid-template-columns: 5.5rem 1fr;
            gap: 0 1.25rem;
            padding: 0.85rem 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.04);
        }
        .slot-row:last-child { border-bottom: 0; }
        .slot-time {
            padding-top: 0.15rem;
            font-size: 0.9rem;
            font-weight: 800;
            line-height: 1.35;
            color: var(--gold);
            font-variant-numeric: tabular-nums;
        }
        .slot-time small {
            display: block;
            margin-top: 0.15rem;
            font-size: 0.68rem;
            font-weight: 600;
            color: rgba(255, 201, 113, 0.65);
        }
        .slot-items {
            display: flex;
            flex-direction: column;
            gap: 0.65rem;
            min-width: 0;
        }

        .session {
            position: relative;
            padding: 0.85rem 1rem 0.9rem 1.1rem;
            border-radius: 12px;
            background: var(--card);
            border: 1px solid rgba(255, 255, 255, 0.06);
        }
        .session::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0.65rem;
            bottom: 0.65rem;
            width: 3px;
            border-radius: 999px;
            background: rgba(235, 237, 242, 0.35);
        }
        .session.meeting {
            background: rgba(37, 99, 235, 0.14);
            border-color: rgba(96, 165, 250, 0.28);
        }
        .session.meeting::before { background: #60a5fa; }
        .session.av {
            background: rgba(255, 201, 113, 0.1);
            border-color: rgba(255, 201, 113, 0.28);
        }
        .session.av::before { background: var(--gold); }

        .session-top {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 0.4rem 0.6rem;
            margin-bottom: 0.45rem;
        }
        .session-type {
            font-size: 0.68rem;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: var(--muted);
        }
        .session-tag {
            font-size: 0.62rem;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            color: var(--navy);
            background: var(--gold);
            border-radius: 999px;
            padding: 0.15rem 0.45rem;
        }
        .session-tag.meeting {
            color: #eff6ff;
            background: #2563eb;
        }
        .session-title {
            margin: 0 0 0.35rem;
            font-size: 1rem;
            font-weight: 600;
            line-height: 1.45;
            color: var(--text);
        }
        .session-speakers {
            margin: 0;
            font-size: 0.84rem;
            line-height: 1.5;
            color: var(--muted);
        }

        .photos-section { scroll-margin-top: 1rem; }

        .upload-block {
            padding: 1.35rem 1.35rem 1.5rem;
        }
        .upload-block-head {
            margin-bottom: 0.85rem;
        }
        .upload-block-head h3 {
            margin: 0 0 0.3rem;
            font-size: 0.98rem;
            font-weight: 700;
            color: var(--text);
        }
        .upload-block-head p {
            margin: 0;
            font-size: 0.84rem;
            line-height: 1.5;
            color: var(--muted);
        }
        .upload-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 0.75rem;
        }
        .upload-card {
            display: flex;
            flex-direction: column;
            gap: 0.55rem;
            padding: 0.95rem 1rem;
            border-radius: 12px;
            border: 1px solid var(--line);
            background: var(--card);
            text-decoration: none;
            color: inherit;
            transition: border-color 0.2s, background 0.2s, transform 0.2s;
        }
        .upload-card:hover {
            border-color: rgba(255, 201, 113, 0.45);
            background: rgba(255, 201, 113, 0.08);
            transform: translateY(-1px);
        }
        .upload-card-label {
            font-size: 0.68rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--gold);
        }
        .upload-card-title {
            margin: 0;
            font-size: 0.92rem;
            font-weight: 700;
            line-height: 1.35;
            color: var(--text);
        }
        .upload-card-meta {
            margin: 0;
            font-size: 0.78rem;
            color: var(--muted);
        }
        .upload-card-action {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            margin-top: auto;
            font-size: 0.78rem;
            font-weight: 700;
            color: var(--gold);
        }

        footer {
            border-top: 1px solid var(--line);
            padding: 1.25rem 0 2rem;
            text-align: center;
            color: var(--muted);
            font-size: 0.8rem;
        }
        footer a { color: var(--gold); text-decoration: none; }
        footer a:hover { text-decoration: underline; }

        @media (max-width: 640px) {
            .controls-bar { padding: 0.85rem; }
            .filter-meta { margin-left: 0; width: 100%; justify-content: space-between; }
            .slot-row {
                grid-template-columns: 1fr;
                gap: 0.55rem;
                padding: 0.85rem 1rem;
            }
            .slot-time {
                display: flex;
                align-items: baseline;
                gap: 0.45rem;
                padding-top: 0;
            }
            .slot-time small { margin-top: 0; }
            .panel-head,
            .agenda-legend,
            .day-block-head,
            .slot-row,
            .upload-block { padding-left: 1rem; padding-right: 1rem; }
            .upload-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <header class="page-header">
        <div class="container px-3">
            <img src="/img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png" alt="Alta Vista Investimentos" class="logo" width="220" height="auto">
            <div class="text-center">
                <span class="internal-badge"><i class="bi bi-lock-fill me-1"></i> Uso interno</span>
                <h1>Expert <span class="accent">XP 2026</span></h1>
                <p class="lead">Agenda do broker e links para fotos do evento no SharePoint — compartilhamento exclusivo para o time Alta Vista.</p>
                <div class="event-meta">
                    <span class="meta-chip"><i class="bi bi-calendar3"></i> 23 a 25 de julho de 2026</span>
                    <span class="meta-chip"><i class="bi bi-geo-alt"></i> São Paulo Expo</span>
                    <span class="meta-chip"><i class="bi bi-people"></i> 16ª edição</span>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container px-3 content-wrap">
            <div class="controls-bar" aria-label="Filtros da agenda">
                <div class="controls-group">
                    <span class="control-label">Dia</span>
                    <div class="segmented" role="group" aria-label="Filtrar por dia">
                        <button class="filter-btn" type="button" data-filter-group="day" data-filter="all" aria-pressed="true">Todos</button>
                        @foreach ($agenda as $day)
                            <button class="filter-btn" type="button" data-filter-group="day" data-filter="{{ $day['id'] }}" aria-pressed="false">{{ $day['weekday'] }}</button>
                        @endforeach
                    </div>
                </div>
                <div class="controls-group">
                    <span class="control-label">Tipo</span>
                    <div class="segmented" role="group" aria-label="Filtrar por tipo">
                        <button class="filter-btn" type="button" data-filter-group="type" data-filter="all" aria-pressed="true">Todos</button>
                        <button class="filter-btn" type="button" data-filter-group="type" data-filter="session" aria-pressed="false">Sessões</button>
                        <button class="filter-btn" type="button" data-filter-group="type" data-filter="av" aria-pressed="false">Alta Vista</button>
                    </div>
                </div>
                <div class="filter-meta">
                    <span><strong id="agendaShownCount">0</strong> de <span id="agendaTotalCount">0</span> sessões</span>
                    <button class="filter-clear" type="button" id="clearAgendaFilters">Limpar filtros</button>
                </div>
            </div>

            <section class="content-panel" id="agenda">
                <div class="panel-head">
                    <h2>Agenda do broker</h2>
                    <span class="panel-note">Expert XP 2026 · Bolsa</span>
                </div>
                <div class="agenda-legend" aria-label="Legenda da agenda">
                    <span class="legend-item"><span class="legend-dot session"></span> Sessões</span>
                    <span class="legend-item"><span class="legend-dot av"></span> Alta Vista</span>
                </div>

                <div class="panel-body">
                    @foreach ($agenda as $day)
                        @php
                            $slots = [];
                            foreach ($day['sessions'] as $session) {
                                $slotKey = $session['time'] . '|' . ($session['time_end'] ?? '');
                                if (! isset($slots[$slotKey])) {
                                    $slots[$slotKey] = [
                                        'time' => $session['time'],
                                        'time_end' => $session['time_end'] ?? null,
                                        'sessions' => [],
                                    ];
                                }
                                $slots[$slotKey]['sessions'][] = $session;
                            }
                            $slots = array_values($slots);
                        @endphp

                        <div class="day-block" id="{{ $day['id'] }}" data-day="{{ $day['id'] }}">
                            <div class="day-block-head">
                                <h3>{{ $day['weekday'] }} · {{ $day['date'] }}</h3>
                                <span>{{ $day['day_code'] }}</span>
                            </div>

                            @if (count($slots) > 0)
                                <div class="slot-list">
                                    @foreach ($slots as $slot)
                                        <div class="slot-row" data-time="{{ $slot['time'] }}">
                                            <div class="slot-time">
                                                {{ $slot['time'] }}
                                                @if (! empty($slot['time_end']))
                                                    <small>até {{ $slot['time_end'] }}</small>
                                                @endif
                                            </div>
                                            <div class="slot-items">
                                                @foreach ($slot['sessions'] as $session)
                                                    @php
                                                        $category = ! empty($session['meeting']) ? 'meeting' : (! empty($session['av']) ? 'av' : 'session');
                                                    @endphp
                                                    <article class="session {{ $category }}" data-category="{{ $category }}">
                                                        <div class="session-top">
                                                            <span class="session-type">{{ $session['type'] }}</span>
                                                            @if ($category === 'av')
                                                                <span class="session-tag">Alta Vista</span>
                                                            @elseif ($category === 'meeting')
                                                                <span class="session-tag meeting">Reunião</span>
                                                            @endif
                                                        </div>
                                                        <h4 class="session-title">{{ $session['title'] }}</h4>
                                                        <p class="session-speakers">{{ $session['speakers'] }}</p>
                                                    </article>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="day-empty" data-day-free="true">
                                    <i class="bi bi-calendar-check"></i>
                                    Livre — networking e pendências.
                                </div>
                            @endif
                        </div>
                    @endforeach

                    <div class="filter-empty hide" id="agendaFilterEmpty">
                        <i class="bi bi-funnel"></i>
                        Nenhuma sessão encontrada com os filtros selecionados.
                    </div>
                </div>
            </section>

            <section class="content-panel photos-section" id="fotos">
                <div class="panel-head">
                    <h2>Fotos do evento</h2>
                    <span class="panel-note">SharePoint</span>
                </div>
                <div class="panel-body">
                    <div class="upload-block">
                        <div class="upload-block-head">
                            <h3>Fotos disponíveis no SharePoint</h3>
                            <p>Envie e consulte as imagens do evento na pasta do dia correspondente. As fotos ficam disponíveis apenas nesses links.</p>
                        </div>
                        <div class="upload-grid">
                            @foreach ($photoUploads as $upload)
                                <a
                                    class="upload-card"
                                    href="{{ $upload['url'] }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >
                                    <span class="upload-card-label">{{ $upload['date'] }}</span>
                                    <p class="upload-card-title">{{ $upload['title'] }}</p>
                                    <p class="upload-card-meta">{{ $upload['weekday'] }}</p>
                                    <span class="upload-card-action">Abrir pasta no SharePoint <i class="bi bi-box-arrow-up-right"></i></span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <footer>
        <div class="container px-3">
            Página interna · Alta Vista Investimentos · <a href="/interno/paginas">Índice de páginas</a>
        </div>
    </footer>

    <script>
        (function () {
            const filterButtons = Array.from(document.querySelectorAll('.filter-btn'));
            const dayBlocks = Array.from(document.querySelectorAll('.day-block[data-day]'));
            const sessions = Array.from(document.querySelectorAll('.session[data-category]'));
            const agendaShownCount = document.getElementById('agendaShownCount');
            const agendaTotalCount = document.getElementById('agendaTotalCount');
            const agendaFilterEmpty = document.getElementById('agendaFilterEmpty');
            const clearAgendaFilters = document.getElementById('clearAgendaFilters');

            const filters = { day: 'all', type: 'all' };

            function setPressed(group, value) {
                filterButtons
                    .filter((btn) => btn.dataset.filterGroup === group)
                    .forEach((btn) => {
                        btn.setAttribute('aria-pressed', btn.dataset.filter === value ? 'true' : 'false');
                    });
            }

            function applyAgendaFilters() {
                let shown = 0;
                let anyDayVisible = false;

                dayBlocks.forEach((day) => {
                    const dayMatch = filters.day === 'all' || filters.day === day.dataset.day;
                    const slotRows = Array.from(day.querySelectorAll('.slot-row'));
                    const dayFree = day.querySelector('[data-day-free="true"]');

                    if (!dayMatch) {
                        day.classList.add('hide');
                        return;
                    }

                    if (dayFree) {
                        const showFree = filters.type === 'all';
                        dayFree.classList.toggle('hide', !showFree);
                        day.classList.toggle('hide', !showFree);
                        if (showFree) anyDayVisible = true;
                        return;
                    }

                    let dayVisible = false;

                    slotRows.forEach((row) => {
                        const rowSessions = Array.from(row.querySelectorAll('.session[data-category]'));
                        let rowVisible = false;

                        rowSessions.forEach((session) => {
                            const typeMatch = filters.type === 'all' || filters.type === session.dataset.category;
                            session.classList.toggle('hide', !typeMatch);
                            if (typeMatch) {
                                rowVisible = true;
                                shown += 1;
                            }
                        });

                        row.classList.toggle('hide', !rowVisible);
                        if (rowVisible) dayVisible = true;
                    });

                    day.classList.toggle('hide', !dayVisible);
                    if (dayVisible) anyDayVisible = true;
                });

                if (agendaShownCount) agendaShownCount.textContent = String(shown);
                if (agendaTotalCount) agendaTotalCount.textContent = String(sessions.length);
                if (agendaFilterEmpty) agendaFilterEmpty.classList.toggle('hide', anyDayVisible);
            }

            filterButtons.forEach((btn) => {
                btn.addEventListener('click', () => {
                    const group = btn.dataset.filterGroup;
                    if (group !== 'day' && group !== 'type') return;
                    filters[group] = btn.dataset.filter;
                    setPressed(group, btn.dataset.filter);
                    applyAgendaFilters();
                });
            });

            if (clearAgendaFilters) {
                clearAgendaFilters.addEventListener('click', () => {
                    filters.day = 'all';
                    filters.type = 'all';
                    setPressed('day', 'all');
                    setPressed('type', 'all');
                    applyAgendaFilters();
                });
            }

            setPressed('day', 'all');
            setPressed('type', 'all');
            applyAgendaFilters();
        })();
    </script>
</body>
</html>
