@extends('font.layout.blog')

@section('title')
个人Blog
@stop

@section('content')
<div class="am-g am-g-fixed blog-g-fixed">
    <div class="am-u-md-8">

        @include('font.component.articleBlock')

    </div>

    @include('font.layout.lefBar')

</div>
@stop

@section('script')

@stop

@section('script')
    <script>
        $(function() {
            var $slider = $('#demo-slider-0');
            var counter = 0;
            var getSlide = function() {
                counter++;
                return '<li><img src="http://s.amazeui.org/media/i/demos/bing-' +
                    (Math.floor(Math.random() * 4) + 1) + '.jpg" />' +
                    '<div class="am-slider-desc">动态插入的 slide ' + counter + '</div></li>';
            };

            $('.js-demo-slider-btn').on('click', function() {
                var action = this.getAttribute('data-action');
                if (action === 'add') {
                    $slider.flexslider('addSlide', getSlide());
                } else {
                    var count = $slider.flexslider('count');
                    count > 1 && $slider.flexslider('removeSlide', $slider.flexslider('count') - 1);
                }
            });

        });
    </script>
@stop