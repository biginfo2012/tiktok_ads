<x-guest-layout>

    <div data-v-1999854e="" class="login__wrapper">
        <div data-v-1999854e="" class="login__container flex">
            <div data-v-1999854e="" class="login__right-pannel flex-1 w-full text-center" style="padding: ">
                <div data-v-1999854e="" class="commmon-form">
                    <div data-v-1999854e="" class="form-title"><p data-v-1999854e="" class="title"> Login </p>
                        <p data-v-1999854e="" class="desc"> Welcome </p></div>
                    <div data-v-1999854e="" class="form-main">
                        <form data-v-1999854e="" class="el-form el-form--label-top" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div data-v-1999854e="" class="el-form-item is-success is-required is-no-asterisk">
                                <label for="email" class="el-form-item__label">Email</label>
                                <div class="el-form-item__content">
                                    <div data-v-1999854e="" class="el-input"><!---->
                                        <input autocomplete="off" placeholder="Please enter your email address" class="el-input__inner"
                                               type="email" name="email" required autofocus>
                                        <!----><!----><!----><!---->
                                    </div><!---->
                                </div>
                            </div>
                            <div data-v-1999854e=""
                                 class="el-form-item form-item-password is-success is-required is-no-asterisk">
                                <label for="password" class="el-form-item__label">Password</label>
                                <div class="el-form-item__content">
                                    <div data-v-1999854e="" class="el-input"><!---->
                                        <input type="password" autocomplete="off" placeholder="Please enter your password" class="el-input__inner"
                                               name="password" required>
                                        <!----><!----><!----><!----></div>
{{--                                    <span data-v-1999854e="" class="btn-password-set">--}}
{{--                                        <svg data-v-7e6c6234="" data-v-1999854e="" aria-hidden="true" class="svg-icon">--}}
{{--                                            <use data-v-7e6c6234="" xlink:href="#icon-eye_close"></use>--}}
{{--                                        </svg>--}}
{{--                                        <span data-v-1999854e="">Show password</span>--}}
{{--                                    </span>--}}
{{--                                    <a data-v-1999854e="" href="/find-password" class="btn-forget-password">--}}
{{--                                        Forgot your password? </a><!---->--}}
                                </div>
                            </div>
                            <button data-v-1999854e="" type="submit" class="el-button button-lg el-button--primary">
                                Sign In
                            </button>
                        </form>
                    </div>

                    <div data-v-1999854e="" class="text-sub">
                        <span data-v-1999854e="" class="text">Don't have an account yet?</span>
                        <a data-v-1999854e="" href="{{ route('register') }}" class="">
                            <button data-v-1999854e="" type="button" class="el-button link el-button--text"><!---->
                                <!----><span> Sign Up</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Session Status -->--}}
{{--        <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form method="POST" action="{{ route('login') }}">--}}
{{--            @csrf--}}

{{--            <!-- Email Address -->--}}
{{--            <div>--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password"--}}
{{--                                required autocomplete="current-password" />--}}
{{--            </div>--}}

{{--            <!-- Remember Me -->--}}
{{--            <div class="block mt-4">--}}
{{--                <label for="remember_me" class="inline-flex items-center">--}}
{{--                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">--}}
{{--                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                @if (Route::has('password.request'))--}}
{{--                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">--}}
{{--                        {{ __('Forgot your password?') }}--}}
{{--                    </a>--}}
{{--                @endif--}}

{{--                <x-button class="ml-3">--}}
{{--                    {{ __('Log in') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
</x-guest-layout>
