@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Manage', 'title' => 'Wallet'])

    <div class="grid xl:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-6 mb-6">
        <div class="border border-default-200 rounded-lg">
            <div class="p-6">
                <div class="flex items-start justify-between gap-6">
                    <div class="">
                        <p class="text-base font-medium text-default-600">Earning Amount</p>
                        <h3 class="text-2xl font-semibold text-default-900 my-4">$23,568.00</h3>
                        <span class="inline-flex items-center gap-x-1.5 py-1 px-2 rounded-md text-xs font-medium bg-primary/10 border border-primary/20 text-primary"><i class="ti ti-trending-up"></i>36% Increase</span>
                    </div>
                    <div class="h-14 w-14 inline-flex items-center justify-center bg-blue-500/20 rounded-full text-blue-500"><i class="ti ti-currency-dollar text-3xl"></i></div>
                </div>
            </div>
        </div><!-- end cad -->
        <div class="border border-default-200 rounded-lg">
            <div class="p-6">
                <div class="flex items-start justify-between gap-6">
                    <div class="">
                        <p class="text-base font-medium text-default-600">Current Balance</p>
                        <h3 class="text-2xl font-semibold text-default-900 my-4">$2850.75</h3>
                        <span class="inline-flex items-center gap-x-1.5 py-1 px-2 rounded-md text-xs font-medium bg-red-500/10 border border-red-500/20 text-red-500"><i class="ti ti-trending-down"></i>23% Decrease</span>
                    </div>
                    <div class="h-14 w-14 inline-flex items-center justify-center bg-primary/20 rounded-full text-primary"><i class="ti ti-wallet text-3xl"></i></div>
                </div>
            </div>
        </div><!-- end cad -->
        <div class="border border-default-200 rounded-lg">
            <div class="p-6">
                <div class="flex items-start justify-between gap-6">
                    <div class="">
                        <p class="text-base font-medium text-default-600">Total Transaction</p>
                        <h3 class="text-2xl font-semibold text-default-900 my-4">105.72k</h3>
                        <span class="inline-flex items-center gap-x-1.5 py-1 px-2 rounded-md text-xs font-medium bg-primary/10 border border-primary/20 text-primary"><i class="ti ti-trending-up"></i>23% Increase</span>
                    </div>
                    <div class="h-14 w-14 inline-flex items-center justify-center bg-yellow-500/20 rounded-full text-yellow-500"><i class="ti ti-building-bank text-3xl"></i></div>
                </div>
            </div>
        </div><!-- end cad -->
        <div class="border border-default-200 rounded-lg">
            <div class="p-6">
                <div class="flex items-start justify-between gap-6">
                    <div class="">
                        <p class="text-base font-medium text-default-600">Spending Amount</p>
                        <h3 class="text-2xl font-semibold text-default-900 my-4">$5,631.50</h3>
                        <span class="inline-flex items-center gap-x-1.5 py-1 px-2 rounded-md text-xs font-medium bg-red-500/10 border border-red-500/20 text-red-500"><i class="ti ti-trending-down"></i>05% Decrease</span>
                    </div>
                    <div class="h-14 w-14 inline-flex items-center justify-center bg-cyan-500/20 rounded-full text-cyan-500"><i class="ti ti-receipt-dollar text-3xl"></i></div>
                </div>
            </div>
        </div><!-- end cad -->
    </div><!-- end grid -->

    <div class="grid xl:grid-cols-3 gap-6">
        <div class="xl:col-span-2">
            <div class="border border-default-200 rounded-lg">
                <div class="px-6 py-4 flex items-center justify-between gap-4">
                    <h4 class="grow text-lg font-medium text-default-900">Balance Statistics</h4>
                    <div class="relative">
                        <select id="all-select-categories" data-hs-select='{
                              "toggleTag": "<button type=\"button\"></button>",
                              "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 block w-full rounded-full py-2 ps-4 pe-10 text-default-900 text-sm focus:ring-transparent border border-default-200 transition-all duration-300 hover:bg-default-100 before:absolute before:inset-0 before:z-[1]",
                              "dropdownClasses": "mt-2 z-50 min-w-[200px] max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-lg overflow-hidden overflow-y-auto end-0 dark:bg-default-50",
                              "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                              "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                              }' class="hidden">
                            <option>Today</option>
                            <option>Yesterday</option>
                            <option>Last 7 Days</option>
                            <option>Last 30 Days</option>
                            <option>This Month</option>
                            <option>Last Month</option>
                        </select>

                        <div class="absolute -inset-y-0 start-auto end-3 flex items-center">
                            <i class="ti ti-chevron-down shrink text-base/none"></i>
                        </div>
                    </div><!-- End Select -->
                </div>
                <div class="p-5 border-t border-dashed border-default-200">
                    <div id="balance_statistics" class="apex-charts"></div>
                </div>
            </div>
        </div>

        <div class="space-y-6">
            <div class="relative bg-gray-900/10 bg-[url(/images/other/wallte.jpg)] bg-cover rounded-lg border border-default-200 p-6 h-fit">
                <div class="absolute inset-0 bg-gray-950/50 backdrop-blur rounded-lg"></div>
                <div class="relative">
                    <div class="flex items-center justify-between">
                        <h6 class="grow text-lg text-gray-100 font-medium"><i>Current Balance</i></h6>
                        <div class="shrink hs-dropdown [--placement:bottom-right]">
                            <button type="button" class="hs-dropdown-toggle"><i class="ti ti-dots-vertical text-slate-100"></i></button>

                            <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-[180px] transition-[opacity,margin] mt-4 opacity-0 z-40 bg-white dark:bg-default-50 shadow-lg rounded-lg border border-default-100 p-1.5 hidden">
                                <ul class="flex flex-col gap-1">
                                    <li>
                                        <a class="flex items-center gap-2 font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded" href="#"><i class="ti ti-edit-circle"></i> Edit</a>
                                    </li>
                                    <li>
                                        <a class="flex items-center gap-2 font-normal text-red-600 py-2 px-3 transition-all hover:text-red-600 hover:bg-default-100 rounded" href="#"><i class="ti ti-trash"></i> Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 mt-8">
                        <span class="inline-flex items-center bg-white rounded-md px-4"><i class="ti ti-brand-visa text-4xl/none text-blue-800"></i></span>
                        <div class="inline-flex items-center gap-2 text-white">
                            <p class="text-base font-semibold">**** **** **** 9942</p>
                            <i class="ti ti-eye-closed text-xl"></i>
                        </div>
                    </div>

                    <div class="text-end">
                        <h4 class="text-3xl inline-flex items-center font-semibold text-white mt-6"><i class="ti ti-currency-dollar align-middle"></i> 94640.98</h4>
                    </div>

                    <div class="flex items-center gap-4 mt-8">
                        <div class="space-y-2">
                            <p class="text-xs text-white">Card Holder</p>
                            <h6 class="text-base text-white font-medium">Mary Hopkins</h6>
                        </div>
                        <div class="space-y-2">
                            <p class="text-xs text-white">Valid Dates</p>
                            <h6 class="text-base text-white font-medium">04/35</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-primary/20 rounded-lg">
                <div class="p-6">
                    <div class="flex items-center justify-between">
                        <div class="">
                            <h4 class="text-base font-semibold text-default-900">Invite friends and earn</h4>
                            <h2 class="text-2xl font-semibold text-default-900 mt-4">$60</h2>
                            <div class="relative mt-4">
                                <input type="search" class="ps-12 pe-20 py-2.5 block lg:w-64 border-primary-400 text-default-800 rounded-full text-sm focus:border-primary focus:ring-primary bg-transparent" placeholder="Email">
                                <button type="submit" class="py-1.5 px-5 inline-block font-medium align-middle duration-500 text-base text-center absolute top-1/2 -translate-y-1/2 end-[3px] bg-primary hover:bg-primary-600 text-white rounded-full">Invite</button>
                                <i class="ti ti-mail text-lg/none text-primary absolute start-4 top-1/2 -translate-y-1/2"></i>
                            </div>
                        </div>
                        <div class="">
                            <img src="/images/other/invite.png" alt="" class="max-w-full h-32">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1">
        <div class="border rounded-lg overflow-hidden border-default-200">
            <h2 class="text-lg text-default-800 font-semibold px-6 py-4">Transaction history</h2>

            <div class="relative overflow-x-auto">
                <div class="min-w-full inline-block align-middle">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-default-200">
                            <thead>
                                <tr class="text-start bg-default-100">
                                    <th class="px-6 py-3 text-start text-sm font-medium text-default-800">Assets</th>
                                    <th class="px-6 py-3 text-start text-sm font-medium text-default-800">Type</th>
                                    <th class="px-6 py-3 text-start text-sm font-medium text-default-800">Date</th>
                                    <th class="px-6 py-3 text-start text-sm font-medium text-default-800">Status</th>
                                    <th class="px-6 py-3 text-start text-sm font-medium text-default-800">Amount</th>
                                </tr><!-- end table-head-row -->
                            </thead><!-- end t-head -->
                            <tbody class="divide-y divide-default-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-600">Tesco Market</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-600">Shopping</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-600">13 Dec 2020</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <span class="px-3 py-1 text-xs font-medium rounded-md bg-red-500/20 text-red-500">Credit</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-600">$75.67</td>
                                </tr><!-- end table-row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-600">Ann Marlin</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-600">Shopping</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-600">31 Nov 2020</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <span class="px-3 py-1 text-xs font-medium rounded-md bg-primary/20 text-primary">Debit</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-600">$430</td>
                                </tr><!-- end table-row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-600">John Mathew Kayne</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-600">Sport</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-600">06 Dec 2020</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <span class="px-3 py-1 text-xs font-medium rounded-md bg-primary/20 text-primary">Debit</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-600">$350</td>
                                </tr><!-- end table-row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-600">Fiorgio Restaurant</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-600">Food</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-600">07 Dec 2020</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                        <span class="px-3 py-1 text-xs font-medium rounded-md bg-yellow-500/20 text-yellow-500">Refund</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-600">$19.50</td>
                                </tr><!-- end table-row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-600">ElectroMen Market</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-600">Shopping</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-600">14 Dec 2020</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <span class="px-3 py-1 text-xs font-medium rounded-md bg-red-500/20 text-red-500">Credit</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-600">$250.00</td>
                                </tr><!-- end table-row -->
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-600">Ann Marlin</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-600">Grocery</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-600">31 Nov 2020</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                        <span class="px-3 py-1 text-xs font-medium rounded-md bg-red-500/20 text-red-500">Credit</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-600">$430</td>
                                </tr><!-- end table-row -->
                            </tbody><!-- end t-body -->
                        </table><!-- end table -->
                    </div><!-- end overflow-hidden -->
                </div><!-- end table-responsive -->
            </div><!-- end overflo-x-auto -->
        </div>
    </div>
</div>

@endsection

@section('script')
  @vite(['resources/js/wallet.js'])
@endsection