<?php
    $sql_st = "select user_cart.id, name , price , image , amount , total
    from products inner join user_cart on user_cart.product_id = products.id 
    where user_id = ? 
    and confirmed = 0 ";
    $sql = $connect->prepare($sql_st);
    $sql->execute(array($_SESSION['id']));
?>