<?php
//start new code 












//start from here new code 
$connection = mysqli_connect('localhost','root','','search3');
if(isset($_POST['submit'])){
    $username = $_POST['user'];
    $username = filter_var($username,FILTER_SANITIZE_STRING);
    $password = $_POST['pass'];
    $password = filter_var($password,FILTER_SANITIZE_STRING);

    $query = "SELECT * FROM `user` where `user`='$username' AND `pass`='$password'";
// }
$result = mysqli_query($connection,$query);
if(mysqli_num_rows($result)==1){
    session_start();
    $_SESSION['ADMIN']=$_POST['user'];
    header('location:site.php');
}else{
    echo "<script>alert('wrong password enter again');</script>";
}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
* {
    margin: 0;
    padding: 0;
}

body {
    background-image: url(q.png);
    height: 100vh;
    background-size: cover;
    background-position: center;
}
/* form{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    
} */
.input{
    position: relative;
    left: 500px;
    bottom: -300px;
    height: 30px;
    width: 300px;
    border-radius: 100px;
    text-align: center;
}
.button{
    position: relative;
    left: 600px;
    bottom: -305px;
    height: 30px;
    width: 100px;
    border-radius: 100px;
    text-align: center;
    border: none;
}
.button:hover{
    background-color: black;
    color: white;
}


</style>

<body>



    </div>
    <form method="post" ><br>
        <input type="text"name="user" class="input" placeholder="Enter Admin Username"><br><br>
        <input type="password"name="pass" class="input" placeholder="Enter Admin Password"><br>
        <button type="submit"name="submit" class="button">login</button>
    </form>
    
</body>

</html>