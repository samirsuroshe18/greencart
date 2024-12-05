@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Pages', 'title' => 'Timeline'])

    <div class="relative space-y-12 pb-6">
        <!-- Center Border Line -->
        <div class="absolute border-s-2 border border-default-200 h-full top-0 start-10 md:start-1/2 -translate-x-1/2 rtl:translate-x-1/2 -z-10"></div>

        <div class="md:text-center">
            <h5 class="py-2 px-4 bg-default-200 text-default-900 dark:bg-default-100 inline rounded">
                Today
            </h5>
        </div>

        <!--  -->
        <div class="md:text-end text-start">
            <div class="absolute start-10 md:start-1/2 -translate-x-1/2 rtl:translate-x-1/2 mt-6">
                <div class="w-6 h-6 flex justify-center items-center rounded-full bg-red-500/30 text-red-500">
                    <i class="ti ti-hexagon-filled text-sm"></i>
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="md:col-span-1 col-span-2">
                    <div class="relative md:me-10 md:ms-0 ms-20">
                        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit p-5">
                            <h4 class="mb-1.5 text-base text-default-900 font-medium">School Opens for New Academic Year</h4>
                            <p class="mb-4 text-default-500"><small>22 July, 2023</small></p>
                            <p class="mb-4 text-default-500">We're thrilled to announce that ABC School is gearing up to welcome back our Grocery, teachers, and staff for an exciting new academic year!</p>
                            <a href="javascript: void(0);" class="py-2 px-4 rounded bg-default-100 text-sm text-default-900 hover:bg-default-200">👍 17</a>
                            <a href="javascript: void(0);" class="py-2 px-4 rounded bg-default-100 text-sm text-default-900 hover:bg-default-200">❤️ 89</a>
                        </div>
                        <div class="bg-white dark:bg-default-50 absolute h-4 w-4 rotate-45 rounded top-7 md:-end-2 md:start-auto -start-2 border-t border-e border-default-200"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-start">
            <div class="absolute start-10 md:start-1/2 -translate-x-1/2 rtl:translate-x-1/2 mt-6">
                <div class="w-6 h-6 flex justify-center items-center rounded-full bg-cyan-500/30 text-cyan-500">
                    <i class="ti ti-hexagon-filled text-sm"></i>
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="md:col-start-2 col-span-2">
                    <div class="relative md:ms-10 ms-20">
                        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit p-5">
                            <h4 class="mb-1.5 text-base text-default-900 font-medium">Orientation Day for New Grocery and Parents.</h4>
                            <p class="mb-4 text-default-500"><small>22 July, 2023</small></p>
                            <p class="mb-4 text-default-500">The Orientation Day is a fantastic opportunity to familiarize yourselves with our school community and get ready for an enriching academic journey ahead.</p>
                            <a href="javascript: void(0);" class="py-2 px-4 rounded bg-default-100 text-sm text-default-900 hover:bg-default-200">🎉 148</a>
                        </div>
                        <div class="bg-white dark:bg-default-50 absolute h-4 w-4 rotate-45 rounded-sm top-7 -start-2 border-s border-b border-default-200"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="md:text-center">
            <h5 class="py-2 px-4 bg-default-200 text-default-900 dark:bg-default-100 inline rounded">
                Yesterday
            </h5>
        </div>

        <div class="md:text-end text-start">
            <div class="absolute start-10 md:start-1/2 -translate-x-1/2 rtl:translate-x-1/2 mt-6">
                <div class="w-6 h-6 flex justify-center items-center rounded-full bg-amber-500/30 text-amber-500">
                    <i class="ti ti-hexagon-filled text-sm"></i>
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="md:col-span-1 col-span-2">
                    <div class="relative md:me-10 md:ms-0 ms-20">
                        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit p-5">
                            <h4 class="mb-1.5 text-base text-default-900 font-medium">Distribution of School Timetables.</h4>
                            <p class="mb-4 text-default-500"><small>22 July, 2023</small></p>
                            <p class="mb-4 text-default-500">Receive your personalized timetable for the academic year. Familiarize yourself with your class schedule, teachers, and classroom locations.</p>
                            <div class="mb-6 flex items-center md:justify-end gap-2">
                                <a href="javascript: void(0);">
                                    <img class="h-9 rounded" alt="" src="/images/small/small-1.png">
                                </a>
                                <a href="javascript: void(0);">
                                    <img class="h-9 rounded" alt="" src="/images/small/small-2.png">
                                </a>
                                <a href="javascript: void(0);">
                                    <img class="h-9 rounded" alt="" src="/images/small/small-3.png">
                                </a>
                            </div>
                            <a href="javascript: void(0);" class="py-2 px-4 rounded bg-default-100 text-sm text-default-900 hover:bg-default-200">🏆 94</a>
                        </div>
                        <div class="bg-white dark:bg-default-50 absolute h-4 w-4 rotate-45 rounded top-7 md:-end-2 md:start-auto -start-2 border-t border-e border-default-200"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-start">
            <div class="absolute start-10 md:start-1/2 -translate-x-1/2 rtl:translate-x-1/2 mt-6">
                <div class="w-6 h-6 flex justify-center items-center rounded-full bg-teal-500/30 text-teal-500">
                    <i class="ti ti-hexagon-filled text-sm"></i>
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="md:col-start-2 col-span-2">
                    <div class="relative md:ms-10 ms-20">
                        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit p-5">
                            <h4 class="mb-1.5 text-base text-default-900 font-medium">Mid-Term Examinations (Grades 6-12).</h4>
                            <p class="mb-4 text-default-500"><small>22 July, 2023</small></p>
                            <p class="mb-4 text-default-500">We would like to inform you about the upcoming Mid-Term Examinations scheduled for Grocery in Grades 6 through 12.</p>
                            <a href="javascript: void(0);" class="py-2 px-4 rounded bg-default-100 text-sm text-default-900 hover:bg-default-200">👍 1.4k</a>
                            <a href="javascript: void(0);" class="py-2 px-4 rounded bg-default-100 text-sm text-default-900 hover:bg-default-200">🎉 2k</a>
                        </div>
                        <div class="bg-white dark:bg-default-50 absolute h-4 w-4 rotate-45 rounded-sm top-7 -start-2 border-s border-b border-default-200"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="md:text-end text-start">
            <div class="absolute start-10 md:start-1/2 -translate-x-1/2 rtl:translate-x-1/2 mt-6">
                <div class="w-6 h-6 flex justify-center items-center rounded-full bg-primary/30 text-primary">
                    <i class="ti ti-hexagon-filled text-sm"></i>
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="md:col-span-1 col-span-2">
                    <div class="relative md:me-10 md:ms-0 ms-20">
                        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit p-5">
                            <h4 class="mb-1.5 text-base text-default-900 font-medium">Sports Day Practice Sessions Begin</h4>
                            <p class="mb-4 text-default-500"><small>22 July, 2023</small></p>
                            <p class="mb-4 text-default-500">Get ready to lace up your sports shoes and gear up for our much-anticipated Sports Day! We're thrilled to announce the commencement of practice sessions to prepare for this exciting event.</p>
                            <a href="javascript: void(0);" class="py-2 px-4 rounded bg-default-100 text-sm text-default-900 hover:bg-default-200">❤️ 89</a>
                        </div>
                        <div class="bg-white dark:bg-default-50 absolute h-4 w-4 rotate-45 rounded top-7 md:-end-2 md:start-auto -start-2 border-t border-e border-default-200"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="md:text-center">
            <h5 class="py-2 px-4 bg-default-200 text-default-900 dark:bg-default-100 inline rounded">
                Last Week
            </h5>
        </div>

        <div class="text-start">
            <div class="absolute start-10 md:start-1/2 -translate-x-1/2 rtl:translate-x-1/2 mt-6">
                <div class="w-6 h-6 flex justify-center items-center rounded-full bg-red-500/30 text-red-500">
                    <i class="ti ti-hexagon-filled text-sm"></i>
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="md:col-start-2 col-span-2">
                    <div class="relative md:ms-10 ms-20">
                        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit p-5">
                            <h4 class="mb-1.5 text-base text-default-900 font-medium">Festive Celebrations and Cultural Events</h4>
                            <p class="mb-4 text-default-500"><small>10 December, 2023</small></p>
                            <p class="mb-4 text-default-500">
                                Certainly! Here's an example of text announcing festive celebrations and cultural events:

                                🎉 Join Us for Festive Celebrations and Cultural Events! 🎊

                                Dear Grocery, Parents, and Staff,

                                It's time to embrace the spirit of joy and celebration as we prepare for an array of exciting festive and cultural events at ABC School.</p>
                            <div class="flex items-center">
                                <img src="/images/avatars/3.png" alt="Arya S" class="rounded-full me-3 h-8">
                                <div>
                                    <h5 class="mt-1.5 text-sm">
                                        Alex Smith <small>- School Head</small>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-default-50 absolute h-4 w-4 rotate-45 rounded-sm top-7 -start-2 border-s border-b border-default-200"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="md:text-end text-start">
            <div class="absolute start-10 md:start-1/2 -translate-x-1/2 rtl:translate-x-1/2 mt-6">
                <div class="w-6 h-6 flex justify-center items-center rounded-full bg-cyan-500/30 text-cyan-500">
                    <i class="ti ti-hexagon-filled text-sm"></i>
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="md:col-span-1 col-span-2">
                    <div class="relative md:me-10 md:ms-0 ms-20">
                        <div class="border border-default-200 rounded-lg bg-white dark:bg-default-50 h-fit p-5">
                            <h4 class="mb-1.5 text-base text-default-900 font-medium">Science and Art Exhibitions</h4>
                            <p class="mb-4 text-default-500"><small>05 May, 2023</small></p>
                            <p class="mb-4 text-default-500">Prepare to be amazed and inspired as ABC School gears up to host captivating Science and Art Exhibitions, showcasing the creativity and innovation of our talented Grocery.</p>
                            <a href="javascript: void(0);" class="py-2 px-4 rounded bg-default-100 text-sm text-default-900 hover:bg-default-200">🎉 10k</a>
                            <a href="javascript: void(0);" class="py-2 px-4 rounded bg-default-100 text-sm text-default-900 hover:bg-default-200">👍 3.2k</a>
                            <a href="javascript: void(0);" class="py-2 px-4 rounded bg-default-100 text-sm text-default-900 hover:bg-default-200">❤️ 7.1k</a>
                        </div>
                        <div class="bg-white dark:bg-default-50 absolute h-4 w-4 rotate-45 rounded top-7 md:-end-2 md:start-auto -start-2 border-t border-e border-default-200"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
