<div>
<hr/>
<ul class="am-comments-list am-comments-list-flip">
    @foreach($comments as $comment)
    <li class="am-comment @if($user['id'] == $comment['user_id']) am-comment-flip am-comment-success @endif ">
        <a href="#link-to-user-home">
            <img src="http://s.amazeui.org/media/i/demos/bw-2014-06-19.jpg?imageView/1/w/96/h/96/q/80" alt="" class="am-comment-avatar" width="48" height="48">
        </a>
        <div class="am-comment-main">
            <header class="am-comment-hd">
                <div class="am-comment-meta">
                    <a data-user-id="{{$comment['user_id']}}" data-user-name="@if(!empty($comment['user_name'])) {{$comment['user_name']}} @else 游客 @endif"  onclick="di(this)" href="javascript:void (0)" class="am-comment-author">@if(!empty($comment['user_name'])) {{$comment['user_name']}} @else 游客 @endif</a>
                    @if($comment['comment_type'] == 1)评论于 @else 回复 <a>{{$comment['reply_user_name']}}</a> @endif
                    <time datetime="{{$comment['updated_at']}}" title="{{$comment['updated_at']}}">{{$comment['updated_at']}}</time>
                </div>
            </header>
            <div class="am-comment-bd">
                {!! $comment['comment_text'] !!}
            </div>
        </div>
    </li>
    @endforeach
</ul>
</div>

<form class="am-form" id="comment_form" method="post" action="/article/comment/{{$post['id']}}">
    <div class="am-form-group">
        <label id="c_title" for="doc-ta-1">评论：</label>
        {{ csrf_field() }}
        <div type="text/plain" id="myEditor" style="width:99%;height:150px;">
            <p>这里我可以写一些输入提示</p>
        </div>
    </div>
    {{-- 回复的user  --}}
    <input type="hidden" id="reply_user_id" name="reply_user_id" value="" >
    <input type="hidden" id="reply_user_name" name="reply_user_name" value="" >

    <p><button type="submit" class="am-btn am-btn-xs am-btn-default">提交</button></p>
</form>

@section('script')
    <script>
            function di(that) {
                $('#reply_user_id').val($(that).attr('data-user-id'));
                $('#reply_user_name').val($(that).attr('data-user-name'));
                $('#c_title').html('回复'+$(that).attr('data-user-name')+":")
            }
            //实例化编辑器
            var um = UM.getEditor('myEditor');

    </script>
@stop