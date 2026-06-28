<?php include "includes/operations/admin/addproduct.php"?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>إضافة منتج جديد</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
<?php include "includes/admin_header.php";?>
<div class="content">
<section class="content-body">
    <h3 class='message-success'><?php echo $message ?></h3>
    <form class="login-form" enctype="multipart/form-data" action="" method="POST">
        <h1>إضافة منتج جديد</h1>
        <label for="email">اسم المنتج</label>
        <input type="text" required value="<?php echo $product_name?>" name="name" >
        <p class="error"><?php echo $errorsArray['name']?></p>
        <label for="email">سعر المنتج</label>
        <input type="number" min="1" required value="<?php echo $product_price?>" name="price" >
        <p class="error"><?php echo $errorsArray['price']?></p>
        <label for="image">صورة المنتج</label>
        <input type="file" required name="image">
        <p class="error"><?php echo $errorsArray['image']?></p>
        <label for="desc">وصف المنتج</label>
        <textarea name="desc" id="" cols="30" p rows="10"><?php echo $desc?></textarea>
        <p class="error"><?php echo $errorsArray['desc']?></p>  
        <input class="btn" type="submit" name="add" value="إضافة">
        <input class="btn" type="button" onclick="location.href='adminIndex.php'" value="قائمة المنتجات">
    </form>
</section>
</div>
<?php include "includes/footer.php"?>
<script src="adminactions.js"></script>
</html>