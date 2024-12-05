@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Base UI', 'title' => 'Alert'])

    <div class="grid lg:grid-cols-2 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Solid color variants</h5>
                    <p class="text-default-600 text-sm font-medium">The default form of solid color.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex flex-col flex-wrap gap-2">
                    <div class="bg-primary border border-primary text-sm text-white rounded-md px-4 py-3 w-full" role="alert">
                        <b>Primary</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="bg-gray-500 border border-gray-500 text-sm text-white rounded-md px-4 py-3 w-full" role="alert">
                        <b>Gray</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="bg-emerald-600 border border-emerald-600 text-sm text-white rounded-md px-4 py-3 w-full" role="alert">
                        <b>Emerald</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="bg-red-600 border border-red-600 text-sm text-white rounded-md px-4 py-3 w-full" role="alert">
                        <b>Red</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="bg-blue-600 border border-blue-600 text-sm text-white rounded-md px-4 py-3 w-full" role="alert">
                        <b>Blue</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="bg-yellow-600 border border-yellow-600 text-sm text-white rounded-md px-4 py-3 w-full" role="alert">
                        <b>Yellow</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="bg-sky-600 border border-sky-600 text-sm text-white rounded-md px-4 py-3 w-full" role="alert">
                        <b>Sky</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="bg-cyan-600 border border-cyan-600 text-sm text-white rounded-md px-4 py-3 w-full" role="alert">
                        <b>Cyan</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="bg-gray-800 border border-gray-800 text-sm text-white rounded-md px-4 py-3 w-full" role="alert">
                        <b>Dark</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="bg-gray-100 border border-gray-100 text-sm text-gray-900 rounded-md px-4 py-2.5 w-full" role="alert">
                        <b>Light</b> alert! You should check in on some of those fields below.
                    </div>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Soft color variants</h5>
                    <p class="text-default-600 text-sm font-medium">The default form of soft color.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex flex-col flex-wrap gap-2">
                    <div class="border border-primary/20 bg-primary/10 text-sm text-primary rounded-md px-4 py-3 w-full" role="alert">
                        <b>Primary</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="border border-gray-500/20 bg-gray-500/10 text-sm text-gray-500 rounded-md px-4 py-3 w-full" role="alert">
                        <b>Gray</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="border border-emerald-600/20 bg-emerald-600/10 text-sm text-emerald-600 rounded-md px-4 py-3 w-full" role="alert">
                        <b>Emerald</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="border border-red-600/20 bg-red-600/10 text-sm text-red-600 rounded-md px-4 py-3 w-full" role="alert">
                        <b>Red</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="border border-blue-600/20 bg-blue-600/10 text-sm text-blue-600 rounded-md px-4 py-3 w-full" role="alert">
                        <b>Blue</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="border border-yellow-600/20 bg-yellow-600/10 text-sm text-yellow-600 rounded-md px-4 py-3 w-full" role="alert">
                        <b>Yellow</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="border border-sky-600/20 bg-sky-600/10 text-sm text-sky-600 rounded-md px-4 py-3 w-full" role="alert">
                        <b>Sky</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="border border-cyan-600/20 bg-cyan-600/10 text-sm text-cyan-600 rounded-md px-4 py-3 w-full" role="alert">
                        <b>Cyan</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="border border-gray-800/20 bg-gray-800/10 text-sm text-gray-800 rounded-md px-4 py-3 w-full" role="alert">
                        <b>Dark</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="border border-gray-100/20 bg-gray-100/10 text-sm text-gray-100 rounded-md px-4 py-2.5 w-full" role="alert">
                        <b>Light</b> alert! You should check in on some of those fields below.
                    </div>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Outline Alerts</h5>
                    <p class="text-default-600 text-sm font-medium">The default form of border.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex flex-col flex-wrap gap-2">
                    <div class="border border-primary text-sm text-primary rounded-md px-4 py-3 w-full" role="alert">
                        <b>Primary</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="border border-gray-500 text-sm text-gray-500 rounded-md px-4 py-3 w-full" role="alert">
                        <b>Gray</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="border border-emerald-600 text-sm text-emerald-600 rounded-md px-4 py-3 w-full" role="alert">
                        <b>Emerald</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="border border-red-600 text-sm text-red-600 rounded-md px-4 py-3 w-full" role="alert">
                        <b>Red</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="border border-blue-600 text-sm text-blue-600 rounded-md px-4 py-3 w-full" role="alert">
                        <b>Blue</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="border border-yellow-600 text-sm text-yellow-600 rounded-md px-4 py-3 w-full" role="alert">
                        <b>Yellow</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="border border-sky-600 text-sm text-sky-600 rounded-md px-4 py-3 w-full" role="alert">
                        <b>Sky</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="border border-cyan-600 text-sm text-cyan-600 rounded-md px-4 py-3 w-full" role="alert">
                        <b>Cyan</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="border border-gray-800 text-sm text-gray-800 rounded-md px-4 py-3 w-full" role="alert">
                        <b>Dark</b> alert! You should check in on some of those fields below.
                    </div>
                    <div class="border border-gray-100 text-sm text-gray-100 rounded-md px-4 py-2.5 w-full" role="alert">
                        <b>Light</b> alert! You should check in on some of those fields below.
                    </div>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Alert with icon & Link</h5>
                    <p class="text-default-600 text-sm font-medium">The default form of border.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex flex-col flex-wrap gap-2">
                    <div class="inline-flex items-center border border-primary/20 bg-primary/10 text-sm text-primary rounded-md px-4 py-3 w-full" role="alert">
                        <i data-lucide="circle-dot-dashed" class="h-4 w-4 me-2"></i>
                        <span><b>Primary</b> alert! You should check.<a href="#" class="font-bold">Click Heare</a></span>
                    </div>
                    <div class="inline-flex items-center border border-emerald-600/20 bg-emerald-600/10 text-sm text-emerald-600 rounded-md px-4 py-3 w-full" role="alert">
                        <i data-lucide="check-circle" class="h-4 w-4 me-2"></i>
                        <span><b>Emerald</b> alert! You should check.<a href="#" class="font-bold">Click Heare</a></span>
                    </div>
                    <div class="inline-flex items-center border border-red-600/20 bg-red-600/10 text-sm text-red-600 rounded-md px-4 py-3 w-full" role="alert">
                        <i data-lucide="skull" class="h-4 w-4 me-2"></i>
                        <span><b>Red</b> alert! You should check.<a href="#" class="font-bold">Click Heare</a></span>
                    </div>
                    <div class="inline-flex items-center border border-yellow-600/20 bg-yellow-600/10 text-sm text-yellow-600 rounded-md px-4 py-3 w-full" role="alert">
                        <i data-lucide="alert-triangle" class="h-4 w-4 me-2"></i>
                        <span><b>Yellow</b> alert! You should check.<a href="#" class="font-bold">Click Heare</a></span>
                    </div>
                    <div class="inline-flex items-center border border-sky-600/20 bg-sky-600/10 text-sm text-sky-600 rounded-md px-4 py-3 w-full" role="alert">
                        <i data-lucide="alert-octagon" class="h-4 w-4 me-2"></i>
                        <span><b>Sky</b> alert! You should check.<a href="#" class="font-bold">Click Heare</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection