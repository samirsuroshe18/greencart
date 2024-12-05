@include('layouts.shared/main')

<head>
    @include('layouts.shared/title-meta')

    @include('layouts.shared/head-css')
</head>

<body>
<section
    class="sm:p-10 p-6 flex items-center lg:justify-start justify-center relative bg-no-repeat bg-cover min-h-screen bg-[url(/images/banner/banner-11.jpg)]">
    <div
        class="max-w-lg w-full xl:me-auto rounded-xl bg-white/80 backdrop-blur-2xl sm:p-10 p-6 h-full flex flex-col dark:bg-default-50/60 border-t-4 border-primary">
        <a href="{{ route('any',['index']) }}" class="block mb-10">
            <img class="h-10 block dark:hidden" src="/images/logo-dark.png" alt="">
            <img class="h-10 hidden dark:block" src="/images/logo.png" alt="">
        </a>
        <div class="my-auto">
            <div class="max-w-xl mx-auto">
                <h4 class="text-default-900 text-2xl font-semibold mb-2">Login</h4>
                <p class="text-default-600">Glad to see you're back! Please enter your credentials to Enter</p>
            </div>
            <form method="POST" action="{{ route('login') }}" class="shrink mt-10">
                @csrf

                @if (sizeof($errors) > 0)
                    @foreach ($errors->all() as $error)
                        <p class="text-red-500 mb-3">{{ $error }}</p>
                    @endforeach
                @endif
                <div class="mb-4">
                    <label for="LogInEmailAddress" class="block text-base/normal font-semibold text-default-800 mb-2">Email
                        address</label>
                    <input data-x-field="email" name="email"
                           class="block w-full rounded-md py-2.5 px-4 bg-transparent border-default-400/40 text-default-900 focus:outline-0 focus:ring-0"
                           type="email" id="LogInEmailAddress" placeholder="Enter your email" value="user@demo.com">
                    <span data-x-field-error="email" class="text-red-500 mt-1 block"></span>
                </div>
                <!-- end email input -->
                <div class="mb-4">
                    <label for="password"
                           class="block text-base/normal font-semibold text-default-800 mb-2">Password</label>
                    <div class="flex" data-x-password="">
                        <input data-x-field="password" name="password" value="password" type="password"
                               id="form-password"
                               class="form-password text-default-900 block w-full rounded-s-md py-2.5 px-4 bg-transparent border border-default-400/40 focus:ring-transparent"
                               placeholder="Enter your password">
                        <button type="button" id="password-addon"
                                class="password-toggle inline-flex items-center justify-center py-2.5 px-4 border rounded-e-md bg-transparent -ms-px border-default-400/40">
                            <i class="ti ti-eye password-eye-on text-xl text-default-900"></i>
                            <i class="ti ti-eye-off password-eye-off text-xl text-default-900 hidden"></i>
                        </button>
                    </div>
                    <span data-x-field-error="password" class="text-red-500 mt-1 block"></span>
                </div>
                <!-- end password input -->
                <div class="flex justify-between items-center flex-wrap gap-x-1 gap-y-2 mb-5">
                    <div class="inline-flex items-center">
                        <input type="checkbox"
                               class="h-4 w-4 rounded border-default-400/80 bg-transparent text-primary focus:border-primary focus:ring focus:ring-primary/60 focus:ring-offset-0"
                               id="checkbox-signin">
                        <label class="text-base/none ms-2 text-default-800 align-middle select-none"
                               for="checkbox-signin">Remember me</label>
                    </div>
                    <a href="{{ route('second', ['auth', 'recoverpw']) }}"
                       class="text-default-800 border-b border-dashed border-default-400/80"><small>Forgot your
                            password?</small></a>
                </div>
                <!-- end checkbox input -->
                <div class="mb-6">
                    <button type="submit"
                            class="w-full relative inline-flex items-center justify-center px-6 py-2.5 rounded-md text-base bg-primary text-white capitalize transition-all duration-200 hover:bg-primary-600 font-medium">
                        Log In
                    </button>
                </div>
            </form>
            <div class="flex items-center my-4">
                <div class="flex-auto mt-px border-t border-dashed border-default-400/80"></div>
                <div class="mx-4 text-default-600">Or</div>
                <div class="flex-auto mt-px border-t border-dashed border-default-400/80"></div>
            </div>
            <h2 class="text-xl text-center font-semibold text-default-950 my-6">Continue with</h2>
            <div class="flex items-center justify-center gap-2">
                <a href="javascript:void(0);" target="_blank"
                   class="h-12 w-12 inline-flex items-center justify-center bg-white/20 backdrop-blur-xl rounded-2xl transition-all duration-500 group text-default-900 hover:bg-primary/30 hover:text-primary"><i
                        class="ti ti-brand-facebook text-xl"></i></a>
                <a href="javascript:void(0);" target="_blank"
                   class="h-12 w-12 inline-flex items-center justify-center bg-white/20 backdrop-blur-xl rounded-2xl transition-all duration-500 group text-default-900 hover:bg-primary/30 hover:text-primary"><i
                        class="ti ti-brand-x text-xl"></i></a>
                <a href="javascript:void(0);" target="_blank"
                   class="h-12 w-12 inline-flex items-center justify-center bg-white/20 backdrop-blur-xl rounded-2xl transition-all duration-500 group text-default-900 hover:bg-primary/30 hover:text-primary"><i
                        class="ti ti-brand-instagram text-xl"></i></a>
                <a href="javascript:void(0);" target="_blank"
                   class="h-12 w-12 inline-flex items-center justify-center bg-white/20 backdrop-blur-xl rounded-2xl transition-all duration-500 group text-default-900 hover:bg-primary/30 hover:text-primary"><i
                        class="ti ti-brand-github text-xl"></i></a>
            </div>
        </div>
        <p class="shrink text-default-600 font-medium text-center mt-4">Don't have an account? <a
                href="{{ route('second', ['auth', 'register']) }}" class="text-primary font-semibold ms-1">Register</a>
        </p>
    </div>
</section>


@include('layouts.shared/footer-scripts')

@include('layouts.shared/theme-mode')

@section('script')
    @vite(['resources/js/auth.js'])
@endsection

</body>

</html>
