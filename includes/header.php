<header>
    <ul>
        <li><a href="index.php"><img src="images/logo.png" alt=""></a></li>
        <li><a href="index.php">الصفحة الرئيسية</a></li>
        <?php if(!isset($_SESSION['id'])):?>
            <li><a href="login.php">تسجيل الدخول</a></li>
            <li><a href="register_user.php">تسجيل جديد</a></li>
        <?php else: ?>
            <li><a href="logout.php">تسجيل الخروج</a></li>
        <?php endif;?>
        <li id="left"><a href="customer_cart.php"><img src="images/bocket.png" alt="سلة المشتريات" title="سلة المشتريات"><span><?php echo (isset($count_of_products))?$count_of_products[0]:'0' ?></span></a></li>
    </ul>
</header>