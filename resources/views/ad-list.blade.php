<div data-v-035982d7="">
    <div data-v-035982d7="" element-loading-text="Loading..."
         element-loading-spinner="el-icon-loading" class="videos-list dataMain">
        <ul data-v-035982d7=""
            class="lists-wrap wt-block-grid wt-list-unstyled wt-block-grid-xs-1 wt-block-grid-sm-1 wt-block-grid-md-2 wt-block-grid-lg-3 wt-block-grid-xl-4">
            @foreach($data as $item)
                <li data-v-035982d7="" class="item-wrap wt-block-grid__item">
                    <div data-v-686e7260="" data-v-035982d7="" class="item-inner">
                        <div data-v-686e7260="" class="top">
                            <div data-v-686e7260="" class="top-base">
                                                        <span data-v-686e7260="" index="23">
{{--                                                            <div role="tooltip" id="el-popover-{{$item->id}}" aria-hidden="true" class="el-popover el-popper actionDrop" tabindex="0"--}}
{{--                                                                 style="width: 180px; display: none;"><!---->--}}
{{--                                                                <ul data-v-686e7260="">--}}
{{--                                                                    <li data-v-686e7260="" class="isFirst">--}}
{{--                                                                        <a data-v-686e7260="" href="{{route('detail', $item->id)}}" class="link-item title a-link" target="_blank"> 広告詳細 </a>--}}
{{--                                                                    </li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
                                                            <span class="el-popover__reference-wrapper">
                                                                <div data-v-686e7260="" class="pro-info el-popover__reference" aria-describedby="el-popover-{{$item->id}}" tabindex="0">
                                                                    <span data-v-686e7260="" class="el-avatar el-avatar--square">
                                                                        <img src="{{$item->app_image}}"
                                                                             style="object-fit: cover;">
                                                                    </span>
                                                                    <div data-v-686e7260="" class="right" style="max-width: calc(83% - 76px);">
                                                                        <p data-v-686e7260="" class="nickname">{{$item->app_name}}</p>
                                                                        <p data-v-686e7260="" class="domain">{{$item->root_path}}</p>
                                                                    </div>
                                                                    <a class="el-button btn-save-record el-button--primary" href="{{route('detail', $item->id)}}"
                                                                       target="_blank" style="padding: 10px">広告詳細</a>
                                                                </div>
                                                            </span>
                                                        </span>
                                <!---->
                                <div data-v-686e7260="" class="el-tooltip btn-collect btn item {{isset($item->genre_id) ? 'active' : ''}}" aria-describedby="el-tooltip-{{$item->id}}" data-id="{{$item->id}}" tabindex="0">
                                    <div class="icon-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div data-v-686e7260="" class="other-info">
                                <div data-v-686e7260="" class="el-tooltip create-time btn item"
                                     aria-describedby="el-tooltip-724" tabindex="0" style="padding: 5px;">
{{--                                    <svg data-v-7e6c6234="" data-v-686e7260=""--}}
{{--                                         aria-hidden="true" class="svg-icon">--}}
{{--                                        <use data-v-7e6c6234="" xlink:href="#icon-rili2"></use>--}}
{{--                                    </svg>--}}
                                    <span data-v-686e7260="">公開日: {{date('Y-m-d', (int)($item->create_time))}}</span>
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
                                    <svg data-v-7e6c6234="" data-v-686e7260="" aria-hidden="true" class="svg-icon">
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
            <button type="button" {{$page == 1 ? 'disabled' : ''}} class="btn-prev" data-page="{{$page}}"><span>前へ</span></button>
            <ul class="el-pager">
                @if($page_count > 9 && $page> 5)
                    <li class="el-icon more btn-quicknext el-icon-more"></li>
                    <li class="number">{{$total}}</li>
                @endif

                @for($i = ($page > 4 ? $page - 4 : 1); $i <= ($page_count < $page+4 ? $page_count : $page + 4); $i++)
                    <li class="number {{$i == $page ? 'active' : ''}}">{{$i}}</li>
                @endfor
                    @if($page_count > 9 && $page < $page_count - 4)
                        <li class="el-icon more btn-quicknext el-icon-more"></li>
                        <li class="number">{{$total}}</li>
                    @endif
            </ul>
            <button type="button" {{$page == $page_count ? 'disabled' : ''}} class="btn-next" data-page="{{$page}}"><span>次へ</span></button>
        </div>
    </div>
</span><!---->

