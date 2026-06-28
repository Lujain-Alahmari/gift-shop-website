<?php
    $error = "";
    $message = "";
    $product_name = $product_price = $desc =  "";
    $errorsArray = array("name"=>"","price"=>"","desc"=>"","image"=>"");
    if(isset($_POST['add'])){
        $product_name = trim($_POST['name']);
        $product_price = trim($_POST['price']);
        $desc = trim($_POST['desc']);
        $file = time().$_FILES["image"]["name"];
        $file_type = strtolower(pathinfo($file,PATHINFO_EXTENSION));
        if($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg" ) {
            $errorsArray['image'] = "تأكد من نوع الملف لابد أن تكون صورة";   
        }
        if(empty($product_name)){
            $errorsArray['name'] = "الاسم مطلوب";
        }
        if(empty($product_price)){
            $errorsArray['price'] = "السعر";
        }
        if(empty($desc)){
            $errorsArray['desc'] = "الوصف مطلوب";
        }
        if($errorsArray['name'] == "" && $errorsArray['price'] == "" && $errorsArray['desc'] == "" && $errorsArray['image'] == ""){
            include "includes/database.php";
            move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$file);
            $sql  = $connect->prepare("insert 
            into products (name,price,description,image) 
            values (?,?,?,?)");
            $sql->execute(array($product_name,$product_price,$desc,$file));
            $message = "تمت الإضافة في قائمة المنتجات";
            $product_name = $desc = $product_price = "";
        }
    }

?>