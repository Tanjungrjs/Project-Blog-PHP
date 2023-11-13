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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $photo = $_FILES['photo']['name'];
    $temp = $_FILES['photo']['tmp_name'];

    $photo_file = strtolower(strtr($email, $check)) . ".jpg";

//JIKA GAMBARNYA ADA MAKA DILAKUKAN  PERINTAH SEPERTI DIBAWAH
if (!empty($photo)) {
    if ($password != "") {
        $query = mysqli_query($connect, "UPDATE user SET name='$name', email='$email', 
                                                        password='$password', photo='$photo_file' 
                                                        WHERE id='$_SESSION[user_id]'");
    } else {
        $query = mysqli_query($connect, "UPDATE user SET name='$name', email='$email', 
                                                       photo='$photo_file' 
                                                     WHERE id='$_SESSION[user_id]'");
    }

    copy($temp, "../../assets/img/user/" . $photo_file);    
} else { //JIKA GAMBARNYA TIDAK ADA, MAKA DILAKUKAN PERINTAH SEPERTI DIBAWAH
    if ($password != "") {
        $query = mysqli_query($connect, "UPDATE user SET name='$name', email='$email', 
                                                        password='$password' 
                                                        WHERE id='$_SESSION[user_id]'");
    } else {
        $query = mysqli_query($connect, "UPDATE user SET name='$name', email='$email' 
                                                        WHERE id='$_SESSION[user_id]'");
    }
    
}

header('location: ../profile.php');
} else {
    header('../profile.php');
}