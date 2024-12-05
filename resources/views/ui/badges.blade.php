@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Base UI', 'title' => 'Badges'])

    <div class="grid lg:grid-cols-2 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Default Badges</h5>
                    <p class="text-default-600 text-sm font-medium">The default form of solid color badges.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex items-center flex-wrap gap-2">
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-primary text-white">Primary</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-gray-600 text-white">Gray</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-emerald-600 text-white">Emerald</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-red-600 text-white">Red</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-blue-600 text-white">Blue</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-yellow-600 text-white">Yellow</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-sky-600 text-white">Sky</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-cyan-600 text-white">Cyan</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-purple-600 text-white">Purple</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-gray-800 text-white">Dark</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-gray-100 text-gray-900">Light</span>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Default Rounded Badges</h5>
                    <p class="text-default-600 text-sm font-medium">Use utility classes <code class="text-primary">.rounded-full</code>.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex items-center flex-wrap gap-2">
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-primary text-white">Primary</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-gray-600 text-white">Gray</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-emerald-600 text-white">Emerald</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-red-600 text-white">Red</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-blue-600 text-white">Blue</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-yellow-600 text-white">Yellow</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-sky-600 text-white">Sky</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-cyan-600 text-white">Cyan</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-purple-600 text-white">Purple</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-gray-800 text-white">Dark</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-gray-100 text-gray-900">Light</span>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Outline Badges</h5>
                    <p class="text-default-600 text-sm font-medium">Use utility classes <code class="text-primary">.border .border-{color}</code>.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex items-center flex-wrap gap-2">
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium border border-primary text-primary">Primary</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium border border-gray-600 text-gray-600">Gray</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium border border-emerald-600 text-emerald-600">Emerald</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium border border-red-600 text-red-600">Red</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium border border-blue-600 text-blue-600">Blue</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium border border-yellow-600 text-yellow-600">Yellow</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium border border-sky-600 text-sky-600">Sky</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium border border-cyan-600 text-cyan-600">Cyan</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium border border-purple-600 text-purple-600">Purple</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium border border-gray-800 text-gray-800">Dark</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium border border-gray-100 text-gray-100">Light</span>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Outline rounded Badges</h5>
                    <p class="text-default-600 text-sm font-medium">Use utility classes <code class="text-primary">.border .border-{color} .rounded-full</code>.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex items-center flex-wrap gap-2">
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-primary text-primary">Primary</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-gray-600 text-gray-600">Gray</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-emerald-600 text-emerald-600">Emerald</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-red-600 text-red-600">Red</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-blue-600 text-blue-600">Blue</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-yellow-600 text-yellow-600">Yellow</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-sky-600 text-sky-600">Sky</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-cyan-600 text-cyan-600">Cyan</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-purple-600 text-purple-600">Purple</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-gray-800 text-gray-800">Dark</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium border border-gray-100 text-gray-100">Light</span>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Soft Badges</h5>
                    <p class="text-default-600 text-sm font-medium">Use utility classes <code class="text-primary">.bg-{color}/20 .text-{color}</code>.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex items-center flex-wrap gap-2">
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-primary/10 border border-primary/20 text-primary">Primary</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-gray-600/10 border border-gray-600/20 text-gray-600">Gray</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-emerald-600/10 border border-emerald-600/20 text-emerald-600">Emerald</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-red-600/10 border border-red-600/20 text-red-600">Red</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-blue-600/10 border border-blue-600/20 text-blue-600">Blue</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-yellow-600/10 border border-yellow-600/20 text-yellow-600">Yellow</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-sky-600/10 border border-sky-600/20 text-sky-600">Sky</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-cyan-600/10 border border-cyan-600/20 text-cyan-600">Cyan</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-purple-600/10 border border-purple-600/20 text-purple-600">Purple</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-gray-800/10 border border-gray-800/20 text-gray-800">Dark</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-gray-100/10 border border-gray-100/20 text-gray-100">Light</span>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Outline rounded Badges</h5>
                    <p class="text-default-600 text-sm font-medium">Use utility classes <code class="text-primary">.bg-{color}/20 .text-{color} .rounded-full</code>.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex items-center flex-wrap gap-2">
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-primary/10 border border-primary/20 text-primary">Primary</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-gray-600/10 border border-gray-600/20 text-gray-600">Gray</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-emerald-600/10 border border-emerald-600/20 text-emerald-600">Emerald</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-red-600/10 border border-red-600/20 text-red-600">Red</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-blue-600/10 border border-blue-600/20 text-blue-600">Blue</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-yellow-600/10 border border-yellow-600/20 text-yellow-600">Yellow</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-sky-600/10 border border-sky-600/20 text-sky-600">Sky</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-cyan-600/10 border border-cyan-600/20 text-cyan-600">Cyan</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-purple-600/10 border border-purple-600/20 text-purple-600">Purple</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-gray-800/10 border border-gray-800/20 text-gray-800">Dark</span>
                    <span class="inline-flex items-center gap-x-1.5 py-1.5 px-3 rounded-full text-xs font-medium bg-gray-100/10 border border-gray-100/20 text-gray-100">Light</span>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection