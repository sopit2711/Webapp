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
        เข้าสู่ระบบด้วย <br>
        Login = <?php echo $_POST["Login"];?><br>
        Password = <?php echo $_POST["Password"];?>

        <?php 
        echo "Login=".$_POST["Login"]."<br>";
        echo "Password=".$_POST["Password"]."<br>";
        ?>
    </div>
</body>
</html>