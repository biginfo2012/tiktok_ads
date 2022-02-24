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

    {{--        <!-- Styles -->--}}
    {{--        <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}

    {{--        <!-- Scripts -->--}}
    {{--        <script src="{{ asset('js/app.js') }}" defer></script>--}}

    <link href="{{asset('')}}css/chunk-00dd8346.ea3e1fcb.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-00f21421.bdefae2e.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-01693b7c.b66cbfb4.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-047176c8.bc77ca41.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-048e7a32.8670c950.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-0b10bb12.b28ace3b.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-0c6c1920.5b7250d2.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-0ec9e1ad.3c38de71.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-0f47424c.bbfd9e9b.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-179c848b.bb7f127e.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-18946720.79023d22.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-1c1feffb.2a3a9f4f.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-2890f7e4.1d5e40c8.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-2d99355c.1bd177b6.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-31601d84.1c68ff52.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-393f2cca.82835e98.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-3c6e3d14.fd2709f6.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-4082d284.4c0087a8.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-441c02bd.7a7513c0.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-461fb678.54b1deb1.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-4679fac4.adc8081c.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-46a0485d.1f953b46.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-4ac20c0a.8297d3b8.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-522cf5c8.1b9d27f1.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-5953679a.14270c52.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-5a6e8468.f4da9e9b.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-5bcffdea.6f4cf77a.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-5f46c9d2.4cb79e8d.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-6081c6b8.1762cf56.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-65ef2af7.fbf0cf24.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-6b87f7e3.fdd524db.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-6bf62725.a4d2bd54.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-6ee9b4fa.78bbe7a4.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-768b06e0.72bdacbd.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-7829b47c.18ac9c4e.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-7b019d48.24ff32b7.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-7dbdcb26.c6bf86a2.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-801f62d4.9742274c.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-894dacd2.02dc3e83.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-9caf9dec.013633c6.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-a8c6bf84.5309a6c8.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-ab92835c.57416ff6.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-adf8f24e.83c5eb35.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-b1c5b542.1c041436.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-cb7a311e.ec1661b4.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-ce6ae636.d1ee794a.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-f7efd4fc.e32c330e.css" rel="stylesheet">
    <link href="{{asset('')}}css/chunk-vendors.b9317e8b.css" rel="stylesheet">
    <link href="{{asset('')}}css/app.c3330493.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="main-container">
            {{ $slot }}
        </div><!----><!---->
    </div>
</body>
</html>
