<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página teste – Alta Vista</title>
    <style>
        body{margin:0;font-family:Arial, sans-serif;background:#0a1628;color:#edf2f7}
        .wrap{max-width:820px;margin:0 auto;padding:40px 18px}
        .badge{display:inline-block;background:#faf6eb;color:#c9a227;font-size:11px;font-weight:bold;letter-spacing:1.6px;text-transform:uppercase;padding:4px 12px;border-radius:999px}
        h1{margin:14px 0 8px 0;font-size:22px;line-height:1.3}
        p{margin:0;color:#cbd5e1;line-height:1.7}
        a{color:#fbd38d}
        .card{margin-top:18px;background:rgba(255,255,255,.06);border:1px solid rgba(226,232,240,.18);border-radius:14px;padding:16px}
        .muted{color:#94a3b8;font-size:12px}
        .ok{display:inline-block;margin-top:10px;padding:6px 12px;border-radius:999px;background:rgba(72,187,120,.15);color:#9ae6b4;font-size:12px;font-weight:bold}
    </style>
</head>
<body>
    <div class="wrap">
        <span class="badge">Teste</span>
        <h1>Página teste</h1>
        <p>Ambiente local funcionando. Esta rota foi criada para validar o setup do projeto.</p>
        <span class="ok">OK — Laravel + Vite</span>
        <div class="card">
            <p class="muted">Gerada em {{ now()->format('d/m/Y H:i:s') }}</p>
            <p class="muted" style="margin-top:8px">Índice interno: <a href="/interno/paginas">/interno/paginas</a></p>
        </div>
    </div>
</body>
</html>
