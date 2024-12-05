@extends('layouts.base')

@section('content')

@include('layouts.shared/navbar')

@include('layouts.shared/mobile-nav')

@include('layouts.shared/page-title' ,['subtitle' => 'Pages', 'title' => 'Order List'])

<section class="lg:py-12 py-6">
    <div class="container">
        <div class="grid lg:grid-cols-5 gap-6">
            @include('layouts.shared/account-menu')

            <div class="col-span-1 lg:col-span-4">
                <div class="border border-default-200 rounded-lg">
                    <div class="px-6 py-4">
                        <h2 class="text-xl font-semibold text-default-800 capitalize">Order History</h2>
                    </div>
                    <div class="">
                        <div class="overflow-x-auto">
                            <div class="grid grid-cols-1 align-middle">
                                <div class="border-t border-dashed border-default-200 relative overflow-x-auto">
                                    <table class="min-w-full border-y border-dashed border-default-200 divide-y divide-dashed divide-default-200">
                                        <thead>
                                            <tr class="text-start bg-default-100">
                                                <th class="px-6 py-3 text-start text-base font-semibold text-default-800 min-w-32">Order ID</th>
                                                <th class="px-6 py-3 text-start text-base font-semibold text-default-800">Date</th>
                                                <th class="px-6 py-3 text-start text-base font-semibold text-default-800">Total</th>
                                                <th class="px-6 py-3 text-start text-base font-semibold text-default-800 min-w-[10rem]">Status</th>
                                                <th class="px-6 py-3 text-end text-base font-semibold text-default-800 min-w-[10rem]">Action</th>
                                            </tr>
                                        </thead><!-- end t-head -->
                                        <tbody class="divide-y divide-dashed divide-default-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">#4702</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">12 Jul, 2022</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">$562.00 (7 Products)</td>
                                                <td class="px-6 py-4">
                                                    <span class="inline-flex items-center gap-1 py-1 px-3 rounded-lg text-xs font-medium bg-yellow-500/20 text-yellow-500">Processing</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-primary text-end">
                                                    <a href="#">View Details</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">#2305</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">12 Jul, 2022</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">$35.00 (1 Product)</td>
                                                <td class="px-6 py-4">
                                                    <span class="inline-flex items-center gap-1 py-1 px-3 rounded-lg text-xs font-medium bg-yellow-500/20 text-yellow-500">Processing</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-primary text-end">
                                                    <a href="#">View Details</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">#4521</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">10 Jul, 2022</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">$450.00 (6 Products)</td>
                                                <td class="px-6 py-4">
                                                    <span class="inline-flex items-center gap-1 py-1 px-3 rounded-lg text-xs font-medium bg-red-500/20 text-red-500">Cancelled</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-primary text-end">
                                                    <a href="#">View Details</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">#4224</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">4 Jul, 2022</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">$147.00 (4 Products)</td>
                                                <td class="px-6 py-4">
                                                    <span class="inline-flex items-center gap-1 py-1 px-3 rounded-lg text-xs font-medium bg-sky-500/20 text-sky-500">Delivered</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-primary text-end">
                                                    <a href="#">View Details</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">#2357</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">29 Jun, 2022</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">$356.00 (3 Products)</td>
                                                <td class="px-6 py-4">
                                                    <span class="inline-flex items-center gap-1 py-1 px-3 rounded-lg text-xs font-medium bg-sky-500/20 text-sky-500">Delivered</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-primary text-end">
                                                    <a href="#">View Details</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">#6541</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">22 Jun, 2022</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">$24.00 (1 Product)</td>
                                                <td class="px-6 py-4">
                                                    <span class="inline-flex items-center gap-1 py-1 px-3 rounded-lg text-xs font-medium bg-sky-500/20 text-sky-500">Delivered</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-primary text-end">
                                                    <a href="#">View Details</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">#3352</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">15 Jun, 2022</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">$452.00 (7 Products)</td>
                                                <td class="px-6 py-4">
                                                    <span class="inline-flex items-center gap-1 py-1 px-3 rounded-lg text-xs font-medium bg-sky-500/20 text-sky-500">Delivered</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-primary text-end">
                                                    <a href="#">View Details</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">#4521</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">08 Jun, 2022</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">$960.00 (12 Products)</td>
                                                <td class="px-6 py-4">
                                                    <span class="inline-flex items-center gap-1 py-1 px-3 rounded-lg text-xs font-medium bg-red-500/20 text-red-500">Cancelled</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-primary text-end">
                                                    <a href="#">View Details</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">#6352</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">25 May 2022</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">$450.00 (5 Products)</td>
                                                <td class="px-6 py-4">
                                                    <span class="inline-flex items-center gap-1 py-1 px-3 rounded-lg text-xs font-medium bg-sky-500/20 text-sky-500">Delivered</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-primary text-end">
                                                    <a href="#">View Details</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">#2563</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">18 May 2022</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">$34.00 (1 Product)</td>
                                                <td class="px-6 py-4">
                                                    <span class="inline-flex items-center gap-1 py-1 px-3 rounded-lg text-xs font-medium bg-sky-500/20 text-sky-500">Delivered</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-primary text-end">
                                                    <a href="#">View Details</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">#2541</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">04 May 2022</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-default-800">$46.00 (1 Product)</td>
                                                <td class="px-6 py-4">
                                                    <span class="inline-flex items-center gap-1 py-1 px-3 rounded-lg text-xs font-medium bg-sky-500/20 text-sky-500">Delivered</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-primary text-end">
                                                    <a href="#">View Details</a>
                                                </td>
                                            </tr>
                                        </tbody><!-- end t-body -->
                                    </table><!-- end table -->
                                </div>
                            </div>
                        </div><!-- end overflo-x-auto -->


                        <div class="px-6 py-4">
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
                        </div>
                    </div><!-- order-detail-item -->
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.shared/footer')

@endsection