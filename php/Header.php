<?php
session_start();
ob_start();
?>
<?php include_once('php/preloader.php') ?>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2">
                        <i class="far fa-clock text-primary me-2"></i>
                        Opening Hours: Mon - Tues : 6.00 am - 10.00 pm, Sunday Closed
                    </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>zeyadhatem151177@gmail.com</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+20 111 207 9745</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div style="margin-left:70px; margin-right:50px;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="index.php" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary">
                        <i class="fa fa-clinic-medical me-2"></i>Carevia
                    </h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Service</a>
                        <a href="price.php" class="nav-item nav-link">Pricing</a>
                        <a href="appointment.php" class="nav-item nav-link">Appointment</a>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>

                        <?php if (isset($_SESSION['user_id'])): ?>
                            <div class="dropdown" style="margin-top: 25px; margin-left: 25px;">
                                <a href="#" class="dropdown-toggle" id="profileMenuButton" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="assets/Uplods/<?php echo !empty($_SESSION['profile_image']) ? $_SESSION['profile_image'] : 'default.png'; ?>"
                                        alt="User" width="40" height="40" style="border-radius: 50%;">
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="profileMenuButton"
                                    style="min-width: 280px;">
                                    <li class="text-center text-dark p-3 rounded-top">
                                        <img src="assets/Uplods/<?php echo !empty($_SESSION['profile_image']) ? $_SESSION['profile_image'] : 'default.png'; ?>"
                                            class="rounded-circle mb-2" width="80" height="80" alt="User Image">
                                        <p class="mb-0"><?php echo htmlspecialchars($_SESSION['username'] ?? 'Guest'); ?>
                                        </p>
                                        <small>Member since 2024</small>
                                    </li>

                                    <li>
                                        <hr class="dropdown-divider my-0">
                                    </li>

                                    <li class="px-3 py-2 d-flex justify-content-between text-center">
                                        <a href="appointment.php"
                                            class="flex-fill text-decoration-none text-dark">Appointments</a>
                                        <a href="#" class="flex-fill text-decoration-none text-dark ">Department</a>
                                    </li>

                                    <li>
                                        <hr class="dropdown-divider my-0">
                                    </li>

                                    <li class="d-flex justify-content-between px-3 py-2">
                                        <a href="profile/profile.php" class="btn btn-sm btn-outline-primary">Profile</a>
                                        <a href="login/logout.php" class="btn btn-sm btn-outline-danger">Sign out</a>
                                    </li>
                                </ul>
                            </div>
                        <?php else: ?>
                            <a href="login/login.html" class="nav-item nav-link">Sign in</a>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
</body>