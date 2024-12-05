@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

  @include('layouts.shared/admin-page-title', ['subtitle' => 'Maps', 'title' => 'Vector Maps'])

  <div class="grid lg:grid-cols-2 gap-6">
    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h5 class="text-lg font-medium text-default-950 capitalize">World Vector Map</h5>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div id="world-map-markers" style="height: 360px"></div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h5 class="text-lg font-medium text-default-950 capitalize">World Vector marker Map</h5>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div id="world-map-markers-line" style="height: 360px"></div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h5 class="text-lg font-medium text-default-950 capitalize">India Vector Map</h5>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div id="india-vector-map" style="height: 360px"></div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h5 class="text-lg font-medium text-default-950 capitalize">Canada Vector Map</h5>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div id="canada-vector-map" style="height: 360px"></div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h5 class="text-lg font-medium text-default-950 capitalize">Russia Vector Map</h5>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div id="russia-vector-map" style="height: 360px"></div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h5 class="text-lg font-medium text-default-950 capitalize">US Vector Map</h5>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div id="usa-vector-map" style="height: 360px"></div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h5 class="text-lg font-medium text-default-950 capitalize">Iraq Vector Map</h5>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div id="iraq-vector-map" style="height: 360px"></div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h5 class="text-lg font-medium text-default-950 capitalize">Spain Vector Map</h5>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div id="spain-vector-map" style="height: 360px"></div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')
  @vite(['resources/js/maps-vector.js'])
@endsection