@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Base UI', 'title' => 'Progress'])

    <div class="grid lg:grid-cols-2 gap-6">
        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Example</h5>
                    <p class="text-default-600 text-sm font-medium">Determinate progress bars fill the container from 0 to 100%. This reflects the progress of the process.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex flex-wrap items-center gap-2">
                    <div class="flex w-full h-1.5 bg-default-100 rounded-full overflow-hidden">
                        <div class="flex flex-col justify-center overflow-hidden bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Labels</h5>
                    <p class="text-default-600 text-sm font-medium">Add labels to your progress bars by placing text within the progress bar.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex w-full h-4 bg-default-100 rounded-full overflow-hidden">
                    <div class="flex flex-col justify-center overflow-hidden bg-primary text-xs text-white text-center" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100">57%</div>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Height</h5>
                    <p class="text-default-600 text-sm font-medium">We only set a <code class="text-primary">height</code> value on the progress, so if you change that value the inner progress bar will automatically resize accordingly.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex flex-wrap gap-2">
                    <div class="flex w-full h-1.5 bg-default-100 rounded-full overflow-hidden">
                        <div class="flex flex-col justify-center overflow-hidden bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="flex w-full h-4 bg-default-100 rounded-full overflow-hidden">
                        <div class="flex flex-col justify-center overflow-hidden bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="flex w-full h-6 bg-default-100 rounded-full overflow-hidden">
                        <div class="flex flex-col justify-center overflow-hidden bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Vertical progress</h5>
                    <p class="text-default-600 text-sm font-medium">A base form of vertical progress.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex items-center gap-8">
                    <div class="flex flex-col flex-nowrap justify-end w-2 h-32 bg-default-100 rounded-full overflow-hidden">
                        <div class="bg-primary overflow-hidden" role="progressbar" style="height: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="flex flex-col flex-nowrap justify-end w-2 h-32 bg-default-100 rounded-full overflow-hidden">
                        <div class="bg-primary overflow-hidden" role="progressbar" style="height: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="flex flex-col flex-nowrap justify-end w-2 h-32 bg-default-100 rounded-full overflow-hidden">
                        <div class="bg-primary overflow-hidden" role="progressbar" style="height: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="flex flex-col flex-nowrap justify-end w-2 h-32 bg-default-100 rounded-full overflow-hidden">
                        <div class="bg-primary overflow-hidden" role="progressbar" style="height: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="flex flex-col flex-nowrap justify-end w-2 h-32 bg-default-100 rounded-full overflow-hidden">
                        <div class="bg-primary overflow-hidden" role="progressbar" style="height: 17%" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Multiple bars</h5>
                    <p class="text-default-600 text-sm font-medium">Include multiple progress bars in a progress component if you need.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex items-center gap-8">
                    <div class="flex w-full h-1.5 bg-default-100 rounded-full overflow-hidden">
                        <div class="flex flex-col justify-center overflow-hidden bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="flex flex-col justify-center overflow-hidden bg-cyan-500" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="flex flex-col justify-center overflow-hidden bg-gray-500" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="flex flex-col justify-center overflow-hidden bg-red-500" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit">
            <div class="flex items-center justify-between py-4 px-5">
                <div class="">
                    <h5 class="text-lg font-medium text-default-950 capitalize mb-1">Striped Progressbar</h5>
                    <p class="text-default-600 text-sm font-medium">Striped Progress bars in a progress component if you need.</p>
                </div>
            </div>
            <div class="p-5 border-t border-dashed border-default-200">
                <div class="flex flex-col items-center justify-center gap-3">
                    <div class="w-full h-4 bg-black/10 rounded-full">
                        <div class="bg-indigo-600 h-4 rounded-full w-3/12 animate-strip" style="background-image:linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent);background-size:1rem 1rem"></div>
                    </div>
                    <div class="w-full h-4 bg-black/10 rounded-full">
                        <div class="bg-purple-600 h-4 rounded-full w-4/12 animate-strip" style="background-image:linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent);background-size:1rem 1rem"></div>
                    </div>
                    <div class="w-full h-4 bg-black/10 rounded-full">
                        <div class="bg-blue-600 h-4 rounded-full w-5/12 animate-strip" style="background-image:linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent);background-size:1rem 1rem"></div>
                    </div>
                    <div class="w-full h-4 bg-black/10 rounded-full">
                        <div class="bg-green-600 h-4 rounded-full w-6/12 animate-strip" style="background-image:linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent);background-size:1rem 1rem"></div>
                    </div>
                    <div class="w-full h-4 bg-black/10 rounded-full">
                        <div class="bg-yellow-600 h-4 rounded-full w-7/12 animate-strip" style="background-image:linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent);background-size:1rem 1rem"></div>
                    </div>
                    <div class="w-full h-4 bg-black/10 rounded-full">
                        <div class="bg-red-600 h-4 rounded-full w-8/12 animate-strip" style="background-image:linear-gradient(45deg,hsla(0,0%,100%,.15) 25%,transparent 0,transparent 50%,hsla(0,0%,100%,.15) 0,hsla(0,0%,100%,.15) 75%,transparent 0,transparent);background-size:1rem 1rem"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection