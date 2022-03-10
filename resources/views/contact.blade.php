<x-app-layout>
    <div data-v-2ca53381="" class="container">
        <div data-v-980f0854="" data-v-2ca53381="" class="page-apply"><h5 data-v-980f0854="" class="title mb-2"> お問い合わせ </h5>
{{--            <p data-v-980f0854="" class="p1"> Do you have your own fan base, or do you have a social community, or do--}}
{{--                you have friends who need to use pipiads ? </p>--}}
{{--            <p data-v-980f0854="" class="p2"> If possible, we would like to invite you to join our affiliate program and--}}
{{--                also add extra income to your earnings. </p>--}}
            <form data-v-980f0854="" class="el-form" id="contact_form">
                @csrf

{{--                <div data-v-980f0854="" class="el-form-item section-item section-item-colum is-required"><!---->--}}
{{--                    <div class="el-form-item__content">--}}
{{--                        <div data-v-980f0854="" class="caption"><span data-v-980f0854="" class="icon-decor">*</span>Fill--}}
{{--                            in your exclusive affiliate code--}}
{{--                        </div>--}}
{{--                        <div data-v-980f0854="" class="desc"> This code needs to be a letter or number with more than 3--}}
{{--                            values--}}
{{--                        </div>--}}
{{--                        <div data-v-980f0854="" class="el-input"><!----><input type="text" autocomplete="off"--}}
{{--                                                                               class="el-input__inner"><!----><!---->--}}
{{--                            <!----><!----></div><!----></div>--}}
{{--                </div>--}}
{{--                <div data-v-980f0854="" class="el-form-item section-item section-item-contact section-item-colum">--}}
{{--                    <!---->--}}
{{--                    <div class="el-form-item__content">--}}
{{--                        <div data-v-980f0854="" class="caption"><span data-v-980f0854="" class="icon-decor">*</span>Your--}}
{{--                            social contacts--}}
{{--                        </div>--}}
{{--                        <div data-v-980f0854="" class="desc"> Please fill in at least one，sometimes we will contact you--}}
{{--                            through social channels--}}
{{--                        </div><!---->--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div data-v-980f0854="" class="section-social">
                    <div data-v-980f0854="" class="el-form-item"><label for="facebook" class="el-form-item__label">
                            <span data-v-980f0854="" class="icon-decor">*</span>件名</label>
                        <div class="el-form-item__content">
                            <div data-v-980f0854="" class="el-input"><!---->
                                <input type="text" autocomplete="off" class="el-input__inner" name="title" required><!---->
                            </div><!---->
                        </div>
                    </div>
                    <div data-v-980f0854="" class="el-form-item"><label for="whatsapp" class="el-form-item__label">
                            <span data-v-980f0854="" class="icon-decor">*</span>名前</label>
                        <div class="el-form-item__content">
                            <div data-v-980f0854="" class="el-input"><!---->
                                <input type="text" autocomplete="off" class="el-input__inner" name="name" required><!---->
                            </div><!---->
                        </div>
                    </div>
                    <div data-v-980f0854="" class="el-form-item"><label for="instagram" class="el-form-item__label">
                            <span data-v-980f0854="" class="icon-decor">*</span>メール</label>
                        <div class="el-form-item__content">
                            <div data-v-980f0854="" class="el-input"><!---->
                                <input type="email" autocomplete="off" class="el-input__inner" name="email" required><!---->
                            </div><!---->
                        </div>
                    </div>
                </div>
                <div data-v-980f0854="" class="el-form-item section-item section-item-colum is-required"><!---->
                    <div class="el-form-item__content">
                        <div data-v-980f0854="" class="caption">
                            <span data-v-980f0854="" class="icon-decor">*</span>お問い合わせ内容
                        </div>
                        {{--                        <div data-v-980f0854="" class="desc"> Fill in as many of your resources as possible, including--}}
                        {{--                            but not limited to your youtube, instagram, twitter and other pages url, as well as your--}}
                        {{--                            number of followers, etc., to help us understand your resources.--}}
                        {{--                        </div>--}}
                        <div data-v-980f0854="" class="el-textarea">
                            <textarea autocomplete="off" rows="5" name="detail" class="el-textarea__inner" style="min-height: 33px;" required></textarea>
                        </div><!---->
                    </div>
                </div>
                <div data-v-980f0854="" class="el-form-item text-center"><!---->
                    <div class="el-form-item__content">
                        <button data-v-980f0854="" type="submit" id="sendBtn" class="el-button btn-submit el-button--primary"><!---->
                            <!----><span> 転送 </span>
                        </button><!---->
                    </div>
                </div>
            </form>
            <div id="complete" style="display:none;">
                <p class="text-center" style="font-size: 20px;">お問い合わせを伝送しました。</p>
            </div>
        </div><!----><!---->
    </div>
    <script>
        let send_contact = '{{route('send-contact')}}';
        $('#sendBtn').click(function (e) {
            e.preventDefault();
            if($('#contact_form').valid()){
                var paramObj = new FormData($('#contact_form')[0]);
                $.ajax({
                    url: send_contact,
                    type: 'post',
                    data: paramObj,
                    contentType: false,
                    processData: false,
                    success: function(response){
                        $('#contact_form').hide();
                        $('#complete').show();
                    },
                });
            }

        })

    </script>
</x-app-layout>
