<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "Google Maps";
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
                    $sub_title = "Future Product";
                    $page_title = "Future Products";
                    include 'partials/page-title.php'; ?>

                    <div class="row">
                       <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="header-title">Top Rated Products</h4>
                                    <p class="text-muted mb-0">
                                        This Product come from the Users 
                                    </p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive-sm">
                                        <table class="table table-bordered border-primary table-centered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Product Image</th>
                                                    <th>Product Name</th>
                                                    <th>Category</th>
                                                    <th>Price</th>
                                                    <th class="text-center">Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="table-product">
                                                        <img src="assets/images/products/product-1.jpg" alt="product-1" class="me-2 rounded-circle" />
                                                    </td>
                                                    <td>Wireless Headphones</td>
                                                    <td>Electronics</td>
                                                    <td>$150</td>
                                                    <td class="text-center">
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1" data-bs-toggle="modal" data-bs-target="#productModal1">
                                                            <i class="ri-information-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-product">
                                                        <img src="assets/images/products/product-2.jpg" alt="product-2" class="me-2 rounded-circle" />
                                                    </td>
                                                    <td>Smartwatch</td>
                                                    <td>Wearables</td>
                                                    <td>$250</td>
                                                    <td class="text-center">
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1" data-bs-toggle="modal" data-bs-target="#productModal2">
                                                            <i class="ri-information-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-product">
                                                        <img src="assets/images/products/product-3.jpg" alt="product-3" class="me-2 rounded-circle" />
                                                    </td>
                                                    <td>Bluetooth Speaker</td>
                                                    <td>Audio</td>
                                                    <td>$120</td>
                                                    <td class="text-center">
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1" data-bs-toggle="modal" data-bs-target="#productModal3">
                                                            <i class="ri-information-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive-->
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->

                        <!-- Product Modal 1 -->
                        <div class="modal fade" id="productModal1" tabindex="-1" aria-labelledby="productModalLabel1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="productModalLabel1">Wireless Headphones Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>Description:</strong> High-quality wireless headphones with noise-cancellation and long battery life.</p>
                                        <p><strong>Specifications:</strong> Bluetooth 5.0, 20-hour playtime, lightweight design.</p>
                                        <p><strong>Ratings:</strong> 4.5/5</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional modals for each product can be added in a similar format -->

                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="header-title"></h4>
                                    <p class="text-muted mb-0">
                                        Future Products
                                    </p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive-sm">
                                        <table class="table table-bordered border-primary table-centered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Product Image</th>
                                                    <th>Product Name</th>
                                                    <th>Category</th>
                                                    <th>Price</th>
                                                    <th class="text-center">Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="table-product">
                                                        <img src="assets/images/products/topview-product-1.jpg" alt="product-1" class="me-2 rounded" style="width: 80px; height: 80px;" />
                                                    </td>
                                                    <td>Wireless Headphones</td>
                                                    <td>Electronics</td>
                                                    <td>$150</td>
                                                    <td class="text-center">
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1" data-bs-toggle="modal" data-bs-target="#productModal1">
                                                            <i class="ri-information-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-product">
                                                        <img src="assets/images/products/topview-product-2.jpg" alt="product-2" class="me-2 rounded" style="width: 80px; height: 80px;" />
                                                    </td>
                                                    <td>Smartwatch</td>
                                                    <td>Wearables</td>
                                                    <td>$250</td>
                                                    <td class="text-center">
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1" data-bs-toggle="modal" data-bs-target="#productModal2">
                                                            <i class="ri-information-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-product">
                                                        <img src="assets/images/products/topview-product-3.jpg" alt="product-3" class="me-2 rounded" style="width: 80px; height: 80px;" />
                                                    </td>
                                                    <td>Bluetooth Speaker</td>
                                                    <td>Audio</td>
                                                    <td>$120</td>
                                                    <td class="text-center">
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1" data-bs-toggle="modal" data-bs-target="#productModal3">
                                                            <i class="ri-information-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive-->
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->

                        <!-- Product Modal 1 -->
                        <div class="modal fade" id="productModal1" tabindex="-1" aria-labelledby="productModalLabel1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="productModalLabel1">Wireless Headphones Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>Description:</strong> High-quality wireless headphones with noise-cancellation and long battery life.</p>
                                        <p><strong>Specifications:</strong> Bluetooth 5.0, 20-hour playtime, lightweight design.</p>
                                        <p><strong>Ratings:</strong> 4.5/5</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Additional modals for each product can be added similarly -->
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="header-title"> Top View Product</h4>
                                    <p class="text-muted mb-0">
                                        This table displays top-view images of products. Use <code>.table-bordered</code> & <code>.border-primary</code> to change colors.
                                    </p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive-sm">
                                        <table class="table table-bordered border-primary table-centered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Product Image</th>
                                                    <th>Product Name</th>
                                                    <th>Category</th>
                                                    <th>Price</th>
                                                    <th class="text-center">Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="table-product">
                                                        <img src="assets/images/products/topview-product-1.jpg" alt="product-1" class="me-2 rounded" style="width: 80px; height: 80px;" />
                                                    </td>
                                                    <td>Wireless Headphones</td>
                                                    <td>Electronics</td>
                                                    <td>$150</td>
                                                    <td class="text-center">
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1" data-bs-toggle="modal" data-bs-target="#productModal1">
                                                            <i class="ri-information-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-product">
                                                        <img src="assets/images/products/topview-product-2.jpg" alt="product-2" class="me-2 rounded" style="width: 80px; height: 80px;" />
                                                    </td>
                                                    <td>Smartwatch</td>
                                                    <td>Wearables</td>
                                                    <td>$250</td>
                                                    <td class="text-center">
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1" data-bs-toggle="modal" data-bs-target="#productModal2">
                                                            <i class="ri-information-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-product">
                                                        <img src="assets/images/products/topview-product-3.jpg" alt="product-3" class="me-2 rounded" style="width: 80px; height: 80px;" />
                                                    </td>
                                                    <td>Bluetooth Speaker</td>
                                                    <td>Audio</td>
                                                    <td>$120</td>
                                                    <td class="text-center">
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1" data-bs-toggle="modal" data-bs-target="#productModal3">
                                                            <i class="ri-information-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive-->
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->

                        <!-- Product Modal 1 -->
                        <div class="modal fade" id="productModal1" tabindex="-1" aria-labelledby="productModalLabel1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="productModalLabel1">Wireless Headphones Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>Description:</strong> High-quality wireless headphones with noise-cancellation and long battery life.</p>
                                        <p><strong>Specifications:</strong> Bluetooth 5.0, 20-hour playtime, lightweight design.</p>
                                        <p><strong>Ratings:</strong> 4.5/5</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="header-title"> Latest Product</h4>
                                    <p class="text-muted mb-0">
                                        
                                    </p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive-sm">
                                        <table class="table table-bordered border-primary table-centered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Product Image</th>
                                                    <th>Product Name</th>
                                                    <th>Category</th>
                                                    <th>Price</th>
                                                    <th class="text-center">Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="table-product">
                                                        <img src="assets/images/products/topview-product-1.jpg" alt="product-1" class="me-2 rounded" style="width: 80px; height: 80px;" />
                                                    </td>
                                                    <td>Wireless Headphones</td>
                                                    <td>Electronics</td>
                                                    <td>$150</td>
                                                    <td class="text-center">
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1" data-bs-toggle="modal" data-bs-target="#productModal1">
                                                            <i class="ri-information-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-product">
                                                        <img src="assets/images/products/topview-product-2.jpg" alt="product-2" class="me-2 rounded" style="width: 80px; height: 80px;" />
                                                    </td>
                                                    <td>Smartwatch</td>
                                                    <td>Wearables</td>
                                                    <td>$250</td>
                                                    <td class="text-center">
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1" data-bs-toggle="modal" data-bs-target="#productModal2">
                                                            <i class="ri-information-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-product">
                                                        <img src="assets/images/products/topview-product-3.jpg" alt="product-3" class="me-2 rounded" style="width: 80px; height: 80px;" />
                                                    </td>
                                                    <td>Bluetooth Speaker</td>
                                                    <td>Audio</td>
                                                    <td>$120</td>
                                                    <td class="text-center">
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1" data-bs-toggle="modal" data-bs-target="#productModal3">
                                                            <i class="ri-information-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive-->
                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->

                        <!-- Product Modal 1 -->
                        <div class="modal fade" id="productModal1" tabindex="-1" aria-labelledby="productModalLabel1" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="productModalLabel1">Wireless Headphones Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>Description:</strong> High-quality wireless headphones with noise-cancellation and long battery life.</p>
                                        <p><strong>Specifications:</strong> Bluetooth 5.0, 20-hour playtime, lightweight design.</p>
                                        <p><strong>Ratings:</strong> 4.5/5</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

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

    <!-- Google Maps API -->
    <script src="https://maps.google.com/maps/api/js"></script>
    <script src="assets/js/vendor/gmaps.min.js"></script>

    <!-- Google Maps Demo js -->
    <script src="assets/js/pages/google-maps.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>