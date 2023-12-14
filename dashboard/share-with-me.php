<?php include "header.php";?>

    <section class="container allnotes mt-2">
        <div class="row">
            <h1>Share With Me</h1>
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
                    $uemail = getUserData('user_email', $uid);
                    $sql = "SELECT * FROM $notes WHERE note_share_with_user = '$uemail' ";
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
                                <?php echo $row['note_createby_userID'] ?>
                            </td>
                            <td>
                                <?php echo $row['note_status'] ?>
                            </td>
                            <td>
                                <a href="edit-note.php?nid=<?php echo $row['ID'] ?>" class="btn btn-sm btn-success"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                
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

    <?php include "footer.php";?>