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
                <div class="d-flex justify-content-between align-items-center">
                    <i class="feather-align-center"></i>
                    <h5 class="font-weight-bold"> Post List
                    </h5>
                    <a href="<?php echo $url; ?>/post-add.php" class="btn btn-outline-info">
                        <i class="feather-plus-circle "></i>
                    </a>
                </div>
                <hr>
                <table id="list" class="table  table-striped table-hover table-bordered table-responsive-md table-responsive-lg"  style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>category</th>
                            <th>Viewer</th>
                            <?php if($_SESSION['users']['role']==0){ ?>
                                <th>user</th>
                            <?php } ?>
                            <th>Control</th>
                            <th>Created_at</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach(posts() as $c){ 
                            $time = date("J M Y",strtotime($c['created_at']));
                            ?>
                            <tr>
                                <td class="text-nowrap"><?php echo $c['id'] ?></td>
                                <td class="text-nowrap"><?php echo short($c['title'],10) ?></td>
                                <td class="text-nowrap"><?php echo short(strip_tags(html_entity_decode($c['description'])),20) ?></td>
                                <td class="text-nowrap"><?php echo category($c['category_id'])['title'] ?></td>
                                <td class=""><?php echo count(viewerCountByPost($c['id'])); ?></td>
                                <?php if($_SESSION['users']['role']==0){ ?>
                                    <td><?php echo user($c['user_id'])['name'] ?></td>
                                <?php } ?>
                                <td class="text-nowrap">
                                    <a class="btn btn-sm btn-outline-danger" href="post-del.php?id=<?php echo $c['id'] ?>"><i class="feather-trash-2"></i></a>
                                    <a class="btn btn-sm btn-outline-warning" href="post-update.php?id=<?php echo $c['id'] ?>"><i class="feather-edit"></i></a>
                                    <a class="btn btn-sm btn-outline-success" href="post-detail.php?id=<?php echo $c['id'] ?>"><i class="feather-alert-circle"></i></a>
                                </td>
                                <td><?php echo $time ; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>                                     
                </table>
            </div>
        </div>
    </div>

<?php include "template/footer.php" ?>
<script src="<?php echo $url; ?>/assets/vendor/data_table/jquery.dataTables.min.js"></script>
<script src="<?php echo $url; ?>/assets/vendor/data_table/dataTables.bootstrap4.min.js"></script>
<script>
    $('#list').DataTable({
        order:[[0,"desc"]]
    });
</script>

