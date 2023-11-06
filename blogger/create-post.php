<?php
 $title = 'create-post' ; 
include('components/header.php'); 

?>
<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h4 class="text-primary fw-bold">Create New Post</h4>
            <a href="post.php" class="btn btn-light">Go Back</a>
        </div>

        <form action="#" method="post">
            <div class="mb-3">
                <label for="title">Title Post</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Title Post">
            </div>
            <div class="mb-3">
                <label for="body">Body</label>
                <textarea name="body" id="body" cols="30" rows="10" class="form-control" placeholder="Body"></textarea>
            </div>
           <div class="mb-3">
            <label for="image">Image</label>
<input type="file" name="image" id="image" class="form-control">
           </div>
           <button type="submit" class="btn btn-primary px-4">Submit</button>
        </form>        
</div>
</section>

<?php include('components/footer.php'); ?>