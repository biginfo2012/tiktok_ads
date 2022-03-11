<x-guest-layout>
    <div data-v-3a55e4f4="" class="reg__wrapper">
        <div data-v-3a55e4f4="" class="reg__container flex">
            <div data-v-3a55e4f4="" class="reg__right-pannel flex-1 w-full text-center">
                <div data-v-3a55e4f4="" class="commmon-form">
                    <div data-v-3a55e4f4="" class="form-title">
                        <p data-v-3a55e4f4="" class="title"> 登録 </p>
                    </div>
                    <div data-v-3a55e4f4="" class="form-main">
                        <form data-v-3a55e4f4="" class="el-form el-form--label-top" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div data-v-3a55e4f4="" class="el-form-item form-item-company is-no-asterisk">
                                <label for="company" class="el-form-item__label">名前*</label>
                                <div class="el-form-item__content">
                                    <div data-v-3a55e4f4="" class="el-input"><!---->
                                        <input type="text" autocomplete="off" placeholder="名前を入力してください" class="el-input__inner"
                                               name="name" required>
                                        <!----><!----><!----><!---->
                                    </div><!---->
                                </div>
                            </div><!---->
                            <div data-v-3a55e4f4="" class="el-form-item is-success is-required is-no-asterisk"><label
                                    for="email" class="el-form-item__label">メールアドレス*</label>
                                <div class="el-form-item__content">
                                    <p data-v-3a55e4f4="" class="text-input-type type-email isEn"></p>
                                    <div data-v-3a55e4f4="" class="el-input"><!---->
                                        <input type="email" autocomplete="off" placeholder="メールアドレスを入力してください" class="el-input__inner"
                                            name="email" required>
                                        <!----><!----><!----><!----></div>
                                </div>
                            </div>
                            <div data-v-3a55e4f4="" class="el-form-item form-item-password is-success is-required is-no-asterisk"><label
                                    for="password" class="el-form-item__label">パスワード*</label>
                                <div class="el-form-item__content">
                                    <p data-v-3a55e4f4="" class="text-input-type type-password isEn"></p>
                                    <div data-v-3a55e4f4="" class="el-input"><!---->
                                        <input type="password" autocomplete="off" placeholder="パスワードを入力してください" class="el-input__inner"
                                            name="password" minlength="8" required>
                                        <!----><!----><!----><!---->
                                    </div>
                                </div>
                            </div>
                            <div data-v-3a55e4f4="" class="el-form-item form-item-password is-success is-required is-no-asterisk">
                                <label for="password" class="el-form-item__label">パスワードの確認*</label>
                                <div class="el-form-item__content">
                                    <p data-v-3a55e4f4="" class="text-input-type type-password isEn"></p>
                                    <div data-v-3a55e4f4="" class="el-input"><!---->
                                        <input type="password" autocomplete="off" placeholder="確認パスワードを入力してください" class="el-input__inner"
                                               name="password_confirmation" minlength="8" required>
                                        <!----><!----><!----><!---->
                                    </div>
{{--                                    <span data-v-3a55e4f4="" class="btn-password-set">--}}
{{--                                        <svg data-v-7e6c6234="" data-v-3a55e4f4="" aria-hidden="true" class="svg-icon">--}}
{{--                                            <use data-v-7e6c6234="" xlink:href="#icon-eye_close"></use>--}}
{{--                                        </svg>--}}
{{--                                        <span data-v-3a55e4f4="">Show password</span>--}}
{{--                                    </span><!---->--}}
                                </div>
                            </div>

                            <button data-v-3a55e4f4="" type="submit" class="el-button button-lg el-button--primary">
                                マイアカウントの作成
                            </button>
                        </form>
                    </div>
                    <div data-v-3a55e4f4="" class="text-sub2">
                        <span data-v-3a55e4f4="" class="text">既にアカウントをお持ちですか?</span>
                        <a data-v-3a55e4f4="" href="{{route('login')}}" class="">
                            <button data-v-3a55e4f4="" type="button" class="el-button link el-button--text"><!---->
                                <!----><span>ログイン</span>
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
