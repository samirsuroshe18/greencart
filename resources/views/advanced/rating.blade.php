@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Advanced UI', 'title' => 'Ratings'])

    <div class="grid lg:grid-cols-2 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Rater Js Example</h5>
                    <p class="text-default-600 text-sm font-medium">Interactive star rating plugin for user feedback.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div id="basic-rater"></div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">5 star rater with step</h5>
                    <p class="text-default-600 text-sm font-medium">A 5-star rating plugin with step-based interaction.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div id="rater-step"></div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Random Number Betweeen</h5>
                    <p class="text-default-600 text-sm font-medium">Random number generator within specified range.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div id="rater-message"></div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">On hover Event</h5>
                    <p class="text-default-600 text-sm font-medium">On-hover event functionality for interactive ratings.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div>
                    <div id="rater-onhover" class="align-middle"></div>
                    <span class="ratingnum inline-flex items-center justify-center font-bold text-center rounded-full w-6 h-6 text-sm bg-cyan-500 text-white align-middle ms-2">1</span>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Clear/Reset rater</h5>
                    <p class="text-default-600 text-sm font-medium">Functionality to clear or reset the rating.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex items-center">
                    <div id="raterreset" class="align-middle"></div>
                    <span class="clear-rating"></span>
                    <button id="raterreset-button" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded ms-4">Reset</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
  @vite(['resources/js/ui-advance-rater.js'])
@endsection