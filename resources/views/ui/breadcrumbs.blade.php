@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Base UI', 'title' => 'Breadcrumbs'])

    <div class="grid lg:grid-cols-2 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Simple</h5>
                    <p class="text-default-600 text-sm font-medium">Default navigational path indicators.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol role="list" class="flex items-center text-sm font-semibold space-x-4">
                        <li>
                            <div class="flex items-center">
                                <a href="#" class="text-default-600 hover:text-default-900">
                                    <i class="ti ti-house text-lg/3 flex-shrink-0"></i>
                                    <a href="#" class="ms-2 text-sm font-medium text-default-600 hover:text-default-900">GreenCart</a>
                                </a>
                            </div>
                        </li>

                        <li>
                            <div class="flex items-center">
                                <i class="ti ti-chevron-right text-lg flex-shrink-0 text-default-600"></i>
                                <a href="#" class="ms-4 text-sm font-medium text-default-600 hover:text-default-900">Admin</a>
                            </div>
                        </li>

                        <li>
                            <div class="flex items-center">
                                <i class="ti ti-chevron-right text-lg flex-shrink-0 text-default-600"></i>
                                <a href="#" class="ms-4 text-sm font-medium text-default-600 hover:text-default-900" aria-current="page">Dashboard</a>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Example</h5>
                    <p class="text-default-600 text-sm font-medium">Other default navigational path indicators.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <ol class="flex items-center whitespace-nowrap min-w-0" aria-label="Breadcrumb">
                    <li class="text-sm text-default-600">
                        <a class="flex items-center font-medium hover:text-primary-600" href="#">
                            GreenCart
                            <span class="mx-2">/</span>
                        </a>
                    </li>

                    <li class="text-sm text-default-600">
                        <a class="flex items-center font-medium hover:text-primary-600" href="#">
                            Admin
                            <span class="mx-2">/</span>
                        </a>
                    </li>

                    <li class="text-sm font-semibold text-default-800 truncate" aria-current="page">
                        Dashboard
                    </li>
                </ol>
            </div>
        </div>
    </div>

</div>

@endsection