@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

  @include('layouts.shared/admin-page-title', ['subtitle' => 'Chart', 'title' => 'Apex Charts'])

  <div class="grid lg:grid-cols-2 gap-6">
    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize">Line with Data Labels</h5>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div id="line_chart_datalabel" class="apex-charts" dir="ltr"></div>
      </div>
    </div>
    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize">Dashed Line</h5>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div id="line_chart_dashed" class="apex-charts" dir="ltr"></div>
      </div>
    </div>
    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize">Spline Area</h5>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div id="spline_area" class="apex-charts" dir="ltr"></div>
      </div>
    </div>
    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize">Column Chart</h5>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div id="column_chart" class="apex-charts" dir="ltr"></div>
      </div>
    </div>
    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize">Column with Data Labels</h5>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div id="column_chart_datalabel" class="apex-charts" dir="ltr"></div>
      </div>
    </div>
    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize">Bar Chart</h5>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div id="bar_chart" class="apex-charts" dir="ltr"></div>
      </div>
    </div>
    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize">Line, Column & Area Chart</h5>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div id="mixed_chart" class="apex-charts" dir="ltr"></div>
      </div>
    </div>
    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize">Radial Chart</h5>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div id="radial_chart" class="apex-charts" dir="ltr"></div>
      </div>
    </div>
    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize">Pie Chart</h5>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div id="pie_chart" class="apex-charts" dir="ltr"></div>
      </div>
    </div>
    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize">Donut Chart</h5>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div id="donut_chart" class="apex-charts" dir="ltr"></div>
      </div>
    </div>
  </div>

</div>

@endsection

@section('script')
  @vite(['resources/js/ui-chart-apex.js'])
@endsection