@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Base UI', 'title' => 'Collapse'])

    <div class="grid lg:grid-cols-2 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Default Collapse</h5>
                    <p class="text-default-600 text-sm font-medium">Cards support a wide variety of content, including images, text, list groups, links, and more.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex flex-wrap items-center gap-2">
                    <div>
                        <button type="button" class="hs-collapse-toggle py-2 px-5 inline-flex items-center gap-1 font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary/5 hover:bg-primary border-primary/10 hover:border-primary text-primary hover:text-white rounded-full group" id="hs-basic-collapse" data-hs-collapse="#hs-basic-collapse-heading">
                            Collapse
                            <i data-lucide="chevron-down" class="hs-collapse-open:rotate-180 shrink w-5 h-5 transition-all duration-300 text-primary group-hover:text-white"></i>
                        </button>
                        <div id="hs-basic-collapse-heading" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-basic-collapse">
                            <div class="mt-5">
                                <p class="text-gray-500 dark:text-gray-400">
                                    This is a collapse body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
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
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Show/Hide</h5>
                    <p class="text-default-600 text-sm font-medium">Preline UI is an open-source set of prebuilt UI components based on the utility-first Tailwind CSS framework.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex flex-wrap items-center gap-2">
                    <p class="">
                        <button class="hs-collapse-toggle inline-flex items-center gap-x-2 text-primary" id="hs-show-hide-collapse" data-hs-collapse="#hs-show-hide-collapse-heading">
                            <span class="hs-collapse-open:hidden">Read more</span>
                            <span class="hs-collapse-open:block hidden">Read less</span>
                            <i class="mdi mdi-chevron-down hs-collapse-open:rotate-180 text-lg ms-2"></i>
                        </button>
                    </p>
                    <div id="hs-show-hide-collapse-heading" class="hs-collapse w-full overflow-hidden transition-[height] duration-300 hidden" aria-labelledby="hs-show-hide-collapse">
                        <p>
                            This is a collapse body. It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection