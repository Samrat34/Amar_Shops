<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "Contact List";
    include 'partials/title-meta.php'; ?>

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
                    $sub_title = "Pages";
                    $page_title = "Orders";
                    include 'partials/page-title.php'; ?>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="responsive-table-plugin">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive" data-pattern="priority-columns">
                                                <table id="order-table" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Order</th>
                                                            <th>Date</th>
                                                            <th>Customer</th>
                                                            <th>Payment Status</th>
                                                            <th>Fulfillment Status</th>
                                                            <th>Payment Method</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>001</td>
                                                            <td>2024-10-15</td>
                                                            <td>John Doe</td>
                                                            <td>Completed</td>
                                                            <td>Shipped</td>
                                                            <td>Credit Card</td>
                                                            <td>
                                                                <button class="btn btn-info">View</button>
                                                                <button class="btn btn-danger">Cancel</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>002</td>
                                                            <td>2024-10-16</td>
                                                            <td>Jane Smith</td>
                                                            <td>Pending</td>
                                                            <td>Processing</td>
                                                            <td>PayPal</td>
                                                            <td>
                                                                <button class="btn btn-info">View</button>
                                                                <button class="btn btn-danger">Cancel</button>
                                                            </td>
                                                        </tr>
                                                        <!-- Repeat for more rows -->
                                                    </tbody>
                                                </table>
                                            </div> <!-- end .table-responsive -->
                                        </div> <!-- end .table-rep-plugin -->
                                    </div> <!-- end .responsive-table-plugin -->
                                </div>
                            </div> <!-- end card -->
                        </div> <!-- end col -->
                    </div> <!-- end row -->




                </div> <!-- container -->

            </div> <!-- content -->

            <?php include 'partials/footer.php'; ?>

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <?php include 'partials/right-sidebar.php'; ?>

    <?php include 'partials/footer-scripts.php'; ?>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>
    <script></script>

</body>

</html>