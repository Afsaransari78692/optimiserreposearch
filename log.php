<?php
session_start();
if(!$_SESSION['ADMIN']){
    header('location:fom.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script>
        var a = new Date();
        document.write(a.toDateString());
    </script>
</head>
<body>
    <h1>Hellow to login page here <?php echo $_SESSION['ADMIN']?></h1>
    <form method="post">
        <button type="submit"name="done">Logout</button>
    </form>
    <?php
    if(isset($_POST['done'])){
        session_destroy();
        header('location:fom.php');
    }

?>
</body>
</html>