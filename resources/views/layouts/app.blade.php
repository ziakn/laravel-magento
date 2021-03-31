<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('common.head')
</head>

<body class="font-sans antialiased">
    <div id="app">
        @include('common.sidebar')
        <div id="main">
            @include('common.header')
            @yield('content')
            @include('common.footer')
        </div>
    </div>
    @include('common.foot')
</body>

</html>
