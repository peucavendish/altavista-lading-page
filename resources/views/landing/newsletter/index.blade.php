@php
  /* Ao publicar nova edição: inclua rota em routes/web.php e um item aqui (mais recente primeiro). */
  $edicoes = [
    [
      'slug' => 'ponto-de-vista-17-04-2026',
      'periodo' => 'Semana de 13 a 17 de abril de 2026',
      'resumo' => 'Ormuz, PPI, S&P 7.100+, IPCA, real abaixo de R$ 5 e mercados da semana.',
    ],
    [
      'slug' => 'ponto-de-vista-11-04-2026',
      'periodo' => 'Semana de 6 a 10 de abril de 2026',
      'resumo' => 'EUA-Irã, CPI, IPCA, Ibovespa em máxima e agenda da semana.',
    ],
    [
      'slug' => 'ponto-de-vista-02-04-2026',
      'periodo' => 'Semana de 30 de março a 3 de abril de 2026',
      'resumo' => 'Oriente Médio, Fed, Brasil e mercados da semana.',
    ],
    [
      'slug' => 'ponto-de-vista-27-03-2026',
      'periodo' => 'Semana de 23 a 27 de março de 2026',
      'resumo' => 'IPCA-15, petróleo, Copom e cenário global.',
    ],
  ];
@endphp
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="/img/favicon-96x96.png">
  <title>Ponto de Vista – Edições da newsletter | Alta Vista</title>
  <meta name="description" content="Índice das edições do Ponto de Vista, newsletter semanal da Alta Vista Investimentos com a leitura dos mercados por Guilherme Jung.">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="pt_BR">
  <meta property="og:title" content="Ponto de Vista – Edições da newsletter">
  <meta property="og:description" content="Acesse todas as edições publicadas do Ponto de Vista, por Guilherme Jung, economista-chefe.">
  <meta property="og:url" content="{{ url('/newsletter') }}">
  <meta property="og:image" content="{{ url('/img/ponto-de-vista-newsletter-01-1200x630.png') }}">
  <meta property="og:image:secure_url" content="{{ url('/img/ponto-de-vista-newsletter-01-1200x630.png') }}">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Ponto de Vista – newsletter semanal, Alta Vista Investimentos">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Ponto de Vista – Edições da newsletter">
  <meta name="twitter:description" content="Acesse todas as edições publicadas do Ponto de Vista.">
  <meta name="twitter:image" content="{{ url('/img/ponto-de-vista-newsletter-01-1200x630.png') }}">
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      min-height: 100vh;
      background: #edf2f7;
      font-family: Arial, Helvetica, sans-serif;
      color: #2d3748;
      line-height: 1.5;
    }
    .shell {
      max-width: 640px;
      margin: 0 auto;
      padding: 24px 16px 48px;
    }
    header {
      background: #0a1628;
      border-radius: 20px 20px 0 0;
      padding: 32px 24px 28px;
      text-align: center;
      border-bottom: 4px solid #c9a227;
    }
    header img {
      display: block;
      margin: 0 auto 20px;
      max-width: 220px;
      width: 100%;
      height: auto;
    }
    .badge {
      display: inline-block;
      background: #faf6eb;
      color: #c9a227;
      font-size: 11px;
      font-weight: bold;
      letter-spacing: 1.6px;
      text-transform: uppercase;
      padding: 5px 14px;
      border-radius: 999px;
      margin-bottom: 14px;
    }
    header h1 {
      font-size: 22px;
      font-weight: 700;
      color: #fff;
      line-height: 1.3;
      margin-bottom: 8px;
    }
    header p {
      font-size: 13px;
      color: #cbd5e1;
    }
    main {
      background: #fff;
      border-radius: 0 0 20px 20px;
      box-shadow: 0 10px 30px rgba(10, 22, 40, 0.1);
      padding: 8px 0 24px;
    }
    .intro {
      padding: 20px 24px 8px;
      font-size: 14px;
      color: #4a5568;
    }
    ul {
      list-style: none;
    }
    li {
      border-top: 1px solid #e2e8f0;
    }
    li a {
      display: block;
      padding: 18px 24px;
      text-decoration: none;
      color: inherit;
      transition: background 0.15s ease;
    }
    li a:hover {
      background: #f7fafc;
    }
    li a:focus-visible {
      outline: 2px solid #c9a227;
      outline-offset: -2px;
    }
    .periodo {
      font-size: 15px;
      font-weight: 700;
      color: #0a1628;
      margin-bottom: 4px;
    }
    .resumo {
      font-size: 13px;
      color: #718096;
    }
    .cta {
      font-size: 12px;
      font-weight: bold;
      color: #c9a227;
      margin-top: 8px;
      letter-spacing: 0.5px;
      text-transform: uppercase;
    }
    footer {
      text-align: center;
      padding: 28px 16px 0;
      font-size: 12px;
      color: #718096;
    }
    @media (max-width: 520px) {
      header { border-radius: 0; padding: 24px 18px 22px; }
      main { border-radius: 0; }
      header h1 { font-size: 19px; }
    }
  </style>
</head>
<body>
  <div class="shell">
    <header>
      <img src="{{ asset('img/ASSINATURA-HORIZONTAIS-LIGHT-XP.png') }}" width="220" alt="Alta Vista Investimentos">
      <div class="badge">Ponto de Vista</div>
      <h1>Edições da newsletter</h1>
      <p>Por Guilherme Jung, economista-chefe</p>
    </header>
    <main>
      <p class="intro">Escolha uma edição para ler no navegador. Novas semanas são adicionadas aqui quando publicadas.</p>
      <ul>
        @foreach ($edicoes as $edicao)
          <li>
            <a href="{{ url('/newsletter/' . $edicao['slug']) }}">
              <div class="periodo">{{ $edicao['periodo'] }}</div>
              <div class="resumo">{{ $edicao['resumo'] }}</div>
              <div class="cta">Ler edição →</div>
            </a>
          </li>
        @endforeach
      </ul>
    </main>
    <footer>
      Alta Vista Investimentos — Assessoria de Investimentos
    </footer>
  </div>
</body>
</html>
