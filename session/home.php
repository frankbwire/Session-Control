<!--(C) author - frankline bwire-->
<?php
require "connect.php";

if(isset($_SESSION['id'])){
    //Check if a session is started 
    
$user=$_SESSION['id']; //assign session value to variable $user
    //query user using user id
    $sql="select * from session.user where id='$user'";
    $query=mysqli_query($connect,$sql) or die ("query failed " . mysqli_error($connect));
    $row=mysqli_fetch_assoc($query);
    $name=$row["name"];
    $email=$row["email"];    
    ?>
<div>
<a href="logout.php">LOGOUT</a>
</div>
<div>
<i>login successfull</i>
    <h3><i>welcome :</i><?php echo $name  ?> </h3>
    <h3><i>Email :</i><?php echo $email ?> </h3>
</div>
<?php
}
   else
       echo ("you must login first");
//Error message if no session started
?>
