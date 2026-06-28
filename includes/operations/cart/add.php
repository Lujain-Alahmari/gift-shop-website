<?php
$message = "";
if(isset($_POST['submit'])){
    if(!isset($_SESSION['id'])){
        header("location:login.php");
    }else{
        $sql = $connect->prepare("insert into user_cart  (product_id,amount,total,user_id)
                                    values (?,?,?,?)");
        $sql->execute(array($product->id,1,$product->price,$_SESSION['id']));
        $message = "تمت الإضافة إلى السلة";
    }
}
?>