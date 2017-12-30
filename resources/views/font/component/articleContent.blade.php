<div class="am-u-md-8">

    <article class="am-article">
        <div class="am-article-hd">
            <h1 class="am-article-title">{{$post['post_title']}}</h1>
            <p class="am-article-meta">{{$post['post_desc']}}</p>
        </div>

        <div class="am-article-bd">
            {!! $post['post_content'] !!}
        </div>

    </article>

    @include('font.component.comment')
</div>
