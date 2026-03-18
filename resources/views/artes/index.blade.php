<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Artes para rede social – Alta Vista</title>
  <style>
    @font-face {
      font-family: 'GT America';
      src: url('/fonts/GT-America-LCGV-Standard-Regular/GT-America-LCGV-Standard-Regular.ttf') format('truetype');
      font-weight: 400;
      font-style: normal;
    }
    @font-face {
      font-family: 'GT America';
      src: url('/fonts/GT-America-LCGV-Standard-Regular/GT-America-LCGV-Standard-Medium.ttf') format('truetype');
      font-weight: 500;
      font-style: normal;
    }
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      min-height: 100vh;
      background: #0a1628;
      font-family: 'GT America', Arial, Helvetica, sans-serif;
      color: #edf2f7;
      padding: 32px 24px;
    }
    .wrap {
      max-width: 720px;
      margin: 0 auto;
    }
    h1 {
      font-size: 22px;
      font-weight: 700;
      color: #edf2f7;
      margin-bottom: 8px;
    }
    .sub {
      font-size: 14px;
      color: #a0aec0;
      margin-bottom: 32px;
    }
    .section-title {
      font-size: 14px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1.6px;
      color: #a0aec0;
      margin: 28px 0 10px;
    }
    .list {
      display: flex;
      flex-direction: column;
      gap: 24px;
    }
    .card {
      background: rgba(26, 32, 44, 0.8);
      border: 1px solid #2d3748;
      border-radius: 14px;
      padding: 18px 22px;
      min-height: 120px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 24px;
      flex-wrap: nowrap;
    }
    .card-info {
      flex: 1;
      min-width: 0;
    }
    .card-info h2 {
      font-size: 16px;
      font-weight: 700;
      color: #edf2f7;
      margin-bottom: 4px;
      line-height: 1.3;
    }
    .card-info .size {
      font-size: 12px;
      color: #718096;
      margin-bottom: 6px;
    }
    .card-info p {
      font-size: 13px;
      color: #a0aec0;
      line-height: 1.5;
    }
    .card-actions {
      flex-shrink: 0;
    }
    .card-actions a {
      display: inline-block;
      padding: 10px 20px;
      background: #c9a227;
      color: #0a1628;
      font-size: 12px;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      text-decoration: none;
      border-radius: 8px;
    }
    .card-actions a:hover {
      background: #d4af37;
    }
  </style>
</head>
<body>
  <div class="wrap">
    <h1>Artes para rede social</h1>
    <p class="sub">Banners institucionais e thumbnails Morning Call. Abra o modelo, defina largura e altura e exporte em PNG.</p>
    <h2 class="section-title">Banners institucionais</h2>
    <ul class="list">
      <li class="card">
        <div class="card-info">
          <h2>Banner 1 – Institucional escuro</h2>
          <p class="size">Tamanho original: 1080 × 1080 (quadrado)</p>
          <p>Fundo azul escuro, logo centralizada, tagline em dourado. Ideal para feed e stories.</p>
        </div>
        <div class="card-actions">
          <a href="{{ url('/artes/banner-01') }}">Abrir e exportar</a>
        </div>
      </li>
      <li class="card">
        <div class="card-info">
          <h2>Banner 2 – Institucional claro</h2>
          <p class="size">Tamanho original: 1080 × 1080 (quadrado)</p>
          <p>Fundo claro com card escuro, logo e frase. Wealth Management e planejamento patrimonial.</p>
        </div>
        <div class="card-actions">
          <a href="{{ url('/artes/banner-02') }}">Abrir e exportar</a>
        </div>
      </li>
    </ul>

    <h2 class="section-title">Thumbnails Morning Call</h2>
    <ul class="list">
      <li class="card">
        <div class="card-info">
          <h2>Morning Call 1 – Thumbnail diário</h2>
          <p class="size">Tamanho original: 1280 × 720 (16:9)</p>
          <p>Badge “Edição diária”, título Morning Call, logo. Para vídeos e redes.</p>
        </div>
        <div class="card-actions">
          <a href="{{ url('/artes/morning-call-01') }}">Abrir e exportar</a>
        </div>
      </li>
      <li class="card">
        <div class="card-info">
          <h2>Morning Call 2 – Thumbnail diário (alternativo)</h2>
          <p class="size">Tamanho original: 1280 × 720 (16:9)</p>
          <p>Faixa dourada no topo, logo no canto, “Morning Call” em destaque com “Call” em dourado.</p>
        </div>
        <div class="card-actions">
          <a href="{{ url('/artes/morning-call-02') }}">Abrir e exportar</a>
        </div>
      </li>
    </ul>
  </div>
</body>
</html>
