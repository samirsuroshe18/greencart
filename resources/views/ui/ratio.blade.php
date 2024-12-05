@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

  @include('layouts.shared/admin-page-title', ['subtitle' => 'Base UI', 'title' => 'Ratio'])

  <div class="grid lg:grid-cols-2 gap-6">
    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Aspect Ratio 21:9</h5>
          <p class="text-default-600 text-sm font-medium">Use class <code class="text-primary">.aspect-w-7 .aspect-h-3</code>.</p>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="aspect-w-7 aspect-h-3">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/5wOhrU2V-SI?si=dfznZyGaJM_f3ZiL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Aspect Ratio 16:9</h5>
          <p class="text-default-600 text-sm font-medium">Use class <code class="text-primary">.aspect-w-16 .aspect-h-9</code>.</p>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="aspect-w-16 aspect-h-9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/5wOhrU2V-SI?si=dfznZyGaJM_f3ZiL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Aspect Ratio 1:1</h5>
          <p class="text-default-600 text-sm font-medium">Use class <code class="text-primary">.aspect-w-1 .aspect-h-1</code>.</p>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="aspect-w-1 aspect-h-1">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/5wOhrU2V-SI?si=dfznZyGaJM_f3ZiL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Aspect Ratio 4:3</h5>
          <p class="text-default-600 text-sm font-medium">Use class <code class="text-primary">.aspect-w-4 .aspect-h-3</code>.</p>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="aspect-w-4 aspect-h-3">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/5wOhrU2V-SI?si=dfznZyGaJM_f3ZiL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection