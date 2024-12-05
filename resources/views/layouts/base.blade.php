<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.shared/title-meta')
    @yield('css')
    @include('layouts.shared/head-css')
</head>

<body>

    @yield('content')

    @include('layouts.shared/footer-scripts')

    @yield('script')

    @include('layouts.shared/theme-mode')
</body>

</html>