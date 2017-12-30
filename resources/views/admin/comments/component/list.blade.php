<div class="am-g">
    <div class="am-u-md-20" >
        <div class="am-panel am-panel-default">
            <div class="am-panel-hd">
                <h3 class="am-panel-title">评论列表</h3>
            </div>
            <div class="am-panel-bd">
                这里是评论的列表。
            </div>

            <ul class="am-list am-text-truncate am-list-static">
                @foreach($List['data'] as $comment)
                    <li>
                <span style="display: inline-block; float: right;">
                    <a href="posts/edit/{{$comment['id']}}"><button type="button" class="am-btn am-btn-xs am-btn-secondary">编辑</button></a>
                    <a href="posts/remove/{{$comment['id']}}"><button type="button" class="am-btn am-btn-xs am-btn-danger">删除</button></a>
                </span>
                      <span>文章： <a style="padding-top: 2px;padding-bottom: 2px;" href="#"> {!! $comment['post_title'] !!}</a>
                             &nbsp;&nbsp;&nbsp;
                            用户 ： @if(isset($comment['username'])) {{$comment['username']}} @else 游客  @endif
                          {!! $comment['comment_text'] !!}
                      </span>

                    </li>
                @endforeach
            </ul>
        </div>
        @include('admin.common.paging')
    </div>
</div>