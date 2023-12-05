<?php include "header.php" ?>
<section class="container mt-2">
    <div class="row">
        <div class="col-12">
            <h1>Share Note</h1>
        </div>

        <div class="col-6">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input name="share_username" type="text" class="form-control" placeholder="Recipient's username"
                        aria-label="Recipient's username" aria-describedby="sharebtn">
                    <button name="sharebtn" class="btn btn-outline-secondary" type="button" id="sharebtn"> <i class="fa-solid fa-share-from-square"></i> Share</button>
                </div>

            </form>
        </div>
    </div>
</section>
<?php include "footer.php" ?>