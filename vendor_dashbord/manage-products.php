<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "Manage Product";
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
                    $page_title = "Manage Product";
                    include 'partials/page-title.php'; ?>


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">Product List</h4>
                                    <div class="table-responsive">
                                        <table class="table table-centered mb-0 table-nowrap" id="btn-editable">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Actions</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Category</th>
                                                    <th>Color</th>
                                                    <th>Size</th>
                                                    <th>Price</th>
                                                    <th>Description</th>
                                                    <th>Stock</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <button class="btn btn-primary btn-sm edit-btn">Edit</button>
                                                        <button class="btn btn-danger btn-sm delete-btn">Delete</button>
                                                    </td>
                                                    <td><img src="path-to-image.jpg" alt="Product Image" width="50"></td>
                                                    <td class="editable">Product Name</td>
                                                    <td class="editable">Category Name</td>
                                                    <td class="editable">Red</td>
                                                    <td class="editable">M</td>
                                                    <td class="editable">$20.00</td>
                                                    <td class="editable">Short product description.</td>
                                                    <td class="editable">In Stock</td>

                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <button class="btn btn-primary btn-sm edit-btn">Edit</button>
                                                        <button class="btn btn-danger btn-sm delete-btn">Delete</button>
                                                    </td>
                                                    <td><img src="path-to-image.jpg" alt="Product Image" width="50"></td>
                                                    <td class="editable">Product Name</td>
                                                    <td class="editable">Category Name</td>
                                                    <td class="editable">Red</td>
                                                    <td class="editable">M</td>
                                                    <td class="editable">$20.00</td>
                                                    <td class="editable">Short product description.</td>
                                                    <td class="editable">In Stock</td>

                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <button class="btn btn-primary btn-sm edit-btn">Edit</button>
                                                        <button class="btn btn-danger btn-sm delete-btn">Delete</button>
                                                    </td>
                                                    <td><img src="path-to-image.jpg" alt="Product Image" width="50"></td>
                                                    <td class="editable">Product Name</td>
                                                    <td class="editable">Category Name</td>
                                                    <td class="editable">Red</td>
                                                    <td class="editable">M</td>
                                                    <td class="editable">$20.00</td>
                                                    <td class="editable">Short product description.</td>
                                                    <td class="editable">In Stock</td>

                                                </tr>

                                                <!-- Repeat the above <tr> block for each product row -->
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- end .table-responsive-->
                                </div>
                                <!-- end card-body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
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
    <script>
        document.querySelectorAll('#btn-editable .edit-btn').forEach(function(button) {
            button.addEventListener('click', function() {
                const row = button.closest('tr');
                const isEditing = row.classList.contains('editing');

                if (isEditing) {
                    row.querySelectorAll('.editable').forEach(function(cell) {
                        const input = cell.querySelector('input');
                        if (input) cell.textContent = input.value;
                    });
                    button.textContent = 'Edit';
                    row.classList.remove('editing');
                } else {
                    row.querySelectorAll('.editable').forEach(function(cell) {
                        const cellText = cell.textContent;
                        cell.innerHTML = `<input type="text" class="form-control" value="${cellText}">`;
                    });
                    button.textContent = 'Save';
                    row.classList.add('editing');
                }
            });
        });
    </script>

</body>

</html>