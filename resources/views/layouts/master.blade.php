<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>

<body class="bg-dark-100">
@include('layouts.navbar')

@yield('content')

@include('layouts.footer')



</body>
@include('layouts.footer-script')
</html>
