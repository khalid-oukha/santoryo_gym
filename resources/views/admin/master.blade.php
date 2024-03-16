@include('layouts.dashboard.start_html')
<body class="nk-body ui-rounder npc-default has-sidebar ">
    <div class="nk-app-root">
        @include('layouts.dashboard.sidebar')
        <!-- main @s -->
        <div class="nk-main ">
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
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
@include('layouts.dashboard.country_model')
@include('layouts.dashboard.end_html')