@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Invoice', 'title' => 'Add Invoice'])

    <div class="max-w-7xl mx-auto">
        <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
            <div class="p-5">
                <div class="flex justify-between gap-6 mb-10">
                    <div class="relative mb-4">
                        <input id="logo-upload" type="file" class="hidden">
                        <label for="logo-upload" class="block">
                            <div class="overflow-hidden border border-dashed border-default-200 bg-default-100 flex items-center justify-center rounded-md h-16 w-60">
                                <img src="/images/logo-dark.png" alt="logo" class="h-8 flex dark:hidden">
                                <img src="/images/logo.png" alt="logo" class="h-8 hidden dark:flex">
                            </div>
                        </label>
                    </div>

                    <h4 class="text-lg font-semibold text-default-800">Invoice</h4>
                </div>

                <div class="mb-10">
                    <div class="grid sm:grid-cols-2 gap-6">
                        <div class="space-y-2 max-w-md">
                            <input type="text" id="userName" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="User Name">
                            <input type="text" id="customerContent" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="User Text Content">
                        </div>

                        <div class="flex sm:justify-end space-y-2">
                            <div class="flex flex-col gap-3">
                                <input type="date" id="datepicker-basic" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="Order Date:">
                                <input type="text" id="customerContent" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="Order Status:">
                                <input type="text" id="customerContent" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="Order ID:">
                            </div> <!-- grid-end -->
                        </div> <!-- flex-end -->
                    </div>
                </div>

                <div class="mb-10">
                    <div class="grid sm:grid-cols-3 gap-6">
                        <div class="">
                            <h6 class="text-sm font-semibold text-default-900 mb-3">Billing Address</h6>
                            <textarea class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" rows="5" placeholder=""></textarea>
                        </div> <!-- col-end -->

                        <div class="">
                            <h6 class="text-sm font-semibold text-default-900 mb-3">Shipping Address</h6>
                            <textarea class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" rows="5" placeholder=""></textarea>
                        </div> <!-- col-end -->


                        <div class="">
                            <img src="/images/other/barcode.png" alt="barcode" class="sm:ms-auto max-h-full">
                        </div> <!-- col-end -->
                    </div> <!-- grid-end -->
                </div>

                <div class="mb-5">
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                            <div class="p-1.5 min-w-full inline-block align-middle">
                                <div class="overflow-hidden rounded-md">
                                    <table class="min-w-full border border-default-200">
                                        <thead class="border-y py-3 bg-default-100 border-default-200">
                                            <tr>
                                                <th scope="col" class="px-6 py-2 text-left font-semibold text-default-500">#</th>
                                                <th scope="col" class="px-6 py-2 text-left font-semibold text-default-500 min-w-[36rem]">Item</th>
                                                <th scope="col" class="px-6 py-2 text-left font-semibold text-default-500 min-w-20">Quantity</th>
                                                <th scope="col" class="px-6 py-2 text-left font-semibold text-default-500 min-w-40">Unit Cost</th>
                                                <th scope="col" class="px-6 py-2 text-right font-semibold text-default-500 min-w-40">Total</th>
                                            </tr> <!-- tr-end -->
                                        </thead> <!-- thead-end -->

                                        <tbody id="hs-wrapper-for-copy">

                                            <tr id="hs-content-for-copy" class="product">
                                                <th class="px-6 py-2">
                                                    <input type="text" class="block rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50 w-11" maxlength="1" required>
                                                </th>
                                                <td class="px-6 py-2">
                                                    <div class="mb-2">
                                                        <input type="text" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="Product Name" required>
                                                    </div>
                                                    <textarea class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="productDetails-1" rows="2" placeholder="Product Details"></textarea>
                                                </td>
                                                <td class="px-6 py-2">
                                                    <div class="py-2 px-3 inline-block border border-default-200 rounded-full disabled" data-hs-input-number="">
                                                        <div class="flex items-center gap-x-1.5">
                                                            <button type="button" class="shrink w-6 h-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium border border-default-200 rounded-full" data-hs-input-number-decrement disabled="disabled">
                                                                <i class="ti ti-minus flex-shrink-0 text-base"></i>
                                                            </button>
                                                            <input class="grow p-0 w-6 bg-transparent border-0 text-default-800 text-center focus:ring-0" type="text" value="0" data-hs-input-number-input="">
                                                            <button type="button" class="shrink w-6 h-6 inline-flex justify-center items-center gap-x-2 text-sm font-medium border border-default-200 rounded-full" data-hs-input-number-increment>
                                                                <i class="ti ti-plus flex-shrink-0 text-base"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-2">
                                                    <input type="text" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="$0.00">
                                                </td>
                                                <td class="px-6 py-2">
                                                    <input type="text" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="$0.00">
                                                </td>
                                            </tr>
                                        </tbody> <!-- tbody-end -->
                                    </table> <!-- table-end -->

                                    <p class="mt-3 text-end">

                                    </p>
                                    <!-- End Input Group -->

                                    <div class="mt-6">
                                        <button type="button" data-hs-copy-markup='{
                                              "targetSelector": "#hs-content-for-copy",
                                              "wrapperSelector": "#hs-wrapper-for-copy",
                                              "limit": 3
                                              }' id="hs-copy-content" class="py-2 px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md">
                                            <i class="ti ti-plus"></i>
                                            Add Name
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid sm:grid-cols-2 gap-6">
                    <div class="">
                        <p class="text-default-900 font-medium text-base mb-2">Notes:</p>
                        <p class="text-xs">All accounts are to be paid within 7 days from receipt of invoice. To be paid by cheque or credit card or direct payment online. If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.</p>
                    </div> <!-- col-end -->
                    <div class="flex sm:justify-end space-y-2">
                        <div class="grid gap-3">
                            <input type="text" id="customerContent" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="Sub-total:">
                            <input type="text" id="customerContent" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="VAT (12.5):">
                            <input type="text" id="customerContent" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="Total Amount">
                        </div> <!-- grid-end -->
                    </div> <!-- flex-end -->
                </div>

                <div class="flex gap-2 flex-wrap sm:justify-center d-print-none mt-6">
                    <button type="submit" class="py-2 px-4 w-full sm:w-auto flex items-center justify-center font-semibold tracking-wide align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-600 border-primary hover:border-primary-600 text-white rounded-full"><i class="ti ti-printer align-bottom me-1"></i> Save</button>
                    <a href="javascript:void(0);" class="py-2 px-4 w-full sm:w-auto flex items-center justify-center font-semibold tracking-wide align-middle duration-500 text-sm text-center bg-blue-500 hover:bg-blue-600 border-blue-500 hover:border-blue-600 text-white rounded-full"><i class="ti ti-download align-bottom me-1"></i> Download Invoice</a>
                    <a href="javascript:void(0);" class="py-2 px-4 w-full sm:w-auto flex items-center justify-center font-semibold tracking-wide align-middle duration-500 text-sm text-center bg-red-500 hover:bg-red-600 border-red-500 hover:border-red-600 text-white rounded-full"><i class="ti ti-send align-bottom me-1"></i> Send Invoice</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection