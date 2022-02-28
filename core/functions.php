<?php 
    function wrongAlert($data){
        return "<p style='background:#da8f97;padding:6px 0 6px 10px;font-size:10px;font-weight:600;'>$data</p>";
    }

    function redirect($l){
        return header("location:$l");
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
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cPassword = $_POST['cPassword'];
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
        $title = $_POST['title'];
        $user_id = $_SESSION['users']['id'];
        $sql = "INSERT INTO categories (title,user_id) VALUES ('$title','$user_id')";
        mysqli_query(conn(),$sql);
    }
    function categoryUpdate(){
        $title = $_POST['title'];
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

    function posts(){
        if($_SESSION['users']['role'] == 2){
            $current_id = $_SESSION['users']['id'];
            $sql ="SELECT * FROM post WHERE user_id='$current_id'";
        }else{
            $sql ="SELECT * FROM post";
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

