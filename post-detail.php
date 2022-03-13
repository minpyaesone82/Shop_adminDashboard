<?php  require_once "core/auth.php" ?>
<?php  require_once "core/functions.php" ?>
<?php include "template/header.php" ?>
<?php 
    $id = $_GET['id'];
    $current = post($id);
?>
    <div class="col-12 col-md-8 col-lg-6">   
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <i class="feather-alert-circle"></i>
                    <h5 class="font-weight-bold"> Post Detail
                    </h5>
                    <a href="<?php echo $url; ?>/postList.php" class="btn btn-outline-info">
                        <i class="feather-align-center "></i>
                    </a>
                </div>
                <hr>
                    <div class="">
                        <h4>
                            <?php echo $current['title'];?>
                        </h4>
                        
                        <div class="d-flex align-items-center justify-content-start mb-3">
                            <div style="font-size:25px;"> <i class="feather-user"></i></div>
                            <div style="font-size: 10px;" class="ml-1">
                                <span><?php echo user( $current['user_id'])['name'];?></span> 

                            <i class="feather-layers text-primary ml-1"></i>
                                <span><?php echo category( $current['category_id'])['title'];?></span>
                        
                            <br>
                            <i class="feather-calendar text-success"></i>
                                <span><?php echo date("j M Y", strtotime($current['created_at'])); ?></span>
                            </div>
                        </div>
                        <div class="">
                           <span> <?php echo html_entity_decode($current['description'])   ;?></span>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-4 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-start">
                    <i class="feather-users mr-3" style="font-size: 20px;"></i>
                    <h5 class="font-weight-bold">Post Viewer</h5>
                </div>
                <hr>
                <table class="table table-bordered table-hover table-responsive-md table-responsive-lg">
                    <thead>
                        <tr class="text-center">
                            <th>Viewer</th>
                            <th>Device</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php foreach(viewerCountByPost($id) as $v){ ?>
                            <tr class="text-capitalize">
                                <td>
                                    <?php if($v['user_id'] == 0){
                                        echo "Guest";
                                }else{
                                    echo user($v['user_id'])['name'] ;
                                } ?>
                                </td>
                                <td><?php echo $v['device'] ;?></td>
                                <td class="text-nowrap"><?php echo date("J M Y",strtotime($v['created_at'])) ;?></td>
                            </tr>
                       <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

<?php include "template/footer.php" ?>


