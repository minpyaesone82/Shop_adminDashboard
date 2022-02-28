
<?php 
    function conn(){
        return mysqli_connect("localhost","root","","shop_dashboard");
    }
    
    $url = "http://{$_SERVER["HTTP_HOST"]}/Dashboard-Project";

    $role = ["admin","user","editor"];