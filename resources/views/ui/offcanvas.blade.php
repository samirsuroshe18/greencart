@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

  @include('layouts.shared/admin-page-title', ['subtitle' => 'Base UI', 'title' => 'Offcanvas'])

  <div class="grid lg:grid-cols-2 gap-6">
    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Example</h5>
          <p class="text-default-600 text-sm font-medium">The default form of a offcanvas dialog with slide start animation.</p>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <button type="button" class="py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-600 border-primary hover:border-primary-600 text-white rounded-md" data-hs-overlay="#hs-overlay-example">
          Open Offcanvas
        </button>
        <div id="hs-overlay-example" class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full fixed top-0 left-0 transition-all duration-300 transform h-full max-w-xs w-full z-60 bg-white border-r border-default-200 dark:bg-default-50 hidden" aria-overlay="true" tabindex="-1">
          <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
            <h3 class="text-lg font-medium text-default-600">
              Offcanvas title
            </h3>
            <button type="button" class="hover:text-default-900 transition-all" data-hs-overlay="#hs-overlay-example">
              <span class="sr-only">Close modal</span>
              <i data-lucide="x" class="h-5 w-5"></i>
            </button>
          </div>
          <div class="p-4">
            <p class="text-default-600 mt-1">
              Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Placement</h5>
          <p class="text-default-600 text-sm font-medium">Try the top, right, and bottom examples out below.</p>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="flex flex-wrap items-center gap-2">
          <div>
            <button type="button" class="py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-600 border-primary hover:border-primary-600 text-white rounded-md" data-hs-overlay="#overlay-top">
              Toggle top offcanvas
            </button>

            <div id="overlay-top" class="hs-overlay hs-overlay-open:translate-y-0 -translate-y-full fixed top-0 inset-x-0 transition-all duration-300 transform max-h-40 h-full w-full z-60 bg-white border-b border-default-200 dark:bg-default-50 hidden">
              <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                <h3 class="text-lg font-medium text-default-600">
                  Offcanvas title
                </h3>
                <button type="button" class="hover:text-default-900" data-hs-overlay="#overlay-top">
                  <span class="sr-only">Close modal</span>
                  <i data-lucide="x" class="h-5 w-5"></i>
                </button>
              </div>
              <div class="p-4">
                <p class="text-default-600 mt-1">
                  Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
                </p>
              </div>
            </div>
          </div>

          <div>
            <button type="button" class="py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-600 border-primary hover:border-primary-600 text-white rounded-md" data-hs-overlay="#overlay-right">
              Toggle right offcanvas
            </button>

            <div id="overlay-right" class="hs-overlay hs-overlay-open:translate-x-0 translate-x-full fixed top-0 right-0 transition-all duration-300 transform h-full max-w-xs w-full z-60 bg-white border-l border-default-200 dark:bg-default-50 hidden" tabindex="-1">
              <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                <h3 class="text-lg font-medium text-default-600">
                  Offcanvas title
                </h3>
                <button type="button" class="hover:text-default-900" data-hs-overlay="#overlay-right">
                  <span class="sr-only">Close modal</span>
                  <i data-lucide="x" class="h-5 w-5"></i>
                </button>
              </div>
              <div class="p-4">
                <p class="text-default-600 mt-1">
                  Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
                </p>
              </div>
            </div>
          </div>

          <div>
            <button type="button" class="py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-600 border-primary hover:border-primary-600 text-white rounded-md" data-hs-overlay="#overlay-bottom">
              Toggle bottom offcanvas
            </button>

            <div id="overlay-bottom" class="hs-overlay hs-overlay-open:translate-y-0 translate-y-full fixed bottom-0 inset-x-0 transition-all duration-300 transform max-h-40 h-full w-full z-60 bg-white border-t border-default-200 dark:bg-default-50 hidden" tabindex="-1">
              <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                <h3 class="text-lg font-medium text-default-600">
                  Offcanvas title
                </h3>
                <button type="button" class="hover:text-default-900" data-hs-overlay="#overlay-bottom">
                  <span class="sr-only">Close modal</span>
                  <i data-lucide="x" class="h-5 w-5"></i>
                </button>
              </div>
              <div class="p-4">
                <p class="text-default-600 mt-1">
                  Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Backdrop</h5>
          <p class="text-default-600 text-sm font-medium">Use the <code class="text-primary">[--body-scroll:true]</code> attribute to toggle <code class="text-primary">body</code> scrolling and <code class="text-primary">[--overlay-backdrop:false]</code> to toggle the backdrop.</p>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="flex flex-wrap items-center gap-2">
          <div>
            <button type="button" class="py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-600 border-primary hover:border-primary-600 text-white rounded-md" data-hs-overlay="#hs-overlay-body-scrolling">
              Enable body scrolling
            </button>

            <div id="hs-overlay-body-scrolling" class="hs-overlay hs-overlay-open:translate-x-0 hidden -translate-x-full fixed top-0 left-0 transition-all duration-300 transform h-full max-w-xs w-full z-60 bg-white border-r border-default-200 dark:bg-default-50 [--body-scroll:true] [--overlay-backdrop:false]" tabindex="-1">
              <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                <h3 class="text-lg font-medium text-default-600">
                  Offcanvas with body scrolling
                </h3>
                <button type="button" class="hover:text-default-900" data-hs-overlay="#hs-overlay-body-scrolling">
                  <span class="sr-only">Close modal</span>
                  <i data-lucide="x" class="h-5 w-5"></i>
                </button>
              </div>
              <div class="p-4">
                <p class="text-default-600 mt-1">
                  Try scrolling the rest of the page to see this option in action.
                </p>
              </div>
            </div>
          </div>

          <div>
            <button type="button" class="py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-600 border-primary hover:border-primary-600 text-white rounded-md" data-hs-overlay="#hs-overlay-backdrop-default">
              Enable backdrop (default)
            </button>

            <div id="hs-overlay-backdrop-default" class="hs-overlay hs-overlay-open:translate-x-0 hidden -translate-x-full fixed top-0 left-0 transition-all duration-300 transform h-full max-w-xs w-full z-60 bg-white border-r border-default-200 dark:bg-default-50" tabindex="-1">
              <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                <h3 class="text-lg font-medium text-default-600">
                  Offcanvas with backdrop
                </h3>
                <button type="button" class="hover:text-default-900" data-hs-overlay="#hs-overlay-backdrop-default">
                  <span class="sr-only">Close modal</span>
                  <i data-lucide="x" class="h-5 w-5"></i>
                </button>
              </div>
              <div class="p-4">
                <p class="text-default-600 mt-1">
                  ...
                </p>
              </div>
            </div>
          </div>

          <div>
            <button type="button" class="py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-600 border-primary hover:border-primary-600 text-white rounded-md" data-hs-overlay="#hs-overlay-backdrop-with-scrolling">
              Enable both scrolling &amp; backdrop
            </button>

            <div id="hs-overlay-backdrop-with-scrolling" class="hs-overlay hs-overlay-open:translate-x-0 hidden -translate-x-full fixed top-0 left-0 transition-all duration-300 transform h-full max-w-xs w-full z-60 bg-white border-r border-default-200 dark:bg-default-50" tabindex="-1" data-hs-overlay-scroll="true">
              <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                <h3 class="text-lg font-medium text-default-600">
                  Backdrop with scrolling
                </h3>
                <button type="button" class="hover:text-default-900" data-hs-overlay="#hs-overlay-backdrop-with-scrolling">
                  <span class="sr-only">Close modal</span>
                  <i data-lucide="x" class="h-5 w-5"></i>
                </button>
              </div>
              <div class="p-4">
                <p class="text-default-600 mt-1">
                  Try scrolling the rest of the page to see this option in action.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection