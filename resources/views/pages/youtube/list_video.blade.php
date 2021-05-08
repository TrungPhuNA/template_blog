@extends('pages.youtube.master')
@section('css')
    <?php $style = file_get_contents('assets/css/youtube_list.min.css');echo $style;?>
@stop

@section('not_container')
    @include('pages.youtube.components.header')
    @include('pages.youtube.components.sidebar_menu')
    @include('pages.youtube.components.sidebar_mb')
    <div id="main-content" class="default" style="padding-top: 0 !important;">
        <div class="list-cat">
            <a href="#" class="list-cat__item">
                <div class="item__icon">
                    <img src="https://youtube.com/img/explore/destinations/icons/trending_color_64.png" alt="">
                </div>
                <div class="item__title">Thịnh hành</div>
            </a>
            <a href="#" class="list-cat__item">
                <div class="item__icon">
                    <img src="https://youtube.com/img/explore/destinations/icons/music_color_64.png" alt="">
                </div>
                <div class="item__title">Âm nhạc</div>
            </a>
            <a href="#" class="list-cat__item">
                <div class="item__icon">
                    <img src="https://youtube.com/img/explore/destinations/icons/gaming_color_64.png" alt="">
                </div>
                <div class="item__title">Trò chơi</div>
            </a>
            <a href="#" class="list-cat__item">
                <div class="item__icon">
                    <img src="https://youtube.com/img/explore/destinations/icons/news_color_64.png" alt="">
                </div>
                <div class="item__title">Tin tức</div>
            </a>
            <a href="#" class="list-cat__item">
                <div class="item__icon">
                    <img src="https://youtube.com/img/explore/destinations/icons/sports_color_64.png" alt="">
                </div>
                <div class="item__title">Thể thao</div>
            </a>
        </div>
        <h1 class="small-title">Video thịnh hành</h1>
        <div class="list-video">
            @for($i = 1; $i <= 20; $i++)
                <div class="video-item">
                    <div class="thumb">
                        <a href="{{ route('get.youtube.watch1') }}" class="image">
                            <img src="https://i.ytimg.com/vi/UqKVL56IJB8/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCQs50KnvWQShSqVQCGc5miBHZTgQ"
                                 alt="">
                        </a>
                        <div class="action">
                            <div class="action__item">
                                <i class="fa fa-clock-o"></i>
                                <div class="note">Xem sau</div>
                            </div>
                            <div class="action__item">
                                <i class="fa fa-indent"></i>
                                <div class="note">Thêm vào danh sách chờ</div>
                            </div>
                        </div>
                        <div class="time-length">10:10</div>
                    </div>
                    <div class="detail">
                        <div class="content">
                            <a href="{{ route('get.youtube.watch1') }}" class="title">TĂNG PHÚC ft TRƯƠNG THẢO NHI| CHỈ LÀ KHÔNG CÙNG NHAU (Nhạc Hoa
                                Lời Việt) | Mây In The Nest 28.3.2021</a>
                            <a href="#" class="author">TĂNG PHÚC OFFICIAL <i class="fa fa-check-circle"></i></a>
                            <div class="timeline">
                                <span class="view">206 N lượt xem</span>
                                <span class="time">3 tháng trước</span>
                            </div>
                            <div class="desc">
                                TĂNG PHÚC ft TRƯƠNG THẢO NHI| CHỈ LÀ KHÔNG CÙNG NHAU (Nhạc Hoa Lời Việt)
                                | Mây In The Nest 28.3.2021 ZingMp3: https://zingmp3.vn/bai-hat/Chi-La-Khong-Cung-Nhau-Live-Version-Tang-P TĂNG PHÚC ft TRƯƠNG THẢO NHI| CHỈ LÀ KHÔNG CÙNG NHAU (Nhạc Hoa Lời Việt)
                                | Mây In The Nest 28.3.2021 ZingMp3: https://zingmp3.vn/bai-hat/Chi-La-Khong-Cung-Nhau-Live-Version-Tang-P...
                            </div>
                        </div>
                        <div class="menu">
                            <div class="box-menu js-show-drop-menu">
                                <i class="fa fa-ellipsis-v"></i>
                                <div class="drop-menu">
                                    <a href="#" class="drop-menu__item">
                                        <div class="item__icon"><i class="fa fa-play-circle"></i></div>
                                        <div class="item__name">Thêm vào danh sách chờ</div></a>
                                    <a href="#" class="drop-menu__item">
                                        <div class="item__icon"><i class="fa fa-clock-o"></i></div>
                                        <div class="item__name">Lưu vào danh sách Xem sau</div></a>
                                    <a href="#" class="drop-menu__item">
                                        <div class="item__icon"><i class="fa fa-play-circle"></i></div>
                                        <div class="item__name">Thêm vào danh sách chờ</div></a>
                                    <div class="line"></div>
                                    <a href="#" class="drop-menu__item">
                                        <div class="item__icon"><i class="fa fa-clock-o"></i></div>
                                        <div class="item__name">Lưu vào danh sách Xem sau</div></a>
                                    <a href="#" class="drop-menu__item">
                                        <div class="item__icon"><i class="fa fa-play-circle"></i></div>
                                        <div class="item__name">Thêm vào danh sách chờ</div></a>
                                    <a href="#" class="drop-menu__item">
                                        <div class="item__icon"><i class="fa fa-clock-o"></i></div>
                                        <div class="item__name">Lưu vào danh sách Xem sau</div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@stop

@section('content-fluid')
@stop

@section('script')
    <script type="text/javascript">
        <?php $style = file_get_contents('assets/js/youtube.js');echo $style;?>
    </script>
@stop
