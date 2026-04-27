<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="/img/favicon-96x96.png">
  <title>Ponto de Vista — Acesso | Alta Vista</title>
  <meta name="description" content="Acesse o Ponto de Vista na Trade Insights: conteúdos, morning calls, lives e a leitura da equipe da Alta Vista.">
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
      padding: 24px 24px 28px;
    }
    .intro { font-size: 15px; color: #4a5568; margin-bottom: 20px; }
    .actions {
      margin-top: 20px;
      text-align: center;
    }
    .btn {
      display: inline-block;
      padding: 12px 28px;
      background: #c9a227;
      color: #0a1628;
      text-decoration: none;
      font-size: 14px;
      font-weight: bold;
      border-radius: 999px;
      letter-spacing: 0.5px;
      text-transform: uppercase;
    }
    .back {
      display: block;
      margin-top: 18px;
      font-size: 14px;
      color: #718096;
    }
    .back a { color: #c9a227; }
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
      <h1>Acesso à plataforma</h1>
      <p>Conteúdos, morning calls, lives e muito mais</p>
    </header>
    <main>
      @php
        $pontoDeVistaUrl = 'https://ponto-de-vista.tradeinsights.com/plano/c1c1495c-2229-4baa-a526-8a11585d61fd';
      @endphp
      <p class="intro">
        O cadastro e o acesso à plataforma Ponto de Vista são feitos no ambiente da Trade Insights. Toque no botão abaixo para continuar. Se preferir, fale com o seu assessor da Alta Vista.
      </p>
      <div class="actions" style="margin-top:0;">
        <a class="btn" href="{{ $pontoDeVistaUrl }}" target="_blank" rel="noopener noreferrer">Acessar o Ponto de Vista</a>
      </div>
      <p class="intro" style="font-size: 14px; margin-top: 16px; margin-bottom: 0;">
        <a href="{{ $pontoDeVistaUrl }}" target="_blank" rel="noopener noreferrer" style="color: #2b6cb0; word-break: break-all;">{{ $pontoDeVistaUrl }}</a>
      </p>
      <div class="actions">
        <a class="btn" style="background:#e2e8f0; color:#0a1628;" href="https://wa.me/5511966204332?text=Ol%C3%A1%2C%20gostaria%20de%20falar%20com%20meu%20assessor%20sobre%20o%20Ponto%20de%20Vista." target="_blank" rel="noopener noreferrer">Falar no WhatsApp</a>
        <p class="back"><a href="{{ url('/newsletter') }}">← Voltar às edições da newsletter</a></p>
      </div>
    </main>
    <footer>
      Alta Vista Investimentos — Assessoria de Investimentos
    </footer>
  </div>
</body>
</html>
