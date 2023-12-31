<?php include "header.php" ?>
<?php
if (isset($_POST['adnotebtn'])) {
    $note_title = $_POST["notetitle"];
    $note_description = $_POST["notedesc"];
    $note_createby_userID = $_SESSION['userID'];
    $note_share_with_user = '';
    $note_create_datetime = date("Y-m-d H:i:s");
    $note_status = $_POST["notestatus"];

    $sql = "INSERT INTO $notes(note_title, note_description, note_createby_userID, note_share_with_user, note_create_datetime, note_status) VALUES ('$note_title', '$note_description', '$note_createby_userID', '$note_share_with_user', '$note_create_datetime', '$note_status')";

    if ($conn->query($sql) == true) {
        $succ = 'New Note Added! <a href="index.php">Go to All Notes</a>';
    } else {
        $err = "Faild to add note.Please try again." . $conn->error;
    }
}

?>

<section class="container mt-2">
    <div class="row">
        <div class="col-12">
            <h1>Add a Note</h1>

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
                    <input name="notetitle" type="text" class="form-control" id="notetitle"
                        placeholder="Enter Note Title Here..." required>
                </div>

                <div class="mb-3">
                    <label for="noteDescription" class="form-label">Note Description</label>
                    <textarea name="notedesc" class="form-control" id="noteDescription" rows="3"
                        placeholder="Enter Note Description here..."></textarea>
                </div>

                <div class="mb-4">
                    <label for="Notestatus" class="form-label">Note Status <b class="text-danger">*</b></label>
                    <select name="notestatus" class="form-select" aria-label="this input for note status" required>
                        <option selected>Please select</option>
                        <option value="publish">Publish</option>
                        <option value="draft">Draft</option>
                    </select>
                </div>

                <div class="mb-3">
                    <input type="submit" name="adnotebtn" value="Add Note" class="btn btn-success">
                </div>
            </form>
        </div>


    </div>


</section>


<?php include "footer.php" ?>