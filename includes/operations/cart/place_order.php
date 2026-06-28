<?php
if(isset($_POST['confirm_order'])){
    $sql = $connect->prepare("update user_cart set confirmed = 1 where user_id = ? ");
    $sql->execute(array($_SESSION['id']));
    $sql = $connect->prepare("insert into user_orders (user_id,customer_name,total) values (? ,?,?)");
    $sql->execute(array($_SESSION['id'],$_SESSION['name'],$_POST['total']));
    $message = "تم تنفيذ طلبكم وسيتم الإتصال بكم للتوصيل ";
}
?>