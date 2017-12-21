<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-1">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">添加类目
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd">
            <div >
                <form class="am-form" method="post" action="category/actionCreate">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <fieldset>
                        <div class="am-form-group am-avg-sm-1" >
                            <label  for="doc-ipt-email-1">类目名</label>

                            <input type="text"  style="display: inline-block;" name="category_name" class="" value="" id="doc-ipt-email-1" placeholder="输入文章名称">
                        </div>

                        <div class="am-form-group am-g">
                            <label for="doc-select-1">上级类目</label>
                            <select name="category_pid" id="doc-select-1">
                                <option value="-1">顶级类目</option>
                                @foreach($List['data'] as $category)
                                    <option value="{{$category['id']}}">{{$category['category_name']}}</option>
                                @endforeach
                            </select>
                            <span class="am-form-caret"></span>
                        </div>

                        <div class="am-form-group am-form-file">
                            <button type="button" class="am-btn am-btn-default am-btn-sm">
                                <i class="am-icon-cloud-upload"></i> 选择要上传的文件</button>
                            <input name="category_pic" type="file" multiple>
                        </div>

                        <p><button type="submit" class="am-btn am-btn-default">提交</button></p>

                    </fieldset>
                </form>

            </div>

        </div>
    </div>
</div>