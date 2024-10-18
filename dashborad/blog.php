<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "Range Slider";
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
                    $page_title = "Blog";
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

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="header-title mt-5 mt-lg-0">Add Blog</h4>
                                <p class="text-muted mb-0">
                                    Fill out the form below to add a new blog post. Select one or more categories for the blog.
                                </p>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="mb-3">
                                        <label for="blogTitle" class="form-label">Blog Title</label>
                                        <input type="text" class="form-control" id="blogTitle" placeholder="Enter the blog title">
                                    </div>

                                    <div class="mb-3">
                                        <label for="blogDescription" class="form-label">Description</label>
                                        <textarea class="form-control" id="blogDescription" rows="5" placeholder="Enter the blog description"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="blogImage" class="form-label">Upload Blog Image</label>
                                        <div class="custom-file-container" data-upload-id="blogImageUpload">
                                            <!-- Preview Area -->
                                            <div class="custom-file-preview mb-2">
                                                <img id="imagePreview" src="#" alt="Image Preview" class="d-none img-fluid rounded" style="max-height: 200px;">
                                            </div>

                                            <!-- Drag and Drop Area -->
                                            <div class="custom-file-drop-area text-center p-3 border border-dashed rounded">
                                                <p class="text-muted mb-2">Drag & Drop your image here or</p>
                                                <button class="btn btn-secondary btn-sm" type="button" onclick="document.getElementById('blogImage').click();">Browse</button>
                                            </div>

                                            <input class="form-control d-none" type="file" id="blogImage" accept="image/*" onchange="previewImage(this);">
                                            <div class="form-text">Max size: 2MB. Allowed formats: jpg, png, jpeg.</div>
                                        </div>
                                    </div>

                                    <h6 class="fs-15">Categories</h6>
                                    <p>Select the relevant categories for the blog post:</p>

                                    <div class="mt-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="categoryTech">
                                            <label class="form-check-label" for="categoryTech">Technology</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="categoryHealth">
                                            <label class="form-check-label" for="categoryHealth">Health</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="categoryTravel">
                                            <label class="form-check-label" for="categoryTravel">Travel</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="categoryLifestyle">
                                            <label class="form-check-label" for="categoryLifestyle">Lifestyle</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="categoryEducation">
                                            <label class="form-check-label" for="categoryEducation">Education</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="categoryFood">
                                            <label class="form-check-label" for="categoryFood">Food</label>
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <button type="submit" class="btn btn-primary">Submit Blog</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </form>
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->

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

        <!-- Plgins only -->
        <script src="assets/js/vendor/ion.rangeSlider.min.js"></script>
        <script src="assets/js/pages/range-slider.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
        <script>
            function previewImage(input) {
                const preview = document.getElementById('imagePreview');
                if (input.files && input.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview.src = e.target.result;
                        preview.classList.remove('d-none');
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>

</body>

</html>