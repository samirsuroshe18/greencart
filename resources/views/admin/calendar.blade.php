@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Apps', 'title' => 'Calender'])

    <div class="grid lg:grid-cols-4 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit min-h-full ">
            <div class="p-5">
                <button class="inline-flex items-center justify-center gap-2 px-3 py-2 font-medium rounded bg-primary-500 text-white text-base w-full mb-4 transition-all duration-200 hover:bg-primary-600" data-hs-overlay="#btn-new-event"><i class="ti ti-circle-plus text-lg/none"></i> Create New Event</button>

                <div class="flex flex-col gap-1" id="external-events">
                    <p class="text-sm text-default-700 mb-4">Drag and drop your event or click in the calendar</p>
                    <button class="external-event bg-teal-500 px-3 py-2 rounded text-white text-base font-medium text-start w-full mb-2" data-class="bg-teal-500 font-medium">
                        <i class="ti ti-playstation-circle me-3 align-middle"></i>New Event
                    </button>
                    <button class="external-event bg-cyan-500 px-3 py-2 rounded text-white text-base font-medium text-start w-full mb-2" data-class="bg-cyan-500 font-medium">
                        <i class="ti ti-playstation-circle me-3 align-middle"></i>My Event
                    </button>
                    <button class="external-event bg-amber-500 px-3 py-2 rounded text-white text-base font-medium text-start w-full mb-2" data-class="bg-amber-500 font-medium">
                        <i class="ti ti-playstation-circle me-3 align-middle"></i>Meet Event Manager
                    </button>
                    <button class="external-event bg-red-500 px-3 py-2 rounded text-white text-base font-medium text-start w-full mb-2" data-class="bg-red-500 font-medium">
                        <i class="ti ti-playstation-circle me-3 align-middle"></i>Create Event
                    </button>
                </div>

                <div class="mt-5">
                    <h5 class="text-center mb-2">How It Works ?</h5>

                    <ul class="ps-3">
                        <li class="text-sm text-default-700 mb-3">
                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                            essentially unchanged.
                        </li>
                        <li class="text-sm text-default-700 mb-3">
                            Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more
                            obscure Latin words, consectetur, from a Lorem Ipsum passage.
                        </li>
                        <li class="text-sm text-default-700 mb-3">
                            It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                            essentially unchanged.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="lg:col-span-3">
            <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
                <div class="p-5">
                    <div id="calendar"></div>
                </div>
            </div> <!-- end card -->
        </div>
    </div>
</div>


<!-- Add New Event Modal -->
<div id="btn-new-event" class="w-full h-full fixed top-0 left-0 z-60 transition-all duration-500 hidden">
    <div class="-translate-y-5 hs-overlay-open:translate-y-0 hs-overlay-open:opacity-100 opacity-0 ease-in-out transition-all duration-500 sm:max-w-lg sm:w-full my-8 sm:mx-auto flex flex-col bg-white shadow-sm rounded dark:bg-default-50">
        <div class="flex flex-col border border-default-200 shadow-sm rounded-lg">
            <div class="flex justify-between items-center py-3 px-4 border-b border-default-200">
                <h3 class="text-lg font-medium text-default-900">
                    Modal title
                </h3>
                <button type="button" class="hs-dropdown-toggle text-default-600" data-hs-overlay="#btn-new-event">
                    <i class="ti ti-x text-lg"></i>
                </button>
            </div>
            <div class="p-5">
                <div class="flex-col">
                    <div class="w-full">
                        <div class="space-y-1.5 mb-6">
                            <label class="font-semibold text-default-600">Event Name</label>
                            <input class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="Insert Event Name" type="text" name="title" id="event-title" required>
                            <div class="invalid-feedback">Please provide a valid event name
                            </div>
                        </div>
                    </div>
                    <div class="space-y-1">
                        <label for="all-select-categories" class="text-sm font-medium text-default-900">Category</label>
                        <div class="relative">
                            <select id="all-select-categories" data-hs-select='{
                                  "placeholder": "Select Type",
                                  "toggleTag": "<button type=\"button\"></button>",
                                  "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 block w-full rounded py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border text-start border-default-200 dark:bg-default-50 focus:border-primary",
                                  "dropdownClasses": "mt-2 z-50 w-full max-h-[300px] p-1 space-y-0.5 bg-white border border-default-200 rounded-md overflow-hidden overflow-y-auto dark:bg-default-50 z-80",
                                  "optionClasses": "py-2 px-4 w-full text-sm text-default-800 cursor-pointer hover:bg-default-100 rounded focus:outline-none focus:bg-default-100",
                                  "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><i class=\"ti ti-checks flex-shrink-0 text-lg/none text-primary\" /></i></span></div>"
                                  }' class="hidden">
                                <option>Select A Color</option>
                                <option>Danger</option>
                                <option>Success</option>
                                <option>Primary</option>
                                <option>Info</option>
                                <option>Dark</option>
                                <option>Warning</option>
                            </select>


                            <div class="absolute top-1/2 end-3 -translate-y-1/2">
                                <i class="ti ti-arrows-move-vertical shrink text-sm text-default-600"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-default-200">
                <button type="button" class="py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary/5 hover:bg-primary border-primary/10 hover:border-primary text-primary hover:text-white rounded-md" data-hs-overlay="#btn-new-event">
                    Close
                </button>
                <button id="sa-warning" class="py-2 px-5 inline-block font-medium tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-md" data-hs-overlay="#btn-new-event">
                    Create Event
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
  @vite(['resources/js/apps-calendar.js'])
@endsection
