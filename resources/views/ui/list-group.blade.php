@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

  @include('layouts.shared/admin-page-title', ['subtitle' => 'Base UI', 'title' => 'List Group'])

  <div class="grid grid-cols-3 gap-6">
    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize">Basic example</h5>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <ul class="flex flex-col">
          <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md">
            <i class="ti ti-brand-google-drive text-lg"></i>
            Google Drive
          </li>
          <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md">
            <i class="ti ti-brand-messenger text-lg"></i>
            Facebook Messenger
          </li>
          <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md">
            <i class="ti ti-brand-apple-filled text-lg"></i>
            Apple Technology Company
          </li>
          <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md">
            <i class="ti ti-lifebuoy text-lg"></i>
            Intercom Support System
          </li>
          <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md">
            <i class="ti ti-brand-paypal text-lg"></i>
            Paypal Payment Gateway
          </li>
        </ul>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize">Active items</h5>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <ul class="flex flex-col">
          <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-primary border border-default-200 text-white -mt-px first:rounded-t-md last:rounded-b-md">
            <i class="ti ti-brand-google-drive text-lg"></i>
            Google Drive
          </li>
          <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md">
            <i class="ti ti-brand-messenger text-lg"></i>
            Facebook Messenger
          </li>
          <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md">
            <i class="ti ti-brand-apple-filled text-lg"></i>
            Apple Technology Company
          </li>
          <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md">
            <i class="ti ti-lifebuoy text-lg"></i>
            Intercom Support System
          </li>
          <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md">
            <i class="ti ti-brand-paypal text-lg"></i>
            Paypal Payment Gateway
          </li>
        </ul>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize">Disabled items</h5>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <ul class="flex flex-col">
          <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-default-50 border border-default-200 text-default-600 -mt-px opacity-60 first:rounded-t-md last:rounded-b-md">
            <i class="ti ti-brand-google-drive text-lg"></i>
            Google Drive
          </li>
          <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md">
            <i class="ti ti-brand-messenger text-lg"></i>
            Facebook Messenger
          </li>
          <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md">
            <i class="ti ti-brand-apple-filled text-lg"></i>
            Apple Technology Company
          </li>
          <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md">
            <i class="ti ti-lifebuoy text-lg"></i>
            Intercom Support System
          </li>
          <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md">
            <i class="ti ti-brand-paypal text-lg"></i>
            Paypal Payment Gateway
          </li>
        </ul>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize">Links and Buttons</h5>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="flex flex-col">
          <a class="inline-flex items-center gap-x-2 py-3 px-5 font-normal bg-primary border border-primary text-white -mt-px first:rounded-t-md last:rounded-b-md" href="#">
            Paypal Payment Gateway
          </a>
          <a class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md transition-all duration-300 hover:bg-default-50 hover:text-default-400 focus:bg-default-50 focus:text-default-400" href="#">
            Google Drive
          </a>
          <a class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md transition-all duration-300 hover:bg-default-50 hover:text-default-400 focus:bg-default-50 focus:text-default-400" href="#">
            Facebook Messenger
          </a>
          <a class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md transition-all duration-300 hover:bg-default-50 hover:text-default-400 focus:bg-default-50 focus:text-default-400" href="#">
            Apple Technology Company
          </a>
          <a class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md transition-all duration-300 hover:bg-default-50 hover:text-default-400 focus:bg-default-50 focus:text-default-400" href="#">
            Intercom Support System
          </a>
        </div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize">Flush</h5>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <ul class="flex flex-col divide-y divide-default-200">
          <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal text-default-800">
            <i class="ti ti-brand-google-drive text-lg"></i>
            Google Drive
          </li>
          <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal text-default-800">
            <i class="ti ti-brand-messenger text-lg"></i>
            Facebook Messenger
          </li>
          <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal text-default-800">
            <i class="ti ti-brand-apple-filled text-lg"></i>
            Apple Technology Company
          </li>
          <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal text-default-800">
            <i class="ti ti-lifebuoy text-lg"></i>
            Intercom Support System
          </li>
          <li class="inline-flex items-center gap-x-2 py-3 px-5 font-normal text-default-800">
            <i class="ti ti-brand-paypal text-lg"></i>
            Paypal Payment Gateway
          </li>
        </ul>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize">Horizontal</h5>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <ul class="flex mb-6">
          <li class="inline-flex items-center gap-x-2.5 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-lg last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg">
            Google
          </li>
          <li class="inline-flex items-center gap-x-2.5 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-lg last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg">
            Whatsapp
          </li>
          <li class="inline-flex items-center gap-x-2.5 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-lg last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg">
            Facebook
          </li>
        </ul>

        <ul class="flex mb-6">
          <li class="inline-flex items-center gap-x-2.5 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-lg last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg">
            Apple
          </li>
          <li class="inline-flex items-center gap-x-2.5 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-lg last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg">
            PayPal
          </li>
          <li class="inline-flex items-center gap-x-2.5 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-lg last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg">
            Intercom
          </li>
        </ul>

        <ul class="flex">
          <li class="inline-flex items-center gap-x-2.5 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-lg last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg">
            Google
          </li>
          <li class="inline-flex items-center gap-x-2.5 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-lg last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg">
            Whatsapp
          </li>
          <li class="inline-flex items-center gap-x-2.5 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-lg last:rounded-b-lg sm:-ms-px sm:mt-0 sm:first:rounded-tr-none sm:first:rounded-bl-lg sm:last:rounded-bl-none sm:last:rounded-tr-lg">
            Facebook
          </li>
        </ul>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize">With badges</h5>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="flex flex-col">
          <div class="inline-flex items-center justify-between gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md">
            Gmail Emails
            <span class="inline-flex items-center gap-1.5 px-1 rounded-full text-xs font-normal bg-primary text-white">14</span>
          </div>
          <div class="inline-flex items-center justify-between gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md">
            Pending Payments
            <span class="inline-flex items-center gap-1.5 px-1 rounded-full text-xs font-normal bg-teal-500 text-white">2</span>
          </div>
          <div class="inline-flex items-center justify-between gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md">
            Action Needed
            <span class="inline-flex items-center gap-1.5 px-1 rounded-full text-xs font-normal bg-red-500 text-white">99+</span>
          </div>
          <div class="inline-flex items-center justify-between gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md">
            Payments Done
            <span class="inline-flex items-center gap-1.5 px-1 rounded-full text-xs font-normal bg-teal-500 text-white">20+</span>
          </div>
          <div class="inline-flex items-center justify-between gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md">
            Pending Payments
            <span class="inline-flex items-center gap-1.5 px-1 rounded-full text-xs font-normal bg-amber-500 text-white">12</span>
          </div>
        </div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize">With badges</h5>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="flex flex-col">
          <div class="flex flex-col mb-3">
            <div class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md">
              <div class="flex items-center">
                <input type="checkbox" class="form-checkbox bg-transparent rounded text-primary" id="customCheck1" checked>
                <label class="ms-1.5" for="customCheck1"> First checkbox</label>
              </div>
            </div>
            <div class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md">
              <div class="flex items-center">
                <input type="checkbox" class="form-checkbox bg-transparent rounded text-primary" id="customCheck2">
                <label class="ms-1.5" for="customCheck2">Second checkbox</label>
              </div>
            </div>
          </div>

          <div class="flex flex-col">
            <div class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md">
              <div class="flex items-center">
                <input type="radio" class="form-radio text-primary bg-transparent" name="formRadio" id="formRadio01" checked>
                <label class="ms-1.5" for="formRadio01"> First radio</label>
              </div>
            </div>
            <div class="inline-flex items-center gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md">
              <div class="flex items-center">
                <input type="radio" class="form-radio text-primary bg-transparent" name="formRadio" id="formRadio01">
                <label class="ms-1.5" for="formRadio01">Second radio</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize">Numbered</h5>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <ol class="flex flex-col">
          <li class="inline-flex items-center justify-between gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md">
            <div class="flex flex-wrap gap-x-2">
              <span>1.</span>
              <div>
                <h6 class="font-semibold">GreenCart Admin</h6>
                <p>GreenCart Admin</p>
              </div>
            </div>
            <span class="inline-flex items-center gap-1.5 px-1 rounded-full text-xs font-normal bg-primary text-white">865</span>
          </li> <!-- li-end -->

          <li class="inline-flex items-center justify-between gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md">
            <div class="flex flex-wrap gap-x-2">
              <span>2.</span>
              <div>
                <h6 class="font-semibold">GreenCart React Admin</h6>
                <p>GreenCart React Admin</p>
              </div>
            </div>
            <span class="inline-flex items-center gap-1.5 px-1 rounded-full text-xs font-normal bg-primary text-white">140</span>
          </li> <!-- li-end -->

          <li class="inline-flex items-center justify-between gap-x-2 py-3 px-5 font-normal border border-default-200 text-default-800 -mt-px first:rounded-t-md last:rounded-b-md">
            <div class="flex flex-wrap gap-x-2">
              <span>3.</span>
              <div>
                <h6 class="font-semibold">Angular Version</h6>
                <p>Angular Version</p>
              </div>
            </div>
            <span class="inline-flex items-center gap-1.5 px-1 rounded-full text-xs font-normal bg-primary text-white">85</span>
          </li> <!-- li-end -->
        </ol>
      </div>
    </div>
  </div>
</div>

@endsection