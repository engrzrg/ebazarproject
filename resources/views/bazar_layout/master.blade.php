<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>S Bazar</title>

@include('bazar_layout.css')
    @yield('css')
   
</head>
<body>
<div class="se-pre-con"></div>
<div class="container-fluid">


@include('bazar_layout.header')

@yield('body')

@include('bazar_layout.footer')
</div>


@include('bazar_layout.js')
@yield('js')
</body>
</html>
