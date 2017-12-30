@extends('admin.layout.admin')

@section('content')

    @if($template == 'list')
        @include('admin.comments.component.list')
    @elseif($template == 'edit')
        {{--@include('admin.posts.component.edit')--}}
    @endif
@stop