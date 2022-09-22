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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><center>Webboard Sopit</center></h1>
    <hr>
    <div>
        ผู้ใช้: <?php echo $_SESSION['username'] ?> 
        </div>
        <table align="left">
        <tr><td> หมวดหมู่ : </td><td> <select name="category">
            <option value="general">เรื่องทั่วไป</option>
            <option value="study">เรื่องเรียน</option><br>
            </section> </td></tr>
            
            <tr><td>หัวข้อ :</td><td><input type="text" name="topic"></td></tr>
            <tr><td>เนื้อหา :</td><td> <textarea id="textarea" name="textarea" ></textarea></td></tr>
            <tr><td></td><td><input type="submit" value="บันทึกข้อความ"a></td></tr>
    </table>  
    <a href="index.php">กลับไปหน้าหลัก</a>
</body>
</html>