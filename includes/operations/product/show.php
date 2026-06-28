<?php
     $sql = $connect->prepare("select * from products where id = ?");
     $sql->execute(array($id));
     $product = $sql->fetchObject();
?>