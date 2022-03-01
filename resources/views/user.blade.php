<x-app-layout>
    <div data-v-3de391ff="" class="container wrap"><h3 data-v-3de391ff="" class="title"> マイページ </h3>
        <div data-v-3d3074aa="" data-v-3de391ff="" class="user-center">
            <div data-v-3d3074aa="">
                <div data-v-3d3074aa="" class="section-item section-base">
                    <div data-v-3d3074aa="" class="section-title"><h3 data-v-3d3074aa="" class="title"> アカウント情報 </h3></div>
                    <div data-v-3d3074aa="" class="setion-main">
                        <form data-v-3d3074aa="" class="el-form">
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
                                            <input type="text" autocomplete="off" class="el-input__inner" value="{{Auth::user()->name}}" required>
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
                                    <button data-v-3d3074aa="" type="submit"
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
                        <div class="modal-body el-dialog__body">
                            <form data-v-3d3074aa="" class="el-form">
                                <div data-v-3d3074aa="" class="el-form-item form-item-password is-required is-no-asterisk">
                                    <label for="old_password" class="el-form-item__label" style="width: 162px;">現在のパスワード</label>
                                    <div class="el-form-item__content" style="margin-left: 162px;">
                                        <div data-v-3d3074aa="" class="el-input"><!---->
                                            <input type="password" autocomplete="off" class="el-input__inner" name="current_pw" minlength="8" required>
                                            <!----><!----><!----><!----></div><!----></div>
                                </div>
                                <div data-v-3d3074aa="" class="el-form-item form-item-password is-required is-no-asterisk">
                                    <label for="new_password" class="el-form-item__label" style="width: 162px;">新しいパスワード</label>
                                    <div class="el-form-item__content" style="margin-left: 162px;">
                                        <div data-v-3d3074aa="" class="el-input"><!---->
                                            <input type="password" autocomplete="off" class="el-input__inner" name="new_pw" minlength="8" required>
                                            <!----><!----><!----><!----></div><!----></div>
                                </div>
                                <div data-v-3d3074aa="" class="el-form-item form-item-password is-required is-no-asterisk">
                                    <label for="check_new_password" class="el-form-item__label" style="width: 162px;">パスワードの確認</label>
                                    <div class="el-form-item__content" style="margin-left: 162px;">
                                        <div data-v-3d3074aa="" class="el-input"><!---->
                                            <input type="password" autocomplete="off" class="el-input__inner" readonly minlength="8" required>
                                            <!----><!----><!----><!---->
                                        </div><!---->
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer el-dialog__footer">
                            <div data-v-3d3074aa="" class="dialog-footer">
                                <button data-v-3d3074aa="" type="button" class="el-button el-button--default" data-dismiss="modal"><!----><!---->
                                    <span> キャンセル </span>
                                </button>
                                <button data-v-3d3074aa="" type="button" class="el-button el-button--primary"><!----><!----><span> 変更 </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-v-3d3074aa="" class="el-dialog__wrapper" style="display: none;">
                <div role="dialog" aria-modal="true" aria-label="Change password" class="el-dialog resetDialog"
                     style="margin-top: 15vh; width: 700px;">
                    <div class="el-dialog__header"><span class="el-dialog__title">パスワードの変更</span>
                        <button type="button" aria-label="Close" class="el-dialog__headerbtn"><i
                                class="el-dialog__close el-icon el-icon-close"></i></button>
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
{{--                        <table data-v-13cd94f9="">--}}
{{--                            <thead data-v-13cd94f9="">--}}
{{--                            <tr data-v-13cd94f9="">--}}
{{--                                <th data-v-13cd94f9="" style="width: 21%; text-align: center;"> OrderNo</th>--}}
{{--                                <th data-v-13cd94f9="" style="width: 15%; text-align: center;"> Membership</th>--}}
{{--                                <th data-v-13cd94f9="" style="width: 10%; text-align: center;"> PayTime</th>--}}
{{--                                <th data-v-13cd94f9="" style="width: 15%; text-align: center;"> Status</th>--}}
{{--                                <th data-v-13cd94f9="" style="width: 15%; text-align: center;"> Payment method</th>--}}
{{--                                <th data-v-13cd94f9="" style="width: auto; text-align: center;"> Invoice</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody data-v-13cd94f9=""><!---->--}}
{{--                            <tr data-v-13cd94f9="">--}}
{{--                                <td data-v-13cd94f9="" colspan="7">--}}
{{--                                    <div data-v-13cd94f9="" class="el-empty">--}}
{{--                                        <div class="el-empty__image" style="width: 100px;">--}}
{{--                                            <svg viewBox="0 0 79 86" version="1.1" xmlns="http://www.w3.org/2000/svg"--}}
{{--                                                 xmlns:xlink="http://www.w3.org/1999/xlink">--}}
{{--                                                <defs>--}}
{{--                                                    <linearGradient id="linearGradient-1-8" x1="38.8503086%" y1="0%"--}}
{{--                                                                    x2="61.1496914%" y2="100%">--}}
{{--                                                        <stop stop-color="#FCFCFD" offset="0%"></stop>--}}
{{--                                                        <stop stop-color="#EEEFF3" offset="100%"></stop>--}}
{{--                                                    </linearGradient>--}}
{{--                                                    <linearGradient id="linearGradient-2-8" x1="0%" y1="9.5%" x2="100%"--}}
{{--                                                                    y2="90.5%">--}}
{{--                                                        <stop stop-color="#FCFCFD" offset="0%"></stop>--}}
{{--                                                        <stop stop-color="#E9EBEF" offset="100%"></stop>--}}
{{--                                                    </linearGradient>--}}
{{--                                                    <rect id="path-3-8" x="0" y="0" width="17" height="36"></rect>--}}
{{--                                                </defs>--}}
{{--                                                <g id="Illustrations" stroke="none" stroke-width="1" fill="none"--}}
{{--                                                   fill-rule="evenodd">--}}
{{--                                                    <g id="B-type" transform="translate(-1268.000000, -535.000000)">--}}
{{--                                                        <g id="Group-2" transform="translate(1268.000000, 535.000000)">--}}
{{--                                                            <path id="Oval-Copy-2"--}}
{{--                                                                  d="M39.5,86 C61.3152476,86 79,83.9106622 79,81.3333333 C79,78.7560045 57.3152476,78 35.5,78 C13.6847524,78 0,78.7560045 0,81.3333333 C0,83.9106622 17.6847524,86 39.5,86 Z"--}}
{{--                                                                  fill="#F7F8FC"></path>--}}
{{--                                                            <polygon id="Rectangle-Copy-14" fill="#E5E7E9"--}}
{{--                                                                     transform="translate(27.500000, 51.500000) scale(1, -1) translate(-27.500000, -51.500000) "--}}
{{--                                                                     points="13 58 53 58 42 45 2 45"></polygon>--}}
{{--                                                            <g id="Group-Copy"--}}
{{--                                                               transform="translate(34.500000, 31.500000) scale(-1, 1) rotate(-25.000000) translate(-34.500000, -31.500000) translate(7.000000, 10.000000)">--}}
{{--                                                                <polygon id="Rectangle-Copy-10" fill="#E5E7E9"--}}
{{--                                                                         transform="translate(11.500000, 5.000000) scale(1, -1) translate(-11.500000, -5.000000) "--}}
{{--                                                                         points="2.84078316e-14 3 18 3 23 7 5 7"></polygon>--}}
{{--                                                                <polygon id="Rectangle-Copy-11" fill="#EDEEF2"--}}
{{--                                                                         points="-3.69149156e-15 7 38 7 38 43 -3.69149156e-15 43"></polygon>--}}
{{--                                                                <rect id="Rectangle-Copy-12"--}}
{{--                                                                      fill="url(#linearGradient-1-8)"--}}
{{--                                                                      transform="translate(46.500000, 25.000000) scale(-1, 1) translate(-46.500000, -25.000000) "--}}
{{--                                                                      x="38" y="7" width="17" height="36"></rect>--}}
{{--                                                                <polygon id="Rectangle-Copy-13" fill="#F8F9FB"--}}
{{--                                                                         transform="translate(39.500000, 3.500000) scale(-1, 1) translate(-39.500000, -3.500000) "--}}
{{--                                                                         points="24 7 41 7 55 -3.63806207e-12 38 -3.63806207e-12"></polygon>--}}
{{--                                                            </g>--}}
{{--                                                            <rect id="Rectangle-Copy-15" fill="url(#linearGradient-2-8)"--}}
{{--                                                                  x="13" y="45" width="40" height="36"></rect>--}}
{{--                                                            <g id="Rectangle-Copy-17"--}}
{{--                                                               transform="translate(53.000000, 45.000000)">--}}
{{--                                                                <mask id="mask-4-8" fill="white">--}}
{{--                                                                    <use xlink:href="#path-3-8"></use>--}}
{{--                                                                </mask>--}}
{{--                                                                <use id="Mask" fill="#E0E3E9"--}}
{{--                                                                     transform="translate(8.500000, 18.000000) scale(-1, 1) translate(-8.500000, -18.000000) "--}}
{{--                                                                     xlink:href="#path-3-8"></use>--}}
{{--                                                                <polygon id="Rectangle-Copy" fill="#D5D7DE"--}}
{{--                                                                         mask="url(#mask-4-8)"--}}
{{--                                                                         transform="translate(12.000000, 9.000000) scale(-1, 1) translate(-12.000000, -9.000000) "--}}
{{--                                                                         points="7 0 24 0 20 18 -1.70530257e-13 16"></polygon>--}}
{{--                                                            </g>--}}
{{--                                                            <polygon id="Rectangle-Copy-18" fill="#F8F9FB"--}}
{{--                                                                     transform="translate(66.000000, 51.500000) scale(-1, 1) translate(-66.000000, -51.500000) "--}}
{{--                                                                     points="62 45 79 45 70 58 53 58"></polygon>--}}
{{--                                                        </g>--}}
{{--                                                    </g>--}}
{{--                                                </g>--}}
{{--                                            </svg>--}}
{{--                                        </div>--}}
{{--                                        <div class="el-empty__description"><p>No Record</p></div><!----></div>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
                    </div>
                </div><!---->
            </div>
        </div>
    </div>
    <script>
        $('#change-password').click(function () {

            $('#passwordChangeModal').modal('show');
        })
    </script>
</x-app-layout>
