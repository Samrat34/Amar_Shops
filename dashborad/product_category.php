<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "Scrollbar";
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
                    $sub_title = "Extended UI";
                    $page_title = "Product Category";
                    include 'partials/page-title.php'; ?>


                    <div class="row">


                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="header-title">Product Categories</h4>
                                    <p class="text-muted mb-0">
                                        Add <code>.table-bordered</code> & <code>.border-primary</code> can be added to change colors.
                                    </p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive-sm">
                                        <table class="table table-bordered border-primary table-centered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Category</th>
                                                    <th>Category Code</th>
                                                    <th>No. of Products</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/categories/electronics.jpg" alt="category-image" class="me-2 rounded-circle" />
                                                        Electronics
                                                    </td>
                                                    <td>ELC-001</td>
                                                    <td>120</td>
                                                    <td class="text-center">
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1">
                                                            <i class="ri-settings-3-line"></i>
                                                        </a>
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1">
                                                            <i class="ri-delete-bin-2-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/categories/clothing.jpg" alt="category-image" class="me-2 rounded-circle" />
                                                        Clothing
                                                    </td>
                                                    <td>CLT-002</td>
                                                    <td>200</td>
                                                    <td class="text-center">
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1">
                                                            <i class="ri-settings-3-line"></i>
                                                        </a>
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1">
                                                            <i class="ri-delete-bin-2-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/categories/furniture.jpg" alt="category-image" class="me-2 rounded-circle" />
                                                        Furniture
                                                    </td>
                                                    <td>FUR-003</td>
                                                    <td>80</td>
                                                    <td class="text-center">
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1">
                                                            <i class="ri-settings-3-line"></i>
                                                        </a>
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1">
                                                            <i class="ri-delete-bin-2-line"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/categories/books.jpg" alt="category-image" class="me-2 rounded-circle" />
                                                        Books
                                                    </td>
                                                    <td>BKS-004</td>
                                                    <td>350</td>
                                                    <td class="text-center">
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1">
                                                            <i class="ri-settings-3-line"></i>
                                                        </a>
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1">
                                                            <i class="ri-delete-bin-2-line"></i>
                                                        </a>
                                                    </td>
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

</body>

</html>