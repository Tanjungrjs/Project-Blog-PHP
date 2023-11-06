<?php 
$title = 'Post' ;
include('components/header.php'); 
?>

<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h4 class="text-primary fw-bold">Post</h4>
            <a href="create-post.php" class="btn btn-primary">Create New Post</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Post Title</th>
                        <th>Post Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>  
                    <tr style="vertical-align: middle;">
                        <td>1</td>
                        <td>Turnamen Futsal PT. Sinar Mutiara Cakrabuana 2023</td>
                        <td>Sport</td>
                        <td>
                            <a href="edit-post.php" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
</td>
                    </tr>
                    <tr style="vertical-align: middle;">
                        <td>2</td>
                        <td>Mini Exhibition</td>
                        <td>Exhibition</td>
                        <td>
                            <a href="edit-post.php" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php include('components/footer.php'); ?>
