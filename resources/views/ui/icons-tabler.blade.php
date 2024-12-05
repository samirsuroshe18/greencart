@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

  @include('layouts.shared/admin-page-title', ['subtitle' => 'Icons', 'title' => 'Tabler'])

  <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
    <div class="flex items-center justify-between py-4 px-5">
      <div class="">
        <h5 class="text-lg font-medium text-default-950 capitalize mb-1">All Icons</h5>
        <p class="text-default-600 text-sm font-medium">Use <code class="text-pink-500">&lt;i class="ti ti-brand-x"&gt;&lt;/i&gt;</code></p>
      </div>
    </div>
    <div class="p-5 border-t border-dashed border-default-200">
      <div class="grid lg:grid-cols-4 md:grid-cols-3 gap-6 *:flex *:items-center *:gap-3 *:text-default-700 hover:*:text-primary *:transition-all *:duration-200">
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-html5 text-2xl"></i>
          <span class="">brand-html5</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-css3 text-2xl"></i>
          <span class="">brand-css3</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-nodejs text-2xl"></i>
          <span class="">brand-nodejs</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-python text-2xl"></i>
          <span class="">brand-python</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-sketch text-2xl"></i>
          <span class="">brand-sketch</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-facebook text-2xl"></i>
          <span class="">brand-facebook</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-slack text-2xl"></i>
          <span class="">brand-slack</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-dribbble text-2xl"></i>
          <span class="">brand-dribbble</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-github text-2xl"></i>
          <span class="">brand-github</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-git text-2xl"></i>
          <span class="">brand-git</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-gitlab text-2xl"></i>
          <span class="">brand-gitlab</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-figma text-2xl"></i>
          <span class="">brand-figma</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-tailwind text-2xl"></i>
          <span class="">brand-tailwind</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-linkedin text-2xl"></i>
          <span class="">brand-linkedin</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-vite text-2xl"></i>
          <span class="">brand-vite</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-react text-2xl"></i>
          <span class="">brand-react</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-nextjs text-2xl"></i>
          <span class="">brand-nextjs</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-vue text-2xl"></i>
          <span class="">brand-vue</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-nuxt text-2xl"></i>
          <span class="">brand-nuxt</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-angular text-2xl"></i>
          <span class="">brand-angular</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-behance text-2xl"></i>
          <span class="">brand-behance</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-android text-2xl"></i>
          <span class="">brand-android</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-bing text-2xl"></i>
          <span class="">brand-bing</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-codepen text-2xl"></i>
          <span class="">brand-codepen</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-npm text-2xl"></i>
          <span class="">brand-npm</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-yarn text-2xl"></i>
          <span class="">brand-yarn</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-php text-2xl"></i>
          <span class="">brand-php</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-laravel text-2xl"></i>
          <span class="">brand-laravel</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-symfony text-2xl"></i>
          <span class="">brand-symfony</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-cakephp text-2xl"></i>
          <span class="">brand-cakephp</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-apple text-2xl"></i>
          <span class="">brand-apple</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-pinterest text-2xl"></i>
          <span class="">brand-pinterest</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-tabler text-2xl"></i>
          <span class="">brand-tabler</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-adobe text-2xl"></i>
          <span class="">brand-adobe</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-x text-2xl"></i>
          <span class="">brand-x</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-twitter text-2xl"></i>
          <span class="">brand-twitter</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-redux text-2xl"></i>
          <span class="">brand-redux</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-chrome text-2xl"></i>
          <span class="">brand-chrome</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-google text-2xl"></i>
          <span class="">brand-google</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-google-play text-2xl"></i>
          <span class="">brand-google-play</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-google-drive text-2xl"></i>
          <span class="">brand-google-drive</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-google-home text-2xl"></i>
          <span class="">brand-google-home</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-google-maps text-2xl"></i>
          <span class="">brand-google-maps</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-google-photos text-2xl"></i>
          <span class="">brand-google-photos</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-google-analytics text-2xl"></i>
          <span class="">brand-google-analytics</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-yandex text-2xl"></i>
          <span class="">brand-yandex</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-edge text-2xl"></i>
          <span class="">brand-edge</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-loom text-2xl"></i>
          <span class="">brand-loom</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-blender text-2xl"></i>
          <span class="">brand-blender</span>
        </span>
        <span class="inline-flex items-center gap-4 text-default-600">
          <i class="ti ti-brand-openai text-2xl"></i>
          <span class="">brand-openai</span>
        </span>
      </div>
    </div>
  </div>

  <div class="flex justify-center">
    <a href="https://tabler.io/icons" target="_blank" class="py-2 px-5 inline-flex items-center gap-2 font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-primary/10 hover:bg-primary border-primary/20 hover:border-primary text-primary hover:text-white rounded-full"><i class="ti ti-eye text-xl"></i> View All Icons</a>
  </div>
</div>

@endsection