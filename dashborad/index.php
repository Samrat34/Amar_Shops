<?php include 'partials/main.php'; ?>
<?php
// if (!$_SESSION['user'] || !isset($_SESSION['user'])) {
//     header('Location: auth-login.php');
//     exit();
// }
?>

<head>
    <?php
    $title = "Dashboard";
    include 'partials/title-meta.php'; ?>

    <!-- Daterangepicker css -->
    <link rel="stylesheet" href="assets/css/vendor/daterangepicker.css">

    <!-- Vector Map css -->
    <link rel="stylesheet" href="assets/css/vendor/jquery-jvectormap-1.2.2.css">

    <?php include 'partials/head-css.php'; ?>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        <?php include 'partials/menu.php'; ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <?php
                    $sub_title = "Dashboards";
                    $page_title = "Welcome!";
                    include 'partials/page-title.php'; ?>

                    <div class="row">
                        <div class="col-xxl-3 col-sm-6">
                            <div class="card widget-flat text-bg-pink">
                                <div class="card-body">
                                    <div class="float-end">
                                        <i class="ri-eye-line widget-icon"></i>
                                    </div>
                                    <h6 class="text-uppercase mt-0" title="Customers">Daily Visits</h6>
                                    <h2 class="my-2">8,652</h2>
                                    <p class="mb-0">
                                        <span class="badge bg-white bg-opacity-10 me-1">2.97%</span>
                                        <span class="text-nowrap">Since last month</span>
                                    </p>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-xxl-3 col-sm-6">
                            <div class="card widget-flat text-bg-purple">
                                <div class="card-body">
                                    <div class="float-end">
                                        <i class="ri-wallet-2-line widget-icon"></i>
                                    </div>
                                    <h6 class="text-uppercase mt-0" title="Customers">Revenue</h6>
                                    <h2 class="my-2">$9,254.62</h2>
                                    <p class="mb-0">
                                        <span class="badge bg-white bg-opacity-10 me-1">18.25%</span>
                                        <span class="text-nowrap">Since last month</span>
                                    </p>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-xxl-3 col-sm-6">
                            <div class="card widget-flat text-bg-info">
                                <div class="card-body">
                                    <div class="float-end">
                                        <i class="ri-shopping-basket-line widget-icon"></i>
                                    </div>
                                    <h6 class="text-uppercase mt-0" title="Customers">Total Venodrs</h6>
                                    <h2 class="my-2">753</h2>
                                    <p class="mb-0">
                                        <span class="badge bg-white bg-opacity-25 me-1">-5.75%</span>
                                        <span class="text-nowrap">Since last month</span>
                                    </p>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-xxl-3 col-sm-6">
                            <div class="card widget-flat text-bg-primary">
                                <div class="card-body">
                                    <div class="float-end">
                                        <i class="ri-group-2-line widget-icon"></i>
                                    </div>
                                    <h6 class="text-uppercase mt-0" title="Customers">Users</h6>
                                    <h2 class="my-2">63,154</h2>
                                    <p class="mb-0">
                                        <span class="badge bg-white bg-opacity-10 me-1">8.21%</span>
                                        <span class="text-nowrap">Since last month</span>
                                    </p>
                                </div>
                            </div>
                        </div> <!-- end col-->

                    </div>

                    <div class="row">
                        <div class="col-xl-12">
                            <!-- New Vendor Request List -->
                            <div class="card">
                                <div class="row">
                                    <div class="">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="header-title">New Vendor Request</h4>
                                                <p class="text-muted mb-0">
                                                    Here is a list of vendors pending approval or awaiting action.
                                                </p>
                                            </div>
                                            <div class="card-body">
                                                <div class="table-responsive-sm">
                                                    <table class="table table-striped table-centered mb-0">
                                                        <thead>
                                                            <tr>
                                                                <th>Vendor ID</th>
                                                                <th>Vendor Name</th>
                                                                <th>Request Date</th>
                                                                <th>Status</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>AC336 508 2157</td>
                                                                <td class="table-user">
                                                                    <img src="assets/images/users/avatar-2.jpg" alt="table-user" class="me-2 rounded-circle" />
                                                                    Risa D. Pearson
                                                                </td>
                                                                <td>July 24, 2023</td>
                                                                <td>Pending</td>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="text-reset fs-16 px-1" onclick="openVendorPopup('Risa D. Pearson', 'AC336 508 2157', '$10,000')">
                                                                        <i class="ri-eye-line"></i>
                                                                    </a>

                                                                    <a href="javascript: void(0);" class="text-reset fs-16 px-1">
                                                                        <i class="ri-delete-bin-2-line"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <!-- Additional Rows -->
                                                        </tbody>
                                                    </table>
                                                </div> <!-- end table-responsive-->
                                            </div> <!-- end card body-->
                                        </div> <!-- end card -->
                                    </div><!-- end col-->
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-xl-4">
                            <!-- Chat section unchanged -->
                        </div> <!-- end col-->
                    </div> <!-- end row-->

                    <!-- Vendor Details Popup -->
                    <div id="vendorPopup" class="modal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="vendorName">Vendor Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Account No:</strong> <span id="vendorAccount"></span></p>
                                    <p><strong>Balance:</strong> <span id="vendorBalance"></span></p>
                                </div>
                                <div class="modal-footer">
                                    <a href="pages-profile.php"><button type="button" class="btn btn-primary">View Profile</button></a>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- container -->

            </div>
            <!-- content -->

            <?php include 'partials/footer.php'; ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?php include 'partials/right-sidebar.php'; ?>

    <?php include 'partials/footer-scripts.php'; ?>

    <!-- Daterangepicker js -->
    <script src="assets/js/vendor/moment.min.js"></script>
    <script src="assets/js/vendor/daterangepicker.js"></script>

    <!-- Apex Charts js -->
    <script src="assets/js/vendor/apexcharts.min.js"></script>

    <!-- Vector Map js -->
    <script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Dashboard App js -->
    <script src="assets/js/pages/dashboard.js"></script>


    <!-- App js -->
    <script src="assets/js/app.min.js"></script>
    <script>
        function openVendorPopup(name, account, balance) {
            document.getElementById('vendorName').innerText = name;
            document.getElementById('vendorAccount').innerText = account;
            document.getElementById('vendorBalance').innerText = balance;
            var myModal = new bootstrap.Modal(document.getElementById('vendorPopup'));
            myModal.show();
        }
    </script>

</body>

</html>