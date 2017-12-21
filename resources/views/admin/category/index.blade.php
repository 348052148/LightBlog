@extends('admin.layout.admin')

@section('content')

    @if($template == 'list')
        @include('admin.category.component.list')
    @endif
    @include('admin.category.component.create')
@stop