<?php if($_SESSION['users']['role'] <= 1){
    return true;
}else{
    header("location:dashboard.php");
}