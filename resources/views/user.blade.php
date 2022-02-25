<x-app-layout>
    <div data-v-3de391ff="" class="container wrap"><h3 data-v-3de391ff="" class="title"> User Center </h3>
{{--        <div data-v-5e9e8a16="" data-v-3de391ff="" class="page-header">--}}
{{--            <div data-v-5e9e8a16="" class="top">--}}
{{--                <div data-v-9ca3396c="" data-v-5e9e8a16="" class="navsTabs">--}}
{{--                    <ul data-v-9ca3396c="" class="lists">--}}
{{--                        <li data-v-9ca3396c="" id="item-0" class="current"><span data-v-9ca3396c="" class="item-text"><i--}}
{{--                                    data-v-9ca3396c=""> My Account </i></span></li>--}}
{{--                        <li data-v-9ca3396c="" id="item-1" class=""><span data-v-9ca3396c="" class="item-text"><i--}}
{{--                                    data-v-9ca3396c=""> Payment </i></span></li>--}}
{{--                        <div data-v-9ca3396c="" class="nav-underline" style="width: 72px; left: 0px;"></div>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div data-v-3d3074aa="" data-v-3de391ff="" class="user-center">
            <div data-v-3d3074aa="">
                <div data-v-3d3074aa="" class="section-item section-base">
                    <div data-v-3d3074aa="" class="section-title"><h3 data-v-3d3074aa="" class="title"> Personal
                            Center </h3></div>
                    <div data-v-3d3074aa="" class="setion-main">
                        <form data-v-3d3074aa="" class="el-form">
                            <ul data-v-3d3074aa="">
{{--                                <li data-v-3d3074aa=""><span data-v-3d3074aa="" class="label"> Company： </span>--}}
{{--                                    <div data-v-3d3074aa="" class="value"><!---->--}}
{{--                                        <div data-v-3d3074aa="" class="el-input"><!----><input type="text"--}}
{{--                                                                                               autocomplete="off"--}}
{{--                                                                                               class="el-input__inner">--}}
{{--                                            <!----><!----><!----><!----></div><!----></div>--}}
{{--                                </li>--}}
                                <li data-v-3d3074aa="">
                                    <span data-v-3d3074aa="" class="label"> Email： </span>
                                    <div data-v-3d3074aa="" class="value">
                                        <div data-v-3d3074aa="" class="el-form-item is-success"><!---->
                                            <div class="el-form-item__content" style="margin-left: 0px;">
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
                                    <span data-v-3d3074aa="" class="label"> User Name： </span>
                                    <div data-v-3d3074aa="" class="value"><!---->
                                        <div data-v-3d3074aa="" class="el-input"><!---->
                                            <input type="text" autocomplete="off" class="el-input__inner" value="{{Auth::user()->name}}">
                                            <!----><!----><!----><!---->
                                        </div><!---->
                                    </div>
                                </li>
{{--                                <li data-v-3d3074aa="">--}}
{{--                                    <span data-v-3d3074aa="" class="label"> Phone： </span>--}}
{{--                                    <div data-v-3d3074aa="" class="value"><!---->--}}
{{--                                        <div data-v-3d3074aa="" class="el-input"><!---->--}}
{{--                                            <input type="text" autocomplete="off" class="el-input__inner">--}}
{{--                                            <!----><!----><!----><!---->--}}
{{--                                        </div><!---->--}}
{{--                                    </div>--}}
{{--                                </li>--}}
                                <li data-v-3d3074aa="">
                                    <span data-v-3d3074aa="" class="label"> Password： </span>
                                    <div data-v-3d3074aa="" class="value"> *********
                                        <button data-v-3d3074aa="" type="button" class="el-button btn-edit-password el-button--text"><!----><!---->
                                            <span> Change password</span>
                                        </button>
                                    </div>
                                </li>
                                <li data-v-3d3074aa="" class="submit-button-li">
                                    <button data-v-3d3074aa="" type="submit"
                                            class="el-button el-button--default el-button--small"><!----><!----><span> Save </span>
                                    </button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
{{--                <div data-v-3d3074aa="" class="section-item section-login">--}}
{{--                    <div data-v-3d3074aa="" class="section-title"><h3 data-v-3d3074aa="" class="title"> Login--}}
{{--                            Record </h3>--}}
{{--                        <p data-v-3d3074aa="" class="desc"> Current version can only be used by up to 1 computers at the--}}
{{--                            same time </p></div>--}}
{{--                    <div data-v-3d3074aa="" class="table-normal">--}}
{{--                        <table data-v-3d3074aa="">--}}
{{--                            <thead data-v-3d3074aa="">--}}
{{--                            <tr data-v-3d3074aa="">--}}
{{--                                <th data-v-3d3074aa="" style="width: 26%;"> DeviceId</th>--}}
{{--                                <th data-v-3d3074aa="" style="width: 30%;"> Device Information</th>--}}
{{--                                <th data-v-3d3074aa="" style="width: 12%;"> Login IP</th>--}}
{{--                                <th data-v-3d3074aa="" style="width: 10%;"> Login Time</th>--}}
{{--                                <th data-v-3d3074aa="" style="width: 15%;"> Is the current device</th>--}}
{{--                                <th data-v-3d3074aa="" style="width: auto;"><span data-v-3d3074aa="" class="action"> Delete Device </span>--}}
{{--                                </th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody data-v-3d3074aa="">--}}
{{--                            <tr data-v-3d3074aa="">--}}
{{--                                <td data-v-3d3074aa="" class="text-center"> 1420801161</td>--}}
{{--                                <td data-v-3d3074aa=""> Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36--}}
{{--                                    (KHTML, like Gecko) Chrome/96.0.4664.110 Safari/537.36--}}
{{--                                </td>--}}
{{--                                <td data-v-3d3074aa="" class="text-center"> 173.254.200.134</td>--}}
{{--                                <td data-v-3d3074aa="" class="text-center"> Feb 24 2022</td>--}}
{{--                                <td data-v-3d3074aa="" class="text-center"> Yes</td>--}}
{{--                                <td data-v-3d3074aa="" class="text-center"><span data-v-3d3074aa="" class="btn-wrap"><button--}}
{{--                                            data-v-3d3074aa="" type="button"--}}
{{--                                            class="el-button el-button--primary el-button--small"><!----><!----><span>Delete Device</span></button></span>--}}
{{--                                </td>--}}
{{--                            </tr>--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div data-v-3d3074aa="" class="section-item section-level isEn">--}}
{{--                    <h3 data-v-3d3074aa="" class="title">--}}
{{--                        Membership </h3>--}}
{{--                    <ul data-v-3d3074aa="">--}}
{{--                        <li data-v-3d3074aa=""><p data-v-3d3074aa="" class="_attr">Current Membership:</p>--}}
{{--                            <div data-v-3d3074aa="" class="_value level-info"><img data-v-3d3074aa=""--}}
{{--                                                                                   src="/img/pipiads-basic.5533853f.png"--}}
{{--                                                                                   alt="" class="leval-image"><span--}}
{{--                                    data-v-3d3074aa="" class="level-name"> Free forever </span><a data-v-3d3074aa=""--}}
{{--                                                                                                  href="/pricing"--}}
{{--                                                                                                  class="">--}}
{{--                                    <button data-v-3d3074aa="" type="button"--}}
{{--                                            class="el-button el-button--primary el-button--mini"><!----><!----><span> Upgrade </span>--}}
{{--                                    </button>--}}
{{--                                </a></div>--}}
{{--                        </li>--}}
{{--                        <li data-v-3d3074aa=""><p data-v-3d3074aa="" class="_attr">Detail:</p>--}}
{{--                            <div data-v-3d3074aa="" class="_value">--</div>--}}
{{--                        </li>--}}
{{--                        <li data-v-3d3074aa=""><p data-v-3d3074aa="" class="_attr">Expiration date:</p>--}}
{{--                            <div data-v-3d3074aa="" class="_value"></div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
            <div data-v-3d3074aa="" class="el-dialog__wrapper" style="display: none;">
                <div role="dialog" aria-modal="true" aria-label="Change password" class="el-dialog resetDialog"
                     style="margin-top: 15vh; width: 700px;">
                    <div class="el-dialog__header"><span class="el-dialog__title">Change password</span>
                        <button type="button" aria-label="Close" class="el-dialog__headerbtn"><i
                                class="el-dialog__close el-icon el-icon-close"></i></button>
                    </div>
                    <div class="el-dialog__body">
                        <form data-v-3d3074aa="" class="el-form">
                            <div data-v-3d3074aa="" class="el-form-item form-item-password is-required is-no-asterisk">
                                <label for="old_password" class="el-form-item__label" style="width: 162px;">Current
                                    Password</label>
                                <div class="el-form-item__content" style="margin-left: 162px;">
                                    <div data-v-3d3074aa="" class="el-input"><!----><input type="password"
                                                                                           autocomplete="off"
                                                                                           class="el-input__inner">
                                        <!----><!----><!----><!----></div><!----></div>
                            </div>
                            <div data-v-3d3074aa="" class="el-form-item form-item-password is-required is-no-asterisk">
                                <label for="new_password" class="el-form-item__label" style="width: 162px;">New
                                    Password</label>
                                <div class="el-form-item__content" style="margin-left: 162px;">
                                    <div data-v-3d3074aa="" class="el-input"><!----><input type="password"
                                                                                           autocomplete="off"
                                                                                           class="el-input__inner">
                                        <!----><!----><!----><!----></div><!----></div>
                            </div>
                            <div data-v-3d3074aa="" class="el-form-item form-item-password is-required is-no-asterisk">
                                <label for="check_new_password" class="el-form-item__label" style="width: 162px;">Confirm
                                    new password</label>
                                <div class="el-form-item__content" style="margin-left: 162px;">
                                    <div data-v-3d3074aa="" class="el-input"><!----><input type="password"
                                                                                           autocomplete="off"
                                                                                           class="el-input__inner">
                                        <!----><!----><!----><!----></div><!----></div>
                            </div>
                        </form>
                    </div>
                    <div class="el-dialog__footer">
                        <div data-v-3d3074aa="" class="dialog-footer">
                            <button data-v-3d3074aa="" type="button" class="el-button el-button--default"><!----><!----><span> Cancel </span>
                            </button>
                            <button data-v-3d3074aa="" type="button" class="el-button el-button--primary"><!----><!----><span> Comfirm </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div data-v-13cd94f9="" data-v-3de391ff="" class="page-order">
            <div data-v-13cd94f9="" class="wrap">
                <div data-v-13cd94f9="" class="section-item"><h3 data-v-13cd94f9="" class="title">Payment</h3>
                    <div data-v-13cd94f9="" class="table-normal">
                        <table data-v-13cd94f9="">
                            <thead data-v-13cd94f9="">
                            <tr data-v-13cd94f9="">
                                <th data-v-13cd94f9="" style="width: 21%; text-align: center;"> OrderNo</th>
                                <th data-v-13cd94f9="" style="width: 15%; text-align: center;"> Membership</th>
                                <th data-v-13cd94f9="" style="width: 10%; text-align: center;"> PayTime</th>
                                <th data-v-13cd94f9="" style="width: 15%; text-align: center;"> Status</th>
                                <th data-v-13cd94f9="" style="width: 15%; text-align: center;"> Payment method</th>
                                <th data-v-13cd94f9="" style="width: auto; text-align: center;"> Invoice</th>
                            </tr>
                            </thead>
                            <tbody data-v-13cd94f9=""><!---->
                            <tr data-v-13cd94f9="">
                                <td data-v-13cd94f9="" colspan="7">
                                    <div data-v-13cd94f9="" class="el-empty">
                                        <div class="el-empty__image" style="width: 100px;">
                                            <svg viewBox="0 0 79 86" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <defs>
                                                    <linearGradient id="linearGradient-1-8" x1="38.8503086%" y1="0%"
                                                                    x2="61.1496914%" y2="100%">
                                                        <stop stop-color="#FCFCFD" offset="0%"></stop>
                                                        <stop stop-color="#EEEFF3" offset="100%"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="linearGradient-2-8" x1="0%" y1="9.5%" x2="100%"
                                                                    y2="90.5%">
                                                        <stop stop-color="#FCFCFD" offset="0%"></stop>
                                                        <stop stop-color="#E9EBEF" offset="100%"></stop>
                                                    </linearGradient>
                                                    <rect id="path-3-8" x="0" y="0" width="17" height="36"></rect>
                                                </defs>
                                                <g id="Illustrations" stroke="none" stroke-width="1" fill="none"
                                                   fill-rule="evenodd">
                                                    <g id="B-type" transform="translate(-1268.000000, -535.000000)">
                                                        <g id="Group-2" transform="translate(1268.000000, 535.000000)">
                                                            <path id="Oval-Copy-2"
                                                                  d="M39.5,86 C61.3152476,86 79,83.9106622 79,81.3333333 C79,78.7560045 57.3152476,78 35.5,78 C13.6847524,78 0,78.7560045 0,81.3333333 C0,83.9106622 17.6847524,86 39.5,86 Z"
                                                                  fill="#F7F8FC"></path>
                                                            <polygon id="Rectangle-Copy-14" fill="#E5E7E9"
                                                                     transform="translate(27.500000, 51.500000) scale(1, -1) translate(-27.500000, -51.500000) "
                                                                     points="13 58 53 58 42 45 2 45"></polygon>
                                                            <g id="Group-Copy"
                                                               transform="translate(34.500000, 31.500000) scale(-1, 1) rotate(-25.000000) translate(-34.500000, -31.500000) translate(7.000000, 10.000000)">
                                                                <polygon id="Rectangle-Copy-10" fill="#E5E7E9"
                                                                         transform="translate(11.500000, 5.000000) scale(1, -1) translate(-11.500000, -5.000000) "
                                                                         points="2.84078316e-14 3 18 3 23 7 5 7"></polygon>
                                                                <polygon id="Rectangle-Copy-11" fill="#EDEEF2"
                                                                         points="-3.69149156e-15 7 38 7 38 43 -3.69149156e-15 43"></polygon>
                                                                <rect id="Rectangle-Copy-12"
                                                                      fill="url(#linearGradient-1-8)"
                                                                      transform="translate(46.500000, 25.000000) scale(-1, 1) translate(-46.500000, -25.000000) "
                                                                      x="38" y="7" width="17" height="36"></rect>
                                                                <polygon id="Rectangle-Copy-13" fill="#F8F9FB"
                                                                         transform="translate(39.500000, 3.500000) scale(-1, 1) translate(-39.500000, -3.500000) "
                                                                         points="24 7 41 7 55 -3.63806207e-12 38 -3.63806207e-12"></polygon>
                                                            </g>
                                                            <rect id="Rectangle-Copy-15" fill="url(#linearGradient-2-8)"
                                                                  x="13" y="45" width="40" height="36"></rect>
                                                            <g id="Rectangle-Copy-17"
                                                               transform="translate(53.000000, 45.000000)">
                                                                <mask id="mask-4-8" fill="white">
                                                                    <use xlink:href="#path-3-8"></use>
                                                                </mask>
                                                                <use id="Mask" fill="#E0E3E9"
                                                                     transform="translate(8.500000, 18.000000) scale(-1, 1) translate(-8.500000, -18.000000) "
                                                                     xlink:href="#path-3-8"></use>
                                                                <polygon id="Rectangle-Copy" fill="#D5D7DE"
                                                                         mask="url(#mask-4-8)"
                                                                         transform="translate(12.000000, 9.000000) scale(-1, 1) translate(-12.000000, -9.000000) "
                                                                         points="7 0 24 0 20 18 -1.70530257e-13 16"></polygon>
                                                            </g>
                                                            <polygon id="Rectangle-Copy-18" fill="#F8F9FB"
                                                                     transform="translate(66.000000, 51.500000) scale(-1, 1) translate(-66.000000, -51.500000) "
                                                                     points="62 45 79 45 70 58 53 58"></polygon>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="el-empty__description"><p>No Record</p></div><!----></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div><!---->
{{--                <div data-v-13cd94f9="" class="section-item section-subscribe">--}}
{{--                    <h3 data-v-13cd94f9="" class="title">--}}
{{--                        Subscribe Methods</h3>--}}
{{--                    <ul data-v-13cd94f9="" class="payment-info">--}}
{{--                        <li data-v-13cd94f9=""><span data-v-13cd94f9="" class="item_attr">Auto-charge from: </span><span--}}
{{--                                data-v-13cd94f9="" class="item_value"> None </span></li>--}}
{{--                        <li data-v-13cd94f9=""><span data-v-13cd94f9=""--}}
{{--                                                     class="item_attr">Subscription Method: </span><span--}}
{{--                                data-v-13cd94f9="" class="item_value"> None <span data-v-13cd94f9=""--}}
{{--                                                                                  class="text-subscribe UnSubscribe"> Unsubscribe </span></span>--}}
{{--                        </li>--}}
{{--                        <li data-v-13cd94f9=""><span data-v-13cd94f9=""--}}
{{--                                                     class="item_attr">Subscription Status: </span><span--}}
{{--                                data-v-13cd94f9="" class="item_value"> None </span></li>--}}
{{--                        <li data-v-13cd94f9=""><span data-v-13cd94f9=""--}}
{{--                                                     class="item_attr">Next Charge Amount: </span><span--}}
{{--                                data-v-13cd94f9="" class="item_value"> None </span></li>--}}
{{--                        <li data-v-13cd94f9=""><span data-v-13cd94f9="" class="item_attr">Next Charge Date: </span><span--}}
{{--                                data-v-13cd94f9="" class="item_value"> None </span></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
{{--            <div data-v-0b804bfe="" data-v-13cd94f9="" id="pdfDom" style="display: none;">--}}
{{--                <div data-v-0b804bfe="" class="download-data"><img data-v-0b804bfe=""--}}
{{--                                                                   src="/img/210x60-yingcai.1964864b.png" alt=""--}}
{{--                                                                   class="logo">--}}
{{--                    <h2 data-v-0b804bfe="" class="title text-center"> INVOICE </h2>--}}
{{--                    <ul data-v-0b804bfe="" class="list-main">--}}
{{--                        <li data-v-0b804bfe="" class="list-item"><h4 data-v-0b804bfe="">SELLER：</h4><h5--}}
{{--                                data-v-0b804bfe=""> Name： PIPIADS</h5></li>--}}
{{--                        <li data-v-0b804bfe="" class="list-item"><h4 data-v-0b804bfe="">BUYER：</h4><h5--}}
{{--                                data-v-0b804bfe=""> Account： </h5></li>--}}
{{--                        <li data-v-0b804bfe="" class="list-item"><h4 data-v-0b804bfe="">ORDER：</h4>--}}
{{--                            <ul data-v-0b804bfe="">--}}
{{--                                <li data-v-0b804bfe=""><h5 data-v-0b804bfe=""> Order ID： </h5></li>--}}
{{--                                <li data-v-0b804bfe=""><h5 data-v-0b804bfe=""> Membership： </h5></li>--}}
{{--                                <li data-v-0b804bfe=""><h5 data-v-0b804bfe=""> Purchase Duration： undefined days </h5>--}}
{{--                                </li>--}}
{{--                                <li data-v-0b804bfe=""><h5 data-v-0b804bfe=""> Amount： （Dollar） </h5></li>--}}
{{--                                <li data-v-0b804bfe=""><h5 data-v-0b804bfe=""> Payment Time： </h5></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <table data-v-0b804bfe="">--}}
{{--                        <tbody data-v-0b804bfe="">--}}
{{--                        <tr data-v-0b804bfe="">--}}
{{--                            <td data-v-0b804bfe=""> Description</td>--}}
{{--                            <td data-v-0b804bfe="">PIPIADS Member</td>--}}
{{--                        </tr>--}}
{{--                        <tr data-v-0b804bfe="">--}}
{{--                            <td data-v-0b804bfe=""> Total</td>--}}
{{--                            <td data-v-0b804bfe=""> （Dollar）</td>--}}
{{--                        </tr>--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</x-app-layout>
