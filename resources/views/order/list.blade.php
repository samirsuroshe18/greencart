@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Orders', 'title' => 'Orders List'])

    <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="p-5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-base font-semibold text-default-600">All Orders</p>
                        <h4 class="text-2xl font-semibold text-default-900 mt-4">145K</h4>
                    </div>
                    <span class="shrink h-18 w-18 inline-flex items-center justify-center rounded-lg bg-blue-500/20 text-blue-500">
                        <i class="ti ti-box text-4xl"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="p-5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-base font-semibold text-default-600">Delivered Orders</p>
                        <h4 class="text-2xl font-semibold text-default-900 mt-4">80K</h4>
                    </div>
                    <span class="shrink h-18 w-18 inline-flex items-center justify-center rounded-lg bg-primary/20 text-primary">
                        <i class="ti ti-discount-check-filled text-4xl"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="p-5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-base font-semibold text-default-600">Pending Orders</p>
                        <h4 class="text-2xl font-semibold text-default-900 mt-4">44K</h4>
                    </div>
                    <span class="shrink h-18 w-18 inline-flex items-center justify-center rounded-lg bg-amber-500/20 text-amber-500">
                        <i class="ti ti-hourglass text-4xl"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="p-5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-base font-semibold text-default-600">Cancelled Orders</p>
                        <h4 class="text-2xl font-semibold text-default-900 mt-4">21K</h4>
                    </div>
                    <span class="shrink h-18 w-18 inline-flex items-center justify-center rounded-lg bg-red-500/20 text-red-500">
                        <i class="ti ti-trash text-4xl"></i>
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
        </div>
        <div class="border-t border-dashed border-default-200 relative overflow-x-auto">
            <table class="min-w-full">
                <thead class="border-b border-dashed border-default-200">
                    <tr>
                        <td class="px-6 py-3 w-10 font-medium text-default-900">
                            <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                        </td>
                        <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">Img</th>
                        <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">Order Name</th>
                        <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-40">Customer</th>
                        <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-40">Date & TIme</th>
                        <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">Payment</th>
                        <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">Status</th>
                        <th scope="col" class="px-6 py-3 text-start text-base capitalize font-semibold text-default-900 min-w-32">Amount</th>
                        <th scope="col" class="px-3 py-3 text-center text-base capitalize font-semibold text-default-900 min-w-32">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-dashed divide-default-200">
                    <tr>
                        <td class="px-6 py-3">
                            <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                        </td>
                        <td class="px-6 py-3 text-default-900 font-semibold whitespace-nowrap">
                            <img src="/images/product/1.png" alt="" class="h-10 w-10">
                        </td>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap"><b>FM1020#20</b></td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <h6 class="text-sm font-semibold text-default-700">Raul Villa</h6>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">12 Apr 2023 (10:20 am)</span>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Paypal</td>
                        <td class="px-6 py-3 text-primary font-medium whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-primary/20 text-primary">Success</span>
                        </td>
                        <td class="px-6 py-3 text-primary font-semibold whitespace-nowrap">$1,42,430</td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('second',['order', 'details']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit-circle text-base"></i>
                                </button>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-3">
                            <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                        </td>
                        <td class="px-6 py-3 text-default-900 font-semibold whitespace-nowrap">
                            <img src="/images/product/2.png" alt="" class="h-10 w-10">
                        </td>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap"><b>FM1240#40</b></td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <h6 class="text-sm font-semibold text-default-700">Fae Sims</h6>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">14 Apr 2023 (11:42 am)</span>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">COD</td>
                        <td class="px-6 py-3 text-amber-600 font-medium whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-amber-500/20 text-amber-500">
                                Pending
                            </span>
                        </td>
                        <td class="px-6 py-3 text-primary font-semibold whitespace-nowrap">$12,000</td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('second',['order', 'details']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit-circle text-base"></i>
                                </button>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-3">
                            <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                        </td>
                        <td class="px-6 py-3 text-default-900 font-semibold whitespace-nowrap">
                            <img src="/images/product/3.png" alt="" class="h-10 w-10">
                        </td>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap"><b>FM1284#84</b></td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <h6 class="text-sm font-semibold text-default-700">David Roderick</h6>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">15 Apr 2023 (12:10 am)</span>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Stripe</td>
                        <td class="px-6 py-3 text-red-600 font-medium whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-red-500/20 text-red-500">
                                Cancelled
                            </span>
                        </td>
                        <td class="px-6 py-3 text-primary font-semibold whitespace-nowrap">$1,05,000</td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('second',['order', 'details']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit-circle text-base"></i>
                                </button>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-3">
                            <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                        </td>
                        <td class="px-6 py-3 text-default-900 font-semibold whitespace-nowrap">
                            <img src="/images/product/4.png" alt="" class="h-10 w-10">
                        </td>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap"><b>FM1279#79</b></td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <h6 class="text-sm font-semibold text-default-700">Lashaunda Fox</h6>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">6 Dec 2023 (9:48 am)</span>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Paypal</td>
                        <td class="px-6 py-3 text-primary font-medium whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-primary/20 text-primary">Success</span>
                        </td>
                        <td class="px-6 py-3 text-primary font-semibold whitespace-nowrap">$1,000</td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('second',['order', 'details']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit-circle text-base"></i>
                                </button>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-3">
                            <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                        </td>
                        <td class="px-6 py-3 text-default-900 font-semibold whitespace-nowrap">
                            <img src="/images/product/5.png" alt="" class="h-10 w-10">
                        </td>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap"><b>FM1279#79</b></td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <h6 class="text-sm font-semibold text-default-700">Denese Martin</h6>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">1 Jan 2023 (6:42 pm)</span>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">COD</td>
                        <td class="px-6 py-3 text-primary font-medium whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-primary/20 text-primary">Success</span>
                        </td>
                        <td class="px-6 py-3 text-primary font-semibold whitespace-nowrap">$14,000</td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('second',['order', 'details']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit-circle text-base"></i>
                                </button>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-3">
                            <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                        </td>
                        <td class="px-6 py-3 text-default-900 font-semibold whitespace-nowrap">
                            <img src="/images/product/6.png" alt="" class="h-10 w-10">
                        </td>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap"><b>FM1276#76</b></td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <h6 class="text-sm font-semibold text-default-700">Margaret Shaw</h6>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">2 Dec 2023 (11:21 am)</span>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Stripe</td>
                        <td class="px-6 py-3 text-amber-600 font-medium whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-amber-500/20 text-amber-500">
                                Pending
                            </span>
                        </td>
                        <td class="px-6 py-3 text-primary font-semibold whitespace-nowrap">$18,000</td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('second',['order', 'details']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit-circle text-base"></i>
                                </button>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-3">
                            <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                        </td>
                        <td class="px-6 py-3 text-default-900 font-semibold whitespace-nowrap">
                            <img src="/images/product/7.png" alt="" class="h-10 w-10">
                        </td>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap"><b>FM1278#78</b></td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <h6 class="text-sm font-semibold text-default-700">Antonio Barnes</h6>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">12 May 2023 (12:20 pm)</span>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Paypal</td>
                        <td class="px-6 py-3 text-amber-600 font-medium whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-amber-500/20 text-amber-500">
                                Pending
                            </span>
                        </td>
                        <td class="px-6 py-3 text-primary font-semibold whitespace-nowrap">$1,400</td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('second',['order', 'details']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit-circle text-base"></i>
                                </button>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-3">
                            <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                        </td>
                        <td class="px-6 py-3 text-default-900 font-semibold whitespace-nowrap">
                            <img src="/images/product/8.png" alt="" class="h-10 w-10">
                        </td>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap"><b>FM1292#92</b></td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <h6 class="text-sm font-semibold text-default-700">Ramona Gray</h6>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">21 Jun 2023 (9:59 am)</span>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Paypal</td>
                        <td class="px-6 py-3 text-primary font-medium whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-primary/20 text-primary">Success</span>
                        </td>
                        <td class="px-6 py-3 text-primary font-semibold whitespace-nowrap">$16,120</td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('second',['order', 'details']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit-circle text-base"></i>
                                </button>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-3">
                            <input type="checkbox" class="form-checkbox transition-all duration-100 ease-in-out border-default-200 cursor-pointer rounded text-primary bg-default-50 focus:ring-transparent focus:ring-offset-0">
                        </td>
                        <td class="px-6 py-3 text-default-900 font-semibold whitespace-nowrap">
                            <img src="/images/product/9.png" alt="" class="h-10 w-10">
                        </td>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap"><b>FM1275#75</b></td>
                        <td class="px-6 py-3 whitespace-nowrap">
                            <h6 class="text-sm font-semibold text-default-700">James Francis</h6>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">12 Aug 2023 (10:16 am)</span>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">COD</td>
                        <td class="px-6 py-3 text-red-600 font-medium whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-red-500/20 text-red-500">
                                Cancelled
                            </span>
                        </td>
                        <td class="px-6 py-3 text-primary font-semibold whitespace-nowrap">$1,9,000</td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="{{ route('second',['order', 'details']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <button type="button" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit-circle text-base"></i>
                                </button>
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