@foreach($postsLst['data'] as $post)
<article class="blog-main">
    <h3 class="am-article-title blog-title">
        <a href="#">{{$post['post_title']}}</a>
    </h3>
    <h4 class="am-article-meta blog-meta">
       {{$post['updated_at']}} 阅读101 评论4
    </h4>

    <div class="am-g blog-content">
            <?php echo mb_strcut($post['post_content'],0,800)?>
    </div>
    <div class="am-g">
        <div class="am-u-sm-12">
            <a style="float: right" href="/article/{{$post['category_id']}}/{{$post['id']}}">阅读更多</a>
        </div>
    </div>
</article>

<hr style="margin-top: 5px;" class="am-article-divider blog-hr">
@endforeach

@include('font.component.pagin')