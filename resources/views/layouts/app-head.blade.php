<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="baseUrl" content="{{ url('/') }}">
    <title>
        @if(request()->url('trial'))
        Sign Up Instantly | Service Provider Pro
        @else
        @yield('title')
        @endif
    </title>
    <link rel="icon" href="{{ asset('assets/favicons/favicons-favicon-32.png') }}" sizes="32x32">
    <link rel="icon" href="{{ asset('assets/favicons/favicons-favicon-32.png') }}" sizes="57x57">
    <link rel="icon" href="{{ asset('assets/favicons/favicons-favicon-32.png') }}" sizes="76x76">
    <link rel="icon" href="{{ asset('assets/favicons/favicons-favicon-32.png') }}" sizes="96x96">
    <link rel="icon" href="{{ asset('assets/favicons/favicons-favicon-32.png') }}" sizes="128x128">

    <!-- Android -->
    <link rel="shortcut icon" sizes="196x196" href="{{ asset('assets/favicons/favicons-favicon-32.png') }}">

    <!-- iOS -->
    <link rel="apple-touch-icon" href="{{ asset('assets/favicons/favicons-favicon-32.png') }}" sizes="120x120">
    <link rel="apple-touch-icon" href="{{ asset('assets/favicons/favicons-favicon-32.png') }}" sizes="152x152">
    <link rel="apple-touch-icon" href="{{ asset('assets/favicons/favicons-favicon-32.png') }}" sizes="180x180">


    <link rel="stylesheet" href="{{ asset('assets/css/assets-app.3c03e59d.css') }}">
