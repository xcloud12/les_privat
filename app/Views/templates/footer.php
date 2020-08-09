        </div>
        <!-- End of Page Wrapper -->
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
        </a>


        <!-- Bootstrap core JavaScript-->
        <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="/js/sb-admin-2.min.js"></script>

        <?php if (isset($table)) : ?>
                <!-- Page level plugins -->
                <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
                <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>
                <!-- Page level custom scripts -->
                <script src="/js/demo/datatables-demo.js"></script>
                <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
        <?php endif; ?>

        <script>
                // make .nav-item active
                const nav = $('.nav-link');
                const path = location.href;

                nav.map((ind, elm) => {
                        if (elm.href == path) {
                                $(elm).parent().addClass('active')
                        }
                })
        </script>

        </body>

        </html>