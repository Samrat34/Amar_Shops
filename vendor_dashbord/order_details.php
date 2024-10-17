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
                    $page_title = "Contact List";
                    include 'partials/page-title.php'; ?>


                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="header-title">Order Details</h4>
                                    <p class="text-muted mb-0">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, praesentium. Obcaecati recusandae corporis debitis voluptates. Tenetur et fugit animi quo eligendi voluptas explicabo. Suscipit enim atque incidunt. Ab, pariatur necessitatibus!
                                    </p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive-sm">
                                        <table class="table table-striped table-centered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Customer</th>
                                                    <th>Action</th>
                                                    <th>status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="table-user">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/products/product-1.jpg" alt="product" class="me-2" style="width: 50px; height: 50px;" />
                                                            <div>
                                                                <h6 class="mb-0">Product Name</h6>
                                                                <p class="mb-0 text-muted">Product details or description.</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$50.00</td>
                                                    <td>2</td>
                                                    <td class="table-user">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="customer" class="me-2 rounded-circle" style="width: 50px; height: 50px;" />
                                                            <div>
                                                                <a href="javascript:void(0);" class="text-reset">Risa D. Pearson</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#detailsModal">Details</button>


                                                    </td>
                                                    <td>
                                                        <!-- Dynamic Status Button -->
                                                        <div class="btn-group">
                                                            <button id="statusButton" type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Status
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="statusButton">
                                                                <li><a class="dropdown-item" href="#" onclick="updateStatus('Delivered')">Delivered</a></li>
                                                                <li><a class="dropdown-item" href="#" onclick="updateStatus('Processing')">Processing</a></li>
                                                                <li><a class="dropdown-item" href="#" onclick="updateStatus('Canceled')">Canceled</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>

                                                    <!-- Details Modal -->
                                                    <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="detailsModalLabel">Customer Details</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <!-- Customer Image -->
                                                                        <div class="col-md-4 text-center">
                                                                            <img src="assets/images/customers/customer-1.jpg" alt="Customer Image" class="img-fluid rounded" style="max-width: 150px;">
                                                                        </div>
                                                                        <!-- Customer Details -->
                                                                        <div class="col-md-8">
                                                                            <h4>John Doe</h4>
                                                                            <p><strong>Email:</strong> john.doe@example.com</p>
                                                                            <p><strong>Phone:</strong> (123) 456-7890</p>
                                                                            <p><strong>Address:</strong> 123 Main St, Springfield, USA</p>
                                                                            <p><strong>Order History:</strong></p>
                                                                            <ul>
                                                                                <li>Order #123 - Delivered</li>
                                                                                <li>Order #456 - Pending</li>
                                                                                <li>Order #789 - Returned</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary"><a href="pages-invoice.php" class="text-white">Create Invoice</a></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/products/product-1.jpg" alt="product" class="me-2" style="width: 50px; height: 50px;" />
                                                            <div>
                                                                <h6 class="mb-0">Product Name</h6>
                                                                <p class="mb-0 text-muted">Product details or description.</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$50.00</td>
                                                    <td>2</td>
                                                    <td class="table-user">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="customer" class="me-2 rounded-circle" style="width: 50px; height: 50px;" />
                                                            <div>
                                                                <a href="javascript:void(0);" class="text-reset">Risa D. Pearson</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#detailsModal">Details</button>


                                                    </td>
                                                    <td>
                                                        <!-- Dynamic Status Button -->
                                                        <div class="btn-group">
                                                            <button id="statusButton" type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Status
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="statusButton">
                                                                <li><a class="dropdown-item" href="#" onclick="updateStatus('Delivered')">Delivered</a></li>
                                                                <li><a class="dropdown-item" href="#" onclick="updateStatus('Processing')">Processing</a></li>
                                                                <li><a class="dropdown-item" href="#" onclick="updateStatus('Canceled')">Canceled</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>

                                                    <!-- Details Modal -->
                                                    <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="detailsModalLabel">Customer Details</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <!-- Customer Image -->
                                                                        <div class="col-md-4 text-center">
                                                                            <img src="assets/images/customers/customer-1.jpg" alt="Customer Image" class="img-fluid rounded" style="max-width: 150px;">
                                                                        </div>
                                                                        <!-- Customer Details -->
                                                                        <div class="col-md-8">
                                                                            <h4>John Doe</h4>
                                                                            <p><strong>Email:</strong> john.doe@example.com</p>
                                                                            <p><strong>Phone:</strong> (123) 456-7890</p>
                                                                            <p><strong>Address:</strong> 123 Main St, Springfield, USA</p>
                                                                            <p><strong>Order History:</strong></p>
                                                                            <ul>
                                                                                <li>Order #123 - Delivered</li>
                                                                                <li>Order #456 - Pending</li>
                                                                                <li>Order #789 - Returned</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary"><a href="pages-invoice.php" class="text-white">Create Invoice</a></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/products/product-1.jpg" alt="product" class="me-2" style="width: 50px; height: 50px;" />
                                                            <div>
                                                                <h6 class="mb-0">Product Name</h6>
                                                                <p class="mb-0 text-muted">Product details or description.</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>$50.00</td>
                                                    <td>2</td>
                                                    <td class="table-user">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/users/avatar-2.jpg" alt="customer" class="me-2 rounded-circle" style="width: 50px; height: 50px;" />
                                                            <div>
                                                                <a href="javascript:void(0);" class="text-reset">Risa D. Pearson</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#detailsModal">Details</button>


                                                    </td>
                                                    <td>
                                                        <!-- Dynamic Status Button -->
                                                        <div class="btn-group">
                                                            <button id="statusButton" type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                Status
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="statusButton">
                                                                <li><a class="dropdown-item" href="#" onclick="updateStatus('Delivered')">Delivered</a></li>
                                                                <li><a class="dropdown-item" href="#" onclick="updateStatus('Processing')">Processing</a></li>
                                                                <li><a class="dropdown-item" href="#" onclick="updateStatus('Canceled')">Canceled</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>

                                                    <!-- Details Modal -->
                                                    <div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="detailsModalLabel">Customer Details</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <!-- Customer Image -->
                                                                        <div class="col-md-4 text-center">
                                                                            <img src="assets/images/customers/customer-1.jpg" alt="Customer Image" class="img-fluid rounded" style="max-width: 150px;">
                                                                        </div>
                                                                        <!-- Customer Details -->
                                                                        <div class="col-md-8">
                                                                            <h4>John Doe</h4>
                                                                            <p><strong>Email:</strong> john.doe@example.com</p>
                                                                            <p><strong>Phone:</strong> (123) 456-7890</p>
                                                                            <p><strong>Address:</strong> 123 Main St, Springfield, USA</p>
                                                                            <p><strong>Order History:</strong></p>
                                                                            <ul>
                                                                                <li>Order #123 - Delivered</li>
                                                                                <li>Order #456 - Pending</li>
                                                                                <li>Order #789 - Returned</li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary"><a href="pages-invoice.php" class="text-white">Create Invoice</a></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div> <!-- end table-responsive-->
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
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
    <script>
        // JavaScript function to update the status button text
        function updateStatus(status) {
            document.getElementById("statusButton").textContent = status;
        }
    </script>

</body>

</html>