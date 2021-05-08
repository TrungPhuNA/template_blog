@if(isset($categorySideBar) && count($categorySideBar))
    <div class="recommend_cat mt-30">
        <div class="box-title">
            <h2>Chủ đề nổi bật</h2>
            <div class="line"></div>
        </div>
        <ul class="list-cat-sidebar">
            @foreach($categorySideBar as $key => $cat)
                <li>
                    <a href="{{ create_url_seo_dynamic($cat->cat_slug, $cat->id, 'c') }}"
                       title="{{ $cat->cat_name }}">
                        {{ $cat->cat_name }}
                    </a>
                </li>
            @endforeach
            <li>
                <a href="{{ route('get.blog.list_category') }}" title="Tổng hợp chủ đề bài viết 123job" target="_blank">
                    Xem tất cả <i class="la la-angle-right"></i>
                </a>
            </li>
        </ul>
    </div>
@endif