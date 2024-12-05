@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Coupons', 'title' => 'Coupons List'])

    <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="p-5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-base font-semibold text-default-600">Total Coupons</p>
                        <h4 class="text-2xl font-semibold text-default-900 mt-4">339</h4>
                    </div>
                    <span class="shrink h-18 w-18 inline-flex items-center justify-center rounded-lg bg-primary/20 text-primary">
                        <i class="ti ti-ticket text-4xl"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="p-5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-base font-semibold text-default-600">Cyber Sale</p>
                        <h4 class="text-2xl font-semibold text-default-900 mt-4">90</h4>
                    </div>
                    <span class="shrink h-18 w-18 inline-flex items-center justify-center rounded-lg bg-cyan-500/20 text-cyan-500">
                        <i class="ti ti-brand-amd text-4xl"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="p-5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-base font-semibold text-default-600">Summer Sale</p>
                        <h4 class="text-2xl font-semibold text-default-900 mt-4">100</h4>
                    </div>
                    <span class="shrink h-18 w-18 inline-flex items-center justify-center rounded-lg bg-red-500/20 text-red-500">
                        <i class="ti ti-brand-feedly text-4xl"></i>
                    </span>
                </div>
            </div>
        </div>
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="p-5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-base font-semibold text-default-600">Exclusive Sale</p>
                        <h4 class="text-2xl font-semibold text-default-900 mt-4">149</h4>
                    </div>
                    <span class="shrink h-18 w-18 inline-flex items-center justify-center rounded-lg bg-blue-500/20 text-blue-500">
                        <i class="ti ti-bookmarks text-4xl"></i>
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
            <a href="{{ route('second', ['coupons', 'add']) }}" class="relative overflow-hidden py-2.5 pe-6 ps-12 inline-flex items-center justify-center font-semibold align-middle duration-500 text-sm text-center bg-primary-600 text-white rounded-full hover:bg-primary-700">
                <span class="absolute top-1/2 -translate-y-1/2 start-0 h-full w-10 rounded-full inline-flex items-center justify-center bg-white/20 text-white me-3"><i class="ti ti-circle-plus text-xl"></i></span>
                Add Coupon
            </a>
        </div>
        <div class="border-t border-dashed border-default-200 relative overflow-x-auto">
            <table class="min-w-full">
                <thead class="border-b border-dashed border-default-200">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-start text-sm capitalize font-semibold text-default-900 min-w-32">Coupons Id</th>
                        <th scope="col" class="px-6 py-3 text-start text-sm capitalize font-semibold text-default-900 min-w-32">Coupon Title</th>
                        <th scope="col" class="px-6 py-3 text-start text-sm capitalize font-semibold text-default-900 min-w-40">Coupon Code</th>
                        <th scope="col" class="px-6 py-3 text-start text-sm capitalize font-semibold text-default-900 min-w-40">Start Date</th>
                        <th scope="col" class="px-6 py-3 text-start text-sm capitalize font-semibold text-default-900 min-w-32">End Date</th>
                        <th scope="col" class="px-6 py-3 text-start text-sm capitalize font-semibold text-default-900 min-w-32">Status</th>
                        <th scope="col" class="px-3 py-3 text-center text-sm capitalize font-semibold text-default-900 min-w-32">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-dashed divide-default-200">
                    <tr>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">#FM20@20</td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Foodee</td>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">fd@986</td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">12 Apr 2023</span>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">20 Apr 2023</span>
                        </td>
                        <td class="px-6 py-3 font-medium whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-primary/20 text-primary">
                                Paid
                            </span>
                        </td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="#" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <a href="{{ route('second', ['coupons', 'edit']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit text-lg"></i>
                                </a>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">#FM40@40</td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Fruities</td>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">ftz@469</td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">14 Apr 2023</span>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">24 Apr 2023</span>
                        </td>
                        <td class="px-6 py-3 font-medium whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-red-500/20 text-red-500">
                                Expired
                            </span>
                        </td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="#" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <a href="{{ route('second', ['coupons', 'edit']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit text-lg"></i>
                                </a>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">#FM84@84</td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Grapes</td>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">grp@698</td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">15 Apr 2023</span>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">25 Apr 2023</span>
                        </td>
                        <td class="px-6 py-3 font-medium whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-red-500/20 text-red-500">
                                Expired
                            </span>
                        </td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="#" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <a href="{{ route('second', ['coupons', 'edit']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit text-lg"></i>
                                </a>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">#FM79@79</td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Cashew Nut</td>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">casNut@198</td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">6 Dec 2023</span>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">14 Dec 2023</span>
                        </td>
                        <td class="px-6 py-3 font-medium whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-primary/20 text-primary">
                                Paid
                            </span>
                        </td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="#" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <a href="{{ route('second', ['coupons', 'edit']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit text-lg"></i>
                                </a>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">#FM79@79</td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Vegetables</td>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">vgt@956</td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">1 Jan 2023</span>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">14 Jan 2023</span>
                        </td>
                        <td class="px-6 py-3 font-medium whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-primary/20 text-primary">
                                Paid
                            </span>
                        </td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="#" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <a href="{{ route('second', ['coupons', 'edit']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit text-lg"></i>
                                </a>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">#FM76@76</td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Chips</td>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">chip@1</td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">2 Dec 2023</span>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">2 Dec 2023</span>
                        </td>
                        <td class="px-6 py-3 font-medium whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-red-500/20 text-red-500">
                                Expired
                            </span>
                        </td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="#" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <a href="{{ route('second', ['coupons', 'edit']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit text-lg"></i>
                                </a>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">#FM78@78</td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Protinex Powder</td>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">ppx@336</td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">12 May 2023</span>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">24 May 2023</span>
                        </td>
                        <td class="px-6 py-3 font-medium whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-red-500/20 text-red-500">
                                Expired
                            </span>
                        </td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="#" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <a href="{{ route('second', ['coupons', 'edit']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit text-lg"></i>
                                </a>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">#FM92@92</td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">Berries</td>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">ber@998</td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">21 Jun 2023</span>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">1 July 2023</span>
                        </td>
                        <td class="px-6 py-3 font-medium whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-primary/20 text-primary">
                                Paid
                            </span>
                        </td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="#" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <a href="{{ route('second', ['coupons', 'edit']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit text-lg"></i>
                                </a>
                                <button class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-trash text-lg"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">#FM75@75</td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">All Nuts</td>
                        <td class="px-6 py-3 text-default-900 font-medium whitespace-nowrap">ant@494</td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">12 Aug 2023</span>
                        </td>
                        <td class="px-6 py-3 text-default-600 font-medium whitespace-nowrap">
                            <span class="block mb-0.5">12 Aug 2023</span>
                        </td>
                        <td class="px-6 py-3 font-medium whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium rounded-md bg-red-500/20 text-red-500">
                                Expired
                            </span>
                        </td>
                        <td class="whitespace-nowrap py-3 px-3 text-center text-sm font-medium">
                            <div class="flex items-center justify-center gap-2">
                                <a href="#" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-eye text-lg"></i>
                                </a>
                                <a href="{{ route('second', ['coupons', 'edit']) }}" class="inline-flex items-center justify-center h-9 w-9 rounded-full bg-default-100 border border-default-200 text-default-900 transition-all duration-200 hover:border-primary hover:bg-primary hover:text-white">
                                    <i class="ti ti-edit text-lg"></i>
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