<?php include "header.php" ?>
<?php
if(isset($_GET['nid'])){
    $nid = $_GET['nid'];
}else{
    header('location:../');
}

// update
if (isset($_POST['updatenotebtn'])) {
    $note_title = $_POST["notetitle"];
    $note_description = $_POST["notedesc"];
    $note_status = $_POST["notestatus"];

    $sql = "UPDATE $notes SET note_title='$note_title', note_description='$note_description', note_status='$note_status' WHERE ID = $nid;";

    if ($conn->query($sql) == true) {
        $succ = 'Note Updated! <a href="index.php">Go to All Notes</a>';
    } else {
        $err = "Faild to update note.Please try again." . $conn->error;
    }
}



// get existing data
$sql = "SELECT * FROM $notes WHERE ID = $nid";
$result = $conn->query($sql);
$noteData = $result->fetch_assoc();
// echo $noteData['note_title'];
?>

<section class="container mt-2">
    <div class="row">
        <div class="col-12">
            <h1>Edit Note</h1>

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
                    <label for="notetitle" class="form-label">Note Title <b class="text-danger">*</b> </label>
                    <input name="notetitle" type="text" value="<?php echo $noteData['note_title']?>" class="form-control" id="notetitle"
                        placeholder="Enter Note Title Here..." required>
                </div>

                <div class="mb-3">
                    <label for="noteDescription" class="form-label">Note Description</label>
                    <textarea name="notedesc" class="form-control" id="noteDescription" rows="3"
                        placeholder="Enter Note Description here..."><?php echo $noteData['note_description']?></textarea>
                </div>

                <div class="mb-4">
                    <label for="Notestatus" class="form-label">Note Status <b class="text-danger">*</b></label>
                    <select name="notestatus" class="form-select" aria-label="this input for note status" required>
                        <option selected>Please select</option>
                        <option value="publish" <?php echo ($noteData['note_status']=='publish') ? 'selected':''?>>Publish</option>
                        <option value="draft" <?php echo ($noteData['note_status']=='draft') ? 'selected':''?>>Draft</option>
                    </select>
                </div>

                <div class="mb-3">
                    <input type="submit" name="updatenotebtn" value="Update Note" class="btn btn-success">
                </div>
            </form>
        </div>


    </div>


</section>


<?php include "footer.php" ?>