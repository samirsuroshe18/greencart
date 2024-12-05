@extends('layouts.admin')

@section("content")

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Form', 'title' => 'Editors'])

    <div class="grid grid-cols-1 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Snow Editor</h5>
                    <p class="text-default-600 text-sm font-medium">Implementing Quill Snow Editor for rich text editing functionality.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div id="snow-editor" style="height: 300px;">
                    <h3><span class="ql-size-large">Hello World!</span></h3>
                    <p><br></p>
                    <h3>This is a simple editable area.</h3>
                    <p><br></p>
                    <ul>
                        <li>Select a text to reveal the toolbar.</li>
                        <li>Edit rich document on-the-fly, so elastic!</li>
                    </ul>
                    <p><br></p>
                    <p>End of simple area</p>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Bubble Editor</h5>
                    <p class="text-default-600 text-sm font-medium">Utilizing Quill Bubble Editor for intuitive rich text editing experience.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200 relative">
                <div id="bubble-editor" style="height: 300px;">
                    <h3><span class="ql-size-large">Hello World!</span></h3>
                    <p><br></p>
                    <h3>This is a simple editable area.</h3>
                    <p><br></p>
                    <ul>
                        <li>Select a text to reveal the toolbar.</li>
                        <li>Edit rich document on-the-fly, so elastic!</li>
                    </ul>
                    <p><br></p>
                    <p>End of simple area</p>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('script')
  @vite(['resources/js/ui-form-editor.js'])
@endsection