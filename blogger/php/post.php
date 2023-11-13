<?php
include('../../config/connect.php');

if(!isset($_SESSION['user_id'])) {
    header('location:../../login.php');
}

$check = array(
    " " => "-",
    ":" => "-",
    "," => "-",
    "." => "-",
    "/" => "-",
    "'" => "-",
    '"' => "-",
);

if(isset($_POST['action'])){ //METHOD POST DIGUNAKAN UNTUK TAMBAH DATA DAN UPDATE DATA
    $title = $_POST['title'];
    $slug = strtolower(strtr($title, $check));
    $user_id = $_SESSION['user_id'];
    $body = $_POST['body'];
    $date = date('Y-m-d');
    $image = $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];

    $image_file = strtolower(strtr($title, $check)) . ".jpg";
    if($_POST['action'] == 'add') {
        // jika actionnya add maka akan dilakukan perintah seperti dibawah ini
        $query =  "INSERT INTO post SET title='$title', slug='$slug', user_id='$user_id', body='$body', date='$date', image='$image_file'" ;
        $jalankan_query = mysqli_query($connect, $query);
        copy($temp, "../../assets/img/post/" . $image_file);

        header('location: ../post.php');
    } elseif($_POST['action'] == 'edit') {
        // jika actionnya update maka akan dilakukan perintah seperti dibawah ini
         if(!empty($image)) {
        $query = mysqli_query($connect, "UPDATE post SET title='$title', slug='$slug', user_id='$user_id', body='$body',
                                                         date='$date', image='$image_file'
                                                        WHERE id='$_POST[id]'");
        copy($temp, "../../assets/img/post/" . $image_file);
        header('location: ../index.php');
       } else {
        $query = mysqli_query($connect, "UPDATE post SET title='$title', slug='$slug', user_id='$user_id', body='$body',
                                                         date='$date'
                                                          WHERE id='$_POST[id]'");
         header('location: ../index.php');
       }                   
    } 
} elseif(isset($_GET['action'])){ // METHOD GET DIGUNAKAN UNTUK HAPUS DATA
    $id = $_GET['id'];
    $query = mysqli_query($connect, "DELETE FROM post WHERE id = '$id'");

    header('location: ../post.php');
} else {
        header('../post.php');
    }