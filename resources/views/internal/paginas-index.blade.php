<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Índice de páginas – Alta Vista</title>
    <style>
        :root{
            --bg:#0b1220;
            --card:#0f1a33;
            --muted:#94a3b8;
            --text:#e2e8f0;
            --accent:#c9a227;
            --line:rgba(148,163,184,.2);
            --link:#fbd38d;
        }
        *{box-sizing:border-box}
        body{
            margin:0;
            font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Arial, "Apple Color Emoji","Segoe UI Emoji";
            background: radial-gradient(1200px 600px at 20% 0%, rgba(201,162,39,.18), transparent 60%),
                        radial-gradient(900px 500px at 80% 10%, rgba(251,211,141,.10), transparent 55%),
                        var(--bg);
            color:var(--text);
        }
        header{
            padding:28px 18px 14px 18px;
            max-width:1100px;
            margin:0 auto;
        }
        .kicker{
            display:inline-block;
            padding:4px 10px;
            border:1px solid var(--line);
            border-radius:999px;
            color:var(--accent);
            font-weight:700;
            letter-spacing:.12em;
            text-transform:uppercase;
            font-size:11px;
            background:rgba(15,26,51,.55);
        }
        h1{
            margin:12px 0 6px 0;
            font-size:22px;
            line-height:1.25;
        }
        p{
            margin:0;
            color:var(--muted);
            font-size:13px;
            line-height:1.6;
        }
        main{
            max-width:1100px;
            margin:0 auto;
            padding:14px 18px 34px 18px;
            display:grid;
            gap:14px;
        }
        .section{
            background:linear-gradient(180deg, rgba(15,26,51,.9), rgba(15,26,51,.7));
            border:1px solid var(--line);
            border-radius:16px;
            overflow:hidden;
        }
        .section-header{
            padding:14px 16px;
            border-bottom:1px solid var(--line);
            display:flex;
            align-items:baseline;
            justify-content:space-between;
            gap:10px;
        }
        .section-title{
            margin:0;
            font-size:14px;
            letter-spacing:.02em;
        }
        .section-note{
            margin:0;
            color:var(--muted);
            font-size:12px;
            white-space:nowrap;
        }
        table{
            width:100%;
            border-collapse:collapse;
        }
        th, td{
            padding:11px 16px;
            border-bottom:1px solid var(--line);
            vertical-align:top;
            font-size:13px;
        }
        th{
            color:var(--muted);
            font-weight:600;
            text-transform:uppercase;
            letter-spacing:.08em;
            font-size:11px;
            background:rgba(11,18,32,.35);
        }
        tr:last-child td{border-bottom:none}
        a{
            color:var(--link);
            text-decoration:none;
        }
        a:hover{ text-decoration:underline; }
        .path{
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            color:rgba(226,232,240,.88);
            font-size:12px;
        }
        .pill{
            display:inline-block;
            margin-left:8px;
            padding:2px 8px;
            border-radius:999px;
            border:1px solid var(--line);
            color:var(--muted);
            font-size:11px;
            background:rgba(11,18,32,.35);
        }
        footer{
            max-width:1100px;
            margin:0 auto;
            padding:0 18px 26px 18px;
            color:var(--muted);
            font-size:12px;
        }
        .controls{
            max-width:1100px;
            margin:0 auto;
            padding:0 18px 10px 18px;
            display:flex;
            gap:10px;
            flex-wrap:wrap;
            align-items:center;
        }
        .control-label{
            font-size:12px;
            color:var(--muted);
            margin-right:2px;
        }
        .segmented{
            display:flex;
            flex-wrap:wrap;
            gap:8px;
        }
        .filter-btn{
            appearance:none;
            border:1px solid var(--line);
            background:rgba(15,26,51,.55);
            color:var(--text);
            padding:6px 10px;
            border-radius:999px;
            font-size:12px;
            cursor:pointer;
            line-height:1;
        }
        .filter-btn[aria-pressed="true"]{
            border-color:rgba(201,162,39,.55);
            box-shadow:0 0 0 2px rgba(201,162,39,.18) inset;
            color:var(--link);
        }
        .filter-meta{
            margin-left:auto;
            display:flex;
            gap:10px;
            align-items:center;
            color:var(--muted);
            font-size:12px;
        }
        .hide{ display:none !important; }
    </style>
</head>
<body>
    <header>
        <span class="kicker">Índice interno</span>
        <h1>Todas as páginas do projeto (rotas públicas)</h1>
        <p>Lista criada a partir do <span class="path">routes/web.php</span>. Use para navegar e validar páginas rapidamente.</p>
    </header>

    <div class="controls">
        <span class="control-label">Filtrar por tipo:</span>
        <div class="segmented" role="group" aria-label="Filtro por tipo">
            <button class="filter-btn" type="button" data-filter="all" aria-pressed="true">Todos</button>
            <button class="filter-btn" type="button" data-filter="landing" aria-pressed="false">Landing</button>
            <button class="filter-btn" type="button" data-filter="conteudos" aria-pressed="false">Conteúdos</button>
            <button class="filter-btn" type="button" data-filter="parceiros" aria-pressed="false">Parceiros</button>
            <button class="filter-btn" type="button" data-filter="eventos" aria-pressed="false">Eventos</button>
            <button class="filter-btn" type="button" data-filter="consorcio" aria-pressed="false">Consórcio</button>
            <button class="filter-btn" type="button" data-filter="institucional" aria-pressed="false">Institucional</button>
            <button class="filter-btn" type="button" data-filter="artes" aria-pressed="false">Artes</button>
            <button class="filter-btn" type="button" data-filter="interno" aria-pressed="false">Interno</button>
        </div>
        <div class="filter-meta">
            <span>Exibindo: <strong id="shownCount">0</strong></span>
            <span>Total: <strong id="totalCount">0</strong></span>
        </div>
    </div>

    <main>
        <section class="section">
            <div class="section-header">
                <h2 class="section-title">Landings</h2>
                <p class="section-note">/autismo, /pilotos, /evento-*, etc.</p>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Nome (inteiro)</th>
                        <th>URL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-type="landing"><td>Autismo <span class="pill">landing</span></td><td><a href="/autismo" target="_blank" rel="noopener">/autismo</a></td></tr>
                    <tr data-type="landing"><td>Pilotos <span class="pill">landing</span></td><td><a href="/pilotos" target="_blank" rel="noopener">/pilotos</a></td></tr>
                    <tr data-type="landing"><td>Obrigado (genérico) <span class="pill">landing</span></td><td><a href="/obrigado" target="_blank" rel="noopener">/obrigado</a></td></tr>

                    <tr data-type="conteudos"><td>Previdência XP <span class="pill">conteúdos</span></td><td><a href="/previdencia-xp" target="_blank" rel="noopener">/previdencia-xp</a></td></tr>
                    <tr data-type="conteudos"><td>Curso Finanças <span class="pill">conteúdos</span></td><td><a href="/curso-financas" target="_blank" rel="noopener">/curso-financas</a></td></tr>
                    <tr data-type="conteudos"><td>IRPFM – Webinar <span class="pill">conteúdos</span></td><td><a href="/irpfm-webinar" target="_blank" rel="noopener">/irpfm-webinar</a></td></tr>
                    <tr data-type="conteudos"><td>IRPFM – Obrigado <span class="pill">conteúdos</span></td><td><a href="/irpfm-webinar/obrigado" target="_blank" rel="noopener">/irpfm-webinar/obrigado</a></td></tr>

                    <tr data-type="parceiros"><td>Palova Amisses <span class="pill">parceiros</span></td><td><a href="/palova-amisses" target="_blank" rel="noopener">/palova-amisses</a></td></tr>
                    <tr data-type="parceiros"><td>Palova Amisses – Obrigado <span class="pill">parceiros</span></td><td><a href="/palova-amisses/obrigado" target="_blank" rel="noopener">/palova-amisses/obrigado</a></td></tr>
                    <tr data-type="parceiros"><td>JRB Assessoria <span class="pill">parceiros</span></td><td><a href="/jrb-assessoria" target="_blank" rel="noopener">/jrb-assessoria</a></td></tr>
                    <tr data-type="parceiros"><td>JRB Assessoria – Obrigado <span class="pill">parceiros</span></td><td><a href="/jrb-assessoria/obrigado" target="_blank" rel="noopener">/jrb-assessoria/obrigado</a></td></tr>
                    <tr data-type="parceiros"><td>Ekis Prevent <span class="pill">parceiros</span></td><td><a href="/ekis-prevent" target="_blank" rel="noopener">/ekis-prevent</a></td></tr>
                    <tr data-type="parceiros"><td>Ekis Prevent – Obrigado <span class="pill">parceiros</span></td><td><a href="/ekis-prevent/obrigado" target="_blank" rel="noopener">/ekis-prevent/obrigado</a></td></tr>
                    <tr data-type="parceiros"><td>NQ Contábil <span class="pill">parceiros</span></td><td><a href="/nq-contabil" target="_blank" rel="noopener">/nq-contabil</a></td></tr>
                    <tr data-type="parceiros"><td>NQ Contábil – Obrigado <span class="pill">parceiros</span></td><td><a href="/nq-contabil/obrigado" target="_blank" rel="noopener">/nq-contabil/obrigado</a></td></tr>

                    <tr data-type="eventos"><td>Evento – Impacto Social <span class="pill">eventos</span></td><td><a href="/evento-impacto-social" target="_blank" rel="noopener">/evento-impacto-social</a></td></tr>
                    <tr data-type="eventos"><td>Evento – Impacto Social – Obrigado <span class="pill">eventos</span></td><td><a href="/evento-impacto-social/obrigado" target="_blank" rel="noopener">/evento-impacto-social/obrigado</a></td></tr>
                    <tr data-type="consorcio"><td>Consórcio Week <span class="pill">consórcio</span></td><td><a href="/consorcio-week" target="_blank" rel="noopener">/consorcio-week</a></td></tr>
                    <tr data-type="eventos"><td>Evento – Verde Cedro II <span class="pill">eventos</span></td><td><a href="/evento-verde-cedro-ii" target="_blank" rel="noopener">/evento-verde-cedro-ii</a></td></tr>
                    <tr data-type="eventos"><td>Evento – Verde Cedro II – Obrigado <span class="pill">eventos</span></td><td><a href="/evento-verde-cedro-ii/obrigado" target="_blank" rel="noopener">/evento-verde-cedro-ii/obrigado</a></td></tr>
                    <tr data-type="eventos"><td>Evento – Café Verde Agro <span class="pill">eventos</span></td><td><a href="/evento-cafe-verde-agro" target="_blank" rel="noopener">/evento-cafe-verde-agro</a></td></tr>
                    <tr data-type="eventos"><td>Evento – Café Verde Agro – Obrigado <span class="pill">eventos</span></td><td><a href="/evento-cafe-verde-agro/obrigado" target="_blank" rel="noopener">/evento-cafe-verde-agro/obrigado</a></td></tr>

                    <tr data-type="institucional"><td>Política de Privacidade <span class="pill">institucional</span></td><td><a href="/politica-privacidade" target="_blank" rel="noopener">/politica-privacidade</a></td></tr>
                    <tr data-type="institucional"><td>Termos e Condições <span class="pill">institucional</span></td><td><a href="/termos-condicoes" target="_blank" rel="noopener">/termos-condicoes</a></td></tr>
                    <tr data-type="institucional"><td>Pesquisa com clientes <span class="pill">institucional</span></td><td><a href="/pesquisa-clientes" target="_blank" rel="noopener">/pesquisa-clientes</a></td></tr>
                </tbody>
            </table>
        </section>

        <section class="section">
            <div class="section-header">
                <h2 class="section-title">Artes</h2>
                <p class="section-note">páginas de banners/preview</p>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Nome (inteiro)</th>
                        <th>URL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-type="artes"><td>Artes – Índice <span class="pill">artes</span></td><td><a href="/artes" target="_blank" rel="noopener">/artes</a></td></tr>
                    <tr data-type="artes"><td>Banner institucional 01 <span class="pill">artes</span></td><td><a href="/artes/banner-01" target="_blank" rel="noopener">/artes/banner-01</a></td></tr>
                    <tr data-type="artes"><td>Banner institucional 02 <span class="pill">artes</span></td><td><a href="/artes/banner-02" target="_blank" rel="noopener">/artes/banner-02</a></td></tr>
                    <tr data-type="artes"><td>Banner institucional 1600x500 <span class="pill">artes</span></td><td><a href="/artes/banner-institucional-1600x500" target="_blank" rel="noopener">/artes/banner-institucional-1600x500</a></td></tr>
                    <tr data-type="artes"><td>Banner institucional 768x500 <span class="pill">artes</span></td><td><a href="/artes/banner-institucional-768x500" target="_blank" rel="noopener">/artes/banner-institucional-768x500</a></td></tr>
                    <tr data-type="artes"><td>Banner institucional 440x500 <span class="pill">artes</span></td><td><a href="/artes/banner-institucional-440x500" target="_blank" rel="noopener">/artes/banner-institucional-440x500</a></td></tr>
                    <tr data-type="artes"><td>Morning Call 01 <span class="pill">artes</span></td><td><a href="/artes/morning-call-01" target="_blank" rel="noopener">/artes/morning-call-01</a></td></tr>
                    <tr data-type="artes"><td>Morning Call 02 <span class="pill">artes</span></td><td><a href="/artes/morning-call-02" target="_blank" rel="noopener">/artes/morning-call-02</a></td></tr>
                    <tr data-type="artes"><td>Morning Call 03 (790x1080) <span class="pill">artes</span></td><td><a href="/artes/morning-call-03" target="_blank" rel="noopener">/artes/morning-call-03</a></td></tr>
                    <tr data-type="artes"><td>Conteúdo educacional 01 (790x1080) <span class="pill">artes</span></td><td><a href="/artes/conteudo-educacional-01" target="_blank" rel="noopener">/artes/conteudo-educacional-01</a></td></tr>
                    <tr data-type="artes"><td>Conteúdo educacional 02 (790x1080) <span class="pill">artes</span></td><td><a href="/artes/conteudo-educacional-02" target="_blank" rel="noopener">/artes/conteudo-educacional-02</a></td></tr>
                    <tr data-type="artes"><td>Conteúdo educacional 03 (790x1080) <span class="pill">artes</span></td><td><a href="/artes/conteudo-educacional-03" target="_blank" rel="noopener">/artes/conteudo-educacional-03</a></td></tr>
                    <tr data-type="artes"><td>Live – Verde Cedro II (790x1080) <span class="pill">artes</span></td><td><a href="/artes/evento-verde-cedro-ii-01" target="_blank" rel="noopener">/artes/evento-verde-cedro-ii-01</a></td></tr>
                </tbody>
            </table>
        </section>

        <section class="section">
            <div class="section-header">
                <h2 class="section-title">Interno</h2>
                <p class="section-note">fluxos de solicitação</p>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Nome (inteiro)</th>
                        <th>URL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-type="interno"><td>Solicitação de eventos <span class="pill">interno</span></td><td><a href="/interno/solicitacao-eventos" target="_blank" rel="noopener">/interno/solicitacao-eventos</a></td></tr>
                    <tr data-type="interno"><td>Solicitação de eventos – Obrigado <span class="pill">interno</span></td><td><a href="/interno/solicitacao-eventos/obrigado" target="_blank" rel="noopener">/interno/solicitacao-eventos/obrigado</a></td></tr>
                </tbody>
            </table>
        </section>
    </main>

    <footer>
        Dica: para não indexar publicamente, deixe esta rota apenas em ambiente interno.
    </footer>

    <script>
        (function () {
            const filterButtons = Array.from(document.querySelectorAll('.filter-btn'));
            const rows = Array.from(document.querySelectorAll('tr[data-type]'));
            const sections = Array.from(document.querySelectorAll('section.section'));
            const totalCountEl = document.getElementById('totalCount');
            const shownCountEl = document.getElementById('shownCount');

            function setPressed(activeFilter) {
                filterButtons.forEach((btn) => {
                    const isActive = btn.dataset.filter === activeFilter;
                    btn.setAttribute('aria-pressed', isActive ? 'true' : 'false');
                });
            }

            function updateCounts() {
                const shown = rows.filter((r) => !r.classList.contains('hide')).length;
                shownCountEl.textContent = String(shown);
            }

            function updateSectionsVisibility() {
                sections.forEach((section) => {
                    const sectionRows = Array.from(section.querySelectorAll('tr[data-type]'));
                    const anyVisible = sectionRows.some((r) => !r.classList.contains('hide'));
                    section.classList.toggle('hide', !anyVisible);
                });
            }

            function applyFilter(filter) {
                rows.forEach((row) => {
                    const type = row.dataset.type;
                    const show = filter === 'all' ? true : type === filter;
                    row.classList.toggle('hide', !show);
                });
                setPressed(filter);
                updateCounts();
                updateSectionsVisibility();
            }

            totalCountEl.textContent = String(rows.length);
            applyFilter('all');

            filterButtons.forEach((btn) => {
                btn.addEventListener('click', () => applyFilter(btn.dataset.filter));
            });
        })();
    </script>
</body>
</html>

