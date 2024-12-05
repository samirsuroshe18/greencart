@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

  @include('layouts.shared/admin-page-title', ['subtitle' => 'Base UI', 'title' => 'Modals'])
  
  <div class="grid lg:grid-cols-2 gap-6">
    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Slide down animation</h5>
          <p class="text-default-600 text-sm font-medium">The default form of a modal dialog with slide down animation.</p>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <button type="button" class="py-2 px-5 inline-flex items-center justify-center font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md" data-hs-overlay="#modal-one">
          Open modal
        </button>
        <div id="modal-one" class="hs-overlay w-full h-full fixed top-0 left-0 z-[80] transition-all duration-500 overflow-x-hidden overflow-y-auto hidden pointer-events-none">
          <div class="-translate-y-5 hs-overlay-open:translate-y-0 hs-overlay-open:opacity-100 opacity-0 ease-in-out transition-all duration-500 sm:max-w-lg sm:w-full my-8 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-default-50">
            <div class="flex flex-col border border-default-200 shadow-sm rounded-lg  pointer-events-auto">
              <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                <h3 class="text-lg font-medium text-default-900">
                  Modal title
                </h3>
                <button type="button" class="text-default-600 cursor-pointer" data-hs-overlay="#modal-one">
                  <i class="ti ti-x text-lg"></i>
                </button>
              </div>
              <div class="p-4 overflow-y-auto">
                <p class="mt-1 text-default-600">
                  This is a wider card with supporting text below as a natural lead-in to additional content.
                </p>
              </div>
              <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-default-200">
                <button type="button" class="py-2 px-5 inline-flex items-center justify-center font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary/5 hover:bg-primary border-primary/10 hover:border-primary text-primary hover:text-white rounded-md" data-hs-overlay="#modal-one">
                  <i class="ti ti-x me-1"></i>
                  Close
                </button>
                <a class="py-2 px-5 inline-flex items-center justify-center font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md" href="#">
                  Save changes
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Slide up animation</h5>
          <p class="text-default-600 text-sm font-medium">The default form of a modal dialog with slide down animation.</p>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <button type="button" class="py-2 px-5 inline-flex items-center justify-center font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md" data-hs-overlay="#modal-two">
          Open modal
        </button>
        <div id="modal-two" class="hs-overlay w-full h-full fixed top-0 left-0 z-60 transition-all duration-500 overflow-y-auto hidden pointer-events-none">
          <div class="translate-y-10 hs-overlay-open:translate-y-0 hs-overlay-open:opacity-100 opacity-0 ease-in-out transition-all duration-500 sm:max-w-lg sm:w-full my-8 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-default-50">
            <div class="flex flex-col border border-default-200 shadow-sm rounded-lg  pointer-events-auto">
              <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                <h3 class="text-lg font-medium text-default-900">
                  Modal title
                </h3>
                <button type="button" class="text-default-600 cursor-pointer" data-hs-overlay="#modal-two">
                  <i class="ti ti-x text-lg"></i>
                </button>
              </div>
              <div class="p-4 overflow-y-auto">
                <p class="mt-1 text-default-600">
                  This is a wider card with supporting text below as a natural lead-in to additional content.
                </p>
              </div>
              <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-default-200">
                <button type="button" class="py-2 px-5 inline-flex items-center justify-center font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary/5 hover:bg-primary border-primary/10 hover:border-primary text-primary hover:text-white rounded-md" data-hs-overlay="#modal-two">
                  <i class="ti ti-x me-1"></i>
                  Close
                </button>
                <a class="py-2 px-5 inline-flex items-center justify-center font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md" href="#">
                  Save changes
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Size</h5>
          <p class="text-default-600 text-sm font-medium">Modals have three optional sizes.</p>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="flex flex-wrap items-center gap-2">
          <div class="">
            <button type="button" class="py-2 px-5 inline-flex items-center justify-center font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md" data-hs-overlay="#modal-three">
              small
            </button>
            <div id="modal-three" class="hs-overlay w-full h-full fixed top-0 left-0 z-60 transition-all duration-500 overflow-y-auto hidden pointer-events-none">
              <div class="-translate-y-5 hs-overlay-open:translate-y-0 hs-overlay-open:opacity-100 opacity-0 ease-in-out transition-all duration-500 sm:max-w-lg sm:w-full my-8 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-default-50">
                <div class="flex flex-col border border-default-200 shadow-sm rounded-lg  pointer-events-auto">
                  <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                    <h3 class="text-lg font-medium text-default-900">
                      Modal title
                    </h3>
                    <button type="button" class="text-default-600 cursor-pointer" data-hs-overlay="#modal-three">
                      <i class="ti ti-x text-lg"></i>
                    </button>
                  </div>
                  <div class="p-4 overflow-y-auto">
                    <p class="mt-1 text-default-600">
                      This is a wider card with supporting text below as a natural lead-in to additional content.
                    </p>
                  </div>
                  <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-default-200">
                    <button type="button" class="py-2 px-5 inline-flex items-center justify-center font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary/5 hover:bg-primary border-primary/10 hover:border-primary text-primary hover:text-white rounded-md" data-hs-overlay="#modal-three">
                      <i class="ti ti-x me-1"></i>
                      Close
                    </button>
                    <a class="py-2 px-5 inline-flex items-center justify-center font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md" href="#">
                      Save changes
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="">
            <button type="button" class="py-2 px-5 inline-flex items-center justify-center font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md" data-hs-overlay="#modal-four">
              Medium
            </button>
            <div id="modal-four" class="hs-overlay w-full h-full fixed top-0 left-0 z-60 transition-all duration-500 overflow-y-auto hidden pointer-events-none">
              <div class="-translate-y-5 hs-overlay-open:translate-y-0 hs-overlay-open:opacity-100 opacity-0 ease-in-out transition-all duration-500 sm:max-w-2xl sm:w-full my-8 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-default-50">
                <div class="flex flex-col border border-default-200 shadow-sm rounded-lg  pointer-events-auto">
                  <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                    <h3 class="text-lg font-medium text-default-900">
                      Modal title
                    </h3>
                    <button type="button" class="text-default-600 cursor-pointer" data-hs-overlay="#modal-four">
                      <i class="ti ti-x text-lg"></i>
                    </button>
                  </div>
                  <div class="p-4 overflow-y-auto">
                    <p class="mt-1 text-default-600">
                      This is a wider card with supporting text below as a natural lead-in to additional content.
                    </p>
                  </div>
                  <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-default-200">
                    <button type="button" class="py-2 px-5 inline-flex items-center justify-center font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary/5 hover:bg-primary border-primary/10 hover:border-primary text-primary hover:text-white rounded-md" data-hs-overlay="#modal-four">
                      <i class="ti ti-x me-1"></i>
                      Close
                    </button>
                    <a class="py-2 px-5 inline-flex items-center justify-center font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md" href="#">
                      Save changes
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="">
            <button type="button" class="py-2 px-5 inline-flex items-center justify-center font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md" data-hs-overlay="#modal-five">
              Large
            </button>
            <div id="modal-five" class="hs-overlay w-full h-full fixed top-0 left-0 z-60 transition-all duration-500 overflow-y-auto hidden pointer-events-none">
              <div class="-translate-y-5 hs-overlay-open:translate-y-0 hs-overlay-open:opacity-100 opacity-0 ease-in-out transition-all duration-500 sm:max-w-6xl sm:w-full my-8 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-default-50">
                <div class="flex flex-col border border-default-200 shadow-sm rounded-lg  pointer-events-auto">
                  <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                    <h3 class="text-lg font-medium text-default-900">
                      Modal title
                    </h3>
                    <button type="button" class="text-default-600 cursor-pointer" data-hs-overlay="#modal-five">
                      <i class="ti ti-x text-lg"></i>
                    </button>
                  </div>
                  <div class="p-4 overflow-y-auto">
                    <p class="mt-1 text-default-600">
                      This is a wider card with supporting text below as a natural lead-in to additional content.
                    </p>
                  </div>
                  <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-default-200">
                    <button type="button" class="py-2 px-5 inline-flex items-center justify-center font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary/5 hover:bg-primary border-primary/10 hover:border-primary text-primary hover:text-white rounded-md" data-hs-overlay="#modal-five">
                      <i class="ti ti-x me-1"></i>
                      Close
                    </button>
                    <a class="py-2 px-5 inline-flex items-center justify-center font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md" href="#">
                      Save changes
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Static backdrop</h5>
          <p class="text-default-600 text-sm font-medium">When backdrop is set to static, the modal will not close when clicking outside it. Click the button below to try it.</p>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="">
          <button type="button" class="py-2 px-5 inline-flex items-center justify-center font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md [--overlay-backdrop:static]" data-hs-overlay="#modal-six">
            Open Modal
          </button>
          <div id="modal-six" class="w-full h-full fixed top-0 left-0 z-60 transition-all duration-500 overflow-y-auto [--overlay-backdrop:static] hidden">
            <div class="-translate-y-5 hs-overlay-open:translate-y-0 hs-overlay-open:opacity-100 opacity-0 ease-in-out transition-all duration-500 sm:max-w-lg sm:w-full my-8 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-default-50">
              <div class="flex flex-col border border-default-200 shadow-sm rounded-lg  pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                  <h3 class="text-lg font-medium text-default-900">
                    Modal title
                  </h3>
                  <button type="button" class="text-default-600 cursor-pointer" data-hs-overlay="#modal-six">
                    <i class="ti ti-x text-lg"></i>
                  </button>
                </div>
                <div class="p-4 overflow-y-auto">
                  <p class="mt-1 text-default-600">
                    This is a wider card with supporting text below as a natural lead-in to additional content.
                  </p>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-default-200">
                  <button type="button" class="py-2 px-5 inline-flex items-center justify-center font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary/5 hover:bg-primary border-primary/10 hover:border-primary text-primary hover:text-white rounded-md" data-hs-overlay="#modal-six">
                    <i class="ti ti-x me-1"></i>
                    Close
                  </button>
                  <a class="py-2 px-5 inline-flex items-center justify-center font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md" href="#">
                    Save changes
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Scrolling behavior</h5>
          <p class="text-default-600 text-sm font-medium">This will prevent browser issues such as <code class="text-primary">scrollIntoView</code> scrolling the window instead of only the closest scroll parent.</p>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="">
          <button type="button" class="py-2 px-5 inline-flex items-center justify-center font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md [--overlay-backdrop:static]" data-hs-overlay="#modal-seven">
            Open Modal
          </button>
          <div id="modal-seven" class="hs-overlay w-full h-full fixed top-0 left-0 z-60 transition-all duration-500 overflow-y-auto hidden pointer-events-none">
            <div class="-translate-y-5 hs-overlay-open:translate-y-0 hs-overlay-open:opacity-100 opacity-0 ease-in-out transition-all duration-500 sm:max-w-lg sm:w-full my-8 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-default-50">
              <div class="flex flex-col border border-default-200 shadow-sm rounded-lg  pointer-events-auto">
                <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                  <h3 class="text-lg font-medium text-default-900">
                    Modal title
                  </h3>
                  <button type="button" class="text-default-600 cursor-pointer" data-hs-overlay="#modal-seven">
                    <i class="ti ti-x text-lg"></i>
                  </button>
                </div>
                <div class="p-4 overflow-y-auto h-[calc(100vh-500px)]">
                  <div class="space-y-4">
                    <div>
                      <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Be bold</h3>
                      <p class="mt-1 text-lg text-gray-500 dark:text-gray-400">
                        Motivate teams to do their best work. Offer best practices to get users going in the right direction. Be bold and offer just enough help to get the work started, and then get out of the way. Give accurate information so users can make educated decisions. Know your user's struggles and desired outcomes and give just enough information to let them get where they need to go.
                      </p>
                    </div>

                    <div>
                      <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Be optimistic</h3>
                      <p class="mt-1 text-lg text-gray-500 dark:text-gray-400">
                        Focusing on the details gives people confidence in our products. Weave a consistent story across our fabric and be diligent about vocabulary across all messaging by being brand conscious across products to create a seamless flow across all the things. Let people know that they can jump in and start working expecting to find a dependable experience across all the things. Keep teams in the loop about what is happening by informing them of relevant features, products and opportunities for success. Be on the journey with them and highlight the key points that will help them the most - right now. Be in the moment by focusing attention on the important bits first.
                      </p>
                    </div>

                    <div>
                      <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Be practical, with a wink</h3>
                      <p class="mt-1 text-lg text-gray-500 dark:text-gray-400">
                        Keep our own story short and give teams just enough to get moving. Get to the point and be direct. Be concise - we tell the story of how we can help, but we do it directly and with purpose. Be on the lookout for opportunities and be quick to offer a helping hand. At the same time realize that nobody likes a nosy neighbor. Give the user just enough to know that something awesome is around the corner and then get out of the way. Write clear, accurate, and concise text that makes interfaces more usable and consistent - and builds trust. We strive to write text that is understandable by anyone, anywhere, regardless of their culture or language so that everyone feels they are part of the team.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-default-200">
                  <button type="button" class="py-2 px-5 inline-flex items-center justify-center font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary/5 hover:bg-primary border-primary/10 hover:border-primary text-primary hover:text-white rounded-md" data-hs-overlay="#modal-seven">
                    <i class="ti ti-x me-1"></i>
                    Close
                  </button>
                  <a class="py-2 px-5 inline-flex items-center justify-center font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md" href="#">
                    Save changes
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection