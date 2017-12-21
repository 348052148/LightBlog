<div class="am-g">
<form class="am-form" method="post" action="actionCreate">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    @if(isset($post))
        <input type="hidden" name="id" value="{{ $post['id'] }}">
    @endif
    <fieldset>
        <div class="am-form-group">
            <label for="doc-ipt-email-1">主题名</label>
            <input type="text" name="post_title" class="" value="@if(isset($post)) {{$post['post_title']}} @endif" id="doc-ipt-email-1" placeholder="输入文章名称">
        </div>

        <div class="am-form-group">
            <label for="doc-ipt-pwd-1">描述</label>
            <input type="text" name="post_desc" value="@if(isset($post)) {{$post['post_desc']}} @endif" class="" id="doc-ipt-pwd-1" placeholder="描述">
        </div>

        <div class="am-form-group">
            <label for="doc-select-1">类目</label>
            <select name="category_id" id="doc-select-1">
               @foreach($categoryList as $category)
                <option value="{{$category['id']}}">{{$category['category_name']}}</option>
                @endforeach
            </select>
            <span class="am-form-caret"></span>
        </div>

        <div class="am-form-group">
            <label for="doc-ta-1">内容</label>

            <div  id="editor">
                @if(isset($post)) {!! $post['post_content'] !!} @endif
            </div>
            <textarea style="display: none;" name="post_content" id="post_content"></textarea>
        </div>

        <p><button type="submit" class="am-btn am-btn-default">提交</button></p>

    </fieldset>
</form>
</div>

@section('script')
    <script>
        var E = window.wangEditor;
        var editor = new E('#editor');
        // 或者 var editor = new E( document.getElementById('editor') )
        var textArea = $('#post_content');
        editor.customConfig.onchange = function (html) {
            // 监控变化，同步更新到 textarea
            textArea.val(html)
        };

        editor.create();
    </script>
@stop