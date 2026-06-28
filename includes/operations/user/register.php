<?php
    $error = "";
    $errorsArray = array("name"=>"","email"=>"","mobile"=>"","password"=>"","cpassword"=>"");
    $fullname = $email = $mobile = $password = $confirmPassword = "";
    if(isset($_POST['new_user'])){
        include_once "includes/database.php";
        $fullname = trim($_POST['name']);
        $email = trim($_POST['email']);
        $mobile = trim($_POST['mobile']);
        $password = $_POST['password'];
        $confirmPassword = $_POST['cpassword'];
        if(empty($fullname)){
           $errorsArray["name"] = "الاسم مطلوب";
        }
        else if(!preg_match("/^([a-zA-Z' ]+)$/",$fullname)){
           $errorsArray["name"] = "لابد أن يحتوي الاسم على حروف  فقط";
        }
        if(empty($email)  ){
           $errorsArray["email"] = "البريد الإلكتروني مطلوب";
        }
        else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
           $errorsArray["email"] = "يجب إدخال البريد بشكل صحيح";
        }
        if(empty($mobile)){
           $errorsArray['mobile'] = "الهاتف مطلوب";      
        }
        else if (!preg_match ("/^[0-9]*$/", $mobile)){  
           $errorsArray['mobile'] = "لابد ان يحتوي الهاتف على أرقام فقط";      
        }
        if(strlen($password) < 8 ){
           $errorsArray['password'] = "لابد أن لا تقل كلمة السر عن 8 أحرف";
        }
        if(empty($confirmPassword)){
           $errorsArray['cpassword'] = "تاكيد كلمة السر مطلوب";
        }
        if($confirmPassword != $password){
           $errorsArray['cpassword'] = "لا يوجد تطابق بين كلمتي السر";
        }
        if($errorsArray['name'] == "" &&$errorsArray['email'] == "" &&$errorsArray['mobile'] 
                    == "" &&$errorsArray['password'] == "" &&$errorsArray['cpassword']==""){
            $sql = $connect->prepare("insert into users (name,email , phone , password) values (?,?,?,?)");
            $sql->execute(array($fullname,$email,$mobile,$password));
            session_start();
            $_SESSION['id']= $connect->lastInsertId();
            $_SESSION['name']=$fullname;
            header("location:index.php");
        }
    }
?>