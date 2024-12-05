@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Base UI', 'title' => 'Avatars'])

    <div class="grid lg:grid-cols-2 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Sizing - Images</h5>
                    <p class="text-default-600 text-sm font-medium">Adjust the w-{size} and h-{size} classes according to your desired dimensions.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex flex-wrap items-end gap-2">
                    <img src="/images/avatars/1.png" alt="image" class="h-6 w-6 rounded">
                    <img src="/images/avatars/2.png" alt="image" class="h-12 w-12 rounded">
                    <img src="/images/avatars/3.png" alt="image" class="h-16 w-16 rounded">
                    <img src="/images/avatars/4.png" alt="image" class="h-24 w-24 rounded">
                    <img src="/images/avatars/5.png" alt="image" class="h-32 w-32 rounded">
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Rounded Circle</h5>
                    <p class="text-default-600 text-sm font-medium">Use utility class <code class="text-primary">.rounded-full</code>.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex flex-wrap items-end gap-2">
                    <img src="/images/avatars/6.png" alt="image" class="h-6 w-6 rounded-full">
                    <img src="/images/avatars/7.png" alt="image" class="h-12 w-12 rounded-full">
                    <img src="/images/avatars/8.png" alt="image" class="h-16 w-16 rounded-full">
                    <img src="/images/avatars/9.png" alt="image" class="h-24 w-24 rounded-full">
                    <img src="/images/avatars/10.png" alt="image" class="h-32 w-32 rounded-full">
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Sizing - Background Color</h5>
                    <p class="text-default-600 text-sm font-medium">you can use utility classes like <code class="text-primary">.bg-{color}</code> for the background color and <code class="text-primary">.text-{color}</code> for the text color.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex flex-wrap items-end gap-2">
                    <div class="w-8 h-8 justify-center items-center flex bg-primary/20 text-primary rounded-md"><span class="">CT</span></div>
                    <div class="w-12 h-12 justify-center items-center flex bg-teal-500/20 text-teal-500 rounded-md"><span class="text-lg">CT</span></div>
                    <div class="w-16 h-16 justify-center items-center flex bg-cyan-500/20 text-cyan-500 rounded-md"><span class="text-xl">CT</span></div>
                    <div class="w-24 h-24 justify-center items-center flex bg-red-500/20 text-red-500 rounded-md"><span class="text-2xl">CT</span></div>
                    <div class="w-32 h-32 justify-center items-center flex bg-yellow-500/20 text-yellow-500 rounded-md"><span class="text-4xl">CT</span></div>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Rounded Circle Background</h5>
                    <p class="text-default-600 text-sm font-medium">you can use utility classes like <code class="text-primary">.rounded-full</code>.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex flex-wrap items-end gap-2">
                    <div class="w-8 h-8 justify-center items-center flex bg-primary/20 text-primary rounded-md"><span class="">CT</span></div>
                    <div class="w-12 h-12 justify-center items-center flex bg-teal-500/20 text-teal-500 rounded-md"><span class="text-lg">CT</span></div>
                    <div class="w-16 h-16 justify-center items-center flex bg-cyan-500/20 text-cyan-500 rounded-md"><span class="text-xl">CT</span></div>
                    <div class="w-24 h-24 justify-center items-center flex bg-red-500/20 text-red-500 rounded-md"><span class="text-2xl">CT</span></div>
                    <div class="w-32 h-32 justify-center items-center flex bg-yellow-500/20 text-yellow-500 rounded-md"><span class="text-4xl">CT</span></div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-2">
            <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
                <div class="flex items-center justify-between py-4 px-5">
                    <div class="">
                        <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Images Shapes</h5>
                        <p class="text-default-600 text-sm font-medium">Avatars with different sizes and shapes.</p>
                    </div>
                </div>
                <div class="p-5 border-t border-dashed border-default-200">
                    <div class="flex flex-wrap gap-3">
                        <div class="lg:w-1/6 md:1/3 px-3">
                            <img src="/images/small/1.jpg" alt="" class="w-52 rounded">
                            <p class="text-info mt-2"><code>.rounded</code></p>
                        </div>
                        <div class="lg:w-1/6 md:1/3 px-3">
                            <img src="/images/avatars/7.png" alt="" class="w-32 rounded mx-auto">
                            <p class="text-info mt-2 text-center"><code>.rounded</code></p>
                        </div>
                        <div class="lg:w-1/6 md:1/3 px-3">
                            <img src="/images/avatars/2.png" alt="" class="w-32 rounded-full mx-auto">
                            <p class="text-info mt-2 text-center"><code>.rounded-full</code></p>
                        </div>
                        <div class="lg:w-1/6 md:1/3 px-3">
                            <img src="/images/small/2.jpg" alt="" class="w-52 p-1 border border-default-200 rounded bg-default-100">
                            <p class="text-info mt-2"><code>.rounded .border</code></p>
                        </div>
                        <div class="lg:w-1/6 md:1/3 px-3">
                            <img src="/images/avatars/3.png" alt="" class="w-32 rounded-full p-1 border border-default-200 bg-default-100">
                            <p class="text-info mt-2 text-start"><code>.rounded-full .border</code></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Social Media Avatar</h5>
                    <p class="text-default-600 text-sm font-medium">Social media profile avatar.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex items-center">
                    <img class="inline-block flex-shrink-0 h-16 w-16 rounded-full" src="/images/avatars/1.png" alt="Image Description">
                    <div class="ms-3">
                        <h3 class="font-semibold text-default-900">Lettie Wanner</h3>
                        <p class="text-sm font-medium text-default-400">lettie@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Rounded avatars with bottom status</h5>
                    <p class="text-default-600 text-sm font-medium">Round avatars with bottom status indicator.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex flex-wrap items-end gap-2">
                    <div class="relative inline-block">
                        <img class="inline-block h-8 w-8 rounded-md ring-2 ring-default-900/20" src="/images/avatars/1.png" alt="Image Description">
                        <span class="absolute bottom-0 end-0 block h-1.5 w-1.5 rounded-full transform translate-y-1/2 translate-x-1/2 ring-2 ring-white dark:ring-default-50 bg-default-400"></span>
                    </div>
                    <div class="relative inline-block">
                        <img class="inline-block h-9 w-9 rounded-md ring-2 ring-default-900/20" src="/images/avatars/8.png" alt="Image Description">
                        <span class="absolute bottom-0 end-0 block h-2.5 w-2.5 rounded-full transform translate-y-1/2 translate-x-1/2 ring-2 ring-white dark:ring-default-50 bg-red-400"></span>
                    </div>
                    <div class="relative inline-block">
                        <img class="inline-block h-12 w-12 rounded-md ring-2 ring-default-900/20" src="/images/avatars/3.png" alt="Image Description">
                        <span class="absolute bottom-0 end-0 block h-3 w-3 rounded-full transform translate-y-1/2 translate-x-1/2 ring-2 ring-white dark:ring-default-50 bg-green-400"></span>
                    </div>
                    <div class="relative inline-block">
                        <img class="inline-block h-16 w-16 rounded-md ring-2 ring-default-900/20" src="/images/avatars/7.png" alt="Image Description">
                        <span class="absolute bottom-0 end-0 block h-3.5 w-3.5 rounded-full transform translate-y-1/2 translate-x-1/2 ring-2 ring-white dark:ring-default-50 bg-orange-400"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection