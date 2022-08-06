<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="cache-control" content="no-cache,no-store, must-revalidate">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta name="keywords" content="皮皮广告">
    <meta name="referrer" content="never">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link href="{{asset('')}}css/chunk-1a6f22ef.bfe5e99f.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-16ea6b5e.20c5186a.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-60e61efc.8572b42f.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-768b06e0.72bdacbd.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-aba9fea0.b29a2270.css" rel="stylesheet">

    <link href="{{asset('')}}css/chunk-1c1feffb.2a3a9f4f.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-3c6e3d14.fd2709f6.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-6b87f7e3.fdd524db.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-7b019d48.24ff32b7.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-048e7a32.8670c950.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-65ef2af7.fbf0cf24.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-179c848b.bb7f127e.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-441c02bd.7a7513c0.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-801f62d4.9742274c.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-4679fac4.adc8081c.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-6081c6b8.1762cf56.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-f7efd4fc.e32c330e.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-vendors.b9317e8b.css" rel="stylesheet">
    <link href="{{asset('')}}css/app.c3330493.css" rel="stylesheet">

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/bootstrape/bootstrap.js') }}"></script>
    <script src="{{ asset('js/common.js') }}"></script>
    <script src="{{ asset('js/flatpickr.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.js') }}"></script>
</head>
<body>
    <div id="app">
        <div class="main-container">
            {{ $slot }}
        </div><!----><!---->
    </div>
</body>
</html>
