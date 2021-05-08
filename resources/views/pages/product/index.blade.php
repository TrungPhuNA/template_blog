@extends('layouts.app_default')
@section('css')
    <?php $style = file_get_contents('assets/css/home.min.css');echo $style;?>
@stop

@section('not_container')
    @include('components.header.header', [
        'container' => 'container'
    ])
    <section class="breadcrumb">
        <div class="container breadcrumb-content">
            <ul>
                <li><a href="/" title="Trang chủ">Trang chủ <i class="fa fa-angle-right"></i></a></li>
                <li><a href="{{ route('get_document.render', $category->c_slug.'-c') }}"
                       title="{{ $category->c_name }}">{{ $category->c_name }}<i class="fa fa-angle-right"></i></a></li>
                <li><span>{{ $product->pro_name }}</span></li>
            </ul>
        </div>
    </section>
@stop

@section('content-fluid')
    <div class="container main-document">
        @if(detectDevice() !== 'mobile')
            @include('pages.document.include._inc_document_sidebar')
        @endif
        <div class="col-content">
            <div class="detail">
                <div class="detail-avatar">
                    <a href="">
                        <img src="{{ asset('images/icon/word-icon.jpg') }}" alt="">
                    </a>
                </div>
                <div class="detail-info">
                    <h1><strong>{{ $product->pro_name }}</strong> <span style="color: #007bff"> {{ $product->pro_status == 2 ? '' : ' - Đang hoàn thành' }}</span></h1>
                    <p class="detail-price">
                        <span class="price price-new">{{ number_format($product->pro_price,0,',','.') }} VNĐ</span>
                        @if($product->pro_price_old)
                            <span class="price price-old">{{ number_format($product->pro_price_old,0,',','.') }} VNĐ</span>
                        @endif
                    </p>
                    <p class="detail-action">
                        @if(get_data_user('users'))
                        <a href="{{ route('get_user.shopping.add', $product->id) }}" class="btn btn-not-radius btn-pink js-purchase-product"><i class="fa fa-shopping-bag"></i> Mua ngay</a>
                        <a href="{{ $product->pro_link_preview }}" data-href="{{ route('get.login') }}" target="_blank" class="btn btn-not-radius {{ get_data_user('users') ? '' : 'js-login' }} btn-secondary"><i class="fa fa-eye"></i> Xem thử</a>
                        @else
                            <a href="" class="btn btn-not-radius btn-pink js-form-login"><i class="fa fa-shopping-bag"></i> Mua ngay</a>
                            <a href="" data-href="{{ route('get.login') }}" target="_blank" class="btn btn-not-radius js-form-login btn-secondary"><i class="fa fa-eye"></i> Xem thử</a>
                        @endif
                    </p>
                    @if(detectDevice() == 'desktop')
                        <div class="detail-desc">
                            <ul class="">
                                <li> Thầy cô cần file WORD liên hệ số điện thoại: {{ $configuration->hotline ?? "[N\A]" }}</li>
                                <li> Tài liệu, đề thi Hay và Chất lượng.</li>
                                <li> Tài liệu tải xuống định dạng file PDF.</li>
                                <li> Vui lòng kiểm tra trước khi sử dụng.</li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
            @if(detectDevice() == 'mobile')
                <div class="detail-desc mb20">
                    <ul class="">
                        <li> Thầy cô cần file WORD liên hệ số điện thoại: {{ $configuration->hotline ?? "[N\A]" }}</li>
                        <li> Tài liệu, đề thi Hay và Chất lượng.</li>
                        <li> Tài liệu tải xuống định dạng file PDF.</li>
                        <li> Vui lòng kiểm tra trước khi sử dụng.</li>
                    </ul>
                </div>
            @endif
            <div class="lists-data">
                <div class="header">
                    <h3> Mô tả tài liệu</h3>
                </div>
                <div class="content">
                    <div class="content-description">
                        {{ $product->pro_description }}
                    </div>
                    <div class="content-text mt10">
                        {!! $product->pro_content !!}
                    </div>
                </div>
            </div>
            <div class="lists-data">
                <div class="header">
                    <h3><i class="fa fa-folder"></i> Tài liệu cùng thể loại</h3>
                </div>
                <div class="content">
                    <div class="lists">
                        @foreach($productRelate as $item)
                            @include('components.product._inc_item_product',['product' => $item])
                        @endforeach
                        <div style="clear: both"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('not_container_bottom')
    @include('components.footer.footer', [
        'container' => 'container'
    ])
@stop

@section('script')
    <script type="text/javascript">
        <?php $style = file_get_contents('assets/js/home.js');echo $style;?>
    </script>
@stop
