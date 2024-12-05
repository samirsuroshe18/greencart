@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

  @include('layouts.shared/admin-page-title', ['subtitle' => 'Icons', 'title' => 'Lucide'])

  <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
    <div class="flex items-center justify-between py-4 px-5">
      <div class="">
        <h5 class="text-lg font-medium text-default-950 capitalize mb-1">All Icons</h5>
        <p class="text-default-600 text-sm font-medium">Use <code class="text-pink-500">&lt;i data-lucide="menu"&gt;&lt;/i&gt;</code></p>
      </div>
    </div>
    <div class="p-5 border-t border-dashed border-default-200">
      <div class="grid 2xl:grid-cols-4 md:grid-cols-3 gap-6 *:flex *:items-center *:gap-3 *:text-default-700 hover:*:text-primary *:transition-all *:duration-200">
        <span class="inline-flex items-center gap-4">
          <i data-lucide="accessibility" class="h-5 w-5"></i>
          <span>accessibility</span>
        </span>
        <span class="inline-flex items-center gap-4">
          <i data-lucide="activity" class="h-5 w-5"></i>
          <span>activity</span>
        </span>
        <span class="inline-flex items-center gap-4">
          <i data-lucide="air-vent"></i></i>
          <span>air-vent</span>
        </span>
        <span class="inline-flex items-center gap-4">
          <i data-lucide="airplay" class="h-5 w-5"></i>
          <span>airplay</span>
        </span>
        <span class="inline-flex items-center gap-4">
          <i data-lucide="alarm-check" class="h-5 w-5"></i>
          <span>alarm-check</span>
        </span>
        <span class="inline-flex items-center gap-4">
          <i data-lucide="alarm-clock-off" class="h-5 w-5"></i>
          <span>alarm-clock-off</span>
        </span>
        <span class="inline-flex items-center gap-4">
          <i data-lucide="alarm-clock" class="h-5 w-5"></i>
          <span>alarm-clock</span>
        </span>
        <span class="inline-flex items-center gap-4">
          <i data-lucide="alarm-minus" class="h-5 w-5"></i>
          <span>alarm-minus</span>
        </span>
        <span class="inline-flex items-center gap-4">
          <i data-lucide="alarm-plus" class="h-5 w-5"></i>
          <span>alarm-plus</span>
        </span>
        <span class="inline-flex items-center gap-4">
          <i data-lucide="album" class="h-5 w-5"></i>
          <span>album</span>
        </span>
        <span class="inline-flex items-center gap-4">
          <i data-lucide="alert-circle" class="h-5 w-5"></i>
          <span>alert-circle</span>
        </span>
        <span class="inline-flex items-center gap-4">
          <i data-lucide="alert-octagon" class="h-5 w-5"></i>
          <span>alert-octagon</span>
        </span>
        <span class="inline-flex items-center gap-4">
          <i data-lucide="alert-triangle" class="h-5 w-5"></i>
          <span>alert-triangle</span>
        </span>
        <span class="inline-flex items-center gap-4">
          <i data-lucide="align-center-horizontal" class="h-5 w-5"></i>
          <span>align-center-horizontal</span>
        </span>
        <span class="inline-flex items-center gap-4">
          <i data-lucide="align-center-vertical" class="h-5 w-5"></i>
          <span>align-center-vertical</span>
        </span>
        <span class="inline-flex items-center gap-4">
          <i data-lucide="align-center" class="h-5 w-5"></i>
          <span>align-center</span>
        </span>
        <span class="inline-flex items-center gap-4">
          <i data-lucide="align-end-horizontal" class="h-5 w-5"></i>
          <span>align-end-horizontal</span>
        </span>
        <span class="inline-flex items-center gap-4">
          <i data-lucide="align-end-vertical" class="h-5 w-5"></i>
          <span>align-end-vertical</span>
        </span>
        <span class="inline-flex items-center gap-4">
          <i data-lucide="align-horizontal-distribute-center" class="h-5 w-5"></i>
          <span>align-horizontal-distribute-center</span>
        </span>
        <span class="inline-flex items-center gap-4">
          <i data-lucide="align-horizontal-distribute-end" class="h-5 w-5"></i>
          <span>align-horizontal-distribute-end</span>
        </span>
        <span class="inline-flex items-center gap-4">
          <i data-lucide="align-horizontal-distribute-start" class="h-5 w-5"></i>
          <span>align-horizontal-distribute-start</span>
        </span>
        <span class="inline-flex items-center gap-4">
          <i data-lucide="align-horizontal-justify-center" class="h-5 w-5"></i>
          <span>align-horizontal-justify-center</span>
        </span>
        <span class="inline-flex items-center gap-4">
          <i data-lucide="align-horizontal-justify-end" class="h-5 w-5"></i>
          <span>align-horizontal-justify-end</span>
        </span>
        <span class="inline-flex items-center gap-4">
          <i data-lucide="align-horizontal-justify-start" class="h-5 w-5"></i>
          <span>align-horizontal-justify-start</span>
        </span>
        <span class="inline-flex items-center gap-4">
          <i data-lucide="align-horizontal-space-around" class="h-5 w-5"></i>
          <span>align-horizontal-space-around</span>
        </span>
      </div>
    </div>
  </div>

  <div class="flex justify-center">
    <a href="https://lucide.dev/" target="_blank" class="py-2 px-5 inline-flex items-center gap-2 font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-primary/10 hover:bg-primary border-primary/20 hover:border-primary text-primary hover:text-white rounded-full"><i class="ti ti-eye text-xl"></i> View All Icons</a>
  </div>

</div>

@endsection
