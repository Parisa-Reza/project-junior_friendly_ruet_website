<?php
$roll=$_POST['roll'];
$email=$_POST['email'];
$password=$_POST['password'];

$roll=stripcslashes($roll);
$email=stripcslashes($email);
$password=stripcslashes($password);
$link=mysqli_connect("localhost:3306","root","");
mysqli_select_db($link,"mydb");
$roll= mysqli_real_escape_string($link,$roll);
$email=mysqli_real_escape_string($link,$email);
$password=mysqli_real_escape_string($link,$password);


$result =mysqli_query($link,"select * from mytable2 where roll = '$roll' and email='$email' and password='$password'")
   or die ("Failed to query database ".mysqli_error($link));
$row = mysqli_fetch_array($result);
if($row['roll'] == $roll && $row['email']==$email && $row['password']=$password)
{
//echo " login successfull ";
header('Location: index.html');
}
else{
    echo " failed to login";

}

?>