<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ $meta['title'] }}</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('apresentacoes/css/growth-alta-vista.css') }}">
  <script>
    window.PRESENTATION_CONFIG = {
      id: @json($slug),
      storageKey: @json('av-presentation:' . $slug),
      fields: @json($fields),
      hiddenSlides: @json($hiddenSlides),
      contentUrl: @json(route('apresentacoes.show.content', $slug)),
      saveUrl: @json(route('apresentacoes.show.content.update', $slug)),
      editMode: @json($editMode),
    };
  </script>
</head>
<body>
  @include('apresentacoes.growth-alta-vista.partials.body')

  <script src="{{ asset('apresentacoes/js/presentation-editor.js') }}"></script>
  <script src="{{ asset('apresentacoes/js/presentation-content.js') }}"></script>
  <script src="{{ asset('apresentacoes/js/presentation-economics.js') }}"></script>
  <script src="{{ asset('apresentacoes/js/presentation-pl.js') }}"></script>
  <script src="{{ asset('apresentacoes/js/presentation-dre.js') }}"></script>
  <script src="{{ asset('apresentacoes/js/presentation-cac-ltv.js') }}"></script>
  <script src="{{ asset('apresentacoes/js/presentation-nav.js') }}"></script>
</body>
</html>
