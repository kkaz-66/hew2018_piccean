<?php
require_once("db_model.php");

function upload($dict){
    #foreach($dict as $key => $item){
        #print($key . "=");
        #print($item . "</br>");
        #print("</br></br>");
        #$do =",";
        #print("INSERT INTO T_IMAGE(user_id,shop_id,category_id,image_size,image_title,image_location,image_equipments,image_comment,image_exif,image_file,image_thumbnail,image_resolution,image_direction,image_date,image_views,image_downloads,image_state)VALUES(". $dict['user_id'] . $do .$dict['shop_id'] . $do . $dict['category_id'] .$do. $dict['image_size'] .$do. $dict['image_title'] .$do. $dict['image_location'] .$do. $dict['image_equipments'] .$do. $dict['image_comment'] . $do."NULL" .$do. $dict['image_file'] .$do. $dict['image_thumbnail'] .$do. $dict['image_resolution'] .$do. $dict['image_direction'] .$do. $dict['image_date'] .$do. $dict['zero'] .$do. $dict['zero'] .$do. $dict['zero'] . ")");
        #print("</br></br>");
    #}
    $con = db_connect();
    $sql = "INSERT INTO  T_IMAGE (user_id,shop_id,category_id,image_size,image_title,image_location,image_equipments,image_comment,image_exif,image_file,image_thumbnail,image_resolution,image_direction,image_date,image_views,image_downloads,image_state)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt , 'sssssssssssssssss' , $dict['user_id'] , $dict["shop_id"] , $dict["category_id"] , $dict["image_size"] , $dict["image_title"] , $dict["image_location"] , $dict["image_equipments"] , $dict["image_comment"] , $dict["exif"] ,$dict["image_file"], $dict["image_thumbnail"] , $dict["image_resolution"] , $dict["image_direction"] , $dict["image_date"] , $dict["zero"] , $dict["zero"] , $dict['zero'] );
    $result = mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    db_close($con);
    return $result;
}
function shop_add($shop_name){
    $con = db_connect();
    $sql = "SELECT shop_id FROM T_SHOP WHERE shop_name = ?";
    $stmt = mysqli_prepare($con , $sql );
    mysqli_stmt_bind_param($stmt,'s',$shop_name);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if(isset($result)){
        $row = mysqli_fetch_array($result);
    }

    $return;

    if(isset($row["shop_id"])){
        #print("----");
        #print($row[0]);
        #print("----");
        $return = $row[0];
    }else{
        #print("すたーとえｌせ");

        $sql2 = "INSERT INTO T_SHOP(shop_name)VALUES(?)";
        $stmt2 = mysqli_prepare($con, $sql2);
        mysqli_stmt_bind_param($stmt2, 's', $shop_name);
        mysqli_stmt_execute($stmt2);
        mysqli_stmt_close($stmt2);

        $sql3 = "SELECT shop_id FROM T_SHOP WHERE shop_name = ?";
        $stmt3 = mysqli_prepare($con, $sql3);
        mysqli_stmt_bind_param($stmt3,'s',$shop_name);
        mysqli_stmt_execute($stmt3);
        $result3 = mysqli_stmt_get_result($stmt3);
        $row3 = mysqli_fetch_array($result3);

        $return = $row3[0];

        #print("えんど");
        
    }
    db_close($con);
    return $return;    
}

function category_add($category_name){
    $con = db_connect();
    $sql = "SELECT category_id FROM T_CATEGORY WHERE category_name = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, 's', $category_name);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if(isset($result)){
        $row = mysqli_fetch_array($result);
    }
    $return;

    if (isset($row[0])) {
        $return = $row[0]["category_id"];
    } else {
        $sql2 = "INSERT INTO T_CATEGORY(category_name)VALUES(?)";
        $stmt2 = mysqli_prepare($con, $sql2);
        mysqli_stmt_bind_param($stmt2, 's', $category_name);
        mysqli_stmt_execute($stmt2);
        mysqli_stmt_close($stmt2);

        $sql3 = "SELECT category_id FROM T_CATEGORY WHERE category_name = ?";
        $stmt3 = mysqli_prepare($con, $sql3);
        mysqli_stmt_bind_param($stmt3, 's', $category_name);
        mysqli_stmt_execute($stmt3);
        $result3 = mysqli_stmt_get_result($stmt3);
        $row3 = mysqli_fetch_array($result3);

        $return = $row3[0]["category_id"];
    }
    db_close($con);
    return $return;    
}
?>