<?php
session_start();
require_once("../model/uploader.php");

$user_id = $_SESSION["id"];
$shop_name = $_POST["shop_name"];
$category_name = $_POST["category"];
$image_size = "M";
$image_title = $_POST["title"];
$image_location = $_POST["location"];
$image_equipments = $_POST["equipments"];
$image_comment = $_POST["comment"];
$image_resolution = "2000 × 1500";
$image_direction = 0 ;
$date_time = date("Y-m-d H:i:s");
#print("---/////---/-/-/-/");
#print($date_time);
#print("---/////---/-/-/-/");

$category_id = category_search($category_name);

$dict = array(
    'user_id' => $user_id,
    'shop_name' => $shop_name,
    'category_name' => $category_name,
    'category_id' => $category_id,
    'image_size' => $image_size,
    'image_title' => $image_title,
    'image_location' => $image_location,
    'image_equipments' => $image_equipments,
    'image_comment' => $image_comment,
    'image_resolution' => $image_resolution ,
    'image_direction' => $image_direction,
    'image_date' => $date_time,
    'zero' => "0",
    'exif' => "NULL"
);

#アップロード処理
$image_file = $_FILES["upload"]["tmp_name"];
$image_tumbnail = $_FILES["upload"]["tmp_name"];
if(is_uploaded_file($_FILES["upload"]["tmp_name"])){
    $filename = $_FILES["upload"]["name"];
    if(move_uploaded_file($image_file , "../images/" . $filename)){
        $shop_id = shop_add($shop_name);
        $category_id = category_add($category_name);
        $dict['shop_id'] = $shop_id;
        $dict['image_file'] = "../images/" . $filename;
        $dict['image_thumbnail'] = "../images/" . $filename;
        $res = upload($dict);
        #print($res);
    }else{
        #print("UPLOAD_ERROR");
    }
}else{
    #print("未選択");
    #ファイル未選択
}
header('Location:'. " ./member_image_listController.php");

function category_search($category_name)
{
    switch ($category_name) {
        case "生物":
            return 1;
        case "地形":
            return 2;
        case "構造物":
            return 3;
        case "人物":
            return 4;
    }
}

?>