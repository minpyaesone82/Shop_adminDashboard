<?php require "core/base.php"; ?>

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
</head>

<body>
    <section class="main container-fluid">
        <div class="row">
            <?php include_once "template/sidebar.php"; ?>