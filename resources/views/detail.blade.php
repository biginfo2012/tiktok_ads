<x-app-layout>
    <style>
        .btn {
            display: inline-block;
            font-weight: 400;
            color: #212529;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0 !important;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
    </style>
    <div data-v-8f6c04e0="">
        <div data-v-8f6c04e0=""
             class="wt-body-max-width wt-pl-xs-2 wt-pr-xs-2 wt-pl-md-4 wt-pr-md-4 wt-pr-lg-6 wt-pl-lg-6">
            <div data-v-8f6c04e0="" class="page-detail">
                <div data-v-8f6c04e0="" aria-label="Breadcrumb" role="navigation"
                     class="el-breadcrumb common-breadcrumb">
                    <span data-v-8f6c04e0="" class="el-breadcrumb__item" aria-current="page">
                        <a role="link" class="el-breadcrumb__inner is-link" href="{{route('dashboard')}}"> TikTok Ads </a>
                        <i class="el-breadcrumb__separator el-icon-arrow-right"></i>
                    </span>
                    <span data-v-8f6c04e0="" class="el-breadcrumb__item">
                        <span role="link" class="el-breadcrumb__inner">{{$data->desc}}</span>
                        <i class="el-breadcrumb__separator el-icon-arrow-right"></i>
                    </span>
                </div>
                <div data-v-8f6c04e0="" class="section-tab-content section-one">
                    <div data-v-8f6c04e0="">
                        <div class="section">
                            <div data-v-8f6c04e0="" class="content content-detail">
                                <div data-v-8f6c04e0="" class="video">
                                    <div data-v-8f6c04e0="" class="video-wrap">
                                        <video data-v-8f6c04e0="" controls="controls" oncontextmenu="return false"
                                               autoplay="autoplay">
                                            <source data-v-8f6c04e0=""
                                                    src="{{$data->video_url}}"
                                                    type="video/mp4">
                                        </video>
                                    </div>
                                    <div data-v-8f6c04e0="" class="left-bottom">
                                        <div data-v-8f6c04e0="" class="data-box">
                                            <div data-v-8f6c04e0="" class="item">
                                                <svg data-v-7e6c6234="" data-v-8f6c04e0="" aria-hidden="true"
                                                     class="svg-icon">
                                                    <use data-v-7e6c6234="" xlink:href="#icon-xihuande2"></use>
                                                </svg>
                                                <i data-v-8f6c04e0=""> {{$data->play_count}} </i></div>
                                            <div data-v-8f6c04e0="" class="item text-center">
                                                <svg data-v-7e6c6234="" data-v-8f6c04e0="" aria-hidden="true"
                                                     class="svg-icon">
                                                    <use data-v-7e6c6234="" xlink:href="#icon-pinglun1"></use>
                                                </svg>
                                                <i data-v-8f6c04e0=""> {{$data->share_count}} </i></div>
                                            <div data-v-8f6c04e0="" class="item text-right">
                                                <svg data-v-7e6c6234="" data-v-8f6c04e0="" aria-hidden="true"
                                                     class="svg-icon">
                                                    <use data-v-7e6c6234="" xlink:href="#icon-fenxinag2"></use>
                                                </svg>
                                                <i data-v-8f6c04e0=""> {{$data->digg_count}} </i></div>
                                        </div>
                                    </div>
                                </div>
                                <div data-v-8f6c04e0="" class="info-box">
                                    <div data-v-8f6c04e0="" class="ad-advertiser">
                                        <div data-v-8f6c04e0="" class="ad-advertiser_inner">
                                            <span data-v-8f6c04e0="" class="el-avatar el-avatar--square">
                                                <img src="{{$data->app_image}}" style="object-fit: cover;">
                                            </span>
                                            <div data-v-8f6c04e0="" class="right">
                                                <p data-v-8f6c04e0="" class="name">{{$data->app_name}}</p>
                                                <div data-v-8f6c04e0="" class="other">
                                                    <span data-v-8f6c04e0="" class="item">
                                                        <i data-v-8f6c04e0="" class="_attr"> 遷移先： </i>
                                                        <a data-v-8f6c04e0="" href="{{$data->app_url}}" target="_blank" class="_value el-link el-link--default"><!---->
                                                            <span class="el-link--inner"> {{$data->root_path}}</span><!---->
                                                        </a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-v-8f6c04e0="" class="top">
                                        <ul data-v-8f6c04e0="" class="list-base-info">
                                            <li data-v-8f6c04e0=""><p data-v-8f6c04e0="" class="_attr">表示名:</p>
                                                <p data-v-8f6c04e0="" data-clipboard-text="beckettsimonon" class="_value btn adName"> {{$data->app_name}}
                                                    <svg data-v-7e6c6234="" data-v-8f6c04e0="" aria-hidden="true" class="svg-icon">
                                                        <use data-v-7e6c6234="" xlink:href="#icon-fuzhi3"></use>
                                                    </svg>
                                                </p>
                                            </li>
                                            <li data-v-8f6c04e0=""><p data-v-8f6c04e0="" class="_attr">投稿内容:</p>
                                                <p data-v-8f6c04e0="" data-clipboard-text="{{$data->desc}}" class="_value btn adDesc"> {{$data->desc}}
                                                    <svg data-v-7e6c6234="" data-v-8f6c04e0="" aria-hidden="true"
                                                         class="svg-icon">
                                                        <use data-v-7e6c6234="" xlink:href="#icon-fuzhi3"></use>
                                                    </svg>
                                                </p>
                                            </li>
                                            <li data-v-8f6c04e0="" class="li-data-count">
                                                <p data-v-8f6c04e0="" class="_attr">広告資料:</p>
                                                <div data-v-8f6c04e0="" class="_value">
                                                    <div data-v-8f6c04e0="" class="data-count">
                                                        <div data-v-8f6c04e0="" class="item">
                                                            <p data-v-8f6c04e0="" class="value">{{number_format($data->play_count)}}</p>
                                                            <p data-v-8f6c04e0="" class="caption"> 再生回数 </p>
                                                        </div>
                                                        <div data-v-8f6c04e0="" class="item">
                                                            <p data-v-8f6c04e0="" class="value"> {{number_format($data->share_count)}} </p>
                                                            <p data-v-8f6c04e0="" class="caption"> シェア </p>
                                                        </div>
                                                        <div data-v-8f6c04e0="" class="item">
                                                            <p data-v-8f6c04e0="" class="value"> {{number_format($data->digg_count)}} </p>
                                                            <p data-v-8f6c04e0="" class="caption"> いいね数 </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li data-v-8f6c04e0="">
                                                <p data-v-8f6c04e0="" class="_attr">公開日:</p>
                                                <p data-v-8f6c04e0="" class="_value"> {{date('Y-m-d', (int)($data->create_time))}} </p></li>
                                            <li data-v-8f6c04e0="">
                                                <p data-v-8f6c04e0="" class="_attr">TikTok Url:</p>
                                                <p data-v-8f6c04e0="" class="_value">
                                                    <span data-v-8f6c04e0="" target="_blank" data-clipboard-text="{{$data->url}}" title="{{$data->url}}" class="btn adTikUrl">{{$data->url}}
                                                        <svg data-v-7e6c6234="" data-v-8f6c04e0="" aria-hidden="true" class="icon-copy svg-icon">
                                                            <use data-v-7e6c6234="" xlink:href="#icon-fuzhi3"></use>
                                                        </svg>
                                                    </span>
                                                </p>
                                            </li>
                                            <li data-v-8f6c04e0="">
                                                <p data-v-8f6c04e0="" class="_attr">ランディングページ:</p>
                                                <p data-v-8f6c04e0="" class="_value">
                                                    <a data-v-8f6c04e0="" href="{{$data->app_url}}" target="_blank" class="btn">{{$data->app_url}}</a>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-v-8f6c04e0="" class="section block-item section-summarize-data">
                        <div data-v-8f6c04e0="" class="table-wrap table-normal">
                            <table data-v-8f6c04e0="" class="at-table text-center">
                                <thead data-v-8f6c04e0="">
                                <tr data-v-8f6c04e0="">
                                    <th data-v-8f6c04e0="" style="width: 40%;"> ランディングページ</th>
                                    <th data-v-8f6c04e0="" style="width: 30%;"> 遷移先</th>
                                    <th data-v-8f6c04e0=""> 表示名</th>
                                </tr>
                                </thead>
                                <tbody data-v-8f6c04e0="">
                                <tr data-v-8f6c04e0="">
                                    <td data-v-8f6c04e0="">
                                        <a data-v-8f6c04e0="" href="{{$data->app_url}}" target="_blank" class="btn a-link">{{$data->app_url}}</a>
                                    </td>
                                    <td data-v-8f6c04e0="">
                                        <a data-v-8f6c04e0="" href="{{$data->app_url}}" target="_blank" class="_value el-link el-link--default">
                                            <!----><span class="el-link--inner"> {{$data->root_path}}</span><!---->
                                        </a>
                                    </td>
                                    <td data-v-8f6c04e0=""><span data-v-8f6c04e0=""> {{$data->app_name}} </span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div data-v-8f6c04e0="" class="section block-item" style="display: none;"><!---->
                        <div data-v-8f6c04e0="" class="chart-box">
                            <div data-v-8f6c04e0="" id="chartBox" class="trend-chart"></div>
                        </div>
                    </div>
                </div><!----><!---->
            </div>
        </div>
    </div>
</x-app-layout>
