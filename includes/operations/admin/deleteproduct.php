<?php
if(isset($_GET['delete'])){
    $sql = $connect->prepare("select * from products where id = ? ");
    $id = $_GET['delete'];
    $sql->execute(array($id));
    $product = $sql->fetch();
    if(isset($product['image'])){
        unlink('uploads/'.$product['image']);
    }
    $sql = $connect->prepare("delete from products where id = ? ");
    $sql->execute(array($id));
}

