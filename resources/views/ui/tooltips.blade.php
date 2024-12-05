@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

  @include('layouts.shared/admin-page-title', ['subtitle' => 'Base UI', 'title' => 'Tooltips'])

  <div class="grid lg:grid-cols-2 gap-6">
    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Example</h5>
          <p class="text-default-600 text-sm font-medium">The default form of a offcanvas dialog with slide start animation.</p>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="flex flex-wrap gap-3">
          <div class="hs-tooltip inline-block [--trigger:hover] [--placement:top]">
            <a class="hs-tooltip-toggle block text-center" href="javascript:;">
              <div class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-primary-600 border-primary hover:border-primary-600 text-white rounded-md">
                Tooltip on Top
              </div>
              <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible transition-opacity opacity-0 relative px-3 py-1 rounded bg-default-800 text-default-200 font-semibold z-50 hidden" role="tooltip">
                Top Tooltip
                <div class="bg-default-800 w-2.5 h-2.5 rotate-45 absolute -bottom-1 start-1/2 -z-10 rounded-[1px]"></div>
              </div>
            </a>
          </div>

          <div class="hs-tooltip inline-block [--trigger:hover] [--placement:bottom]">
            <a class="hs-tooltip-toggle block text-center" href="javascript:;">
              <div class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-primary-600 border-primary hover:border-primary-600 text-white rounded-md">
                Tooltip on Bottom
              </div>
              <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible transition-opacity opacity-0 relative px-3 py-1 rounded bg-default-800 text-default-200 font-semibold z-50 hidden" role="tooltip">
                Bottom Tooltip
                <div class="bg-default-800 w-2.5 h-2.5 rotate-45 absolute -top-1 start-1/2 -z-10 rounded-[1px]"></div>
              </div>
            </a>
          </div>

          <div class="hs-tooltip inline-block [--trigger:hover] [--placement:left]">
            <a class="hs-tooltip-toggle block text-center" href="javascript:;">
              <div class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-primary-600 border-primary hover:border-primary-600 text-white rounded-md">
                Tooltip on Left
              </div>
              <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible transition-opacity opacity-0 relative px-3 py-1 rounded bg-default-800 text-default-200 font-semibold z-50 hidden" role="tooltip">
                Left Tooltip
                <div class="bg-default-800 w-2.5 h-2.5 rotate-45 absolute top-1/3 -end-1 rtl:-start-1 -z-10 rounded-[1px]"></div>
              </div>
            </a>
          </div>

          <div class="hs-tooltip inline-block [--trigger:hover] [--placement:right]">
            <a class="hs-tooltip-toggle block text-center" href="javascript:;">
              <div class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-primary-600 border-primary hover:border-primary-600 text-white rounded-md">
                Tooltip on Right
              </div>
              <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible transition-opacity opacity-0 relative px-3 py-1 rounded bg-default-800 text-default-200 font-semibold z-50 hidden" role="tooltip">
                Right Tooltip
                <div class="bg-default-800 w-2.5 h-2.5 rotate-45 absolute top-1/3 -start-1 rtl:-end-1 -z-10 rounded-[1px]"></div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection