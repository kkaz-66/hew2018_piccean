<?php
session_start();
require_once("../model/db_model.php");
require_once("../model/getter.php");
$id = $_POST["id"];

$file_path = getPath($id);

header('Content-Type: application/octet-stream');
header('Content-Length: '. filesize($file_path));
header('Content-Disposition: attachment; filename="PICCEAN"' .  $id .".png"); 

// ファイル出力
readfile($file_path);
?>