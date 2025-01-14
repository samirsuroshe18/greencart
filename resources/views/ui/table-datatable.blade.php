@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

  @include('layouts.shared/admin-page-title', ['subtitle' => 'Table', 'title' => 'Data Tables'])

  <div class="grid grid-cols-1 gap-6">
    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h4 class="text-lg font-medium text-default-950 capitalize mb-1">Basic</h4>
          <p class="text-default-600 text-sm font-medium">The most basic list group is an unordered list with list items and the proper classes. Build upon it with the options that follow, or with your own CSS as needed.</p>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div id="table-gridjs"></div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h4 class="text-lg font-medium text-default-950 capitalize">Pagination</h4>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <p class="text-sm text-slate-700 dark:text-slate-400 mb-4">Pagination can be enabled by setting <code>pagination: true</code>:</p>

        <div id="table-pagination"></div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h4 class="text-lg font-medium text-default-950 capitalize">Search</h4>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <p class="text-sm text-slate-700 dark:text-slate-400 mb-4">Grid.js supports global search on all rows and columns. Set <code>search: true</code> to enable the search plugin:</p>

        <div id="table-search"></div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h4 class="text-lg font-medium text-default-950 capitalize">Sorting</h4>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <p class="text-sm text-slate-700 dark:text-slate-400 mb-4">To enable sorting, simply add <code>sort: true</code> to your config:</p>

        <div id="table-sorting"></div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h4 class="text-lg font-medium text-default-950 capitalize">Loading State</h4>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <p class="text-sm text-slate-700 dark:text-slate-400 mb-4">Grid.js renders a loading bar automatically while it waits for the data to be fetched. Here we are using an async
          function to demonstrate this behaviour (e.g. an async function can be a XHR call to a server backend)</p>

        <div id="table-loading-state"></div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h4 class="text-lg font-medium text-default-950 capitalize">Fixed Header</h4>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <p class="text-sm text-slate-700 dark:text-slate-400 mb-4">The most basic list group is an unordered list with list items and the proper classes. Build upon it with the options that follow, or with your own CSS as needed.</p>

        <div id="table-fixed-header"></div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <h4 class="text-lg font-medium text-default-950 capitalize">Hidden Columns</h4>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <p class="text-sm text-slate-700 dark:text-slate-400 mb-4">Add <code>hidden: true</code> to the columns definition to hide them. </p>

        <div id="table-hidden-column"></div>
      </div>
    </div>
  </div>

</div>

@endsection

@section('script')
 @vite(['resources/js/ui-table-grid.js'])
@endsection