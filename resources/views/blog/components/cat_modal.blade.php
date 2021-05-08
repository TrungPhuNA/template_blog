<div class="cat-modal">
	<div class="cat-modal-top d-flex jct-center">
		<form action="" class="form-search-blog">
			<input type="text" name="" class="input-bass" placeholder="Nhập thông tin bạn muốn tìm ...">
			<button type="submit" class="btn-handle"><i class="fa fa-search"></i></button>
		</form>
	</div>
	<div class="cat-modal-body">
		<div class="container">
			<div class="list-cat">

				@for($i=1;$i<=2;$i++)
				<div class="list-cat__item">
					<h3><a href="#">Cân bằng cuộc sống và công việc</a></h3>
					<ul>
						<li><a href="#" title="">Các câu hỏi phỏng vấn</a></li>
						<li><a href="#" title="">Các câu hỏi phỏng vấn khi đi xin việc</a></li>
						<li><a href="#" title="">Các câu hỏi phỏng vấn ngành IT</a></li>
						<li><a href="#" title="">Các câu hỏi phỏng vấn ngành kế toán</a></li>
						<li><a href="#" title="">Các câu hỏi phỏng vấn</a></li>
						<li class="view-all"><a href="#" title="">Xem tất cả<i class="fa fa-angle-right"></i></a></li>
					</ul>
				</div>
				<div class="list-cat__item">
					<h3><a href="#">Cân bằng cuộc sống</a></h3>
					<ul>
						<li><a href="#" title="">Các câu hỏi phỏng vấn</a></li>
						<li><a href="#" title="">Các câu hỏi phỏng vấn khi đi xin việc</a></li>
						<li><a href="#" title="">Các câu hỏi phỏng vấn ngành IT</a></li>
						<li><a href="#" title="">Các câu hỏi phỏng vấn ngành kế toán</a></li>
						<li><a href="#" title="">Các câu hỏi phỏng vấn</a></li>
						<li class="view-all"><a href="#" title="">Xem tất cả<i class="fa fa-angle-right"></i></a></li>
					</ul>
				</div>
				<div class="list-cat__item">
					<h3><a href="#">Phỏng vấn xin việc</a></h3>
					<ul>
						<li><a href="#" title="">Các câu hỏi phỏng vấn</a></li>
						<li><a href="#" title="">Các câu hỏi phỏng vấn khi đi xin việc</a></li>
						<li><a href="#" title="">Các câu hỏi phỏng vấn ngành IT</a></li>
						<li><a href="#" title="">Các câu hỏi phỏng vấn ngành kế toán</a></li>
						<li><a href="#" title="">Các câu hỏi phỏng vấn</a></li>
						<li class="view-all"><a href="#" title="">Xem tất cả<i class="fa fa-angle-right"></i></a></li>
					</ul>
				</div>
				@endfor
			</div>
		</div>
	</div>
	<div class="cat-modal-footer">
		<div class="footer-list-link">
			<ul>
				<li><a href="#" title=""><i class="fa fa-home"></i><span>Trang chủ</span></a></li>
				<li><a href="#" title=""><i class="fa fa-newspaper"></i><span>Việc làm mới nhất</span></a></li>
				<li><a href="#" title=""><i class="fa fa-search"></i><span>Tìm việc làm</span></a></li>
				<li><a href="#" title=""><i class="fa fa-file-alt"></i><span>Mẫu CV đẹp</span></a></li>
			</ul>
		</div>
	</div>
</div>