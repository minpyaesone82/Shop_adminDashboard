<?php  require_once "core/auth.php" ?>
<?php  require_once "core/functions.php" ?>
<?php include "template/header.php" ?>

    <div class="col-12 vh-100">
       <div class="post-add">
           <div class="card shadow-sm">
               <div class="card-body">
                   <div class="d-flex justify-content-between align-items-center">
                        <h5><i class="feather-plus-circle text-primary"></i> Category Manger</h4>
                        <a href="postList.php" class="btn btn-lg"> <i class="feather-list  text-center"></i></a>
                   </div>
                   <hr>
                   <?php 
                        $id = $_GET['id'];
                        $Current = category($id);
                        if(isset($_POST['update-btn'])){
                            categoryUpdate();
                            
                        }
                    ?>
                   <form action="" method="post">
                       <div class="form-inline">
                           <input type="hidden" name="id" value="<?php echo $id ;?>">
                            <input type="text" value="<?php echo $Current['title'] ?>" class="form-control mr-2"required name="title">
                            <button class="btn btn-primary" name="update-btn"> Update</button>
                       </div> 
                   </form>
               </div>
           </div>
       </div>
    </div>


<?php include "template/footer.php" ?>
