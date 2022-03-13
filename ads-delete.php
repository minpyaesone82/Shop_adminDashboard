<?php require_once 'core/base.php' ;?>
<?php
 $id = $_GET['id'];
 $sql = "DELETE FROM ads WHERE id=$id";
if(mysqli_query(conn(),$sql)){
    header("location:ads.php");
}
?>