<?php
session_start();
if(isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard wtnwp</h1>
    <hr>
    <div style="text-align: center;">

       <?php
        $login=$_POST["login"];
        $pwd=$_POST["password"];
        if($login=="admin" && $pwd=="ad1234"){
            $_SESSION['username']='admin';
            $_SESSION['role']='a';
            $_SESSION['id']=session_id();
            echo "ยินดีต้อนรับคุณ ADMIN <br>";
            echo "<a href=index.php>กลับไปหน้าหลัก</a>";
        }
        elseif($login=="member" && $pwd=="mem1234")
        {
            $_SESSION['username']='member';
            $_SESSION['role']='m';
            $_SESSION['id']=session_id();
            echo "ยินดีต้อนรับคุณ MEMBER <br>";
            echo "<a href=index.php>กลับไปหน้าหลัก</a>";
        }
        else
        {
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง<br>";
            echo "<a href=index.php>กลับไปหน้าหลัก</a>";
        }
       ?>

</div>
</body>
</html>