<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Halaman Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="E-Raport" name="Aqid Fahri Hafin">
    <link rel="shortcut icon" href="assets/images/logo1.png">
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-5 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-info">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-white p-4">
                                        <h5 class="text-white">Welcome !</h5>
                                        <p>Sign in to continue to Financial System.</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="assets/images/profile-img.png" alt=""
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div>
                                <a href="{{ '/' }}">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="assets/images/logo1.png" alt=""
                                                class="rounded-circle" height="60">
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <form class="form-horizontal" action="{{ 'dashboard' }}">

                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username"
                                            placeholder="Enter username">
                                    </div>

                                    <div class="form-group">
                                        <label for="userpassword">Password</label>
                                        <input type="password" class="form-control" id="userpassword"
                                            placeholder="Enter password">
                                    </div>

                                    <div class="mt-3">
                                        <button class="btn btn-info btn-block waves-effect waves-light"
                                            type="submit">Log In</button>
                                    </div>

                                    <div class="mt-4 text-center">
                                        <a href="{{ '/lupapw' }}" class="text-muted"><i
                                                class="mdi mdi-lock mr-1"></i> Forgot your password?</a>
                                        <p class="mt-3 mb-0 text-center">Don't have an account ? <a
                                                href="{{ '/register ' }}" class="font-weight-medium text-info">
                                                Signup now </a> </p>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">

                        <div>
                            <p>©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> PP. Annuqayah  <i
                                    class="mdi mdi-heart text-danger"></i>
                                by Apins Digital.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/js/app.js"></script>
</body>

</html>
