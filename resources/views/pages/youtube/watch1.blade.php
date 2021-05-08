@extends('pages.youtube.master')
@section('css')
    <?php $style = file_get_contents('assets/css/youtube_watch1.min.css');echo $style;?>
@stop

@section('not_container')
    @include('pages.youtube.components.header')
    @include('pages.youtube.components.sidebar_mb')
    <div class="wrap-content">
        <div class="wrap-content__left">
            <div class="watch-content">
                <div class="watch-iframe">
                    <iframe src="https://youtu.be/V1RPi2MYptM" frameborder="0"></iframe>
                </div>
                <div class="detail">
                    <div class="detail__tag">
                        <a href="#">#relaxingmusic</a>
                        <a href="#">#relaxingmusic</a>
                        <a href="#">#relaxingmusic</a>
                    </div>
                    <h1 class="detail__title">
                        Nhạc Thiền Thư Giãn bằng Tiếng Nước Chảy • Bầu Không Khí Yên Bình khi Đi Spa, Tập Yoga và Thư Giãn
                    </h1>
                    <div class="detail__action">
                        <div class="timeline">
                            <span class="view">17.993.636 lượt xem</span>
                            <span class="time">9 thg 11, 2019</span>
                        </div>
                        <div class="box-action">
                            <div class="action-like">
                                <div class="count-like">
                                    <div class="count-like__item">
                                        <div class="item__icon"><i class="fa fa-thumbs-up"></i></div>
                                        <div class="item__number">147 N</div>
                                    </div>
                                    <div class="count-like__item">
                                        <div class="item__icon"><i class="fa fa-thumbs-down"></i></div>
                                        <div class="item__number">10 N</div>
                                    </div>
                                </div>
                                <div class="percent-like">
                                    <div class="percent" style="width: 80%"></div>
                                </div>
                            </div>
                            <div class="box-action__item">
                                <div class="item__icon"><i class="fa fa-share"></i></div>
                                <div class="item__title">Chia sẻ</div>
                            </div>
                            <div class="box-action__item">
                                <div class="item__icon"><i class="fa fa-plus"></i></div>
                                <div class="item__title">Lưu</div>
                            </div>
                            <div class="box-action__item">
                                <a class="item__icon js-show-drop-menu"><i class="fa fa-ellipsis-h"></i></a>
                                <div class="drop-menu">
                                    <a href="#" class="drop-menu__item">
                                        <div class="item__icon"><i class="fa fa-flag"></i></div>
                                        <div class="item__name">Báo vi phạm</div></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="detail__chanel">
                        <div class="chanel-avatar">
                            <img src="https://yt3.ggpht.com/ytc/AAUvwnjA82P9tOx5zstUQxnzJQrggNS-P0GkwNm2j6VTig=s176-c-k-c0x00ffffff-no-rj"
                                 class="img-circle" alt="">
                        </div>
                        <div class="chanel-intro">
                            <div class="intro__top">
                                <div class="intro-name">
                                    <div class="chanel-name"><a href="#">Soothing Relaxation</a> <i class="fa fa-check-circle"></i></div>
                                    <div class="chanel-sub">7,31 Tr người đăng ký</div>
                                </div>
                                <div class="intro-action">
                                    <a href="#" class="btn-subscribe">Đăng ký</a>
                                </div>
                            </div>
                            <div class="intro__bottom">
                                <div class="chanel-desc">
                                    Nhạc thiền thư giãn bằng tiếng nước chảy. Tạo bầu không khí yên bình khi đi spa,
                                    tập yoga và thư giãn bằng bản nhạc êm dịu từ Soothing Relaxation, được sáng tác bởi Peder B. Helland.
                                    Lắng nghe thêm các bản nhạc thư giãn: https://www.youtube.com/watch?v=TwXil...​ Truyền phát hoặc tải nhạc
                                </div>
                                <div class="show-all"><a href="#">Hiển thị thêm</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment">
                    <div class="count-comment">
                        <div class="number">11.620 bình luận</div>
                        <div class="sort">
                            <i class="fa fa-sort-amount-desc"></i>
                            Sắp xếp theo
                        </div>
                    </div>
                    <div class="write-comment">
                        <div class="avatar-writer">
                            <img src="https://yt3.ggpht.com/yti/ANoDKi7pgKloVnqLBT9zxL-fEHsj_lJdk3tdftoIJkGq=s88-c-k-c0x00ffffff-no-rj"
                                 class="img-circle" alt="">
                        </div>
                        <div class="form-write">
                            <div class="input-write">
                                <input type="text" placeholder="Bình luận công khai">
                            </div>
                            <div class="button-write">
                                <a href="#" class="btn-write cancel-write">Hủy</a>
                                <a href="#" class="btn-write submit-write">Bình luận</a>
                            </div>
                        </div>
                    </div>
                    <div class="list-cmt">
                        @for($i = 1; $i <= 10; $i ++)
                        <div class="list-cmt__item">
                            <div class="cmt-avatar">
                                <img src="https://yt3.ggpht.com/ytc/AAUvwniOHf4Sg5B1a2ANWjBAR3Nb51vrfmze5RwhUOO0=s88-c-k-c0x00ffffff-no-rj"
                                     class="img-circle" alt="">
                            </div>
                            <div class="cmt-detail">
                                <div class="cmt-author">
                                    <span class="author-name">Soothing Relaxation</span>
                                    <span class="cmt-time">4 tuần trước</span>
                                </div>
                                <div class="cmt-content">
                                    If you're reading this, no matter who you just remember you're always in someone's prayer.
                                    Don't think you're alone in this big world. T
                                    ake a break. Hold in there. Everything will be fine
                                </div>
                                <div class="cmt-view-all">Đọc thêm</div>
                                <div class="cmt-action">
                                    <div class="count-like">
                                        <i class="fa fa-thumbs-up"></i>
                                        14 N
                                    </div>
                                    <div class="count-like">
                                        <i class="fa fa-thumbs-down"></i>
                                        1 N
                                    </div>
                                    <div class="re-cmt js-re-cmt">Phản hồi</div>
                                </div>
                                <div class="write-comment">
                                    <div class="avatar-writer">
                                        <img src="https://yt3.ggpht.com/yti/ANoDKi7pgKloVnqLBT9zxL-fEHsj_lJdk3tdftoIJkGq=s88-c-k-c0x00ffffff-no-rj"
                                             class="img-circle" alt="">
                                    </div>
                                    <div class="form-write">
                                        <div class="input-write">
                                            <input type="text" placeholder="Bình luận công khai">
                                        </div>
                                        <div class="button-write">
                                            <a href="#" class="btn-write cancel-write">Hủy</a>
                                            <a href="#" class="btn-write submit-write">Bình luận</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cmt-menu">
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
                        <div class="list-cmt-sub">
                            <div class="list-cmt__item item--sub">
                                <div class="cmt-avatar">
                                    <img src="https://yt3.ggpht.com/ytc/AAUvwniOHf4Sg5B1a2ANWjBAR3Nb51vrfmze5RwhUOO0=s88-c-k-c0x00ffffff-no-rj"
                                         class="img-circle" alt="">
                                </div>
                                <div class="cmt-detail">
                                    <div class="cmt-author">
                                        <span class="author-name">Soothing Relaxation</span>
                                        <span class="cmt-time">4 tuần trước</span>
                                    </div>
                                    <div class="cmt-content">
                                        If you're reading this, no matter who you just remember you're always in someone's prayer.
                                        Don't think you're alone in this big world. T
                                        ake a break. Hold in there. Everything will be fine
                                    </div>
                                    <div class="cmt-view-all">Đọc thêm</div>
                                    <div class="cmt-action"></div>
                                </div>
                                <div class="cmt-menu">
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
            </div>
        </div>
        <div class="wrap-content__right">
            <div class="box-video">
                <div class="box-video__top">
                    <div class="box-video__title">
                        <div class="name">Đồ án - Website bán quần áo trẻ em laravel</div>
                        <div class="author">Trung Phú NA - <span>1/2</span></div>
                    </div>
                    <div class="box-video__toggle"><i class="fa fa-angle-up"></i></div>
                </div>
                <div class="box-video__list">
                    <div class="box-video__action">
                        <div class="action-left"></div>
                        <div class="action-right"></div>
                    </div>
                @for($i = 1; $i <= 3; $i++)
                    <div class="video-item">
                        <div class="number">{{ $i }}</div>
                        <div class="thumb">
                            <a href="#" class="image">
                                <img src="https://i.ytimg.com/vi/UqKVL56IJB8/hq720.jpg?sqp=-oaymwEcCNAFEJQDSFXyq4qpAw4IARUAAIhCGAFwAcABBg==&rs=AOn4CLCQs50KnvWQShSqVQCGc5miBHZTgQ"
                                     alt="">
                            </a>
                            <div class="action">
                                <div class="action__item">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                            </div>
                            <div class="time-length">10:10</div>
                        </div>
                        <div class="detail">
                            <div class="content">
                                <a href="#" class="title">TĂNG PHÚC ft TRƯƠNG THẢO NHI| CHỈ LÀ KHÔNG CÙNG NHAU (Nhạc Hoa
                                    Lời Việt) | Mây In The Nest 28.3.2021</a>
                                <a href="#" class="author">TĂNG PHÚC OFFICIAL <i class="fa fa-check-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
            @for($i = 1; $i <= 10; $i++)
            <div class="video-sidebar">
                <div class="thumb">
                    <a href="#" class="image">
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
                        <a href="#" class="title">TĂNG PHÚC ft TRƯƠNG THẢO NHI| CHỈ LÀ KHÔNG CÙNG NHAU (Nhạc Hoa
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
            <div class="video-sidebar">
                <div class="thumb">
                    <a href="#" class="image">
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
                        <a href="#" class="title">Danh sách kết hợp – Henry 헨리 'TRAP' MV (with Kyuhyun &
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
@stop

@section('content-fluid')
@stop

@section('script')
    <script type="text/javascript">
        <?php $style = file_get_contents('assets/js/youtube.js');echo $style;?>
    </script>
@stop
