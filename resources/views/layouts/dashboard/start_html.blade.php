<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" href="{{ asset('assets/images/admin/apple-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('assets/images/admin/favicon.png') }}" />
    <title>@yield('dashboard_title')</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/admin/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/admin/nucleo-svg.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    <!-- Main Styling -->
    <link href="{{ asset('assets/css/admin/soft-ui-dashboard-tailwind.css?v=1.0.5') }}" rel="stylesheet" />

</head>

<body class="m-0 font-sans antialiased font-normal text-base leading-default bg-gray-50 text-slate-500">