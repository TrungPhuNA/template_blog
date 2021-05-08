@extends('layouts.app_default')
@section('css')
    <?php $style = file_get_contents('assets/css/home.min.css');echo $style;?>
@stop

@section('not_container')
    @include('components.header.header', [
        'container' => 'container'
    ])
@stop

@section('content-fluid')
    <div class="container main-document">
        @if(detectDevice() !== 'mobile')
            @include('pages.document.include._inc_document_sidebar')
        @endif
        <div class="col-content">
            <div class="lists-keyword">
                <p><span class="fa fa-hand-o-right"></span> Xu hướng</p>
                @foreach($keywords ?? [] as $keyword)
                    <a href="{{ route('get_document.render',['slug' => $keyword->k_slug.'-k']) }}"
                       class="tooltip fade btn btn-xs btn-primary" title="{{ $keyword->k_name }}"
                       data-title="{{ $keyword->k_name }}">[{{ $keyword->k_name }}]</a>
                @endforeach
            </div>
            <div class="lists-data">
                <div class="header">
                    <h3><i class="fa fa-folder"></i> Tài liệu
                        <img src="{{ asset('hot.gif') }}" alt="" style="width: 30px">
                    </h3>
                </div>
                @if(detectDevice() !== 'mobile')
                    <div class="content content-home">
                        @foreach ($productsHot->chunk(5) ?? [] as $productItems)
                            <div class="lists lists-home">
                                @foreach($productItems ?? [] as $item)
                                    @include('components.product._inc_item_product',['product' => $item])
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="content">
                        <div class="lists">
                            @foreach ($productsHot ?? [] as $item)
                                @include('components.product._inc_item_product',['product' => $item])
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
            <div class="lists-data">
                <div class="header">
                    <h3><i class="fa fa-folder"></i> Tài liệu mới nhất</h3>
                </div>
                @if(detectDevice() !== 'mobile')
                    <div class="content content-home">
                        @foreach ($products->chunk(10) ?? [] as $productItems)
                            <div class="lists lists-home">
                                @foreach($productItems ?? [] as $item)
                                    @include('components.product._inc_item_product',['product' => $item])
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="content">
                        <div class="lists">
                            @foreach ($products ?? [] as $item)
                                @include('components.product._inc_item_product',['product' => $item])
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
            <div class="lists-data">
                <div class="header">
                    <h3><i class="fa fa-folder"></i> Tài liệu ngẫn nhiên</h3>
                </div>
                @if(detectDevice() !== 'mobile')
                    <div class="content content-home">
                        @foreach ($productsRandom->chunk(10) ?? [] as $productItems)
                            <div class="lists lists-home">
                                @foreach($productItems ?? [] as $item)
                                    @include('components.product._inc_item_product',['product' => $item])
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="content">
                        <div class="lists">
                            @foreach ($productsRandom ?? [] as $item)
                                @include('components.product._inc_item_product',['product' => $item])
                            @endforeach
                        </div>
                    </div>
                @endif
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
