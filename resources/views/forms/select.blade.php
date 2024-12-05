@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Form', 'title' => 'Select'])

    <div class="grid lg:grid-cols-2 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Example</h5>
                    <p class="text-default-600 text-sm font-medium">Single select input Example.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex flex-wrap gap-2">
                    <div class="w-full">
                        <div class="mb-2">
                            <label for="choices-single-default" class="form-label font-medium text-13 text-gray-500 dark:text-zinc-100">Default</label>
                        </div>
                        <select class="border-gray-100" data-trigger name="choices-single-default" id="choices-single-default" placeholder="This is a search placeholder">
                            <option value="">This is a placeholder</option>
                            <option value="Choice 1">Choice 1</option>
                            <option value="Choice 2">Choice 2</option>
                            <option value="Choice 3">Choice 3</option>
                        </select>
                    </div>

                    <div class="w-full">
                        <div class="mb-2">
                            <label for="choices-single-groups" class="form-label font-medium text-13 text-gray-500 dark:text-zinc-100">Option
                                groups</label>
                        </div>
                        <select class="" data-trigger name="choices-single-groups" id="choices-single-groups">
                            <option value="">Choose a city</option>
                            <optgroup label="UK">
                                <option value="London">London</option>
                                <option value="Manchester">Manchester</option>
                                <option value="Liverpool">Liverpool</option>
                            </optgroup>
                            <optgroup label="FR">
                                <option value="Paris">Paris</option>
                                <option value="Lyon">Lyon</option>
                                <option value="Marseille">Marseille</option>
                            </optgroup>
                            <optgroup label="DE" disabled>
                                <option value="Hamburg">Hamburg</option>
                                <option value="Munich">Munich</option>
                                <option value="Berlin">Berlin</option>
                            </optgroup>
                            <optgroup label="US">
                                <option value="New York">New York</option>
                                <option value="Washington" disabled>Washington</option>
                                <option value="Michigan">Michigan</option>
                            </optgroup>
                            <optgroup label="SP">
                                <option value="Madrid">Madrid</option>
                                <option value="Barcelona">Barcelona</option>
                                <option value="Malaga">Malaga</option>
                            </optgroup>
                            <optgroup label="CA">
                                <option value="Montreal">Montreal</option>
                                <option value="Toronto">Toronto</option>
                                <option value="Vancouver">Vancouver</option>
                            </optgroup>
                        </select>
                    </div>

                    <div class="w-full">
                        <div class="mb-2">
                            <label for="choices-single-no-search" class="form-label font-medium text-13 text-gray-500 dark:text-zinc-100">Options added
                                via config with no search</label>
                        </div>
                        <select class="" name="choices-single-no-search" id="choices-single-no-search">
                            <option value="0">Zero</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Multiple select inputs</h5>
                    <p class="text-default-600 text-sm font-medium">Options added via config with no search.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex flex-wrap gap-2">
                    <div class="w-full">
                        <div class="mb-2">
                            <label for="choices-multiple-default" class="form-label text-13 font-medium text-gray-500 dark:text-zinc-100">Default</label>
                        </div>
                        <select class="choice_place" data-trigger name="choices-multiple-default" id="choices-multiple-default" placeholder="This is a placeholder" multiple>
                            <option value="Choice 1" selected>Choice 1</option>
                            <option value="Choice 2">Choice 2</option>
                            <option value="Choice 3">Choice 3</option>
                            <option value="Choice 4" disabled>Choice 4</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <div class="mb-2">
                            <label for="choices-single-groups" class="form-label font-medium text-13 text-gray-500 dark:text-zinc-100">With remove button</label>
                        </div>
                        <select class="" name="choices-multiple-remove-button" id="choices-multiple-remove-button" placeholder="This is a placeholder" multiple>
                            <option value="Choice 1" selected>Choice 1</option>
                            <option value="Choice 2">Choice 2</option>
                            <option value="Choice 3">Choice 3</option>
                            <option value="Choice 4">Choice 4</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <div class="mb-2">
                            <label for="choices-single-no-search" class="form-label font-medium text-13 text-gray-500 dark:text-zinc-100">Option groups</label>
                        </div>
                        <select class="" name="choices-multiple-groups" id="choices-multiple-groups" placeholder="This is a placeholder" multiple>
                            <option value="">Choose a city</option>
                            <optgroup label="UK">
                                <option value="London">London</option>
                                <option value="Manchester">Manchester</option>
                                <option value="Liverpool">Liverpool</option>
                            </optgroup>
                            <optgroup label="FR">
                                <option value="Paris">Paris</option>
                                <option value="Lyon">Lyon</option>
                                <option value="Marseille">Marseille</option>
                            </optgroup>
                            <optgroup label="DE" disabled>
                                <option value="Hamburg">Hamburg</option>
                                <option value="Munich">Munich</option>
                                <option value="Berlin">Berlin</option>
                            </optgroup>
                            <optgroup label="US">
                                <option value="New York">New York</option>
                                <option value="Washington" disabled>Washington</option>
                                <option value="Michigan">Michigan</option>
                            </optgroup>
                            <optgroup label="SP">
                                <option value="Madrid">Madrid</option>
                                <option value="Barcelona">Barcelona</option>
                                <option value="Malaga">Malaga</option>
                            </optgroup>
                            <optgroup label="CA">
                                <option value="Montreal">Montreal</option>
                                <option value="Toronto">Toronto</option>
                                <option value="Vancouver">Vancouver</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Multiple select inputs</h5>
                    <p class="text-default-600 text-sm font-medium">Options added via config with no search.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex flex-wrap gap-2">
                    <div class="w-full">
                        <div class="mb-2">
                            <label for="choices-multiple-default" class="form-label text-13 font-medium text-gray-500 dark:text-zinc-100">Limited to 5 values with remove button</label>
                        </div>
                        <input class="" id="choices-text-remove-button" type="text" value="Task-1,Task-2" placeholder="Enter something" />
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('script')
 @vite(['resources/js/ui-form-select.js'])
@endsection