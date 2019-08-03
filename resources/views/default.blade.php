<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AccountingSolution</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/stroke-7/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/jquery.nanoscroller/css/nanoscroller.css') }}"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/font-awesome/css/font-awesome.min.css') }}"/>
    @yield('libsCSS')
    <link rel="stylesheet" href="{{ URL::asset('amaretti/html/assets/css/style.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
</head>
<body>
<div class="am-wrapper">
    <nav class="navbar navbar-default navbar-fixed-top am-top-header">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="page-title"><span>Dashboard</span></div><a href="#" class="am-toggle-left-sidebar navbar-toggle collapsed"><span class="icon-bar"><span></span><span></span><span></span></span></a><a href="{{route("Home")}}" class="navbar-brand"></a>
            </div>
            <div id="am-navbar-collapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav am-user-nav">
                    <li><a data-modal="full-dark" class="md-trigger"> Register </a></li>
                    <li><a data-modal="full-dark" class="md-trigger"> Login </a></li>
                    {{--<li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="{{'amaretti/html/assets/img/avatar.jpg'}}"><span class="user-name">Samantha Amaretti</span><span class="angle-down s7-angle-down"></span></a>--}}
                        {{--<ul role="menu" class="dropdown-menu">--}}
                            {{--<li><a href=""> <span class="icon s7-power"></span>Sign Out</a></li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}
                </ul>
                <div id="full-dark" class="modal-container modal-full-color modal-full-color-dark modal-effect-8">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close modal-close"><i class="icon s7-close"></i></button>
                            <h3 class="modal-title">Dark</h3>
                        </div>
                        <div class="modal-body">
                            <div class="text-center">
                                <div class="i-circle success"><i class="icon s7-check"></i></div>
                                <h4>Awesome!</h4>
                                <p>Changes has been saved successfully!</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-dark btn-shade1 modal-close">Cancel</button>
                            <button type="button" data-dismiss="modal" class="btn btn-dark btn-shade1 modal-close">Proceed</button>
                        </div>
                    </div>
                </div>
                <div class="modal-overlay"></div>
                <ul class="nav navbar-nav am-top-menu">
                    <li><a href="{{route("Home")}}">Home</a></li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle">Quick menu <span class="angle-down s7-angle-down"></span></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="">Profits</a></li>
                            <li><a href="">Expenses</a></li>
                            <li><a href="">Clients</a></li>
                        </ul>
                    </li>
                    <li><a href="">Support</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Left Menu -->

    <div class="am-left-sidebar">
        <div class="content">
            <div class="am-logo"></div>
            <ul class="sidebar-elements">
                <li class="">
                    <a href="{{route("Home")}}"><i class="icon s7-home"></i><span>Home</span></a>
                </li>
                @guest
                @elseguest
                <li class="">
                    <a href=""><i class="icon s7-cart"></i><span>Shopping cart</span></a>
                </li>
                @endguest
                <li class="">
                    <a href=""><i class="icon s7-diamond"></i><span>Best sellers</span></a>
                </li>
                <li class="">
                    <a href=""><i class="icon s7-stopwatch"></i><span>New products</span></a>
                </li>
                <li class="">
                    <a href=""><i class="icon s7-piggy"></i><span>Promotions</span></a>
                </li>
                @guest
                @elseguest
                <li class="">
                    <a href=""><i class="icon s7-id"></i><span>My profile</span></a>
                </li>
                @endguest
                <li class="">
                    <a href=""><i class="icon s7-science"></i><span>Articles</span></a>
                </li>
                <li class="">
                    <a href=""><i class="icon s7-call"></i><span>Contacts</span></a>
                </li>
            </ul>
            <!--Sidebar bottom content-->
        </div>
    </div>
    <div class="am-content">
        @yield("content")
    </div>
</div>
<script src="{{ URL::asset('amaretti/html/assets/lib/jquery/jquery.min.js') }}"></script>
<script src="{{ URL::asset('amaretti/html/assets/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.min.js') }}"></script>
<script src="{{ URL::asset('amaretti/html/assets/js/main.js') }}"></script>
<script src="{{ URL::asset('amaretti/html/assets/lib/bootstrap/dist/js/bootstrap.min.js') }}" ></script>
<script src="{{ URL::asset('amaretti/html/assets/lib/jquery-ui/jquery-ui.min.js') }}" ></script>
<script src="{{ URL::asset('amaretti/html/assets/lib/jquery.niftymodals/dist/jquery.niftymodals.js') }}"></script>
<script>
    $(document).ready(function(){
        $.fn.niftyModal('setDefaults',{
            overlaySelector: '.modal-overlay',
            contentSelector: '.modal-content',
            closeSelector: '.modal-close',
            classAddAfterOpen: 'modal-show',
            classModalOpen: 'modal-open',
            classScrollbarMeasure: 'modal-scrollbar-measure',
            afterOpen: function(){
                $("html").addClass('am-modal-open');
            },
            afterClose: function(){
                $("html").removeClass('am-modal-open');
            }
        });
        App.init();

    });
</script>
@yield('libsJS')

</body>
</html>