<?php include "includes/operations/user/login.php"?>
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
            <form action="" class="login-form" method="post">
                <h1>تسجيل الدخول</h1>
                <p class="error"><?php echo $error?></p>
                <label for="email">البريد الإلكتروني</label>
                <input type="email" required name="email" id="email" placeholder="أدخل بريدك الإلكتروني">
                <label for="password">كلمة السر</label>
                <input type="password" required name="password" id="password" placeholder="أدخل كلمة السر">
                <input class="btn" type="submit" name="login" value="تسجيل دخول">
            </form>
        </section>
    </div>
    <?php include "includes/footer.php"?>
</html>