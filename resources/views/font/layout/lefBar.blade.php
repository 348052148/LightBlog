<div class="am-u-md-4 blog-sidebar">
    <div class="am-panel-group">
        <section class="am-panel am-panel-default">
            <div class="am-panel-hd">关于我</div>
            <div class="am-panel-bd">
                <p>前所未有的中文云端字型服务，让您在 web 平台上自由使用高品质中文字体，跨平台、可搜寻，而且超美。云端字型是我们的事业，推广字型学知识是我们的志业。从字体出发，关心设计与我们的生活，justfont blog
                    正是為此而生。</p>
                <a class="am-btn am-btn-success am-btn-sm" href="#">查看更多 →</a>
            </div>
        </section>

        <section class="am-panel am-panel-default">
            <div class="am-panel-hd">文章分类</div>
            <ul class="am-list blog-list">
                @foreach($categoryList as $category)
                    <li><a href="/list/{{$category['id']}}">{{$category['category_name']}}</a></li>
                @endforeach
            </ul>
        </section>

        <section class="am-panel am-panel-default">
            <div class="am-panel-hd">文章目录</div>
            <ul class="am-list blog-list">
                @foreach($hotPostList as $post)
                    <li><a href="/article/{{$post['category_id']}}/{{$post['id']}}">{{$post['post_title']}}</a></li>
                @endforeach
            </ul>
        </section>

        <section class="am-panel am-panel-default">
            <div class="am-panel-hd">团队成员</div>
            <div class="am-panel-bd">
                <ul class="am-avg-sm-4 blog-team">
                    <li><img class="am-thumbnail"
                             src="http://img4.duitang.com/uploads/blog/201406/15/20140615230220_F5LiM.thumb.224_0.jpeg" alt=""/>
                    </li>
                    <li><img class="am-thumbnail"
                             src="http://img4.duitang.com/uploads/blog/201406/15/20140615230220_F5LiM.thumb.224_0.jpeg" alt=""/>
                    </li>
                    <li><img class="am-thumbnail"
                             src="http://img4.duitang.com/uploads/blog/201406/15/20140615230220_F5LiM.thumb.224_0.jpeg" alt=""/>
                    </li>
                    <li><img class="am-thumbnail"
                             src="http://img4.duitang.com/uploads/blog/201406/15/20140615230220_F5LiM.thumb.224_0.jpeg" alt=""/>
                    </li>
                    <li><img class="am-thumbnail"
                             src="http://img4.duitang.com/uploads/blog/201406/15/20140615230159_kjTmC.thumb.224_0.jpeg" alt=""/>
                    </li>
                    <li><img class="am-thumbnail"
                             src="http://img4.duitang.com/uploads/blog/201406/15/20140615230220_F5LiM.thumb.224_0.jpeg" alt=""/>
                    </li>
                    <li><img class="am-thumbnail"
                             src="http://img4.duitang.com/uploads/blog/201406/15/20140615230220_F5LiM.thumb.224_0.jpeg" alt=""/>
                    </li>
                    <li><img class="am-thumbnail"
                             src="http://img4.duitang.com/uploads/blog/201406/15/20140615230159_kjTmC.thumb.224_0.jpeg" alt=""/>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</div>