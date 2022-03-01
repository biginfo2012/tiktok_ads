<x-app-layout>
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
                                        <input type="text" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>遷移先形式</label>
                                        <input type="text" class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="fp-range">日付選択</label>
                                        <input type="text" id="fp-range" class="form-control flatpickr-range" placeholder="YYYY-MM-DD ~ YYYY-MM-DD" />
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <div data-v-035982d7="" data-v-c30b9c7c="">
                        <div data-v-035982d7="">
                            <div data-v-035982d7="" element-loading-text="Loading..."
                                 element-loading-spinner="el-icon-loading" class="videos-list dataMain">
                                <ul data-v-035982d7="" id="ad-list"
                                    class="lists-wrap wt-block-grid wt-list-unstyled wt-block-grid-xs-1 wt-block-grid-sm-1 wt-block-grid-md-2 wt-block-grid-lg-3 wt-block-grid-xl-4">
                                    @foreach($data as $item)
                                        <li data-v-035982d7="" class="item-wrap wt-block-grid__item">
                                            <div data-v-686e7260="" data-v-035982d7="" class="item-inner">
                                                <div data-v-686e7260="" class="top">
                                                    <div data-v-686e7260="" class="top-base">
                                                        <span data-v-686e7260="" index="23">
                                                            <div role="tooltip" id="el-popover-{{$item->id}}" aria-hidden="true" class="el-popover el-popper actionDrop" tabindex="0"
                                                                 style="width: 180px; display: none;"><!---->
                                                                <ul data-v-686e7260="">
                                                                    <li data-v-686e7260="" class="isFirst">
                                                                        <a data-v-686e7260="" href="{{route('detail', $item->id)}}" class="link-item title a-link" target="_blank"> 広告詳細 </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <span class="el-popover__reference-wrapper">
                                                                <div data-v-686e7260="" class="pro-info el-popover__reference" aria-describedby="el-popover-{{$item->id}}" tabindex="0">
                                                                    <span data-v-686e7260="" class="el-avatar el-avatar--square">
                                                                        <img src="{{$item->app_image}}"
                                                                             style="object-fit: cover;">
                                                                    </span>
                                                                    <div data-v-686e7260="" class="right">
                                                                        <p data-v-686e7260="" class="nickname">{{$item->app_name}}</p>
                                                                        <p data-v-686e7260="" class="domain">{{$item->root_path}}</p>
                                                                    </div>
                                                                </div>
                                                            </span>
                                                        </span>
                                                        <!---->
                                                        <div data-v-686e7260="" class="el-tooltip btn-collect btn item" aria-describedby="el-tooltip-{{$item->id}}" tabindex="0">
                                                            <svg data-v-7e6c6234="" data-v-686e7260="" aria-hidden="true" class="icon-default svg-icon">
                                                                <use data-v-7e6c6234="" xlink:href="#icon-shoucang1"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <div data-v-686e7260="" class="other-info">
                                                        <div data-v-686e7260="" class="el-tooltip create-time btn item"
                                                             aria-describedby="el-tooltip-724" tabindex="0">
                                                            <svg data-v-7e6c6234="" data-v-686e7260=""
                                                                 aria-hidden="true" class="svg-icon">
                                                                <use data-v-7e6c6234="" xlink:href="#icon-rili2"></use>
                                                            </svg>
                                                            <span data-v-686e7260=""> {{date('Y-m-d', (int)($item->create_time))}}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-v-686e7260="" class="cover-containter">
                                                    <div data-v-686e7260="" class="cover showPlayIcon">
                                                        <div data-v-686e7260="" class="item-bg">
                                                            <img data-v-686e7260="" src="{{$item->cover}}" alt="">
                                                        </div>
                                                        <div data-v-686e7260="" class="el-image">
                                                            <img src="{{$item->cover}}" class="el-image__inner"><!---->
                                                        </div>
                                                        <div data-v-686e7260="" class="time">{{$item->duration}}s</div>
                                                        <div data-v-686e7260="" class="video-play-icon">
                                                            <svg data-v-7e6c6234="" data-v-686e7260=""
                                                                 aria-hidden="true" class="svg-icon">
                                                                <use data-v-7e6c6234="" xlink:href="#icon-bofang"></use>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-v-686e7260="" class="bottom">
                                                    <div data-v-686e7260="" class="button-text-copy had-right-btn">
                                                        <div data-v-686e7260="" class="left">
                                                            <h5 data-v-686e7260="" class="title">
                                                                <span data-v-686e7260="" class="el-tooltip tooltipInline item"
                                                                      aria-describedby="el-tooltip-3352" tabindex="0"> {{$item->app_title}} </span>
                                                            </h5>
                                                            <p data-v-686e7260="" class="copy">
                                                            <span data-v-686e7260="" class="el-tooltip tooltipInline item" aria-describedby="el-tooltip-6784"
                                                                  tabindex="0">{{$item->desc}}</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-v-686e7260="" class="info-box">
                                                    <div data-v-686e7260="" class="bottom">
                                                        <div data-v-686e7260="" class="data-count">
                                                            <div data-v-686e7260="" class="item">
                                                                <p data-v-686e7260="" class="value"> {{kmb($item->play_count)}} </p>
                                                                <p data-v-686e7260="" class="caption"> 再生回数 </p>
                                                            </div>
                                                            <div data-v-686e7260="" class="item">
                                                                <p data-v-686e7260="" class="value"> {{number_format($item->share_count)}} </p>
                                                                <p data-v-686e7260="" class="caption"> シェア </p></div>
                                                            <div data-v-686e7260="" class="el-tooltip item item" aria-describedby="el-tooltip-4602" tabindex="0">
                                                                <p data-v-686e7260="" class="value"> {{kmb($item->digg_count)}} </p>
                                                                <p data-v-686e7260="" class="caption"> いいね数 </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul><!---->
                                <div class="el-loading-mask" style="display: none;">
                                    <div class="el-loading-spinner"><i class="el-icon-loading"></i>
                                        <p class="el-loading-text">ロード中...</p></div>
                                </div>
                            </div>
                        </div><!---->
                        <span data-v-035982d7="" class="">
                            <div data-v-a70b1948="" data-v-035982d7="" class="pagination-container pagination-center" pager-count="11"><!---->
                                <div data-v-a70b1948="" class="el-pagination is-background">
                                    <button type="button" disabled="disabled" class="btn-prev"><span>前へ</span></button>
                                    <ul class="el-pager">
                                        <li class="number active">1</li><!---->
                                        <li class="number">2</li>
                                        <li class="number">3</li>
                                        <li class="number">4</li>
                                        <li class="number">5</li>
                                        <li class="number">6</li>
                                        <li class="number">7</li>
                                        <li class="number">8</li>
                                        <li class="number">9</li>
                                        <li class="number">10</li>
                                        <li class="el-icon more btn-quicknext el-icon-more"></li>
                                        <li class="number">49030</li>
                                    </ul>
                                    <button type="button" class="btn-next"><span>次へ</span></button>
                                    <span class="el-pagination__sizes">
                                        <div class="el-select el-select--mini"><!---->
                                            <div class="el-input el-input--mini el-input--suffix"><!---->
                                                <input type="text" readonly="readonly" autocomplete="off"
                                                       placeholder="Select" class="el-input__inner"><!---->
                                                <span class="el-input__suffix">
                                                    <span class="el-input__suffix-inner">
                                                        <i class="el-select__caret el-input__icon el-icon-arrow-up"></i>
                                                        <!----><!----><!----><!----><!---->
                                                    </span><!---->
                                                </span>
                                                <!----><!---->
                                            </div>
                                            <div class="el-select-dropdown el-popper" style="display: none;">
                                                <div class="el-scrollbar" style="">
                                                    <div class="el-select-dropdown__wrap el-scrollbar__wrap"
                                                         style="margin-bottom: -17px; margin-right: -17px;">
                                                        <ul class="el-scrollbar__view el-select-dropdown__list"><!---->
                                                            <li class="el-select-dropdown__item selected"><span>12/page</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="el-scrollbar__bar is-horizontal">
                                                        <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
                                                    </div>
                                                    <div class="el-scrollbar__bar is-vertical">
                                                        <div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div>
                                                    </div>
                                                </div>
                                                <!---->
                                            </div>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </span><!---->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.flatpickr-range').flatpickr({
                mode: 'range'
            });
            $('#searchBtn').click(function () {

            })
        })
    </script>
</x-app-layout>
