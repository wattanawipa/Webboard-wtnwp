<?php
if(isset($_POST['topic'])){
session_start();
$cate=$_POST['category'];
$top=$_POST['topic'];
$comm=$_POST['comment'];
$user=$_POST['user_id'];
 
$conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
$sql="INSERT INTO post (title, content, post_date, cat_id, user_id)
    VALUES ('$top','$comm',NOW(),'$cate','$user_id')";
$conn->exec($sql);
$conn=null;
}
header("location:index.php");
    die();
?>