<?php
    session_start();
    //database
    include "includes/database.php";
    //all products
    include "includes/operations/product/displayall.php";
    //diaplay cart count in header
    include "includes/operations/cart/count.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>الرئيسية</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php include "includes/header.php";?>
    <div class="content">
    <section class="content-header">
        <h1>مرحـــباً بكم </h1>
        <p>أهــــم شخـــص في حيـــاتك يحتـــاح هديـــة مميـــزه . استــكـــشف هدايانا وباقاتنا الان</p>
        <div id="image-slider">
            <img src="images/1.jpg" id="image" alt="">  
        </div>
    </section>
    <section class="content-body">
        <?php if($sql->rowCount() > 0 ): ?>
            <?php while($row = $sql->fetchObject()):?>
                <div class="product-box">
                    <img src="uploads/<?php echo $row->image?>" alt="">
                    <h4><?php echo $row->name?></h4>
                    <span>السعر : <?php echo $row->price?> ريال</span>
                    <a href="show.php?id=<?php echo $row->id?>"><h4>المزيد</h4></a>
                </div>
            <?php endwhile;?>
        <?php else:?>
            <p class="error">لا توجد منتجات  حالياً ترقب كل ما  هو  جديد</p>    
        <?php endif;?>   
    </section>
    </div>
    <?php include "includes/footer.php"?>
    <script src="js/index.js"></script>
</html>