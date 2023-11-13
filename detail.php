<?php
 include ('components/header.php');
 $data = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM post INNER JOIN user ON post.user_id=user.id WHERE post.slug='$_GET[slug]'"));
 $data_img = mysqli_fetch_array(mysqli_query($connect, "SELECT image FROM post WHERE post.slug='$_GET[slug]'"));
   ?>

<header class="detail hero-post py-5">
    <div class="container">
        <span class="bg-light rounded p-2 fw-bold text-primary category mx-auto d-block" style="width: max-content;">
        The Newest
    </span>
        <h1 class="header-title text-primary text-center"><?= $data['title'] ?></h1>

        <div class="d-flex align-item-center justify-content-center gap-3">
                            <img src="assets/img/user/<?= $data['photo'] ?>" class="avatar rounded-circle" alt="">
                            <div class="profile">
                            <p class="m-0 text-primary"><?= $data['name'] ?></p>
                            <p class="m-0 text-secondary" style="font-size: 14px;"><?= $data['email'] ?></p>
                            </div>
                        </div> 

                        <div class="d-flex justify-content-center">
                            <img src="assets/img/post/<?= $data_img['image'] ?>" class="rounded-3 mt-5" alt="">
                        </div>
    </div>
</header>

<section class="detail-content mx-auto py-5">
    <div class="container">
       <?= $data['body']?>
    </div>

</section>


<?php include ('components/footer.php') ?>
