<?php
session_start();
require("inc/config.php");
$sid = $_SESSION['logged'];
$data = date("d.m.Y");
$type = $_POST['type'];
$error = 0;
$fa = "";
if($type == "saveTovar") {
    $id = $_POST['id'];
    $name = $_POST['new_name'];
    $desc = $_POST['new_desc'];
    if(!$_SESSION['admin_auth']) {
    $error = 3;
    $mess = "Авторизуйтесь как администратор";
    $fa = "fatal";     
    }
    if($error == 0) {
     $query = mysqli_query($link,"UPDATE tovars SET name = '$name' WHERE id = '$id'");
     $query2 = mysqli_query($link,"UPDATE tovars SET sm_desc = '$desc' WHERE id = '$id'");
     $fa = "success";
    }
    $result = array(
	'success' => "$fa",
	'error' => "$mess",
	'name' => "$name",
	'desc' => "$desc",
	'id' => "$id_tovar"
	);
}
if($type == "editTovar") {
    $id = $_POST['id_edit'];
    if(!$_SESSION['admin_auth']) {
    $error = 3;
    $mess = "Авторизуйтесь как администратор";
    $fa = "fatal";     
    }
    if($error == 0) {
   $sql_select1 = "SELECT * FROM tovars WHERE id = '$id'";
$result1 = mysqli_query($link,$sql_select1);
$row = mysqli_fetch_array($result1);
if($row)
{
$id_tovar = $row['id']; // id товара
$name = $row['name'];
$desc = $row['sm_desc'];
}
    $fa = "success";
    }
    $result = array(
	'success' => "$fa",
	'error' => "$mess",
	'name' => "$name",
	'desc' => "$desc",
	'id' => "$id_tovar"
	);
}

if($type == "delTovar") {
    $delete_id = $_POST['id_del'];
    if(!$_SESSION['admin_auth']) {
    $error = 3;
    $mess = "Авторизуйтесь как администратор";
    $fa = "fatal";     
    }
    if($error == 0) {
    $query = mysqli_query($link,"DELETE FROM `tovars` WHERE id = '$delete_id'");
    $fa = "success";
    }
    $result = array(
	'success' => "$fa",
	'error' => "$mess"
	);
}
if($type == "addTovar") {
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $links = $_POST['link'];
    $link2 = $_POST['link2'];
    $link3 = $_POST['link3'];
    if(strlen($name) > 49){
    $error = 5;
    $mess = "Превышено допустимое кол-во символов!";  
    $fa = "fatal"; 
    }
    
    if(strlen($desc) > 420){
    $error = 4;
    $mess = "Превышено допустимое кол-во символов!";  
    $fa = "fatal"; 
    }
    if($name == '' || $desc == '' || $links == ''|| $link2 == '' || $link3 == '') {
    $error = 1;
    $mess = "Заполните все поля!";
    $fa = "fatal";   
    }
    if(!$_SESSION['admin_auth']) {
    $error = 3;
    $mess = "Авторизуйтесь как администратор";
    $fa = "fatal";     
    }
    if($error == 0) {
        $query = mysqli_query($link,"INSERT INTO `tovars` (`id`, `sm_desc`, `name`, `img`, `img2`, `img3`, `date`) VALUES (NULL, '{$desc}', '{$name}', '{$links}', '{$link2}', '{$link3}', '{$data}');");
         $sql_select21 = "SELECT @@identity FROM tovars";
$result21 = mysqli_query($link,$sql_select21);
$row = mysqli_fetch_array($result21);
if($row)
{
    $id = $row['@@identity'];
}
 $fa = "success";
    }
    $result = array(
	'success' => "$fa",
	'error' => "$mess",
	'id' => $id,
	'desc' => "$desc",
	'name' => "$name", 
	'link' => "$links",
    'link2' => "$link2",
    'link3' => "$link3"
	
    );

}
if($type == "selectTovar") {
$id_s = $_POST['id'];
$sql_select1 = "SELECT COUNT(*) FROM tovars WHERE id = '$id_s'";
$result1 = mysqli_query($link,$sql_select1);
$row = mysqli_fetch_array($result1);
if($row)
{
    $find = $row['COUNT(*)'];
}
if($find == 0) {
    $error = 1;
    $mess = "Товар не существует!";
    $fa = "fatal";
}
if($error == 0) {
$sql_select2 = "SELECT * FROM tovars WHERE id = '$id_s'";
$result2 = mysqli_query($link,$sql_select2);
$row = mysqli_fetch_array($result2);
if($row)
{
    $img = $row['img'];
    $img2 = $row['img2'];
    $img3 = $row['img3'];
    $desc = $row['sm_desc'];
    $name = $row['name'];
    $id = $row['id'];
}

$fa = "success";
}
$result = array(
	'success' => "$fa",
	'error' => "$mess",
	'image' => $img,
	'image2' => "$img2",
	'image3' => "$img3",
	'desc' => "$desc",
	'name' => "$name",
	'id' => "$id"
    );
}
	/* огромное спасибо за покупку, моя страница в вк - https://vk.com/id321223555 по всем вопросам и т.д */
    echo json_encode($result);
?>