@extends('font.layout.blog')

@section('title')
    个人Blog
@stop

@section('content')
    <div class="am-g am-g-fixed blog-g-fixed">

        @include('font.component.articleContent')

        @include('font.layout.lefBar')

    </div>
@stop
