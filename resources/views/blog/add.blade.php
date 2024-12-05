@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Blog', 'title' => 'Add Blog'])

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
        <div class="flex items-center justify-between py-4 px-5">
            <h4 class="text-lg font-medium text-default-950 capitalize">Add Blog Detail</h4>
        </div>
        <div class="p-5 border-t border-dashed border-default-200">
            <div class="grid md:grid-cols-2 gap-4">
                <div class="space-y-1">
                    <label for="blogTitle" class="text-sm font-medium text-default-900">Blog Title</label>
                    <input type="text" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="blogTitle" placeholder="Enter Blog Title">
                </div>

                <div class="space-y-1">
                    <label for="blogUser" class="text-sm font-medium text-default-900">User Name</label>
                    <input type="text" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="blogUser" placeholder="Enter User Name">
                </div>

                <div class="md:col-span-2 space-y-1">
                    <label for="bloContent" class="text-sm font-medium text-default-900">Blog Content</label>
                    <textarea type="text" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="bloContent" rows="3" placeholder="Enter Blog Content"></textarea>
                </div>

            </div>
        </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
        <div class="flex items-center justify-between py-4 px-5">
            <h4 class="text-lg font-medium text-default-950 capitalize">Upload Blog Img</h4>
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

                    <h5 class="text-xl font-semibold text-default-600">Upload Blog Img.</h5>
                </div>
            </form>
        </div>
    </div>

    <div class="flex justify-end gap-4">
        <button class="flex items-center justify-center gap-2 rounded-md bg-primary/10 px-6 py-2.5 text-center text-sm font-semibold text-primary shadow-sm transition-all duration-200 hover:bg-primary hover:text-white">
            <i class="ti ti-arrow-back-up text-lg"></i>
            Undo
        </button>
        <button class="flex items-center justify-center gap-2 rounded-md bg-primary px-6 py-2.5 text-center text-sm font-semibold text-white shadow-sm transition-all duration-200 hover:bg-primary-500">
            <i class="ti ti-device-floppy text-lg"></i>
            Save
        </button>
    </div>

</div>

@endsection

@section('script')
  @vite(['resources/js/add.js'])
@endsection