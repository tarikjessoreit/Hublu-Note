<?php include "header.php" ?>
<?php 
    if(isset($_GET['nid'])){
        $nid = $_GET['nid'];
    }else{
        header('location:../');
    }


    if(isset($_POST['sharebtn'])){
        $share_un = $_POST['share_username'];
        $delsql = "UPDATE $notes SET note_share_with_user = '$share_un'  WHERE ID =$nid"; 
        if($conn->query($delsql)== true){
            $succ = "Note Already Shared!";
        }else{
            $err = "Please Try Again!".$conn->error;
        }
    }
?>
<section class="container mt-2">
    <div class="row">
        <div class="col-12">
            <h1>Share Note</h1>
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

        <div class="col-6">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input name="share_username" type="text" class="form-control" placeholder="Recipient's username"
                        aria-label="Recipient's username" aria-describedby="sharebtn">
                    <button name="sharebtn" class="btn btn-outline-secondary" type="submit" id="sharebtn"> <i class="fa-solid fa-share-from-square"></i> Share</button>
                </div>

            </form>
        </div>
    </div>
</section>
<?php include "footer.php" ?>