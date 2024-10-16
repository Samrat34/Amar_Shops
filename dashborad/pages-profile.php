<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "Profile";
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

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="profile-bg-picture"
                                style="background-image:url('assets/images/bg-profile.jpg')">
                                <span class="picture-bg-overlay"></span>
                                <!-- overlay -->
                            </div>
                            <!-- meta -->
                            <div class="profile-user-box">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="profile-user-img"><img src="assets/images/logo.png" alt=""
                                                class="avatar-lg rounded-circle"></div>
                                        <div class="">
                                            <h4 class="mt-4 fs-17 ellipsis">Amar Shop Admin</h4>
                                            <p class="font-13"> Admin Controller</p>
                                            <p class="text-muted mb-0"><small>Dhaka, Bangladesh</small></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex justify-content-end align-items-center gap-2">
                                            <button type="button" class="btn btn-soft-danger">
                                                <i class="ri-settings-2-line align-text-bottom me-1 fs-16 lh-1"></i>
                                                Edit Profile
                                            </button>
                                            <!-- <a class="btn btn-soft-info" href="#"> <i class="ri-check-double-fill fs-18 me-1 lh-1"></i> Following</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ meta -->
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card p-0">
                                <div class="card-body p-0">
                                    <div class="profile-content">
                                        <ul class="nav nav-underline nav-justified gap-0">

                                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                                    data-bs-target="#aboutme" type="button" role="tab"
                                                    aria-controls="home" aria-selected="true" href="#aboutme">About</a>
                                            </li>
                                            <!-- <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target="#projects" type="button" role="tab"
                                                    aria-controls="home" aria-selected="true"
                                                    href="#projects">Your Produtc</a></li>
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target="#user-activities" type="button" role="tab"
                                                    aria-controls="home" aria-selected="true"
                                                    href="#user-activities">Activities</a></li> -->
                                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target="#edit-profile" type="button" role="tab"
                                                    aria-controls="home" aria-selected="true"
                                                    href="#edit-profile">Settings</a></li>

                                        </ul>

                                        <div class="tab-content m-0 p-4">
                                            <div class="tab-pane active" id="aboutme" role="tabpanel"
                                                aria-labelledby="home-tab" tabindex="0">
                                                <div class="profile-desk">
                                                    <h5 class="text-uppercase fs-17 text-dark">Amar Shop Team</h5>
                                                    <div class="designation mb-4">Super Admin</div>
                                                    <p class="text-muted fs-16">
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque alias repellendus sit voluptatum, sequi ut ullam assumenda expedita? Voluptatibus, dolores.
                                                    </p>

                                                    <h5 class="mt-4 fs-17 text-dark">Contact Information</h5>
                                                    <table class="table table-condensed mb-0 border-top">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">Url</th>
                                                                <td>
                                                                    <a href="#" class="ng-binding">
                                                                        www.amarshop.com
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Email</th>
                                                                <td>
                                                                    <a href="" class="ng-binding">
                                                                        amarshop@gmail.com
                                                                    </a>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <th scope="row">Phone</th>
                                                                <td class="ng-binding">(123)-456-7890</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Skype</th>
                                                                <td>
                                                                    <a href="#" class="ng-binding">
                                                                        @skaypeamarshop
                                                                    </a>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div> <!-- end profile-desk -->
                                            </div> <!-- about-me -->

                                            <!-- Activities -->
                                            <div id="user-activities" class="tab-pane">
                                                <div class="timeline-2">
                                                    <div class="time-item">
                                                        <div class="item-info ms-3 mb-3">
                                                            <div class="text-muted">5 minutes ago</div>
                                                            <p><strong><a href="#" class="text-info">John
                                                                        Doe</a></strong>Uploaded a photo</p>
                                                            <img src="assets/images/small/small-3.jpg" alt=""
                                                                height="40" width="60" class="rounded-1">
                                                            <img src="assets/images/small/small-4.jpg" alt=""
                                                                height="40" width="60" class="rounded-1">
                                                        </div>
                                                    </div>

                                                    <div class="time-item">
                                                        <div class="item-info ms-3 mb-3">
                                                            <div class="text-muted">30 minutes ago</div>
                                                            <p><a href="" class="text-info">Lorem</a> commented your
                                                                post.
                                                            </p>
                                                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit.
                                                                    Aliquam laoreet tellus ut tincidunt euismod. "</em>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="time-item">
                                                        <div class="item-info ms-3 mb-3">
                                                            <div class="text-muted">59 minutes ago</div>
                                                            <p><a href="" class="text-info">Jessi</a> attended a meeting
                                                                with<a href="#" class="text-success">John Doe</a>.</p>
                                                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit.
                                                                    Aliquam laoreet tellus ut tincidunt euismod. "</em>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="time-item">
                                                        <div class="item-info ms-3 mb-3">
                                                            <div class="text-muted">5 minutes ago</div>
                                                            <p><strong><a href="#" class="text-info">John
                                                                        Doe</a></strong> Uploaded 2 new photos</p>
                                                            <img src="assets/images/small/small-2.jpg" alt=""
                                                                height="40" width="60" class="rounded-1">
                                                            <img src="assets/images/small/small-1.jpg" alt=""
                                                                height="40" width="60" class="rounded-1">
                                                        </div>
                                                    </div>

                                                    <div class="time-item">
                                                        <div class="item-info ms-3 mb-3">
                                                            <div class="text-muted">30 minutes ago</div>
                                                            <p><a href="" class="text-info">Lorem</a> commented your
                                                                post.
                                                            </p>
                                                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit.
                                                                    Aliquam laoreet tellus ut tincidunt euismod. "</em>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="time-item">
                                                        <div class="item-info ms-3 mb-3">
                                                            <div class="text-muted">59 minutes ago</div>
                                                            <p><a href="" class="text-info">Jessi</a> attended a meeting
                                                                with<a href="#" class="text-success">John Doe</a>.</p>
                                                            <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing
                                                                    elit.
                                                                    Aliquam laoreet tellus ut tincidunt euismod. "</em>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- settings -->
                                            <div id="edit-profile" class="tab-pane">
                                                <div class="user-profile-content">
                                                    <form>
                                                        <div class="row row-cols-sm-2 row-cols-1">
                                                            <div class="mb-2">
                                                                <label class="form-label" for="FullName">Full
                                                                    Name</label>
                                                                <input type="text" value="John Doe" id="FullName"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="Email">Email</label>
                                                                <input type="email" value="first.last@example.com"
                                                                    id="Email" class="form-control">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="web-url">Website</label>
                                                                <input type="text" value="Enter website url"
                                                                    id="web-url" class="form-control">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                    for="Username">Username</label>
                                                                <input type="text" value="john" id="Username"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                    for="Password">Password</label>
                                                                <input type="password" placeholder="6 - 15 Characters"
                                                                    id="Password" class="form-control">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label"
                                                                    for="RePassword">Re-Password</label>
                                                                <input type="password" placeholder="6 - 15 Characters"
                                                                    id="RePassword" class="form-control">
                                                            </div>
                                                            <div class="col-sm-12 mb-3">
                                                                <label class="form-label" for="AboutMe">About Me</label>
                                                                <textarea style="height: 125px;" id="AboutMe"
                                                                    class="form-control">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</textarea>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-primary" type="submit"><i
                                                                class="ri-save-line me-1 fs-16 lh-1"></i> Save</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- profile -->
                                            <div id="projects" class="tab-pane">
                                                <div class="row">
                                                    <div class="col-xl-12">
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h4 class="header-title">Product List</h4>
                                                                <p class="text-muted mb-0">
                                                                    A detailed product list with product ID, image, name, category, price, and brand.
                                                                </p>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="table-responsive-sm">
                                                                    <table class="table table-striped table-centered mb-0">
                                                                        <thead>
                                                                            <tr>
                                                                                <th>Product ID</th>
                                                                                <th>Product Image</th>
                                                                                <th>Product Name</th>
                                                                                <th>Category</th>
                                                                                <th>Price</th>
                                                                                <th>Brand</th>
                                                                                <th>Product Details</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>001</td>
                                                                                <td><img src="image1.jpg" alt="Product Image" class="rounded" width="50"></td>
                                                                                <td>Product A</td>
                                                                                <td>Electronics</td>
                                                                                <td>$150.00</td>
                                                                                <td>Brand X</td>
                                                                                <td><a href="ui-carousel.php">View Details</a></td>
                                                                                <td>
                                                                                    <a href="edit-product-001.html" class="text-reset px-1">
                                                                                        <i class="ri-edit-2-line"></i>
                                                                                    </a>
                                                                                    <a href="javascript:void(0);" class="text-reset px-1">
                                                                                        <i class=" ri-delete-bin-6-line"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>002</td>
                                                                                <td><img src="image2.jpg" alt="Product Image" class="rounded" width="50"></td>
                                                                                <td>Product B</td>
                                                                                <td>Clothing</td>
                                                                                <td>$35.00</td>
                                                                                <td>Brand Y</td>
                                                                                <td><a href="product-details-002.html">View Details</a></td>
                                                                                <td>
                                                                                    <a href="edit-product-002.html" class="text-reset px-1">
                                                                                        <i class="ri-edit-2-line"></i>
                                                                                    </a>
                                                                                    <a href="javascript:void(0);" class="text-reset px-1">
                                                                                        <i class="ri-delete-bin-6-line"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>003</td>
                                                                                <td><img src="image3.jpg" alt="Product Image" class="rounded" width="50"></td>
                                                                                <td>Product C</td>
                                                                                <td>Accessories</td>
                                                                                <td>$20.00</td>
                                                                                <td>Brand Z</td>
                                                                                <td><a href="product-details-003.html">View Details</a></td>
                                                                                <td>
                                                                                    <a href="edit-product-003.html" class="text-reset px-1">
                                                                                        <i class="ri-edit-2-line"></i>
                                                                                    </a>
                                                                                    <a href="javascript:void(0);" class="text-reset px-1">
                                                                                        <i class="ri-delete-bin-6-line"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>004</td>
                                                                                <td><img src="image4.jpg" alt="Product Image" class="rounded" width="50"></td>
                                                                                <td>Product D</td>
                                                                                <td>Home Appliances</td>
                                                                                <td>$250.00</td>
                                                                                <td>Brand A</td>
                                                                                <td><a href="product-details-004.html">View Details</a></td>
                                                                                <td>
                                                                                    <a href="edit-product-004.html" class="text-reset px-1">
                                                                                        <i class="ri-edit-2-line"></i>
                                                                                    </a>
                                                                                    <a href="javascript:void(0);" class="text-reset px-1">
                                                                                        <i class="ri-delete-bin-6-line"></i>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>005</td>
                                                                                <td><img src="image5.jpg" alt="Product Image" class="rounded" width="50"></td>
                                                                                <td>Product E</td>
                                                                                <td>Footwear</td>
                                                                                <td>$80.00</td>
                                                                                <td>Brand B</td>
                                                                                <td><a href="product-details-005.html">View Details</a></td>
                                                                                <td>
                                                                                    <a href="edit-product-005.html" class="text-reset px-1">
                                                                                        <i class="ri-edit-2-line"></i>
                                                                                    </a>
                                                                                    <a href="javascript:void(0);" class="text-reset px-1">
                                                                                        <i class="ri-delete-bin-6-line"></i>
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
                                                <!-- end row -->
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                </div>
                <!-- end row -->

            </div>
            <!-- container -->

        </div>
        <!-- content -->

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