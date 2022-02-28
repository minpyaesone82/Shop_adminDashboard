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
                        if(isset($_POST['category-btn'])){
                            categoryCrete();
                        }
                    ?>
                   <form action="" method="post">
                       <div class="form-inline">
                            <input type="text" class="form-control mr-2"required name="title">
                            <button class="btn btn-primary" name="category-btn"> Add Category</button>
                       </div>
                   </form>
                    <br>
                   <table id="list"  class="table  table-striped table-hover table-bordered table-responsive-md table-responsive-sm"  style="width:100%">
                        <thead >
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>User</th>
                                <th>Created Time</th>
                                <th>Control</th>
                            </tr>
                        </thead>    
                        <tbody>
                            <?php 
                                
                                foreach(categories() as  $c) {
                                    $time = date("J M Y",strtotime($c['created-at']));
                        
                            ?>
                                <tr>
                                    <td><?php echo $c['id'] ;?></td>
                                    <td><?php echo short($c['title'] );?></td>
                                    <td><?php echo user($c['user_id'])['name']?></td>
                                    <td><?php echo $time ;?></td>
                                    <td>
                                        <a class="btn btn-sm btn-outline-danger" href="category-del.php?id=<?php echo $c['id'] ?>"><i class="feather-trash-2"></i></a>
                                        <a class="btn btn-sm btn-outline-warning" href="category-update.php?id=<?php echo $c['id'] ?>"><i class="feather-edit"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                   </table>
               </div>
           </div>
       </div>
    </div>


<?php include "template/footer.php" ?>
