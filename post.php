<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1 align="center"> Webboard Sopit </h1>
    <hr>
    <div align ="center">
    <p>  ต้องการดูกระทู้หมายเลข <?php echo $_GET["id"]?></p>
    <?php
    if($_GET['id']%2==0){
        echo "เป็นกระทู้หมายเลขคู่";
    }else{
        echo "เป็นกระทู้หมายเลขคี่";
    }
    ?>
    </br>
        <table style="border: 2px solid black; width:40%" align="center">
        <tr><td  colspan="2" style="background-color:#6CD2FE;"align="center">แสดงความคิดเห็น</td></tr>
        <tr><td><textarea name="" id="" cols="100" rows="10"></textarea></textarea></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td></tdc></tr>
        </table>
   
        <br>   
        <div>
        <a href="index.html">กลับไปหน้าหลัก</a>
        </div>
      
</body>
</html>