<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>eDucator | signup</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= ROOT ?>/backend/img/favicon.png" rel="icon">
    <link href="<?= ROOT ?>/backend/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= ROOT ?>/backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= ROOT ?>/backend/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= ROOT ?>/backend/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= ROOT ?>/backend/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= ROOT ?>/backend/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= ROOT ?>/backend/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= ROOT ?>/backend/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= ROOT ?>/backend/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-2">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-2">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="<?= ROOT ?>/backend/img/logo.png" alt="">
                                    <span class="d-none d-lg-block"><?= APPNAME ?></span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-2">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                        <p class="text-center small">Enter your personal details to create account</p>
                                    </div>

                                    <form method="POST" class="row g-3 needs-validation" novalidate>
                                        <div class="col-6">
                                            <label for="first-name" class="form-label">First Name</label>
                                            <input type="text" name="firstname" class="form-control" id="first-name"
                                                value="<?= set_value('firstname') ?>" required1>
                                            <div class="invalid-feedback">Please, enter your name!</div>
                                        </div>
                                        <div class="col-6">
                                            <label for="last-ame" class="form-label">Last Name</label>
                                            <input type="text" name="lastname" class="form-control" id="last-Name"
                                                value="<?= set_value('lastname') ?>" required1>
                                            <div class="invalid-feedback">Please, enter your name!</div>
                                        </div>

                                        <div class="col-12">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                value="<?= set_value('email') ?>" required1>
                                            <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                                        </div>



                                        <div class="col-12">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="password"
                                                value="<?= set_value('password') ?>" required1>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>
                                        <div class="col-12">
                                            <label for="password-confirm" class="form-label">Confirm Password</label>
                                            <input type="password" name="confirm" class="form-control"
                                                id="password-confirm" required1>
                                            <div class="invalid-feedback">Please enter confirm password!</div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" name="terms" type="checkbox"
                                                    id="acceptTerms" <?= set_value('firstname') ? 'checked' : ''; ?>
                                                    required1>
                                                <label class="form-check-label" for="acceptTerms">I agree and accept the
                                                    <a href="#">terms and conditions</a></label>
                                                <div class="invalid-feedback">You must agree before submitting.</div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Already have an account? <a
                                                    href="<?= ROOT ?>/login">Log in</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                <!-- All the links in the footer should remain intact. -->
                                <!-- You can delete the links only if you purchased the pro version. -->
                                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= ROOT ?>/backend/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?= ROOT ?>/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= ROOT ?>/backend/vendor/chart.js/chart.min.js"></script>
    <script src="<?= ROOT ?>/backend/vendor/echarts/echarts.min.js"></script>
    <script src="<?= ROOT ?>/backend/vendor/quill/quill.min.js"></script>
    <script src="<?= ROOT ?>/backend/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?= ROOT ?>/backend/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?= ROOT ?>/backend/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= ROOT ?>/backend/js/main.js"></script>

</body>

</html>