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
                                    <h4 class="header-title">Bordered color table</h4>
                                    <p class="text-muted mb-0">
                                        Add <code>.table-bordered</code> & <code>.border-primary</code> can be added to
                                        change colors.
                                    </p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive-sm">
                                        <table class="table table-bordered border-primary table-centered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>User</th>
                                                    <th>Account No.</th>
                                                    <th>Balance</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-6.jpg" alt="table-user" class="me-2 rounded-circle" />
                                                        Risa D. Pearson
                                                    </td>
                                                    <td>AC336 508 2157</td>
                                                    <td>July 24, 1950</td>
                                                    <td class="text-center">
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-7.jpg" alt="table-user" class="me-2 rounded-circle" />
                                                        Ann C. Thompson
                                                    </td>
                                                    <td>SB646 473 2057</td>
                                                    <td>January 25, 1959</td>
                                                    <td class="text-center">
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-8.jpg" alt="table-user" class="me-2 rounded-circle" />
                                                        Paul J. Friend
                                                    </td>
                                                    <td>DL281 308 0793</td>
                                                    <td>September 1, 1939</td>
                                                    <td class="text-center">
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-9.jpg" alt="table-user" class="me-2 rounded-circle" />
                                                        Sean C. Nguyen
                                                    </td>
                                                    <td>CA269 714 6825</td>
                                                    <td>February 5, 1994</td>
                                                    <td class="text-center">
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive-->

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="header-title">Bordered color table</h4>
                                    <p class="text-muted mb-0">
                                        Add <code>.table-bordered</code> & <code>.border-primary</code> can be added to
                                        change colors.
                                    </p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive-sm">
                                        <table class="table table-bordered border-primary table-centered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>User</th>
                                                    <th>Account No.</th>
                                                    <th>Balance</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-6.jpg" alt="table-user" class="me-2 rounded-circle" />
                                                        Risa D. Pearson
                                                    </td>
                                                    <td>AC336 508 2157</td>
                                                    <td>July 24, 1950</td>
                                                    <td class="text-center">
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-7.jpg" alt="table-user" class="me-2 rounded-circle" />
                                                        Ann C. Thompson
                                                    </td>
                                                    <td>SB646 473 2057</td>
                                                    <td>January 25, 1959</td>
                                                    <td class="text-center">
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-8.jpg" alt="table-user" class="me-2 rounded-circle" />
                                                        Paul J. Friend
                                                    </td>
                                                    <td>DL281 308 0793</td>
                                                    <td>September 1, 1939</td>
                                                    <td class="text-center">
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-9.jpg" alt="table-user" class="me-2 rounded-circle" />
                                                        Sean C. Nguyen
                                                    </td>
                                                    <td>CA269 714 6825</td>
                                                    <td>February 5, 1994</td>
                                                    <td class="text-center">
                                                        <a href="javascript: void(0);" class="text-reset fs-16 px-1"> <i class="ri-delete-bin-2-line"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive-->

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                        
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