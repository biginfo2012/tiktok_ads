<x-guest-layout>
    <div data-v-3a55e4f4="" class="reg__wrapper">
        <div data-v-3a55e4f4="" class="reg__container flex">
            <div data-v-3a55e4f4="" class="reg__right-pannel flex-1 w-full text-center">
                <div data-v-3a55e4f4="" class="commmon-form">
                    <div data-v-3a55e4f4="" class="form-title">
                        <p data-v-3a55e4f4="" class="title"> Sign Up </p>
                        <p data-v-3a55e4f4="" class="desc"> Quick and easy registration to quickly find the most popular
                            TikTok ads and products </p>
                    </div>
                    <div data-v-3a55e4f4="" class="form-main">
                        <form data-v-3a55e4f4="" class="el-form el-form--label-top" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div data-v-3a55e4f4="" class="el-form-item is-error is-required is-no-asterisk"><label
                                    for="email" class="el-form-item__label">Email</label>
                                <div class="el-form-item__content">
                                    <p data-v-3a55e4f4="" class="text-input-type type-email isEn"> (Required) </p>
                                    <div data-v-3a55e4f4="" class="el-input"><!---->
                                        <input type="email" autocomplete="off" placeholder="Please enter your email address" class="el-input__inner"
                                            name="email" required>
                                        <!----><!----><!----><!----></div>
                                </div>
                            </div>
                            <div data-v-3a55e4f4="" class="el-form-item form-item-password is-success is-required is-no-asterisk"><label
                                    for="password" class="el-form-item__label">Password</label>
                                <div class="el-form-item__content">
                                    <p data-v-3a55e4f4="" class="text-input-type type-password isEn"> (Required) </p>
                                    <div data-v-3a55e4f4="" class="el-input"><!---->
                                        <input type="password" autocomplete="off" placeholder="Please enter your password" class="el-input__inner"
                                            name="password" required>
                                        <!----><!----><!----><!----></div>
                                    <span data-v-3a55e4f4="" class="btn-password-set">
                                        <svg data-v-7e6c6234="" data-v-3a55e4f4="" aria-hidden="true" class="svg-icon">
                                            <use data-v-7e6c6234="" xlink:href="#icon-eye_close"></use>
                                        </svg>
                                        <span data-v-3a55e4f4="">Show password</span>
                                    </span><!---->
                                </div>
                            </div>
                            <div data-v-3a55e4f4="" class="el-form-item form-item-company is-no-asterisk">
                                <label for="company" class="el-form-item__label">Company</label>
                                <div class="el-form-item__content">
                                    <p data-v-3a55e4f4="" class="text-input-type isEn"> (Required) </p>
                                    <div data-v-3a55e4f4="" class="el-input"><!---->
                                        <input type="text" autocomplete="off" placeholder="Please enter your company name" class="el-input__inner"
                                            name="name" required>
                                        <!----><!----><!----><!---->
                                    </div><!---->
                                </div>
                            </div><!---->
                            <button data-v-3a55e4f4="" type="button" class="el-button button-lg el-button--primary"><!---->
                                <!----><span>Create My Account</span>
                            </button>
                        </form>
                    </div>
                    <div data-v-3a55e4f4="" class="text-sub2">
                        <span data-v-3a55e4f4="" class="text">Already have an account?</span>
                        <a data-v-3a55e4f4="" href="{{route('login')}}" class="">
                            <button data-v-3a55e4f4="" type="button" class="el-button link el-button--text"><!---->
                                <!----><span> Login Now</span>
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
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500"/>--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors"/>--}}

{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--        @csrf--}}

{{--        <!-- Name -->--}}
{{--            <div>--}}
{{--                <x-label for="name" :value="__('Name')"/>--}}

{{--                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required--}}
{{--                         autofocus/>--}}
{{--            </div>--}}

{{--            <!-- Email Address -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="email" :value="__('Email')"/>--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required/>--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')"/>--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                         type="password"--}}
{{--                         name="password"--}}
{{--                         required autocomplete="new-password"/>--}}
{{--            </div>--}}

{{--            <!-- Confirm Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password_confirmation" :value="__('Confirm Password')"/>--}}

{{--                <x-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                         type="password"--}}
{{--                         name="password_confirmation" required/>--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--                </a>--}}

{{--                <x-button class="ml-4">--}}
{{--                    {{ __('Register') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
</x-guest-layout>
