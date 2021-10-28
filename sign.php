<?php
if(isset($_POST["submit"])){
$f=$_POST['first'];
$l=$_POST['last'];
$e=$_POST['email'];
$p=$_POST['psd'];
$cp=$_POST['cpsd'];

$conn = mysqli_connect("localhost","root","","loginsystem");

$q1="insert into user values('$f','$l','$e','$p')";
$q=mysqli_query($conn,$q1);
 if(!$q)
    {
      echo"WRONG QUERY";
     }
else{
    echo "Signed up";
    }
}
?>