<?php include "includes/operations/user/register.php"?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>تسجيل جديد</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php include "includes/header.php"?>
    <div class="content">
        <section class="content-body">
            <form action="" class="login-form" method="post">
                <h1>تسجيل جديد</h1>
                <p class="error"><?php echo $error?></p>
                <label for="name">اسم المستخدم </label>
                <input type="text" name="name" required>
                <p class="error"><?php echo $errorsArray['name']?></p>
                <label for="email">البريد الإلكتروني للمستخدم</label>
                <input type="email" required name="email" id="email" >
                <p class="error"><?php echo $errorsArray['email']?></p>
                <label for="mobile">رقم هاتف المستخدم</label>
                <input type="number" name="mobile" required>
                <p class="error"><?php echo $errorsArray['mobile']?></p>
                <label for="password">كلمة السر</label>
                <input type="password" required name="password" id="password" >
                <p class="error"><?php echo $errorsArray['password']?></p>
                <label for="password">تأكيد كلمة السر</label>
                <input type="password" required name="cpassword" id="cpassword" >
                <p class="error"><?php echo $errorsArray['cpassword']?></p>
                <button name="new_user" class="btn">تسجيل جديد</button>
            </form>
        </section>
    </div>
    <?php include "includes/footer.php"?>
</html>