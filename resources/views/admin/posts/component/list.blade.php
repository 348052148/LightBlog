<div class="am-g">
    <div class="am-u-md-20" style="margin-bottom: 20px;" >
        <a href="posts/create"><button type="button" class="am-btn am-btn-sm am-btn-secondary">新增</button></a>
    </div>
</div>
<div class="am-g">
<div class="am-u-md-20" >
    <div class="am-panel am-panel-default">
        <div class="am-panel-hd">
            <h3 class="am-panel-title">文章列表</h3>
        </div>
        <div class="am-panel-bd">
            这里是文章的列表。
        </div>

        <ul class="am-list am-text-truncate am-list-static">
            @foreach($List['data'] as $post)
            <li>
                <span style="display: inline-block; float: right;">
                    <a href="posts/edit/{{$post['id']}}"><button type="button" class="am-btn am-btn-xs am-btn-secondary">编辑</button></a>
                    <a href="posts/remove/{{$post['id']}}"><button type="button" class="am-btn am-btn-xs am-btn-danger">删除</button></a>
                </span>
                <a style="padding-top: 2px;padding-bottom: 2px;" href="/article/{{$post['category_id']}}/{{$post['id']}}"> {{$post['post_title']}}</a>
            </li>
            @endforeach
        </ul>
    </div>
    @include('admin.common.paging')
</div>
</div>


