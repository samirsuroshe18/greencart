@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Sellers', 'title' => 'Sellers List'])

    <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="p-5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-base font-semibold text-default-600">All Sellers</p>
                        <h4 class="text-2xl font-semibold text-default-900 mt-4">198K</h4>
                    </div>
                    <span class="shrink h-18 w-18 inline-flex items-center justify-center rounded-lg bg-primary/20 text-primary">
                        <i class="ti ti-chalkboard text-4xl"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="p-5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-base font-semibold text-default-600">New Sellers</p>
                        <h4 class="text-2xl font-semibold text-default-900 mt-4">30K</h4>
                    </div>
                    <span class="shrink h-18 w-18 inline-flex items-center justify-center rounded-lg bg-cyan-500/20 text-cyan-500">
                        <i class="ti ti-brand-planetscale text-4xl"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="p-5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-base font-semibold text-default-600">Active Sellers</p>
                        <h4 class="text-2xl font-semibold text-default-900 mt-4">150K</h4>
                    </div>
                    <span class="shrink h-18 w-18 inline-flex items-center justify-center rounded-lg bg-amber-500/20 text-amber-500">
                        <i class="ti ti-activity-heartbeat text-4xl"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="p-5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-base font-semibold text-default-600">Blocked Sellers</p>
                        <h4 class="text-2xl font-semibold text-default-900 mt-4">18K</h4>
                    </div>
                    <span class="shrink h-18 w-18 inline-flex items-center justify-center rounded-lg bg-red-500/20 text-red-500">
                        <i class="ti ti-circle-off text-4xl"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
        <div class="flex flex-wrap items-center justify-between py-4 px-5">
            <div class="relative lg:flex hidden">
                <input type="search" class="ps-12 pe-4 py-2.5 block w-64 bg-default-50/0 text-default-600 border-default-200 rounded-lg text-sm focus:border-primary focus:ring-primary" placeholder="Search...">
                <span class="absolute start-4 top-2.5">
                    <i class="ti ti-search text-lg/none"></i>
                </span>
            </div>

            <div class="flex flex-wrap items-center gap-2">
                <div class="relative">
                    <select id="all-select-categories" data-hs-select='{
                          "placeholder": "Filter Options",
                          "toggleTag": "<button type=\"button\"></button>",
                          "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 form-input block w-full rounded py-2.5 ps-4 pe-10 text-default-800 text-sm focus:ring-transparent border-0 bg-default-100 before:absolute before:inset-0 before:z-[1]",
                          "dropdownClasses": "mt-2 z-50 min-w-[200px] max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-lg overflow-hidden overflow-y-auto dark:bg-default-50",
                          "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                          "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                          }' class="hidden">
                        <option></option>
                        <option selected>All</option>
                        <option>Refund</option>
                        <option>Paid</option>
                        <option>Cancel</option>
                    </select>


                    <div class="absolute -inset-y-0 end-3 flex items-center">
                        <i class="ti ti-selector shrink text-base/none text-default-500"></i>
                    </div>
                </div><!-- End Select -->

                <div class="relative">
                    <i class="ti ti-calendar text-lg text-default-700 absolute top-1/2 start-2.5 -translate-y-1/2"></i>
                    <i class="ti ti-chevron-down text-lg text-default-700 absolute top-1/2 end-2.5 -translate-y-1/2"></i>
                    <input type="text" class="py-2.5 w-40 px-9 block bg-default-100 rounded-md border-0 text-sm text-default-700 font-medium focus:border-default-200 focus:ring-0 flatpickr-input" id="datepicker-basic" readonly="readonly">
                </div><!-- end relative -->

                <a href="{{ route('second', ['sellers', 'add']) }}" class="relative overflow-hidden py-2.5 pe-6 ps-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-sm text-center bg-primary-600 text-white rounded-full hover:bg-primary-700">
                    <span class="absolute top-1/2 -translate-y-1/2 start-0 h-full w-10 rounded-full inline-flex items-center justify-center bg-white/20 text-white me-3"><i class="ti ti-circle-plus text-xl"></i></span>
                    Add Seller
                </a>
            </div>
        </div>
        <div class="border-t border-dashed border-default-200 relative overflow-x-auto">
            <table class="min-w-full">
                <thead class="border-b border-dashed border-default-200">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-start min-w-4">
                            <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                        </th>
                        <th scope="col" class="px-6 py-3 text-start text-sm capitalize font-semibold text-default-900">Sellers Name</th>
                        <th scope="col" class="px-6 py-3 text-start text-sm capitalize font-semibold text-default-900">Email</th>
                        <th scope="col" class="px-6 py-3 text-start text-sm capitalize font-semibold text-default-900">Phone</th>
                        <th scope="col" class="px-6 py-3 text-start text-sm capitalize font-semibold text-default-900">Orders</th>
                        <th scope="col" class="px-6 py-3 text-start text-sm capitalize font-semibold text-default-900">Order Total</th>
                        <th scope="col" class="px-6 py-3 text-start text-sm capitalize font-semibold text-default-900">Sellers Since</th>
                        <th scope="col" class="px-6 py-3 text-start text-sm capitalize font-semibold text-default-900">Status</th>
                        <th scope="col" class="px-6 py-3 text-center text-sm capitalize font-semibold text-default-900 min-w-32">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-default-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">
                            <span class="flex items-center gap-2">
                                <span class="h-8 w-8 inline-flex items-center justify-center rounded-full">
                                    <img src="/images/avatars/1.png" alt="avatar" class="max-w-full h-full rounded-full">
                                </span>
                                <h6 class="text-sm font-semibold text-default-700">Paityn Herwitz</h6>
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">wlopez@outlook.com</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">739-813-1211</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">17</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">$ 662.00</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">Apr 02 2023 | <span class="text-xs">02:05:36</span> </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-green-500/10 text-green-500">Active</span>
                        </td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('second', ['sellers', 'detail']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <a href="{{ route('second', ['sellers', 'edit']) }}" type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit-circle text-base"></i>
                                </a>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">
                            <span class="flex items-center gap-2">
                                <span class="h-8 w-8 inline-flex items-center justify-center rounded-full">
                                    <img src="/images/avatars/2.png" alt="avatar" class="max-w-full h-full rounded-full">
                                </span>
                                <h6 class="text-sm font-semibold text-default-700">Randy Siphron</h6>
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">lwhite@icloud.com</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">895-528-6760</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">03</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">$ 448.00</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">Jan 17 2023 | <span class="text-xs">06:35:32</span> </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-red-500/10 text-red-500">Block</span>
                        </td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('second', ['sellers', 'detail']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <a href="{{ route('second', ['sellers', 'edit']) }}" type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit-circle text-base"></i>
                                </a>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">
                            <span class="flex items-center gap-2">
                                <span class="h-8 w-8 inline-flex items-center justify-center rounded-full">
                                    <img src="/images/avatars/3.png" alt="avatar" class="max-w-full h-full rounded-full">
                                </span>
                                <h6 class="text-sm font-semibold text-default-700">Livia Kenter</h6>
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">cbaker@hotmail.com</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">759-215-8839</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">07</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">$ 941.00</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">Dec 29 2020 | <span class="text-xs">13:09:57</span> </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-green-500/10 text-green-500">Active</span>
                        </td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('second', ['sellers', 'detail']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <a href="{{ route('second', ['sellers', 'edit']) }}" type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit-circle text-base"></i>
                                </a>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">
                            <span class="flex items-center gap-2">
                                <span class="h-8 w-8 inline-flex items-center justify-center rounded-full">
                                    <img src="/images/avatars/4.png" alt="avatar" class="max-w-full h-full rounded-full">
                                </span>
                                <h6 class="text-sm font-semibold text-default-700">Ann Vetrovs</h6>
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">htaylor@aol.com</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">801-740-7902</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">06</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">$ 133.00</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">Dec 16 2016 | <span class="text-xs">20:14:39</span> </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-green-500/10 text-green-500">Active</span>
                        </td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('second', ['sellers', 'detail']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <a href="{{ route('second', ['sellers', 'edit']) }}" type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit-circle text-base"></i>
                                </a>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">
                            <span class="flex items-center gap-2">
                                <span class="h-8 w-8 inline-flex items-center justify-center rounded-full">
                                    <img src="/images/avatars/5.png" alt="avatar" class="max-w-full h-full rounded-full">
                                </span>
                                <h6 class="text-sm font-semibold text-default-700">Roger Korsgaard</h6>
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">ksmith@yahoo.com</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">705-498-5991</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">02</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">$ 824.00</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">Aug 26 2023 | <span class="text-xs">10:34:09</span> </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-green-500/10 text-green-500">Active</span>
                        </td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('second', ['sellers', 'detail']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <a href="{{ route('second', ['sellers', 'edit']) }}" type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit-circle text-base"></i>
                                </a>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">
                            <span class="flex items-center gap-2">
                                <span class="h-8 w-8 inline-flex items-center justify-center rounded-full">
                                    <img src="/images/avatars/6.png" alt="avatar" class="max-w-full h-full rounded-full">
                                </span>
                                <h6 class="text-sm font-semibold text-default-700">Ruben Calzoni</h6>
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">qdavis@mail.com</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">855-338-4990</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">13</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">$ 238.00</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">Jul 19 2023 | <span class="text-xs">16:48:10</span> </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-red-500/10 text-red-500">Block</span>
                        </td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('second', ['sellers', 'detail']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <a href="{{ route('second', ['sellers', 'edit']) }}" type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit-circle text-base"></i>
                                </a>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">
                            <span class="flex items-center gap-2">
                                <span class="h-8 w-8 inline-flex items-center justify-center rounded-full">
                                    <img src="/images/avatars/7.png" alt="avatar" class="max-w-full h-full rounded-full">
                                </span>
                                <h6 class="text-sm font-semibold text-default-700">Talan Dokidis</h6>
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">rgarcia@hotmail.com</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">348-508-9895</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">14</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">$ 679.00</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">Sep 14 2021 | <span class="text-xs">20:24:37</span> </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-red-500/10 text-red-500">Block</span>
                        </td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('second', ['sellers', 'detail']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <a href="{{ route('second', ['sellers', 'edit']) }}" type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit-circle text-base"></i>
                                </a>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">
                            <span class="flex items-center gap-2">
                                <span class="h-8 w-8 inline-flex items-center justify-center rounded-full">
                                    <img src="/images/avatars/8.png" alt="avatar" class="max-w-full h-full rounded-full">
                                </span>
                                <h6 class="text-sm font-semibold text-default-700">Carter George</h6>
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">bwhite@mail.com</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">422-949-1555</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">06</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">$ 979.00</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">Oct 09 2019 | <span class="text-xs">10:16:48</span> </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-green-500/10 text-green-500">Active</span>
                        </td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('second', ['sellers', 'detail']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <a href="{{ route('second', ['sellers', 'edit']) }}" type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit-circle text-base"></i>
                                </a>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">
                            <span class="flex items-center gap-2">
                                <span class="h-8 w-8 inline-flex items-center justify-center rounded-full">
                                    <img src="/images/avatars/9.png" alt="avatar" class="max-w-full h-full rounded-full">
                                </span>
                                <h6 class="text-sm font-semibold text-default-700">Marilyn Stanton</h6>
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">ngeorge@aol.com</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">516-243-5018</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">15</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">$ 959.00</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">Oct 16 2023 | <span class="text-xs">03:49:38</span> </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-red-500/10 text-red-500">Block</span>
                        </td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('second', ['sellers', 'detail']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <a href="{{ route('second', ['sellers', 'edit']) }}" type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit-circle text-base"></i>
                                </a>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">
                            <span class="flex items-center gap-2">
                                <span class="h-8 w-8 inline-flex items-center justify-center rounded-full">
                                    <img src="/images/avatars/10.png" alt="avatar" class="max-w-full h-full rounded-full">
                                </span>
                                <h6 class="text-sm font-semibold text-default-700">Emerson Dokidis</h6>
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">hscott@mail.com</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">575-541-4842</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">14</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">$ 948.00</td>
                        <td class="px-6 py-4 whitespace-nowrap text-base text-default-800">Apr 10 2018 | <span class="text-xs">13:51:30</span> </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-green-500/10 text-green-500">Active</span>
                        </td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('second', ['sellers', 'detail']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <a href="{{ route('second', ['sellers', 'edit']) }}" type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit-circle text-base"></i>
                                </a>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="flex items-center justify-between py-3 px-6 border-t border-dashed border-default-200">
            <h6 class="text-default-600">Showing 1 to 5 of 12</h6>

            <nav class="flex items-center gap-1">
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
    </div>
</div>

@endsection

@section('script')
  @vite(['resources/js/admin-customers-list.js'])
@endsection