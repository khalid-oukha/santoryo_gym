@include('layouts.dashboard.start_html')
<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <div class="nk-main ">

        @include('layouts.dashboard.sidebar')
        <!-- main @s -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                @include('layouts.dashboard.navbar')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
                <!-- content @e -->

                @include('layouts.dashboard.footer')

            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
@include('layouts.dashboard.country_model')
@include('layouts.dashboard.end_html')