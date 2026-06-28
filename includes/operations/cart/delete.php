<?php

    if(isset($_GET['delete'])){
        $sql = $connect->prepare("delete from user_cart where id = ? ");
        $id = $_GET['delete'];
        $sql->execute(array($id));
    }

?>