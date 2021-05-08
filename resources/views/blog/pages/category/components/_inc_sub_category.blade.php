<div class="sub-cat-v2">
    @foreach($listAllChildCategory as $id => $category)
    <a href="{{ create_url_seo_dynamic($category->cat_slug, $category->id, 'c') }}" title="{{$category->cat_name}}" class="sub-cat-v2__item">{{$category->cat_name}}</a>
    @endforeach
</div>