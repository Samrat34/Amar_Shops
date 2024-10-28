<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "Scrollspy";
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
                    $page_title = "Manage Blog";
                    include 'partials/page-title.php'; ?>

                    <div class="row">
                        <div class="col-sm-6 col-lg-3">

                            <!-- Simple card -->
                            <div class="card d-block">
                                <img class="card-img-top" src="assets/images/small/small-1.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="d-flex justify-content-between">
                                        <a href="javascript: void(0);" class="btn btn-primary">View</a>
                                        <a href="javascript: void(0);" class="btn btn-warning">Edit</a>
                                        <a href="javascript: void(0);" class="btn btn-danger">Delete</a>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div><!-- end col -->

                        <div class="col-sm-6 col-lg-3">
                            <!-- Simple card -->
                            <div class="card d-block">
                                <img class="card-img-top" src="assets/images/small/small-1.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="d-flex justify-content-between">
                                        <a href="javascript: void(0);" class="btn btn-primary">View</a>
                                        <a href="javascript: void(0);" class="btn btn-warning">Edit</a>
                                        <a href="javascript: void(0);" class="btn btn-danger">Delete</a>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div><!-- end col -->

                        <div class="col-sm-6 col-lg-3">
                            <!-- Simple card -->
                            <div class="card d-block">
                                <img class="card-img-top" src="assets/images/small/small-1.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="d-flex justify-content-between">
                                        <a href="javascript: void(0);" class="btn btn-primary">View</a>
                                        <a href="javascript: void(0);" class="btn btn-warning">Edit</a>
                                        <a href="javascript: void(0);" class="btn btn-danger">Delete</a>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div><!-- end col -->

                        <div class="col-sm-6 col-lg-3">
                            <!-- Simple card -->
                            <div class="card d-block">
                                <img class="card-img-top" src="assets/images/small/small-1.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">Card title</h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="d-flex justify-content-between">
                                        <a href="javascript: void(0);" class="btn btn-primary">View</a>
                                        <a href="javascript: void(0);" class="btn btn-warning">Edit</a>
                                        <a href="javascript: void(0);" class="btn btn-danger">Delete</a>
                                    </div>
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div><!-- end col -->
                    </div> <!-- end row -->

                    <!-- Pagination -->
                    <div class="card">
                        <div class="card-body justify-content-center">
                            <nav aria-label="...">
                                <ul class="pagination mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div> <!-- end card-body -->
                    </div> <!-- end card-->

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