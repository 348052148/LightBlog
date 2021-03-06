@extends('admin.layout.admin')
@section('title')后台首页 @stop
@section('content')


        <ul class="am-avg-sm-1 am-avg-md-4 am-margin am-padding am-text-center admin-content-list ">
            <li><a href="#" class="am-text-success"><span class="am-icon-btn am-icon-file-text"></span><br/>新增页面<br/>2300</a></li>
            <li><a href="#" class="am-text-warning"><span class="am-icon-btn am-icon-briefcase"></span><br/>成交订单<br/>308</a></li>
            <li><a href="#" class="am-text-danger"><span class="am-icon-btn am-icon-recycle"></span><br/>昨日访问<br/>80082</a></li>
            <li><a href="#" class="am-text-secondary"><span class="am-icon-btn am-icon-user-md"></span><br/>在线用户<br/>3000</a></li>
        </ul>

        <div class="am-g">
            <div class="am-u-md-6">

                @include('admin.home.task')

                @include('admin.home.visit')
            </div>


            <div class="am-u-md-6">

                @include('admin.home.comment')

            </div>
        </div>

@stop