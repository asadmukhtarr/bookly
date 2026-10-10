<?php include('includes/header.php'); ?>

    <!-- ========== REGISTRATION FORM ========== -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">

                <!-- Card container -->
                <div class="card border-0 shadow-sm my-5">
                    <div class="card-body p-4 p-md-5">

                        <!-- Heading -->
                        <h2 class="h3 fw-semibold text-dark border-bottom border-2 border-primary pb-3 mb-4">
                            <i class="fa fa-user-plus text-primary me-2" aria-hidden="true"></i> Create an Account
                        </h2>

                        <form action="actions/register.php" method="POST">

                            <!-- Full Name -->
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Full Name</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-primary-subtle text-primary">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" class="form-control" name="name" id="fullName"
                                           placeholder="Enter your full name" required>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-primary-subtle text-primary">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </span>
                                    <input type="email" class="form-control" id="email"
                                           placeholder="Enter your email" name="email" required>
                                </div>
                            </div>

                            <!-- Username -->
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-primary-subtle text-primary">
                                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                    </span>
                                    <input type="text" class="form-control" id="username"
                                           placeholder="Choose a username" name="username" required>
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-primary-subtle text-primary">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                    </span>
                                    <input type="password" class="form-control" name="password" id="password"
                                           placeholder="Create a password" required>
                                </div>
                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-3">
                                <label for="confirmPassword" class="form-label">Confirm Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-primary-subtle text-primary">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                    </span>
                                    <input type="password" class="form-control" name="confirm_password" id="confirmPassword"
                                           placeholder="Confirm your password" required>
                                </div>
                            </div>

                            <!-- Terms checkbox -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="termsCheck" required>
                                <label class="form-check-label" for="termsCheck">
                                    I agree to the <a href="#" class="text-decoration-none">Terms &amp; Conditions</a>
                                </label>
                            </div>

                            <!-- Register button -->
                            <button type="submit" class="btn btn-primary w-100 fw-semibold py-2">
                                <i class="fa fa-user-plus me-2" aria-hidden="true"></i> Register
                            </button>

                            <!-- Login link -->
                            <div class="text-center mt-3 text-muted">
                                <i class="fa fa-sign-in me-1" aria-hidden="true"></i> Already have an account?
                                <a href="#" class="fw-semibold text-decoration-none">Login here</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php'); ?>