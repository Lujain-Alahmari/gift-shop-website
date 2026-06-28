<?php
session_start();
include 'includes/database.php';
if(!isset($_SESSION['id'])){
    header("location:login.php");
}
$message = "";
//update cart
include "includes/operations/cart/update.php";
//confirm order
include "includes/operations/cart/place_order.php";
//delete from cart
include "includes/operations/cart/delete.php";
//Select cart items
include "includes/operations/cart/show.php";
//cart count 
include "includes/operations/cart/count.php";
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>الرئيسية</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php include "includes/header.php"?>
    <div class="content">
        <section class="content-body">
                <h1 class="message-success"><?php echo $message?></h1>
                <?php if($sql->rowCount() > 0 ): ?>
                    <div class="cart">
                    <div class="cart-items">
                    <table>
                        <tr>
                            <th>المنتج</th>
                            <th>السعر</th>
                            <th>الكمية</th>
                            <th>الإجمالي</th>
                            <th>حذف</th>
                        </tr>
                        <?php $total = 0 ;?>
                        <?php  while($row = $sql->fetchObject()): ?>
                            <tr>
                                <td><img src="uploads/<?php echo $row->image?>" alt=""><span><?php echo $row->name?></span></td>
                                <td><?php echo $row->price?></td>
                                <?php $sub_total = $row->amount * $row->price ?>
                                <td>
                                    <form action="" method="POST">
                                        <input type="number" min="1" name="amount" value="<?php echo $row->amount?>" >
                                        <input type="hidden" name="id" value="<?php echo $row->id?>" >
                                        <input type="hidden" name="price" value="<?php echo $row->price?>" >
                                        <input class="btn-edit" type="submit" name="update-cart" value="تعديل">
                                    </form>
                                </td>
                                <td><?php echo $sub_total?></td>
                                <td>
                                    <form>
                                        <a class="delete-product">حذف</a>
                                        <input type="hidden" name="delete" value="<?php echo $row->id?>" >                       
                                    </form>
                                </td>
                            </tr>
                            <?php $total = $total + $sub_total; ?>
                        <?php endwhile;?>
                    </table>
                    </div>
                    <div class="order-details">
                        <h1>إجمالي سلة المشتريات</h1><br>
                        <h4><?php echo $total;?> ريال</h4><br>
                        <form action="" method="post">
                            <input type="hidden" name="total" value="<?php echo $total?>">
                            <button class='btn' name="confirm_order">إنهاء الطلب</button>
                        </form>
                    </div>
                    </div>
                <?php else : ?>
                    <p class="error">سلة مشترياتك فارغة</p>
                <?php endif;?>
                
        </section>
    </div>
    <?php include "includes/footer.php"?>
    <script src="js/index.js"></script>
</html>