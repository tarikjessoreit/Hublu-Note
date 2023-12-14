<?php include "header.php" ?>
<?php 
    if(isset($_GET['nid'])){
        $nid = $_GET['nid'];
    }else{
        header('location:../');
    }


    if(isset($_POST['delbtn'])){
        $confText = $_POST['del_conf_text'];
        if($confText === 'DELETE'){
            $delsql = "DELETE FROM $notes WHERE ID =$nid"; 
            if($conn->query($delsql)== true){
                header('location:index.php');
            }
        }else{
            $err = "Please Type DELETE in the input box and submit again!";
        }
    }
?>

<section class="container mt-2">
    <div class="row">
        <div class="col-12">
            <h1>Delete Note</h1>
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
            <div>Enter DELETE for confirm</div>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input name="del_conf_text" type="text" class="form-control" placeholder="Type DELETE here"
                        aria-label="Type DELETE here" aria-describedby="delbtn">
                    <button name="delbtn" class="btn btn-outline-secondary" type="submit" id="delbtn"> <i class="fa-solid fa-share-from-square"></i> Confirm</button>
                </div>

            </form>
        </div>
    </div>
</section>
<?php include "footer.php" ?>