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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>
                                <a href="edit-note.php" class="btn btn-sm btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="delete-note.php" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011-07-25</td>
                            <td>
                                <a href="edit-note.php" class="btn btn-sm btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="delete-note.php" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        
                    </tbody>
                    <tfoot>
                        <tr>
                        <th>ID</th>
                            <th>Note Title</th>
                            <th>Description</th>
                            <th>Added Date</th>
                            <th>Added By</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </section>

    <?php include "footer.php";?>