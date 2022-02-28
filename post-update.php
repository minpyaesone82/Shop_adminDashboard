<?php require_once "core/auth.php"; ?>
<?php require_once "core/functions.php"; ?>
<?php include "template/header.php" ?>

 <div class="col-12 col-lg-10">
     <div class="card">
         <div class="card-body">
             
                <div class="d-flex align-items-center justify-content-between">
                    <i class="feather-plus-circle  "></i>
                    <h5 class="font-weight-bold">Update Post</h5>
                    <a href="<?php echo $url; ?>/postList.php" class="btn btn-outline-dark"><i class="feather-align-center" ></i></a>
                </div>
                <hr>
                <?php 
                    $id = $_GET['id'];
                    $current = post($id);  
                    if(isset($_POST['post-update'])){
                        postUpdate();
                    }
                ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Select Category</label>
                            <select name="category_id" id="" class="custom-select">
                                <?php foreach(categories() as $c){ ?>
                                    <option value="<?php echo $c['id'] ?>" <?php echo $c['id']==$current['category_id']? 'selected':''; ?>><?php echo  $c['title'] ?></option>
                                <?php } ?>
                            </select>
                    </div>
                    <input type="hidden" value="<?php echo $id ?>" name="id">
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" id="" class="form-control" required value="<?php echo $current['title'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea type="text"  name ="description" required class="form-control" rows="4"> <?php echo $current['description'] ?></textarea>
                    </div>
                    <button class="btn btn-primary" name="post-update">Post Update</button>
                </form>
         </div>
     </div>
 </div>

<?php include "template/footer.php"?>
<script>
    $('#summer').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 200,
    });
</script>