@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Pages', 'title' => 'Gallery'])

    <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
        <div class="px-6 py-4 flex items-center justify-between gap-4">
            <h5 class="grow text-lg font-medium text-default-900">Filter Sort <a href="https://vestride.github.io/Shuffle/" target="_blank" class="text-primary">(ShuffleJs)</a></h5>
        </div>
        <div class="p-5 border-t border-dashed border-default-200">
            <div class="flex justify-center">
                <div class="w-full filters-group-wrap mb-3">
                    <div class="flex justify-center mb-5">
                        <ul class="filter-options flex flex-wrap gap-2 justify-center">
                            <li class="py-2 px-4 border-2 border-default-200 rounded-full text-sm font-medium text-default-800 transition-all duration-300 hover:border-primary/30 hover:text-primary [&.active]:border-primary/60 [&.active]:text-primary active" data-group="all"><a href="javascript:void(0)" class="">All Items</a></li>
                            <li class="py-2 px-4 border-2 border-default-200 rounded-full text-sm font-medium text-default-800 transition-all duration-300 hover:border-primary/30 hover:text-primary [&.active]:border-primary/60 [&.active]:text-primary" data-group="design"><a href="javascript:void(0)" class="">Design</a></li>
                            <li class="py-2 px-4 border-2 border-default-200 rounded-full text-sm font-medium text-default-800 transition-all duration-300 hover:border-primary/30 hover:text-primary [&.active]:border-primary/60 [&.active]:text-primary" data-group="creative"><a href="javascript:void(0)" class="">Creative</a></li>
                            <li class="py-2 px-4 border-2 border-default-200 rounded-full text-sm font-medium text-default-800 transition-all duration-300 hover:border-primary/30 hover:text-primary [&.active]:border-primary/60 [&.active]:text-primary" data-group="digital"><a href="javascript:void(0)" class="">Digital</a></li>
                            <li class="py-2 px-4 border-2 border-default-200 rounded-full text-sm font-medium text-default-800 transition-all duration-300 hover:border-primary/30 hover:text-primary [&.active]:border-primary/60 [&.active]:text-primary" data-group="photography"><a href="javascript:void(0)" class="">Photography</a></li>
                        </ul>
                    </div>
                </div>
                <!--end /div-->
            </div>
            <!--end /div-->

            <div id="gallery-wrapper" class="flex justify-center shuffle">
                <div class="xl:w-1/4 lg:w-1/3 p-3 picture-item" data-groups='["creative", "photography"]'>
                    <a class="image-popup" href="/images/small/2.jpg">
                        <div class="relative block overflow-hidden rounded group transition-all duration-500">
                            <img src="/images/small/2.jpg" class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image">
                            <div class="absolute inset-3 flex items-end cursor-pointer rounded bg-default-50/60 backdrop-blur-lg p-3 opacity-0 transition-all duration-500 group-hover:opacity-100">
                                <div>
                                    <p class="text-sm text-default-700">Media, Icons</p>
                                    <h6 class="text-base text-default-900 font-medium">Open Imagination</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="xl:w-1/4 lg:w-1/3 p-3 picture-item" data-groups='["design", "digital"]'>
                    <a class="image-popup" href="/images/small/4.jpg">
                        <div class="relative block overflow-hidden rounded group transition-all duration-500">
                            <img src="/images/small/4.jpg" class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image">
                            <div class="absolute inset-3 flex items-end cursor-pointer rounded bg-default-50/60 backdrop-blur-lg p-3 opacity-0 transition-all duration-500 group-hover:opacity-100">
                                <div>
                                    <p class="text-sm text-default-700">Illustrations</p>
                                    <h6 class="text-base text-default-900 font-medium">Locked Steel Gate</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="xl:w-1/4 lg:w-1/3 p-3 picture-item" data-groups='["creative", "photography"]'>
                    <a class="image-popup" href="/images/small/1.jpg">
                        <div class="relative block overflow-hidden rounded group transition-all duration-500">
                            <img src="/images/small/1.jpg" class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image">
                            <div class="absolute inset-3 flex items-end cursor-pointer rounded bg-default-50/60 backdrop-blur-lg p-3 opacity-0 transition-all duration-500 group-hover:opacity-100">
                                <div>
                                    <p class="text-sm text-default-700">Graphics, UI Elements</p>
                                    <h6 class="text-base text-default-900 font-medium">Mac Sunglasses</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="xl:w-1/4 lg:w-1/3 p-3 picture-item" data-groups='["design", "photography"]'>
                    <a class="image-popup" href="/images/small/3.jpg">
                        <div class="relative block overflow-hidden rounded group transition-all duration-500">
                            <img src="/images/small/3.jpg" class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image">
                            <div class="absolute inset-3 flex items-end cursor-pointer rounded bg-default-50/60 backdrop-blur-lg p-3 opacity-0 transition-all duration-500 group-hover:opacity-100">
                                <div>
                                    <p class="text-sm text-default-700">Icons, Illustrations</p>
                                    <h6 class="text-base text-default-900 font-medium">Morning Dew</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="xl:w-1/4 lg:w-1/3 p-3 picture-item" data-groups='["photography", "design"]'>
                    <a class="image-popup" href="/images/small/8.jpg">
                        <div class="relative block overflow-hidden rounded group transition-all duration-500">
                            <img src="/images/small/8.jpg" class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image">
                            <div class="absolute inset-3 flex items-end cursor-pointer rounded bg-default-50/60 backdrop-blur-lg p-3 opacity-0 transition-all duration-500 group-hover:opacity-100">
                                <div>
                                    <p class="text-sm text-default-700">UI Elements, Media</p>
                                    <h6 class="text-base text-default-900 font-medium">Console Activity</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="xl:w-1/4 lg:w-1/3 p-3 picture-item" data-groups='["digital", "creative"]'>
                    <a class="image-popup" href="/images/small/7.jpg">
                        <div class="relative block overflow-hidden rounded group transition-all duration-500">
                            <img src="/images/small/7.jpg" class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image">
                            <div class="absolute inset-3 flex items-end cursor-pointer rounded bg-default-50/60 backdrop-blur-lg p-3 opacity-0 transition-all duration-500 group-hover:opacity-100">
                                <div>
                                    <p class="text-sm text-default-700">Graphics</p>
                                    <h6 class="text-base text-default-900 font-medium">Sunset Bulb Glow</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="xl:w-1/4 lg:w-1/3 p-3 picture-item" data-groups='["creative", "digital"]'>
                    <a class="image-popup" href="/images/small/10.jpg">
                        <div class="relative block overflow-hidden rounded group transition-all duration-500">
                            <img src="/images/small/10.jpg" class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image">
                            <div class="absolute inset-3 flex items-end cursor-pointer rounded bg-default-50/60 backdrop-blur-lg p-3 opacity-0 transition-all duration-500 group-hover:opacity-100">
                                <div>
                                    <p class="text-sm text-default-700">Icons, Illustrations</p>
                                    <h6 class="text-base text-default-900 font-medium">Morning Dew</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="xl:w-1/4 lg:w-1/3 p-3 picture-item" data-groups='["design", "digital"]'>
                    <a class="image-popup" href="/images/small/6.jpg">
                        <div class="relative block overflow-hidden rounded group transition-all duration-500">
                            <img src="/images/small/6.jpg" class="rounded transition-all duration-500 group-hover:scale-105" alt="work-image">
                            <div class="absolute inset-3 flex items-end cursor-pointer rounded bg-default-50/60 backdrop-blur-lg p-3 opacity-0 transition-all duration-500 group-hover:opacity-100">
                                <div>
                                    <p class="text-sm text-default-700">Illustrations</p>
                                    <h6 class="text-base text-default-900 font-medium">Locked Steel Gate</h6>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
        <div class="px-6 py-4 flex items-center justify-between gap-4">
            <h5 class="grow text-lg font-medium text-default-900">Basic</h5>
        </div>
        <div class="p-5 border-t border-dashed border-default-200">

            <!-- Basic -->
            <div class="grid xl:grid-cols-5 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-5">
                <img alt="gallery" class="object-cover object-center rounded" src="/images/small/1.jpg">
                <img alt="gallery" class="object-cover object-center rounded" src="/images/small/2.jpg">
                <img alt="gallery" class="object-cover object-center rounded" src="/images/small/3.jpg">
                <img alt="gallery" class="object-cover object-center rounded" src="/images/small/4.jpg">
                <img alt="gallery" class="object-cover object-center rounded" src="/images/small/5.jpg">
                <img alt="gallery" class="object-cover object-center rounded" src="/images/small/6.jpg">
                <img alt="gallery" class="object-cover object-center rounded" src="/images/small/7.jpg">
                <img alt="gallery" class="object-cover object-center rounded" src="/images/small/8.jpg">
                <img alt="gallery" class="object-cover object-center rounded" src="/images/small/9.jpg">
                <img alt="gallery" class="object-cover object-center rounded" src="/images/small/10.jpg">
            </div>
        </div>
    </div>

    <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
        <div class="px-6 py-4 flex items-center justify-between gap-4">
            <h5 class="grow text-lg font-medium text-default-900">Mix Images</h5>
        </div>
        <div class="p-5 border-t border-dashed border-default-200">
            <!-- Mix -->
            <div class="grid lg:grid-cols-4 md:grid-cols-3 gap-5">
                <div>
                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded" src="/images/small/10.jpg">
                </div>
                <div>
                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded" src="/images/small/2.jpg">
                </div>
                <div class=" lg:col-span-2 lg:row-span-2">
                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded" src="/images/small/3.jpg">
                </div>
                <div class=" lg:col-span-2 lg:row-span-2">
                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded" src="/images/small/1.jpg">
                </div>
                <div>
                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded" src="/images/small/4.jpg">
                </div>
                <div>
                    <img alt="gallery" class="block object-cover object-center w-full h-full rounded" src="/images/small/8.jpg">
                </div>
            </div>
        </div>
    </div>

    <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
        <div class="px-6 py-4 flex items-center justify-between gap-4">
            <h5 class="grow text-lg font-medium text-default-900">Captions</h5>
        </div>
        <div class="p-5 border-t border-dashed border-default-200">
            <!-- Caption -->
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-5">

                <div class="flex flex-wrap w-full bg-gray-100 py-32 px-10 relative lg:col-span-2">
                    <img alt="gallery" class="w-full object-cover h-full object-center block opacity-25 absolute inset-0 rounded" src="/images/small/2.jpg">
                    <div class="text-center relative z-10 w-full">
                        <h2 class="text-2xl text-gray-900 font-medium title-font mb-2">
                            Shooting
                            Stars</h2>
                        <p class="leading-relaxed">Skateboard +1 mustache fixie paleo
                            lumbersexual.
                        </p>
                        <a class="mt-3 text-indigo-500 inline-flex items-center">Learn
                            More
                            <i class="ti ti-arrow-narrow-right text-base/none ms-1"></i>
                        </a>
                    </div>
                </div>
                <div class="flex flex-wrap w-full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">
                    <img alt="gallery" class="w-full object-cover h-full object-center block opacity-25 absolute inset-0 rounded" src="/images/small/4.jpg">
                    <div class="text-center relative z-10 w-full">
                        <h2 class="text-xl text-gray-900 font-medium title-font mb-2">
                            Shooting Stars</h2>
                        <p class="leading-relaxed">Skateboard +1 mustache fixie paleo
                            lumbersexual.</p>
                        <a class="mt-3 text-indigo-500 inline-flex items-center">Learn
                            More
                            <i class="ti ti-arrow-narrow-right text-base/none ms-1"></i>
                        </a>
                    </div>
                </div>
                <div class="flex flex-wrap w-full bg-gray-100 sm:py-24 py-16 sm:px-10 px-6 relative">
                    <img alt="gallery" class="w-full object-cover h-full object-center block opacity-25 absolute inset-0 rounded" src="/images/small/6.jpg">
                    <div class="text-center relative z-10 w-full">
                        <h2 class="text-xl text-gray-900 font-medium title-font mb-2">
                            Shooting Stars</h2>
                        <p class="leading-relaxed">Skateboard +1 mustache fixie paleo
                            lumbersexual.</p>
                        <a class="mt-3 text-indigo-500 inline-flex items-center">Learn
                            More
                            <i class="ti ti-arrow-narrow-right text-base/none ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
        <div class="px-6 py-4 flex items-center justify-between gap-4">
            <h5 class="grow text-lg font-medium text-default-900">Hover Effect</h5>
        </div>
        <div class="p-5 border-t border-dashed border-default-200">
            <!-- Hover effect -->
            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5">
                <div class="flex relative">
                    <img alt="gallery" class="absolute w-full h-full object-cover object-center rounded" src="/images/small/9.jpg">
                    <div class="px-8 py-10 relative z-10 w-full bg-white opacity-0 hover:opacity-80">
                        <h2 class="tracking-widest text-sm font-semibold text-primary mb-1">
                            THE SUBTITLE</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">
                            Shooting Stars</h1>
                        <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed
                            sriracha leggings jianbing microdosing tousled waistcoat.</p>
                    </div>
                </div>
                <div class="flex relative ">
                    <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center rounded" src="/images/small/8.jpg">
                    <div class="px-8 py-10 relative z-10 w-full bg-white opacity-0 hover:opacity-80">
                        <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">
                            THE SUBTITLE</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The
                            Catalyzer</h1>
                        <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed
                            sriracha leggings jianbing microdosing tousled waistcoat.</p>
                    </div>
                </div>
                <div class="flex relative">
                    <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center rounded" src="/images/small/4.jpg">
                    <div class="px-8 py-10 relative z-10 w-full bg-white opacity-0 hover:opacity-80">
                        <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">
                            THE SUBTITLE</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The
                            400 Blows</h1>
                        <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed
                            sriracha leggings jianbing microdosing tousled waistcoat.</p>
                    </div>
                </div>
                <div class="flex relative">
                    <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center rounded" src="/images/small/2.jpg">
                    <div class="px-8 py-10 relative z-10 w-full bg-white opacity-0 hover:opacity-80">
                        <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Neptune</h1>
                        <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                    </div>
                </div>
                <div class="flex relative">
                    <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center rounded" src="/images/small/11.jpg">
                    <div class="px-8 py-10 relative z-10 w-full bg-white opacity-0 hover:opacity-80">
                        <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1"> THE SUBTITLE</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Holden Caulfield</h1>
                        <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                    </div>
                </div>
                <div class="flex relative">
                    <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center rounded" src="/images/small/5.jpg">
                    <div class="px-8 py-10 relative z-10 w-full bg-white opacity-0 hover:opacity-80">
                        <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Alper Kamu</h1>
                        <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
        <div class="px-6 py-4 flex items-center justify-between gap-4">
            <h5 class="grow text-lg font-medium text-default-900">Filter</h5>
        </div>
        <div class="p-5 border-t border-dashed border-default-200">
            <!-- Filter Images -->
            <div class="grid lg:grid-cols-5 md:grid-cols-3 sm:grid-cols-1 gap-5">
                <img alt="gallery" class="object-cover object-center rounded filter blur-sm" src="/images/small/4.jpg">
                <img alt="gallery" class="object-cover object-center rounded filter brightness-50" src="/images/small/3.jpg">
                <img alt="gallery" class="object-cover object-center rounded filter contrast-50" src="/images/small/2.jpg">
                <img alt="gallery" class="object-cover object-center rounded filter drop-shadow-2xl" src="/images/small/1.jpg">
                <img alt="gallery" class="object-cover object-center rounded filter grayscale" src="/images/small/10.jpg">
                <img alt="gallery" class="object-cover object-center rounded filter hue-rotate-60" src="/images/small/9.jpg">
                <img alt="gallery" class="object-cover object-center rounded filter invert" src="/images/small/8.jpg">
                <img alt="gallery" class="object-cover object-center rounded filter saturate-50" src="/images/small/7.jpg">
                <img alt="gallery" class="object-cover object-center rounded filter sepia" src="/images/small/6.jpg">
                <img alt="gallery" class="object-cover object-center rounded filter hue-rotate-180" src="/images/small/5.jpg">
            </div>
        </div>
    </div>

</div>

@endsection

@section('script')
  @vite(['resources/js/ui-gallery.js'])
@endsection