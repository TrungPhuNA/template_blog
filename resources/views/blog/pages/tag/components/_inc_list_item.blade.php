<div class="box-title box-hot-cat__title">
	<h2>Chủ đề nổi bật nhất</h2>
	<div class="line"></div>
</div>
<div class="list-hot-cat">
	@if(\Request::is('blog-v2'))
		@for($i=1;$i<=9;$i++)
		<a href="{{url('blog-v2/danh-muc')}}" class="lhc-item hot-cat">
			<img src="{{asset('images/icon/khach_san.png')}}" alt="">
			<p><span>Phỏng Vấn Xin Việc Kế Toán</span></p>
		</a>
		@endfor
		<a href="{{url('blog-v2/danh-muc')}}" title="" class="lhc-item view-all-cat">
			<i class="fa fa-play"></i>
			<span>Xem tất cả</span>
		</a>
	@elseif(\Request::is('chu-de-noi-bat'))
		@for($i=1;$i<=18;$i++)
		<a href="{{url('blog-v2/danh-muc')}}" class="lhc-item hot-cat">
			<img src="{{asset('images/icon/khach_san.png')}}" alt="">
			<p><span>Phỏng Vấn Xin Việc Kế Toán</span></p>
		</a>
		@endfor
	@else
		@for($i=1;$i<=4;$i++)
		<a href="{{url('blog-v2/danh-muc')}}" class="lhc-item hot-cat">
			<img src="{{asset('images/icon/khach_san.png')}}" alt="">
			<p><span>Phỏng Vấn Xin Việc Kế Toán</span></p>
		</a>
		@endfor
	@endif
</div>