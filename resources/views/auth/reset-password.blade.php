@include('layouts.shared/main')

<head>
    @include('layouts.shared/title-meta')

    @include('layouts.shared/head-css')
</head>


<body>
    <section class="sm:p-10 p-6 flex items-center lg:justify-start justify-center relative bg-no-repeat bg-cover min-h-screen bg-[url(/images/banner/banner-11.jpg)]">
        <div class="max-w-lg w-full xl:me-auto rounded-xl bg-white/80 backdrop-blur-2xl sm:p-10 p-6 h-full flex flex-col dark:bg-default-50/60 border-t-4 border-primary">
            <a href="{{ route('any', ['index']) }}" class="block mb-10">
                <img class="h-10 block dark:hidden" src="/images/logo-dark.png" alt="">
                <img class="h-10 hidden dark:block" src="/images/logo.png" alt="">
            </a>
            <div class="my-auto">
                <div class="max-w-xl mx-auto">
                    <h4 class="text-default-900 text-2xl font-semibold mb-2">Forgot Password</h4>
                    <p class="text-default-600">Enter your email address and we'll send you an email with instructions to reset your password.</p>
                </div>
                <form action="#" class="shrink mt-10">
                    <div class="mb-4">
                        <label for="LogInEmailAddress" class="block text-base/normal font-semibold text-default-800 mb-2">Email address</label>
                        <input class="block w-full rounded-md py-2.5 px-4 bg-transparent border-default-400/40 text-default-900 focus:outline-0 focus:ring-0" type="email" id="LogInEmailAddress" placeholder="Enter your email" value="user@demo.com">
                    </div>
                    <!-- end email input -->

                    <div class="flex flex-col justify-center gap-4 mb-6">
                        <a href="{{ route('second',['auth', 'reset-password']) }}" class="relative inline-flex items-center justify-center px-6 py-2.5 rounded-md text-base font-medium bg-primary text-white capitalize transition-all hover:bg-primary-700 w-full">Reset Password</a>
                        <a href="{{ route('second', ['auth', 'login']) }}" class="relative inline-flex items-center justify-center px-6 py-2.5 rounded-md text-base font-medium border border-primary text-primary capitalize transition-all hover:bg-primary hover:text-white w-full">Go to Login</a>
                    </div>
                </form>
                <div class="flex items-center my-4">
                    <div class="flex-auto mt-px border-t border-dashed border-default-400/80"></div>
                    <div class="mx-4 text-default-600">Or</div>
                    <div class="flex-auto mt-px border-t border-dashed border-default-400/80"></div>
                </div>
                <h2 class="text-xl text-center font-semibold text-default-950 my-6">Continue with</h2>
                <div class="flex items-center justify-center gap-2">
                    <a href="javascript:void(0);" target="_blank" class="h-12 w-12 inline-flex items-center justify-center bg-white/20 backdrop-blur-xl rounded-2xl transition-all duration-500 group text-default-900 hover:bg-primary/30 hover:text-primary"><i class="ti ti-brand-facebook text-xl"></i></a>
                    <a href="javascript:void(0);" target="_blank" class="h-12 w-12 inline-flex items-center justify-center bg-white/20 backdrop-blur-xl rounded-2xl transition-all duration-500 group text-default-900 hover:bg-primary/30 hover:text-primary"><i class="ti ti-brand-x text-xl"></i></a>
                    <a href="javascript:void(0);" target="_blank" class="h-12 w-12 inline-flex items-center justify-center bg-white/20 backdrop-blur-xl rounded-2xl transition-all duration-500 group text-default-900 hover:bg-primary/30 hover:text-primary"><i class="ti ti-brand-instagram text-xl"></i></a>
                    <a href="javascript:void(0);" target="_blank" class="h-12 w-12 inline-flex items-center justify-center bg-white/20 backdrop-blur-xl rounded-2xl transition-all duration-500 group text-default-900 hover:bg-primary/30 hover:text-primary"><i class="ti ti-brand-github text-xl"></i></a>
                </div>
            </div>
            <p class="shrink text-default-600 font-medium text-center mt-4">Already have an account ?<a href="{{ route('second', ['auth', 'login']) }}" class="text-primary ms-1"><b>Login</a></p>
        </div>
    </section>

    @include('layouts.shared/footer-scripts')

    @include('layouts.shared/theme-mode')

    @vite(['resources/js/auth.js'])
</body>