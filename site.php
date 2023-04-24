<?php
    require 'connection.php';
    if(isset($_POST['submit'])){
        $repo = $_POST['repositoryname'];
        $dev = $_POST['dev'];
        $test = $_POST['test'];
        $sand = $_POST['sand'];
        $prod = $_POST['prod'];
        $sql = "INSERT INTO `afsar`(`repositoryname`,`dev`,`test`,`sand`,`prod`) VALUES ('$repo','$dev','$test','$sand','$prod')";
        $query = mysqli_query($connection,$sql);
    }
    session_start();
if(!$_SESSION['ADMIN']){
    header('location:login.php');
}

if(isset($_POST['done'])){
  session_destroy();
  header('location:login.php');
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
    bottom: -150px;
    height: 30px;
    width: 300px;
    border-radius: 100px;
    text-align: center;
    margin: 10px;
}
.button{
    position: relative;
    left: 600px;
    bottom: -145px;
    height: 30px;
    width: 100px;
    border-radius: 100px;
    text-align: center;
    border: none;
}
.button:hover{
    background-color: red;
    color: white;
}

header {
  background-color: #333;
  color: #fff;
  padding: 10px;
}

nav {
  display: flex;
  justify-content: space-between;
}

ul {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
}

li {
  margin-right: 20px;
}

a {
  color: #fff;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}
#set{
  height:20px;
  width:80px;
  border-radius: 50px;
}
#add{
  color:black;
  
}
</style>

<body>
<header>
  <nav>
    <ul>
      <li><p>Hi</p><?php echo $_SESSION['ADMIN']?></li>
      <li><form method="post">
        <button type="submit"name="done" id="set">Logout</button>
    </form></li>
    </ul>
  </nav>
</header>
    </div>
    <form action="#"method="post"><br>
        <input type="text"name="repositoryname" class="input" placeholder="Enter Repository Name"><br>
        <input type="text"name="dev" class="input" placeholder="Enter Dev Enviroment Name"><br>
        <input type="text"name="test" class="input" placeholder="Enter Test Enviroment Name"><br>
        <input type="text"name="sand" class="input" placeholder="Enter Sand Enviroment Name"><br>
        <input type="text"name="prod" class="input" placeholder="Enter Prod Enviroment Name"><br>
        <button type="submit"name="submit" class="button">Insert</button><br>
        <button type="submit"name="submit" class="button"><a href="adduser.php" id="add">AddUser</a></button>
    </form>
    



</body>

</html>