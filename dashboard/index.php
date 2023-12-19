<?php include "header.php"; ?>

<section class="container datacards mt-2">
    <div class="row">
        <div class="col-12 col-md-4">
            <!--card-->
            <div class="card" >
                <div class="card-body text-center bg-primary text-white">
                    <h5 class="card-title">My Notes</h5>
                    <div class="h1"><?php echo countTotalMyNotes($USERID);?></div>
                </div>
            </div><!--end card-->
        </div>


        <div class="col-12 col-md-4">
            <!--card-->
            <div class="card" >
                <div class="card-body text-center bg-danger text-white">
                    <h5 class="card-title">Share with Me</h5>
                    <div class="h1"><?php echo countTotalShareNotes($USERID);?></div>
                </div>
            </div><!--end card-->
        </div>


        <div class="col-12 col-md-4">
            <!--card-->
            <div class="card" >
                <div class="card-body text-center bg-warning text-white">
                    <h5 class="card-title">Draft</h5>
                    <div class="h1"><?php echo countTotalMyDraftNotes($USERID);?></div>
                </div>
            </div><!--end card-->
        </div>

    </div>

</section>



<section class="container allnotes mt-2">
    <div class="row">
        <h1>All Notes</h1>

        <div class="card border-0 mt-3">
            <table id="allNotesData" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Note Title</th>
                        <th>Description</th>
                        <th>Added Date</th>
                        <th>Added By</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $uid = $_SESSION['userID'];
                    $sql = "SELECT * FROM $notes WHERE note_createby_userID =  $uid";
                    $res = $conn->query($sql);
                    while ($row = $res->fetch_assoc()) {
                        ?>

                        <tr>
                            <td>
                                <?php echo $row['ID'] ?>
                            </td>
                            <td>
                                <?php echo $row['note_title'] ?>
                            </td>
                            <td>
                                <?php echo substr($row['note_description'],0,20) ?>.....
                            </td>
                            <td>
                                <?php echo $row['note_create_datetime'] ?>
                            </td>
                            <td>
                                <input type="text" value="<?php echo getUserData('user_email',$row['note_createby_userID']) ?>">
                            </td>
                            <td>
                                <?php echo $row['note_status'] ?>
                            </td>
                            <td>
                                <a href="edit-note.php?nid=<?php echo $row['ID'] ?>" class="btn btn-sm btn-success"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <a href="delete-note.php?nid=<?php echo $row['ID']?>" class="btn btn-sm btn-danger"><i
                                        class="fa-solid fa-trash"></i></a>
                                <a href="share-note.php?nid=<?php echo $row['ID']?>" class="btn btn-sm btn-primary"><i
                                        class="fa-solid fa-share-from-square"></i></a>
                            </td>
                        </tr>

                    <?php } ?>


                </tbody>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Note Title</th>
                        <th>Description</th>
                        <th>Added Date</th>
                        <th>Added By</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>

    </div>
</section>

<?php include "footer.php"; ?>