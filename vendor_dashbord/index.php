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
                    $page_title = "Welcome! @VendorName";
                    include 'partials/page-title.php'; ?>


                    <!-- add product  -->

                    <!-- add product end -->



                    <div class="row">
                        <div class="col-xxl-3 col-sm-6">
                            <div class="card widget-flat text-bg-pink">
                                <div class="card-body">
                                    <div class="float-end">
                                        <i class="ri-eye-line widget-icon"></i>
                                    </div>
                                    <h6 class="text-uppercase mt-0" title="Customers">Total Sales</h6>
                                    <h2 class="my-2">৳8,652</h2>
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
                                    <h6 class="text-uppercase mt-0" title="Customers">Taks</h6>
                                    <h2 class="my-2">৳900</h2>
                                    <p class="mb-0">
                                        <!-- <span class="badge bg-white bg-opacity-10 me-1">18.25%</span> -->
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
                                    <h6 class="text-uppercase mt-0" title="Customers">Total Products</h6>
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
                                    <h6 class="text-uppercase mt-0" title="Customers">Orders</h6>
                                    <h2 class="my-2">63,154</h2>
                                    <p class="mb-0">
                                        <span class="badge bg-white bg-opacity-10 me-1">8.21%</span>
                                        <span class="text-nowrap">Since last month</span>
                                    </p>
                                </div>
                            </div>
                        </div> <!-- end col-->
                        <div class="col-xxl-3 col-sm-6">
                            <div class="card widget-flat text-bg-danger">
                                <div class="card-body">
                                    <div class="float-end">
                                        <i class="ri-group-2-line widget-icon"></i>
                                    </div>
                                    <h6 class="text-uppercase mt-0" title="Customers">Affiliate</h6>
                                    <h2 class="my-2">154</h2>
                                    <p class="mb-0">
                                        <span class="badge bg-white bg-opacity-10 me-1">8.21%</span>
                                        <span class="text-nowrap">Since last month</span>
                                    </p>
                                </div>
                            </div>
                        </div> <!-- end col-->
                        <div class="col-xxl-3 col-sm-6">
                            <div class="card widget-flat text-bg-secondary">
                                <div class="card-body">
                                    <div class="float-end">
                                        <i class="ri-group-2-line widget-icon"></i>
                                    </div>
                                    <h6 class="text-uppercase mt-0" title="Customers">Discount</h6>
                                    <h2 class="my-2">63</h2>
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
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="header-title">Top products</h4>
                                    <p class="text-muted mb-0">
                                        Use this table to display item sales data.
                                    </p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive-sm">
                                        <table class="table table-striped table-centered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Item</th>
                                                    <th>Change</th>
                                                    <th>Price</th>
                                                    <th>Sold</th>
                                                    <th>Sales</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/items/item1.jpg" alt="Item 1" class="me-2 rounded-circle" style="width: 30px; height: 30px;" />
                                                        Item 1
                                                    </td>
                                                    <td>
                                                        <i class="ri-line-chart-line me-1"></i> +1%
                                                    </td>
                                                    <td>৳100</td>
                                                    <td>50</td>
                                                    <td>৳5000</td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/items/item2.jpg" alt="Item 2" class="me-2 rounded-circle" style="width: 30px; height: 30px;" />
                                                        Item 2
                                                    </td>
                                                    <td>
                                                        <i class="ri-arrow-down-s-line me-1" style="color: red;"></i> -2%
                                                    </td>
                                                    <td>৳200</td>
                                                    <td>30</td>
                                                    <td>৳6000</td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/items/item3.jpg" alt="Item 3" class="me-2 rounded-circle" style="width: 30px; height: 30px;" />
                                                        Item 3
                                                    </td>
                                                    <td>
                                                        <i class="ri-line-chart-line me-1"></i> +3%
                                                    </td>
                                                    <td>৳150</td>
                                                    <td>25</td>
                                                    <td>৳3750</td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/items/item4.jpg" alt="Item 4" class="me-2 rounded-circle" style="width: 30px; height: 30px;" />
                                                        Item 4
                                                    </td>
                                                    <td>
                                                        <i class="ri-arrow-down-s-line me-1" style="color: red;"></i> -1%
                                                    </td>
                                                    <td>৳120</td>
                                                    <td>40</td>
                                                    <td>৳4800</td>
                                                </tr>
                                            </tbody>

                                        </table>
                                    </div> <!-- end table-responsive-->
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>




                    <!-- end row-->

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

</body>

</html>