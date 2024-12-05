@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

  @include('layouts.shared/admin-page-title', ['subtitle' => 'Base UI', 'title' => 'Tabs'])

  <div class="grid lg:grid-cols-2 gap-6">
    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Default Tabs</h5>
          <p class="text-default-600 text-sm font-medium">Theme Default Tab.</p>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="border-b border-default-200">
          <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
            <button type="button" class="hs-tab-active:bg-white dark:hs-tab-active:bg-default-50 hs-tab-active:border hs-tab-active:border-default-200 hs-tab-active:border-b-transparent -mb-px py-2 px-3 inline-flex items-center gap-2 font-semibold text-center text-default-600 rounded-t-lg" id="card-type-tab-item-1" data-hs-tab="#card-type-tab-1" aria-controls="card-type-tab-1" role="tab">
              Home
            </button>
            <button type="button" class="hs-tab-active:bg-white dark:hs-tab-active:bg-default-50 hs-tab-active:border hs-tab-active:border-default-200 hs-tab-active:border-b-transparent -mb-px py-2 px-3 inline-flex items-center gap-2 font-semibold text-center text-default-600 rounded-t-lg active" id="card-type-tab-item-2" data-hs-tab="#card-type-tab-2" aria-controls="card-type-tab-2" role="tab">
              Profile
            </button>
            <button type="button" class="hs-tab-active:bg-white dark:hs-tab-active:bg-default-50 hs-tab-active:border hs-tab-active:border-default-200 hs-tab-active:border-b-transparent -mb-px py-2 px-3 inline-flex items-center gap-2 font-semibold text-center text-default-600 rounded-t-lg" id="card-type-tab-item-3" data-hs-tab="#card-type-tab-3" aria-controls="card-type-tab-3" role="tab">
              Messages
            </button>
            <button type="button" class="hs-tab-active:bg-white dark:hs-tab-active:bg-default-50 hs-tab-active:border hs-tab-active:border-default-200 hs-tab-active:border-b-transparent -mb-px py-2 px-3 inline-flex items-center gap-2 font-semibold text-center text-default-600 rounded-t-lg" id="card-type-tab-item-4" data-hs-tab="#card-type-tab-4" aria-controls="card-type-tab-4" role="tab">
              Settings
            </button>
          </nav>
        </div>

        <div class="mt-3">
          <div id="card-type-tab-1" role="tabpanel" aria-labelledby="card-type-tab-item-1" class="hidden">
            <p class="text-default-600 mb-4">Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
            <p class="text-default-600">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
          </div>
          <div id="card-type-tab-2" class="" role="tabpanel" aria-labelledby="card-type-tab-item-2">
            <p class="text-default-600 mb-4">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
            <p class="text-default-600">Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
          </div>
          <div id="card-type-tab-3" class="hidden" role="tabpanel" aria-labelledby="card-type-tab-item-3">
            <p class="text-default-600 mb-4">Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
            <p class="text-default-600">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
          </div>
          <div id="card-type-tab-4" class="hidden" role="tabpanel" aria-labelledby="card-type-tab-item-4">
            <p class="text-default-600 mb-4">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
            <p class="text-default-600">Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Segment</h5>
          <p class="text-default-600 text-sm font-medium">Another type of Tabs with segment.</p>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <nav class="flex space-x-2" aria-label="Tabs" role="tablist">
          <button type="button" class="hs-tab-active:bg-primary dark:hs-tab-active:bg-primary hs-tab-active:text-white text-default-600 hover:text-primary transition-all duration-300 rounded relative py-2 w-full font-semibold text-center" id="pills-with-brand-color-item-1" data-hs-tab="#pills-with-brand-color-1" aria-controls="pills-with-brand-color-1" role="tab">
            Home
          </button>
          <button type="button" class="hs-tab-active:bg-primary dark:hs-tab-active:bg-primary hs-tab-active:text-white text-default-600 hover:text-primary transition-all duration-300 rounded relative py-2 w-full font-semibold text-center active" id="pills-with-brand-color-item-2" data-hs-tab="#pills-with-brand-color-2" aria-controls="pills-with-brand-color-2" role="tab">
            Profile
          </button>
          <button type="button" class="hs-tab-active:bg-primary dark:hs-tab-active:bg-primary hs-tab-active:text-white text-default-600 hover:text-primary transition-all duration-300 rounded relative py-2 w-full font-semibold text-center" id="pills-with-brand-color-item-3" data-hs-tab="#pills-with-brand-color-3" aria-controls="pills-with-brand-color-3" role="tab">
            Messages
          </button>
          <button type="button" class="hs-tab-active:bg-primary dark:hs-tab-active:bg-primary hs-tab-active:text-white text-default-600 hover:text-primary transition-all duration-300 rounded relative py-2 w-full font-semibold text-center" id="pills-with-brand-color-item-4" data-hs-tab="#pills-with-brand-color-4" aria-controls="pills-with-brand-color-4" role="tab">
            Settings
          </button>
        </nav>

        <div class="mt-3">
          <div id="pills-with-brand-color-1" role="tabpanel" aria-labelledby="pills-with-brand-color-item-1">
            <p class="text-default-600 mb-4">Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
            <p class="text-default-600">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
          </div>
          <div id="pills-with-brand-color-2" class="hidden" role="tabpanel" aria-labelledby="pills-with-brand-color-item-2">
            <p class="text-default-600 mb-4">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
            <p class="text-default-600">Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
          </div>
          <div id="pills-with-brand-color-3" class="hidden" role="tabpanel" aria-labelledby="pills-with-brand-color-item-3">
            <p class="text-default-600 mb-4">Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
            <p class="text-default-600">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
          </div>
          <div id="pills-with-brand-color-4" class="hidden" role="tabpanel" aria-labelledby="pills-with-brand-color-item-4">
            <p class="text-default-600 mb-4">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
            <p class="text-default-600">Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize mb-1"> Tabs Vertical Left</h5>
          <p class="text-default-600 text-sm font-medium">You Vertically left side stacked navigation..</p>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <div class="grid md:grid-cols-5 gap-5">
          <nav class="flex md:flex-col gap-2" aria-label="Tabs" role="tablist" data-hs-tabs-vertical="true">
            <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white text-default-600 rounded-md text-start font-semibold ps-3 py-2 active" id="vertical-tab-with-border-item-1" data-hs-tab="#vertical-tab-with-border-1" aria-controls="vertical-tab-with-border-1" role="tab">
              Home
            </button>
            <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white text-default-600 rounded-md text-start font-semibold ps-3 py-2" id="vertical-tab-with-border-item-2" data-hs-tab="#vertical-tab-with-border-2" aria-controls="vertical-tab-with-border-2" role="tab">
              Profile
            </button>
            <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white text-default-600 rounded-md text-start font-semibold ps-3 py-2" id="vertical-tab-with-border-item-3" data-hs-tab="#vertical-tab-with-border-3" aria-controls="vertical-tab-with-border-3" role="tab">
              Messages
            </button>
            <button type="button" class="hs-tab-active:bg-primary hs-tab-active:text-white text-default-600 rounded-md text-start font-semibold ps-3 py-2" id="vertical-tab-with-border-item-4" data-hs-tab="#vertical-tab-with-border-4" aria-controls="vertical-tab-with-border-4" role="tab">
              Settings
            </button>
          </nav>

          <div class="md:col-span-4">
            <div id="vertical-tab-with-border-1" role="tabpanel" aria-labelledby="vertical-tab-with-border-item-1">
              <p class="text-default-600 mb-4">Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
              <p class="text-default-600">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
            </div>
            <div id="vertical-tab-with-border-2" class="hidden" role="tabpanel" aria-labelledby="vertical-tab-with-border-item-2">
              <p class="text-default-600 mb-4">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
              <p class="text-default-600">Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
            </div>
            <div id="vertical-tab-with-border-3" class="hidden" role="tabpanel" aria-labelledby="vertical-tab-with-border-item-3">
              <p class="text-default-600 mb-4">Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
              <p class="text-default-600">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
            </div>
            <div id="vertical-tab-with-border-4" class="hidden" role="tabpanel" aria-labelledby="vertical-tab-with-border-item-4">
              <p class="text-default-600 mb-4"> mb-4Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
              <p class="text-default-600">Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
      <div class="flex items-center justify-between py-4 px-5">
        <div class="">
          <h5 class="text-lg font-medium text-default-950 capitalize mb-1"> Tabs Bordered</h5>
          <p class="text-default-600 text-sm font-medium">A basic form of tabs with underline.</p>
        </div>
      </div>
      <div class="p-5 border-t border-dashed border-default-200">
        <nav class="flex space-x-3 border-b border-gray-200 dark:border-gray-600" aria-label="Tabs" role="tablist">
          <button type="button" class="hs-tab-active:border-primary hs-tab-active:text-primary font-semibold py-4 px-1 inline-flex items-center gap-2 border-b-2 border-transparent -mb-px transition-all whitespace-nowrap hover:text-primary active" id="tabs-with-icons-item-1" data-hs-tab="#tabs-with-icons-1" aria-controls="tabs-with-icons-1" role="tab">
            Home
          </button>
          <button type="button" class="hs-tab-active:border-primary hs-tab-active:text-primary font-semibold py-4 px-1 inline-flex items-center gap-2 border-b-2 border-transparent -mb-px transition-all whitespace-nowrap hover:text-primary" id="tabs-with-icons-item-2" data-hs-tab="#tabs-with-icons-2" aria-controls="tabs-with-icons-2" role="tab">
            Profile
          </button>
          <button type="button" class="hs-tab-active:border-primary hs-tab-active:text-primary font-semibold py-4 px-1 inline-flex items-center gap-2 border-b-2 border-transparent -mb-px transition-all whitespace-nowrap hover:text-primary" id="tabs-with-icons-item-3" data-hs-tab="#tabs-with-icons-3" aria-controls="tabs-with-icons-3" role="tab">
            Messages
          </button>
          <button type="button" class="hs-tab-active:border-primary hs-tab-active:text-primary font-semibold py-4 px-1 inline-flex items-center gap-2 border-b-2 border-transparent -mb-px transition-all whitespace-nowrap hover:text-primary" id="tabs-with-icons-item-4" data-hs-tab="#tabs-with-icons-4" aria-controls="tabs-with-icons-4" role="tab">
            Settings
          </button>
        </nav>
        <div class="mt-3">
          <div id="tabs-with-icons-1" role="tabpanel" aria-labelledby="tabs-with-icons-item-1">
            <p class="text-default-600 mb-4">Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
            <p class="text-default-600">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
          </div>
          <div id="tabs-with-icons-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-icons-item-2">
            <p class="text-default-600 mb-4">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
            <p class="text-default-600">Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
          </div>
          <div id="tabs-with-icons-3" class="hidden" role="tabpanel" aria-labelledby="tabs-with-icons-item-3">
            <p class="text-default-600 mb-4">Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
            <p class="text-default-600">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
          </div>
          <div id="tabs-with-icons-4" class="hidden" role="tabpanel" aria-labelledby="tabs-with-icons-item-4">
            <p class="text-default-600 mb-4">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
            <p class="text-default-600">Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection