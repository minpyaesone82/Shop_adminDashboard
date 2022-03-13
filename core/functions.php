<?php 
    function wrongAlert($data){
        return "<p style='background:#da8f97;padding:6px 0 6px 10px;font-size:10px;font-weight:600;'>$data</p>";
    }

    function redirect($l){
        return header("location:$l");
    }

    function linkTo($l){
        echo "<script>location.href='$l'</script>";
    }

    function countTotal($table,$condition= 1){
        $sql ="SELECT COUNT(id) FROM $table WHERE $condition";
        $total = fetch($sql);
        return $total['COUNT(id)'];
    }
    
    function runQuery($sql){
        $con = conn();
        if(mysqli_query($con,$sql)){
            return true;
        }else{
            die("Query fail :" .mysqli_error($con));
        }
    }


    function textFilter($text){
        $text = trim($text);
        $text= htmlentities($text, ENT_QUOTES);
        $text= stripcslashes($text);
        return $text;
    }

    function short($str,$length='30'){
        return substr($str,0,$length).'...';
    }

    


//Register start
    function register(){
        $errorStatus = 0;
        $name = "";
        $email = "";
        $password = $_POST['password'];
        $cPassword = $_POST['cPassword'];
        if(empty($_POST['name'])){
            return wrongAlert('Name is required');
            $errorStatus = 1;
        }else{
            if(strlen($_POST['name']) < 5 ){
                return wrongAlert('Name is short');
                $errorStatus = 1;   
            }else{
                if(strlen($_POST['name']) > 20 ){
                    return wrongAlert('Name is long');
                    $errorStatus = 1;    
                 }else{
                    if(!preg_match("/^[a-zA-Z' ]*$/",$_POST['name'])){
                        return wrongAlert('Only letter and white space');
                        $errorStatus = 1;
                    }else{
                        $name = textFilter($_POST['name']);
                    }
               }
           }
        }

        if(empty($_POST['email'])){
            return wrongAlert('Email is required');
            $errorStatus =1;
        }else{
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                return wrongAlert('Email format is incorrect');
                $errorStatus =1;
              }else{
                $email = textFilter($_POST['email']);
              }
        }
        
        if($password == $cPassword){
            $sPass = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$sPass')";
            mysqli_query(conn(),$sql);

            header("location:login.php");
        }else{
            return wrongAlert('Password is wrong');
        }
    }
//register end

//login start 
    function login(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM users WHERE email='$email'";
        $query = mysqli_query(conn(),$sql);
        $row = mysqli_fetch_assoc($query);
        if(!$row){
            return wrongAlert("Email or Password do not match");
        }else{
            if(password_verify($password,$row['password'])){
                session_start();
                $_SESSION['users'] = $row;
                redirect("dashboard.php");
            }else{
                return wrongAlert("Email or Password do not match");
            }

        }
    }
//login end

//category start

    function fetch($sql){
        $con = conn();
        $query = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($query);
        return $row;
    }

    function fetchAll($sql){
        $con = conn();
        $query = mysqli_query($con,$sql);
        $rows = [];
        while($row = mysqli_fetch_assoc($query)){
            array_push($rows,$row);
        }
        return $rows;

    }
    function user($id){
        $sql = "SELECT * FROM users WHERE id=$id";
        return fetch($sql);
    }

    function users(){
        $sql ="SELECT * FROM users";
        return fetchAll($sql);
    }
    function category($id){
        $sql = "SELECT * FROM categories WHERE id=$id";
        return fetch($sql);
    }

    function categoryCrete(){
        $title = textFilter(strip_tags( $_POST['title']));
        $user_id = $_SESSION['users']['id'];
        $sql = "INSERT INTO categories (title,user_id) VALUES ('$title','$user_id')";
        mysqli_query(conn(),$sql);
    }
    function categoryUpdate(){
        $title = textFilter(strip_tags( $_POST['title']));
        $id = $_POST['id'];
        $sql = "UPDATE categories SET title='$title' WHERE id=$id";
        if(runQuery($sql)){
            true;
        }
        
    }

    function categories(){
        $sql = "SELECT * FROM categories";
        return fetchAll($sql);
    }
//category end

//post start

    function postAdd(){
        $title = textFilter($_POST['title']);
        $description =textFilter( $_POST['description']);
        $user_id = $_SESSION['users']['id'];
        $category_id = $_POST['category_id'];
        $sql = "INSERT INTO post (title,description,user_id,category_id) VALUES ('$title','$description','$user_id','$category_id')";
        mysqli_query(conn(),$sql);
    }

    function post($id){
        $sql = "SELECT * FROM post WHERE id=$id";
        return fetch($sql);
    }

    function posts($limit=9999){
        if($_SESSION['users']['role'] == 2){
            $current_user_id = $_SESSION['users']['id'];
            $sql ="SELECT * FROM post WHERE user_id='$current_user_id'";
        }else{
            $sql ="SELECT * FROM post LIMIT $limit ";
        }
        return fetchAll($sql);
    }

    function dashboardPosts($limit=99999){
        if($_SESSION["users"]['role'] ==2 ){
            $current_user_id = $_SESSION['users']['id'];
            $sql ="SELECT * FROM post WHERE user_id = '$current_user_id' ORDER BY id DESC LIMIT $limit" ;
        }else{
            $sql ="SELECT * FROM post ORDER BY id DESC LIMIT $limit";
        }
        
        return fetchAll($sql);
       
    }

    function postUpdate(){
        
        $id = $_POST['id'];
        $description = textFilter( $_POST['description']);     
        $title = textFilter($_POST['title']);
        $category_id = $_POST['category_id'];                                                                                                                   
        $sql = "UPDATE post SET title ='$title',description='$description',category_id='$category_id' WHERE id=$id";
        return mysqli_query(conn(),$sql);       
}
//post end


//viewer count//
    function viewerCountByPost($post_id){
        $sql = "SELECT * FROM viewers WHERE post_id=$post_id";
        return fetchAll($sql);
    }

    function ViewerRecord($userId,$postId,$device){
        $sql = "INSERT INTO viewers (user_id,post_id,device) VALUES ('$userId','$postId','$device')";
        return runQuery($sql);
    }
//viewer count//


//front-panel-start

    function postByCat($category_id,$limit='9999',$post_id=0){
        $sql = "SELECT * FROM post WHERE category_id= '$category_id' AND id!=$post_id ORDER BY id DESC LIMIT $limit ";
        return fetchAll($sql);
    }

    function fPost ($orderCol="id",$orderType="DESC"){
        $sql ="SELECT * FROM post ORDER BY $orderCol $orderType";
    
    return fetchAll($sql);
    }

    function fCategory(){
        $sql ="SELECT * FROM categories ORDER BY ordering DESC";
        return fetchAll($sql);
    }

//front-panel-end

//search -start//

function search($searchKey){
    $sql ="SELECT * FROM post WHERE title LIKE '%$searchKey%' OR description LIKE '%$searchKey%' ORDER BY id DESC";
    return fetchAll($sql);
}

function searchByDate($start,$end){
    $sql ="SELECT * FROM post WHERE created_at BETWEEN '$start' and '$end' ORDER BY id DESC";
    return fetchAll($sql);
}

//search -end //

 //ads show//
 function ads(){
    $today = date("Y-m-d");
    $sql = "SELECT * FROM ads WHERE start <='$today' AND end > '$today'  ";
    return fetchAll($sql);
}

function ad(){
    $sql = "SELECT * FROM ads";
    return fetchAll($sql);
}

function adsAdd(){
     
    $owner_name =$_GET['owner_name'];
    $photo =$_GET['photo'];
    $link =$_GET['link'];
    $start =$_GET['start'];
    $end =$_GET['end'];
    $sql = "INSERT INTO ads (owner_name,photo,link,start,end) VALUES ('$owner_name','$photo','$link','$start','$end')";
    return runQuery($sql);
}
//ads show//