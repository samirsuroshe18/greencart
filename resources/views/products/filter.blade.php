@extends('layouts.base')

@section('content')

@include('layouts.shared/navbar')

@include('layouts.shared/mobile-nav')

@include('layouts.shared/page-title' ,['subtitle' => 'Product', 'title' => 'Filter'])

<section class="py-10">
    <div class="container">
        <div class="space-y-6">
            <div class="flex flex-wrap items-center gap-4">
                <div class="relative">
                    <select id="all-select-categories" data-hs-select='{
                            "placeholder": "Select Category",
                            "toggleTag": "<button type=\"button\"></button>",
                            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 block w-full rounded-md py-2 ps-4 pe-10 text-default-900 text-sm focus:ring-transparent border border-default-200 transition-all duration-300 hover:bg-default-100 before:absolute before:inset-0 before:z-[1]",
                            "dropdownClasses": "mt-2 z-50 min-w-[200px] max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-default-50",
                            "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                            "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                            }' class="hidden">
                        <option></option>
                        <option>All</option>
                        <option>Milk & Dairies</option>
                        <option>Vegetables</option>
                        <option>Baking Items</option>
                        <option>Pet Food</option>
                        <option>Bakery</option>
                    </select>

                    <div class="absolute -inset-y-0 start-auto end-3 flex items-center">
                        <i class="ti ti-chevron-down shrink text-base/none"></i>
                    </div>
                </div><!-- End Select -->

                <div class="relative">
                    <select id="all-select-categories" data-hs-select='{
                            "placeholder": "Select Vendor",
                            "toggleTag": "<button type=\"button\"></button>",
                            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 block w-full rounded-md py-2 ps-4 pe-10 text-default-900 text-sm focus:ring-transparent border border-default-200 transition-all duration-300 hover:bg-default-100 before:absolute before:inset-0 before:z-[1]",
                            "dropdownClasses": "mt-2 z-50 min-w-[200px] max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-default-50",
                            "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                            "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                            }' class="hidden">
                        <option></option>
                        <option>Macsi</option>
                        <option>Barda</option>
                        <option>Potatos</option>
                        <option>Brackers</option>
                        <option>Majetos</option>
                        <option>Alex</option>
                    </select>

                    <div class="absolute -inset-y-0 start-auto end-3 flex items-center">
                        <i class="ti ti-chevron-down shrink text-base/none"></i>
                    </div>
                </div><!-- End Select -->

                <div class="relative">
                    <select id="all-select-categories" data-hs-select='{
                            "placeholder": "Select Tag",
                            "toggleTag": "<button type=\"button\"></button>",
                            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 block w-full rounded-md py-2 ps-4 pe-10 text-default-900 text-sm focus:ring-transparent border border-default-200 transition-all duration-300 hover:bg-default-100 before:absolute before:inset-0 before:z-[1]",
                            "dropdownClasses": "mt-2 z-50 min-w-[200px] max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-default-50",
                            "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                            "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                            }' class="hidden">
                        <option></option>
                        <option>Vegetables & Fruits</option>
                        <option>Snacks</option>
                        <option>Beans</option>
                        <option>Chips</option>
                        <option>Linseed</option>
                    </select>

                    <div class="absolute -inset-y-0 start-auto end-3 flex items-center">
                        <i class="ti ti-chevron-down shrink text-base/none"></i>
                    </div>
                </div><!-- End Select -->

                <div class="relative">
                    <select id="all-select-categories" data-hs-select='{
                            "placeholder": "Select Rating",
                            "toggleTag": "<button type=\"button\"></button>",
                            "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 block w-full rounded-md py-2 ps-4 pe-10 text-default-900 text-sm focus:ring-transparent border border-default-200 transition-all duration-300 hover:bg-default-100 before:absolute before:inset-0 before:z-[1]",
                            "dropdownClasses": "mt-2 z-50 min-w-[200px] max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-default-50",
                            "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                            "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                            }' class="hidden">
                        <option>5 Star</option>
                        <option>4 Star & Up</option>
                        <option>3 Star & Up</option>
                        <option>2 Star & Up</option>
                        <option>1 Star & Up</option>
                    </select>

                    <div class="absolute -inset-y-0 start-auto end-3 flex items-center">
                        <i class="ti ti-chevron-down shrink text-base/none"></i>
                    </div>
                </div><!-- End Select -->
            </div>

            <div class="relative flex flex-wrap items-center lg:flex-nowrap gap-6 max-w-4xl">
                <div class="flex items-center gap-4 lg:w-1/2 w-full">
                    <span class="font-semibold text-default-900 text-nowrap">Price Range</span>
                    <div id="product-price-range" class="cursor-move w-full"></div>
                </div>
                <div class="lg:w-1/2 inline-flex flex-wrap xl:flex-nowrap gap-2 items-center">
                    <div class="inline-flex items-center justify-center gap-1 border border-default-200 py-2 px-4 rounded-md text-default-800">
                        Min price :
                        <input class="border-none p-0 w-10 bg-transparent focus:ring-0" id="minCost" type="text" value="0">
                    </div><!-- end min-price -->
                    <div class="inline-flex items-center justify-center gap-1 border border-default-200 py-2 px-4 rounded-md text-default-800">
                        Max price :
                        <input class="border-none p-0 w-10 bg-transparent focus:ring-0" id="maxCost" type="text" value="1000">
                    </div><!-- end max-price -->
                </div>
            </div>
        </div>
    </div><!-- end container -->
</section><!-- end filter -->

<section class="pb-10">
    <div class="container">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
            <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                <div class="p-4">
                    <div class="relative">
                        <div class="absolute top-0 start-0">
                            <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-primary/10 text-primary">Sale</span>
                        </div>
                        <div class="absolute top-0 end-0">
                            <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-red-500/10 text-red-500">Hot</span>
                        </div>
                        <img src="/images/product/1.png" alt="" class="w-full h-full">
                    </div>
                </div>

                <div class="border-t border-dashed border-default-200 p-4">
                    <div class="mb-4">
                        <a href="{{ route('second', ['products', 'details']) }}" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Banana</a>
                    </div>

                    <div class="flex items-center justify-between gap-2 mb-4">
                        <span class="flex items-center gap-2">
                            <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>
                            <span class="text-sm text-default-950 from-inherit">4.5</span>
                        </span>

                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number="">
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement="">
                                <i class="ti ti-minus"></i>
                            </button>
                            <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input="">
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment="">
                                <i class="ti ti-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <h4 class="font-semibold text-xl text-primary">$15 <span class="text-default-400 text-base line-through">$25</span> </h4>
                        <a href="{{ route('second', ['pages', 'cart']) }}" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                            <i class="ti ti-shopping-bag text-xl me-2"></i>
                            <span>Add to cart</span>
                        </a><!-- end btn -->
                    </div>
                </div>
            </div><!-- end card -->

            <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                <div class="p-4">
                    <div class="relative">
                        <div class="absolute top-0 end-0">
                            <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-red-500/10 text-red-500">Hot</span>
                        </div>
                        <img src="/images/product/2.png" alt="" class="w-full h-full">
                    </div>
                </div>

                <div class="border-t border-dashed border-default-200 p-4">
                    <div class="mb-4">
                        <a href="{{ route('second', ['products', 'details']) }}" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Shale Snacks</a>
                    </div>

                    <div class="flex items-center justify-between gap-2 mb-4">
                        <span class="flex items-center gap-2">
                            <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>
                            <span class="text-sm text-default-950 from-inherit">3.9</span>
                        </span>

                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number="">
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement="">
                                <i class="ti ti-minus"></i>
                            </button>
                            <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input="">
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment="">
                                <i class="ti ti-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <h4 class="font-semibold text-xl text-primary">$18</h4>
                        <a href="{{ route('second', ['pages', 'cart']) }}" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                            <i class="ti ti-shopping-bag text-xl me-2"></i>
                            <span>Add to cart</span>
                        </a><!-- end btn -->
                    </div>
                </div>
            </div><!-- end card -->

            <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                <div class="p-4">
                    <div class="relative">
                        <div class="absolute top-0 start-0">
                            <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-primary/10 text-primary">Sale</span>
                        </div>
                        <img src="/images/product/3.png" alt="" class="w-full h-full">
                    </div>
                </div>

                <div class="border-t border-dashed border-default-200 p-4">
                    <div class="mb-4">
                        <a href="{{ route('second', ['products', 'details']) }}" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Grapes</a>
                    </div>

                    <div class="flex items-center justify-between gap-2 mb-4">
                        <span class="flex items-center gap-2">
                            <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>
                            <span class="text-sm text-default-950 from-inherit">4.2</span>
                        </span>

                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number="">
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement="">
                                <i class="ti ti-minus"></i>
                            </button>
                            <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input="">
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment="">
                                <i class="ti ti-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <h4 class="font-semibold text-xl text-primary">$22 <span class="text-default-400 text-base line-through">$32</span> </h4>
                        <a href="{{ route('second', ['pages', 'cart']) }}" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                            <i class="ti ti-shopping-bag text-xl me-2"></i>
                            <span>Add to cart</span>
                        </a><!-- end btn -->
                    </div>
                </div>
            </div><!-- end card -->

            <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                <div class="p-4">
                    <div class="relative">
                        <img src="/images/product/4.png" alt="" class="w-full h-full">
                    </div>
                </div>

                <div class="border-t border-dashed border-default-200 p-4">
                    <div class="mb-4">
                        <a href="{{ route('second', ['products', 'details']) }}" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Banana Chips</a>
                    </div>

                    <div class="flex items-center justify-between gap-2 mb-4">
                        <span class="flex items-center gap-2">
                            <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>
                            <span class="text-sm text-default-950 from-inherit">3.7</span>
                        </span>

                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number="">
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement="">
                                <i class="ti ti-minus"></i>
                            </button>
                            <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input="">
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment="">
                                <i class="ti ti-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <h4 class="font-semibold text-xl text-primary">$8</h4>
                        <a href="{{ route('second', ['pages', 'cart']) }}" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                            <i class="ti ti-shopping-bag text-xl me-2"></i>
                            <span>Add to cart</span>
                        </a><!-- end btn -->
                    </div>
                </div>
            </div><!-- end card -->

            <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                <div class="p-4">
                    <div class="relative">
                        <img src="/images/product/5.png" alt="" class="w-full h-full">
                        <div class="absolute top-0 end-0">
                            <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-red-500/10 text-red-500">Hot</span>
                        </div>
                    </div>
                </div>

                <div class="border-t border-dashed border-default-200 p-4">
                    <div class="mb-4">
                        <a href="{{ route('second', ['products', 'details']) }}" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">ProtinX</a>
                    </div>

                    <div class="flex items-center justify-between gap-2 mb-4">
                        <span class="flex items-center gap-2">
                            <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>
                            <span class="text-sm text-default-950 from-inherit">4.7</span>
                        </span>

                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number="">
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement="">
                                <i class="ti ti-minus"></i>
                            </button>
                            <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input="">
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment="">
                                <i class="ti ti-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <h4 class="font-semibold text-xl text-primary">$66 </h4>
                        <a href="{{ route('second', ['pages', 'cart']) }}" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                            <i class="ti ti-shopping-bag text-xl me-2"></i>
                            <span>Add to cart</span>
                        </a><!-- end btn -->
                    </div>
                </div>
            </div><!-- end card -->

            <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                <div class="p-4">
                    <div class="relative">
                        <img src="/images/product/6.png" alt="" class="w-full h-full">
                        <div class="absolute top-0 start-0">
                            <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-primary/10 text-primary">Sale</span>
                        </div>
                    </div>
                </div>

                <div class="border-t border-dashed border-default-200 p-4">
                    <div class="mb-4">
                        <a href="{{ route('second', ['products', 'details']) }}" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Nuts &amp; Berries</a>
                    </div>

                    <div class="flex items-center justify-between gap-2 mb-4">
                        <span class="flex items-center gap-2">
                            <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>
                            <span class="text-sm text-default-950 from-inherit">4.9</span>
                        </span>

                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number="">
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement="">
                                <i class="ti ti-minus"></i>
                            </button>
                            <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input="">
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment="">
                                <i class="ti ti-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <h4 class="font-semibold text-xl text-primary">$74 <span class="text-default-400 text-base line-through">$89</span> </h4>
                        <a href="{{ route('second', ['pages', 'cart']) }}" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                            <i class="ti ti-shopping-bag text-xl me-2"></i>
                            <span>Add to cart</span>
                        </a><!-- end btn -->
                    </div>
                </div>
            </div><!-- end card -->

            <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                <div class="p-4">
                    <div class="relative">
                        <img src="/images/product/7.png" alt="" class="w-full h-full">
                        <div class="absolute top-0 start-0">
                            <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-primary/10 text-primary">Sale</span>
                        </div>
                        <div class="absolute top-0 end-0">
                            <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-red-500/10 text-red-500">Hot</span>
                        </div>
                    </div>
                </div>

                <div class="border-t border-dashed border-default-200 p-4">
                    <div class="mb-4">
                        <a href="{{ route('second', ['products', 'details']) }}" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Avocado</a>
                    </div>

                    <div class="flex items-center justify-between gap-2 mb-4">
                        <span class="flex items-center gap-2">
                            <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>
                            <span class="text-sm text-default-950 from-inherit">4.6</span>
                        </span>

                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number="">
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement="">
                                <i class="ti ti-minus"></i>
                            </button>
                            <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input="">
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment="">
                                <i class="ti ti-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <h4 class="font-semibold text-xl text-primary">$46 <span class="text-default-400 text-base line-through">$89</span> </h4>
                        <a href="{{ route('second', ['pages', 'cart']) }}" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                            <i class="ti ti-shopping-bag text-xl me-2"></i>
                            <span>Add to cart</span>
                        </a><!-- end btn -->
                    </div>
                </div>
            </div><!-- end card -->

            <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                <div class="p-4">
                    <div class="relative">
                        <img src="/images/product/8.png" alt="" class="w-full h-full">
                        <div class="absolute top-0 end-0">
                            <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-red-500/10 text-red-500">Hot</span>
                        </div>
                    </div>
                </div>

                <div class="border-t border-dashed border-default-200 p-4">
                    <div class="mb-4">
                        <a href="{{ route('second', ['products', 'details']) }}" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Chicken Meat</a>
                    </div>

                    <div class="flex items-center justify-between gap-2 mb-4">
                        <span class="flex items-center gap-2">
                            <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>
                            <span class="text-sm text-default-950 from-inherit">4.3</span>
                        </span>

                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number="">
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement="">
                                <i class="ti ti-minus"></i>
                            </button>
                            <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input="">
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment="">
                                <i class="ti ti-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <h4 class="font-semibold text-xl text-primary">$59</h4>
                        <a href="{{ route('second', ['pages', 'cart']) }}" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                            <i class="ti ti-shopping-bag text-xl me-2"></i>
                            <span>Add to cart</span>
                        </a><!-- end btn -->
                    </div>
                </div>
            </div><!-- end card -->

            <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                <div class="p-4">
                    <div class="relative">
                        <img src="/images/product/9.png" alt="" class="w-full h-full">
                    </div>
                </div>

                <div class="border-t border-dashed border-default-200 p-4">
                    <div class="mb-4">
                        <a href="{{ route('second', ['products', 'details']) }}" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Watermelon</a>
                    </div>

                    <div class="flex items-center justify-between gap-2 mb-4">
                        <span class="flex items-center gap-2">
                            <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>
                            <span class="text-sm text-default-950 from-inherit">4.3</span>
                        </span>

                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number="">
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement="">
                                <i class="ti ti-minus"></i>
                            </button>
                            <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input="">
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment="">
                                <i class="ti ti-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <h4 class="font-semibold text-xl text-primary">$42</h4>
                        <a href="{{ route('second', ['pages', 'cart']) }}" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                            <i class="ti ti-shopping-bag text-xl me-2"></i>
                            <span>Add to cart</span>
                        </a><!-- end btn -->
                    </div>
                </div>
            </div><!-- end card -->

            <div class="border border-default-200 rounded-xl overflow-hidden duration-500 hover:border-primary relative">
                <div class="p-4">
                    <div class="relative">
                        <img src="/images/product/11.png" alt="" class="w-full h-full">
                        <div class="absolute top-0 start-0">
                            <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-primary/10 text-primary">Sale</span>
                        </div>
                        <div class="absolute top-0 end-0">
                            <span class="inline-flex items-center gap-1.5 py-1 px-4 rounded-lg text-sm font-medium bg-red-500/10 text-red-500">Hot</span>
                        </div>
                    </div>
                </div>

                <div class="border-t border-dashed border-default-200 p-4">
                    <div class="mb-4">
                        <a href="{{ route('second', ['products', 'details']) }}" class="text-default-600 text-xl font-semibold line-clamp-1 after:absolute after:inset-0 after:z-0">Kiwi</a>
                    </div>

                    <div class="flex items-center justify-between gap-2 mb-4">
                        <span class="flex items-center gap-2">
                            <span class="h-5 w-5 inline-flex items-center justify-center bg-primary text-white rounded-full"><i class="ti ti-star-filled text-sm"></i></span>
                            <span class="text-sm text-default-950 from-inherit">4.3</span>
                        </span>

                        <div class="relative z-10 inline-flex justify-between border border-default-200 p-1 rounded-full" data-hs-input-number="">
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-decrement="">
                                <i class="ti ti-minus"></i>
                            </button>
                            <input type="number" class="w-8 border-0 text-sm text-center text-default-800 focus:ring-0 p-0 bg-transparent" value="1" data-hs-input-number-input="">
                            <button class="shrink bg-default-200 text-default-800 rounded-full h-6 w-6 text-sm inline-flex items-center justify-center" type="button" data-hs-input-number-increment="">
                                <i class="ti ti-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-2">
                        <h4 class="font-semibold text-xl text-primary">$68 <span class="text-default-400 text-base line-through">$77</span> </h4>
                        <a href="{{ route('second', ['pages', 'cart']) }}" class="shrink flex items-center justify-center rounded-lg bg-primary/20 text-primary px-6 py-2.5 text-center text-sm font-medium shadow-sm transition-all duration-200 hover:bg-primary hover:text-white relative z-10">
                            <i class="ti ti-shopping-bag text-xl me-2"></i>
                            <span>Add to cart</span>
                        </a><!-- end btn -->
                    </div>
                </div>
            </div><!-- end card -->
        </div>

        <div class="pt-10">
            <div class="flex flex-wrap gap-6 items-center justify-end">
                <div class="flex gap-x-2 justify-end items-center">
                    <a href="#" class="w-10 h-10 flex justify-center items-center bg-primary/20 text-primary text-base font-semibold rounded-full hover:bg-primary hover:text-white">
                        <i class="ti ti-chevron-left"></i>
                    </a>
                    <a href="#" class="w-10 h-10 flex justify-center items-center bg-primary text-white text-base font-semibold rounded-full">1</a>

                    <a href="#" class="w-10 h-10 flex justify-center items-center bg-primary/20 text-primary text-base font-semibold rounded-full hover:bg-primary hover:text-white">2</a>

                    <a href="#" class="w-10 h-10 flex justify-center items-center bg-primary/20 text-primary text-base font-semibold rounded-full hover:bg-primary hover:text-white">...</a>

                    <a href="#" class="w-10 h-10 flex justify-center items-center bg-primary/20 text-primary text-base font-semibold rounded-full hover:bg-primary hover:text-white">16</a>

                    <a href="#" class="w-10 h-10 flex justify-center items-center bg-primary/20 text-primary text-base font-semibold rounded-full hover:bg-primary hover:text-white">
                        <i class="ti ti-chevron-right"></i>
                    </a>
                </div><!-- end flex -->
            </div><!-- end flex -->
        </div><!-- end pt-10 -->
    </div><!-- end container -->
</section><!-- end products -->

@include('layouts.shared/footer')

@endsection

@section('script')
@vite(['resources/js/product-categories.js'])
@endsection