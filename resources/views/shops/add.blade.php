@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include("layouts.shared/admin-page-title", ['subtitle' => 'Shops', 'title' => 'Add Shop'])

    <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
        <div class="px-6 py-4">
            <nav class="flex flex-wrap items-center gap-4" aria-label="Tabs" role="tablist">
                <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white py-3 px-20 inline-flex items-center bg-primary/10 text-sm font-medium justify-center text-center text-primary rounded-lg max-sm:w-full active" data-hs-tab="#tabBusinessDetail" aria-controls="tabBusinessDetail" role="tab">
                    <i class="ti ti-heart-handshake text-lg me-1"></i>
                    Business Detail
                </button>
                <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white py-3 px-20 inline-flex items-center bg-primary/10 text-sm font-medium justify-center text-center text-primary rounded-lg max-sm:w-full" data-hs-tab="#tabPersonalDetail" aria-controls="tabPersonalDetail" role="tab">
                    <i class="ti ti-user text-lg me-1"></i>
                    Personal Detail
                </button>
                <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white py-3 px-20 inline-flex items-center bg-primary/10 text-sm font-medium justify-center text-center text-primary rounded-lg max-sm:w-full" data-hs-tab="#tabBankDetail" aria-controls="tabBankDetail" role="tab">
                    <i class="ti ti-building-bank text-lg me-1"></i>
                    Bank Detail
                </button>
            </nav>
        </div>

        <div class="p-5 border-t border-dashed border-default-200">
            <div id="tabBusinessDetail" role="tabpanel" class="">
                <h4 class="text-lg font-medium text-default-900 mb-6">Step 1:</h4>

                <div class="grid lg:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-medium text-default-900 mb-2" for="firstName">First Name</label>
                        <input id="firstName" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Your First Name">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-default-900 mb-2" for="lastName">Last Name</label>
                        <input id="lastName" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Your Last Name">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-default-900 mb-2" for="contactNumber">Contact Number</label>
                        <input id="contactNumber" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Your Contact Number">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-default-900 mb-2" for="phoneNumber">Phone Number</label>
                        <input id="phoneNumber" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Your Phone Number">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-default-900 mb-2" for="emailAddress">Email</label>
                        <input id="emailAddress" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Email">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-default-900 mb-2" for="birthofDate">Birth of Date</label>
                        <input id="birthofDate" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Birth of Date">
                    </div>
                </div>

                <div class="grid lg:grid-cols-3 gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-medium text-default-900 mb-2" for="city">City</label>
                        <input id="city" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Your City">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-default-900 mb-2" for="country">Country</label>
                        <input id="country" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Your Country">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-default-900 mb-2" for="zipCode">ZIP code</label>
                        <input id="zipCode" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter ZIP code">
                    </div>

                    <div class="lg:col-span-3">
                        <label class="block text-sm font-medium text-default-900 mb-2" for="description">Description</label>
                        <textarea id="description" class="block w-full bg-transparent rounded-lg py-2.5 px-4 border border-default-200 focus:ring-transparent focus:border-default-200" rows="5" placeholder="Enter Description"></textarea>
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

            <div id="tabPersonalDetail" class="hidden" role="tabpanel">
                <h4 class="text-lg font-medium text-default-900 mb-6">Step 2:</h4>

                <div class="grid lg:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-medium text-default-900 mb-2" for="companyName">Company Name</label>
                        <input id="companyName" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Company Name">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-default-900 mb-2" for="companyType">Company Type</label>
                        <input id="companyType" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Company Type">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-default-900 mb-2" for="panCardNumber">PAN Card Number</label>
                        <input id="panCardNumber" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter PAN Card Number">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-default-900 mb-2" for="faxNumber">Fax Number</label>
                        <input id="faxNumber" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Fax Number">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-default-900 mb-2" for="website">Website</label>
                        <input id="website" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter website.com">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-default-900 mb-2" for="exercitation">Email</label>
                        <input id="exercitation" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Email">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-default-900 mb-2" for="companyNumber">Number</label>
                        <input id="companyNumber" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Your Number">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-default-900 mb-2" for="companyLogo">Company Logo</label>
                        <input type="file" name="companyLogo" id="file-input" class="block w-full rounded-md text-default-800 text-sm focus:ring-transparent border border-default-200 dark:bg-default-50 file:border-0 file:bg-default-100 file:me-4 file:py-2.5 file:px-4" placeholder="Upload Your Company Logo">
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

            <div id="tabBankDetail" class="hidden" role="tabpanel">
                <h4 class="text-lg font-medium text-default-900 mb-6">Step 3:</h4>

                <div class="grid lg:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-medium text-default-900 mb-2" for="bankName">Bank Name</label>
                        <input id="bankName" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Your Bank Name">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-default-900 mb-2" for="bankBranch">Branch</label>
                        <input id="bankBranch" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Your Branch">
                    </div>

                    <div class="lg:col-span-2">
                        <label class="block text-sm font-medium text-default-900 mb-2" for="accountHolderName">Account Holder Name</label>
                        <input id="accountHolderName" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Your Account Holder Name">
                    </div>


                    <div>
                        <label class="block text-sm font-medium text-default-900 mb-2" for="accountNumber">Account Number</label>
                        <input id="accountNumber" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter Your Account Number">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-default-900 mb-2" for="IFSCCode">IFSC Code</label>
                        <input id="IFSCCode" class="block w-full rounded-md py-2.5 px-4 text-default-800 text-sm focus:ring-transparent border-default-200 dark:bg-default-50" type="text" placeholder="Enter IFSC Code">
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
        </div>
    </div>
</div>

@endsection