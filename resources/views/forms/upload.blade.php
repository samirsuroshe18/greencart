@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Form', 'title' => 'File Upload'])

    <div class="grid grid-cols-1 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Dropzone</h5>
                    <p class="text-default-600 text-sm font-medium">Enabling Quill Dropzone for seamless file drag and drop functionality.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <form action="#" class="dropzone" id="my-dropzone">
                    <div class="fallback">
                        <input name="file" type="file" multiple="multiple">
                    </div>
                    <div class="dz-message needsclick w-full">
                        <div class="mb-3">
                            <i class="ti ti-cloud-upload text-4xl text-default-600"></i>
                        </div>

                        <h5 class="text-xl font-semibold text-default-600">Drop files here or click to upload.</h5>
                    </div>
                </form>

                <div class="text-center mt-4">
                    <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-primary/10 hover:bg-primary border-primary/20 hover:border-primary text-primary hover:text-white rounded">Send Files</button>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('script')
  @vite(['resources/js/ui-form-upload.js'])
@endsection