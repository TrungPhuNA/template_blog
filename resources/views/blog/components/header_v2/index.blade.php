<style>
    .header-v2__link {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .link-employer {
        background: #4688ff;
        padding: 10px;
        color: #fff;
        text-align: center;
        line-height: 1.5;
    }
</style>

<header class="header-v2" id="header-v2">
    <div class="container">
        <div class="flex-between">
            <div class="flex-center">
                <div class="logo">
                    <a href="/" title="123job.vn - Kênh thông tin tư vấn nghề nghiệp">
                        <img src="https://123job.vn/images/logo/logo349x137tim.png" alt="123job.vn - Kênh thông tin tư vấn nghề nghiệp">
                    </a>
                </div>
                @if($heading)
                <div class="page-title">
                    <a class="fs-14" href="{{ $url }}">{{ $heading }}</a>
                </div>
                @endif
            </div>

            <div class="flex-center">
                <div class="header-v2__link">
                    <a href="/cv/mẫu-cv" class="header-v2__item fs-14" style="position:relative">Mẫu CV</a>
                    <a href="https://wiki.123job.vn/gross-to-net" class="header-v2__item fs-14">Gross to net</a>
                    <a href="https://wiki.123job.vn/mbti" class="header-v2__item fs-14">MBTI</a>
                    <a href="/" class="header-v2__item fs-14">Việc làm</a>
                    <a href="/company" class="header-v2__item fs-14">Review công ty</a>
                    {{--<a href="/account/login" class="header-v2__item fs-14" rel="nofollow">Đăng nhập</a>--}}
                    <a href="https://employer.123job.vn/" class="link-employer header-v2__item fs-14" rel="nofollow">
                        <span>Nhà tuyển dụng</span> <br>
                        <span>Đăng tin & Tìm hồ sơ</span>
                    </a>
                </div>
            </div>
        </div>

        @if(!empty($navbar))
            @include('blog.components.navbar')
        @endif

    </div>
</header>