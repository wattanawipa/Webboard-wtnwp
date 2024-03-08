<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>post</title>
</head>
<body>
<div class="container">
        <h1 style="text-align: center;" class="mt-3">Webboard wtnwp</h1>
        <?php include "nav.php" ?>
        <div class="row mt-4">
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="card border-success mt-3">
                    <?php
                    $conn=new PDO("mysql:host=localhost;dbname=wedboard1;charset=utf8","root","");
                    $sql="SELECT post.title,post.content,post.post_date,user.login 
                    FROM post INNER JOIN user ON (post.user_id=user.id) WHERE post.id=$_GET[id]";
                    $result=$conn->query($sql);
                    while($row=$result->fetch()){
                   echo "<div class='card border-primary'>";
                   echo "<div class='card-header bg-primary text-white'>$row[0]</div>";
                   echo "<div class='card-body'>$row[content]<br><br>$row[3]-$row[2]</div>";
                    echo "</div>";
                }
                    ?>

                    <div class="card-header bg-success text-white">
                        แสดงความคิดเห็น</div>
                    <div class="card-body">
                        <form action="post_save.php" method="post">
                            <input type="hidden" name="post_id" value="<?= $_GET['id'];?>">
                                <div class="row mb-3 justify-content-center">
                                    <div class="col-lg-10">
                                        <textarea name="comment" rows="8" 
                                        class="form-control" required> </textarea>
                                    </div>
                                </div>
                            <div class="row">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success btn-sm text-white">
                                        <i class="bi bi-box-arrow-up-right"></i> ส่งข้อความ
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm sm-2">
                                        <i class="bi bi-x-square"></i> ยกเลิก</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
        </div>
   </div>
</body>
</html>