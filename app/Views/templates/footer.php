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
                <link href="/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
                <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
                <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.bootstrap4.min.js"></script>
                <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
                <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"> </script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"> </script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"> </script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"> </script>
                <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"> </script>
                <script src="/js/demo/datatables-demo.js"></script>
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