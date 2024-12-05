@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title',['subtitle' => 'Shop', 'title' => 'Shop List'])

    <div class="grid 2xl:grid-cols-4 md:grid-cols-2 gap-6 mb-6">
        <div class="relative rounded-lg border border-default-200 overflow-hidden">
            <div class="flex items-center gap-6 p-6 border-b border-dashed border-default-200">
                <div class="h-16 w-16 p-1 bg-default-200 border border-dashed border-default-300 rounded-full">
                    <img src="/images/shops/1.png" class="max-w-full h-full rounded-full">
                </div>

                <div>
                    <h4 class="text-lg uppercase font-medium text-default-900 line-clamp-1">Healthy Feast Corner</h4>
                    <h4 class="text-base font-medium text-default-600">Kianna Vetrovs</h4>
                </div>
            </div>

            <div class="flex justify-around border-b border-dashed border-default-200">
                <div class="text-center px-6 py-4">
                    <h4 class="text-lg font-medium text-primary mb-2.5">34</h4>
                    <h5 class="text-sm text-default-800">Total Product</h5>
                </div>
                <div class="border-s border-default-200"></div>
                <div class="text-center px-6 py-4">
                    <h4 class="text-lg font-medium text-primary mb-2.5">425</h4>
                    <h5 class="text-sm text-default-800">Total Sales</h5>
                </div>
            </div>

            <div class="space-y-4 p-6 border-b border-dashed border-default-200">
                <div>
                    <h6 class="text-base font-medium uppercase text-default-900">Location :</h6>
                    <p class="text-sm text-default-700 line-clamp-1">2123 Osprey the Blue Mountains, Townline, Feversham, ON NOC 1CO, Canada</p>
                </div>

                <div>
                    <h6 class="text-base font-medium uppercase text-default-900">Email :</h6>
                    <p class="text-sm text-default-700 line-clamp-1">kianna.vectrovs@mail.com</p>
                </div>

                <div>
                    <h6 class="text-base font-medium uppercase text-default-900">Number :</h6>
                    <p class="text-sm text-default-700 line-clamp-1">(123) 456-7890</p>
                </div>
            </div>

            <a href="{{ route('second', ['shops', 'details']) }}" class="px-6 py-4 block bg-primary/10 text-center text-primary font-semibold transition-all duration-500 hover:bg-primary hover:text-white">
                View Details
            </a>
        </div>

        <div class="relative rounded-lg border border-default-200 overflow-hidden">
            <div class="flex items-center gap-6 p-6 border-b border-dashed border-default-200">
                <div class="h-16 w-16 p-1 bg-default-200 border border-dashed border-default-300 rounded-full">
                    <img src="/images/shops/2.png" class="max-w-full h-full rounded-full">
                </div>

                <div>
                    <h4 class="text-lg uppercase font-medium text-default-900 line-clamp-1">Farmhouse Dish Heaven</h4>
                    <h4 class="text-base font-medium text-default-600">Gustavo Philips</h4>
                </div>
            </div>

            <div class="flex justify-around border-b border-dashed border-default-200">
                <div class="text-center px-6 py-4">
                    <h4 class="text-lg font-medium text-primary mb-2.5">12</h4>
                    <h5 class="text-sm text-default-800">Total Product</h5>
                </div>
                <div class="border-s border-default-200"></div>
                <div class="text-center px-6 py-4">
                    <h4 class="text-lg font-medium text-primary mb-2.5">1.2k</h4>
                    <h5 class="text-sm text-default-800">Total Sales</h5>
                </div>
            </div>

            <div class="space-y-4 p-6 border-b border-dashed border-default-200">
                <div>
                    <h6 class="text-base font-medium uppercase text-default-900">Location :</h6>
                    <p class="text-sm text-default-700 line-clamp-1">2045 Scotch Line, Essa, Ontario, L9R 1V2, Alliston, CA</p>
                </div>

                <div>
                    <h6 class="text-base font-medium uppercase text-default-900">Email :</h6>
                    <p class="text-sm text-default-700 line-clamp-1">gustavo.philips@mail.com</p>
                </div>

                <div>
                    <h6 class="text-base font-medium uppercase text-default-900">Number :</h6>
                    <p class="text-sm text-default-700 line-clamp-1">(123) 456-7890</p>
                </div>
            </div>

            <a href="{{ route('second', ['shops', 'details']) }}" class="px-6 py-4 block bg-primary/10 text-center text-primary font-semibold transition-all duration-500 hover:bg-primary hover:text-white">
                View Details
            </a>
        </div>

        <div class="relative rounded-lg border border-default-200 overflow-hidden">
            <div class="flex items-center gap-6 p-6 border-b border-dashed border-default-200">
                <div class="h-16 w-16 p-1 bg-default-200 border border-dashed border-default-300 rounded-full">
                    <img src="/images/shops/3.png" class="max-w-full h-full rounded-full">
                </div>

                <div>
                    <h4 class="text-lg uppercase font-medium text-default-900 line-clamp-1">kitchen creation</h4>
                    <h4 class="text-base font-medium text-default-600">Wilson Lipshutz</h4>
                </div>
            </div>

            <div class="flex justify-around border-b border-dashed border-default-200">
                <div class="text-center px-6 py-4">
                    <h4 class="text-lg font-medium text-primary mb-2.5">14</h4>
                    <h5 class="text-sm text-default-800">Total Product</h5>
                </div>
                <div class="border-s border-default-200"></div>
                <div class="text-center px-6 py-4">
                    <h4 class="text-lg font-medium text-primary mb-2.5">42</h4>
                    <h5 class="text-sm text-default-800">Total Sales</h5>
                </div>
            </div>

            <div class="space-y-4 p-6 border-b border-dashed border-default-200">
                <div>
                    <h6 class="text-base font-medium uppercase text-default-900">Location :</h6>
                    <p class="text-sm text-default-700 line-clamp-1">6058 Townhigh Mountains, Sideroad, Clarksburg, ON.</p>
                </div>

                <div>
                    <h6 class="text-base font-medium uppercase text-default-900">Email :</h6>
                    <p class="text-sm text-default-700 line-clamp-1">wilson.123@mail.com</p>
                </div>

                <div>
                    <h6 class="text-base font-medium uppercase text-default-900">Number :</h6>
                    <p class="text-sm text-default-700 line-clamp-1">(123) 456-7890</p>
                </div>
            </div>

            <a href="{{ route('second', ['shops', 'details']) }}" class="px-6 py-4 block bg-primary/10 text-center text-primary font-semibold transition-all duration-500 hover:bg-primary hover:text-white">
                View Details
            </a>
        </div>

        <div class="relative rounded-lg border border-default-200 overflow-hidden">
            <div class="flex items-center gap-6 p-6 border-b border-dashed border-default-200">
                <div class="h-16 w-16 p-1 bg-default-200 border border-dashed border-default-300 rounded-full">
                    <img src="/images/shops/4.png" class="max-w-full h-full rounded-full">
                </div>

                <div>
                    <h4 class="text-lg uppercase font-medium text-default-900 line-clamp-1">Country Cooking Cove</h4>
                    <h4 class="text-base font-medium text-default-600">Marilyn Geidt</h4>
                </div>
            </div>

            <div class="flex justify-around border-b border-dashed border-default-200">
                <div class="text-center px-6 py-4">
                    <h4 class="text-lg font-medium text-primary mb-2.5">53</h4>
                    <h5 class="text-sm text-default-800">Total Product</h5>
                </div>
                <div class="border-s border-default-200"></div>
                <div class="text-center px-6 py-4">
                    <h4 class="text-lg font-medium text-primary mb-2.5">2.4k</h4>
                    <h5 class="text-sm text-default-800">Total Sales</h5>
                </div>
            </div>

            <div class="space-y-4 p-6 border-b border-dashed border-default-200">
                <div>
                    <h6 class="text-base font-medium uppercase text-default-900">Location :</h6>
                    <p class="text-sm text-default-700 line-clamp-1">A-67 Concession 8, Nottawasaga RD, Glen Huron, Poland</p>
                </div>

                <div>
                    <h6 class="text-base font-medium uppercase text-default-900">Email :</h6>
                    <p class="text-sm text-default-700 line-clamp-1">marilyn.geidt@mail.com</p>
                </div>

                <div>
                    <h6 class="text-base font-medium uppercase text-default-900">Number :</h6>
                    <p class="text-sm text-default-700 line-clamp-1">(123) 456-7890</p>
                </div>
            </div>

            <a href="{{ route('second', ['shops', 'details']) }}" class="px-6 py-4 block bg-primary/10 text-center text-primary font-semibold transition-all duration-500 hover:bg-primary hover:text-white">
                View Details
            </a>
        </div>

        <div class="relative rounded-lg border border-default-200 overflow-hidden">
            <div class="flex items-center gap-6 p-6 border-b border-dashed border-default-200">
                <div class="h-16 w-16 p-1 bg-default-200 border border-dashed border-default-300 rounded-full">
                    <img src="/images/shops/5.png" class="max-w-full h-full rounded-full">
                </div>

                <div>
                    <h4 class="text-lg uppercase font-medium text-default-900 line-clamp-1">Gourmet Flavor nook</h4>
                    <h4 class="text-base font-medium text-default-600">Kaylynn Lipshutz</h4>
                </div>
            </div>

            <div class="flex justify-around border-b border-dashed border-default-200">
                <div class="text-center px-6 py-4">
                    <h4 class="text-lg font-medium text-primary mb-2.5">05</h4>
                    <h5 class="text-sm text-default-800">Total Product</h5>
                </div>
                <div class="border-s border-default-200"></div>
                <div class="text-center px-6 py-4">
                    <h4 class="text-lg font-medium text-primary mb-2.5">1.4k</h4>
                    <h5 class="text-sm text-default-800">Total Sales</h5>
                </div>
            </div>

            <div class="space-y-4 p-6 border-b border-dashed border-default-200">
                <div>
                    <h6 class="text-base font-medium uppercase text-default-900">Location :</h6>
                    <p class="text-sm text-default-700 line-clamp-1">2123 Osprey the Blue Mountains, Townline, Feversham, ON NOC 1CO, Canada</p>
                </div>

                <div>
                    <h6 class="text-base font-medium uppercase text-default-900">Email :</h6>
                    <p class="text-sm text-default-700 line-clamp-1">kaylynn.lipshutz@mail.com</p>
                </div>

                <div>
                    <h6 class="text-base font-medium uppercase text-default-900">Number :</h6>
                    <p class="text-sm text-default-700 line-clamp-1">(123) 456-7890</p>
                </div>
            </div>

            <a href="{{ route('second', ['shops', 'details']) }}" class="px-6 py-4 block bg-primary/10 text-center text-primary font-semibold transition-all duration-500 hover:bg-primary hover:text-white">
                View Details
            </a>
        </div>

        <div class="relative rounded-lg border border-default-200 overflow-hidden">
            <div class="flex items-center gap-6 p-6 border-b border-dashed border-default-200">
                <div class="h-16 w-16 p-1 bg-default-200 border border-dashed border-default-300 rounded-full">
                    <img src="/images/shops/6.png" class="max-w-full h-full rounded-full">
                </div>

                <div>
                    <h4 class="text-lg uppercase font-medium text-default-900 line-clamp-1">Culinary Craft Cabin</h4>
                    <h4 class="text-base font-medium text-default-600">Jaylon Rhiel Madsen</h4>
                </div>
            </div>

            <div class="flex justify-around border-b border-dashed border-default-200">
                <div class="text-center px-6 py-4">
                    <h4 class="text-lg font-medium text-primary mb-2.5">05</h4>
                    <h5 class="text-sm text-default-800">Total Product</h5>
                </div>
                <div class="border-s border-default-200"></div>
                <div class="text-center px-6 py-4">
                    <h4 class="text-lg font-medium text-primary mb-2.5">1.4k</h4>
                    <h5 class="text-sm text-default-800">Total Sales</h5>
                </div>
            </div>

            <div class="space-y-4 p-6 border-b border-dashed border-default-200">
                <div>
                    <h6 class="text-base font-medium uppercase text-default-900">Location :</h6>
                    <p class="text-sm text-default-700 line-clamp-1">3,4 - Twilight Bungalows, Sideroad, Clarksburg, Russia</p>
                </div>

                <div>
                    <h6 class="text-base font-medium uppercase text-default-900">Email :</h6>
                    <p class="text-sm text-default-700 line-clamp-1">rhiel.madsen@mail.com</p>
                </div>

                <div>
                    <h6 class="text-base font-medium uppercase text-default-900">Number :</h6>
                    <p class="text-sm text-default-700 line-clamp-1">(123) 456-7890</p>
                </div>
            </div>

            <a href="{{ route('second', ['shops', 'details']) }}" class="px-6 py-4 block bg-primary/10 text-center text-primary font-semibold transition-all duration-500 hover:bg-primary hover:text-white">
                View Details
            </a>
        </div>

        <div class="relative rounded-lg border border-default-200 overflow-hidden">
            <div class="flex items-center gap-6 p-6 border-b border-dashed border-default-200">
                <div class="h-16 w-16 p-1 bg-default-200 border border-dashed border-default-300 rounded-full">
                    <img src="/images/shops/7.png" class="max-w-full h-full rounded-full">
                </div>

                <div>
                    <h4 class="text-lg uppercase font-medium text-default-900 line-clamp-1">Rustic Spice Shack</h4>
                    <h4 class="text-base font-medium text-default-600">Rayna Herwitz</h4>
                </div>
            </div>

            <div class="flex justify-around border-b border-dashed border-default-200">
                <div class="text-center px-6 py-4">
                    <h4 class="text-lg font-medium text-primary mb-2.5">15</h4>
                    <h5 class="text-sm text-default-800">Total Product</h5>
                </div>
                <div class="border-s border-default-200"></div>
                <div class="text-center px-6 py-4">
                    <h4 class="text-lg font-medium text-primary mb-2.5">257</h4>
                    <h5 class="text-sm text-default-800">Total Sales</h5>
                </div>
            </div>

            <div class="space-y-4 p-6 border-b border-dashed border-default-200">
                <div>
                    <h6 class="text-base font-medium uppercase text-default-900">Location :</h6>
                    <p class="text-sm text-default-700 line-clamp-1">1003 Nusha Apartment, Townline st., Helsinki, NGC Road , Finland</p>
                </div>

                <div>
                    <h6 class="text-base font-medium uppercase text-default-900">Email :</h6>
                    <p class="text-sm text-default-700 line-clamp-1">rusticspice123@mail.com</p>
                </div>

                <div>
                    <h6 class="text-base font-medium uppercase text-default-900">Number :</h6>
                    <p class="text-sm text-default-700 line-clamp-1">(123) 456-7890</p>
                </div>
            </div>

            <a href="{{ route('second', ['shops', 'details']) }}" class="px-6 py-4 block bg-primary/10 text-center text-primary font-semibold transition-all duration-500 hover:bg-primary hover:text-white">
                View Details
            </a>
        </div>

        <div class="relative rounded-lg border border-default-200 overflow-hidden">
            <div class="flex items-center gap-6 p-6 border-b border-dashed border-default-200">
                <div class="h-16 w-16 p-1 bg-default-200 border border-dashed border-default-300 rounded-full">
                    <img src="/images/shops/8.png" class="max-w-full h-full rounded-full">
                </div>

                <div>
                    <h4 class="text-lg uppercase font-medium text-default-900 line-clamp-1">Savory Bites Cafe</h4>
                    <h4 class="text-base font-medium text-default-600">Terry Torff</h4>
                </div>
            </div>

            <div class="flex justify-around border-b border-dashed border-default-200">
                <div class="text-center px-6 py-4">
                    <h4 class="text-lg font-medium text-primary mb-2.5">28</h4>
                    <h5 class="text-sm text-default-800">Total Product</h5>
                </div>
                <div class="border-s border-default-200"></div>
                <div class="text-center px-6 py-4">
                    <h4 class="text-lg font-medium text-primary mb-2.5">396</h4>
                    <h5 class="text-sm text-default-800">Total Sales</h5>
                </div>
            </div>

            <div class="space-y-4 p-6 border-b border-dashed border-default-200">
                <div>
                    <h6 class="text-base font-medium uppercase text-default-900">Location :</h6>
                    <p class="text-sm text-default-700 line-clamp-1">784 Flowsome Avenue st., Shine Road, Sa Francisco , USA 547215</p>
                </div>

                <div>
                    <h6 class="text-base font-medium uppercase text-default-900">Email :</h6>
                    <p class="text-sm text-default-700 line-clamp-1">savorybitescafe24@mail.com</p>
                </div>

                <div>
                    <h6 class="text-base font-medium uppercase text-default-900">Number :</h6>
                    <p class="text-sm text-default-700 line-clamp-1">(123) 456-7890</p>
                </div>
            </div>

            <a href="{{ route('second', ['shops', 'details']) }}" class="px-6 py-4 block bg-primary/10 text-center text-primary font-semibold transition-all duration-500 hover:bg-primary hover:text-white">
                View Details
            </a>
        </div>
    </div>
</div>

@endsection