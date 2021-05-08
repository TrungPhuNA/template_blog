<footer class="footer {{ isset($container) ? $container : (isset($container_full) ? $container_full : '') }}">
    <div class="footer__info ">
        <div class="info-logo">
            <div class="info-logo__content">
                <a href="/" class="item logo" title="Về trang chủ">{{ $configuration->company ?? "[N\A]" }}</a>
                <p class="item">{{ $configuration->address ?? "[N\A]" }}</p>
                <p class="item">Email: {{ $configuration->email ?? "[N\A]" }}</p>
                <p>Hãy gọi cho chúng tôi để được tư vấn 24/7</p>
                <div class="call">
                    <a href="#">
                        <i class="la la-phone"></i>
                        {{ $configuration->hotline ?? "[N\A]" }}
                    </a>
                </div>
            </div>
        </div>
        <div class="info-link">

            <div class="item-link">
                <h3 class="">Thông tin liên hệ</h3>
                <div class="">
                    <a href=""><span>Zalo</span> <span>{{ $configuration->hotline ?? "[N\A]" }}</span></a>
                    <a href=""><span>Email</span> <span>{{ $configuration->email ?? "[N\A]" }}</span></a>
                    @foreach($phoneGlobal ?? [] as $key => $phone)
                        <a href="tel:{{ $phone->ps_phone }}" rel="nofollow"><span>Hotline {{ $key + 1 }}</span> <span>{{ $phone->ps_phone ?? "0986.429.994" }}</span></a>
                    @endforeach
                </div>
            </div>
            <div class="item-link">
                <h3 class="">Chính sách quy định</h3>
                <div class="">
                    <a href=""><i class="fa fa-caret-right"></i> Hướng dẫn mua hàng</a>
                    <a href=""><i class="fa fa-caret-right"></i> Thanh toán</a>
                </div>
            </div>
            <div class="item-link">
                <h3 class="">Chính sách quy định</h3>
                <div class="">
                    <a href=""><i class="fa fa-caret-right"></i> Hướng dẫn mua hàng</a>
                    <a href=""><i class="fa fa-caret-right"></i> Thanh toán</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__line"></div>
    <p class="footer_bottom_text text-center">
        Thiết kế website<a href="https://www.facebook.com/TrungPhuNA/" style="color: #ef7733">
            TrungPhuNA</a><br>
        <a href="tel:0986420994">Liên hệ <b>0986.420.994</b></a>
    </p>
</footer>
