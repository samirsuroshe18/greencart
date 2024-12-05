@extends('layouts.admin')

@section('content')

    <div class="p-6 space-y-6">

      @include('layouts.shared/admin-page-title', ['subtitle' => 'Advanced UI', 'title' => 'Sweet Alert'])

      <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
        <div class="flex items-center justify-between py-4 px-5">
          <div class="">
            <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Examples</h5>
            <p class="text-default-600 text-sm font-medium">A beautiful, responsive, customizable and accessible (WAI-ARIA) replacement for JavaScript's popup boxes. Zero dependencies.</p>
          </div>
        </div>
        <div class="p-5 border-t border-dashed border-default-200">
          <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="flex flex-col items-center justify-center space-y-4 text-center border border-default-200 rounded-lg p-4">
              <button type="button" class="py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary/5 hover:bg-primary border-primary/20 hover:border-primary text-primary hover:text-white rounded focus:ring focus:ring-primary/30" id="sa-basic">Click Me</button>
              <p class="">A basic message</p>
            </div>

            <div class="flex flex-col items-center justify-center space-y-4 text-center border border-default-200 rounded-lg p-4">
              <button type="button" class="py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary/5 hover:bg-primary border-primary/20 hover:border-primary text-primary hover:text-white rounded focus:ring focus:ring-primary/30" id="sa-title">Click Me</button>
              <p class="">A title with a text under</p>
            </div>

            <div class="flex flex-col items-center justify-center space-y-4 text-center border border-default-200 rounded-lg p-4">
              <button type="button" class="py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary/5 hover:bg-primary border-primary/20 hover:border-primary text-primary hover:text-white rounded focus:ring focus:ring-primary/30" id="sa-success">Click Me</button>
              <p class="">A success message!</p>
            </div>

            <div class="flex flex-col items-center justify-center space-y-4 text-center border border-default-200 rounded-lg p-4">
              <button type="button" class="py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary/5 hover:bg-primary border-primary/20 hover:border-primary text-primary hover:text-white rounded focus:ring focus:ring-primary/30" id="sa-warning">Click Me</button>
              <p class="">A warning message, with a function attached to the "Confirm"-button... </p>
            </div>

            <div class="flex flex-col items-center justify-center space-y-4 text-center border border-default-200 rounded-lg p-4">
              <button type="button" class="py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary/5 hover:bg-primary border-primary/20 hover:border-primary text-primary hover:text-white rounded focus:ring focus:ring-primary/30" id="sa-params">Click Me</button>
              <p class="">By passing a parameter, you can execute something else for "Cancel".</p>
            </div>

            <div class="flex flex-col items-center justify-center space-y-4 text-center border border-default-200 rounded-lg p-4">
              <button type="button" class="py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary/5 hover:bg-primary border-primary/20 hover:border-primary text-primary hover:text-white rounded focus:ring focus:ring-primary/30" id="sa-image">Click Me</button>
              <p class="">By passing a parameter, you can execute something else for "Cancel".</p>
            </div>

            <div class="flex flex-col items-center justify-center space-y-4 text-center border border-default-200 rounded-lg p-4">
              <button type="button" class="py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary/5 hover:bg-primary border-primary/20 hover:border-primary text-primary hover:text-white rounded focus:ring focus:ring-primary/30" id="sa-close">Click Me</button>
              <p class="">A message with auto close timer</p>
            </div>

            <div class="flex flex-col items-center justify-center space-y-4 text-center border border-default-200 rounded-lg p-4">
              <button type="button" class="py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary/5 hover:bg-primary border-primary/20 hover:border-primary text-primary hover:text-white rounded focus:ring focus:ring-primary/30" id="custom-html-alert">Click Me</button>
              <p class="">Custom HTML description and buttons</p>
            </div>

            <div class="flex flex-col items-center justify-center space-y-4 text-center border border-default-200 rounded-lg p-4">
              <button type="button" class="py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary/5 hover:bg-primary border-primary/20 hover:border-primary text-primary hover:text-white rounded focus:ring focus:ring-primary/30" id="sa-position">Click Me</button>
              <p class="">A custom positioned dialog</p>
            </div>

            <div class="flex flex-col items-center justify-center space-y-4 text-center border border-default-200 rounded-lg p-4">
              <button type="button" class="py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary/5 hover:bg-primary border-primary/20 hover:border-primary text-primary hover:text-white rounded focus:ring focus:ring-primary/30" id="ajax-alert">Click Me</button>
              <p class="">Ajax request example</p>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection

@section('script')
  @vite(['resources/js/ui-advance-sweet-alert.js'])
@endsection
