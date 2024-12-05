@include('layouts.shared/main')

<head>
    @include('layouts.shared/title-meta')

    @yield('css')

    @include('layouts.shared/head-css')
</head>

<body>
    @include('layouts.shared/admin-menu')

    <div class="min-h-screen flex flex-col lg:ps-64 w-full">


        @include('layouts.shared/admin-topbar')

        @yield('content')

        @include('layouts.shared/admin-footer')

    </div>

    @include('layouts.shared/footer-scripts')

    @yield('script')
</body>

</html>