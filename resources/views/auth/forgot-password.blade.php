<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
        </x-slot>

        <div class="mb-4 text-sm text-gray-600 pt-6">
            {{ __('パスワードをお忘れですか? 問題ない Eメールアドレスをお知らせいただければ、新しいパスワードを選択できるパスワードリセットリンクをEメールでお送りします。') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
                <div data-v-1999854e="" class="el-form-item is-success is-required is-no-asterisk">
                    <label for="email" class="el-form-item__label">メールアドレス</label>
                    <div class="el-form-item__content">
                        <div data-v-1999854e="" class="el-input"><!---->
                            <input autocomplete="off" placeholder="メールアドレスを入力してください" class="el-input__inner"
                                   type="email" name="email" required autofocus>
                            <!----><!----><!----><!---->
                        </div><!---->
                    </div>
                </div>
{{--            <div class="mt-4">--}}
{{--                <label>メール</label>--}}
{{--                <input type="email" name="email" required>--}}
{{--            </div>--}}

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('メールパスワードリセットリンク') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
