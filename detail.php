<?php require_once "front-panel-template/frontHeader.php" ?>
<?php require_once "core/functions.php" ?>
<?php 
     if(isset($_GET['id'])){
        $id = $_GET['id'];
        $current = post($id);
    }else{
        redirect('index.php');
    }
    if(!$current){
        redirect('index.php');
    }
    $currentCat = $current['category_id'];
    if($_SESSION['users']['id']){
        $userId = $_SESSION['users']['id'];
    }else{
        $userId = 0;
    }

    ViewerRecord($userId,$id,$_SERVER['HTTP_USER_AGENT'])
?>
<div class="container">
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" id="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><span>Post detail</span></li>
    </ol>
</nav>
<hr>
    <div class="d-flex ml-2 align-items-center"><span style="font-family:'Courier New', Courier, monospace">News For:</span><h4 class="font-weight-bolder ml-2"> MYANMAR</h4></div>
    <div class="row">
        <div class="col-12 col-lg-8">     
            <div class="card my-2">
                <div class="card-body">
                    <h4>
                        <?php echo $current['title'];?>
                    </h4>
                    
                    <div class="d-flex align-items-center justify-content-start mb-3">
                        <div style="font-size:25px;"> <i class="feather-user"></i></div>
                        <div style="font-size: 10px;" class="ml-1">
                        <span><?php echo user( $current['user_id'])['name'];?> </span>

                        <i class="feather-layers text-primary ml-1"></i>
                            <span><?php echo category( $current['category_id'])['title'];?></span>
                    
                        <br>
                        <i class="feather-calendar text-success"></i>
                            <span><?php echo date("j M Y", strtotime($current['created_at'])); ?></span>
                        </div>
                    </div>
                    <div class="">
                        <?php echo html_entity_decode($current['description'])   ;?>
                    </div>
                </div>
            </div>
            <h5 class="my-3 ml-3">Related Post</h5>
            
            
            <div class="row">
                
                <?php foreach(postByCat($currentCat,2,$id) as $c){ 
                    ?>
                    <div class="col-12 col-md-6">
                    <div class="card mb-3 shadow-sm" style="background:var(--color-white)">
                    <div class="card-body">
                        <a href="<?php echo $url ;?>/detail.php?id=<?php echo $c['id']; ?>" class=""><?php echo $c['title'] ;?></a>
                        <div class="d-flex align-items-center justify-content-start my-3">
                            <div style="font-size:25px;"> <i class="feather-user"></i></div>
                            <div style="font-size: 10px;" class="ml-1">
                            <span><?php echo user( $c['user_id'])['name'];?></span> 

                            <i class="feather-layers text-primary ml-1"></i>
                            <span><?php echo category( $c['category_id'])['title'];?></span>
                        
                            <br>
                            <i class="feather-calendar text-success"></i>
                            <span><?php echo date("j M Y", strtotime($c['created_at'])); ?></span>
                            </div>
                        </div>
                        <p>
                            <?php echo short(strip_tags(html_entity_decode($c['description']) ),280);?>
                        </p>
                    </div>
                    </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        
        <div class="col-12  col-lg-4 ">
            <div class="d-none d-lg-block">
                <h4 class="mb-3 font-weight-350">Search By Date</h4>
                <div class="card shadow-sm"  style="background:var(--color-white)">
                    <div class="card-body">
                        <form action="searchByDate.php" method="post">
                            <div class="form-group">
                                <label for="">Start Date</label>
                                <input type="date" required class="form-control" name="start">
                            </div>
                            <div class="form-group">
                                <label for="">End Date</label>
                                <input type="date" required class="form-control" name="end">
                            </div>
                            <button class="btn btn-primary">
                                <i class="feather-calendar text-light" ></i> Search
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "front-panel-template/frontFooter.php" ?>