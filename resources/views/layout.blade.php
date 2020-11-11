<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Library</title>

    <link href="/css/app.css" rel="stylesheet">

</head>
<body>


<div id="app">

    <navigation></navigation>

    @yield('content')

</div>

<script type="text/javascript">
    window.csrfToken = '{{ csrf_token() }}';
</script>

<script type="text/javascript" src="/js/app.js"> /* minified global js, plugins,... */</script>

@yield('js')


</body>
</html>
