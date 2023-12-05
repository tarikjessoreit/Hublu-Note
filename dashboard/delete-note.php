<?php include "header.php" ?>
<section class="container mt-2">
    <div class="row">
        <div class="col-12">
            <h1>Delete Note</h1>
        </div>

        <div class="col-6">
            <div>Enter DELETE for confirm</div>
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input name="share_username" type="text" class="form-control" placeholder="Type DELETE here"
                        aria-label="Type DELETE here" aria-describedby="sharebtn">
                    <button name="sharebtn" class="btn btn-outline-secondary" type="button" id="sharebtn"> <i class="fa-solid fa-share-from-square"></i> Confirm</button>
                </div>

            </form>
        </div>
    </div>
</section>
<?php include "footer.php" ?>