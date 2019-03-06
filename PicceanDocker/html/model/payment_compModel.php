<?php
require_once("db_model.php");
session_start();
payment_comp();

function payment_comp(){
    $con = db_connect();
    $sql = 'INSERT INTO T_SALE(user_id , image_id , sale_date , sale_discount) VALUES(? , ? , ? , ?)';
    $stmt = mysqli_prepare($con , $sql);
    $user_id = $_SESSION["id"];
    $datetime = date("Y/m/d H:i:s");
    foreach($_SESSION["cart"] as $item){
        $discount = 1;
        mysqli_stmt_bind_param($stmt , 'ssss' , $user_id , $item , $datetime , $discount);
        $result = mysqli_stmt_execute($stmt);
        unset($_SESSION["cart"][$item]);
    }
    mysqli_stmt_close($stmt);
    db_close($con);
    return $result;
}
?>