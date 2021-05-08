@extends('blog::layouts.app_master_blog')
@section('css')
    <link href="{{ mix('/css/main_tag.min.css', 'blog_static') }}" rel="stylesheet">
@stop
@section('header')
	@include('blog::components.header.index')
@stop
@section('content')
<main>
	<div class="container">
		<div class="hot-cat">
			<h1 class="hot-cat__title">Tổng hợp từ khoá thông tin về nghề nghiệp</h1>
			<div class="hot-cat__content">
				<div class="main-content" style="margin-top: 15px !important;">
					<p>
						Thẻ là một từ khóa hoặc nhãn phân loại câu hỏi của bạn với các câu hỏi tương tự khác. Sử dụng các thẻ phù hợp giúp người khác dễ dàng tìm thấy và trả lời câu hỏi của bạn hơn
					</p>
				</div>
			</div>
		</div>
	</div>
</main>
@stop