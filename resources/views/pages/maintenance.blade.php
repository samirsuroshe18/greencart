@include('layouts.shared/main')

<head>
    @include('layouts.shared/title-meta')

    @include('layouts.shared/head-css')
</head>

<body class="relative h-full lg:h-screen p-6 flex justify-center items-center bg-cover bg-no-repeat" style="background-image: url('/images/banner/banner-11.jpg');">

    <div class="backdrop-blur-2xl bg-default-50/40 rounded-2xl max-w-7xl w-full">
        <div class="p-10">
            <div class="h-96">
                <img src="/images/other/maintenance.png" alt="maintenance.png" class="max-w-full h-full mx-auto">
            </div> <!-- card-img end -->

            <div class="max-w-lg mx-auto text-center">
                <h2 class="text-2xl text-zinc-100 font-semibold mb-1 mt-9">Site is Under Maintenance</h2>
                <p class="font-normal text-zinc-200">We're making the system more awesome. We'll be back shortly.</p>
            </div> <!-- Title end -->
        </div>
    </div>

    @include('layouts.shared/back-to-top')

    @include('layouts.shared/footer-scripts')

</body>

</html>