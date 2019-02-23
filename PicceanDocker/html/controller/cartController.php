<?php
function addcart($user ,$id){
    $_SESSION[$user][] = $id;
}

function viewcart($user){
    $id = $_SESSION[$user];
    return $id ;
}

function delcart($user ,$id){
    foreach ($_SESSION[$user] as $item){
        if($id = $item[i]){
            unset($item[i]);
        }
    }
}

function alldelcart($user){
    unset( $_SESSION[$user]);
}
?>