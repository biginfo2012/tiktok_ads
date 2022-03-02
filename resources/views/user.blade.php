<x-app-layout>
    <div data-v-3de391ff="" class="container wrap"><h3 data-v-3de391ff="" class="title"> マイページ </h3>
        <div data-v-3d3074aa="" data-v-3de391ff="" class="user-center">
            <div data-v-3d3074aa="">
                <div data-v-3d3074aa="" class="section-item section-base">
                    <div data-v-3d3074aa="" class="section-title"><h3 data-v-3d3074aa="" class="title"> アカウント情報 </h3></div>
                    <div data-v-3d3074aa="" class="setion-main">
                        <form data-v-3d3074aa="" class="el-form" id="modify_form">
                            @csrf
                            <ul data-v-3d3074aa="">
                                <li data-v-3d3074aa="">
                                    <span data-v-3d3074aa="" class="label"> メールアドレス： </span>
                                    <div data-v-3d3074aa="" class="value">
                                        <div data-v-3d3074aa="" class="el-form-item is-success"><!---->
                                            <div class="el-form-item__content" style="margin-left: 0;">
                                                <div data-v-3d3074aa="" class="el-input is-disabled"><!---->
                                                    <input type="text" disabled="disabled" autocomplete="off" class="el-input__inner" value="{{Auth::user()->email}}">
                                                </div>
                                                <span data-v-3d3074aa="" class="el-form-item__errorEmail el-form-item__error el-form-item__error--inline"></span>
                                                <!---->
                                            </div>
                                        </div><!----><!---->
                                    </div>
                                </li>
                                <li data-v-3d3074aa="">
                                    <span data-v-3d3074aa="" class="label"> 名前： </span>
                                    <div data-v-3d3074aa="" class="value"><!---->
                                        <div data-v-3d3074aa="" class="el-input"><!---->
                                            <input type="text" autocomplete="off" class="el-input__inner" name="name" value="{{Auth::user()->name}}" required>
                                            <!----><!----><!----><!---->
                                        </div><!---->
                                    </div>
                                </li>
                                <li data-v-3d3074aa="">
                                    <span data-v-3d3074aa="" class="label"> パスワード： </span>
                                    <div data-v-3d3074aa="" class="value"> *********
                                        <button data-v-3d3074aa="" type="button" class="el-button btn-edit-password el-button--text" id="change-password"
                                                data-toggle="modal" data-target="passwordChangeModal">
                                            Change password
                                        </button>
                                    </div>
                                </li>
                                <li data-v-3d3074aa="" class="submit-button-li">
                                    <button data-v-3d3074aa="" type="submit" id="modifyBtn"
                                            class="el-button el-button--default el-button--small"><!----><!----><span> 変更 </span>
                                    </button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="passwordChangeModal" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header el-dialog__header">
                            <span class="el-dialog__title">パスワードの変更</span>
                            <button type="button" aria-label="Close" class="close el-dialog__headerbtn" data-dismiss="modal"><i
                                    class="el-dialog__close el-icon el-icon-close"></i></button>
{{--                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                <i aria-hidden="true" class="ki ki-close"></i>--}}
{{--                            </button>--}}
                        </div>
                        <form data-v-3d3074aa="" class="el-form" id="pw_form">
                            @csrf
                            <div class="modal-body el-dialog__body">
                                <div data-v-3d3074aa="" class="el-form-item form-item-password is-required is-no-asterisk">
                                    <label for="old_password" class="el-form-item__label" style="width: 162px;">現在のパスワード</label>
                                    <div class="el-form-item__content" style="margin-left: 162px;">
                                        <div data-v-3d3074aa="" class="el-input"><!---->
                                            <input type="password" autocomplete="off" class="el-input__inner" name="current_pw" minlength="8" required>
                                            <!----><!----><!----><!---->
                                        </div><!---->
                                    </div>
                                </div>
                                <div data-v-3d3074aa="" class="el-form-item form-item-password is-required is-no-asterisk">
                                    <label for="new_password" class="el-form-item__label" style="width: 162px;">新しいパスワード</label>
                                    <div class="el-form-item__content" style="margin-left: 162px;">
                                        <div data-v-3d3074aa="" class="el-input"><!---->
                                            <input type="password" autocomplete="off" class="el-input__inner" id="new_pw" name="new_pw" minlength="8" required>
                                            <!----><!----><!----><!----></div><!----></div>
                                </div>
                                <div data-v-3d3074aa="" class="el-form-item form-item-password is-required is-no-asterisk">
                                    <label for="check_new_password" class="el-form-item__label" style="width: 162px;">パスワードの確認</label>
                                    <div class="el-form-item__content" style="margin-left: 162px;">
                                        <div data-v-3d3074aa="" class="el-input"><!---->
                                            <input type="password" autocomplete="off" class="el-input__inner" id="con_pw" minlength="8" required>
                                            <!----><!----><!----><!---->
                                        </div><!---->
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer el-dialog__footer">
                                <div data-v-3d3074aa="" class="dialog-footer">
                                    <button data-v-3d3074aa="" type="button" class="el-button el-button--default" data-dismiss="modal"><!----><!---->
                                        <span> キャンセル </span>
                                    </button>
                                    <button data-v-3d3074aa="" type="button" class="el-button el-button--primary" id="pwBtn"><!----><!---->
                                        <span> 変更 </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div data-v-3d3074aa="" class="el-dialog__wrapper" style="display: none;">
                <div role="dialog" aria-modal="true" aria-label="Change password" class="el-dialog resetDialog"
                     style="margin-top: 15vh; width: 700px;">
                    <div class="el-dialog__header"><span class="el-dialog__title">パスワードの変更</span>
                        <button type="button" aria-label="Close" class="el-dialog__headerbtn">
                            <i class="el-dialog__close el-icon el-icon-close"></i></button>
                    </div>
                    <div class="el-dialog__body">

                    </div>
                    <div class="el-dialog__footer">

                    </div>
                </div>
            </div>
        </div>
        <div data-v-13cd94f9="" data-v-3de391ff="" class="page-order">
            <div data-v-13cd94f9="" class="wrap">
                <div data-v-13cd94f9="" class="section-item"><h3 data-v-13cd94f9="" class="title">支払い</h3>
                    <div data-v-13cd94f9="" class="table-normal">
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
                                    <h3 class="text-center pricing text-white"></h3>
                                    <div style="padding: 20px">
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="メールアドレス" required>
                                        </div>
                                        <div class="form-group">
                                            <div id="card-element" class="w-100 card-element"></div>

                                            <div id="card-errors" class="error" role="alert" style="color: red"></div>
                                        </div>
                                        <input type="hidden" id="price" name="price" value="1000">
                                        <div class="button-group d-flex align-items-center justify-content-between mt-4">
                                            <button type="submit" class="btn btn-primary">
                                                決済する
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div><!---->
            </div>
        </div>
    </div>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="{{ asset('js/client.js') }}"></script>
    <script>
        let modify = '{{route('modify')}}';
        let pw_modify = '{{route('pw-modify')}}';
        $('#change-password').click(function () {
            $('#passwordChangeModal').modal('show');
        })
        $('#modifyBtn').click(function (e) {
            e.preventDefault();
            var paramObj = new FormData($('#modify_form')[0]);
            $.ajax({
                url: modify,
                type: 'post',
                data: paramObj,
                contentType: false,
                processData: false,
                success: function(response){

                },
            });
        })
        $('#pwBtn').click(function (e) {
            e.preventDefault();
            if($('#pw_form').valid()){
                if($('#new_pw').val() == $('#con_pw').val()){
                    var paramObj = new FormData($('#pw_form')[0]);
                    $.ajax({
                        url: pw_modify,
                        type: 'post',
                        data: paramObj,
                        contentType: false,
                        processData: false,
                        success: function(response){
                            console.log(response);
                            if(response.status){
                                $('#passwordChangeModal').modal('hide');
                            }
                        },
                    });
                }
            }

        })
    </script>
</x-app-layout>
