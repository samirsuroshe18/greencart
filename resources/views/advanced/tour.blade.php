@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Advanced UI', 'title' => 'Tour'])

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
        <div class="flex items-center justify-between py-4 px-5">
            <div class="">
                <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Examples</h5>
                <p class="text-default-600 text-sm font-medium">A beautiful, responsive, customizable and accessible (WAI-ARIA) replacement for JavaScript's popup boxes. Zero dependencies.</p>
            </div>
        </div>
        <div class="p-5 border-t border-dashed border-default-200"> 
            <div class="">
                <div class="text-center mb-6">
                    <div class="inline-flex justify-center py-3 px-2" id="logo-tour">
                        <img src="/images/logo-dark.png" class="h-12 block dark:hidden" alt="logo">
                        <img src="/images/logo.png" class="h-12 hidden dark:block" alt="logo">
                    </div>
                    <h5 class="text-base">Responsive Admin Dashboard Template</h5>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="p-6" id="tour-card-one">
                        <i class="ti ti-users text-4xl text-default-950"></i>
                        <div class="bg-gradient-to-r from-default-200 to-white/0 h-0.5 mt-6">
                            <div class="bg-default-400 w-9 h-0.5"></div>
                        </div>
                        <div class="mt-5">
                            <h3 class="text-lg font-semibold text-default-950">Read Labels</h3>
                            <p class="mt-1 text-default-600">Check nutritional labels for ingredients, serving sizes, and health information.</p>
                        </div>
                    </div>

                    <div class="p-6" id="tour-card-two">
                        <i class="ti ti-scoreboard text-4xl text-default-950"></i>
                        <div class="bg-gradient-to-r from-default-200 to-white/0 h-0.5 mt-6">
                            <div class="bg-default-400 w-9 h-0.5"></div>
                        </div>
                        <div class="mt-5">
                            <h3 class="text-lg font-semibold text-default-950">Compare Prices</h3>
                            <p class="mt-1 text-default-600">Look at unit prices to get the best value.</p>
                        </div>
                    </div>

                    <div class="p-6" id="tour-card-three">
                        <i class="ti ti-assembly text-4xl text-default-950"></i>
                        <div class="bg-gradient-to-r from-default-200 to-white/0 h-0.5 mt-6">
                            <div class="bg-default-400 w-9 h-0.5"></div>
                        </div>
                        <div class="mt-5">
                            <h3 class="text-lg font-semibold text-default-950">Buy in Bulk</h3>
                            <p class="mt-1 text-default-600">Fueling knowledge through curated learning paths.</p>
                        </div>
                    </div>

                    <div class="p-6" id="tour-card-four">
                        <i class="ti ti-album text-4xl text-default-950"></i>
                        <div class="bg-gradient-to-r from-default-200 to-white/0 h-0.5 mt-6">
                            <div class="bg-default-400 w-9 h-0.5"></div>
                        </div>
                        <div class="mt-5">
                            <h3 class="text-lg font-semibold text-default-950">Be Flexible</h3>
                            <p class="mt-1 text-default-600">Adjust your plan based on sales, seasonal produce, or new healthy products.</p>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-8">
                    <button class="py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary/5 hover:bg-primary border-primary/20 hover:border-primary text-primary hover:text-white rounded focus:ring focus:ring-primary/30" id="thankyou-tour">Thank you !</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
  @vite(['resources/js/admin-tour.js'])
@endsection