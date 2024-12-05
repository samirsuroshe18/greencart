@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Blog', 'title' => 'Blog Detail'])

    <div class="md:container space-y-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit overflow-hidden">
            <div class="px-4 py-2 border-b border-dashed border-default-200">
                <div class="flex flex-wrap items-center justify-between gap-3">
                    <div class="relative flex flex-wrap items-center gap-y-3 gap-x-4 m-1">
                        <div class="h-12 w-12 rounded-md">
                            <img src="/images/avatars/2.png" alt="Blog Author" class="rounded-md">
                        </div>
                        <div class="">
                            <span class="block text-base font-semibold text-default-900">Charli Day</span>
                            <a class="text-xs text-primary" href="#">Development</a>
                        </div>
                        <span class="text-sm block"> 01 July 2020 - 12:48</span>
                    </div>
                    <div class="">
                        <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-primary/20 text-primary">E-World</span>
                        <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-primary/20 text-primary">IT Sector</span>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="grid md:grid-cols-5 gap-6">
                    <div class="md:col-span-2 ">
                        <img src="/images/small/small-1.png" alt="Blog" class="w-full h-full rounded-md">
                    </div>
                    <div class="bg-slate-400 rounded-md hidden md:block">
                        <img src="/images/small/small-3.png" alt="Blog" class="w-full h-full rounded-md">
                    </div>
                    <div class="md:col-span-2 hidden md:block">
                        <img src="/images/small/small-2.png" alt="Blog" class="w-full h-full rounded-md">
                    </div>
                </div>
            </div>
            <div class="p-5 border-y border-dashed border-default-200">
                <div class="flex flex-wrap items-center justify-between gap-4">
                    <div class="flex items-center gap-2">
                        <button type="button" class="py-2 px-4 inline-flex items-center gap-2 justify-center text-xs font-medium rounded bg-primary-500 text-white transition-all duration-300 hover:bg-primary-600">
                            <i class="ti ti-thumb-up-filled text-lg/none"></i>
                            <span class="hidden sm:block">Like</span>
                        </button>
                        <button type="button" class="py-2 px-4 inline-flex items-center gap-2 justify-center font-medium text-xs bg-teal-500/20 text-teal-500 rounded group transition-all duration-300 hover:bg-teal-500 hover:text-white">
                            <i class="ti ti-message-2 text-lg/none"></i>
                            <span class="hidden sm:block">Comments</span>
                        </button>
                        <button type="button" class="py-2 px-4 inline-flex items-center gap-2 justify-center font-medium text-xs bg-cyan-500/20 text-cyan-500 rounded group transition-all duration-300 hover:bg-cyan-500 hover:text-white">
                            <i class="ti ti-share-3 text-lg/none"></i>
                            <span class="hidden sm:block">Share</span>
                        </button>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-xs sm:text-sm text-default-600">32 Likes</span>
                        <span class="h-1 w-1 rounded-full bg-default-400"></span>
                        <span class="text-xs sm:text-sm text-default-600">10 Comments</span>
                        <span class="h-1 w-1 rounded-full bg-default-400"></span>
                        <span class="text-xs sm:text-sm text-default-600">4 Share</span>
                    </div>
                </div>
            </div>
            <div class="p-5 border-b border-dashed border-default-200">
                <div class="flex items-center gap-6">
                    <span class="inline-flex gap-2"><i class="ph-fill ti-heart text-base text-red-500"></i> 32 Likes</span>
                    <div class="flex -space-x-1.5 relative">
                        <div class="h-10 w-10 group hs-tooltip ring-2 ring-default-50 rounded-full">
                            <img class="hs-tooltip-toggle inline-block h-full w-full rounded-full hover:-translate-y-0.5 transition-all duration-200" src="/images/avatars/4.png" alt="avatar">
                            <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 pb-2" role="tooltip">
                                <span class="py-2 px-2 bg-default-900 text-xs font-medium text-default-100 rounded relative after:absolute after:top-full after:-translate-y-1/2 after:start-1/2 after:rotate-45 after:-translate-x-1/2 after:bg-default-900 after:h-2 after:w-2">Mat Helme </span>
                            </span>
                        </div>
                        <div class="h-10 w-10 group hs-tooltip ring-2 ring-default-50 rounded-full">
                            <img class="hs-tooltip-toggle inline-block h-full w-full rounded-full hover:-translate-y-0.5 transition-all duration-200" src="/images/avatars/1.png" alt="avatar">
                            <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 pb-2" role="tooltip">
                                <span class="py-2 px-2 bg-default-900 text-xs font-medium text-default-100 rounded relative after:absolute after:top-full after:-translate-y-1/2 after:start-1/2 after:rotate-45 after:-translate-x-1/2 after:bg-default-900 after:h-2 after:w-2">Michael Zenaty </span>
                            </span>
                        </div>
                        <div class="h-10 w-10 group hs-tooltip ring-2 ring-default-50 rounded-full">
                            <img class="hs-tooltip-toggle inline-block h-full w-full rounded-full hover:-translate-y-0.5 transition-all duration-200" src="/images/avatars/6.png" alt="avatar">
                            <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 pb-2" role="tooltip">
                                <span class="py-2 px-2 bg-default-900 text-xs font-medium text-default-100 rounded relative after:absolute after:top-full after:-translate-y-1/2 after:start-1/2 after:rotate-45 after:-translate-x-1/2 after:bg-default-900 after:h-2 after:w-2">James Anderson </span>
                            </span>
                        </div>
                        <div class="h-10 w-10 group hs-tooltip ring-2 ring-default-50 rounded-full">
                            <div class="hs-tooltip-toggle flex items-center justify-center h-full max-w-full rounded-full bg-default-200">
                                <span class="font-medium text-default-600">29+</span>
                            </div>
                            <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 pb-2" role="tooltip">
                                <span class="py-2 px-2 bg-default-900 text-xs font-medium text-default-100 rounded relative after:absolute after:top-full after:-translate-y-1/2 after:start-1/2 after:rotate-45 after:-translate-x-1/2 after:bg-default-900 after:h-2 after:w-2">View More </span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div>
                    <h1 class="text-default-900 text-2xl font-semibold mb-2">Grapes Galore: Nature's Sweetest Jewels!</h1>
                    <p class="text-sm text-default-600 mb-2">Dive into a world of sweetness with our Grapes Galore - where nature's sweetest jewels await, delivering a burst of flavor in every bite. Indulge in the pure delight of these succulent gems, a wholesome treat straight from the vine to your palate.</p>
                    <p class="text-sm text-default-600 mb-2">Satisfy your cravings with Grapes Galore – a symphony of flavors that captures the essence of sun-kissed vineyards. Experience the joy of wholesome snacking, where each grape is a tiny, juicy celebration of nature's sweetness.From vibrant green to deep purple, our grapes are a colorful palette of taste and nutrition. With Grapes Galore, relish the simplicity of nature's sweetest jewels and embark on a journey of health and flavor, one delicious grape at a time.</p>
                    <p class="text-sm text-default-600 mb-4">Handpicked for perfection, our grapes are a celebration of vine-ripened goodness. Whether enjoyed as a snack, added to salads, or shared among friends, Grapes Galore promises a symphony of taste and a touch of natural sweetness that elevates any moment. Taste the essence of freshness and health in every juicy grape – a delectable indulgence for a vibrant life!</p>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit overflow-hidden">
            <div class="flex items-center justify-between py-4 px-5">
                <h4 class="text-lg font-medium text-default-950 capitalize"> Leave a Comment </h4>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <form action="">
                    <div class="mb-4 space-y-2">
                        <label for="blog-comment" class="text-sm font-medium cursor-pointer text-default-800 inline-block">Write Comment</label>
                        <textarea class="font-normal rounded-md block w-full border-default-200 text-sm focus:border-default-200 focus:ring-0 bg-transparent text-default-800 placeholder:text-default-600" id="blog-comment" rows="5"></textarea>
                    </div>
                </form>

                <div class="flex flex-wrap justify-between gap-2 mb-6">
                    <div class="flex items-center gap-2">
                        <button type="button" class="h-8 w-8 inline-flex items-center justify-center rounded-md bg-primary-500/20 text-primary hover:bg-primary-500 hover:text-white tramsition-all duration-500 group"><i class="ti ti-photo text-lg"></i></button>
                        <button type="button" class="h-8 w-8 inline-flex items-center justify-center rounded-md bg-teal-500/20 text-teal-500 hover:bg-teal-500 hover:text-white tramsition-all duration-500 group"><i class="ti ti-link text-lg"></i></button>
                        <button type="button" class="h-8 w-8 inline-flex items-center justify-center rounded-md bg-cyan-500/20 text-cyan-500 hover:bg-cyan-500 hover:text-white tramsition-all duration-500 group"><i class="ti ti-circle-half text-lg"></i></button>
                    </div>
                    <button type="button" class="py-2 px-4 inline-flex items-center justify-center gap-2 text-sm font-medium rounded-full bg-primary/20 text-primary transition-all duration-500 hover:bg-primary hover:text-white group"><i class="ti ti-brand-wechat text-lg"></i> Post a Comment</button>
                </div>

                <div class="space-y-4">
                    <div class="flex flex-wrap md:flex-nowrap items-start gap-3">
                        <div class="h-10 w-10 rounded-full">
                            <img alt="Charlotte Beam" src="/images/avatars/3.png" class="max-w-full h-full rounded-full">
                        </div>
                        <div class="flex items-start w-full bg-default-100 p-3 rounded-md">
                            <div class="">
                                <h6 class="text-base/none font-medium text-default-900 mb-1">Charlotte Beam</h6>
                                <p class="text-sm text-default-600 mb-2">31 Oct 2022</p>
                                <p class="text-sm text-default-600">Teams consist of 15 players on each side, divided into forwards and backs.</p>
                            </div>
                            <button class="py-1.5 px-4 inline-flex items-center justify-center gap-2 text-xs font-medium ms-auto rounded-full bg-primary-500 text-white transition-all duration-200 hover:bg-primary-600" tabindex="0" type="button">
                                <i class="ti ti-edit-circle text-sm/none"></i>
                                Reply
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-wrap md:flex-nowrap items-start gap-3">
                        <div class="h-10 w-10 rounded-full">
                            <img alt="Charlotte Beam" src="/images/avatars/6.png" class="max-w-full h-full rounded-full">
                        </div>
                        <div class="flex items-start w-full bg-default-100 p-3 rounded-md">
                            <div class="">
                                <h6 class="text-base/none font-medium text-default-900 mb-1">Omar Thompson</h6>
                                <p class="text-sm text-default-600 mb-2">1 Nov 2022</p>
                                <p class="text-sm text-default-600">The primary objective is to carry the ball over the opponent's goal line and touch it down for a try, worth 5 points.</p>
                            </div>
                            <button class="py-1.5 px-4 inline-flex items-center justify-center gap-2 text-xs font-medium ms-auto rounded-full bg-primary-500 text-white transition-all duration-200 hover:bg-primary-600" tabindex="0" type="button">
                                <i class="ti ti-edit-circle text-sm/none"></i>
                                Reply
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-wrap md:flex-nowrap items-start gap-3">
                        <div class="h-10 w-10 rounded-full">
                            <img alt="Charlotte Beam" src="/images/avatars/7.png" class="max-w-full h-full rounded-full">
                        </div>
                        <div class="flex items-start w-full bg-default-100 p-3 rounded-md">
                            <div class="">
                                <h6 class="text-base/none font-medium text-default-900 mb-1">Kathleen Russo</h6>
                                <p class="text-sm text-default-600 mb-2">4 Nov 2022</p>
                                <p class="text-sm text-default-600">Teams can also score points through penalty kicks (3 points) and conversions (2 points).</p>
                            </div>
                            <button class="py-1.5 px-4 inline-flex items-center justify-center gap-2 text-xs font-medium ms-auto rounded-full bg-primary-500 text-white transition-all duration-200 hover:bg-primary-600" tabindex="0" type="button">
                                <i class="ti ti-edit-circle text-sm/none"></i>
                                Reply
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
