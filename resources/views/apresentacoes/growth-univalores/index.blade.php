<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ $meta['title'] }}</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('apresentacoes/css/growth-univalores.css') }}">
  <script>
    window.PRESENTATION_CONFIG = {
      fields: @json($fields),
      hiddenSlides: @json($hiddenSlides),
      contentUrl: @json(route('apresentacoes.growth-univalores.content')),
      saveUrl: @json(route('apresentacoes.growth-univalores.content.update')),
      editMode: @json($editMode),
    };
  </script>
</head>
<body>
  @include('apresentacoes.growth-univalores.partials.body')

  <script src="{{ asset('apresentacoes/js/presentation-editor.js') }}"></script>
  <script src="{{ asset('apresentacoes/js/presentation-content.js') }}"></script>
  <script src="{{ asset('apresentacoes/js/presentation-nav.js') }}"></script>
</body>
</html>
