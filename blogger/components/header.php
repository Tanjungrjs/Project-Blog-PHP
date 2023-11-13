<?php
include('../config/connect.php');

if(!isset($_SESSION['user_id'])) {
    header('location:../login.php');
}

$user_logged = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM user WHERE id = '$_SESSION[user_id]'"))
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Dev</title>
    <link rel="stylesheet" href="../assets/vendors/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-white py-3">
        <div class="container">
            <!-- <a href="#"> <img src="assets/img/SMCLOGO.png" style="width: 36px; height: 30px;"  alt=""></a> -->
            <a href="." class="navbar-brand text-uppercase">Blog.Dev</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav gap-3 me-auto">
                    <li class="nav-item"><a href="." class="nav-link <?= ($title == 'Dashboard') ? 'active text-primary' : '' ?>">Dashboard</a></li>
                    <li class="nav-item"><a href="post.php" class="nav-link <?= ($title == 'Post') ? 'active text-primary' : '' ?>">Post</a></li>
                    <li class="nav-item"><a href="create-post.php" class="nav-link <?= ($title == 'create-post') ? 'active text-primary' : '' ?>">Create Post</a></li>
                    <li class="nav-item"><a href="profile.php" class="nav-link <?= ($title == 'profile') ? 'active text-primary' : '' ?>">Profile</a></li>
                </ul>
                <ul class="navbar-nav gap-3 ">
                    <li class="nav-item">
                        <p class="nav-link active">Hi, <?php echo $user_logged['name'] ?> </p>
                    </li>
                    <li class="nav-item"><a href="php/logout.php" class="nav-link">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
