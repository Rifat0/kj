<<<<<<< HEAD
                <div class="footer">
                    <div class="pull-right">
                        Powered By <strong>Developer</strong>.
                    </div>
                    <div>
                        <strong>Copyright</strong> Kajandi.com &copy; 2018-<?php echo date("Y"); ?>
                    </div>
                </div>

=======
            <div class="footer">
                <div>
                    <strong>&copy; Kajandi</strong>
                </div>
            </div>
>>>>>>> 40c6a31b5ead0d6e363124b0dbea6166b49af97d
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('public/backend/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('public/backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/backend/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('public/backend/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('public/backend/js/inspinia.js') }}"></script>
    <script src="{{ asset('public/backend/js/plugins/pace/pace.min.js') }}"></script>

    <!-- Custom Script -->
    @yield('js')
</body>
</html>