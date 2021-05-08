@if(detectDevice(true) != 'mobile' )
    @include('blog.components.list_post.post_pc')
@else
    @include('blog.components.list_post.post_mb')
@endif