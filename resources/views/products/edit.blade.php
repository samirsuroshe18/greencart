@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title' , ['subtitle' => 'Products', 'title' => 'Edit Products'])

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
        <div class="px-6 py-4 flex items-center justify-between gap-4">
            <h5 class="grow text-lg font-medium text-default-900">Total Sales</h5>
            <div class="shrink hs-dropdown relative [--placement:bottom-right]">
                <button type="button" class="hs-dropdown-toggle h-8 w-8 inline-flex items-center justify-center bg-default-950/5 border border-default-200 rounded-full text-base focus:rotate-90 transition-all duration-500"><i class="ti ti-dots-vertical"></i></button>

                <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-[180px] transition-[opacity,margin] mt-4 opacity-0 z-10 bg-white dark:bg-default-50 shadow-lg rounded-lg border border-default-100 p-1.5 hidden">
                    <ul class="flex flex-col gap-1">
                        <li>
                            <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Action</a>
                        </li>
                        <li>
                            <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Another Action</a>
                        </li>
                        <li>
                            <a class="flex items-center font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-400/10 rounded" href="#">Somthing else here</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="p-5 border-t border-dashed border-default-200">
            <div class="grid lg:grid-cols-3 gap-6">
                <div class="">
                    <div class="h-96 p-6 flex flex-col items-center justify-center rounded-lg border border-default-200 mb-4">
                        <div class="hidden">
                            <div class="mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="image" class="lucide lucide-image w-10 h-10 stroke-primary fill-primary/10">
                                    <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect>
                                    <circle cx="9" cy="9" r="2"></circle>
                                    <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path>
                                </svg>
                            </div>
                            <h5 class="text-base text-primary font-medium mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="upload-cloud" class="lucide lucide-upload-cloud inline-flex ms-2">
                                    <path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242"></path>
                                    <path d="M12 12v9"></path>
                                    <path d="m16 16-4-4-4 4"></path>
                                </svg>
                                Upload Image
                            </h5>
                            <p class="text-sm text-default-600 mb-2">Upload a cover image for your product.</p>
                            <p class="text-sm text-default-600">
                                File Format
                                <span class="text-default-800">jpeg, png</span>
                                Recommened Size
                                <span class="text-default-800">600x600 (1:1)</span>
                            </p>
                        </div>

                        <img src="/images/product/3.png" alt="">
                    </div>

                    <h4 class="text-base font-medium text-default-800 mb-4">Additional Images</h4>

                    <div class="grid grid-cols-2 gap-6">
                        <form action="#" class="additional-dropzone dropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple="multiple">
                            </div>
                            <div class="dz-message needsclick w-full">
                                <div class="mb-3">
                                    <i class="ti ti-photo-circle text-4xl text-primary"></i>
                                </div>

                                <h5 class="text-base text-default-600"><i class="ti ti-cloud-upload text-lg text-default-600"></i> Upload Image.</h5>
                            </div>
                        </form>
                        <form action="#" class="product-dropzone dropzone">
                            <div class="fallback">
                                <input name="file" type="file" multiple="multiple">
                            </div>
                            <div class="dz-message needsclick w-full">
                                <div class="mb-3">
                                    <i class="ti ti-photo-circle text-4xl text-primary"></i>
                                </div>

                                <h5 class="text-base text-default-600"><i class="ti ti-cloud-upload text-lg text-default-600"></i> Upload Image.</h5>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="lg:col-span-2">
                    <div class="grid lg:grid-cols-2 gap-6 mb-6">
                        <div class="space-y-6">
                            <div>
                                <input class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Product Name" value="Grapes">
                            </div>

                            <div class="relative">
                                <select id="all-select-categories" data-hs-select='{
                                      "placeholder": "Select Country",
                                      "toggleTag": "<button type=\"button\"></button>",
                                      "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 form-input block w-full rounded-md py-2.5 ps-4 pe-10 text-default-800 text-start text-sm focus:ring-transparent border-default-200 overflow-hidden focus:border-primary dark:bg-default-50 before:absolute before:inset-0 before:z-[1]",
                                      "dropdownClasses": "mt-2 z-50 w-full max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-md overflow-hidden overflow-y-auto dark:bg-default-50 [&::-webkit-scrollbar]:w-1 [&::-webkit-scrollbar-track]:bg-transparent [&::-webkit-scrollbar-thumb]:bg-default-300",
                                      "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                                      "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                                      }' class="hidden">
                                    <option></option>
                                    <option value="Apples">Apples</option>
                                    <option value="Bakery">Bakery</option>
                                    <option value="Bakery Buns">Bakery Buns</option>
                                    <option value="Beverage">Beverage</option>
                                    <option value="Biscuits">Biscuits</option>
                                    <option value="Berries">Berries</option>
                                    <option value="Bread">Bread</option>
                                    <option value="Butter">Butter</option>
                                    <option value="Cakes">Cakes</option>
                                    <option value="Carrots">Carrots</option>
                                    <option value="Canned food">Canned food</option>
                                    <option value="Condiments">Condiments</option>
                                    <option value="Dairy">Dairy</option>
                                    <option value="Deli">Deli</option>
                                    <option value="Dried goods">Dried goods</option>
                                    <option value="Eggs">Eggs</option>
                                    <option value="Food Freezing">Food Freezing</option>
                                    <option value="Fruits" selected>Fruits</option>
                                    <option value="Meat">Meat</option>
                                    <option value="Produce">Produce</option>
                                    <option value="Snacks">Snacks</option>
                                    <option value="Seafood">Seafood</option>
                                    <option value="Vegetables">Vegetables</option>
                                </select>


                                <div class="absolute -inset-y-0 end-3 flex items-center">
                                    <i class="ti ti-selector shrink text-base/none text-default-500"></i>
                                </div>
                            </div>
                            <!-- End Select -->

                            <div class="grid lg:grid-cols-2 gap-6">
                                <div>
                                    <input class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Selling Price" value="$45">
                                </div>

                                <div>
                                    <input class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Cost Price" value="$35">
                                </div>
                            </div>

                            <div>
                                <input class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="number" placeholder="Quantity in Stock" value="80">
                            </div>

                            <div class="relative">
                                <select id="all-select-categories" data-hs-select='{
                                      "placeholder": "Order Type",
                                      "toggleTag": "<button type=\"button\"></button>",
                                      "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 form-input block w-full rounded-md py-2.5 ps-4 pe-10 text-default-800 text-start text-sm focus:ring-transparent border-default-200 overflow-hidden focus:border-primary dark:bg-default-50 before:absolute before:inset-0 before:z-[1]",
                                      "dropdownClasses": "mt-2 z-50 w-full max-h-[300px] p-1.5 space-y-0.5 bg-white border border-default-200 rounded-md overflow-hidden overflow-y-auto dark:bg-default-50 [&::-webkit-scrollbar]:w-1 [&::-webkit-scrollbar-track]:bg-transparent [&::-webkit-scrollbar-thumb]:bg-default-300",
                                      "optionClasses": "py-2 px-3 w-full text-sm text-default-800 cursor-pointer rounded-md hover:bg-default-100 focus:outline-none focus:bg-default-100",
                                      "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks text-lg flex-shrink-0 text-primary\" /></i></span></div>"
                                      }' class="hidden">
                                    <option></option>
                                    <option value="delivery" selected>Delivery</option>
                                    <option value="pickup">Pickup</option>
                                    <option value="dine-in">Dine-in</option>
                                </select>


                                <div class="absolute -inset-y-0 end-3 flex items-center">
                                    <i class="ti ti-selector shrink text-base/none text-default-500"></i>
                                </div>
                            </div>
                            <!-- End Select -->

                            <div class="flex justify-between">
                                <h4 class="text-sm font-medium text-default-600">Discount</h4>
                                <div class="flex items-center gap-4">
                                    <label class="block text-sm text-default-600" for="addDiscount">Add Discount</label>
                                    <input type="checkbox" id="addDiscount" class="relative w-[3.25rem] h-7 bg-default-200 focus:ring-0 checked:bg-none checked:!bg-primary border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 appearance-none focus:ring-transparent before:inline-block before:w-6 before:h-6 before:bg-white before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:transition before:ease-in-out before:duration-200" checked>
                                </div>
                            </div>

                            <div class="flex justify-between">
                                <h4 class="text-sm font-medium text-default-600">Expiry Date</h4>
                                <div class="flex items-center gap-4">
                                    <label class="block text-sm text-default-600" for="addExpiryDate">Add Expiry Date</label>
                                    <input type="checkbox" id="addExpiryDate" class="relative w-[3.25rem] h-7 bg-default-200 focus:ring-0 checked:bg-none checked:!bg-primary border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 appearance-none focus:ring-transparent before:inline-block before:w-6 before:h-6 before:bg-white before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:transition before:ease-in-out before:duration-200">
                                </div>
                            </div>
                        </div>

                        <div class="space-y-6">
                            <div>
                                <textarea class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" rows="5" placeholder="Short Description">Handpicked for perfection, our grapes are plump, juicy, and impeccably fresh. Each bite is a burst of natural sweetness.</textarea>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-default-900 mb-2" for="editor">Product Long Description</label>
                                <div id="editor" class="h-36 mb-2">
                                    <h3>Mexican burritos are usually made with a wheat tortilla and contain grilled meat, cheese toppings</h3>
                                </div>

                                <p class="text-sm text-default-600">Add a long description for your product</p>
                            </div>

                            <div class="flex justify-between">
                                <h4 class="text-sm font-medium text-default-600">Return Policy</h4>
                                <div class="flex items-center gap-4">
                                    <label class="block text-sm text-default-600" for="returnPolicy">Return Policy</label>
                                    <input type="checkbox" id="returnPolicy" class="relative w-[3.25rem] h-7 bg-default-200 focus:ring-0 checked:bg-none checked:!bg-primary border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 appearance-none focus:ring-transparent before:inline-block before:w-6 before:h-6 before:bg-white before:translate-x-0 checked:before:translate-x-full before:shadow before:rounded-full before:transform before:transition before:ease-in-out before:duration-200">
                                </div>
                            </div>

                            <div>
                                <p class="text-xs text-default-500 mb-3">Date Added</p>
                                <div class="grid lg:grid-cols-2 gap-6">
                                    <div>
                                        <div class="relative">
                                            <span class="absolute top-1/2 start-2.5 -translate-y-1/2"><i data-lucide="calendar-days" class="h-4 w-4 text-default-700"></i></span>
                                            <span class="absolute top-1/2 end-2.5 -translate-y-1/2"><i data-lucide="chevron-down" class="h-4 w-4 text-default-700"></i></span>
                                            <input type="text" class="block w-full rounded-md py-2.5 px-9 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="datepicker-basic">
                                        </div><!-- end relative -->
                                    </div>

                                    <div>
                                        <div class="relative">
                                            <span class="absolute top-1/2 start-2.5 -translate-y-1/2"><i data-lucide="calendar-days" class="h-4 w-4 text-default-700"></i></span>
                                            <span class="absolute top-1/2 end-2.5 -translate-y-1/2"><i data-lucide="chevron-down" class="h-4 w-4 text-default-700"></i></span>
                                            <input type="text" class="block w-full rounded-md py-2.5 px-9 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="timepicker">
                                        </div><!-- end relative -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-3">
                    <div class="flex flex-wrap justify-end items-center gap-4">
                        <div class="flex flex-wrap items-center gap-4">
                            <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
                                <button type="button" class="hs-dropdown-toggle flex items-center gap-2 font-medium text-default-700 text-sm py-2.5 px-4 rounded-md bg-default-100 transition-all">
                                    Save as Draft <i data-lucide="chevron-down" class="h-4 w-4"></i>
                                </button>

                                <div class="hs-dropdown-menu hs-dropdown-open:opacity-100 min-w-[200px] transition-[opacity,margin] mt-4 opacity-0 hidden z-20 bg-white shadow-[rgba(17,_17,_26,_0.1)_0px_0px_16px] rounded-lg border border-default-100 p-1.5 dark:bg-default-50">
                                    <ul class="flex flex-col gap-1">
                                        <li><a class="flex items-center gap-3 font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded" href="javascript:void(0)">Publish</a></li>
                                        <li><a class="flex items-center gap-3 font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded" href="javascript:void(0)">Save as Darft</a></li>
                                        <li><a class="flex items-center gap-3 font-normal text-default-600 py-2 px-3 transition-all hover:text-default-700 hover:bg-default-100 rounded" href="javascript:void(0)">Discard</a></li>
                                    </ul><!-- end dropdown items -->
                                </div><!-- end dropdown menu -->
                            </div>
                            <button class="py-2.5 px-4 inline-flex rounded-lg text-sm font-medium bg-primary text-white transition-all hover:bg-primary-500">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
  @vite(['resources/js/admin-product-add.js'])
@endsection