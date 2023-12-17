<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Hublu Note</title>
    <!-- list css -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary text-white"  data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">HubluNote</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Notes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="add-note.php">Add Note</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="share-with-me.php">Share With Me</a>
                    </li>

                </ul>

                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../assets/images/user-circle-icon.png" alt="" width="30"> 
                        <?php echo (!empty($_SESSION['username'])) ? $_SESSION['username'] : 'user'?>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
