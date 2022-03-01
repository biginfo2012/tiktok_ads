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

    <link href="{{asset('')}}css/bootstrape/bootstrap.css" rel="stylesheet">
    <link href="{{asset('')}}css/flatpickr.min.css" rel="stylesheet">

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
</head>
<body>
<div id="app">
    @include('layouts.navigation')
    <div class="main-container">
        {{ $slot }}
    </div>
    @include('layouts.footer')
    <div data-v-669e8c67="" class="back-to-ceiling"
         style="right: 50px; bottom: 50px; width: 40px; height: 40px; border-radius: 4px; line-height: 45px; background: rgb(231, 234, 241);">
        <svg data-v-669e8c67="" width="16" height="16" viewBox="0 0 17 17" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
             class="Icon Icon--backToTopArrow" style="height: 16px; width: 16px;">
            <path data-v-669e8c67="" d="M12.036 15.59a1 1 0 0 1-.997.995H5.032a.996.996 0 0 1-.997-.996V8.584H1.03c-1.1 0-1.36-.633-.578-1.416L7.33.29a1.003 1.003 0 0 1 1.412 0l6.878 6.88c.782.78.523 1.415-.58 1.415h-3.004v7.004z">
            </path>
        </svg>
    </div>
</div>
</body>
</html>


