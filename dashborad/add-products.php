<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "Products";
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
                    $sub_title = "Products";
                    $page_title = "Add Products";
                    include 'partials/page-title.php'; ?>
                </div> <!-- container -->

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="header-title">Product Request List</h4>
                                <p class="text-muted mb-0"></p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive-sm">
                                    <table class="table table-striped table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th>Product ID</th>
                                                <th>Product Name</th>
                                                <th>Vendor Name</th>
                                                <th>Status</th>
                                                <th>Category</th> <!-- New Category Column -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>PR001</td>
                                                <td>Product A</td>
                                                <td>Vendor X</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="text-reset fs-16 px-1" onclick="showProductDetails('Product A', 'Vendor X', 'More details...')">
                                                        <i class="ri-information-line"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <select class="form-select form-select-sm" aria-label="Select Category">
                                                        <option value="electronics">Electronics</option>
                                                        <option value="furniture">Furniture</option>
                                                        <option value="clothing">Clothing</option>
                                                        <option value="toys">Toys</option>
                                                        <option value="books">Books</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="text-reset fs-16 px-1">
                                                        <i class="ri-check-line" style="color: green;"></i> <!-- Approve icon -->
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-reset fs-16 px-1">
                                                        <i class="ri-close-line" style="color: red;"></i> <!-- Cancel icon -->
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PR002</td>
                                                <td>Product B</td>
                                                <td>Vendor Y</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="text-reset fs-16 px-1" onclick="showProductDetails('Product B', 'Vendor Y', 'More details...')">
                                                        <i class="ri-information-line"></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    <select class="form-select form-select-sm" aria-label="Select Category">
                                                        <option value="electronics">Electronics</option>
                                                        <option value="furniture">Furniture</option>
                                                        <option value="clothing">Clothing</option>
                                                        <option value="toys">Toys</option>
                                                        <option value="books">Books</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <a href="javascript:void(0);" class="text-reset fs-16 px-1">
                                                        <i class="ri-check-line" style="color: green;"></i>
                                                    </a>
                                                    <a href="javascript:void(0);" class="text-reset fs-16 px-1">
                                                        <i class="ri-close-line" style="color: red;"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <!-- Add more rows as needed -->
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive-->
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>



                <!-- Popup Modal for Product Details -->
                <div class="modal fade" id="productDetailsModal" tabindex="-1" aria-labelledby="productDetailsModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="productDetailsModalLabel">Product Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Product Image -->
                                <img id="productImage" src="" alt="Product Image" class="img-fluid mb-3" />

                                <!-- Product Details Text -->
                                <p id="productDetailsText"></p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>



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
        // Function to show product details with image in the modal
        function showProductDetails(productName, vendorName, details, imageUrl) {
            const productDetailsText = `
            <strong>Product Name:</strong> ${productName} <br>
            <strong>Vendor Name:</strong> ${vendorName} <br>
            <strong>Details:</strong> ${details}
        `;
            document.getElementById('productDetailsText').innerHTML = productDetailsText;
            document.getElementById('productImage').src = imageUrl; // Set the product image source

            // Show the modal
            var productModal = new bootstrap.Modal(document.getElementById('productDetailsModal'));
            productModal.show();
        }
    </script>

</body>

</html>