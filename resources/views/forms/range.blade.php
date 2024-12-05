@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Form', 'title' => 'Range Slider'])

    <div class="grid lg:grid-cols-2 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Example</h5>
                    <p class="text-default-600 text-sm font-medium">Basic noUiSlider example for interactive range selection.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div id="slider"></div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Colorpicker</h5>
                    <p class="text-default-600 text-sm font-medium">Utilize noUiSlider as a color picker for selecting hues or shades.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200 relative">
                <div class="sliders" id="red"></div>
                <div class="sliders" id="green"></div>
                <div class="sliders" id="blue"></div>

                <div id="result"></div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Using HTML5 input elements</h5>
                    <p class="text-default-600 text-sm font-medium">Implementing HTML5 input elements for user interaction.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div id="html5"></div>
                <div class="flex mt-3 gap-2">
                    <select id="input-select" class="form-select grow rounded py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50"></select>
                    <input type="number" class="form-input grow rounded py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" min="-20" max="40" step="1" id="input-number">
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Locking sliders together</h5>
                    <p class="text-default-600 text-sm font-medium">Linking sliders and locking values for synchronous interaction.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="slider" id="slider1"></div>
                <span class="example-val text-default-600 mt-2" id="slider1-span"></span>

                <div class="slider" id="slider2"></div>
                <span class="example-val text-default-600 mt-2" id="slider2-span"></span>

                <button id="lockbutton" class="rounded-md inline-flex bg-indigo-600 py-2 px-3 text-sm font-semibold leading-5 text-white hover:bg-indigo-500">Lock</button>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Non linear slider</h5>
                    <p class="text-default-600 text-sm font-medium">Creating non-linear sliders for customized range values.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div id="nonlinear"></div>
                <span class="example-val text-default-600" id="lower-value"></span>
                <span class="example-val text-default-600" id="upper-value"></span>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Only showing tooltips when sliding handle.</h5>
                    <p class="text-default-600 text-sm font-medium">Tooltips displayed solely while sliding the handle for interactive feedback.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="slider" id="slider-hide"></div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Creating a toggle.</h5>
                    <p class="text-default-600 text-sm font-medium">Creating a toggle slider with vertical orientation.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div id="slider-toggle"></div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Colored Connect Elements</h5>
                    <p class="text-default-600 text-sm font-medium">Display differently colored connecting elements between slider handles.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="slider" id="slider-color"></div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Soft limits</h5>
                    <p class="text-default-600 text-sm font-medium">Implementing soft limits with specified density values.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="mb-8" id="soft"></div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('script')
  @vite(['resources/js/ui-form-range.js'])
@endsection