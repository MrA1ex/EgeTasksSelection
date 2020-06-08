<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
    @include('components.top-menu')
    <div class="main-content">
        @section('content')
        @show
    </div>
    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
