<x-guest-layout>
    <div data-v-3a55e4f4="" class="reg__wrapper">
        <div data-v-3a55e4f4="" class="reg__container flex">
            <div data-v-3a55e4f4="" class="reg__right-pannel flex-1 w-full text-center">
                <div data-v-3a55e4f4="" class="commmon-form">
                    <div data-v-3a55e4f4="" class="form-title">
                        <p data-v-3a55e4f4="" class="title"> 登録 </p>
                    </div>
                    <p class="mt-4" style="margin-top: 30px; font-size: 18px">支払金額       　11,000円/月（税込）<br><br>

                        毎月1日に自動支払われます。<br>
                        支払い完了後にサービス開始になります。<br><br>

                        <label style="font-size: 14px">
                            注意事項：途中解約の際でも分割日数などの返金は一切ございませんのでご了承ください。<br>
                            決済と同時に当サービスのサブスプリクションに同意したことを了承したこととします。
                        </label>

                    </p>
                    <div data-v-3a55e4f4="" class="form-main" style="margin-top: 15px">
                        <div data-v-13cd94f9="" data-v-3de391ff="" class="">
                            <label for="password" class="el-form-item__label">支払情報*</label>
                            <div data-v-13cd94f9="" class="wrap">
                                <div data-v-13cd94f9="" class="">
                                    <div data-v-13cd94f9="" class="">
                                        <div class="log mb-5">
                                            @if(session('error'))
                                                <h5 class="text-center mb-0" style="color: red">カード情報をもう一度ご確認ください。</h5>
                                            @endif
                                            @if(session('payment_success'))
                                                <h5 class="text-center mb-0" style="color: #00ff0d">決済に成功しました。<br></h5>
                                            @endif
                                        </div>
                                        <div class="row payment">
                                            <div class="col-lg-12">
                                                <form action="{{route('pay')}}" method="post" id="payment-form">
                                                    @csrf
                                                    <input type="hidden" name="user_id" value="{{$id}}">
                                                    <h3 class="text-center pricing text-white"></h3>
                                                    <div style="padding: 20px">
                                                        <div class="form-group">
                                                            <div id="card-element" class="w-100 card-element"></div>

                                                            <div id="card-errors" class="error" role="alert" style="color: red"></div>
                                                        </div>
                                                        <input type="hidden" id="price" name="price" value="1000">
                                                        <div class="button-group d-flex align-items-center justify-content-between mt-4">
                                                            <button type="submit" class="el-button link el-button--text">
                                                                決済する
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div data-v-3a55e4f4="" class="text-sub2">
                                                    <a data-v-3a55e4f4="" href="{{route('login')}}" class="">
                                                        <button data-v-3a55e4f4="" type="button" class="el-button link el-button--text"><!---->
                                                            <!----><span>ログイン</span>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!---->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ asset('js/client.js') }}"></script>
</x-guest-layout>
