<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="Galeria de fotos da Expert XP 2026 — uso interno Alta Vista Investimentos.">
    <title>Expert XP 2026 — Fotos | Alta Vista (interno)</title>
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
        .stats-bar {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            background: rgba(22, 33, 62, 0.75);
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 1rem 1.25rem;
            margin-bottom: 2rem;
        }
        .stats-bar .count {
            font-size: 0.95rem;
            color: var(--muted);
        }
        .stats-bar .count strong { color: var(--gold); }
        .nav-days {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        .nav-days a {
            color: var(--text);
            text-decoration: none;
            font-size: 0.82rem;
            font-weight: 600;
            padding: 0.4rem 0.85rem;
            border-radius: 999px;
            border: 1px solid var(--line);
            background: rgba(0, 24, 69, 0.45);
            transition: border-color 0.2s, color 0.2s, background 0.2s;
        }
        .nav-days a:hover {
            color: var(--gold);
            border-color: rgba(255, 201, 113, 0.45);
            background: rgba(255, 201, 113, 0.08);
        }

        .gallery-section {
            margin-bottom: 2.5rem;
            scroll-margin-top: 1rem;
        }
        .section-head {
            display: flex;
            align-items: baseline;
            justify-content: space-between;
            gap: 1rem;
            margin-bottom: 1rem;
            padding-bottom: 0.65rem;
            border-bottom: 1px solid var(--line);
        }
        .section-head h2 {
            margin: 0;
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--gold);
        }
        .section-head span {
            font-size: 0.82rem;
            color: var(--muted);
        }

        .photo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 0.85rem;
        }
        .photo-card {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            background: var(--ink);
            border: 1px solid var(--line);
            aspect-ratio: 4 / 3;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
        }
        .photo-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.35);
            border-color: rgba(255, 201, 113, 0.35);
        }
        .photo-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }
        .photo-card .overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(0, 24, 69, 0.75) 0%, transparent 55%);
            opacity: 0;
            transition: opacity 0.2s ease;
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            padding: 0.65rem;
            gap: 0.5rem;
        }
        .photo-card:hover .overlay { opacity: 1; }
        .photo-card .overlay span {
            font-size: 0.72rem;
            color: rgba(235, 237, 242, 0.9);
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            min-width: 0;
        }
        .photo-card .overlay i {
            color: var(--gold);
            font-size: 1.1rem;
            flex-shrink: 0;
        }

        .empty-state {
            text-align: center;
            padding: 3.5rem 1.5rem;
            background: rgba(22, 33, 62, 0.6);
            border: 1px dashed rgba(255, 201, 113, 0.3);
            border-radius: 16px;
        }
        .empty-state i {
            font-size: 3rem;
            color: var(--gold);
            opacity: 0.7;
            margin-bottom: 1rem;
            display: block;
        }
        .empty-state h2 {
            font-size: 1.35rem;
            color: var(--gold);
            margin: 0 0 0.75rem;
        }
        .empty-state p {
            color: var(--muted);
            font-size: 0.95rem;
            line-height: 1.6;
            max-width: 520px;
            margin: 0 auto 1.25rem;
        }
        .path-hint {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
            font-size: 0.8rem;
            color: rgba(255, 201, 113, 0.85);
            background: rgba(0, 24, 69, 0.55);
            border: 1px solid var(--line);
            border-radius: 8px;
            padding: 0.65rem 1rem;
            display: inline-block;
            text-align: left;
        }

        .lightbox {
            position: fixed;
            inset: 0;
            z-index: 1050;
            background: rgba(0, 10, 30, 0.92);
            display: none;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }
        .lightbox.open { display: flex; }
        .lightbox-inner {
            position: relative;
            max-width: min(1100px, 96vw);
            max-height: 90vh;
            width: 100%;
        }
        .lightbox img {
            max-width: 100%;
            max-height: 82vh;
            width: auto;
            height: auto;
            display: block;
            margin: 0 auto;
            border-radius: 8px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
        }
        .lightbox-toolbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            margin-top: 0.85rem;
            flex-wrap: wrap;
        }
        .lightbox-caption {
            font-size: 0.85rem;
            color: var(--muted);
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            min-width: 0;
        }
        .lightbox-actions {
            display: flex;
            gap: 0.5rem;
            flex-shrink: 0;
        }
        .lb-btn {
            appearance: none;
            border: 1px solid var(--line);
            background: rgba(22, 33, 62, 0.9);
            color: var(--text);
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: border-color 0.2s, color 0.2s, background 0.2s;
            text-decoration: none;
        }
        .lb-btn:hover {
            color: var(--gold);
            border-color: rgba(255, 201, 113, 0.45);
            background: rgba(255, 201, 113, 0.1);
        }
        .lb-close {
            position: absolute;
            top: -2.75rem;
            right: 0;
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

        @media (max-width: 576px) {
            .photo-grid { grid-template-columns: repeat(2, 1fr); gap: 0.55rem; }
            .stats-bar { flex-direction: column; align-items: stretch; }
            .nav-days { justify-content: center; }
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
                <p class="lead">Galeria de fotos do maior festival de investimentos do mundo — compartilhamento exclusivo para o time Alta Vista.</p>
                <div class="event-meta">
                    <span class="meta-chip"><i class="bi bi-calendar3"></i> 23 a 25 de julho de 2026</span>
                    <span class="meta-chip"><i class="bi bi-geo-alt"></i> São Paulo Expo</span>
                    <span class="meta-chip"><i class="bi bi-people"></i> 16ª edição</span>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container px-3">
            @if ($totalPhotos > 0)
                <div class="stats-bar">
                    <p class="count mb-0"><strong>{{ $totalPhotos }}</strong> {{ $totalPhotos === 1 ? 'foto disponível' : 'fotos disponíveis' }}</p>
                    @if (count($gallery) > 1)
                        <nav class="nav-days" aria-label="Ir para o dia">
                            @foreach ($gallery as $section)
                                <a href="#{{ $section['id'] }}">{{ $section['title'] }}</a>
                            @endforeach
                        </nav>
                    @endif
                </div>

                @foreach ($gallery as $section)
                    <section class="gallery-section" id="{{ $section['id'] }}">
                        <div class="section-head">
                            <h2>{{ $section['title'] }}</h2>
                            <span>{{ $section['subtitle'] }} · {{ count($section['photos']) }} {{ count($section['photos']) === 1 ? 'foto' : 'fotos' }}</span>
                        </div>
                        <div class="photo-grid">
                            @foreach ($section['photos'] as $index => $photo)
                                <button
                                    type="button"
                                    class="photo-card"
                                    data-lightbox
                                    data-url="{{ $photo['url'] }}"
                                    data-name="{{ $photo['name'] }}"
                                    aria-label="Abrir foto {{ $photo['name'] }}"
                                >
                                    <img src="{{ $photo['url'] }}" alt="{{ $photo['name'] }}" loading="lazy" decoding="async">
                                    <span class="overlay">
                                        <span>{{ $photo['name'] }}</span>
                                        <i class="bi bi-arrows-fullscreen"></i>
                                    </span>
                                </button>
                            @endforeach
                        </div>
                    </section>
                @endforeach
            @else
                <div class="empty-state">
                    <i class="bi bi-images"></i>
                    <h2>Fotos em breve</h2>
                    <p>As imagens do evento serão publicadas aqui assim que estiverem disponíveis. Organize por dia ou adicione na pasta geral.</p>
                    <div class="path-hint">
                        public/img/expert-xp-2026/<br>
                        ├── dia-1/<br>
                        ├── dia-2/<br>
                        ├── dia-3/<br>
                        └── geral/
                    </div>
                </div>
            @endif
        </div>
    </main>

    <footer>
        <div class="container px-3">
            Página interna · Alta Vista Investimentos · <a href="/interno/paginas">Índice de páginas</a>
        </div>
    </footer>

    <div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="Visualização da foto">
        <div class="lightbox-inner">
            <button type="button" class="lb-btn lb-close" id="lbClose" aria-label="Fechar"><i class="bi bi-x-lg"></i></button>
            <img src="" alt="" id="lbImage">
            <div class="lightbox-toolbar">
                <span class="lightbox-caption" id="lbCaption"></span>
                <div class="lightbox-actions">
                    <button type="button" class="lb-btn" id="lbPrev" aria-label="Foto anterior"><i class="bi bi-chevron-left"></i></button>
                    <button type="button" class="lb-btn" id="lbNext" aria-label="Próxima foto"><i class="bi bi-chevron-right"></i></button>
                    <a href="#" class="lb-btn" id="lbDownload" download aria-label="Baixar foto"><i class="bi bi-download"></i></a>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function () {
            const items = Array.from(document.querySelectorAll('[data-lightbox]'));
            if (!items.length) return;

            const lightbox = document.getElementById('lightbox');
            const lbImage = document.getElementById('lbImage');
            const lbCaption = document.getElementById('lbCaption');
            const lbDownload = document.getElementById('lbDownload');
            const lbClose = document.getElementById('lbClose');
            const lbPrev = document.getElementById('lbPrev');
            const lbNext = document.getElementById('lbNext');

            let current = 0;

            function show(index) {
                current = (index + items.length) % items.length;
                const el = items[current];
                const url = el.dataset.url;
                const name = el.dataset.name;
                lbImage.src = url;
                lbImage.alt = name;
                lbCaption.textContent = name;
                lbDownload.href = url;
                lbDownload.download = name;
                lightbox.classList.add('open');
                document.body.style.overflow = 'hidden';
            }

            function hide() {
                lightbox.classList.remove('open');
                document.body.style.overflow = '';
                lbImage.src = '';
            }

            items.forEach((el, i) => el.addEventListener('click', () => show(i)));
            lbClose.addEventListener('click', hide);
            lbPrev.addEventListener('click', () => show(current - 1));
            lbNext.addEventListener('click', () => show(current + 1));

            lightbox.addEventListener('click', (e) => {
                if (e.target === lightbox) hide();
            });

            document.addEventListener('keydown', (e) => {
                if (!lightbox.classList.contains('open')) return;
                if (e.key === 'Escape') hide();
                if (e.key === 'ArrowLeft') show(current - 1);
                if (e.key === 'ArrowRight') show(current + 1);
            });
        })();
    </script>
</body>
</html>
