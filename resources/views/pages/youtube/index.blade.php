@extends('pages.youtube.master')
@section('css')
    <?php $style = file_get_contents('assets/css/youtube.min.css');echo $style;?>
@stop

@section('not_container')
    @include('pages.youtube.components.header')
    @include('pages.youtube.components.sidebar_menu')
    @include('pages.youtube.components.sidebar_mb')
    <div id="main-content" class="default">
        <div class="section-video">
            <div class="video">
                @for($i = 1; $i <= 4; $i++)
                    <div class="video__item">
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
                            <a href="#" class="avatar">
                                <img src="https://yt3.ggpht.com/ytc/AAUvwniG8GDgvKd3749k13BmJrr1bB52EUYnU5em28LNJw=s88-c-k-c0x00ffffff-no-rj"
                                     class="img-circle" alt="">
                            </a>
                            <div class="content">
                                <a href="{{ route('get.youtube.watch1') }}" class="title">TĂNG PHÚC ft TRƯƠNG THẢO NHI| CHỈ LÀ KHÔNG CÙNG NHAU (Nhạc Hoa
                                    Lời Việt) | Mây In The Nest 28.3.2021</a>
                                <a href="#" class="author">TĂNG PHÚC OFFICIAL <i class="fa fa-check-circle"></i></a>
                                <div class="timeline">
                                    <span class="view">206 N lượt xem</span>
                                    <span class="time">3 tháng trước</span>
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
                    <div class="video__item">
                        <div class="thumb">
                            <a href="{{ route('get.youtube.watch1') }}" class="image">
                                <img src="https://i.ytimg.com/vi/IsXB5eRMRno/hqdefault.jpg?sqp=-oaymwEXCOADEI4CSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLAqSWG2ypFlT3nozcfH8cDX8Fs0Xw"
                                     alt="">
                            </a>
                            <div class="number-list">
                                <div class="number">50+</div>
                                <div><i class="fa fa-play"></i></div>
                            </div>
                            <div class="action-play">
                                <i class="fa fa-play"></i> Phát tất cả
                            </div>
                        </div>
                        <div class="detail">
                            <div class="content">
                                <a href="{{ route('get.youtube.watch1') }}" class="title">Danh sách kết hợp – Henry 헨리 'TRAP' MV (with Kyuhyun &
                                    Taemin)</a>
                                <a href="#" class="author">Big Bang, Lee Tae-min, Cho Kyu-hyun và nhiều nghệ sĩ khác</a>
                            </div>
                            <div class="menu">
                                <div class="box-menu js-show-drop-menu">
                                    <i class="fa fa-ellipsis-v"></i>
                                    <div class="drop-menu">
                                        <a href="#" class="drop-menu__item">
                                            <div class="item__icon"><i class="fa fa-ban"></i></div>
                                            <div class="item__name">Không quan tâm</div></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="big-line"></div>
        <div class="section-video">
            <div class="section-video__header">
                <h2 class="section-video__title">Tin tức về COVID-19</h2>
                <div class="section-video__close"><a href="#"><i class="fa fa-times"></i></a></div>
            </div>
            <div class="video">
                @for($i = 1; $i <= 4; $i++)
                    <div class="video__item">
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
                            <a href="#" class="avatar">
                                <img src="https://yt3.ggpht.com/ytc/AAUvwniG8GDgvKd3749k13BmJrr1bB52EUYnU5em28LNJw=s88-c-k-c0x00ffffff-no-rj"
                                     class="img-circle" alt="">
                            </a>
                            <div class="content">
                                <a href="{{ route('get.youtube.watch1') }}" class="title">TĂNG PHÚC ft TRƯƠNG THẢO NHI| CHỈ LÀ KHÔNG CÙNG NHAU (Nhạc Hoa
                                    Lời Việt) | Mây In The Nest 28.3.2021</a>
                                <a href="#" class="author">TĂNG PHÚC OFFICIAL <i class="fa fa-check-circle"></i></a>
                                <div class="timeline">
                                    <span class="view">206 N lượt xem</span>
                                    <span class="time">3 tháng trước</span>
                                </div>
                            </div>
                            <div class="drop-menu">
                                <a href="#" class="drop-menu__item">
                                    <div class="item__icon"><i class="fa fa-ban"></i></div>
                                    <div class="item__name">Không quan tâm</div></a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="view-more"><i class="fa fa-angle-down"></i></div>
        </div>
        <div class="big-line"></div>
        <div class="section-video">
            <div class="video">
                @for($i = 1; $i <= 4; $i++)
                    <div class="video__item">
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
                            <a href="#" class="avatar">
                                <img src="https://yt3.ggpht.com/ytc/AAUvwniG8GDgvKd3749k13BmJrr1bB52EUYnU5em28LNJw=s88-c-k-c0x00ffffff-no-rj"
                                     class="img-circle" alt="">
                            </a>
                            <div class="content">
                                <a href="{{ route('get.youtube.watch1') }}" class="title">TĂNG PHÚC ft TRƯƠNG THẢO NHI| CHỈ LÀ KHÔNG CÙNG NHAU (Nhạc Hoa
                                    Lời Việt) | Mây In The Nest 28.3.2021</a>
                                <a href="#" class="author">TĂNG PHÚC OFFICIAL <i class="fa fa-check-circle"></i></a>
                                <div class="timeline">
                                    <span class="view">206 N lượt xem</span>
                                    <span class="time">3 tháng trước</span>
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
                    <div class="video__item">
                        <div class="thumb">
                            <a href="{{ route('get.youtube.watch1') }}" class="image">
                                <img src="https://i.ytimg.com/vi/IsXB5eRMRno/hqdefault.jpg?sqp=-oaymwEXCOADEI4CSFryq4qpAwkIARUAAIhCGAE=&rs=AOn4CLAqSWG2ypFlT3nozcfH8cDX8Fs0Xw"
                                     alt="">
                            </a>
                            <div class="number-list">
                                <div class="number">50+</div>
                                <div><i class="fa fa-play"></i></div>
                            </div>
                            <div class="action-play">
                                <i class="fa fa-play"></i> Phát tất cả
                            </div>
                        </div>
                        <div class="detail">
                            <div class="content">
                                <a href="{{ route('get.youtube.watch1') }}" class="title">Danh sách kết hợp – Henry 헨리 'TRAP' MV (with Kyuhyun &
                                    Taemin)</a>
                                <a href="#" class="author">Big Bang, Lee Tae-min, Cho Kyu-hyun và nhiều nghệ sĩ khác</a>
                            </div>
                            <div class="menu">
                                <div class="box-menu js-show-drop-menu">
                                    <i class="fa fa-ellipsis-v"></i>
                                    <div class="drop-menu">
                                        <a href="#" class="drop-menu__item">
                                            <div class="item__icon"><i class="fa fa-ban"></i></div>
                                            <div class="item__name">Không quan tâm</div></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="big-line"></div>
    </div>
@stop

@section('content-fluid')
@stop

@section('script')
    <script type="text/javascript">
        <?php $style = file_get_contents('assets/js/youtube.js');echo $style;?>
    </script>
@stop
