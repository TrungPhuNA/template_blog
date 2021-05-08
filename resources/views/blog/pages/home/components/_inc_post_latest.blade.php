<div class="box-new-post">
    @foreach($posts as $postItem)
    <div class="new-post">
        <div class="new-post__category">
            <a href="{{ create_url_seo_dynamic($postItem->category->cat_slug, $postItem->category->id, 'c') }}" title="{{ $postItem->category->cat_name }}">
                {{ $postItem->category->cat_name }}
            </a>
        </div>
        <div class="new-post__title">
            <a href="{{ create_url_seo_dynamic($postItem->po_slug, $postItem->id) }}" title="{{ $postItem->po_title }}">
                {{ $postItem->po_title }}
            </a>
        </div>
    </div>
    @endforeach
</div>

