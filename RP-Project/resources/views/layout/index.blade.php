<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @includeif('layout/style')
</head>

<body class="hold-transition skin-blue sidebar-mini layout-fixed layout-navbar-fixed">
    <div id="loading" style="display:none"></div>

    <div class="wrapper">
        {{-- ini header --}}
        @includeIf('layout/headeradmin')
        {{-- ini sidebar --}}
        @includeIf('layout/sidebar')

        <div class="content-wrapper" style="background-color: #fafafa !important">
            {{-- @stack('before-content') --}}
            @yield('content') 

            {{-- sweetalert --}}
            @include('sweetalert::alert')

            {{-- @stack('after-content') --}}
        </div>

        {{-- @includeIf('layout/footer') --}}
    </div>
    @includeIf('layout/script')
    @stack('scripts')
</body>

</html>
