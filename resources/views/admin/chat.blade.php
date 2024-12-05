@extends('layouts.admin')

@section('content')

<div class="p-6 space-y-6">

    @include('layouts.shared/admin-page-title', ['subtitle' => 'Apps', 'title' => 'Chat'])

    <div class="grid xl:grid-cols-4 gap-4">
        <!-- Chat List -->
        <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 overflow-hidden">
            <div class="px-6 py-4 border-b border-default-200">
                <h6 class="text-lg font-medium text-default-900">Contacts</h6>
            </div>
            <div class="divide-y divide-default-200 h-[calc(100vh-320px)] overflow-y-auto
              [&::-webkit-scrollbar]:w-1
              [&::-webkit-scrollbar-track]:bg-transparent
              [&::-webkit-scrollbar-thumb]:rounded-full
              [&::-webkit-scrollbar-thumb]:bg-default-300">
                <div>
                    <div class="flex items-center gap-3 py-3 px-4">
                        <img src="/images/avatars/2.png" class="rounded-full h-10" alt="Donald Good">
                        <div class="w-full">
                            <div class="flex justify-between">
                                <h6 class="text-default-900 font-medium">Donald Good</h6>
                                <small class="text-default-400">4:30am</small>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-light text-default-400">How are you today?</span>
                                <span class=""><span class="px-1 py-0.5 text-xs rounded-full bg-red-500/25 text-red-500">3</span></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center gap-3 py-3 px-4">
                        <img src="/images/avatars/4.png" class="rounded-full h-10" alt="Carl Myrick">
                        <div class="w-full">
                            <div class="flex justify-between">
                                <h6 class="text-default-900 font-medium">Carl Myrick</h6>
                                <small class="text-default-400">4:30am</small>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-light text-default-400">We can play game Today?</span>
                                <span class=""><span class="px-1 py-0.5 text-xs rounded-full bg-red-500/25 text-red-500">3</span></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center gap-2 py-3 px-4 bg-default-100 border-default-200">
                        <img src="/images/avatars/5.png" class="rounded-full h-10" alt="Kenneth Larkin">
                        <div class="w-full">
                            <div class="flex justify-between">
                                <h6 class="text-default-900 font-medium">Kenneth Larkin</h6>
                                <small class="text-default-400">5:30am</small>
                            </div>
                            <span class="font-light text-default-400">typing...</span>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center gap-3 py-3 px-4">
                        <img src="/images/avatars/7.png" class="rounded-full h-10" alt="Esther Storey">
                        <div class="w-full">
                            <div class="flex justify-between">
                                <h6 class="text-default-900 font-medium">Esther Storey</h6>
                                <small class="text-default-400">Thu</small>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-light text-default-400">Are we going to have planning meeting today?</span>
                                <span class=""><span class="px-1 py-0.5 text-xs rounded-full bg-red-500/25 text-red-500">2</span></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center gap-3 py-3 px-4">
                        <img src="/images/avatars/6.png" class="rounded-full h-10" alt="Samatha Stevens">
                        <div class="w-full">
                            <div class="flex justify-between">
                                <h6 class="text-default-900 font-medium">Samatha Stevens</h6>
                                <small class="text-default-400">Wed</small>
                            </div>
                            <span class="font-light text-default-400">Please check these design assets...</span>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center gap-3 py-3 px-4">
                        <img src="/images/avatars/3.png" class="rounded-full h-10" alt="Isidro Lowe">
                        <div class="w-full">
                            <div class="flex justify-between">
                                <h6 class="text-default-900 font-medium">Isidro Lowe</h6>
                                <small class="text-default-400">Tue</small>
                            </div>
                            <span class="font-light text-default-400">I something have awesome...</span>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center gap-3 py-3 px-4">
                        <img src="/images/avatars/6.png" class="rounded-full h-10" alt="Joseph Reeder">
                        <div class="w-full">
                            <div class="flex justify-between">
                                <h6 class="text-default-900 font-medium">Joseph Reeder</h6>
                                <small class="text-default-400">Tue</small>
                            </div>
                            <span class="font-light text-default-400">You and Tony Meet Today...</span>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center gap-3 py-3 px-4">
                        <img src="/images/avatars/8.png" class="rounded-full h-10" alt="Brandi Brummett">
                        <div class="w-full">
                            <div class="flex justify-between">
                                <h6 class="text-default-900 font-medium">Brandi Brummett</h6>
                                <small class="text-default-400">Tue</small>
                            </div>
                            <span class="font-light text-default-400">Howdy?</span>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="flex items-center gap-3 py-3 px-4">
                        <img src="/images/avatars/4.png" class="rounded-full h-10" alt="Brian Rule">
                        <div class="w-full">
                            <div class="flex justify-between">
                                <h6 class="text-default-900 font-medium">Brian Rule</h6>
                                <small class="text-default-400">Mon</small>
                            </div>
                            <span class="font-light text-default-400">Are you interested in learning?</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chat Conversation -->
        <div class="xl:col-span-3">
            <div class="rounded-lg border border-default-200 bg-white dark:bg-default-50 w-full overflow-hidden">

                <div class="py-3 px-6 border-b border-default-200">
                    <div class="flex flex-wrap items-center justify-between gap-3 py-1.5">
                        <div class="sm:w-7/12">
                            <div class="flex items-center gap-2">
                                <img src="/images/avatars/5.png" class="me-2 rounded-full h-9" alt="Donald Good">
                                <div>
                                    <h5 class="text-base font-medium text-default-700">Kenneth Larkin</h5>
                                    <p class="mt-1.5 text-default-400 text-xs flex items-center">
                                        <small class="ti ti-circle-filled text-red-400 me-1"></small> Offline
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="w-auto">
                            <a href="javascript: void(0);" class="p-1.5 inline-block">
                                <i class="ti ti-phone text-xl text-default-900"></i>
                            </a>
                            <a href="javascript: void(0);" class="p-1.5 inline-block">
                                <i class="ti ti-video-camera text-xl text-default-900"></i>
                            </a>
                            <a href="javascript: void(0);" class="p-1.5 inline-block">
                                <i class="ti ti-users text-xl text-default-900"></i>
                            </a>
                            <a href="javascript: void(0);" class="p-1.5 inline-block">
                                <i class="ti ti-trash text-xl text-default-900"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="p-6 h-[calc(100vh-430px)] overflow-y-auto
                  [&::-webkit-scrollbar]:w-1
                  [&::-webkit-scrollbar-track]:bg-transparent
                  [&::-webkit-scrollbar-thumb]:rounded-full
                  [&::-webkit-scrollbar-thumb]:bg-default-300">
                    <div class="space-y-4">
                        <!-- Chat Left -->
                        <div class="flex items-end text-start gap-3 group">
                            <div class="text-center">
                                <img src="/images/avatars/5.png" class="rounded-md h-8" />
                                <p class="text-xs pt-0.5">10:00</p>
                            </div>

                            <div class="w-4/5 bg-default-100 p-3 rounded">
                                <p class="text-sm font-medium relative text-default-800">Kenneth L</p>
                                <p class="pt-1">Hello!</p>
                            </div>
                        </div>

                        <!-- Chat Right -->
                        <div class="flex flex-row-reverse items-end text-end gap-3 group">
                            <div class="text-center">
                                <img src="/images/avatars/1.png" class="rounded-md h-8" />
                                <p class="text-xs pt-0.5">10:01</p>
                            </div>

                            <div class="w-4/5 bg-primary p-3 rounded">
                                <p class="block text-xs font-bold text-white relative">Misty M</p>
                                <p class="pt-1 text-white/90">
                                    Hi, How are you? What about our next meeting?
                                </p>
                            </div>
                        </div>

                        <!-- Chat Left -->
                        <div class="flex items-end text-start gap-3 group">
                            <div class="text-center">
                                <img src="/images/avatars/5.png" class="rounded-md h-8" />
                                <p class="text-xs pt-0.5">10:01</p>
                            </div>

                            <div class="w-4/5 bg-default-100 p-3 rounded">
                                <p class="block text-sm font-medium relative text-default-800">Kenneth L</p>
                                <p class="pt-1">
                                    Yeah everything is fine
                                </p>
                            </div>
                        </div>

                        <!-- Chat Right -->
                        <div class="flex flex-row-reverse items-end text-end gap-3 group">
                            <div class="text-center">
                                <img src="/images/avatars/1.png" class="rounded-md h-8" />
                                <p class="text-xs pt-0.5">10:02</p>
                            </div>

                            <div class="w-4/5 bg-primary p-3 rounded">
                                <p class="block text-xs font-bold text-white relative">Misty M</p>
                                <p class="pt-1 text-white/90">
                                    Wow that's great
                                </p>
                            </div>
                        </div>

                        <!-- Chat Left -->
                        <div class="flex items-end text-start gap-3 group">
                            <div class="text-center">
                                <img src="/images/avatars/5.png" class="rounded-md h-8" />
                                <p class="text-xs pt-0.5">10:02</p>
                            </div>

                            <div class="w-4/5 bg-default-100 p-3 rounded">
                                <p class="block text-sm font-medium relative text-default-800">Kenneth L</p>
                                <p class="pt-1">
                                    Let's have it today if you are free
                                </p>
                            </div>
                        </div>

                        <!-- Chat Right -->
                        <div class="flex flex-row-reverse items-end text-end gap-3 group">
                            <div class="text-center">
                                <img src="/images/avatars/1.png" class="rounded-md h-8" />
                                <p class="text-xs pt-0.5">10:03</p>
                            </div>

                            <div class="w-4/5 bg-primary p-3 rounded">
                                <p class="block text-xs font-bold text-white relative">Misty M</p>
                                <p class="pt-1 text-white/90">
                                    Sure thing! let me know if 2pm works for you
                                </p>
                            </div>
                        </div>

                        <!-- Chat Left -->
                        <div class="flex items-end text-start gap-3 group">
                            <div class="text-center">
                                <img src="/images/avatars/5.png" class="rounded-md h-8" />
                                <p class="text-xs pt-0.5">10:04</p>
                            </div>

                            <div class="w-4/5 bg-default-100 p-3 rounded">
                                <p class="block text-sm font-medium relative text-default-800">Kenneth L</p>
                                <p class="pt-1">
                                    Sorry, I have another meeting scheduled at 2pm. Can we have it at 3pm instead?
                                </p>
                            </div>
                        </div>

                        <!-- Chat Left -->
                        <div class="flex items-end text-start gap-3 group">
                            <div class="text-center">
                                <img src="/images/avatars/5.png" class="rounded-md h-8" />
                                <p class="text-xs pt-0.5">10:04</p>
                            </div>

                            <div class="w-4/5 bg-default-100 p-3 rounded">
                                <p class="block text-sm font-medium relative text-default-800">Kenneth L</p>
                                <p class="pt-1">
                                    We can also discuss about the presentation talk format if you have some extra mins
                                </p>
                            </div>
                        </div>

                        <!-- Chat Right -->
                        <div class="flex flex-row-reverse items-end text-end gap-3 group">
                            <div class="text-center">
                                <img src="/images/avatars/1.png" class="rounded-md h-8" />
                                <p class="text-xs pt-0.5">10:05</p>
                            </div>

                            <div class="w-4/5">
                                <div class="bg-primary p-3 rounded">
                                    <p class="block text-xs font-bold text-white relative">Misty M</p>
                                    <p class="pt-1 text-white/90">
                                        3pm it is. Sure, let's discuss about presentation format, it would be great to finalize today. I am attaching the last year format and assets here...
                                    </p>
                                </div>
                                <div class="border border-default-200 rounded mt-3">
                                    <div class="p-3">
                                        <div class="flex items-center justify-between gap-3">
                                            <div class="flex items-center gap-3">
                                                <div class="w-12 h-12">
                                                    <span class="inline-flex items-center justify-center h-full w-full bg-primary text-white rounded">
                                                        .ZIP
                                                    </span>
                                                </div>
                                                <div class="text-start text-default-400">
                                                    <a href="javascript:void(0);" class="text-sm font-bold">sketch.zip</a>
                                                    <p class="text-sm">2.3 MB</p>
                                                </div>
                                            </div>
                                            <a href="javascript:void(0);" class="btn !text-xl">
                                                <i class="ti ti-download"></i>
                                            </a>
                                        </div> <!-- end flex -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white border-t border-default-200 dark:bg-default-50 p-6">
                    <form name="chat-form" class="flex items-center gap-2">
                        <input type="text" class="form-input w-full border-none bg-default-100 text-default-900 rounded placeholder:text-default-600 focus:ring-primary " placeholder="Enter your text" required />
                        <div class="w-auto flex gap-1">
                            <a href="#" class="px-3 py-2 rounded bg-default-200 text-default-800 hover:bg-default-800/20"><i class="ti ti-paperclip"></i></a>
                            <button class="px-3 py-2 inline-flex items-center justify-center gap-2 bg-primary text-white rounded transition-all duration-300 hover:bg-primary-600">Send <i class="ti ti-send"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection