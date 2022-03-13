<?php require_once "front-panel-template/frontHeader.php" ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" id="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                </ol>
            </nav>
            <hr>
            </div>
           
        </div>
    </div>
    
    
    <div class="d-flex ml-2 align-items-center mb-2"><span style="font-family:'Courier New', Courier, monospace">News For:</span><h4 class="font-weight-bolder ml-2"> MYANMAR</h4></div>
    <div class="row">
        <div class="col-12 col-lg-8">
    
            <?php foreach(postByCat($_GET['category_id']) as $c){ 
                ?>
                <div class=" mb-3 shadow-sm" style="background:var(--color-white)">
                    <div class="card-body">
                        <a href="<?php echo $url ;?>/detail.php?id=<?php echo $c['id']; ?>" class=""><?php echo $c['title'] ;?></a>
                        <div class="d-flex align-items-center justify-content-start my-3">
                            <div style="font-size:25px;"> <i class="feather-user"></i></div>
                            <div style="font-size: 10px;" class="ml-1">
                                <span><?php echo user( $c['user_id'])['name'];?> </span>

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
            <?php } ?>
                    
        </div>
        <div class="col-12  col-lg-4 ">
            <div class="">
                <h4 class="mb-3 font-weight-350">Search By Date</h4>
                <div class=" shadow-sm"  style="background:var(--color-white)">
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