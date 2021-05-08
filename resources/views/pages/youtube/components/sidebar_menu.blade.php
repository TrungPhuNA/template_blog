<div id="sidebar-menu" class="default">
    @include('pages.youtube.components.menu_default')
    <div class="menu-collapse">
        <a href="{{ route('get.youtube.index') }}" class="menu-collapse__item active">
            <div class="item__icon"><i class="fa fa-home"></i></div>
            <div class="item__title">Trang chủ</div>
        </a>
        <a href="{{ route('get.youtube.list_video') }}" class="menu-collapse__item">
            <div class="item__icon"><i class="fa fa-compass"></i></div>
            <div class="item__title">Khám phá</div>
        </a>
        <a href="{{ route('get.youtube.list_video') }}" class="menu-collapse__item">
            <div class="item__icon"><i class="fa fa-youtube-play"></i></div>
            <div class="item__title">Kênh đăng ký</div>
        </a>
        <a href="{{ route('get.youtube.list_video') }}" class="menu-collapse__item">
            <div class="item__icon"><i class="fa fa-play"></i></div>
            <div class="item__title">Thư viện</div>
        </a>
    </div>
</div>