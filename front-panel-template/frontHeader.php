<?php require "core/base.php"; ?>
<?php require "core/functions.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="<?php echo $url ;?>/assets/css/app.css">
    <link rel="stylesheet" href="<?php echo $url ;?>/assets/flatly">
    <link rel="stylesheet" href="<?php echo $url ;?>/assets/vendor/feather-icons-web/feather.css">
    <link rel="stylesheet" href="<?php echo $url ;?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $url ;?>/assets/vendor/bootstrap/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet"> 
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Noto+Serif+Myanmar:wght@500&family=Padauk:wght@400;700&display=swap');
        .navbar{
            background-color:var(--color-white);
        }
        
        .navbar .navbar-brand,.navbar .nav-item .nav-link{
            color:var(--color-dark);
        }
        .navbar .navbar-brand,.navbar .nav-item .nav-link:hover{
            color:var(--color-dark);
        }
        .navbar .navbar-brand:hover{
            color:var(--color-dark);
        }
        body{
            
            
            font-family: 'Padauk', sans-serif;
        }
        .title-news{
            font-family:'Abril Fatface',cursive;
            color:var(--color-dark);
        }
        .navbar-dark .navbar-toggler {
            background-color: var(--red) !important;
            border-color: rgba(255, 255, 255, 0.1);
            transition:0.8s all;
            font-size: 15px;
        }
        .navbar-dark .navbar-toggler:focus {
            outline:1px solid var(--red)!important;
        }
        .navbar-dark .navbar-toggler:active {
            transform: scale(1.1);
            outline:1px solid var(--red)!important;
        }
        .breadcrumb{
            background:transparent;
            padding-bottom: 0;
        }
        @media screen and (max-width:900px){
            .dropdown{
                margin-bottom:10px;
            }
            .radio-sign{
                display: flex;
                justify-content: start !important;
                margin-top:10px;
            }
        }
        .navbar{
            position: sticky;
            top:0px;
            z-index:100;
            
        }

        
    </style>
    </head>
    <body style="background:var(--color-background);">
    <?php session_start(); ?>

        <div class="container" >
                <h4 class="text-center font-weight-bold my-3 title-news ">MYANMAR NEWS WEBSITE</h4>

                <div class="row">
                <div class="col-12">
                    <nav class="shadow-sm  navbar navbar-expand-lg navbar-dark  rounded mt-1">
                        <div class="container-fluid">
                        <a class="navbar-brand font-weight-bold" href="<?php echo $url ;?>/index.php">Myanmar News</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-lg-between" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="<?php echo $url ;?>/dashboard.php">Dashboard</a>
                            </li>
                            <div class="dropdown">
                                <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Category
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <?php foreach(fCategory() as $c) {?>
                                            <li><a class="dropdown-item" href="post-category.php?category_id=<?php echo $c['id'] ;?>"><?php echo $c['title']; ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            </ul>
                            <form class="d-flex justify-content-end align-items-center" action="search.php" method="post">
                            <input style="background-color:transparent;" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="searchKey" required>
                            <button  class="btn btn-light shadow-sm ml-2 text-dark" type="submit">Search</button>
                            </form>
                            <div class="d-flex align-items-center justify-content-between radio-sign">
                                <div class="radio-btn mr-2">
                                    <div class="radio-inner"></div>
                                </div>
                                
                                
                                    <?php if(isset($_SESSION['users']['name'])) { ?>
                                        <p class="mb-0" style="color:var(--color-dark);"> <b><?php echo $_SESSION['users']['name'] ;?></b></p>
                                    <?php }else { ?>
                                        <a href="<?php echo $url ?>/login.php"  class="btn btn-sm btn-light shadow-sm">Register </a>
                                    <?php }?>
                        
                            </div>
                        </div>
                        </div>
                    </nav>
                    
                    
                </div>
                </div>
        </div>

