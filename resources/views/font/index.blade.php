@extends('font.layout.blog')

@section('title')
个人Blog
@stop

@section('content')
<div >
        @include('font.component.slider')
</div>
<div class="am-g am-g-fixed blog-g-fixed">

    <div class="am-u-md-8">


        @include('font.component.articleBlock')

    </div>

    @include('font.layout.lefBar')

</div>
@stop

@section('script')

@stop
