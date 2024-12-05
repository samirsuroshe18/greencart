@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Coupons', 'title' => 'Add Coupon'])

    <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50">
        <div class="px-6 py-4 flex items-center justify-between gap-4">
            <h4 class="text-lg font-medium text-default-950 capitalize">Add Coupon</h4>
        </div>
        <div class="p-5 border-t border-dashed border-default-200">
            <div class="grid md:grid-cols-2 gap-4 mb-6">
                <div class="space-y-1">
                    <label for="couponTitle" class="text-sm font-medium text-default-900">Coupon Title</label>
                    <input type="text" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="couponTitle" placeholder="Enter First Name">
                </div>

                <div class="space-y-1">
                    <label for="couponCode" class="text-sm font-medium text-default-900">Coupon Code</label>
                    <input type="text" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="couponCode" placeholder="Enter Last Name">
                </div>

                <div class="space-y-1">
                    <label for="Categories" class="text-sm font-medium text-default-900">Product Type</label>
                    <div class="relative">
                        <select id="Categories" data-hs-select='{
                                    "placeholder": "Select Type",
                                    "toggleTag": "<button type=\"button\"></button>",
                                    "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 block w-full rounded py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border text-start border-default-200 dark:bg-default-50 focus:border-primary",
                                    "dropdownClasses": "mt-2 z-50 w-full max-h-[300px] p-1 space-y-0.5 bg-white border border-default-200 rounded-md overflow-hidden overflow-y-auto dark:bg-default-50",
                                    "optionClasses": "py-2 px-4 w-full text-sm text-default-800 cursor-pointer hover:bg-default-100 rounded focus:outline-none focus:bg-default-100",
                                    "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks shrink text-lg/none text-primary\" /></i></span></div>"
                                    }' class="hidden">
                            <option></option>
                            <option>Asparagus</option>
                            <option>Beets</option>
                            <option>Butter</option>
                            <option>Bread</option>
                            <option>Burgers</option>
                            <option>Baked Beans</option>
                            <option>Breakfast Cereals</option>
                            <option>Cheddar</option>
                            <option>Couscous</option>
                            <option>Dairy</option>
                            <option>Fruits</option>
                            <option>Meat</option>
                            <option>Nuts</option>
                            <option>Paneer</option>
                            <option>Pasta</option>
                            <option>Quorn</option>
                            <option>Rice</option>
                            <option>Cereals</option>
                            <option>Vegetables</option>
                        </select>


                        <div class="absolute top-1/2 end-3 -translate-y-1/2">
                            <i class="ti ti-arrows-move-vertical shrink text-sm text-default-600"></i>
                        </div>
                    </div>
                    <!-- End Select -->
                </div><!-- col end -->

                <div class="space-y-1">
                    <label for="datepicker-basic" class="text-sm font-medium text-default-900">Start Date</label>
                    <input type="text" class="form-input w-full rounded py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="datepicker-basic">
                </div>

                <div class="space-y-1">
                    <label for="end-date" class="text-sm font-medium text-default-900">Start Date</label>
                    <input type="text" class="form-input w-full rounded py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="end-date">
                </div>

                <div class="space-y-1">
                    <label for="amountPercentage" class="text-sm font-medium text-default-900">Amount/Percentage</label>
                    <input type="text" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="amountPercentage" placeholder="Add Roll No">
                </div>

                <div class="space-y-1">
                    <label for="all-select-categories" class="text-sm font-medium text-default-900">Status</label>
                    <div class="relative">
                        <select id="all-select-categories" data-hs-select='{
                                    "placeholder": "Select Type",
                                    "toggleTag": "<button type=\"button\"></button>",
                                    "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 block w-full rounded py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border text-start border-default-200 dark:bg-default-50 focus:border-primary",
                                    "dropdownClasses": "mt-2 z-50 w-full max-h-[300px] p-1 space-y-0.5 bg-white border border-default-200 rounded-md overflow-hidden overflow-y-auto dark:bg-default-50",
                                    "optionClasses": "py-2 px-4 w-full text-sm text-default-800 cursor-pointer hover:bg-default-100 rounded focus:outline-none focus:bg-default-100",
                                    "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks shrink text-lg/none text-primary\" /></i></span></div>"
                                    }' class="hidden">
                            <option></option>
                            <option>Active</option>
                            <option>Expired</option>
                        </select>


                        <div class="absolute top-1/2 end-3 -translate-y-1/2">
                            <i class="ti ti-arrows-move-vertical shrink text-sm text-default-600"></i>
                        </div>
                    </div>
                    <!-- End Select -->
                </div><!-- col end -->
            </div>
            <div class="flex justify-end gap-4">
                <button class="flex items-center justify-center gap-2 rounded-md bg-primary/10 px-6 py-2.5 text-center text-sm font-semibold text-primary shadow-sm transition-all duration-200 hover:bg-primary hover:text-white">
                    <i class="ti ti-arrow-back-up text-lg"></i>
                    Undo
                </button>
                <button class="flex items-center justify-center gap-2 rounded-md bg-primary px-6 py-2.5 text-center text-sm font-semibold text-white shadow-sm transition-all duration-200 hover:bg-primary-500">
                    <i class="ti ti-device-floppy text-lg"></i>
                    Save
                </button>
            </div>
        </div>
    </div>

</div>

@endsection

@section('script')
  @vite(['resources/js/add.js'])
@endsection