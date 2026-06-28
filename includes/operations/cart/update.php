<?php
if(isset($_POST['update-cart'])){
    $amount = $_POST['amount'];
    $id = $_POST['id'];
    $price = $_POST['price'];
    $total = $amount * $price ;
    $sql = $connect->prepare("update user_cart set amount = ? , total = ? where id = ?");
    $sql->execute(array($amount,$total,$id));
}
?>