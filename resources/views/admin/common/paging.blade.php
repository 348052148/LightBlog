<ul class="am-pagination am-pagination-right">
    <li @if($List['prev_page_url']==null) class="am-disabled" @endif ><a href="{{$List['prev_page_url']}}">&laquo;</a></li>
    @for($i=1;$i<=$List['last_page'];$i++)
        <li @if($List['current_page'] == $i) class="am-active" @endif ><a href="{{$List['path'].'?page='.$i}}">{{$i}}</a></li>
    @endfor
    <li @if($List['next_page_url']==null) class="am-disabled" @endif ><a href="{{$List['next_page_url']}}">&raquo;</a></li>
</ul>