<!--        sidebar start-->

<div class="col-12 col-lg-2 col-xl-2 vh-100 sidebar">
    <div class="d-flex justify-content-between align-items-center py-2 mt-2">
        <div class="d-flex  align-items-center">
            <span class=" rounded p-2 d-flex justify-content-center align-items-center mr-2">
                <i class="feather-sunrise" style="color: red; font-size:20px;"></i>
            </span>
            <span class="font-weight-bolder h4 mb-0" style="color: var(--color-dark);"> SHOP</span>
        </div>
        <button class="hide-sidebar-btn btn btn-light d-block d-lg-none">
            <i class="feather-x text-primary" style="font-size: 1em;"></i>
        </button>

    </div>

    <div class="nav-menu mt-3">
        <ul>

            <li class="menu-item">
                <a href="dashboard.php" class="menu-item-link">
                    <span style="color:var(--color-dark);">
                        <i class="feather-home text-danger"></i>  Dashboard Home
                    </span>
                </a>
            </li>

            <li class="menu-spacer">

            </li>
        
        
            <li class="menu-title">
                <span> 
                    MANAGE POST
                    </span>
            </li>
            <li class="menu-item">
                <a href="<?php echo $url;  ?>/postList.php" class="menu-item-link">
                    <span>
                        <i class="feather-align-center"></i> Post List
                    </span>
                    <span class=" shadow-sm badge badge-pill"><?php echo countTotal('post') ?></span>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?php echo $url;  ?>/post-add.php" class="menu-item-link">
                    <span>
                        <i class="feather-plus-circle"></i>      Post Add 
                    </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?php echo $url;  ?>/index.php" class="menu-item-link">
                    <span>
                        <i class="feather-arrow-right"></i>   Go To News
                    </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?php echo $url;  ?>/ads.php" class="menu-item-link">
                    <span>
                        <i class="feather-activity"></i>   Ads List
                    </span>
                </a>
            </li>
            <li class="menu-spacer">
            </li>
        <?php if($_SESSION['users']['role'] <= 1){ ?>
            <li class="menu-title">
                <span> 
                    SETTING
                    </span>
            </li>
            
            <li class="menu-item">
                <a href="<?php echo $url;  ?>/category-create.php" class="menu-item-link">
                    <span>
                        <i class="feather-plus"></i>      Category Manger 
                    </span>
                    
                </a>
            </li>
        
            <li class="menu-item">
                <a href="<?php echo $url;  ?>/user-manger.php" class="menu-item-link">
                    <span>
                        <i class="feather-users"></i>      User Manger 
                    </span>
                    
                </a>
            </li>
            
            <li class="menu-spacer">

            </li>
            
        <?php } ?>
    </div>
    <div class="my-4 d-flex justify-content-center align-items-center btn-2a" style="background:var(--color-info-dark);border-radius:6px;">
        <a href="logout.php" class="btn btn  ">
            <i class="feather-unlock text-light"></i> <span class="text-light" >Log out</span>
        </a>
    </div>
    
</div>
            <!--        sidebar end-->
<div class="col-12 col-lg-10 col-xl-10 vh-100  content">
    <div class="row header mb-3"> 
        <div class="col-12">
            <div class=" shadow rounded mb-3 p-2 bg-transparent d-flex justify-content-between align-items-center">
                <button class="show-sidebar-btn btn btn-primary d-block d-lg-none">
                    <i class="feather-menu text-light" style="  font-size: 1em;"></i>
                </button>
                <span style="color: var(--color-dark);font-size: 1.5em;font-weight: bolder;" class="d-none d-lg-block ml-2">Dashboard</span>
                <div style="display:flex;align-items: center;">
                    <div class="radio-btn">
                        <div class="radio-inner"></div>
                        </div>
                    <div class="ml-2">
                        <button class="btn btn-sm btn-light ">
                            <img src="<?php echo $url ;?>/assets/img/default.png" class="user-img shadow-sm" alt=""><?php echo $_SESSION['users']['name'] ?>
                        </button>
                    </div>
                </div>
            </div>
        </div>