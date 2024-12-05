@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Advanced UI', 'title' => 'Swiper'])

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <h5 class="text-base font-semibold text-default-950 capitalize">Default Swiper</h5>
            </div>

            <div class="p-5 border-t border-dashed border-default-200">
                <!-- Swper -->
                <div class="swiper default-swiper rounded-lg overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/small/1.jpg" alt="" class="w-full h-full" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/2.jpg" alt="" class="w-full h-full" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/3.jpg" alt="" class="w-full h-full" />
                        </div>
                    </div>
                </div>
            </div><!-- end p-6 -->
        </div><!-- end card -->

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <h5 class="text-base font-semibold text-default-950 capitalize">Navigation & Pagination Swiper</h5>
            </div>

            <div class="p-5 border-t border-dashed border-default-200">
                <!-- Swiper -->
                <div class="swiper navigation-swiper rounded-lg overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/small/4.jpg" alt="" class="w-full h-full" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/5.jpg" alt="" class="w-full h-full" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/6.jpg" alt="" class="w-full h-full" />
                        </div>
                    </div>
                    <div class="swiper-button-next"><i class="ti ti-chevron-right text-xl"></i></div>
                    <div class="swiper-button-prev"><i class="ti ti-chevron-left text-xl"></i></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div><!-- end p-6 -->
        </div><!-- end card -->

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <h5 class="text-base font-semibold text-default-950 capitalize">Pagination Dynamic Swiper</h5>
            </div>

            <div class="p-5 border-t border-dashed border-default-200">
                <!-- Swiper -->
                <div class="swiper pagination-dynamic-swiper rounded-lg overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/small/7.jpg" alt="" class="w-full h-full" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/4.jpg" alt="" class="w-full h-full" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/3.jpg" alt="" class="w-full h-full" />
                        </div>
                    </div>
                    <div class="swiper-pagination dynamic-pagination"></div>
                </div>
            </div><!-- end p-6 -->
        </div><!-- end card -->

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <h5 class="text-base font-semibold text-default-950 capitalize">Pagination Fraction Swiper</h5>
            </div>

            <div class="p-5 border-t border-dashed border-default-200">
                <!-- Swiper -->
                <div class="swiper pagination-fraction-swiper rounded-lg overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/small/10.jpg" alt="" class="w-full h-full" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/11.jpg" alt="" class="w-full h-full" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/9.jpg" alt="" class="w-full h-full" />
                        </div>
                    </div>
                    <div class="swiper-button-next"><i class="ti ti-chevron-right text-xl"></i></div>
                    <div class="swiper-button-prev"><i class="ti ti-chevron-left text-xl"></i></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div><!-- end p-6 -->
        </div><!-- end card -->

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <h5 class="text-base font-semibold text-default-950 capitalize">Pagination Custom Swiper</h5>
            </div>

            <div class="p-5 border-t border-dashed border-default-200">
                <!-- Swiper -->
                <div class="swiper pagination-custom-swiper rounded-lg overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/small/2.jpg" alt="" class="w-full h-full" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/3.jpg" alt="" class="w-full h-full" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/4.jpg" alt="" class="w-full h-full" />
                        </div>
                    </div>
                    <div class="swiper-pagination pagination-custom"></div>
                </div>
            </div><!-- end p-6 -->
        </div><!-- end card -->

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <h5 class="text-base font-semibold text-default-950 capitalize">Pagination Progress Swiper</h5>
            </div>

            <div class="p-5 border-t border-dashed border-default-200">
                <!-- Swiper -->
                <div class="swiper pagination-progress-swiper rounded-lg overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/small/5.jpg" alt="" class="w-full h-full" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/6.jpg" alt="" class="w-full h-full" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/7.jpg" alt="" class="w-full h-full" />
                        </div>
                    </div>
                    <div class="swiper-button-next"><i class="ti ti-chevron-right text-xl"></i></div>
                    <div class="swiper-button-prev"><i class="ti ti-chevron-left text-xl"></i></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div><!-- end p-6 -->
        </div><!-- end card -->

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <h5 class="text-base font-semibold text-default-950 capitalize">Scrollbar Swiper</h5>
            </div>

            <div class="p-5 border-t border-dashed border-default-200">
                <!-- Swiper -->
                <div class="swiper pagination-scrollbar-swiper rounded-lg overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/small/8.jpg" alt="" class="w-full h-full" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/9.jpg" alt="" class="w-full h-full" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/10.jpg" alt="" class="w-full h-full" />
                        </div>
                    </div>
                    <div class="swiper-button-next"><i class="ti ti-chevron-right text-xl"></i></div>
                    <div class="swiper-button-prev"><i class="ti ti-chevron-left text-xl"></i></div>
                    <div class="swiper-scrollbar"></div>
                </div>
            </div><!-- end p-6 -->
        </div><!-- end card -->

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <h5 class="text-base font-semibold text-default-950 capitalize">Vertical Swiper</h5>
            </div>

            <div class="p-5 border-t border-dashed border-default-200">
                <!-- Swiper -->
                <div class="swiper vertical-swiper rounded-lg overflow-hidden" style="height: 318px;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/small/10.jpg" alt="" class="w-full h-full" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/9.jpg" alt="" class="w-full h-full" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/1.jpg" alt="" class="w-full h-full" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div><!-- end p-6 -->
        </div><!-- end card -->

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <h5 class="text-base font-semibold text-default-950 capitalize">Mousewheel Control Swiper</h5>
            </div>

            <div class="p-5 border-t border-dashed border-default-200">
                <!-- Swiper -->
                <div class="swiper mousewheel-control-swiper rounded-lg overflow-hidden" style="height: 318px;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/small/3.jpg" alt="" class="w-full h-full" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/4.jpg" alt="" class="w-full h-full" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/5.jpg" alt="" class="w-full h-full" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div><!-- end p-6 -->
        </div><!-- end card -->

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <h5 class="text-base font-semibold text-default-950 capitalize">Effect Fade Swiper</h5>
            </div>

            <div class="p-5 border-t border-dashed border-default-200">
                <!-- Swiper -->
                <div class="swiper effect-fade-swiper rounded-lg overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/small/6.jpg" alt="" class="w-full h-full" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/7.jpg" alt="" class="w-full h-full" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/8.jpg" alt="" class="w-full h-full" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div><!-- end p-6 -->
        </div><!-- end card -->

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <h5 class="text-base font-semibold text-default-950 capitalize">Effect Creative Swiper</h5>
            </div>

            <div class="p-5 border-t border-dashed border-default-200">
                <!-- Swiper -->
                <div class="swiper effect-creative-swiper rounded-lg overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/small/9.jpg" alt="" class="w-full h-full" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/10.jpg" alt="" class="w-full h-full" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/11.jpg" alt="" class="w-full h-full" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div><!-- end p-6 -->
        </div><!-- end card -->

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <h5 class="text-base font-semibold text-default-950 capitalize">Effect Flip Swiper</h5>
            </div>

            <div class="p-5 border-t border-dashed border-default-200">
                <!-- Swiper -->
                <div class="swiper effect-flip-swiper rounded-lg overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/images/small/10.jpg" alt="" class="w-full h-full" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/1.jpg" alt="" class="w-full h-full" />
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/small/2.jpg" alt="" class="w-full h-full" />
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div><!-- end p-6 -->
        </div><!-- end card -->
    </div>
</div>

@endsection

@section('script')
  @vite(['resources/js/ui-advance-swiper.js'])
@endsection