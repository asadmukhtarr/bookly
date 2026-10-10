<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar + Registration | Pure Bootstrap 5 & Font Awesome 4</title>

    <!-- Bootstrap 5 CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome 4 (CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-light">

    <!-- ========== NAVBAR (Bootstrap 5) ========== -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <!-- Brand -->
            <a class="navbar-brand fw-semibold" href="#">
                <i class="fa fa-users me-1" aria-hidden="true"></i> Asad Mukhtar
            </a>

            <!-- Mobile toggle button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                    aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="mainNavbar">
                <!-- Left-aligned links -->
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <!-- Home -->
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">
                            <i class="fa fa-home me-1" aria-hidden="true"></i> Home
                        </a>
                    </li>

                    <!-- Account dropdown (Login, Register) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-user-circle me-1" aria-hidden="true"></i> Account
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="accountDropdown">
                            <li>
                                <a class="dropdown-item" href="index.php">
                                    <i class="fa fa-sign-in me-2" aria-hidden="true"></i> Login
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="register.php">
                                    <i class="fa fa-user-plus me-2" aria-hidden="true"></i> Register
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="logout.php">
                                    <i class="fa fa-sign-out me-2" aria-hidden="true"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>