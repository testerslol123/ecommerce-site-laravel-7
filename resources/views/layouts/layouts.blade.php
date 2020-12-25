<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
    <head>
        @include('layouts.css')
        @yield('css')
    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PWQNNBC"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <!-- PRELOADER -->
        <div id="loader"></div>

        <div class="body">
            <!-- TOPBAR -->
            @include('layouts.topbar')

            <!-- HEADER -->
            {{-- @include('layouts.header') --}}


            @yield('content')









            <!-- FOOTER WIDGETS -->
            @yield('footer-widget')
            <!-- FOOTER -->
            @include('layouts.footer')

        </div>

        @yield('newsletter')


        @yield('modal')
        <div id="backtotop"><i class="fa fa-chevron-up"></i></div>



        @include('layouts.javascript')
        @yield('javascript')
    </body>
</html>