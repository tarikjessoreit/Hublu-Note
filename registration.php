<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | Hublu Note</title>
    <!-- list css -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="container registration">
        <div class="row">
            <div class="col-4 m-auto border reg-form">
                <h1 class="h2 text-center my-4">Registration</h1>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="Full Name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fname" name="fname"
                            placeholder="Enter Full Name">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="useremail" name="useremail"
                            placeholder="Enter Email">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="pass"
                            placeholder="Enter password">
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password" name="cpass"
                            placeholder="Enter confirm password">
                    </div>
                    

                    <div class="mb-3">
                        <input type="submit" class="form-control btn btn-primary" id="regbtn" value="Registration" name="regbtn">
                    </div>
                </form>
                <div class="text-center">
                    <a href="index.php">Already Account?</a>
                </div>

            </div>
        </div>
    </section>



    <!-- Bootstrap JS -->
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>