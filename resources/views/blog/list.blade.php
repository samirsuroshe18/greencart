@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Blog', 'title' => 'Blog List'])

    <div class="grid  md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit overflow-hidden">
            <div class="">
                <img src="/images/product/1.png" alt="" class="w-full h-full">
            </div>

            <div class="px-4 py-3 border-y border-dashed border-default-200">
                <div class="flex items-center justify-start gap-2">
                    <div class="shrink h-12 w-12 inline-flex items-center justify-center rounded-full">
                        <img src="/images/avatars/1.png" alt="" class="max-w-full h-full rounded-full">
                    </div>
                    <div class="grow">
                        <h6 class="text-sm font-semibold text-default-900 mb-1">Justin Kim</h6>
                        <p class="text-xs font-medium text-default-600">20,Dec 2023</p>
                    </div>
                </div>
            </div>
            <div class="px-5 py-5">
                <a href="{{ route('second' ,['blog', 'detail']) }}" class="block text-lg font-medium text-default-900 hover:text-primary duration-500 ease-in-out truncate">Bountiful Banana Brilliance</a>
                <p class="text-default-500 mt-3 line-clamp-2">Discover the luscious sweetness and natural goodness of our bananas. Packed with energy and flavor, they're the perfect on-the-go snack for a healthy and delicious pick-me-up.</p>
                <div class="mt-4">
                    <a href="{{ route('second' ,['blog', 'detail']) }}" class="relative inline-flex items-center justify-center gap-2 font-medium align-middle text-default-900 text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 hover:text-primary after:bg-primary-500 duration-500 ease-in-out">Read More <i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div><!-- end grid-col -->

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit overflow-hidden">
            <div class="">
                <img src="/images/product/2.png" alt="" class="w-full h-full">
            </div>

            <div class="px-4 py-3 border-y border-dashed border-default-200">
                <div class="flex items-center justify-start gap-2">
                    <div class="shrink h-12 w-12 inline-flex items-center justify-center rounded-full">
                        <img src="/images/avatars/2.png" alt="" class="max-w-full h-full rounded-full">
                    </div>
                    <div class="grow">
                        <h6 class="text-sm font-semibold text-default-900 mb-1">William Daugherty</h6>
                        <p class="text-xs font-medium text-default-600">12,Oct 2023</p>
                    </div>
                </div>
            </div>
            <div class="px-5 py-5">
                <a href="{{ route('second' ,['blog', 'detail']) }}" class="block text-lg font-medium text-default-900 hover:text-primary duration-500 ease-in-out truncate">Elevate Snacking: Sahale Delights Await!</a>
                <p class="text-default-500 mt-3 line-clamp-2">Sahale Snacks redefine snacking excellence with irresistibly unique flavors and premium ingredients.</p>
                <div class="mt-4">
                    <a href="{{ route('second' ,['blog', 'detail']) }}" class="relative inline-flex items-center justify-center gap-2 font-medium align-middle text-default-900 text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 hover:text-primary after:bg-primary-500 duration-500 ease-in-out">Read More <i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div><!-- end grid-col -->

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit overflow-hidden">
            <div class="">
                <img src="/images/product/3.png" alt="" class="w-full h-full">
            </div>

            <div class="px-4 py-3 border-y border-dashed border-default-200">
                <div class="flex items-center justify-start gap-2">
                    <div class="shrink h-12 w-12 inline-flex items-center justify-center rounded-full">
                        <img src="/images/avatars/3.png" alt="" class="max-w-full h-full rounded-full">
                    </div>
                    <div class="grow">
                        <h6 class="text-sm font-semibold text-default-900 mb-1">Raymond Marano</h6>
                        <p class="text-xs font-medium text-default-600">10,Dec 2023</p>
                    </div>
                </div>
            </div>
            <div class="px-5 py-5">
                <a href="{{ route('second' ,['blog', 'detail']) }}" class="block text-lg font-medium text-default-900 hover:text-primary duration-500 ease-in-out truncate">Grapes Galore: Nature's Sweetest Jewels!</a>
                <p class="text-default-500 mt-3 line-clamp-2">Dive into a world of natural sweetness with our plump and juicy grapes, a flavorful journey in every bite.</p>
                <div class="mt-4">
                    <a href="{{ route('second' ,['blog', 'detail']) }}" class="relative inline-flex items-center justify-center gap-2 font-medium align-middle text-default-900 text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 hover:text-primary after:bg-primary-500 duration-500 ease-in-out">Read More <i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div><!-- end grid-col -->

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit overflow-hidden">
            <div class="">
                <img src="/images/product/4.png" alt="" class="w-full h-full">
            </div>

            <div class="px-4 py-3 border-y border-dashed border-default-200">
                <div class="flex items-center justify-start gap-2">
                    <div class="shrink h-12 w-12 inline-flex items-center justify-center rounded-full">
                        <img src="/images/avatars/4.png" alt="" class="max-w-full h-full rounded-full">
                    </div>
                    <div class="grow">
                        <h6 class="text-sm font-semibold text-default-900 mb-1">Raymond Marano</h6>
                        <p class="text-xs font-medium text-default-600">14,Dec 2023</p>
                    </div>
                </div>
            </div>
            <div class="px-5 py-5">
                <a href="{{ route('second' ,['blog', 'detail']) }}" class="block text-lg font-medium text-default-900 hover:text-primary duration-500 ease-in-out truncate">Crunchy Perfection: Banana Chips Delight!</a>
                <p class="text-default-500 mt-3 line-clamp-2">Enjoy the crisp and wholesome goodness of our banana chips – a delightful snack that brings the tropical flair to your fingertips.</p>
                <div class="mt-4">
                    <a href="{{ route('second' ,['blog', 'detail']) }}" class="relative inline-flex items-center justify-center gap-2 font-medium align-middle text-default-900 text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 hover:text-primary after:bg-primary-500 duration-500 ease-in-out">Read More <i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div><!-- end grid-col -->

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit overflow-hidden">
            <div class="">
                <img src="/images/product/5.png" alt="" class="w-full h-full">
            </div>

            <div class="px-4 py-3 border-y border-dashed border-default-200">
                <div class="flex items-center justify-start gap-2">
                    <div class="shrink h-12 w-12 inline-flex items-center justify-center rounded-full">
                        <img src="/images/avatars/5.png" alt="" class="max-w-full h-full rounded-full">
                    </div>
                    <div class="grow">
                        <h6 class="text-sm font-semibold text-default-900 mb-1">Anthony Cannon</h6>
                        <p class="text-xs font-medium text-default-600">16,Apr 2023</p>
                    </div>
                </div>
            </div>
            <div class="px-5 py-5">
                <a href="{{ route('second' ,['blog', 'detail']) }}" class="block text-lg font-medium text-default-900 hover:text-primary duration-500 ease-in-out truncate">Protein Power in Every Scoop!</a>
                <p class="text-default-500 mt-3 line-clamp-2">Elevate your fitness journey with our protein powder, a potent blend for strength and recovery.</p>
                <div class="mt-4">
                    <a href="{{ route('second' ,['blog', 'detail']) }}" class="relative inline-flex items-center justify-center gap-2 font-medium align-middle text-default-900 text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 hover:text-primary after:bg-primary-500 duration-500 ease-in-out">Read More <i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div><!-- end grid-col -->

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit overflow-hidden">
            <div class="">
                <img src="/images/product/6.png" alt="" class="w-full h-full">
            </div>

            <div class="px-4 py-3 border-y border-dashed border-default-200">
                <div class="flex items-center justify-start gap-2">
                    <div class="shrink h-12 w-12 inline-flex items-center justify-center rounded-full">
                        <img src="/images/avatars/6.png" alt="" class="max-w-full h-full rounded-full">
                    </div>
                    <div class="grow">
                        <h6 class="text-sm font-semibold text-default-900 mb-1">Anthony Cannon</h6>
                        <p class="text-xs font-medium text-default-600">20,Nov 2023</p>
                    </div>
                </div>
            </div>
            <div class="px-5 py-5">
                <a href="{{ route('second' ,['blog', 'detail']) }}" class="block text-lg font-medium text-default-900 hover:text-primary duration-500 ease-in-out truncate">Nature's Duo: Nuts & Berries.</a>
                <p class="text-default-500 mt-3 line-clamp-2">Savor the delightful combination of crunchy nuts and succulent berries in every bite.</p>
                <div class="mt-4">
                    <a href="{{ route('second' ,['blog', 'detail']) }}" class="relative inline-flex items-center justify-center gap-2 font-medium align-middle text-default-900 text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 hover:text-primary after:bg-primary-500 duration-500 ease-in-out">Read More <i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div><!-- end grid-col -->

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit overflow-hidden">
            <div class="">
                <img src="/images/product/7.png" alt="" class="w-full h-full">
            </div>

            <div class="px-4 py-3 border-y border-dashed border-default-200">
                <div class="flex items-center justify-start gap-2">
                    <div class="shrink h-12 w-12 inline-flex items-center justify-center rounded-full">
                        <img src="/images/avatars/7.png" alt="" class="max-w-full h-full rounded-full">
                    </div>
                    <div class="grow">
                        <h6 class="text-sm font-semibold text-default-900 mb-1">Mary Hopkins</h6>
                        <p class="text-xs font-medium text-default-600">18,Apr 2023</p>
                    </div>
                </div>
            </div>
            <div class="px-5 py-5">
                <a href="{{ route('second' ,['blog', 'detail']) }}" class="block text-lg font-medium text-default-900 hover:text-primary duration-500 ease-in-out truncate">Creamy Marvel: The Avocado Extravaganza!</a>
                <p class="text-default-500 mt-3 line-clamp-2">Indulge in the buttery richness and healthful allure of avocados – nature's green treasure.</p>
                <div class="mt-4">
                    <a href="{{ route('second' ,['blog', 'detail']) }}" class="relative inline-flex items-center justify-center gap-2 font-medium align-middle text-default-900 text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 hover:text-primary after:bg-primary-500 duration-500 ease-in-out">Read More <i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div><!-- end grid-col -->

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit overflow-hidden">
            <div class="">
                <img src="/images/product/8.png" alt="" class="w-full h-full">
            </div>

            <div class="px-4 py-3 border-y border-dashed border-default-200">
                <div class="flex items-center justify-start gap-2">
                    <div class="shrink h-12 w-12 inline-flex items-center justify-center rounded-full">
                        <img src="/images/avatars/8.png" alt="" class="max-w-full h-full rounded-full">
                    </div>
                    <div class="grow">
                        <h6 class="text-sm font-semibold text-default-900 mb-1">Barbara Hughes</h6>
                        <p class="text-xs font-medium text-default-600">1,Jan 2023</p>
                    </div>
                </div>
            </div>
            <div class="px-5 py-5">
                <a href="{{ route('second' ,['blog', 'detail']) }}" class="block text-lg font-medium text-default-900 hover:text-primary duration-500 ease-in-out truncate">Meat Magic Awaits!</a>
                <p class="text-default-500 mt-3 line-clamp-2">Premium meats, endless possibilities. Meat perfection in every bite.</p>
                <div class="mt-4">
                    <a href="{{ route('second' ,['blog', 'detail']) }}" class="relative inline-flex items-center justify-center gap-2 font-medium align-middle text-default-900 text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:duration-500 hover:text-primary after:bg-primary-500 duration-500 ease-in-out">Read More <i class="ti ti-arrow-right"></i></a>
                </div>
            </div>
        </div><!-- end grid-col -->
    </div><!-- end grid -->

    <nav class="flex items-center justify-end gap-1">
        <a class="inline-flex items-center justify-center h-8 w-8 border border-default-200 rounded-md text-default-950 transition-all duration-200 hover:bg-primary hover:text-white hover:border-primary" href="#">
            <i class="ti ti-chevron-left text-base"></i>
        </a>
        <a class="inline-flex items-center justify-center h-8 w-8 border rounded-md transition-all duration-200 bg-primary text-white border-primary" href="#" aria-current="page">1</a>
        <a class="inline-flex items-center justify-center h-8 w-8 border border-default-200 rounded-md text-default-950 transition-all duration-200 hover:bg-primary hover:text-white hover:border-primary" href="#">2</a>
        <a class="inline-flex items-center justify-center h-8 w-8 border border-default-200 rounded-md text-default-950 transition-all duration-200 hover:bg-primary hover:text-white hover:border-primary" href="#">...</a>
        <a class="inline-flex items-center justify-center h-8 w-8 border border-default-200 rounded-md text-default-950 transition-all duration-200 hover:bg-primary hover:text-white hover:border-primary" href="#">12</a>
        <a class="inline-flex items-center justify-center h-8 w-8 border border-default-200 rounded-md text-default-950 transition-all duration-200 hover:bg-primary hover:text-white hover:border-primary" href="#">
            <i class="ti ti-chevron-right text-base"></i>
        </a>
    </nav>
</div>

@endsection