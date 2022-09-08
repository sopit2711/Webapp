<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <h1 align="center"> Webboard Sopit </h1>
    <hr>
    <div align ="center">
        <br>
        <?php 
        if($_POST["Login"]=="admin" && $_POST["Password"]=="ad1234"){
            echo "ยินดีต้อนรับคุณ ADMIN";
        }elseif ($_POST["Login"]=="member" && $_POST["Password"]=="mem1234"){
            echo "ยินดีต้อนรับคุณ MEMBER";
        }else{
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
        }
    
        //echo "Login=".$_POST["Login"]."<br>";
        //echo "Password=".$_POST["Password"]."<br>";
        
        ?>
        <br>
        <a href="index.php">กลับไปหน้าหลัก</a>
    </div>
</body>
</html>