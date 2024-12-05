@extends('layouts.admin')

@section("content")

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Advanced UI', 'title' => 'Lightbox'])

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
        <div class="flex items-center justify-between py-4 px-5">
            <h5 class="text-lg font-medium text-default-950 capitalize">Images With Description</h5>
        </div>
        <div class="p-5 border-t border-dashed border-default-200">
            <div class="grid lg:grid-cols-3 gap-5">
                <div>
                    <a href="/images/small/1.jpg" type="image/x-icon" class="image-popup-desc" data-glightbox="title:Description Bottom; description: You can set the position of the description <a href=&quot;http://google.com&quot;>with a link to Google</a>">
                        <img src="/images/small/1.jpg" alt="work-thumbnail">
                    </a>
                </div>

                <div>
                    <a href="/images/small/2.jpg" type="image/x-icon" class="image-popup-desc" data-glightbox="title: Description Right; description: .custom-desc1; descPosition: right;">
                        <img src="/images/small/2.jpg" alt="work-thumbnail">
                    </a>

                    <div class="glightbox-desc custom-desc1">
                        <p>
                            You can set the position of the description in different ways for example
                            <strong style="text-decoration: underline">top, bottom, left or right</strong>
                        </p>
                        <p>
                            <a href="http://google.com" target="_blank" style="text-decoration: underline; font-weight: bold">Example Google link</a>
                            ipsum vehicula eros ultrices lacinia Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Duis quis ipsum vehicula eros ultrices lacinia.
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                        </p>
                        <p>
                            Primis pharetra facilisis lorem quis penatibus ad nulla inceptos, dui per tempor taciti aliquet consequat sodales, curae tristique gravida auctor interdum malesuada sagittis.
                            Felis pretium eros ligula natoque ad ante rutrum himenaeos, adipiscing urna mauris porta quam efficitur odio, sagittis morbi tellus nisi molestie mus faucibus.
                        </p>
                        <p>
                            Primis pharetra facilisis lorem quis penatibus ad nulla inceptos, dui per tempor taciti aliquet consequat sodales, curae tristique gravida auctor interdum malesuada sagittis.
                            Felis pretium eros ligula natoque ad ante rutrum himenaeos, adipiscing urna mauris porta quam efficitur odio, sagittis morbi tellus nisi molestie mus faucibus.
                        </p>
                    </div>
                </div>

                <div>
                    <a href="/images/small/3.jpg" type="image/x-icon" class="image-popup-desc" data-glightbox="title: Description Left; description: .custom-desc2; descPosition: left;">
                        <img src="/images/small/3.jpg" alt="work-thumbnail">
                    </a>
                    <div class="glightbox-desc custom-desc2">
                        <p>You can set the position of the description in different ways for example top, bottom, left or right</p>
                        <p>Duis quis ipsum vehicula eros ultrices lacinia. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
        <div class="flex items-center justify-between py-4 px-5">
            <h5 class="text-lg font-medium text-default-950 capitalize">Popup With Video Or Map</h5>
        </div>
        <div class="p-5 border-t border-dashed border-default-200">
            <div class="flex flex-wrap gap-4">
                <!-- Youtube Video -->
                <a href="https://www.youtube.com/watch?v=0O2aH4XLbto" class="image-popup-video-button rounded-md bg-primary py-2 px-3 text-sm font-semibold leading-5 text-white transition-all duration-500 hover:bg-primary-600" data-title="YouTube Video" data-description="YouTube Video Popup">
                    Open YouTube Video
                </a>

                <!-- Vimeo Video -->
                <a href="https://vimeo.com/45830194" class="image-popup-video-button rounded-md bg-primary py-2 px-3 text-sm font-semibold leading-5 text-white transition-all duration-500 hover:bg-primary-600" data-title="Vimeo Video" data-description="Vimeo Video Popup">
                    Open Vimeo Video
                </a>
            </div>
        </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
        <div class="flex items-center justify-between py-4 px-5">
            <h5 class="text-lg font-medium text-default-950 capitalize">Videos Gallery</h5>
        </div>
        <div class="p-5 border-t border-dashed border-default-200">
            <div class="grid lg: grid-cols-3 gap-4">
                <div>
                    <div>
                        <a href="https://vimeo.com/115041822" class="image-popup-video">
                            <img src="/images/small/1.jpg" alt="image">
                        </a>
                    </div>
                </div>
                <div>
                    <div>
                        <a href="https://www.youtube-nocookie.com/embed/Ga6RYejo6Hk" class="image-popup-video">
                            <img src="/images/small/2.jpg" alt="image">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('script')
@vite(['resources/js/ui-advance-lightbox.js'])
@endsection