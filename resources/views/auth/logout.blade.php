@include('layouts.shared/main')

<head>
    @include('layouts.shared/title-meta')

    @include("layouts.shared/head-css")
</head>

<body>
    <section class="sm:p-10 p-6 flex items-center lg:justify-start justify-center relative bg-no-repeat bg-cover min-h-screen bg-[url(/images/banner/banner-11.jpg)]">
        <div class="max-w-lg grow w-full xl:me-auto rounded-xl bg-white/80 backdrop-blur-2xl sm:p-10 p-4 h-full flex flex-col items-center justify-center dark:bg-default-50/60 border-t-4 border-primary">
            <a href="{{ route('any', ['index']) }}" class="block mb-10">
                <img class="mx-auto h-10 block dark:hidden" src="/images/logo-dark.png" alt="">
                <img class="mx-auto h-10 hidden dark:block" src="/images/logo.png" alt="">
            </a>
            <div class="lg:my-52 my-12 text-center">
                <div class="text-center mx-auto">
                    <h4 class="text-default-900 text-2xl font-semibold mb-2">See you Again!</h4>
                    <p class="text-default-600">You are now successfully logged out.</p>
                </div>
                <div class="flex items-start justify-center mt-6">
                    <img src="/images/other/logout.png" alt="" class="h-40">
                </div>
            </div>
            <p class="shrink text-default-600 font-medium text-center mt-4">Back To<a href="{{ route('second',['auth','login']) }}" class="text-primary font-semibold ms-1">Login</a></p>
        </div>
    </section>

    @include('layouts.shared/footer-scripts')

    @include('layouts.shared/theme-mode')

    <!-- Auth Js -->
    @section('script')
    @vite(['resources/js/auth.js'])
    @endsection

</body>

</html>