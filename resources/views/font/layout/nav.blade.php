<div data-am-sticky="{animation: 'slide-top'}">
<header style="margin-bottom: 0rem;" class="am-topbar">
    <h1 class="am-topbar-brand">
        <a href="/">云淡风轻</a>
    </h1>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
            data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
                class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav">
            <li @if($category_id == 'home') class="am-active" @endif><a href="/">首页</a></li>
            @foreach($categoryList as $category)
            <li @if($category_id==$category['id']) class="am-active" @endif ><a href="/list/{{$category['id']}}">{{$category['category_name']}}</a></li>
            @endforeach

        </ul>

        <form method="post" action="/search" class="am-topbar-form am-topbar-left am-form-inline am-topbar-right" role="search">
            {{ csrf_field() }}
            <div class="am-form-group">
                <input name="search_field" type="text" @if(isset($search_field)) value="{{$search_field}}" @endif class="am-form-field am-input-sm" placeholder="搜索文章">
            </div>
            <button type="submit" class="am-btn am-btn-default am-btn-sm">搜索</button>
        </form>

    </div>
</header>
</div>