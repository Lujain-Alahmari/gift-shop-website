<?php
include_once "includes/database.php";
$message = "";
$errorsArray = array("name"=>"","price"=>"","desc"=>"","image"=>"");
$id = $_GET['id'];
$sql = $connect->prepare("select * from products where id = ? ");
$sql->execute(array($id));
$product = $sql->fetch();
$name = $product['name'];
$price = $product['price'];
$description = $product['description'];
if(isset($_POST['edit'])){
    $name = trim($_POST['name']);
    $price = trim($_POST['price']);
    $description = trim($_POST['desc']);
    if(empty($name)){
        $errorsArray['name'] = "اسم المنتج مطلوب ";
    }
    if(empty($price)){
        $errorsArray['price'] = "سعر المنتج مطلوب";
    }
    if(empty($description)){
        $errorsArray['desc'] = "الوصف مطلوب";
    }
    $file = time().basename($_FILES["image"]["name"]);
    $file_type = strtolower(pathinfo($file,PATHINFO_EXTENSION));
    if($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg" ) {
        $errorsArray['image'] = "تاكد من نوع الملف لابد ان يكون صورة";   
    }
    if($errorsArray['name'] == "" && $errorsArray['price'] == "" && $errorsArray['desc'] == "" && $errorsArray['image'] == ""){
        unlink('uploads/'.$product['image']);
        move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$file);
        $statment  = $connect->prepare("update products set name = ? , 
                                        price = ? , description = ? ,image = ? where id = ?");
                                            
        $statment->execute(array($name,$price,$description,$file,$product['id']));
        $message = "تم حفظ البيانات بنجاح";
    }
}
?>