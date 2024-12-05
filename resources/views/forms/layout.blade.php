@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Form', 'title' => 'Layout'])

    <div class="grid lg:grid-cols-2 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize">Basic Example</h5>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="text-default-800 text-sm font-medium inline-block mb-2">Email address</label>
                        <input type="email" class="form-input block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-sm text-default-700">We'll never share your email
                            with anyone else.</small>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="text-default-800 text-sm font-medium inline-block mb-2">Password</label>
                        <input type="password" class="form-input block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="flex items-center gap-2 mb-3">
                        <input type="checkbox" class="form-checkbox bg-default-50 border-default-200 rounded text-primary focus:ring-transparent focus:ring-offset-0" id="checkmeout0">
                        <label class="text-default-800 text-sm font-medium inline-block" for="checkmeout0">Check me out !</label>
                    </div>
                    <button type="submit" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-primary/10 hover:bg-primary border-primary/20 hover:border-primary text-primary hover:text-white rounded">Submit</button>
                </form>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize">Horizontal form</h5>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <form class="flex flex-col gap-3">
                    <div class="grid grid-cols-4 items-center gap-6">
                        <label for="inputEmail3" class="text-default-800 text-sm font-medium inline-block mb-2">Email</label>
                        <div class="md:col-span-3">
                            <input type="email" class="form-input block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                    <div class="grid grid-cols-4 items-center gap-6">
                        <label for="inputPassword3" class="text-default-800 text-sm font-medium inline-block mb-2">Password</label>
                        <div class="md:col-span-3">
                            <input type="password" class="form-input block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="inputPassword3" placeholder="Password">
                        </div>
                    </div>
                    <div class="grid grid-cols-4 items-center gap-6">
                        <label for="inputPassword5" class="text-default-800 text-sm font-medium inline-block mb-2">Re Password</label>
                        <div class="md:col-span-3">
                            <input type="password" class="form-input block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="inputPassword5" placeholder="Retype Password">
                        </div>
                    </div>
                    <div class="grid grid-cols-4 items-center gap-6">
                        <div class="md:col-start-2">
                            <div class="flex items-center gap-2">
                                <input type="checkbox" class="form-checkbox bg-default-50 border-default-200 rounded text-primary focus:ring-transparent focus:ring-offset-0" id="checkmeout">
                                <label class="text-default-800 text-sm font-medium inline-block" for="checkmeout">Check me out !</label>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-4 items-center gap-6">
                        <div class="md:col-start-2">
                            <button type="submit" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-primary/10 hover:bg-primary border-primary/20 hover:border-primary text-primary hover:text-white rounded">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Basic Example</h5>
                    <p class="text-default-600 text-sm font-medium">As shown in the previous examples, our grid system allows you to place any number of a <code class="text-primary">.grid-cols-*</code> and <code class="text-primary">.flex</code></p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <form class="grid grid-cols-4 gap-4 mb-6">
                    <div>
                        <label for="staticEmail2" class="sr-only">Email</label>
                        <input type="text" readonly="" class="form-input block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="staticEmail2" value="email@example.com">
                    </div>
                    <div>
                        <label for="inputPassword2" class="sr-only">Password</label>
                        <input type="password" class="form-input block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="inputPassword2" placeholder="Password">
                    </div>
                    <div>
                        <button type="submit" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-primary/10 hover:bg-primary border-primary/20 hover:border-primary text-primary hover:text-white rounded">Confirm identity</button>
                    </div>
                </form>

                <form>
                    <div class="flex flex-wrap items-center gap-4">
                        <div>
                            <label class="sr-only" for="inlineFormInput">Name</label>
                            <input type="text" class="form-input block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="inlineFormInput" placeholder="Jane Doe">
                        </div>
                        <div>
                            <label class="sr-only" for="inlineFormInputGroup">Username</label>
                            <div class="flex">
                                <span class="px-4 inline-flex items-center min-w-fit rounded-s border border-e-0 border-default-200 bg-default-100 text-sm text-default-800">@</span>
                                <input type="text" class="form-input block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50 rounded-s-none" placeholder="Username">
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-primary/10 hover:bg-primary border-primary/20 hover:border-primary text-primary hover:text-white rounded">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection