@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Form', 'title' => 'Validation'])

    <div class="grid grid-cols-1 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Browser defaults</h5>
                    <p class="text-default-600 text-sm font-medium">Browser default Validation</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <form class="grid lg:grid-cols-3 gap-6">
                    <div>
                        <label for="validationDefault01" class="text-default-800 text-sm font-medium inline-block mb-2">First name</label>
                        <input type="text" class="form-input block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="validationDefault01" value="Mark" required>
                    </div>
                    <div>
                        <label for="validationDefault02" class="text-default-800 text-sm font-medium inline-block mb-2">Last name</label>
                        <input type="text" class="form-input block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="validationDefault02" value="Otto" required>
                    </div>
                    <div>
                        <label for="validationDefaultUsername" class="text-default-800 text-sm font-medium inline-block mb-2">Username</label>
                        <div class="flex -space-x-px">
                            <span class="py-2 px-3 bg-default-100 border border-default-200 rounded-l" id="inputGroupPrepend2">@</span>
                            <input type="text" class="form-input block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50 rounded-l-none" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" required>
                        </div>
                    </div>
                    <div>
                        <label for="validationDefault03" class="text-default-800 text-sm font-medium inline-block mb-2">City</label>
                        <input type="text" class="form-input block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="validationDefault03" required>
                    </div>
                    <div>
                        <label for="validationDefault04" class="text-default-800 text-sm font-medium inline-block mb-2">State</label>
                        <select class="form-select form-input block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="validationDefault04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div>
                        <label for="validationDefault05" class="text-default-800 text-sm font-medium inline-block mb-2">Zip</label>
                        <input type="text" class="form-input block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" id="validationDefault05" required>
                    </div>
                    <div class="col-span-3">
                        <div class="form-check">
                            <input class="form-checkbox bg-default-50 border-default-200 rounded text-primary focus:ring-transparent focus:ring-offset-0" type="checkbox" value="" id="invalidCheck2" required>
                            <label class="ms-1.5 text-default-600" for="invalidCheck2">
                                Agree to terms and conditions
                            </label>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <button class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-primary/10 hover:bg-primary border-primary/20 hover:border-primary text-primary hover:text-white rounded" type="submit">Submit form</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">PristineJS Validation</h5>
                    <p class="text-default-600 text-sm font-medium">Three part must included <code>.form-valid, .form-group and required</code> element. More details about Pristine please read <a target="_blank" href="https://github.com/sha256/Pristine" class="text-primary">on here</a></p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <form class="valid-form grid lg:grid-cols-3 gap-6" novalidate="true">
                    <div class="form-group group">
                        <label for="inputEmail4" class="text-default-800 text-sm font-medium inline-block mb-2">Email</label>
                        <input type="email" class="form-input block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50 group-[.has-danger]:border-red-500" id="inputEmail4" required>
                    </div>
                    <div class="form-group group">
                        <label for="inputPassword4" class="text-default-800 text-sm font-medium inline-block mb-2">Password</label>
                        <input type="password" class="form-input block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50 group-[.has-danger]:border-red-500" id="inputPassword4" required>
                    </div>
                    <div class="form-group group">
                        <label for="inputAddress" class="text-default-800 text-sm font-medium inline-block mb-2">Address</label>
                        <input type="text" class="form-input block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50 group-[.has-danger]:border-red-500" id="inputAddress" placeholder="1234 Main St" required>
                    </div>
                    <div class="form-group group">
                        <label for="inputAddress2" class="text-default-800 text-sm font-medium inline-block mb-2">Address 2</label>
                        <input type="text" class="form-input block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50 group-[.has-danger]:border-red-500" id="inputAddress2" placeholder="Apartment, studio, or floor" required>
                    </div>
                    <div class="form-group group">
                        <label for="inputCity" class="text-default-800 text-sm font-medium inline-block mb-2">City</label>
                        <input type="text" class="form-input block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50 group-[.has-danger]:border-red-500" id="inputCity" required>
                    </div>
                    <div class="form-group group">
                        <label for="inputState" class="text-default-800 text-sm font-medium inline-block mb-2">State</label>
                        <select id="inputState" class="form-select block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50 group-[.has-danger]:border-red-500" required>
                            <option>Choose...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group group">
                        <label for="inputZip" class="text-default-800 text-sm font-medium inline-block mb-2">Zip</label>
                        <input type="text" class="form-input block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50 group-[.has-danger]:border-red-500" id="inputZip" required>
                    </div>
                    <div class="form-group col-span-3">
                        <div class="form-check">
                            <input class="form-checkbox bg-default-50 border-default-200 rounded text-primary focus:ring-transparent focus:ring-offset-0" type="checkbox" value="" id="checked-demo" required>
                            <label class="ms-1.5" for="checked-demo">
                                I agree to the Terms of Use
                            </label>
                        </div>
                    </div>

                    <div class="form-group col-span-3">
                        <button type="submit" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle duration-500 text-sm text-center bg-primary/10 hover:bg-primary border-primary/20 hover:border-primary text-primary hover:text-white rounded">Register Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection

@section('script')
  @vite(['resources/js/ui-form-validation.js'])
@endsection