<header class="header" id="header">
    <div class="header-top">
        <div class="container">
            <div class="d-flex jct-between ali-center">
                <div class="header-top__left d-flex">
                    <a class="header-top__item" href="/" title="Tìm việc"><i class="fa fa-angle-left"></i> Trở về trang
                        chủ</a>
                </div>
                <div class="header-top__right">
                    <a href="/" class="header-top__item">Việc làm</a>
                    <a href="/company" class="header-top__item">Review công ty</a>
                    <a href="http://bit.ly/30owjwZ" class="header-top__item">Tạo CV xin việc</a>
                    <a href="https://employer.123job.vn/" class="header-top__item">Nhà tuyển dụng</a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-body">
        <div class="container">
            <div class="d-flex ali-center">
                <div class="logo">
                    <a href="{{ route('get.blog.index') }}" title="123job.vn - Kênh thông tin tư vấn nghề nghiệp">
                        <img src="https://123job.vn/images/logo/logo349x137tim.png"
                             alt="123job.vn - Kênh thông tin tư vấn nghề nghiệp">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bot">
        <div class="container">
            @include('blog.components.navbar')
        </div>
        @if(!\Request::is('tim-kiem'))
            <div class="popup-search">
                <form action="" class="form-search-blog">
                    <input type="text" name="" class="input-bass" placeholder="Nhập thông tin bạn muốn tìm ...">
                    <button type="submit" class="btn-handle"><i class="fa fa-search"></i></button>
                </form>
            </div>
        @endif
    </div>
</header>
