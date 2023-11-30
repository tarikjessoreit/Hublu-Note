<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Hublu Note</title>
    <!-- list css -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="container login">
        <div class="row">
            <div class="col-4 m-auto border login-form">
                <h1 class="h2 text-center my-4">Login</h1>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username"name="un"
                            placeholder="Enter username">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password"name="pass"
                            placeholder="Enter password">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="form-control btn btn-primary" id="loginbtn" value="Login" name="loginbtn">
                    </div>
                </form>
                <div class="text-center">
                    <a href="#">Forget Password?</a>
                    <hr>
                    <a href="registration.php" class="btn btn-success">Create New Account</a>
                </div>

            </div>
        </div>
    </section>



    <!-- Bootstrap JS -->
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>