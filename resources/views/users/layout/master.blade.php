

<body>
  @include('users.partials.left_panel')
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
          @include('users.partials.header')
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            
           @yield('content')             
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; @php echo date('Y') @endphp Foysal
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://facebook.com/me.foysal">Foysal</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

  @include('users.partials.script')
</body>
</html>
