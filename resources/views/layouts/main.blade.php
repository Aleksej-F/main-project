<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@section('title') - GeekBrains News @show</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" >

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
     <!-- Custom styles for this template -->
     <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
  <style type="text/css">/* Chart.js */
@keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}</style>
</head>
<body>

<x-user.header></x-user.header>

<div class="container-fluid">
    <div class="row">
        <x-user.sidebar></x-user.sidebar>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="album py-5 bg-light">
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </main>

    </div>
</div>


<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>