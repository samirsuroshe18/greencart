@extends('layouts.base')

@section('content')

<!-- =========== Navbar Start =========== -->
<header id="navbar" class="fixed top-0 inset-x-0 z-40 w-full transition-all lg:bg-transparent bg-default-50/90 duration-300 border-b border-transparent [&.nav-sticky]:bg-white/90 [&.nav-sticky]:backdrop-blur-3xl [&.nav-sticky]:shadow-md dark:[&.nav-sticky]:bg-default-50/80">
    <div class="h-full flex items-center py-4">
        <div class="container">
            <nav class="flex items-center justify-between flex-wrap lg:flex-nowrap gap-4">
                <div class="w-full lg:w-auto flex items-center justify-between">
                    <!-- Navbar Brand Logo -->
                    <a href="{{ route('second', ['home', 'home-one']) }}">
                        <img src="/images/logo-dark.png" alt="logo" class="h-10 flex dark:hidden">
                        <img src="/images/logo.png" alt="logo" class="h-10 hidden dark:flex">
                    </a>

                    <!-- Mobile Menu Toggle Button -->
                    <button class="hs-collapse-toggle lg:hidden inline-block" id="hs-unstyled-collapse" data-hs-collapse="#mobileMenu" data-hs-type="collapse">
                        <i data-lucide="menu" class="w-7 h-7 text-default-600 hover:text-default-900"></i>
                    </button>
                </div>

                <!-- Navigation Menu -->
                <div id="mobileMenu" class="hs-collapse transition-all lg:basis-auto basis-full grow hidden lg:flex items-center justify-center mx-auto overflow-hidden">
                    <ul class="menu flex lg:items-center justify-center flex-col lg:flex-row gap-y-2">
                        <!-- Contact us Link -->
                        <li class="menu-item text-sm lg:text-base font-medium text-default-800 transition-all hover:text-primary [&.active]:text-primary">
                            <a class="inline-flex items-center py-2 px-4 rounded-full" href="#home">Home</a>
                        </li>
                        <!-- Contact us Link -->
                        <li class="menu-item text-sm lg:text-base font-medium  text-default-800 transition-all hover:text-primary [&.active]:text-primary">
                            <a class="inline-flex items-center py-2 px-4 rounded-full" href="#demo">Demos</a>
                        </li>
                        <!-- Contact us Link -->
                        <li class="menu-item text-sm lg:text-base font-medium  text-default-800 transition-all hover:text-primary [&.active]:text-primary">
                            <a class="inline-flex items-center py-2 px-4 rounded-full" href="#features">Features</a>
                        </li>
                    </ul>
                </div>

                <div class="ms-auto shrink hidden lg:inline-flex gap-2">
                    <a href="#" class="py-2 px-5 inline-flex items-center gap-2 justify-center font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary border-primary hover:border-primary text-white rounded-md">
                        <i class="ti ti-cloud-download text-xl"></i>
                        <span class="hidden sm:block">Download</span>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>

<section class="py-10 pt-36 relative bg-gradient-to-b from-primary-500/20 via-primary/10 to-primary-500/0" id="home">
    <div class="container relative">
        <div class="grid 2xl:grid-cols-12 lg:grid-cols-2 gap-12">
            <div class="z-10 self-center 2xl:col-span-5">
                <div class="text-start">
                    <h1 class="lg:text-4xl/normal md:text-3xl/normal text-2xl font-bold capitalize  text-default-900">
                        <span class="text-primary">GreenCart</span> - Deliver good groceries straight to your door step
                    </h1>

                    <p class="text-base font-medium text-default-600 mt-5">Deliver Nature to your customers with ease and no effort.</p>
                    <p class="text-base font-medium text-default-600 mb-5">Why re-invent the wheel every time? Save your money and time.</p>

                    <div class="mt-10 text-center lg:text-start">
                        <p class="text-default-900 text-xl font-semibold">Developed Used</p>
                        <div class="flex flex-wrap items-center justify-center lg:justify-start gap-2 mt-4">
                            <div class="hs-tooltip inline-block [--trigger:hover] [--placement:top]">
                                <div class="hs-tooltip-toggle w-14 h-14 flex justify-center items-center rounded-lg bg-white dark:bg-default-100">
                                    <img src="/images/demo/logo/tailwindcss.svg" class="w-8 h-8">
                                </div>
                                <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible transition-opacity opacity-0 relative px-3 py-1 rounded bg-default-950 text-default-200 font-semibold z-50 hidden" role="tooltip" data-popper-placement="top">
                                    Tailwind CSS
                                    <div class="bg-default-950 w-2.5 h-2.5 rotate-45 absolute -bottom-1 start-1/2 -translate-x-1/2 -z-10 rounded-[1px]"></div>
                                </div>
                            </div>
                            <div class="hs-tooltip inline-block [--trigger:hover] [--placement:top]">
                                <div class="hs-tooltip-toggle w-14 h-14 flex justify-center items-center rounded-lg bg-white dark:bg-default-100">
                                    <img src="/images/demo/logo/html.svg" class="w-8 h-8">
                                </div>
                                <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible transition-opacity opacity-0 relative px-3 py-1 rounded bg-default-950 text-default-200 font-semibold z-50 hidden" role="tooltip" data-popper-placement="top">
                                    HTML5
                                    <div class="bg-default-950 w-2.5 h-2.5 rotate-45 absolute -bottom-1 start-1/2 -translate-x-1/2 -z-10 rounded-[1px]"></div>
                                </div>
                            </div>
                            <div class="hs-tooltip inline-block [--trigger:hover] [--placement:top]">
                                <div class="hs-tooltip-toggle w-14 h-14 flex justify-center items-center rounded-lg bg-white dark:bg-default-100">
                                    <img src="/images/demo/logo/css.svg" class="w-8 h-8">
                                </div>
                                <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible transition-opacity opacity-0 relative px-3 py-1 rounded bg-default-950 text-default-200 font-semibold z-50 hidden" role="tooltip" data-popper-placement="top">
                                    CSS3
                                    <div class="bg-default-950 w-2.5 h-2.5 rotate-45 absolute -bottom-1 start-1/2 -translate-x-1/2 -z-10 rounded-[1px]"></div>
                                </div>
                            </div>
                            <div class="hs-tooltip inline-block [--trigger:hover] [--placement:top]">
                                <div class="hs-tooltip-toggle w-14 h-14 flex justify-center items-center rounded-lg bg-white dark:bg-default-100">
                                    <img src="/images/demo/logo/javascript.svg" class="w-8 h-8">
                                </div>
                                <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible transition-opacity opacity-0 relative px-3 py-1 rounded bg-default-950 text-default-200 font-semibold z-50 hidden" role="tooltip" data-popper-placement="top">
                                    Javascript
                                    <div class="bg-default-950 w-2.5 h-2.5 rotate-45 absolute -bottom-1 start-1/2 -translate-x-1/2 -z-10 rounded-[1px]"></div>
                                </div>
                            </div>
                            <div class="hs-tooltip inline-block [--trigger:hover] [--placement:top]">
                                <div class="hs-tooltip-toggle w-14 h-14 flex justify-center items-center rounded-lg bg-white dark:bg-default-100">
                                    <img src="/images/demo/logo/yarn.svg" class="w-8 h-8">
                                </div>
                                <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible transition-opacity opacity-0 relative px-3 py-1 rounded bg-default-950 text-default-200 font-semibold z-50 hidden" role="tooltip" data-popper-placement="top">
                                    Yarn
                                    <div class="bg-default-950 w-2.5 h-2.5 rotate-45 absolute -bottom-1 start-1/2 -translate-x-1/2 -z-10 rounded-[1px]"></div>
                                </div>
                            </div>
                            <div class="hs-tooltip inline-block [--trigger:hover] [--placement:top]">
                                <div class="hs-tooltip-toggle w-14 h-14 flex justify-center items-center rounded-lg bg-white dark:bg-default-100">
                                    <img src="/images/demo/logo/bun.svg" class="w-8 h-8">
                                </div>
                                <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible transition-opacity opacity-0 relative px-3 py-1 rounded bg-default-950 text-default-200 font-semibold z-50 hidden" role="tooltip" data-popper-placement="top">
                                    Bun
                                    <div class="bg-default-950 w-2.5 h-2.5 rotate-45 absolute -bottom-1 start-1/2 -translate-x-1/2 -z-10 rounded-[1px]"></div>
                                </div>
                            </div>
                            <div class="hs-tooltip inline-block [--trigger:hover] [--placement:top]">
                                <div class="hs-tooltip-toggle w-14 h-14 flex justify-center items-center rounded-lg bg-white dark:bg-default-100">
                                    <img src="/images/demo/logo/vitejs-logo.svg" class="w-8 h-8">
                                </div>
                                <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible transition-opacity opacity-0 relative px-3 py-1 rounded bg-default-950 text-default-200 font-semibold z-50 hidden" role="tooltip" data-popper-placement="top">
                                    ViteJs
                                    <div class="bg-default-950 w-2.5 h-2.5 rotate-45 absolute -bottom-1 start-1/2 -translate-x-1/2 -z-10 rounded-[1px]"></div>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4 mt-10">
                            <a href="#demo" class="p-1 pe-4 flex items-center justify-center gap-2 rounded-lg text-white bg-primary backdrop-blur-xl hover:text-white hover:border-primary hover:bg-primary drop-shadow-lg transition-all duration-300 group">
                                <span class="h-8 w-8 flex items-center justify-center bg-white/20 backdrop-blur-xl rounded-md text-white group-hover:bg-white/20 transition-all duration-300">
                                    <i class="ti ti-eye text-lg/none"></i>
                                </span>
                                <span class="text-base font-semibold">Demo</span>
                            </a>
                            <a href="{{ route('second', ['admin', 'dashboard']) }}" target="_blank" class="p-1 pe-4 flex items-center justify-center gap-2 rounded-lg text-primary bg-primary/20 backdrop-blur-xl hover:text-white hover:border-primary hover:bg-primary drop-shadow-lg transition-all duration-300 group">
                                <span class="h-8 w-8 flex items-center justify-center bg-primary/20 text-primary backdrop-blur-xl rounded-md group-hover:bg-white/20 group-hover:text-white transition-all duration-300">
                                    <i class="ti ti-dashboard text-lg/none"></i>
                                </span>
                                <span class="text-base font-semibold">Admin Demo</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="2xl:col-span-7">
                <div class="relative flex items-center justify-center shadow-md rounded-lg shadow-primary/30">
                    <img src="/images/demo/home-1.png" class="block dark:hidden mx-auto rounded-lg">
                    <img src="/images/demo/home-1-dark.png" class="hidden dark:block mx-auto rounded-lg">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="demo" class="lg:py-20 py-8">
    <div class="lg:mx-20 mx-6">
        <div class="mx-auto text-center mb-14">
            <span class="inline-flex text-base border-x-2 border-x-primary-500 text-primary font-semibold px-2 rounded-lg bg-primary-500/20 mb-2">Apps & Components </span>
            <h2 class="text-3xl font-semibold text-default-950 mb-2.5">Client & Admin</h2>
            <p class="text-base font-medium text-default-900">
                The First Impression is the last.
                <br />
                Make your Grocery App stand out for the rest of the world.
            </p>
        </div>

        <div class="grid md:grid-cols-2 grid-cols-1 gap-8 justify-content-center">
            <a class="" href="{{ route('second', ['home', 'home-one']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/home-1.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/home-1-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Home</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->
            <a class="" href="{{ route('second' ,['admin', 'dashboard']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/admin/admin-dashboard.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/admin/admin-dashboard-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Admin</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->
        </div><!-- end grid -->
    </div>
</section>

<section class="lg:py-20 py-8">
    <div class="lg:mx-20 mx-6">
        <div class="mx-auto text-center mb-14">
            <span class="inline-flex text-base border-x-2 border-x-primary-500 text-primary font-semibold px-2 rounded-lg bg-primary-500/20 mb-2">FreshMart Demos</span>
            <h2 class="text-3xl font-semibold text-default-950 mb-2.5">Client App</h2>
            <p class="text-base font-medium text-default-900 mx-auto">
                It matters where you're born.
                <br />
                Your groceries should be showcased in attractive and beautiful looking marketplace pages,
                Right?
            </p>
        </div>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8 justify-content-center">
            <a class="" href="{{ route('second', ['home', 'home-one']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/home-1.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/home-1-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Home</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->
            <a class="" href="{{ route('second', ['home', 'home-two']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/home-2.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/home-2-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Home 2</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->
            <a class="" href="{{ route('second',['products','grid']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/categories.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/categories-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Products Grid</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->
            <a class="" href="{{ route('second',['products','list']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/categories-list.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/categories-list-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Products List</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->
            <a class="" href="{{ route('second',['products','filter']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/product-filter.png">
                        <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/product-filter-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Products Filter</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->
            <a class="" href="{{ route('second',['products','details']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/product-detail.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/product-detail-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Product Details</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->
            <a class="" href="{{ route('second', ['account', 'profile']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/account-profile.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/account-profile-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Profile</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->
            <a class="" href="{{ route('second', ['order', 'list']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/account-order-list.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/account-order-list-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Orders List</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->
            <a class="" href="{{ route('second', ['order', 'details']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/account-order-detail.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/account-order-detail-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Order Details</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->
            <a class="" href="{{ route('second', ['account', 'address']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/account-address.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/account-address-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Delivery Address</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->
            <a class="" href="{{ route('second', ['account', 'wallet']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/account-wallet.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/account-wallet-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Wallet</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->
            <a class="" href="{{ route('second', ['account', 'settings']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/account-setting.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/account-setting-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Settings</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->
            <a class="" href="{{ route('second', ['pages', 'cart']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/cart.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/cart-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Cart</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->
            <a class="" href="{{ route('second', ['pages', 'checkout']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/checkout.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/checkout-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Checkout</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->
            <a class="" href="{{ route('second', ['pages', 'wishlist']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/wishlist.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/wishlist-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Wishlist</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->
            <a class="" href="{{ route('second', ['pages', 'faqs']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/faq.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/faq-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">FAQs</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->
            <a class="" href="{{ route('second', ['pages', 'error-404']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/error-404.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/error-404-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Error 404</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->
        </div><!-- end grid -->
    </div>
</section>

<section id="admin-demo" class="lg:py-20 py-8">
    <div class="lg:mx-20 mx-6">
        <div class="mx-auto text-center mb-14">
            <span class="inline-flex text-base border-x-2 border-x-primary text-primary font-semibold px-2 rounded-lg bg-primary/20 mb-2">Control</span>
            <h2 class="text-3xl font-semibold text-default-950 mb-2.5">Admin Panel</h2>
            <p class="text-base font-medium text-default-900">
                Wondering how you'll manage all those overwhelming users and orders on your site?
                <br />
                No need to worry, we've got your back with A full fledged Admin Panel specially designed for <b>GreenCart</b>
            </p>
        </div>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8 justify-content-center">
            <a class="" href="{{ route('second' ,['admin', 'dashboard']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/admin/admin-dashboard.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/admin/admin-dashboard-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Dashboard</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->

            <a class="" href="{{ route('second', ['admin', 'chat']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/admin/admin-chat.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/admin/admin-chat-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Chat</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->

            <a class="" href="{{ route('second', ['admin', 'calendar']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/admin/admin-calendar.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/admin/admin-calendar-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Calendar</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->

            <div class="lg:col-span-3 lg:flex gap-6 justify-center">
                <div class="lg:w-1/3">
                    <a class="" href="{{ route('second', ['admin', 'wallet']) }}" target="_blank">
                        <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                            <div class="p-4">
                                <div class="relative rounded-lg overflow-hidden ">
                                    <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/admin/admin-wallet.png">
                                    <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/admin/admin-wallet-dark.png">
                                    <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                        <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                            Live Preview
                                            <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Wallet</h5>
                            </div>
                        </div>
                    </a><!-- end grid-col -->
                </div>
            </div>
        </div><!-- end grid -->
    </div><!-- end container -->
</section>

<section class="lg:py-20 py-8">
    <div class="lg:mx-20 mx-6">
        <div class="mx-auto text-center mb-14">
            <span class="inline-flex text-base border-x-2 border-x-primary text-primary font-semibold px-2 rounded-lg bg-primary/20 mb-2">Security</span>
            <h2 class="text-3xl font-semibold text-default-950 mb-2.5">Auth Pages</h2>
            <p class="text-base font-medium text-default-900">
                Security for your customers?
                <br />
                Well, of course we would provide Authentication pages, which are just right for your App.
            </p>
        </div>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8 justify-content-center">
            <a class="" href="{{ route('second', ['auth', 'login']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/login.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/login-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Login</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->

            <a class="" href="{{ route('second', ['auth', 'register']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/register.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/register-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Register</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->

            <a class="" href="{{ route('second', ['auth', 'logout']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/logout.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/logout-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Logout</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->

            <a class="" href="{{ route('second', ['auth', 'recoverpw']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/recoverpw.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/recoverpw-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Forgot Password</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->

            <a class="" href="{{ route('second', ['auth', 'reset-password']) }}" target="_blank">
                <div class="relative group rounded-xl text-center transition-all duration-500 drop-shadow border border-default-200 hover:-translate-y-1 dark:bg-default-100">
                    <div class="p-4">
                        <div class="relative rounded-lg overflow-hidden ">
                            <img alt="demo-img" class="dark:hidden w-full rounded-lg" src="/images/demo/reset-password.png">
                            <img alt="demo-img" class="hidden dark:block w-full rounded-lg" src="/images/demo/reset-password-dark.png">
                            <div class="absolute inset-0 flex items-center justify-center h-full w-full bg-zinc-800/20 opacity-0 transition-all duration-300 group-hover:opacity-100 cursor-pointer">
                                <div class="relative overflow-hidden py-2 ps-6 pe-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-base text-center bg-primary text-white rounded-full">
                                    Live Preview
                                    <span class="absolute top-1/2 -translate-y-1/2 end-0 h-full w-10 inline-flex items-center justify-center bg-white/10 text-white ms-3"><i class="ti ti-send text-lg"></i></span>
                                </div>
                            </div>
                        </div>
                        <h5 class="mt-4 text-lg font-semibold text-default-900 text-center capitalize">Reset Password</h5>
                    </div>
                </div>
            </a><!-- end grid-col -->

        </div><!-- end grid -->
    </div><!-- end container -->
</section>

<section class="lg:pt-20 py-8" id="features">
    <div class="lg:mx-20 mx-6">
        <div class="mx-auto text-center mb-14">
            <span class="inline-flex text-base border-x-2 border-x-primary text-primary font-semibold px-2 rounded-lg bg-primary/20 mb-2">Features</span>
            <h2 class="text-3xl font-semibold text-default-950 mb-2.5">Awesome Template Features</h2>
            <p class="text-base font-medium text-default-900 max-w-lg mx-auto">
                Take a deep breath, cause you'll surely get tired reading the list of quality features provided.
            </p>
        </div>

        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-6">
            <div class="bg-white dark:bg-default-50 rounded-xl border-b-4 border border-default-200 hover:-translate-y-4 hover:border-primary transition-all duration-500">
                <div class="p-6">
                    <div class="flex flex-col justify-center items-center text-center gap-4">
                        <div class="shrink">
                            <div class="inline-flex items-center justify-center h-12 w-12 bg-primary-500/20 text-primary rounded-md">
                                <svg class="h-6 w-6 fill-primary" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 54 33">
                                    <g clip-path="url(#prefix__clip0)">
                                        <path fill-rule="evenodd" d="M27 0c-7.2 0-11.7 3.6-13.5 10.8 2.7-3.6 5.85-4.95 9.45-4.05 2.054.513 3.522 2.004 5.147 3.653C30.744 13.09 33.808 16.2 40.5 16.2c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C36.756 3.11 33.692 0 27 0zM13.5 16.2C6.3 16.2 1.8 19.8 0 27c2.7-3.6 5.85-4.95 9.45-4.05 2.054.514 3.522 2.004 5.147 3.653C17.244 29.29 20.308 32.4 27 32.4c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C23.256 19.31 20.192 16.2 13.5 16.2z" clip-rule="evenodd" />
                                    </g>
                                    <defs>
                                        <clipPath id="prefix__clip0">
                                            <path fill="#fff" d="M0 0h54v32.4H0z" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="grow">
                            <h4 class="text-lg font-semibold text-default-950 mb-2">Built With Tailwind CSS</h4>
                            <p class="text-sm font-medium text-default-600">Rapidly build modern websites without ever leaving your HTML.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-default-50 rounded-xl border-b-4 border border-default-200 hover:-translate-y-4 hover:border-primary transition-all duration-500">
                <div class="p-6">
                    <div class="flex flex-col justify-center items-center text-center gap-4">
                        <div class="shrink">
                            <div class="inline-flex items-center justify-center h-12 w-12 bg-primary/20 text-primary rounded-md">
                                <i class="h-6 w-6" data-lucide="airplay"></i>
                            </div>
                        </div>
                        <div class="grow">
                            <h4 class="text-lg font-semibold text-default-950 mb-2">Ultra Responsive</h4>
                            <p class="text-sm font-medium text-default-600">Our fully Responsive design ensures your
                                content is beautifully presented no matter what device your audience is using.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-default-50 rounded-xl border-b-4 border border-default-200 hover:-translate-y-4 hover:border-primary transition-all duration-500">
                <div class="p-6">
                    <div class="flex flex-col justify-center items-center text-center gap-4">
                        <div class="shrink">
                            <div class="inline-flex items-center justify-center h-12 w-12 bg-primary/20 text-primary rounded-md">
                                <i class="h-6 w-6" data-lucide="sun-moon"></i>
                            </div>
                        </div>
                        <div class="grow">
                            <h4 class="text-lg font-semibold text-default-950 mb-2">Dark Demo Support</h4>
                            <p class="text-sm font-medium text-default-600">Embark on a Rich Experience: Unveiling a Host of Advanced Features within Our Dark Demo Support Environment.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-default-50 rounded-xl border-b-4 border border-default-200 hover:-translate-y-4 hover:border-primary transition-all duration-500">
                <div class="p-6">
                    <div class="flex flex-col justify-center items-center text-center gap-4">
                        <div class="shrink">
                            <div class="inline-flex items-center justify-center h-12 w-12 bg-primary/20 text-primary rounded-md">
                                <i class="h-6 w-6" data-lucide="package"></i>
                            </div>
                        </div>
                        <div class="grow">
                            <h4 class="text-lg font-semibold text-default-950 mb-2">Production Ready</h4>
                            <p class="text-sm font-medium text-default-600">Our solutions have undergone extensive testing
                                to ensure they can handle the demands of a production environment.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-default-50 rounded-xl border-b-4 border border-default-200 hover:-translate-y-4 hover:border-primary transition-all duration-500">
                <div class="p-6">
                    <div class="flex flex-col justify-center items-center text-center gap-4">
                        <div class="shrink">
                            <div class="inline-flex items-center justify-center h-12 w-12 bg-primary/20 text-primary rounded-md">
                                <i class="h-6 w-6" data-lucide="figma"></i>
                            </div>
                        </div>
                        <div class="grow">
                            <h4 class="text-lg font-semibold text-default-950 mb-2">Hygienic Design</h4>
                            <p class="text-sm font-medium text-default-600">Our designs feature smooth and continuous
                                surfaces, minimizing areas where dirt, bacteria, or contaminants can accumulate.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-default-50 rounded-xl border-b-4 border border-default-200 hover:-translate-y-4 hover:border-primary transition-all duration-500">
                <div class="p-6">
                    <div class="flex flex-col justify-center items-center text-center gap-4">
                        <div class="shrink">
                            <div class="inline-flex items-center justify-center h-12 w-12 bg-primary/20 text-primary rounded-md">
                                <i class="h-6 w-6" data-lucide="circuit-board"></i>
                            </div>
                        </div>
                        <div class="grow">
                            <h4 class="text-lg font-semibold text-default-950 mb-2">High Performance</h4>
                            <p class="text-sm font-medium text-default-600">We understand that your requirements are
                                unique. Our high-performance solutions are customizable to match your specific
                                goals.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-default-50 rounded-xl border-b-4 border border-default-200 hover:-translate-y-4 hover:border-primary transition-all duration-500">
                <div class="p-6">
                    <div class="flex flex-col justify-center items-center text-center gap-4">
                        <div class="shrink">
                            <div class="inline-flex items-center justify-center h-12 w-12 bg-primary/20 text-primary rounded-md">
                                <i class="h-6 w-6" data-lucide="globe-2"></i>
                            </div>
                        </div>
                        <div class="grow">
                            <h4 class="text-lg font-semibold text-default-950 mb-2">Multi Browser Support</h4>
                            <p class="text-sm font-medium text-default-600">Our e-commerce store is rigorously tested and
                                optimized to work flawlessly on all major web browsers, offering a consistent shopping
                                experience to all our customers.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-default-50 rounded-xl border-b-4 border border-default-200 hover:-translate-y-4 hover:border-primary transition-all duration-500">
                <div class="p-6">
                    <div class="flex flex-col justify-center items-center text-center gap-4">
                        <div class="shrink">
                            <div class="inline-flex items-center justify-center h-12 w-12 bg-primary/20 text-primary rounded-md">
                                <i class="h-6 w-6" data-lucide="file-text"></i>
                            </div>
                        </div>
                        <div class="grow">
                            <h4 class="text-lg font-semibold text-default-950 mb-2">Well Documented</h4>
                            <p class="text-sm font-medium text-default-600">Our documentation is a treasure trove of
                                valuable information, from getting started guides to advanced tutorials. It's all there
                                to help you make the most of our services.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-default-50 rounded-xl border-b-4 border border-default-200 hover:-translate-y-4 hover:border-primary transition-all duration-500">
                <div class="p-6">
                    <div class="flex flex-col justify-center items-center text-center gap-4">
                        <div class="shrink">
                            <div class="inline-flex items-center justify-center h-12 w-12 bg-primary/20 text-primary rounded-md">
                                <i class="h-6 w-6" data-lucide="users-2"></i>
                            </div>
                        </div>
                        <div class="grow">
                            <h4 class="text-lg font-semibold text-default-950 mb-2">Great Support</h4>
                            <p class="text-sm font-medium text-default-600">Our support team is always ready to help.
                                Whether you have questions, encounter issues, or need guidance, we're just a message or
                                call away.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-default-50 rounded-xl border-b-4 border border-default-200 hover:-translate-y-4 hover:border-primary transition-all duration-500">
                <div class="p-6">
                    <div class="flex flex-col justify-center items-center text-center gap-4">
                        <div class="shrink">
                            <div class="inline-flex items-center justify-center h-12 w-12 bg-primary/20 text-primary rounded-md">
                                <i class="h-6 w-6" data-lucide="move"></i>
                            </div>
                        </div>
                        <div class="grow">
                            <h4 class="text-lg font-semibold text-default-950 mb-2">Highly Customizable</h4>
                            <p class="text-sm font-medium text-default-600">Our product is designed to adapt to your
                                specific requirements. Whether you're an individual, a business, or an organization, we
                                provide the tools to customize it to your liking.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-default-50 rounded-xl border-b-4 border border-default-200 hover:-translate-y-4 hover:border-primary transition-all duration-500">
                <div class="p-6">
                    <div class="flex flex-col justify-center items-center text-center gap-4">
                        <div class="shrink">
                            <div class="inline-flex items-center justify-center h-12 w-12 bg-primary/20 text-primary rounded-md">
                                <i class="h-6 w-6" data-lucide="feather"></i>
                            </div>
                        </div>
                        <div class="grow">
                            <h4 class="text-lg font-semibold text-default-950 mb-2">Light as a Feather</h4>
                            <p class="text-sm font-medium text-default-600">From our years of experience and expertise in Development, we know users vary, they could have slow of fast network.
                                They all deserve seamless experience in shopping with you.
                                That's why our product is developed with fewer lines.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white dark:bg-default-50 rounded-xl border-b-4 border border-default-200 hover:-translate-y-4 hover:border-primary transition-all duration-500">
                <div class="p-6">
                    <div class="flex flex-col justify-center items-center text-center gap-4">
                        <div class="shrink">
                            <div class="inline-flex items-center justify-center h-12 w-12 bg-primary/20 text-primary rounded-md">
                                <i class="h-6 w-6" data-lucide="star"></i>
                            </div>
                        </div>
                        <div class="grow">
                            <h4 class="text-lg font-semibold text-default-950 mb-2">UX Considered</h4>
                            <p class="text-sm font-medium text-default-600">A good design does not need any explanation because a good design can speak for itself. Out app doesn't only have a good User Interface, we also have considered User experience.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p class="text-base text-center mt-6 font-medium text-primary-900 dark:text-primary-100">
            They say, <i>&quot;Dogs are human's best companions&quot;</i>
            <br />
            Let GreenCart accompany you on the marvelous journey you're walking. Cheers! 🍻
        </p>
    </div>
</section>

<footer class="relative border-t border-default-200">
    <div class="container relative">
        <p class="py-6 text-center font-medium text-default-900">
            <script>
                document.write(new Date().getFullYear().toString());
            </script>
            © GreenCart.
            Designed & Crafted With 💚 By <a class="text-primary" href="https://coderthemes.com/" target="_blank">Coderthemes</a>
        </p>
    </div>
</footer>

@include('layouts.shared/back-to-top')

@endsection
