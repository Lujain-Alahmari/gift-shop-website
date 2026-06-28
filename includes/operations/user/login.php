<?php
$error = "";
if(isset($_POST['login'])){
    include_once "includes/database.php";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = $connect->prepare("select * from users where email = ? and password = ?");
    $sql->execute(array($email,$password));
    if($sql->rowCount() > 0 ){
        session_start();
        $user = $sql->fetch();
        $_SESSION['id'] = $user['id']; 
        $_SESSION['name'] = $user['name'];
        if($user['is_admin'] == 1){
            header("location:adminIndex.php");
        }else{
            header("location:index.php");
        }   
    }else{
        $error = "خطأ في البريد الإلكتروني أو كلمة السر";
    }
}
?>