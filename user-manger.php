<?php  require_once "core/auth.php" ?>
<?php  require_once "core/functions.php" ?>
<?php include "template/header.php" ?>
<style>
    th{
        color:var(--color-dark);
    }
    
</style>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-start align-items-baseline">
                    <i class="feather-users mr-4"></i>
                    <h5 class="font-weight-bold"> User Manger
                    </h5>
                    
                </div>
                <hr>
                <table id="list" class="table  table-striped table-hover table-bordered table-responsive-md table-responsive-lg"  style="width:100%">
                    <thead>
                        <tr class="text-center">
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Created Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(users() as $user){ 
                            $Time = date('J M Y',strtotime($user['created_at']));
                            ?>
                            <tr class="text-center">
                                <td><?php echo $user['id'] ?></td>    
                                <td><?php echo $user['name'] ?></td>
                                <td><?php echo $user['email'] ?></td>
                                <td><?php echo $role[$user['role']]; ?></td>
                                <td><?php echo $Time ; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>                                     
                </table>
            </div>
        </div>
    </div>

<?php include "template/footer.php" ?>


