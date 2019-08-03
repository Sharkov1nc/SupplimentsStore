@extends('default')
@section('libsCSS')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/jquery.magnific-popup/magnific-popup.css') }}"/>
    <style>
        .am-wrapper {
            background-color: #000;
        }
    </style>
@endsection
@section('content')
    <div class="main-content">
        <div class="gallery-container">
        @php
        $i = 0;
        @endphp
        @for($i;$i<8;$i++)
                <div class="item">
                    <div class="photo">
                        <div class="img"><img src="https://cdn.shopify.com/s/files/1/2280/1865/products/stimulant-based-pre-workout-nutrex-hemo-rage-black-ultra-concentrate-285g-chrome-supplements-and-accessories-2660578590819.jpg">
                            <div class="over">
                                <div class="func"><a href="#"><i class="icon s7-link"></i></a><a href="https://cdn.shopify.com/s/files/1/2280/1865/products/stimulant-based-pre-workout-nutrex-hemo-rage-black-ultra-concentrate-285g-chrome-supplements-and-accessories-2660578590819.jpg" class="image-zoom"><i class="icon s7-search"></i></a></div>
                            </div>
                        </div>
                        <div class="description">
                            <div class="icon"><a href="#"><i class="s7-like"></i></a></div>
                            <div class="desc">
                                <h4>Hemo-Rage Pre-workout</h4><span>Best Seller</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
@section('libsJS')
    <script src="{{ URL::asset('amaretti/html/assets/lib/jquery.magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ URL::asset('amaretti/html/assets/lib/masonry/masonry.pkgd.min.js') }}"></script>
    <script src="{{ URL::asset('amaretti/html/assets/js/app-page-gallery.js') }}"></script>
    <script type="text/javascript">

        $(window).load(function(){
            App.pageGallery();
        });
    </script>
@endsection