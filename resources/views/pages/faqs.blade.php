@extends('layouts.base')

@section('content')

@include('layouts.shared/navbar')

@include('layouts.shared/mobile-nav')

@include('layouts.shared/page-title' ,['subtitle' => 'Pages', 'title' => 'FAQs'])

<section class="lg:py-10 py-3">
    <div class="container">

        <h1 class="text-4xl font-medium text-default-800 mb-6">You Must Have Questions, Right?</h1>

        <div class="grid lg:grid-cols-2 gap-10">
            <div>
                <div class="hs-accordion-group space-y-4">
                    <div class="hs-accordion hs-accordion-active:border-primary border border-default-100 rounded-lg overflow-hidden active" id="faq-1">
                        <button class="hs-accordion-active:bg-primary hs-accordion-active:text-white hs-accordion-toggle bg-default-100 capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-default-950 transition-all" aria-controls="faq-accordion-1">
                            <h5 class="text-base font-semibold">
                                How to contact with Customer Service?
                            </h5>
                            <div class="hs-accrdion-active:text-white inline-flex items-center justify-center rounded-full">
                                <i class="ti ti-plus block hs-accordion-active:hidden"></i>
                                <i class="ti ti-minus hidden hs-accordion-active:block"></i>
                            </div>
                        </button>
                        <div id="faq-accordion-1" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="faq-1">
                            <div class="px-6 py-4">
                                <p class="text-default-600 text-sm/relaxed font-inter font-medium mb-2">
                                    Our Customer Experience Team is available 7 days a week,
                                    and we offer 2 ways to get in contact.Email and Chat.
                                    We try to reply quickly, so you need not wait too long for a response!.
                                    Our Customer Experience Team is available 7 days a week,
                                    and we offer 2 ways to get in contact.Email and Chat.
                                    We try to reply quickly.
                                </p>
                            </div>
                        </div>
                    </div><!-- end accordion-item -->

                    <div class="hs-accordion hs-accordion-active:border-primary border border-default-100 rounded-lg overflow-hidden" id="faq-2">
                        <button class="hs-accordion-active:bg-primary hs-accordion-active:text-white hs-accordion-toggle bg-default-100 capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-default-950 transition-all" aria-controls="faq-2">
                            <h5 class="text-base font-semibold">
                                Website response taking time, how to improve?
                            </h5>
                            <div class="hs-accrdion-active:text-white inline-flex items-center justify-center rounded-full">
                                <i class="ti ti-plus block hs-accordion-active:hidden"></i>
                                <i class="ti ti-minus hidden hs-accordion-active:block"></i>
                            </div>
                        </button>
                        <div id="faq-2" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="faq-2">
                            <div class="px-6 py-4">
                                <p class="text-default-600 text-sm/relaxed font-inter font-medium mb-2">
                                    Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.
                                </p>
                                <p class="text-default-600 text-sm/relaxed font-inter font-medium">
                                    Duis leo. Sed fringilla mauris sit amet nibh.
                                </p>
                            </div>
                        </div>
                    </div><!-- end accordion-item -->

                    <div class="hs-accordion hs-accordion-active:border-primary border border-default-100 rounded-lg overflow-hidden" id="faq-3">
                        <button class="hs-accordion-active:bg-primary hs-accordion-active:text-white hs-accordion-toggle bg-default-100 capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-default-950 transition-all" aria-controls="faq-3">
                            <h5 class="text-base font-semibold">
                                In elementum est a ante sodales iaculis.
                            </h5>
                            <div class="hs-accrdion-active:text-white inline-flex items-center justify-center rounded-full">
                                <i class="ti ti-plus block hs-accordion-active:hidden"></i>
                                <i class="ti ti-minus hidden hs-accordion-active:block"></i>
                            </div>
                        </button>
                        <div id="faq-3" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="faq-3">
                            <div class="px-6 py-4">
                                <p class="text-default-600 text-sm/relaxed font-inter font-medium mb-2">
                                    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                </p>
                                <p class="text-default-600 text-sm/relaxed font-inter font-medium">
                                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                                </p>
                            </div>
                        </div>
                    </div><!-- end accordion-item -->

                    <div class="hs-accordion hs-accordion-active:border-primary border border-default-100 rounded-lg overflow-hidden" id="faq-4">
                        <button class="hs-accordion-active:bg-primary hs-accordion-active:text-white hs-accordion-toggle bg-default-100 capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-default-950 transition-all" aria-controls="faq-4">
                            <h5 class="text-base font-semibold">
                                How do I Track My Order?
                            </h5>
                            <div class="hs-accrdion-active:text-white inline-flex items-center justify-center rounded-full">
                                <i class="ti ti-plus block hs-accordion-active:hidden"></i>
                                <i class="ti ti-minus hidden hs-accordion-active:block"></i>
                            </div>
                        </button>
                        <div id="faq-4" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="faq-4">
                            <div class="px-6 py-4">
                                <p class="text-default-600 text-sm/relaxed font-inter font-medium mb-2">
                                    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                </p>
                                <p class="text-default-600 text-sm/relaxed font-inter font-medium">
                                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                                </p>
                            </div>
                        </div>
                    </div><!-- end accordion-item -->

                    <div class="hs-accordion hs-accordion-active:border-primary border border-default-100 rounded-lg overflow-hidden" id="faq-5">
                        <button class="hs-accordion-active:bg-primary hs-accordion-active:text-white hs-accordion-toggle bg-default-100 capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-default-950 transition-all" aria-controls="faq-5">
                            <h5 class="text-base font-semibold">
                                App installation failed, how to update system information?
                            </h5>
                            <div class="hs-accrdion-active:text-white inline-flex items-center justify-center rounded-full">
                                <i class="ti ti-plus block hs-accordion-active:hidden"></i>
                                <i class="ti ti-minus hidden hs-accordion-active:block"></i>
                            </div>
                        </button>
                        <div id="faq-5" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="faq-5">
                            <div class="px-6 py-4">
                                <p class="text-default-600 text-sm/relaxed font-inter font-medium mb-2">
                                    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                </p>
                                <p class="text-default-600 text-sm/relaxed font-inter font-medium">
                                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                                </p>
                            </div>
                        </div>
                    </div><!-- end accordion-item -->
                </div>
            </div>

            <div>
                <div class="hs-accordion-group space-y-4">
                    <div class="hs-accordion hs-accordion-active:border-primary border border-default-100 rounded-lg overflow-hidden active" id="faq-1">
                        <button class="hs-accordion-active:bg-primary hs-accordion-active:text-white hs-accordion-toggle bg-default-100 capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-default-950 transition-all" aria-controls="faq-accordion-1">
                            <h5 class="text-base font-semibold">
                                How to contact with Customer Service?
                            </h5>
                            <div class="hs-accrdion-active:text-white inline-flex items-center justify-center rounded-full">
                                <i class="ti ti-plus block hs-accordion-active:hidden"></i>
                                <i class="ti ti-minus hidden hs-accordion-active:block"></i>
                            </div>
                        </button>
                        <div id="faq-accordion-1" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="faq-1">
                            <div class="px-6 py-4">
                                <p class="text-default-600 text-sm/relaxed font-inter font-medium mb-2">
                                    Our Customer Experience Team is available 7 days a week,
                                    and we offer 2 ways to get in contact.Email and Chat.
                                    We try to reply quickly, so you need not wait too long for a response!.
                                    Our Customer Experience Team is available 7 days a week,
                                    and we offer 2 ways to get in contact.Email and Chat.
                                    We try to reply quickly.
                                </p>
                            </div>
                        </div>
                    </div><!-- end accordion-item -->

                    <div class="hs-accordion hs-accordion-active:border-primary border border-default-100 rounded-lg overflow-hidden" id="faq-2">
                        <button class="hs-accordion-active:bg-primary hs-accordion-active:text-white hs-accordion-toggle bg-default-100 capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-default-950 transition-all" aria-controls="faq-2">
                            <h5 class="text-base font-semibold">
                                Website response taking time, how to improve?
                            </h5>
                            <div class="hs-accrdion-active:text-white inline-flex items-center justify-center rounded-full">
                                <i class="ti ti-plus block hs-accordion-active:hidden"></i>
                                <i class="ti ti-minus hidden hs-accordion-active:block"></i>
                            </div>
                        </button>
                        <div id="faq-2" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="faq-2">
                            <div class="px-6 py-4">
                                <p class="text-default-600 text-sm/relaxed font-inter font-medium mb-2">
                                    Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet.
                                </p>
                                <p class="text-default-600 text-sm/relaxed font-inter font-medium">
                                    Duis leo. Sed fringilla mauris sit amet nibh.
                                </p>
                            </div>
                        </div>
                    </div><!-- end accordion-item -->

                    <div class="hs-accordion hs-accordion-active:border-primary border border-default-100 rounded-lg overflow-hidden" id="faq-3">
                        <button class="hs-accordion-active:bg-primary hs-accordion-active:text-white hs-accordion-toggle bg-default-100 capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-default-950 transition-all" aria-controls="faq-3">
                            <h5 class="text-base font-semibold">
                                In elementum est a ante sodales iaculis.
                            </h5>
                            <div class="hs-accrdion-active:text-white inline-flex items-center justify-center rounded-full">
                                <i class="ti ti-plus block hs-accordion-active:hidden"></i>
                                <i class="ti ti-minus hidden hs-accordion-active:block"></i>
                            </div>
                        </button>
                        <div id="faq-3" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="faq-3">
                            <div class="px-6 py-4">
                                <p class="text-default-600 text-sm/relaxed font-inter font-medium mb-2">
                                    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                </p>
                                <p class="text-default-600 text-sm/relaxed font-inter font-medium">
                                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                                </p>
                            </div>
                        </div>
                    </div><!-- end accordion-item -->

                    <div class="hs-accordion hs-accordion-active:border-primary border border-default-100 rounded-lg overflow-hidden" id="faq-4">
                        <button class="hs-accordion-active:bg-primary hs-accordion-active:text-white hs-accordion-toggle bg-default-100 capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-default-950 transition-all" aria-controls="faq-4">
                            <h5 class="text-base font-semibold">
                                How do I Track My Order?
                            </h5>
                            <div class="hs-accrdion-active:text-white inline-flex items-center justify-center rounded-full">
                                <i class="ti ti-plus block hs-accordion-active:hidden"></i>
                                <i class="ti ti-minus hidden hs-accordion-active:block"></i>
                            </div>
                        </button>
                        <div id="faq-4" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="faq-4">
                            <div class="px-6 py-4">
                                <p class="text-default-600 text-sm/relaxed font-inter font-medium mb-2">
                                    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                </p>
                                <p class="text-default-600 text-sm/relaxed font-inter font-medium">
                                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                                </p>
                            </div>
                        </div>
                    </div><!-- end accordion-item -->

                    <div class="hs-accordion hs-accordion-active:border-primary border border-default-100 rounded-lg overflow-hidden" id="faq-5">
                        <button class="hs-accordion-active:bg-primary hs-accordion-active:text-white hs-accordion-toggle bg-default-100 capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-default-950 transition-all" aria-controls="faq-5">
                            <h5 class="text-base font-semibold">
                                App installation failed, how to update system information?
                            </h5>
                            <div class="hs-accrdion-active:text-white inline-flex items-center justify-center rounded-full">
                                <i class="ti ti-plus block hs-accordion-active:hidden"></i>
                                <i class="ti ti-minus hidden hs-accordion-active:block"></i>
                            </div>
                        </button>
                        <div id="faq-5" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="faq-5">
                            <div class="px-6 py-4">
                                <p class="text-default-600 text-sm/relaxed font-inter font-medium mb-2">
                                    Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.
                                </p>
                                <p class="text-default-600 text-sm/relaxed font-inter font-medium">
                                    Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.
                                </p>
                            </div>
                        </div>
                    </div><!-- end accordion-item -->
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.shared/footer')

@endsection