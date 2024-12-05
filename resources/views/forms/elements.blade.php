@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Form', 'title' => 'Element'])

    <div class="grid grid-cols-1 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Example</h5>
                    <p class="text-default-600 text-sm font-medium">
                        Most common form control, text-based input fields. Includes support for all HTML5
                        types: <code class="text-primary">text</code>, <code class="text-primary">password</code>, <code class="text-primary">datetime</code>,
                        <code class="text-primary">datetime-local</code>, <code class="text-primary">date</code>, <code class="text-primary">month</code>,
                        <code class="text-primary">time</code>, <code class="text-primary">week</code>, <code class="text-primary">number</code>, <code class="text-primary">email</code>,
                        <code class="text-primary">url</code>, <code class="text-primary">search</code>, <code class="text-primary">tel</code>, and <code class="text-primary">color</code>.
                    </p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="grid lg:grid-cols-3 gap-6">

                    <div>
                        <label for="simpleinput" class="text-default-800 text-sm font-medium inline-block mb-2">Text</label>
                        <input type="text" id="simpleinput" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50">
                    </div>

                    <div>
                        <label for="example-email" class="text-default-800 text-sm font-medium inline-block mb-2">Email</label>
                        <input type="email" id="example-email" name="example-email" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="Email">
                    </div>

                    <div>
                        <label for="example-password" class="text-default-800 text-sm font-medium inline-block mb-2">Password</label>
                        <input type="password" id="example-password" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" value="password">
                    </div>

                    <div>
                        <label for="example-palaceholder" class="text-default-800 text-sm font-medium inline-block mb-2">Placeholder</label>
                        <input type="text" id="example-palaceholder" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" placeholder="placeholder">
                    </div>

                    <div>
                        <label for="example-readonly" class="text-default-800 text-sm font-medium inline-block mb-2">Readonly</label>
                        <input type="text" id="example-readonly" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" readonly="" value="Readonly value">
                    </div>

                    <div>
                        <label for="example-disable" class="text-default-800 text-sm font-medium inline-block mb-2">Disabled</label>
                        <input type="text" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="example-disable" disabled="" value="Disabled value">
                    </div>

                    <div>
                        <label for="example-date" class="text-default-800 text-sm font-medium inline-block mb-2">Date</label>
                        <input class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="example-date" type="date" name="date">
                    </div>

                    <div>
                        <label for="example-month" class="text-default-800 text-sm font-medium inline-block mb-2">Month</label>
                        <input class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="example-month" type="month" name="month">
                    </div>

                    <div>
                        <label for="example-time" class="text-default-800 text-sm font-medium inline-block mb-2">Time</label>
                        <input class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="example-time" type="time" name="time">
                    </div>

                    <div>
                        <label for="example-week" class="text-default-800 text-sm font-medium inline-block mb-2">Week</label>
                        <input class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="example-week" type="week" name="week">
                    </div>

                    <div>
                        <label for="example-number" class="text-default-800 text-sm font-medium inline-block mb-2">Number</label>
                        <input class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="example-number" type="number" name="number">
                    </div>

                    <div>
                        <label for="example-color" class="text-default-800 text-sm font-medium inline-block mb-2">Color</label>
                        <input class="block w-full bg-default-100 rounded py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 h-full" id="example-color" type="color" name="color" value="#1E85FF">
                    </div>

                    <div>
                        <label for="example-select" class="text-default-800 text-sm font-medium inline-block mb-2">Input Select</label>
                        <select class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="example-select">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                    <div>
                        <label for="example-multiselect" class="text-default-800 text-sm font-medium inline-block mb-2">Multiple
                            Select</label>
                        <select id="example-multiselect" multiple="" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Input Group</h5>
                    <p class="text-default-600 text-sm font-medium">Easily extend form controls by adding text, buttons, or button groups on either side of textual inputs, custom selects, and custom file inputs.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="grid lg:grid-cols-3 gap-6">

                    <div>
                        <div class="flex">
                            <div class="inline-flex items-center px-4 rounded-s border border-e-0 border-default-200 bg-default-100 text-default-500">
                                @
                            </div>
                            <input type="text" placeholder="Username" class="block w-full rounded-e py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50 ltr:rounded-l-none rtl:rounded-r-none">
                        </div>
                    </div>
                    <div>
                        <div class="flex">
                            <input type="text" placeholder="Recipient's username" class="block w-full rounded-s py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50 ltr:rounded-r-none rtl:rounded-l-none">
                            <div class="inline-flex items-center px-4 rounded-e border border-s-0 border-default-200 bg-default-100 text-default-500">
                                @example.com
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="flex">
                            <div class="inline-flex items-center px-4 rounded-s border border-e-0 border-default-200 bg-default-100 text-default-500">
                                $
                            </div>
                            <input type="text" placeholder="" class="block w-full py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50 rounded-none">
                            <div class="inline-flex items-center px-4 rounded-e border border-s-0 border-default-200 bg-default-100 text-default-500">
                                .00
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="flex rounded-md shadow-sm -space-x-px">
                            <span class="inline-flex items-center px-4 rounded-s border border-e-0 border-default-200 bg-default-100 text-default-500">Default</span>
                            <input type="text" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50 rounded-s-none">
                        </div>
                    </div>

                    <div>
                        <div class="sm:flex rounded-md shadow-sm">
                            <input type="text" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50 rounded-e-none">
                            <input type="text" class="block w-full py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50 rounded-s-none -ms-px">
                            <span class="inline-flex items-center whitespace-nowrap px-4 rounded-e border border-e-0 border-default-200 bg-default-100 text-default-500">First and last name</span>
                        </div>
                    </div>

                    <div>
                        <div class="relative">
                            <input type="email" id="leading-icon" name="leading-icon" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50 ps-11" placeholder="you@site.com">
                            <div class="absolute inset-y-0 start-4 flex items-center z-20">
                                <i class="ti ti-envelope text-lg text-gray-400"></i>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="relative">
                            <input type="text" id="input-with-leading-and-trailing-icon" name="input-with-leading-and-trailing-icon" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50 ps-11 pe-14" placeholder="0.00">
                            <div class="absolute inset-y-0 start-4 flex items-center pointer-events-none z-20">
                                <span class="text-gray-500">$</span>
                            </div>
                            <div class="absolute inset-y-0 end-4 flex items-center pointer-events-none z-20">
                                <span class="text-gray-500">USD</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="flex rounded-md shadow-sm">
                            <div class="inline-flex items-center px-4 rounded-s border border-e-0 border-default-200 bg-default-100 text-default-500">
                                <span class="text-sm text-gray-500 dark:text-gray-400">$</span>
                            </div>
                            <div class="inline-flex items-center px-4 border border-e-0 border-default-200 bg-default-100 text-default-500">
                                <span class="text-sm text-gray-500 dark:text-gray-400">0.00</span>
                            </div>
                            <input type="text" id="leading-multiple-add-on" name="inline-add-on" class="block w-full py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50 rounded-s-none" placeholder="www.example.com">
                        </div>
                    </div>
                    <div>
                        <div class="flex rounded-md shadow-sm">
                            <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-s">
                                Button
                            </button>
                            <input type="text" id="leading-button-add-on" name="leading-button-add-on" class="block w-full rounded-e py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50">
                        </div>
                    </div>

                    <div>
                        <div class="flex rounded-md shadow-sm">
                            <button type="button" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-primary hover:bg-primary-700 border-primary hover:border-primary-700 text-white rounded-s">
                                Button
                            </button>
                            <button type="button" class="-me-px inline-flex items-center px-4 rounded-s border border-e-0 border-default-200 bg-default-100 text-default-500 hover:bg-default-200 transition-all duration-150">
                                Button
                            </button>
                            <input type="text" id="leading-button-add-on-multiple-add-ons" name="leading-button-add-on-multiple-add-ons" class="block w-full rounded-e py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50">
                        </div>
                    </div>

                    <div>
                        <div class="flex">
                            <div class="inline-flex items-center whitespace-nowrap px-4 rounded-s border border-e-0 border-default-200 bg-default-100 text-default-500">
                                With textarea
                            </div>
                            <textarea rows="4" class="block w-full rounded-e py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50 ltr:rounded-s-none rtl:rounded-e-none"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="grid lg:grid-cols-2 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Checkbox</h5>
                    <p class="text-default-600 text-sm font-medium">Two type checkbox rounded & rounded-full checkbox</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h6 class="text-sm mb-2">Default</h6>
                        <div class="flex flex-col gap-2">
                            <div class="form-check">
                                <input type="checkbox" class="form-checkbox rounded bg-transparent border-default-200 text-primary" id="customCheck1">
                                <label class="ms-1.5" for="customCheck1">Check this checkbox</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-checkbox rounded bg-transparent border-default-200 text-primary" id="customCheck2">
                                <label class="ms-1.5" for="customCheck2">Check this checkbox</label>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="text-sm mb-2">Disabled</h6>

                        <div class="flex flex-col gap-2">
                            <div class="opacity-75">
                                <input type="checkbox" class="form-checkbox rounded bg-transparent border-default-200 text-primary" id="customCheck5" checked="" disabled="">
                                <label class="ms-1.5" for="customCheck5">Check this checkbox</label>
                            </div>
                            <div class="opacity-75">
                                <input type="checkbox" class="form-checkbox rounded bg-transparent border-default-200 text-primary" id="customCheck6" disabled="">
                                <label class="ms-1.5" for="customCheck6">Check this checkbox</label>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3">
                        <div>
                            <input class="form-checkbox rounded bg-transparent border-default-200 text-primary" type="checkbox" id="customckeck1" checked="">
                            <label class="ms-1.5" for="customckeck1">Primary</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded bg-transparent border-default-200 text-teal-500" type="checkbox" id="customckeck2" checked="">
                            <label class="ms-1.5" for="customckeck2">Success</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded bg-transparent border-default-200 text-red-500" type="checkbox" id="customckeck3" checked="">
                            <label class="ms-1.5" for="customckeck3">Danger</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded bg-transparent border-default-200 text-amber-500" type="checkbox" id="customckeck4" checked="">
                            <label class="ms-1.5" for="customckeck4">Warning</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded bg-transparent border-default-200 text-pink-500" type="checkbox" id="checkBox5" checked="">
                            <label class="ms-1.5" for="checkBox5">Pink</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded bg-transparent border-default-200 text-blue-500" type="checkbox" id="checkBox7" checked="">
                            <label class="ms-1.5" for="checkBox7">Blue</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded bg-transparent border-default-200 text-cyan-500" type="checkbox" id="checkBox8" checked="">
                            <label class="ms-1.5" for="checkBox8">Info</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded bg-transparent border-default-200 text-gray-700" type="checkbox" id="checkBox9" checked="">
                            <label class="ms-1.5" for="checkBox9">Dark</label>
                        </div>
                    </div>


                    <div class="flex flex-col gap-3">
                        <div>
                            <input class="form-checkbox rounded-full bg-transparent border-default-200 text-primary" type="checkbox" id="checkBox10" checked="">
                            <label class="ms-1.5" for="checkBox10">Primary</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded-full bg-transparent border-default-200 text-teal-500" type="checkbox" id="checkBox11" checked="">
                            <label class="ms-1.5" for="checkBox11">Success</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded-full bg-transparent border-default-200 text-red-500" type="checkbox" id="checkBox12" checked="">
                            <label class="ms-1.5" for="checkBox12">Danger</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded-full bg-transparent border-default-200 text-amber-500" type="checkbox" id="checkBox13" checked="">
                            <label class="ms-1.5" for="checkBox13">Warning</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded-full bg-transparent border-default-200 text-pink-500" type="checkbox" id="customckec14" checked="">
                            <label class="ms-1.5" for="customckec14">Pink</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded-full bg-transparent border-default-200 text-blue-500" type="checkbox" id="checkBox15" checked="">
                            <label class="ms-1.5" for="checkBox15">Blue</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded-full bg-transparent border-default-200 text-cyan-500" type="checkbox" id="checkBox16" checked="">
                            <label class="ms-1.5" for="checkBox16">Info</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded-full bg-transparent border-default-200 text-gray-700" type="checkbox" id="checkBox17" checked="">
                            <label class="ms-1.5" for="checkBox17">Dark</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Checkbox</h5>
                    <p class="text-default-600 text-sm font-medium">Two type checkbox rounded & rounded-full checkbox</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h6 class="text-sm mb-2">Default</h6>
                        <div class="flex flex-col gap-2">
                            <div class="form-check">
                                <input type="checkbox" class="form-checkbox rounded bg-transparent border-default-200 text-primary" id="customCheck1">
                                <label class="ms-1.5" for="customCheck1">Check this checkbox</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-checkbox rounded bg-transparent border-default-200 text-primary" id="customCheck2">
                                <label class="ms-1.5" for="customCheck2">Check this checkbox</label>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h6 class="text-sm mb-2">Disabled</h6>

                        <div class="flex flex-col gap-2">
                            <div class="opacity-75">
                                <input type="checkbox" class="form-checkbox rounded bg-transparent border-default-200 text-primary" id="customCheck5" checked="" disabled="">
                                <label class="ms-1.5" for="customCheck5">Check this checkbox</label>
                            </div>
                            <div class="opacity-75">
                                <input type="checkbox" class="form-checkbox rounded bg-transparent border-default-200 text-primary" id="customCheck6" disabled="">
                                <label class="ms-1.5" for="customCheck6">Check this checkbox</label>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3">
                        <div>
                            <input class="form-checkbox rounded bg-transparent border-default-200 text-primary" type="checkbox" id="customckeck1" checked="">
                            <label class="ms-1.5" for="customckeck1">Primary</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded bg-transparent border-default-200 text-teal-500" type="checkbox" id="customckeck2" checked="">
                            <label class="ms-1.5" for="customckeck2">Success</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded bg-transparent border-default-200 text-red-500" type="checkbox" id="customckeck3" checked="">
                            <label class="ms-1.5" for="customckeck3">Danger</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded bg-transparent border-default-200 text-amber-500" type="checkbox" id="customckeck4" checked="">
                            <label class="ms-1.5" for="customckeck4">Warning</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded bg-transparent border-default-200 text-pink-500" type="checkbox" id="checkBox5" checked="">
                            <label class="ms-1.5" for="checkBox5">Pink</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded bg-transparent border-default-200 text-blue-500" type="checkbox" id="checkBox7" checked="">
                            <label class="ms-1.5" for="checkBox7">Blue</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded bg-transparent border-default-200 text-cyan-500" type="checkbox" id="checkBox8" checked="">
                            <label class="ms-1.5" for="checkBox8">Info</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded bg-transparent border-default-200 text-gray-700" type="checkbox" id="checkBox9" checked="">
                            <label class="ms-1.5" for="checkBox9">Dark</label>
                        </div>
                    </div>


                    <div class="flex flex-col gap-3">
                        <div>
                            <input class="form-checkbox rounded-full bg-transparent border-default-200 text-primary" type="checkbox" id="checkBox10" checked="">
                            <label class="ms-1.5" for="checkBox10">Primary</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded-full bg-transparent border-default-200 text-teal-500" type="checkbox" id="checkBox11" checked="">
                            <label class="ms-1.5" for="checkBox11">Success</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded-full bg-transparent border-default-200 text-red-500" type="checkbox" id="checkBox12" checked="">
                            <label class="ms-1.5" for="checkBox12">Danger</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded-full bg-transparent border-default-200 text-amber-500" type="checkbox" id="checkBox13" checked="">
                            <label class="ms-1.5" for="checkBox13">Warning</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded-full bg-transparent border-default-200 text-pink-500" type="checkbox" id="customckec14" checked="">
                            <label class="ms-1.5" for="customckec14">Pink</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded-full bg-transparent border-default-200 text-blue-500" type="checkbox" id="checkBox15" checked="">
                            <label class="ms-1.5" for="checkBox15">Blue</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded-full bg-transparent border-default-200 text-cyan-500" type="checkbox" id="checkBox16" checked="">
                            <label class="ms-1.5" for="checkBox16">Info</label>
                        </div>

                        <div>
                            <input class="form-checkbox rounded-full bg-transparent border-default-200 text-gray-700" type="checkbox" id="checkBox17" checked="">
                            <label class="ms-1.5" for="checkBox17">Dark</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Checkbox</h5>
                    <p class="text-default-600 text-sm font-medium">Two type checkbox rounded & rounded-full checkbox</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="grid xl:grid-cols-2 gap-6">
                    <div class="flex flex-col gap-3">
                        <h6 class="text-sm mb-2">Default</h6>
                        <div class="flex items-center">
                            <input class="w-9 h-5 flex items-center appearance-none bg-default-200 border-2 border-transparent rounded-full focus:ring-0 focus:ring-offset-0 cursor-pointer transition-colors ease-in-out duration-200 checked:bg-none before:content-[''] before:inline-block before:w-4 before:h-4 before:bg-white before:rounded-full before:translate-x-0 before:transform before:transition before:ease-in-out before:checked:translate-x-full before:duration-200 text-primary" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="ms-1.5" for="flexSwitchCheckDefault">Default switch checkbox</label>
                        </div>
                        <div class="flex items-center">
                            <input class="w-9 h-5 flex items-center appearance-none bg-default-200 border-2 border-transparent rounded-full focus:ring-0 focus:ring-offset-0 cursor-pointer transition-colors ease-in-out duration-200 checked:bg-none before:content-[''] before:inline-block before:w-4 before:h-4 before:bg-white before:rounded-full before:translate-x-0 before:transform before:transition before:ease-in-out before:checked:translate-x-full before:duration-200 text-primary" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked="">
                            <label class="ms-1.5" for="flexSwitchCheckChecked">Checked switch checkbox</label>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3">
                        <h6 class="text-sm mb-2">Disabled</h6>
                        <div class="flex items-center opacity-60">
                            <input class="w-9 h-5 flex items-center appearance-none bg-default-200 border-2 border-transparent rounded-full focus:ring-0 focus:ring-offset-0 cursor-pointer transition-colors ease-in-out duration-200 checked:bg-none before:content-[''] before:inline-block before:w-4 before:h-4 before:bg-white before:rounded-full before:translate-x-0 before:transform before:transition before:ease-in-out before:checked:translate-x-full before:duration-200 text-primary" type="checkbox" role="switch" id="flexSwitchCheckDisabled" disabled="">
                            <label class="ms-1.5" for="flexSwitchCheckDisabled">Disabled Switch</label>
                        </div>
                        <div class="flex items-center opacity-60">
                            <input class="w-9 h-5 flex items-center appearance-none bg-default-200 border-2 border-transparent rounded-full focus:ring-0 focus:ring-offset-0 cursor-pointer transition-colors ease-in-out duration-200 checked:bg-none before:content-[''] before:inline-block before:w-4 before:h-4 before:bg-white before:rounded-full before:translate-x-0 before:transform before:transition before:ease-in-out before:checked:translate-x-full before:duration-200 text-primary" type="checkbox" role="switch" id="flexSwitchCheckCheckedDisabled" checked="" disabled="">
                            <label class="ms-1.5" for="flexSwitchCheckCheckedDisabled">Disabled checked Switch</label>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3">
                        <h6 class="text-sm mb-2">Colored</h6>
                        <div class="flex items-center">
                            <input type="checkbox" id="formSwitch" class="w-9 h-5 flex items-center appearance-none bg-default-200 border-2 border-transparent rounded-full focus:ring-0 focus:ring-offset-0 cursor-pointer transition-colors ease-in-out duration-200 checked:bg-none before:content-[''] before:inline-block before:w-4 before:h-4 before:bg-white before:rounded-full before:translate-x-0 before:transform before:transition before:ease-in-out before:checked:translate-x-full before:duration-200 text-primary" checked="">
                            <label for="formSwitch" class="ms-1.5">Primary</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="formSwitch2" class="w-9 h-5 flex items-center appearance-none bg-default-200 border-2 border-transparent rounded-full focus:ring-0 focus:ring-offset-0 cursor-pointer transition-colors ease-in-out duration-200 checked:bg-none before:content-[''] before:inline-block before:w-4 before:h-4 before:bg-white before:rounded-full before:translate-x-0 before:transform before:transition before:ease-in-out before:checked:translate-x-full before:duration-200 text-amber-500" checked="">
                            <label for="formSwitch2" class="ms-1.5">Warning</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="formSwitch3" class="w-9 h-5 flex items-center appearance-none bg-default-200 border-2 border-transparent rounded-full focus:ring-0 focus:ring-offset-0 cursor-pointer transition-colors ease-in-out duration-200 checked:bg-none before:content-[''] before:inline-block before:w-4 before:h-4 before:bg-white before:rounded-full before:translate-x-0 before:transform before:transition before:ease-in-out before:checked:translate-x-full before:duration-200 text-red-500" checked="">
                            <label for="formSwitch3" class="ms-1.5">Danger</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="formSwitch4" class="w-9 h-5 flex items-center appearance-none bg-default-200 border-2 border-transparent rounded-full focus:ring-0 focus:ring-offset-0 cursor-pointer transition-colors ease-in-out duration-200 checked:bg-none before:content-[''] before:inline-block before:w-4 before:h-4 before:bg-white before:rounded-full before:translate-x-0 before:transform before:transition before:ease-in-out before:checked:translate-x-full before:duration-200 text-teal-500" checked="">
                            <label for="formSwitch4" class="ms-1.5">Success</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="formSwitch5" class="w-9 h-5 flex items-center appearance-none bg-default-200 border-2 border-transparent rounded-full focus:ring-0 focus:ring-offset-0 cursor-pointer transition-colors ease-in-out duration-200 checked:bg-none before:content-[''] before:inline-block before:w-4 before:h-4 before:bg-white before:rounded-full before:translate-x-0 before:transform before:transition before:ease-in-out before:checked:translate-x-full before:duration-200 text-gray-500" checked="">
                            <label for="formSwitch5" class="ms-1.5">Secondary</label>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3">
                        <h6 class="text-sm mb-2">Square</h6>
                        <div class="flex items-center">
                            <input type="checkbox" id="formSwitch6" class="w-9 h-5 flex items-center appearance-none bg-default-200 border-2 border-transparent focus:ring-0 focus:ring-offset-0 cursor-pointer transition-colors ease-in-out duration-200 checked:bg-none before:content-[''] before:inline-block before:w-4 before:h-4 before:bg-white before:translate-x-0 before:transform before:transition before:ease-in-out before:checked:translate-x-full before:duration-200 text-primary" checked="">
                            <label for="formSwitch6" class="ms-2">Primary</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="formSwitch7" class="w-9 h-5 flex items-center appearance-none bg-default-200 border-2 border-transparent focus:ring-0 focus:ring-offset-0 cursor-pointer transition-colors ease-in-out duration-200 checked:bg-none before:content-[''] before:inline-block before:w-4 before:h-4 before:bg-white before:translate-x-0 before:transform before:transition before:ease-in-out before:checked:translate-x-full before:duration-200 text-amber-500" checked="">
                            <label for="formSwitch7" class="ms-2">Warning</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="formSwitch8" class="w-9 h-5 flex items-center appearance-none bg-default-200 border-2 border-transparent focus:ring-0 focus:ring-offset-0 cursor-pointer transition-colors ease-in-out duration-200 checked:bg-none before:content-[''] before:inline-block before:w-4 before:h-4 before:bg-white before:translate-x-0 before:transform before:transition before:ease-in-out before:checked:translate-x-full before:duration-200 text-red-500" checked="">
                            <label for="formSwitch8" class="ms-2">Danger</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="formSwitch9" class="w-9 h-5 flex items-center appearance-none bg-default-200 border-2 border-transparent focus:ring-0 focus:ring-offset-0 cursor-pointer transition-colors ease-in-out duration-200 checked:bg-none before:content-[''] before:inline-block before:w-4 before:h-4 before:bg-white before:translate-x-0 before:transform before:transition before:ease-in-out before:checked:translate-x-full before:duration-200 text-teal-500" checked="">
                            <label for="formSwitch9" class="ms-2">Success</label>
                        </div>

                        <div class="flex items-center">
                            <input type="checkbox" id="formSwitch10" class="w-9 h-5 flex items-center appearance-none bg-default-200 border-2 border-transparent focus:ring-0 focus:ring-offset-0 cursor-pointer transition-colors ease-in-out duration-200 checked:bg-none before:content-[''] before:inline-block before:w-4 before:h-4 before:bg-white before:translate-x-0 before:transform before:transition before:ease-in-out before:checked:translate-x-full before:duration-200 text-gray-500" checked="">
                            <label for="formSwitch10" class="ms-2">Secondary</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection