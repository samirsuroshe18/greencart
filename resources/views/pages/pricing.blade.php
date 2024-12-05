@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Pages', 'title' => 'Pricing'])

    <div class="max-w-lg mx-auto text-center">
        <h2 class="text-2xl font-medium text-default-900 mb-2">Our <span class="font-bold">Plans</span></h2>
        <p class="text-default-600">We have plans and prices that fit your business perfectly. Make your client site a success with our products.</p>
    </div>

    <div class="max-w-7xl mx-auto !mt-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Card -->
            <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold text-default-800 mb-1">Professional</h3>
                    <div class="text-base text-default-600">Everything a small team needs.</div>

                    <div class="mt-5">
                        <span class="text-4xl font-semibold text-default-800">$18.00</span>
                        <span class="ms-3 text-default-600">USD / monthly</span>
                    </div>
                </div>

                <div class="p-6 border-t border-dashed border-default-200">
                    <div class="grid sm:grid-cols-2 gap-y-2 sm:gap-x-6 sm:gap-y-0">
                        <!-- List -->
                        <ul class="space-y-2 text-sm sm:text-base">
                            <li class="flex items-center space-x-3">
                                <i class="ti ti-checks text-base text-primary"></i>
                                <span class="text-default-800">
                                    Up to 10 people
                                </span>
                            </li>

                            <li class="flex items-center space-x-3">
                                <i class="ti ti-checks text-base text-primary"></i>
                                <span class="text-default-800">
                                    Collect data
                                </span>
                            </li>

                            <li class="flex items-center space-x-3">
                                <i class="ti ti-checks text-base text-primary"></i>
                                <span class="text-default-800">
                                    Code extensibility
                                </span>
                            </li>
                        </ul>
                        <!-- End List -->

                        <!-- List -->
                        <ul class="space-y-2 text-sm sm:text-base">
                            <li class="flex items-center space-x-3">
                                <i class="ti ti-checks text-base text-primary"></i>
                                <span class="text-default-800">
                                    Custom reports
                                </span>
                            </li>

                            <li class="flex items-center space-x-3">
                                <i class="ti ti-x text-base text-red-500"></i>
                                <span class="text-default-800">
                                    Product support
                                </span>
                            </li>

                            <li class="flex items-center space-x-3">
                                <i class="ti ti-x text-base text-red-500"></i>
                                <span class="text-default-800">
                                    Activity reporting
                                </span>
                            </li>
                        </ul>
                        <!-- End List -->
                    </div>

                    <button type="button" class="mt-6 py-2 px-5 inline-block font-semibold tracking-wide border outline outline-transparent align-middle duration-500 text-sm text-center bg-transparent border-dashed border-default-300 text-default-900 hover:border-transparent hover:text-primary hover:outline-primary rounded-md">Start free trial</button>
                </div>
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
                <div class="p-6">
                    <h3 class="text-2xl font-semibold text-default-800 mb-1">Teams</h3>
                    <div class="text-base text-default-600">For growing businesses.</div>

                    <div class="mt-5">
                        <span class="text-4xl font-semibold text-default-800">$36.99</span>
                        <span class="ms-3 text-default-600">USD / monthly</span>
                    </div>
                </div>

                <div class="p-6 border-t border-dashed border-default-200">
                    <div class="grid sm:grid-cols-2 gap-y-2 sm:gap-x-6 sm:gap-y-0">
                        <!-- List -->
                        <ul class="space-y-2 text-sm sm:text-base">
                            <li class="flex items-center space-x-3">
                                <i class="ti ti-checks text-base text-primary"></i>
                                <span class="text-default-800">
                                    Up to 10 people
                                </span>
                            </li>

                            <li class="flex items-center space-x-3">
                                <i class="ti ti-checks text-base text-primary"></i>
                                <span class="text-default-800">
                                    Collect data
                                </span>
                            </li>

                            <li class="flex items-center space-x-3">
                                <i class="ti ti-checks text-base text-primary"></i>
                                <span class="text-default-800">
                                    Code extensibility
                                </span>
                            </li>
                        </ul>
                        <!-- End List -->

                        <!-- List -->
                        <ul class="space-y-2 text-sm sm:text-base">
                            <li class="flex items-center space-x-3">
                                <i class="ti ti-checks text-base text-primary"></i>
                                <span class="text-default-800">
                                    Custom reports
                                </span>
                            </li>

                            <li class="flex items-center space-x-3">
                                <i class="ti ti-checks text-base text-primary"></i>
                                <span class="text-default-800">
                                    Product support
                                </span>
                            </li>

                            <li class="flex items-center space-x-3">
                                <i class="ti ti-checks text-base text-primary"></i>
                                <span class="text-default-800">
                                    Activity reporting
                                </span>
                            </li>
                        </ul>
                        <!-- End List -->
                    </div>

                    <button type="button" class="mt-6 py-2 px-5 inline-block font-semibold tracking-wide border outline outline-transparent align-middle duration-500 text-sm text-center bg-transparent border-dashed border-default-300 text-default-900 hover:border-transparent hover:text-primary hover:outline-primary rounded-md">Start free trial</button>
                </div>
            </div>
            <!-- End Card -->
        </div>
    </div>

</div>

@endsection