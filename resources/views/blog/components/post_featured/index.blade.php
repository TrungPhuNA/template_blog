<div class="box-most-care">
    <div class="list-article-hot">
        @for($i=1;$i<=10;$i++)
            <div class="article-hot">
                <div class="article-hot__image">
                    <a href="#"><img src="{{asset('images/resource/b6.jpg')}}" alt="" width="100%"></a>
                </div>
                <div class="article-hot__content">
                    <div class="article-hot__category">
                        <a href="#" title="">Phỏng vấn</a>
                        <a href="#" title="">Kế toán</a>
                    </div>
                    <div class="article-hot__title">
                        <a href="#" title="">Top câu hỏi phỏng vấn bạn thường gặp và phương pháp trả lời</a>
                    </div>
                    {{-- <div class="article-hot__desc">
                        <p>Tổng hợp tất cả các câu hỏi thường gặp nhất trong các cuộc phỏng vấn và cách trả lời hoàn hảo nhất để có công việc tốt.</p>
                    </div> --}}
                </div>
            </div>
        @endfor
        <div class="botton-arrow">
            <a href="#" class="botton-arrow__item preview disable">
                <i class="fa fa-arrow-left"></i>
            </a href="#">
            <a href="#" class="botton-arrow__item next">
                <i class="fa fa-arrow-right"></i>
            </a href="#">
        </div>
    </div>
    <div class="article-pagination">
        <span class="article-pagination__item active"></span>
        @for($i=1;$i<=5;$i++)
            <span class="article-pagination__item"></span>
        @endfor
    </div>
</div>