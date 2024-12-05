@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Form', 'title' => 'Picker'])

    <div class="grid lg:grid-cols-2 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Basic Example</h5>
                    <p class="text-default-600 text-sm font-medium">Implementing a basic example of flatpickr for easy date and time selection.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <input type="text" class="form-input w-full rounded py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="datepicker-basic">
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">DateTime</h5>
                    <p class="text-default-600 text-sm font-medium">Utilizing flatpickr to manage and select date and time in a seamless interface.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200 relative">
                <input type="text" class="form-input w-full rounded py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="datepicker-datetime">
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Human-friendly Dates</h5>
                    <p class="text-default-600 text-sm font-medium">Implementing flatpickr to simplify date selections with human-friendly input.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <input type="text" class="form-input w-full rounded py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="datepicker-humanfd">
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">MinDate and MaxDate</h5>
                    <p class="text-default-600 text-sm font-medium">Utilizing flatpickr's MinDate and MaxDate functionalities for date range restrictions.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <input type="text" class="form-input w-full rounded py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="datepicker-minmax">
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Disabling dates</h5>
                    <p class="text-default-600 text-sm font-medium">Implementing flatpickr to disable specific dates based on defined criteria.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <input type="text" class="form-input w-full rounded py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="datepicker-disable">
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Selecting multiple dates</h5>
                    <p class="text-default-600 text-sm font-medium">Utilizing flatpickr to enable selection of multiple dates in a calendar view.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <input type="text" class="form-input w-full rounded py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="datepicker-multiple">
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Range</h5>
                    <p class="text-default-600 text-sm font-medium">Employing flatpickr for selecting a date range within a calendar interface.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <input type="text" class="form-input w-full rounded py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="datepicker-range">
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Picker</h5>
                    <p class="text-default-600 text-sm font-medium">Utilizing flatpickr to enable a date picker interface with various configuration options.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <input type="text" class="form-input w-full rounded py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="datepicker-timepicker">
            </div>
        </div>
    </div>

</div>

@endsection

@section('script')
  @vite(['resources/js/ui-form-picker.js'])
@endsection