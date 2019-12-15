<!--(C) author - frankline bwire-->
<?php
require "connect.php";
?>
<!--login form-->
<h3>LOGIN</h3>
<form action="index.php" method="post">
Enter ID: <input type="text" name="id">
Enter Password: <input type="password" name="pass">
<input type="submit" name="login" value="LOGIN">
</form>
<?php
//validate login
if(isset($_POST['login'])){
    $id=$_POST['id'];
    $pass=$_POST['pass'];
    //query
    $epass=md5($pass);
    $sql="select * from session.user where id = '$id' and password='$epass' limit 1 ";
    $result=mysqli_query($connect,$sql) or die("ERROR 420 " . mysqli_error($connect));
    //get result
    $row=mysqli_fetch_assoc($result);
    $empid=$row['id'];
    $epass=$row['password'];
    if($empid == $id and $epass=$pass){
        
        $_SESSION["id"]=$id; //assign session, the variable name 'id' (value from $id input)
        header("location:home.php");
        //if true, go to location page.
    }
    else
        echo ("INPUT ERROR 420 <br> Check if you have entered the correct details.");
    //If validation false, show error  
}
?>

<!--Register new user-->
<form action="index.php" method="get">
<input type="submit" name="adduser" value="Register">
</form>
<?php
if(isset($_GET["adduser"])){
?>
<form method="post" action="index.php">
<div>ID: <input type="text" name="id"> </div>
<div>Name: <input type="text" name="name"> </div>    
<div>Email: <input type="email" name="email"> </div>
<div>Password: <input type="password" name="password"></div>
    <div><input type="submit" name="signup" value="SIGNUP"> </div>
</form>
<?php
}
?>

<?php
//register user
if(isset($_POST["signup"])){
   $id=$_POST["id"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    //encrypt password md5
    $epass=md5($password);
    $sql="insert into session.user values('$id','$name','$email','$epass')";
    //query
    $query=mysqli_query($connect,$sql) or die("ERROR 420 " .mysqli_error($connect) . " User already exists.");
    if($query == true){
        echo "signup Successful";
    }
}
?>