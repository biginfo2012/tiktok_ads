<x-app-layout>
    <style>
        .active[data-v-686e7260] > div > svg {
            fill: red;
            stroke: red;
        }
    </style>
    <div data-v-c30b9c7c="" class="search">
        <div data-v-c30b9c7c="" id="sectionTop" class="section-top">
            <div data-v-c30b9c7c="">
                <div data-v-c30b9c7c="" class="wrap">
                    <form id="search_form">
                        @csrf
                        <div data-v-c30b9c7c="" class="filter-wrap filter-action">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>ジャンル</label>
                                        <input type="text" class="form-control" name="genre"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>遷移先形式</label>
                                        <input type="text" class="form-control" name="dest"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="fp-range">日付選択</label>
                                        <input type="text" id="fp-range" class="form-control flatpickr-range" name="duration" placeholder="YYYY-MM-DD ~ YYYY-MM-DD" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="page" value="1" id="page">
                        <div data-v-c30b9c7c="" class="data-view-sort">
                            <div data-v-c30b9c7c="" class="wrap flex flex-wrap">
                                <div data-v-c30b9c7c="" class="left">
                                </div>
                                <div data-v-c30b9c7c="" class="right">
                                    <button data-v-c30b9c7c="" type="button" id="searchBtn" class="el-button btn-save-record el-button--primary"><!----><!---->
                                        <span> 検索 </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div data-v-c30b9c7c="" id="pageMain" class="container-lg11">
            <div data-v-c30b9c7c=""
                 class="wt-grid wt-body-max-width wt-pt-xs-3 wt-pb-xs-3 wt-pt-md-3 wt-pb-md-3 wt-pl-xs-1 wt-pr-xs-1 wt-pl-md-2 wt-pr-md-2 wt-pr-lg-3 wt-pl-lg-3">
                <div data-v-c30b9c7c=""
                     class="wt-grid__item-xs-12 wt-pr-xs-1 wt-pl-xs-1 wt-pr-md-2 wt-pl-md-2 wt-pr-lg-3 wt-pl-lg-3">
                    <div data-v-035982d7="" data-v-c30b9c7c="" id="ad-list">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        let get_ad = '{{route('get-ad')}}';
        let fav_ad = '{{route('fav-ad')}}';
        let token = '{{csrf_token()}}';
        $(document).ready(function () {
            $('.flatpickr-range').flatpickr({
                mode: 'range'
            });
            getAdData();
            $('#searchBtn').click(function (e) {
                e.preventDefault();
                getAdData();
            })
        });
        function getAdData() {
            var paramObj = new FormData($('#search_form')[0]);
            $.ajax({
                url: get_ad,
                type: 'post',
                data: paramObj,
                contentType: false,
                processData: false,
                success: function(response){
                    $('#ad-list').html(response);
                },
            });
        }

        $(document).on('click', '.number', function () {
            $('#page').val($(this).text());
            getAdData();
        })
        $(document).on('click', '.btn-prev', function () {
            let page = parseInt($(this).data('page')) - 1;
            $('#page').val(page);
            getAdData();
        })
        $(document).on('click', '.btn-next', function () {
            let page = parseInt($(this).data('page')) + 1;
            $('#page').val(page);
            getAdData();
        });
        $(document).on('click', '.btn-collect', function () {
            let id = $(this).data('id');
            var type = 0;
            if($(this).hasClass('active')){
                $(this).removeClass('active');
            }
            else{
                $(this).addClass('active')
                type = 1;
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': token
                }
            });

            $.ajax({
                url: fav_ad,
                type: 'post',
                data: {
                    type: type,
                    id: id,
                },
                success: function (response) {

                },
                error: function () {
                    return false;
                }
            });

        })
    </script>
</x-app-layout>
