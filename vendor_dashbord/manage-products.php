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
                    $page_title = "Manage Products";
                    include 'partials/page-title.php'; ?>
                </div> <!-- container -->
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="header-title">Product Information</h4>
                                <p class="text-muted mb-0">Manage product details including image, name, type, stocks, SKU, price, variants, and actions.</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive-sm">
                                    <table class="table table-striped table-centered mb-0">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Product Name</th>
                                                <th>Type</th>
                                                <th>Stocks</th>
                                                <th>SKU</th>
                                                <th>Price</th>
                                                <th>Variants</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="table-user">
                                                    <img src="path/to/image.jpg" alt="Product Image" class="me-2" style="width: 50px; height: 50px;" />
                                                </td>
                                                <td>Example Product</td>
                                                <td>Product Type</td>
                                                <td>
                                                    <select class="form-select">
                                                        <option value="yes">Yes</option>
                                                        <option value="no">No</option>
                                                    </select>
                                                </td>
                                                <td>SKU12345</td>
                                                <td>$99.99</td>
                                                <td>Variant 1</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="text-reset fs-16 px-1"><i class="ri-settings-3-line"></i></a>
                                                    <a href="javascript:void(0);" class="text-reset fs-16 px-1"><i class="ri-delete-bin-2-line"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-user">
                                                    <img src="path/to/image.jpg" alt="Product Image" class="me-2" style="width: 50px; height: 50px;" />
                                                </td>
                                                <td>Example Product</td>
                                                <td>Product Type</td>
                                                <td>
                                                    <select class="form-select">
                                                        <option value="yes">Yes</option>
                                                        <option value="no">No</option>
                                                    </select>
                                                </td>
                                                <td>SKU12345</td>
                                                <td>$99.99</td>
                                                <td>Variant 1</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="text-reset fs-16 px-1"><i class="ri-settings-3-line"></i></a>
                                                    <a href="javascript:void(0);" class="text-reset fs-16 px-1"><i class="ri-delete-bin-2-line"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-user">
                                                    <img src="path/to/image.jpg" alt="Product Image" class="me-2" style="width: 50px; height: 50px;" />
                                                </td>
                                                <td>Example Product</td>
                                                <td>Product Type</td>
                                                <td>
                                                    <select class="form-select">
                                                        <option value="yes">Yes</option>
                                                        <option value="no">No</option>
                                                    </select>
                                                </td>
                                                <td>SKU12345</td>
                                                <td>$99.99</td>
                                                <td>Variant 1</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="text-reset fs-16 px-1"><i class="ri-settings-3-line"></i></a>
                                                    <a href="javascript:void(0);" class="text-reset fs-16 px-1"><i class="ri-delete-bin-2-line"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="table-user">
                                                    <img src="path/to/image.jpg" alt="Product Image" class="me-2" style="width: 50px; height: 50px;" />
                                                </td>
                                                <td>Example Product</td>
                                                <td>Product Type</td>
                                                <td>
                                                    <select class="form-select">
                                                        <option value="yes">Yes</option>
                                                        <option value="no">No</option>
                                                    </select>
                                                </td>
                                                <td>SKU12345</td>
                                                <td>$99.99</td>
                                                <td>Variant 1</td>
                                                <td>
                                                    <a href="javascript:void(0);" class="text-reset fs-16 px-1"><i class="ri-settings-3-line"></i></a>
                                                    <a href="javascript:void(0);" class="text-reset fs-16 px-1"><i class="ri-delete-bin-2-line"></i></a>
                                                </td>
                                            </tr>
                                            <!-- Additional rows can be added here -->
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive -->
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div><!-- end col -->
                </div> <!-- end row -->

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