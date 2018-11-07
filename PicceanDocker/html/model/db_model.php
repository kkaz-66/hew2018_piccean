<?php
//テスト用SQL文
function test(){
  $con = mysqli_connect("mysql","piccean","pass")or die("接続失敗");
  mysqli_set_charset($con,"utf8");
  mysqli_select_db($con,"test");
  $sql="SELECT * FROM test WHERE test=1";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_array($result);
  return $row;
}
?>
