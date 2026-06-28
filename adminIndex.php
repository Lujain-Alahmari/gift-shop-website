<?php
    include "includes/database.php";
    include "includes/operations/admin/deleteproduct.php";
    include "includes/operations/product/displayall.php";
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>الرئيسية</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php include "includes/admin_header.php"?>
    <div class="content">
        <section class="content-body">
            <button onclick="location.href='add.php'" class="btn">إضافة منتج جديد</button>
            <h1>قــائــمة المنتجات</h1><br>
            <div class="cart-items">
                <?php if($sql->rowCount() > 0 ): ?>
                <table>
                    <tr>
                        <th>المنتج</th>
                        <th>الوصف</th>
                        <th>السعر</th>
                        <th>عمليات</th>
                    </tr>
                    <?php while($row = $sql->fetchObject()):?>
                        <tr>
                            <td><img src="uploads/<?php echo $row->image?>" alt=""><span id='pro-desc'><?php echo $row->name?></span></td>
                            <td><?php echo $row->description?></td>
                            <td><?php echo $row->price?></td>
                            <td>
                                <form>
                                    <a class='delete-product'>حذف</a>
                                    <input type="hidden" name="delete" value="<?php echo $row->id?>" >                        
                                    <a id="edit" href="edit.php?id=<?php echo $row->id?>">تعديل</a>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile;?>
                </table>
                <?php else : ?>
                        <p class="error">قائمة المنتجات فارغة</p>
                <?php endif;?>
            </div>
        </section>
    </div>
    <?php include "includes/footer.php"?>
    <script src="js/index.js"></script>
</html>