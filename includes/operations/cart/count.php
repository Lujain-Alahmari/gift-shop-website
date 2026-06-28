<?php
if(isset($_SESSION['id'])){
    $sql2 = $connect->prepare("select count(*)  from user_cart where user_id = ?
    and confirmed = 0 ");
    $sql2->execute(array($_SESSION['id']));
    $count_of_products = $sql2->fetch();
}