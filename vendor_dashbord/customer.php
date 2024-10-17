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
                    $sub_title = "Customer";
                    $page_title = "Customer List";
                    include 'partials/page-title.php'; ?>

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="header-title">Customer List</h4>
                                    <p class="text-muted mb-0">
                                        A list of all customers. Click "View Details" to see more information.
                                    </p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive-sm">
                                        <table class="table table-striped table-centered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th>Contact</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="Customer" class="me-2 rounded-circle" style="width: 40px; height: 40px;">
                                                    </td>
                                                    <td>Risa D. Pearson</td>
                                                    <td>+123 456 789</td>
                                                    <td>
                                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#customerDetailsModal" onclick="viewDetails('Risa D. Pearson', '+123 456 789', 'Additional details about the customer here.')">View Details</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="Customer" class="me-2 rounded-circle" style="width: 40px; height: 40px;">
                                                    </td>
                                                    <td>Risa D. Pearson</td>
                                                    <td>+123 456 789</td>
                                                    <td>
                                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#customerDetailsModal" onclick="viewDetails('Risa D. Pearson', '+123 456 789', 'Additional details about the customer here.')">View Details</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="Customer" class="me-2 rounded-circle" style="width: 40px; height: 40px;">
                                                    </td>
                                                    <td>Risa D. Pearson</td>
                                                    <td>+123 456 789</td>
                                                    <td>
                                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#customerDetailsModal" onclick="viewDetails('Risa D. Pearson', '+123 456 789', 'Additional details about the customer here.')">View Details</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="Customer" class="me-2 rounded-circle" style="width: 40px; height: 40px;">
                                                    </td>
                                                    <td>Risa D. Pearson</td>
                                                    <td>+123 456 789</td>
                                                    <td>
                                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#customerDetailsModal" onclick="viewDetails('Risa D. Pearson', '+123 456 789', 'Additional details about the customer here.')">View Details</button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="table-user">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="Customer" class="me-2 rounded-circle" style="width: 40px; height: 40px;">
                                                    </td>
                                                    <td>Risa D. Pearson</td>
                                                    <td>+123 456 789</td>
                                                    <td>
                                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#customerDetailsModal" onclick="viewDetails('Risa D. Pearson', '+123 456 789', 'Additional details about the customer here.')">View Details</button>
                                                    </td>
                                                </tr>
                                                <!-- Repeat for more customers -->
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive -->
                                </div> <!-- end card body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->

                        <!-- Modal -->
                        <div class="modal fade" id="customerDetailsModal" tabindex="-1" aria-labelledby="customerDetailsModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="customerDetailsModalLabel">Customer Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>Name:</strong> <span id="modalCustomerName"></span></p>
                                        <p><strong>Contact:</strong> <span id="modalCustomerContact"></span></p>
                                        <p id="modalCustomerDetails"></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="header-title">Future Product Demands</h4>
                                    <p class="text-muted mb-0">
                                        Use one of two modifier classes to make <code>&lt;thead&gt;</code>s appear light
                                        or dark gray.
                                    </p>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive-sm">
                                        <table class="table table-centered mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>Product</th>
                                                    <th>Quantity</th>
                                                    <th>Process</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="path/to/image1.jpg" alt="Product 1" style="width: 50px; height: 50px; margin-right: 10px;">
                                                            <span>ASOS Ridley High Waist</span>
                                                        </div>
                                                    </td>
                                                    <td>100</td>
                                                    <td>
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>Delivered</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="path/to/image2.jpg" alt="Product 2" style="width: 50px; height: 50px; margin-right: 10px;">
                                                            <span>Marco Lightweight Shirt</span>
                                                        </div>
                                                    </td>
                                                    <td>50</td>
                                                    <td>
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar progress-lg bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>Shipped</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="path/to/image3.jpg" alt="Product 3" style="width: 50px; height: 50px; margin-right: 10px;">
                                                            <span>Half Sleeve Shirt</span>
                                                        </div>
                                                    </td>
                                                    <td>25</td>
                                                    <td>
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar progress-lg bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>Order Received</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="path/to/image4.jpg" alt="Product 4" style="width: 50px; height: 50px; margin-right: 10px;">
                                                            <span>Lightweight Jacket</span>
                                                        </div>
                                                    </td>
                                                    <td>80</td>
                                                    <td>
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>Delivered</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <img src="path/to/image5.jpg" alt="Product 5" style="width: 50px; height: 50px; margin-right: 10px;">
                                                            <span>Cargo Pant & Shirt</span>
                                                        </div>
                                                    </td>
                                                    <td>10</td>
                                                    <td>
                                                        <div class="progress progress-sm">
                                                            <div class="progress-bar progress-lg bg-danger" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td>Payment Failed</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> <!-- end table-responsive -->
                                </div> <!-- end card body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->


                    </div>
                    <!-- end row-->


                    <div class="row">
                        <h1> Customer Want to Contact</h1>
                        <hr>

                        <div class="col-md-6">

                            <div class="card">
                                <div class="card-body">

                                    <div class="d-flex align-items-start justify-content-between">
                                        <div class="d-flex">
                                            <a class="me-3" href="#">
                                                <img class="avatar-md rounded-circle bx-s" src="assets/images/users/avatar-2.jpg" alt="">
                                            </a>
                                            <div class="info">
                                                <h5 class="fs-18 my-1">Jonathan Smith</h5>
                                                <p class="text-muted fs-15">Graphics Designer</p>
                                            </div>
                                        </div>
                                        <div class="action-buttons">
                                            <a href="#" class="btn btn-info btn-sm me-1 tooltips" data-bs-toggle="modal" data-bs-target="#customerDetailsModal" data-bs-title="See Details">
                                                <i class="ri-eye-fill"></i>
                                            </a>
                                            <a href="#" class="btn btn-primary btn-sm tooltips" data-bs-toggle="modal" data-bs-target="#messageModal" data-bs-title="Message">
                                                <i class="ri-message-fill"></i>
                                            </a>
                                        </div>

                                        <!-- Customer Details Modal -->
                                        <div class="modal fade" id="customerDetailsModal" tabindex="-1" aria-labelledby="customerDetailsModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="customerDetailsModalLabel">Customer Details</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="Customer" class="rounded-circle mb-3" style="width: 80px; height: 80px;">
                                                        <p><strong>Name:</strong> Geneva</p>
                                                        <p><strong>Contact:</strong> +123 456 789</p>
                                                        <p>Additional details about the customer here.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Message Modal -->
                                        <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="messageModalLabel">Message</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="chat-conversation mt-2">
                                                            <div class="card-body py-0 mb-3" data-simplebar style="height: 322px;">
                                                                <ul class="conversation-list">
                                                                    <li class="clearfix">
                                                                        <div class="chat-avatar">
                                                                            <img src="assets/images/users/avatar-5.jpg" alt="male">
                                                                            <i>10:00</i>
                                                                        </div>
                                                                        <div class="conversation-text">
                                                                            <div class="ctext-wrap">
                                                                                <i>Geneva</i>
                                                                                <p>Hello!</p>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="clearfix odd">
                                                                        <div class="chat-avatar">
                                                                            <img src="assets/images/users/avatar-1.jpg" alt="Female">
                                                                            <i>10:01</i>
                                                                        </div>
                                                                        <div class="conversation-text">
                                                                            <div class="ctext-wrap">
                                                                                <i>Thomson</i>
                                                                                <p>Hi, How are you? What about our next meeting?</p>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <!-- More chat messages -->
                                                                </ul>
                                                            </div>
                                                            <div class="card-body pt-0">
                                                                <form class="needs-validation" novalidate name="chat-form" id="chat-form">
                                                                    <div class="row align-items-start">
                                                                        <div class="col">
                                                                            <input type="text" class="form-control chat-input" placeholder="Enter your text" required>
                                                                            <div class="invalid-feedback">Please enter your message</div>
                                                                        </div>
                                                                        <div class="col-auto d-grid">
                                                                            <button type="submit" class="btn btn-danger chat-send waves-effect waves-light">Send</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div> <!-- end .chat-conversation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <hr>
                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Facebook"><i class="ri-facebook-fill"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Twitter"><i class="ri-twitter-fill"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="LinkedIn"><i class="ri-linkedin-box-fill"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Skype"><i class="ri-skype-fill"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Message"><i class="ri-mail-open-line"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- card-body -->
                            </div>
                            <!-- card -->
                        </div> <!-- end col -->

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <div class="d-flex">
                                            <a class="me-3" href="#">
                                                <img class="avatar-md rounded-circle bx-s" src="assets/images/users/avatar-3.jpg" alt="">
                                            </a>
                                            <div class="info">
                                                <h5 class="fs-18 my-1">Jerry Johnson</h5>
                                                <p class="text-muted fs-15">Graphics Designer</p>
                                            </div>
                                        </div>
                                        <div class="action-buttons">
                                            <a href="#" class="btn btn-info btn-sm me-1 tooltips" data-bs-toggle="modal" data-bs-target="#customerDetailsModal" data-bs-title="See Details">
                                                <i class="ri-eye-fill"></i>
                                            </a>
                                            <a href="#" class="btn btn-primary btn-sm tooltips" data-bs-toggle="modal" data-bs-target="#messageModal" data-bs-title="Message">
                                                <i class="ri-message-fill"></i>
                                            </a>
                                        </div>

                                        <!-- Customer Details Modal -->
                                        <div class="modal fade" id="customerDetailsModal" tabindex="-1" aria-labelledby="customerDetailsModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="customerDetailsModalLabel">Customer Details</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="Customer" class="rounded-circle mb-3" style="width: 80px; height: 80px;">
                                                        <p><strong>Name:</strong> Geneva</p>
                                                        <p><strong>Contact:</strong> +123 456 789</p>
                                                        <p>Additional details about the customer here.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Message Modal -->
                                        <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="messageModalLabel">Message</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="chat-conversation mt-2">
                                                            <div class="card-body py-0 mb-3" data-simplebar style="height: 322px;">
                                                                <ul class="conversation-list">
                                                                    <li class="clearfix">
                                                                        <div class="chat-avatar">
                                                                            <img src="assets/images/users/avatar-5.jpg" alt="male">
                                                                            <i>10:00</i>
                                                                        </div>
                                                                        <div class="conversation-text">
                                                                            <div class="ctext-wrap">
                                                                                <i>Geneva</i>
                                                                                <p>Hello!</p>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="clearfix odd">
                                                                        <div class="chat-avatar">
                                                                            <img src="assets/images/users/avatar-1.jpg" alt="Female">
                                                                            <i>10:01</i>
                                                                        </div>
                                                                        <div class="conversation-text">
                                                                            <div class="ctext-wrap">
                                                                                <i>Thomson</i>
                                                                                <p>Hi, How are you? What about our next meeting?</p>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <!-- More chat messages -->
                                                                </ul>
                                                            </div>
                                                            <div class="card-body pt-0">
                                                                <form class="needs-validation" novalidate name="chat-form" id="chat-form">
                                                                    <div class="row align-items-start">
                                                                        <div class="col">
                                                                            <input type="text" class="form-control chat-input" placeholder="Enter your text" required>
                                                                            <div class="invalid-feedback">Please enter your message</div>
                                                                        </div>
                                                                        <div class="col-auto d-grid">
                                                                            <button type="submit" class="btn btn-danger chat-send waves-effect waves-light">Send</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div> <!-- end .chat-conversation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <hr>

                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Facebook"><i class="ri-facebook-fill"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Twitter"><i class="ri-twitter-fill"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="LinkedIn"><i class="ri-linkedin-box-fill"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Skype"><i class="ri-skype-fill"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Message"><i class="ri-mail-open-line"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- card-body -->
                            </div>
                            <!-- card -->
                        </div> <!-- end col -->
                    </div> <!-- End row -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <div class="d-flex">
                                            <a class="me-3" href="#">
                                                <img class="avatar-md rounded-circle bx-s" src="assets/images/users/avatar-6.jpg" alt="">
                                            </a>
                                            <div class="info">
                                                <h5 class="fs-18 my-1">James Haley</h5>
                                                <p class="text-muted fs-15">Graphics Designer</p>
                                            </div>
                                        </div>
                                        <div class="action-buttons">
                                            <a href="#" class="btn btn-info btn-sm me-1 tooltips" data-bs-toggle="modal" data-bs-target="#customerDetailsModal" data-bs-title="See Details">
                                                <i class="ri-eye-fill"></i>
                                            </a>
                                            <a href="#" class="btn btn-primary btn-sm tooltips" data-bs-toggle="modal" data-bs-target="#messageModal" data-bs-title="Message">
                                                <i class="ri-message-fill"></i>
                                            </a>
                                        </div>

                                        <!-- Customer Details Modal -->
                                        <div class="modal fade" id="customerDetailsModal" tabindex="-1" aria-labelledby="customerDetailsModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="customerDetailsModalLabel">Customer Details</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="Customer" class="rounded-circle mb-3" style="width: 80px; height: 80px;">
                                                        <p><strong>Name:</strong> Geneva</p>
                                                        <p><strong>Contact:</strong> +123 456 789</p>
                                                        <p>Additional details about the customer here.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Message Modal -->
                                        <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="messageModalLabel">Message</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="chat-conversation mt-2">
                                                            <div class="card-body py-0 mb-3" data-simplebar style="height: 322px;">
                                                                <ul class="conversation-list">
                                                                    <li class="clearfix">
                                                                        <div class="chat-avatar">
                                                                            <img src="assets/images/users/avatar-5.jpg" alt="male">
                                                                            <i>10:00</i>
                                                                        </div>
                                                                        <div class="conversation-text">
                                                                            <div class="ctext-wrap">
                                                                                <i>Geneva</i>
                                                                                <p>Hello!</p>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="clearfix odd">
                                                                        <div class="chat-avatar">
                                                                            <img src="assets/images/users/avatar-1.jpg" alt="Female">
                                                                            <i>10:01</i>
                                                                        </div>
                                                                        <div class="conversation-text">
                                                                            <div class="ctext-wrap">
                                                                                <i>Thomson</i>
                                                                                <p>Hi, How are you? What about our next meeting?</p>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <!-- More chat messages -->
                                                                </ul>
                                                            </div>
                                                            <div class="card-body pt-0">
                                                                <form class="needs-validation" novalidate name="chat-form" id="chat-form">
                                                                    <div class="row align-items-start">
                                                                        <div class="col">
                                                                            <input type="text" class="form-control chat-input" placeholder="Enter your text" required>
                                                                            <div class="invalid-feedback">Please enter your message</div>
                                                                        </div>
                                                                        <div class="col-auto d-grid">
                                                                            <button type="submit" class="btn btn-danger chat-send waves-effect waves-light">Send</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div> <!-- end .chat-conversation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <hr>
                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Facebook"><i class="ri-facebook-fill"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Twitter"><i class="ri-twitter-fill"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="LinkedIn"><i class="ri-linkedin-box-fill"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Skype"><i class="ri-skype-fill"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Message"><i class="ri-mail-open-line"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- card-body -->
                            </div>
                            <!-- card -->
                        </div> <!-- end col -->

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <div class="d-flex">
                                            <a class="me-3" href="#">
                                                <img class="avatar-md rounded-circle bx-s" src="assets/images/users/avatar-5.jpg" alt="">
                                            </a>
                                            <div class="info">
                                                <h5 class="fs-18 my-1">Mark Smith</h5>
                                                <p class="text-muted fs-15">Graphics Designer</p>
                                            </div>
                                        </div>
                                        <div class="action-buttons">
                                            <a href="#" class="btn btn-info btn-sm me-1 tooltips" data-bs-toggle="modal" data-bs-target="#customerDetailsModal" data-bs-title="See Details">
                                                <i class="ri-eye-fill"></i>
                                            </a>
                                            <a href="#" class="btn btn-primary btn-sm tooltips" data-bs-toggle="modal" data-bs-target="#messageModal" data-bs-title="Message">
                                                <i class="ri-message-fill"></i>
                                            </a>
                                        </div>

                                        <!-- Customer Details Modal -->
                                        <div class="modal fade" id="customerDetailsModal" tabindex="-1" aria-labelledby="customerDetailsModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="customerDetailsModalLabel">Customer Details</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="Customer" class="rounded-circle mb-3" style="width: 80px; height: 80px;">
                                                        <p><strong>Name:</strong> Geneva</p>
                                                        <p><strong>Contact:</strong> +123 456 789</p>
                                                        <p>Additional details about the customer here.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Message Modal -->
                                        <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="messageModalLabel">Message</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="chat-conversation mt-2">
                                                            <div class="card-body py-0 mb-3" data-simplebar style="height: 322px;">
                                                                <ul class="conversation-list">
                                                                    <li class="clearfix">
                                                                        <div class="chat-avatar">
                                                                            <img src="assets/images/users/avatar-5.jpg" alt="male">
                                                                            <i>10:00</i>
                                                                        </div>
                                                                        <div class="conversation-text">
                                                                            <div class="ctext-wrap">
                                                                                <i>Geneva</i>
                                                                                <p>Hello!</p>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="clearfix odd">
                                                                        <div class="chat-avatar">
                                                                            <img src="assets/images/users/avatar-1.jpg" alt="Female">
                                                                            <i>10:01</i>
                                                                        </div>
                                                                        <div class="conversation-text">
                                                                            <div class="ctext-wrap">
                                                                                <i>Thomson</i>
                                                                                <p>Hi, How are you? What about our next meeting?</p>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <!-- More chat messages -->
                                                                </ul>
                                                            </div>
                                                            <div class="card-body pt-0">
                                                                <form class="needs-validation" novalidate name="chat-form" id="chat-form">
                                                                    <div class="row align-items-start">
                                                                        <div class="col">
                                                                            <input type="text" class="form-control chat-input" placeholder="Enter your text" required>
                                                                            <div class="invalid-feedback">Please enter your message</div>
                                                                        </div>
                                                                        <div class="col-auto d-grid">
                                                                            <button type="submit" class="btn btn-danger chat-send waves-effect waves-light">Send</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div> <!-- end .chat-conversation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <hr>
                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Facebook"><i class="ri-facebook-fill"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Twitter"><i class="ri-twitter-fill"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="LinkedIn"><i class="ri-linkedin-box-fill"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Skype"><i class="ri-skype-fill"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Message"><i class="ri-mail-open-line"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- card-body -->
                            </div>
                            <!-- card -->
                        </div> <!-- end col -->
                    </div> <!-- End row -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <div class="d-flex">
                                            <a class="me-3" href="#">
                                                <img class="avatar-md rounded-circle bx-s" src="assets/images/users/avatar-7.jpg" alt="">
                                            </a>
                                            <div class="info">
                                                <h5 class="fs-18 my-1">Fred Otero</h5>
                                                <p class="text-muted fs-15">Graphics Designer</p>
                                            </div>
                                        </div>
                                        <div class="action-buttons">
                                            <a href="#" class="btn btn-info btn-sm me-1 tooltips" data-bs-toggle="modal" data-bs-target="#customerDetailsModal" data-bs-title="See Details">
                                                <i class="ri-eye-fill"></i>
                                            </a>
                                            <a href="#" class="btn btn-primary btn-sm tooltips" data-bs-toggle="modal" data-bs-target="#messageModal" data-bs-title="Message">
                                                <i class="ri-message-fill"></i>
                                            </a>
                                        </div>

                                        <!-- Customer Details Modal -->
                                        <div class="modal fade" id="customerDetailsModal" tabindex="-1" aria-labelledby="customerDetailsModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="customerDetailsModalLabel">Customer Details</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="Customer" class="rounded-circle mb-3" style="width: 80px; height: 80px;">
                                                        <p><strong>Name:</strong> Geneva</p>
                                                        <p><strong>Contact:</strong> +123 456 789</p>
                                                        <p>Additional details about the customer here.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Message Modal -->
                                        <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="messageModalLabel">Message</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="chat-conversation mt-2">
                                                            <div class="card-body py-0 mb-3" data-simplebar style="height: 322px;">
                                                                <ul class="conversation-list">
                                                                    <li class="clearfix">
                                                                        <div class="chat-avatar">
                                                                            <img src="assets/images/users/avatar-5.jpg" alt="male">
                                                                            <i>10:00</i>
                                                                        </div>
                                                                        <div class="conversation-text">
                                                                            <div class="ctext-wrap">
                                                                                <i>Geneva</i>
                                                                                <p>Hello!</p>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="clearfix odd">
                                                                        <div class="chat-avatar">
                                                                            <img src="assets/images/users/avatar-1.jpg" alt="Female">
                                                                            <i>10:01</i>
                                                                        </div>
                                                                        <div class="conversation-text">
                                                                            <div class="ctext-wrap">
                                                                                <i>Thomson</i>
                                                                                <p>Hi, How are you? What about our next meeting?</p>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <!-- More chat messages -->
                                                                </ul>
                                                            </div>
                                                            <div class="card-body pt-0">
                                                                <form class="needs-validation" novalidate name="chat-form" id="chat-form">
                                                                    <div class="row align-items-start">
                                                                        <div class="col">
                                                                            <input type="text" class="form-control chat-input" placeholder="Enter your text" required>
                                                                            <div class="invalid-feedback">Please enter your message</div>
                                                                        </div>
                                                                        <div class="col-auto d-grid">
                                                                            <button type="submit" class="btn btn-danger chat-send waves-effect waves-light">Send</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div> <!-- end .chat-conversation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <hr>
                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Facebook"><i class="ri-facebook-fill"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Twitter"><i class="ri-twitter-fill"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="LinkedIn"><i class="ri-linkedin-box-fill"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Skype"><i class="ri-skype-fill"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Message"><i class="ri-mail-open-line"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- card-body -->
                            </div>
                            <!-- card -->
                        </div> <!-- end col -->

                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <div class="d-flex">
                                            <a class="me-3" href="#">
                                                <img class="avatar-md rounded-circle bx-s" src="assets/images/users/avatar-8.jpg" alt="">
                                            </a>
                                            <div class="info">
                                                <h5 class="fs-18 my-1">John McBryde</h5>
                                                <p class="text-muted fs-15">Graphics Designer</p>
                                            </div>
                                        </div>
                                        <div class="action-buttons">
                                            <a href="#" class="btn btn-info btn-sm me-1 tooltips" data-bs-toggle="modal" data-bs-target="#customerDetailsModal" data-bs-title="See Details">
                                                <i class="ri-eye-fill"></i>
                                            </a>
                                            <a href="#" class="btn btn-primary btn-sm tooltips" data-bs-toggle="modal" data-bs-target="#messageModal" data-bs-title="Message">
                                                <i class="ri-message-fill"></i>
                                            </a>
                                        </div>

                                        <!-- Customer Details Modal -->
                                        <div class="modal fade" id="customerDetailsModal" tabindex="-1" aria-labelledby="customerDetailsModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="customerDetailsModalLabel">Customer Details</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="Customer" class="rounded-circle mb-3" style="width: 80px; height: 80px;">
                                                        <p><strong>Name:</strong> Geneva</p>
                                                        <p><strong>Contact:</strong> +123 456 789</p>
                                                        <p>Additional details about the customer here.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Message Modal -->
                                        <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="messageModalLabel">Message</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="chat-conversation mt-2">
                                                            <div class="card-body py-0 mb-3" data-simplebar style="height: 322px;">
                                                                <ul class="conversation-list">
                                                                    <li class="clearfix">
                                                                        <div class="chat-avatar">
                                                                            <img src="assets/images/users/avatar-5.jpg" alt="male">
                                                                            <i>10:00</i>
                                                                        </div>
                                                                        <div class="conversation-text">
                                                                            <div class="ctext-wrap">
                                                                                <i>Geneva</i>
                                                                                <p>Hello!</p>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="clearfix odd">
                                                                        <div class="chat-avatar">
                                                                            <img src="assets/images/users/avatar-1.jpg" alt="Female">
                                                                            <i>10:01</i>
                                                                        </div>
                                                                        <div class="conversation-text">
                                                                            <div class="ctext-wrap">
                                                                                <i>Thomson</i>
                                                                                <p>Hi, How are you? What about our next meeting?</p>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <!-- More chat messages -->
                                                                </ul>
                                                            </div>
                                                            <div class="card-body pt-0">
                                                                <form class="needs-validation" novalidate name="chat-form" id="chat-form">
                                                                    <div class="row align-items-start">
                                                                        <div class="col">
                                                                            <input type="text" class="form-control chat-input" placeholder="Enter your text" required>
                                                                            <div class="invalid-feedback">Please enter your message</div>
                                                                        </div>
                                                                        <div class="col-auto d-grid">
                                                                            <button type="submit" class="btn btn-danger chat-send waves-effect waves-light">Send</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div> <!-- end .chat-conversation-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <hr>
                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Facebook"><i class="ri-facebook-fill"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Twitter"><i class="ri-twitter-fill"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="LinkedIn"><i class="ri-linkedin-box-fill"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Skype"><i class="ri-skype-fill"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-list-item bg-dark-subtle text-secondary fs-16 border-0" title="" data-bs-toggle="tooltip" data-bs-placement="top" class="tooltips" href="" data-bs-title="Message"><i class="ri-mail-open-line"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- card-body -->
                            </div>
                            <!-- card -->
                        </div> <!-- end col -->
                    </div> <!-- End row -->
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
            function viewDetails(name, contact, details) {
                document.getElementById('modalCustomerName').innerText = name;
                document.getElementById('modalCustomerContact').innerText = contact;
                document.getElementById('modalCustomerDetails').innerText = details;
            }
        </script>

</body>

</html>