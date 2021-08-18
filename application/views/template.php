<!DOCTYPE html>
<html lang="en">
<?php include "./application/views/_Template/head.php" ?>

<body id="page-top">
    <!-- pahe wrapper -->
    <div id="wrapper">

        <!-- sidebar -->
        <?php include "./application/views/_Template/sidebar.php"; ?>
        <!-- End sidebar -->

        <!-- content wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- main content -->
            <div id="content">

                <!-- top bar -->
                <?php include "./application/views/_Template/topbar.php"; ?>
                <!-- end topbar -->

                <!-- begin page content -->
                <?php include "./application/views/_Template/content.php"; ?>
                <!-- /. container-fluid -->
            </div>
            <!-- end of main content -->

            <!-- footer -->
            <?php include "./application/views/_Template/footer.php"; ?>
            <!-- end footer -->
        </div>
        <!-- end of content wrapper -->
    </div>
    <!-- end of page wrapper -->


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="modalKeluar" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalKeluar">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src=<?php echo base_url('assets/jquery/jquery.min.js') ?>></script>
    <script src=<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>></script>

    <!-- Core plugin JavaScript-->
    <script src=<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>></script>

    <!-- Custom scripts for all pages-->
    <script src=<?php echo base_url('js/sb-admin-2.min.js') ?>></script>

    <!-- Page level plugins -->

    <script src=<?php echo base_url('assets/datatables/jquery.dataTables.min.js') ?>></script>
    <script src=<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.js') ?>></script>
    <script src=<?php echo base_url('assets/toast/jquery.toast.min.js'); ?>></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

    <!-- Page level custom scripts -->

    <script src=<?php echo base_url('js/demo/datatables-demo.js') ?>></script>

</body>

</html>