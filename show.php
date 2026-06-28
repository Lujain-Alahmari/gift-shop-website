<?php
    session_start();
    include 'includes/database.php';
    $id = $_GET['id'];
    include "includes/operations/product/show.php";
    include "includes/operations/cart/add.php";
    include "includes/operations/cart/count.php";
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title><?php echo $product->name?></title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php include "includes/header.php"?>
    <div class="content">
        <section class="content-body">
            <div class="product-desc">
                <form action="" method="POST">
                    <h4 class="message-success"><?php echo $message?></h4>
                    <br>
                    <h1>اسم المنتج</h1>
                    <h1><?php echo $product->name?></h1>
                    <img src="uploads/<?php echo $product->image?>" alt="">
                    <h1>وصــف المنتج</h1>
                    <p><?php echo $product->description;?></p>
                    <h1>السعر: <?php echo $product->price ;?> ريــال</h1>
                    <button name="submit" type="submit" >إضافة إلى سلة مشترياتي</button>
                    <button onclick="location.href='index.php'" name="back" type="button" > رجوع </button>
                </form>
            </div>
        </section>
    </div>
   <?php include "includes/footer.php"?>
</html>