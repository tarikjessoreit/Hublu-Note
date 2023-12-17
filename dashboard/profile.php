<?php include "header.php" ?>
<?php

// update
if (isset($_POST['updateprofilebtn'])) {
    $fullname = $_POST["fullname"];
    $u_pass = $_POST['pass'];
    $u_confpass = $_POST['cpass'];

    if ($u_pass === $u_confpass) {
        $u_pass = password_hash($u_pass, PASSWORD_DEFAULT);

        $sql = "UPDATE $users SET user_fullname='$fullname', user_password='$u_pass' WHERE ID = $USERID;";

        if ($conn->query($sql) == true) {
            $succ = 'Profile Updated!';
        } else {
            $err = "Faild to update Profile.Please try again." . $conn->error;
        }

    }else{
        $err = "Password is not match. please try again!";
    }
}



// get existing data
$sql = "SELECT * FROM $users WHERE ID = $USERID";
$result = $conn->query($sql);
$userData = $result->fetch_assoc();
// echo $userData['note_title'];
?>

<section class="container mt-2">
    <div class="row">
        <div class="col-12">
            <h1>Edit PROFILE</h1>

            <?php if (isset($succ)) { ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $succ ?>
                </div>
            <?php } ?>

            <?php if (isset($err)) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $err ?>
                </div>
            <?php } ?>

        </div>

        <div class="card col-8 border-0 mt-3">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="fullname" class="form-label">Full Name <b class="text-danger">*</b> </label>
                    <input name="fullname" type="text" class="form-control" id="fullname"
                        value="<?php echo $userData['user_fullname'] ?>" placeholder="Enter Note Title Here..."
                        required>
                </div>


                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="pass" placeholder="Enter password" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password" name="cpass"
                        placeholder="Enter confirm password" required>
                </div>


                <div class="mb-3">
                    <input type="submit" name="updateprofilebtn" value="Update Profile" class="btn btn-success">
                </div>
            </form>
        </div>


    </div>


</section>


<?php include "footer.php" ?>