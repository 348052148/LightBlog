<ul class="am-pagination blog-pagination">
    @if($postsLst['prev_page_url']!=null)
    <li class="am-pagination-prev"><a href="{{$postsLst['prev_page_url']}}">&laquo; 上一页</a></li>
    @endif
    @if($postsLst['next_page_url']!=null)
    <li class="am-pagination-next"><a href="{{$postsLst['next_page_url']}}">下一页 &raquo;</a></li>
        @endif
</ul>