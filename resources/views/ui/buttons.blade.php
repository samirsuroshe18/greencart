@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Base UI', 'title' => 'Buttons'])

    <div class="grid lg:grid-cols-2 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Default Buttons</h5>
                    <p class="text-default-600 text-sm font-medium">Use the button classes on an <code class="text-primary">.bg-{color}</code> element.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex flex-wrap items-center gap-2">
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md">Primary</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-md">Emerald</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-red-600 hover:bg-red-700 border-red-600 hover:border-red-700 text-white rounded-md">Red</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-yellow-500 hover:bg-yellow-600 border-yellow-500 hover:border-yellow-600 text-white rounded-md">Yellow</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-blue-600 hover:bg-blue-700 border-blue-600 hover:border-blue-700 text-white rounded-md">Blue</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-sky-500 hover:bg-sky-600 border-sky-500 hover:border-sky-600 text-white rounded-md">Sky</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-cyan-500 hover:bg-cyan-600 border-cyan-500 hover:border-cyan-600 text-white rounded-md">Cyan</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-orange-500 hover:bg-orange-600 border-orange-500 hover:border-orange-600 text-white rounded-md">Orange</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-purple-500 hover:bg-purple-600 border-purple-500 hover:border-purple-700 text-white rounded-md">Purple</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-default-800 hover:bg-default-950 border-default-800 hover:border-default-950 text-default-50 rounded-md">Dark</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-default-500 hover:bg-default-600 border-default-500 hover:border-default-600 text-white rounded-md">Secondary</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-default-100 hover:bg-default-200 border-default-100 hover:border-default-200 text-default-900 rounded-md">Light</button>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Rounded Buttons</h5>
                    <p class="text-default-600 text-sm font-medium">Use the button classes on an <code class="text-primary">.rounded-full</code> element.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex flex-wrap items-center gap-2">
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-full">Primary</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-emerald-600 hover:bg-emerald-700 border-emerald-600 hover:border-emerald-700 text-white rounded-full">Emerald</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-red-600 hover:bg-red-700 border-red-600 hover:border-red-700 text-white rounded-full">Red</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-yellow-500 hover:bg-yellow-600 border-yellow-500 hover:border-yellow-600 text-white rounded-full">Yellow</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-blue-600 hover:bg-blue-700 border-blue-600 hover:border-blue-700 text-white rounded-full">Blue</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-sky-500 hover:bg-sky-600 border-sky-500 hover:border-sky-600 text-white rounded-full">Sky</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-cyan-500 hover:bg-cyan-600 border-cyan-500 hover:border-cyan-600 text-white rounded-full">Cyan</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-orange-500 hover:bg-orange-600 border-orange-500 hover:border-orange-600 text-white rounded-full">Orange</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-purple-500 hover:bg-purple-600 border-purple-500 hover:border-purple-700 text-white rounded-full">Purple</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-default-800 hover:bg-default-950 border-default-800 hover:border-default-950 text-default-50 rounded-full">Dark</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-default-500 hover:bg-default-600 border-default-500 hover:border-default-600 text-white rounded-full">Secondary</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-default-100 hover:bg-default-200 border-default-100 hover:border-default-200 text-default-900 rounded-full">Light</button>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Outline Buttons</h5>
                    <p class="text-default-600 text-sm font-medium">Use the button classes on an <code class="text-primary">.border .border-(color)</code> element.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex flex-wrap items-center gap-2">
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-transparent hover:bg-primary border-primary text-primary hover:text-white rounded-md">Primary</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-transparent hover:bg-emerald-600 border-emerald-600 text-emerald-600 hover:text-white rounded-md">Emerald</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-transparent hover:bg-red-600 border-red-600 text-red-600 hover:text-white rounded-md">Red</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-transparent hover:bg-yellow-500 border-yellow-500 text-yellow-500 hover:text-white rounded-md">Yellow</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-transparent hover:bg-blue-600 border-blue-600 text-blue-600 hover:text-white rounded-md">Blue</a>
                        <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-transparent hover:bg-sky-500 border-sky-500 text-sky-500 hover:text-white rounded-md">Sky</button>
                        <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-transparent hover:bg-cyan-500 border-cyan-500 text-cyan-500 hover:text-white rounded-md">Cyan</button>
                        <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-transparent hover:bg-orange-600 border-orange-600 text-orange-600 hover:text-white rounded-md">Orange</button>
                        <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-transparent hover:bg-purple-500 border-purple-500 text-purple-500 hover:text-white rounded-md">Purple</a>
                            <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-transparent hover:bg-default-800 border-default-800 text-default-800 hover:text-default-50 rounded-md">Dark</button>
                            <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-transparent hover:bg-default-500 border-default-500 text-default-500 hover:text-white rounded-md">Secondary</button>
                            <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-transparent hover:bg-default-100 border-default-100 hover:border-default-100 text-default-900 rounded-md">Light</button>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Outline Rounded Buttons</h5>
                    <p class="text-default-600 text-sm font-medium">Use the button classes on an <code class="text-primary">.border .border-(color)</code> element.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex flex-wrap items-center gap-2">
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-transparent hover:bg-primary border-primary text-primary hover:text-white rounded-full">Primary</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-transparent hover:bg-emerald-600 border-emerald-600 text-emerald-600 hover:text-white rounded-full">Emerald</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-transparent hover:bg-red-600 border-red-600 text-red-600 hover:text-white rounded-full">Red</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-transparent hover:bg-yellow-500 border-yellow-500 text-yellow-500 hover:text-white rounded-full">Yellow</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-transparent hover:bg-blue-600 border-blue-600 text-blue-600 hover:text-white rounded-full">Blue</a>
                        <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-transparent hover:bg-sky-500 border-sky-500 text-sky-500 hover:text-white rounded-full">Sky</button>
                        <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-transparent hover:bg-cyan-500 border-cyan-500 text-cyan-500 hover:text-white rounded-full">Cyan</button>
                        <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-transparent hover:bg-orange-600 border-orange-600 text-orange-600 hover:text-white rounded-full">Orange</button>
                        <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-transparent hover:bg-purple-500 border-purple-500 text-purple-500 hover:text-white rounded-full">Purple</a>
                            <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-transparent hover:bg-default-800 border-default-800 text-default-800 hover:text-default-50 rounded-full">Dark</button>
                            <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-transparent hover:bg-default-500 border-default-500 text-default-500 hover:text-white rounded-full">Secondary</button>
                            <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-transparent hover:bg-default-100 border-default-100 hover:border-default-100 text-default-900 rounded-full">Light</button>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Soft Buttons</h5>
                    <p class="text-default-600 text-sm font-medium">Use the button classes on an <code class="text-primary">.bg-(color)/10 .border-(color)/10</code> element.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex flex-wrap items-center gap-2">
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-primary/10 hover:bg-primary border-primary/20 hover:border-primary text-primary hover:text-white rounded-md">Primary</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-emerald-600/10 hover:bg-emerald-600 border-emerald-600/20 hover:border-emerald-600 text-emerald-600 hover:text-white rounded-md">Emerald</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-red-600/10 hover:bg-red-600 border-red-600/20 hover:border-red-600 text-red-600 hover:text-white rounded-md">Red</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-yellow-500/10 hover:bg-yellow-500 border-yellow-500/20 hover:border-yellow-500 text-yellow-500 hover:text-white rounded-md">Yellow</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-blue-600/10 hover:bg-blue-600 border-blue-600/20 hover:border-blue-600 text-blue-600 hover:text-white rounded-md">Blue</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-sky-500/10 hover:bg-sky-500 border-sky-500/20 hover:border-sky-500 text-sky-500 hover:text-white rounded-md">Sky</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-cyan-500/10 hover:bg-cyan-500 border-cyan-500/20 hover:border-cyan-500 text-cyan-500 hover:text-white rounded-md">Cyan</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-orange-600/10 hover:bg-orange-600 border-orange-600/20 hover:border-orange-600 text-orange-600 hover:text-white rounded-md">Orange</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-primary/10 hover:bg-primary border-primary/20 hover:border-primary text-primary hover:text-white rounded-md">Purple</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-default-800/10 hover:bg-default-800 border-default-800/20 hover:border-default-800 text-default-800 hover:text-default-50 rounded-md">Dark</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-default-500/10 hover:bg-default-500 border-default-500/20 hover:border-default-500 text-default-500 hover:text-white rounded-md">Secondary</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-default-100/10 hover:bg-default-200 border-default-100 dark:border-default-100 hover:border-default-200 text-default-900 rounded-md">Light</button>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Soft Rounded Buttons</h5>
                    <p class="text-default-600 text-sm font-medium">Use the button classes on an <code class="text-primary">.bg-(color)/10 .border-(color)/10</code> element.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex flex-wrap items-center gap-2">
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-primary/10 hover:bg-primary border-primary/20 hover:border-primary text-primary hover:text-white rounded-full">Primary</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-emerald-600/10 hover:bg-emerald-600 border-emerald-600/20 hover:border-emerald-600 text-emerald-600 hover:text-white rounded-full">Emerald</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-red-600/10 hover:bg-red-600 border-red-600/20 hover:border-red-600 text-red-600 hover:text-white rounded-full">Red</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-yellow-500/10 hover:bg-yellow-500 border-yellow-500/20 hover:border-yellow-500 text-yellow-500 hover:text-white rounded-full">Yellow</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-blue-600/10 hover:bg-blue-600 border-blue-600/20 hover:border-blue-600 text-blue-600 hover:text-white rounded-full">Blue</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-sky-500/10 hover:bg-sky-500 border-sky-500/20 hover:border-sky-500 text-sky-500 hover:text-white rounded-full">Sky</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-cyan-500/10 hover:bg-cyan-500 border-cyan-500/20 hover:border-cyan-500 text-cyan-500 hover:text-white rounded-full">Cyan</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-orange-600/10 hover:bg-orange-600 border-orange-600/20 hover:border-orange-600 text-orange-600 hover:text-white rounded-full">Orange</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-primary/10 hover:bg-primary border-primary/20 hover:border-primary text-primary hover:text-white rounded-full">Purple</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-default-800/10 hover:bg-default-800 border-default-800/20 hover:border-default-800 text-default-800 hover:text-default-50 rounded-full">Dark</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-default-500/10 hover:bg-default-500 border-default-500/20 hover:border-default-500 text-default-500 hover:text-white rounded-full">Secondary</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-default-100/10 hover:bg-default-200 border-default-100 dark:border-default-100 hover:border-default-200 text-default-900 rounded-full">Light</button>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Button Size</h5>
                    <p class="text-default-600 text-sm font-medium">Use the button classes on an for small button<code class="text-primary"> .py-[5px] .px-4</code> for default button <code class="text-primary"> .py-2 .px-5</code> for large button <code class="text-primary"> .py-2.5 .px-8</code> element.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex flex-wrap items-center gap-2">
                    <button type="button" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md">Small</button>
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md">Default</button>
                    <button type="button" class="py-2.5 px-8 inline-block font-semibold tracking-wide border align-middle duration-500 text-lg text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md">Large</button>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Button Icons</h5>
                    <p class="text-default-600 text-sm font-medium">Use the button classes on an <code class="text-primary">.h-(height) .w-(width)</code> element.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex items-center flex-wrap gap-2">
                    <a href="#" class="h-10 w-10 inline-flex items-center justify-center bg-blue-500 text-white rounded-md transition-all duration-500 hover:bg-blue-600"><i data-lucide="facebook" class="h-5 w-5"></i></a>
                    <a href="#" class="h-10 w-10 inline-flex items-center justify-center bg-pink-500 text-white rounded-full transition-all duration-500 hover:bg-pink-600"><i data-lucide="instagram" class="h-5 w-5"></i></a>
                    <a href="#" class="h-10 w-10 inline-flex items-center justify-center border border-blue-700 text-blue-700 rounded-md transition-all duration-500 hover:bg-blue-700 hover:text-white"><i data-lucide="linkedin" class="h-5 w-5"></i></a>
                    <a href="#" class="h-10 w-10 inline-flex items-center justify-center border border-pink-500 text-pink-500 rounded-full transition-all duration-500 hover:bg-pink-500 hover:text-white"><i data-lucide="dribbble" class="h-5 w-5"></i></a>
                    <a href="#" class="h-10 w-10 inline-flex items-center justify-center border border-emerald-500/40 bg-emerald-500/10 text-emerald-500 rounded-md transition-all duration-500 hover:bg-emerald-600 hover:text-white"><i data-lucide="codesandbox" class="h-5 w-5"></i></a>
                    <a href="#" class="h-10 w-10 inline-flex items-center justify-center border border-gray-800/40 bg-gray-800/10 text-gray-800 rounded-full transition-all duration-500 hover:bg-gray-800 hover:text-white"><i data-lucide="github" class="h-5 w-5"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection