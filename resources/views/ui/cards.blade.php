@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Base UI', 'title' => 'Cards'])

    <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-6">

        <div class="">
            <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
                <img class="w-full h-auto rounded-t-md" src="/images/small/1.jpg" alt="Image Description">
                <div class="p-5">
                    <h3 class="text-lg font-semibold text-default-950 capitalize mb-1">Card title </h3><!-- end card title -->
                    <p class="mt-1 text-default-800 mb-4">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up</p>
                    <a class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md mt-2" href="#">
                        Button
                    </a><!-- Button End -->
                </div>
            </div><!-- Card End -->
        </div>

        <div class="">
            <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
                <img class="w-full h-auto rounded-t-md" src="/images/small/2.jpg" alt="Image Description">
                <div class="p-5">
                    <h3 class="text-lg font-semibold text-default-950 capitalize mb-1"> Card title</h3><!-- end card title -->
                    <p class="mt-1 text-default-800"> Some quick example text to build on the card..</p>
                    <p class="mt-5 py-5 text-xs text-default-500">Cras justo odio</p>
                    <div class="pt-6 flex gap-5">
                        <a href="javascript: void(0);" class="text-primary">Card link</a><!-- Button End -->
                        <a href="javascript: void(0);" class="text-primary">Another link</a><!-- Button End -->
                    </div>
                </div>
            </div><!-- Card End -->
        </div>

        <div class="">
            <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
                <img class="w-full h-auto rounded-t-md" src="/images/small/3.jpg" alt="Image Description">
                <div class="p-5">
                    <p class="mt-1 text-default-800 mb-4">Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up.</p>
                    <a class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md mt-2" href="#">Button</a><!-- Button End -->
                </div>
            </div><!-- Card End -->
        </div>

        <div class="">
            <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
                <div class="p-5">
                    <h3 class="text-lg font-semibold text-default-950 capitalize mb-1">Card title</h3><!-- end card title -->
                    <p class="mt-1 text-xs text-default-500">Support card subtitle</p>
                </div>
                <img class="w-full h-auto" src="/images/small/4.jpg" alt="Image Description">
                <div class="p-5"> Some quick example text to build on the card title and make up the bulk of the card's content.<p></p>
                    <div class="pt-6 flex gap-5">
                        <a href="javascript: void(0);" class="text-primary">Card link</a><!-- Button End -->
                        <a href="javascript: void(0);" class="text-primary">Another link</a><!-- Button End -->
                    </div>
                </div>
            </div><!-- Card End -->
        </div>
    </div>

    <div class="grid sm:grid-cols-2 gap-6">
        <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-default-950 capitalize mb-1"> Special title treatment</h3><!-- end card title -->
                <p class="mt-1 text-default-800 mb-4">With supporting text below as a natural lead-in to additional content. </p>
                <a class="py-2 px-5 block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md mt-2" href="#">Go somewhere</a><!-- Button End -->
            </div>
        </div><!-- Card End -->

        <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-default-950 capitalize mb-1">Special title treatment</h3><!-- end card title -->
                <p class="mt-1 text-default-800 mb-4">With supporting text below as a natural lead-in to additional content. </p>
                <a class="py-2 px-5 block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md mt-2" href="#">Go somewhere</a><!-- Button End -->
            </div>
        </div><!-- Card End -->
    </div>

    <div class="grid sm:grid-cols-3 gap-6">
        <div class="">
            <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-default-950 capitalize mb-1">
                        Featured
                    </h3><!-- end card title -->
                    <h5 class="text-sm font-medium pt-6">Special title treatment</h5>
                    <p class="mt-1 text-default-800 mb-4">
                        With supporting text below as a natural lead-in to additional content. </p>
                    <a class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md mt-2" href="#">
                        Go somewhere
                    </a><!-- Button End -->
                </div>
            </div><!-- Card End -->
        </div>

        <div class="">
            <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-default-950 capitalize mb-1">
                        Quote
                    </h3><!-- end card title -->
                    <p class="mt-1 text-default-800 mb-4">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. </p>
                    <footer class="pb-6">
                        Someone famous in
                        <cite title="Source Title">Source Title</cite>
                    </footer>
                </div>
            </div><!-- Card End -->
        </div>

        <div class="">
            <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
                <div class="p-6">
                    <h3 class="text-lg font-semibold text-default-950 capitalize mb-1">
                        Featured
                    </h3><!-- end card title -->
                    <a class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md mt-2" href="#">
                        Go somewhere
                    </a>
                </div>
                <hr class="border-default-200">
                <div class="p-6">
                    <p class="text-default-400">2 days ago</p>
                </div>
            </div><!-- Card End -->
        </div>
    </div>

    <div class="grid lg:grid-cols-3 sm:grid-cols-2 gap-6">
        <div class="bg-default-500 shadow rounded-lg overflow-hidden">
            <div class="p-6">
                <h3 class="text-base font-bold text-white">Special title treatment</h3><!-- end card title -->
                <p class="mt-2 text-white"> With supporting text below as a natural lead-in to additional content.</p>
                <a class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md mt-2" href="#">Button</a><!-- Button End -->
            </div>
        </div><!-- Card End -->

        <div class="bg-primary shadow rounded-lg overflow-hidden">
            <div class="p-6">
                <p class="mt-1 text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. </p>
                <footer class="pb-4 text-white">
                    Someone famous in
                    <cite title="Source Title">Source Title</cite>
                </footer><!-- footer End -->
            </div>
        </div><!-- Card End -->

        <div class="bg-blue-500 shadow rounded-lg overflow-hidden">
            <div class="p-6">
                <p class="mt-1 text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. </p>
                <footer class="pb-4 text-white">
                    Someone famous in
                    <cite title="Source Title">Source Title</cite>
                </footer><!-- footer End -->
            </div>
        </div><!-- Card End -->

        <div class="bg-cyan-500 shadow rounded-lg overflow-hidden">
            <div class="p-6">
                <p class="mt-1 text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. </p>
                <footer class="pb-4 text-white">
                    Someone famous in
                    <cite title="Source Title">Source Title</cite>
                </footer><!-- footer End -->
            </div>
        </div><!-- Card End -->

        <div class="bg-amber-500 shadow rounded-lg overflow-hidden">
            <div class="p-6">
                <p class="mt-1 text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. </p>
                <footer class="pb-4 text-white">
                    Someone famous in
                    <cite title="Source Title">Source Title</cite>
                </footer><!-- footer End -->
            </div>
        </div><!-- Card End -->

        <div class="bg-red-500 shadow rounded-lg overflow-hidden">
            <div class="p-6">
                <p class="mt-1 text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. </p>
                <footer class="pb-4 text-white">
                    Someone famous in
                    <cite title="Source Title">Source Title</cite>
                </footer><!-- footer End -->
            </div>
        </div><!-- Card End -->
    </div>

    <div class="grid sm:grid-cols-3 gap-6">
        <div class="rounded-lg border border-default-500 bg-white dark:bg-default-50 overflow-hidden">
            <div class="p-6">
                <h3 class="text-base font-bold text-gray-500 mb-2">Special title treatment</h3><!-- end card title -->
                <p class="mt-1 text-default-800 mb-3">With supporting text below as a natural lead-in to additional content.</p>
                <a class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-default-500 hover:bg-default-600 border-default-500 hover:border-default-600 text-white rounded-md mt-2" href="#">Button</a><!-- Button End -->
            </div>
        </div><!-- Card End -->

        <div class="rounded-lg border border-primary bg-white dark:bg-default-50 overflow-hidden">
            <div class="p-6">
                <h3 class="text-base font-bold text-primary mb-2">Special title treatment</h3><!-- end card title -->
                <p class="mt-1 text-default-800 mb-3">With supporting text below as a natural lead-in to additional content.</p>
                <a class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md mt-2" href="#">Button</a><!-- Button End -->
            </div>
        </div><!-- Card End -->

        <div class="rounded-lg border border-blue-500 bg-white dark:bg-default-50 overflow-hidden">
            <div class="p-6">
                <h3 class="text-base font-bold text-blue-500 mb-2">Special title treatment</h3><!-- end card title -->
                <p class="mt-1 text-default-800 mb-3">With supporting text below as a natural lead-in to additional content.</p>
                <a class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-blue-500 hover:bg-blue-600 border-blue-500 hover:border-blue-600 text-white rounded-md mt-2" href="#">Button</a><!-- Button End -->
            </div>
        </div><!-- Card End -->
    </div>

    <div class="grid lg:grid-cols-2 gap-6">
        <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
            <div class="grid sm:grid-cols-3">
                <img src="/images/small/1.jpg" class="rounded-s-md my-auto" alt="">
                <div class="p-6 sm:col-span-2">
                    <h3 class="text-lg font-semibold text-default-950 capitalize mb-4">Card title</h3><!-- end card title -->
                    <p class="mt-1 text-default-800">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="mt-5"><small>Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div><!-- Card End -->

        <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
            <div class="grid sm:grid-cols-3">
                <div class="p-6 sm:col-span-2">
                    <h3 class="text-lg font-semibold text-default-950 capitalize mb-4">Card title</h3><!-- end card title -->
                    <p class="mt-1 text-default-800">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="mt-5"><small>Last updated 3 mins ago</small></p>
                </div>
                <img src="/images/small/2.jpg" class="rounded-e-md my-auto" alt="">
            </div>
        </div><!-- Card End -->
    </div>

    <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-6">
        <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden relative">
            <img class="w-full h-auto rounded-t-md" src="/images/small/2.jpg" alt="Image Description">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-default-950 capitalize mb-3">Card with stretched link</h3><!-- end card title -->
                <a class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-primary hover:bg-primary-600 border-primary hover:border-primary-600 text-white rounded-md mt-2 after:absolute after:inset-0" href="#">Go somewhere</a><!-- Button End -->
            </div>
        </div><!-- Card End -->

        <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden relative">
            <img class="w-full h-auto rounded-t-md" src="/images/small/3.jpg" alt="Image Description">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-default-950 capitalize mb-3">
                    <a href="#" class="after:absolute after:inset-0 text-success">Card with stretched link</a>
                </h3><!-- end card title -->
                <p class="mt-1 text-default-800">Some quick example text to build on the card up the bulk of the card's content.</p>
            </div>
        </div><!-- Card End -->

        <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden relative">
            <img class="w-full h-auto rounded-t-md" src="/images/small/4.jpg" alt="Image Description">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-default-950 capitalize mb-3">Card with stretched link</h3><!-- end card title -->
                <a class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-base text-center bg-cyan-500 hover:bg-cyan-600 border-cyan-500 hover:border-cyan-600 text-white rounded-md mt-2 after:absolute after:inset-0" href="#">Go somewhere</a><!-- Button End -->
            </div>
        </div><!-- Card End -->

        <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden relative">
            <img class="w-full h-auto rounded-t-md" src="/images/small/1.jpg" alt="Image Description">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-default-950 capitalize mb-3">
                    <a href="#" class="after:absolute after:inset-0 text-primary">Card with stretched link</a>
                </h3><!-- end card title -->
                <p class="mt-1 text-default-800">Some quick example text to build on the card up the bulk of the card's content.</p>
            </div>
        </div><!-- Card End -->
    </div>

    <div class="grid sm:grid-cols-3 gap-6 sm:gap-0">
        <div class="-me-2 border border-default-200 bg-white dark:bg-default-50 overflow-hidden relative sm:rounded-none sm:rounded-s-lg h-full">
            <img class="w-full h-auto sm:rounded-tl-md sm:rounded-none rounded-t-md" src="/images/small/1.jpg" alt="Image Description">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-default-950 capitalize mb-4">Card title</h3><!-- end card title -->
                <p class="mt-1 text-default-800">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="mt-5 pb-5"><small>Last updated 3 mins ago</small></p>
            </div>
        </div><!-- Card End -->

        <div class="-me-2 border border-default-200 bg-white dark:bg-default-50 overflow-hidden relative sm:rounded-none h-full">
            <img class="w-full h-auto sm:rounded-none rounded-md" src="/images/small/2.jpg" alt="Image Description">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-default-950 capitalize mb-4">Card title</h3><!-- end card title -->
                <p class="mt-1 text-default-800">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="mt-5 pb-5"><small>Last updated 3 mins ago</small></p>
            </div>
        </div><!-- Card End -->

        <div class="-me-2 border border-default-200 bg-white dark:bg-default-50 overflow-hidden relative sm:rounded-none sm:rounded-e-lg h-full">
            <img class="w-full h-auto sm:rounded-tr-md sm:rounded-none rounded-t-md" src="/images/small/3.jpg" alt="Image Description">
            <div class="p-6">
                <h3 class="text-lg font-semibold text-default-950 capitalize mb-4">Card title</h3><!-- end card title -->
                <p class="mt-1 text-default-800">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="mt-5"><small>Last updated 3 mins ago</small></p>
            </div>
        </div><!-- Card End -->
    </div>
</div>

@endsection