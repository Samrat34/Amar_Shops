<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "Starter Page";
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
                    $page_title = "Starter";
                    include 'partials/page-title.php'; ?>


                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="header-title">Video Of the Pruduct</h4>
                                    <p class="text-muted mb-0">Use class <code>.ratio-21x9</code></p>
                                </div>
                                <div class="card-body">
                                    <!-- 21:9 aspect ratio -->
                                    <div class="ratio ratio-21x9">
                                        <iframe
                                            src="https://www.youtube.com/embed/watch?v=KmowJO7sg4k&list=RDzpOULjyy-n8&index=5&ab_channel=REOSpeedwagon-Topic"></iframe>
                                    </div>
                                </div> <!-- end card-body -->
                                <button class="btn btn-primary">Add Video</button>
                                <br>
                                <button class="btn btn-danger">Delete Video</button>
                            </div> <!-- end card-->
                        </div>
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="header-title">Responsive embed video 21:9</h4>
                                    <p class="text-muted mb-0">Use class <code>.ratio-21x9</code></p>
                                </div>
                                <div class="card-body">
                                    <!-- 21:9 aspect ratio -->
                                    <div class="ratio ratio-21x9">
                                        <iframe
                                            src="https://www.youtube.com/embed/watch?v=KmowJO7sg4k&list=RDzpOULjyy-n8&index=5&ab_channel=REOSpeedwagon-Topic"></iframe>
                                    </div>
                                </div> <!-- end card-body -->
                                <button class="btn btn-primary">Add Video</button>
                                <br>
                                <button class="btn btn-danger">Delete Video</button>
                            </div> <!-- end card-->
                        </div> <!-- container -->

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