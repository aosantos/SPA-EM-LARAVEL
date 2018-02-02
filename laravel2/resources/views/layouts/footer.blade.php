        <div id="footer" class="footer">
            Powered by <b>Cheil</b> &copy; 2017
        </div>
        
        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
    </div>
    <!-- end page container -->
    
    <!-- ================== BEGIN BASE JS ================== -->
   <!--<script src="{{ asset('/assets/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>-->
   
  
<script src="assets/js/jquery.circliful.min.js"></script>
    <script src="{{ asset('/assets/plugins/jquery/jquery-migrate-1.1.0.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    
    <!--[if lt IE 9]>
        <script src="{{ asset('/assets/crossbrowserjs/html5shiv.js') }}"></script>
        <script src="{{ asset('/assets/crossbrowserjs/respond.min.js') }}"></script>
        <script src="{{ asset('/assets/crossbrowserjs/excanvas.min.js') }}"></script>
    <![endif]-->
    <script src="{{ asset('/assets/plugins/slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('/assets/plugins/jquery-cookie/jquery.cookie.js') }}"></script>
    <!-- ================== END BASE JS ================== -->
    
    
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="{{ asset('/assets/plugins/gritter/js/jquery.gritter.js') }}"></script>
    <script src="{{ asset('/assets/plugins/flot/jquery.flot.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/flot/jquery.flot.time.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/flot/jquery.flot.resize.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/flot/jquery.flot.pie.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/sparkline/jquery.sparkline.js') }}"></script>
    <script src="{{ asset('/assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('/assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('/assets/js/apps.js') }}"></script>  
   
   
   
    <!-- ================== END PAGE LEVEL JS ================== -->
    
    <script>
        $(document).ready(function() {
            App.init();
            Dashboard.init();
        });
    </script>
    
    @yield('scripts')    
    
</body>
</html>