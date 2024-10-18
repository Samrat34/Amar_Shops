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
                    $page_title = "User List";
                    include 'partials/page-title.php'; ?>

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="header-title">Customer List</h4>
                                    <p class="text-muted mb-0">
                                        A list of all customers. Click "View Details" to see more information.
                                    </p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive-sm">
                                        <table class="table table-striped table-centered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Contact</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="Customer" class="me-2 rounded-circle" style="width: 40px; height: 40px;">
                                                    </td>
                                                    <td>Risa D. Pearson</td>
                                                    <td>+123 456 789</td>
                                                    <td>
                                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#customerDetailsModal" onclick="viewDetails('Risa D. Pearson', '+123 456 789', 'Additional details about the customer here.')">View Details</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="Customer" class="me-2 rounded-circle" style="width: 40px; height: 40px;">
                                                    </td>
                                                    <td>Risa D. Pearson</td>
                                                    <td>+123 456 789</td>
                                                    <td>
                                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#customerDetailsModal" onclick="viewDetails('Risa D. Pearson', '+123 456 789', 'Additional details about the customer here.')">View Details</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="Customer" class="me-2 rounded-circle" style="width: 40px; height: 40px;">
                                                    </td>
                                                    <td>Risa D. Pearson</td>
                                                    <td>+123 456 789</td>
                                                    <td>
                                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#customerDetailsModal" onclick="viewDetails('Risa D. Pearson', '+123 456 789', 'Additional details about the customer here.')">View Details</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="Customer" class="me-2 rounded-circle" style="width: 40px; height: 40px;">
                                                    </td>
                                                    <td>Risa D. Pearson</td>
                                                    <td>+123 456 789</td>
                                                    <td>
                                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#customerDetailsModal" onclick="viewDetails('Risa D. Pearson', '+123 456 789', 'Additional details about the customer here.')">View Details</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="Customer" class="me-2 rounded-circle" style="width: 40px; height: 40px;">
                                                    </td>
                                                    <td>Risa D. Pearson</td>
                                                    <td>+123 456 789</td>
                                                    <td>
                                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#customerDetailsModal" onclick="viewDetails('Risa D. Pearson', '+123 456 789', 'Additional details about the customer here.')">View Details</button>
                                                    </td>
                                                </tr>
                                                <!-- Repeat for more customers -->
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive -->
                                </div> <!-- end card body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->

                        <!-- Modal -->
                        <div class="modal fade" id="customerDetailsModal" tabindex="-1" aria-labelledby="customerDetailsModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="customerDetailsModalLabel">Customer Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>Name:</strong> <span id="modalCustomerName"></span></p>
                                        <p><strong>Contact:</strong> <span id="modalCustomerContact"></span></p>
                                        <p id="modalCustomerDetails"></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>





                    </div>
                    <!-- end row-->
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

</body>

</html>