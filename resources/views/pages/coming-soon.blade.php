@include('layouts.shared/main')

<head>
    @include('layouts.shared/title-meta')

    @include('layouts.shared/head-css')

</head>

<body class="relative h-full lg:h-screen p-6 flex justify-center items-start bg-cover bg-no-repeat" style="background-image: url('/images/banner/banner-11.jpg');">

    <div class="container h-full">

        <div class="flex justify-center lg:justify-start items-center relative text-center h-full">
            <div class="">
                <a href="" class="flex items-center justify-center mb-10">
                    <img src="/images/logo.png" class="h-12">
                </a>

                <div>
                    <h3 class="md:text-2xl text-white font-medium capitalize mt-10">Savor the Flavor <span class="text-primary">For True Food</span> Enthusiasts.</h3>
                    <h1 class="md:text-4xl text-white font-semibold uppercase mt-10">We're Almost Ready to Launch</h1>
                </div>

                <div class="flex justify-center my-14">
                    <div class="relative">
                        <div class="">
                            <div class="flex flex-wrap items-center justify-center gap-12">
                                <div class="inline-flex flex-col items-center justify-center text-white">
                                    <span id="days" class="text-3xl lg:text-5xl font-semibold items-center justify-center flex rounded-3xl backdrop-blur-xl bg-primary/20 text-primary h-20 w-20 lg:h-32 lg:w-32">37</span>
                                    <span class="text-xl mt-5">Days</span>
                                </div>

                                <div class="inline-flex flex-col items-center justify-center text-white">
                                    <span id="hours" class="text-3xl lg:text-5xl font-semibold items-center justify-center flex rounded-3xl backdrop-blur-xl bg-primary/20 text-primary h-20 w-20 lg:h-32 lg:w-32">5</span>
                                    <span class="text-xl mt-5">Hours</span>
                                </div>

                                <div class="inline-flex flex-col items-center justify-center text-white">
                                    <span id="minutes" class="text-3xl lg:text-5xl font-semibold items-center justify-center flex rounded-3xl backdrop-blur-xl bg-primary/20 text-primary h-20 w-20 lg:h-32 lg:w-32">14</span>
                                    <span class="text-xl mt-5">Minutes</span>
                                </div>

                                <div class="inline-flex flex-col items-center justify-center text-white">
                                    <span id="seconds" class="text-3xl lg:text-5xl font-semibold items-center justify-center flex rounded-3xl backdrop-blur-xl bg-primary/20 text-primary h-20 w-20 lg:h-32 lg:w-32">51</span>
                                    <span class="text-xl mt-5">Seconds</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center">
                    <div class="relative">
                        <h6 class="text-xl text-white text-center mb-4">Follow Us:</h6>
                        <div class="flex flex-wrap items-center gap-3">
                            <a href="javascript:void(0);" target="_blank" class="h-12 w-12 inline-flex items-center justify-center bg-white/20 backdrop-blur-xl rounded-2xl transition-all duration-500 group text-white hover:bg-primary/30 hover:text-primary"><i class="ti ti-brand-facebook text-xl"></i></a>
                            <a href="javascript:void(0);" target="_blank" class="h-12 w-12 inline-flex items-center justify-center bg-white/20 backdrop-blur-xl rounded-2xl transition-all duration-500 group text-white hover:bg-primary/30 hover:text-primary"><i class="ti ti-brand-instagram text-xl"></i></a>
                            <a href="javascript:void(0);" target="_blank" class="h-12 w-12 inline-flex items-center justify-center bg-white/20 backdrop-blur-xl rounded-2xl transition-all duration-500 group text-white hover:bg-primary/30 hover:text-primary"><i class="ti ti-brand-x text-xl"></i></a>
                            <a href="javascript:void(0);" target="_blank" class="h-12 w-12 inline-flex items-center justify-center bg-white/20 backdrop-blur-xl rounded-2xl transition-all duration-500 group text-white hover:bg-primary/30 hover:text-primary"><i class="ti ti-brand-linkedin text-xl"></i></a>
                            <a href="javascript:void(0);" target="_blank" class="h-12 w-12 inline-flex items-center justify-center bg-white/20 backdrop-blur-xl rounded-2xl transition-all duration-500 group text-white hover:bg-primary/30 hover:text-primary"><i class="ti ti-brand-github text-xl"></i></a>
                            <a href="javascript:void(0);" target="_blank" class="h-12 w-12 inline-flex items-center justify-center bg-white/20 backdrop-blur-xl rounded-2xl transition-all duration-500 group text-white hover:bg-primary/30 hover:text-primary"><i class="ti ti-brand-youtube text-xl"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('layouts.shared/back-to-top')

    @include('layouts.shared/footer-scripts')

    @vite(['resources/js/countdown.js'])

</body>

</html>