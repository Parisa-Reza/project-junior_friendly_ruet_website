<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>about</title>
</head>
<body>

<nav class="navbar">
        <ul class="nav-list ">
            <div class="logo"><img src="img/ruet-monogram-2505-x-3000.png" alt= "logo"></div>
            <li> <a href="index.html">Home</a></li>
            <li> <a href="studymaterials.html">Study Materials</a></li>
            <li> <a href="accomodationvacancy.html">Accomodation<br>Vacancy</a></li>
            <li> <a href="club.html">Clubs</a></li>
            <li> <a href="about.html">About</a></li>
            <li> <a href="contact us.html">Contact<br>us</a></li>
           
        </div>



       <form method ="GET" action ="rollmate.php">
       <div class="form-row">
           <div class="col-md-4">
            <input class="scrh "type ="text" name="roll" placeholder="Search Your Rollmate" class="form-control">
           </div>
           <div class="col-md-4">

            <button class="btnn" type ="submit" name="search">
                Search
            </button>
           </div>

       </div>

    </form>
        
        </ul>

       
    </nav>
    
        <div class="background-image">
            <br><br>

<?php

  if (isset($_GET['search']))
  {
     $roll =$_GET['roll'];
     $conn= mysqli_connect("localhost","root","","mydb") ;
     $sql= "SELECT * FROM rollmate WHERE roll='$roll'";
     $result= mysqli_query($conn,$sql);
     $row = mysqli_fetch_array($result);

   if($row) {
 

?>
<center>
<table border="4" align ="center" cellpadding="10">
    <thead>
        <tr>
            <th><font color="white" size=6><u>Roll</u></font></th>
            <th><font color="white"size=6><u>Name</u></font></th>
            <th><font color="white" size=6><u>Facebook Id</u></font></th>
        </tr>
   </thead>
<br>
   <tbody>
        <tr>
            <td><?php echo "<p style='color: white;'> <i> <b>"  . $row['roll'] ."</b></i>  </p>" ;?> </td>
            <td><?php echo "<p style='color: white;'><i><b>" .$row['name'] ."</b></i></p>";?> </td>
            <td><?php echo "<p style='color: white;'><i><b>" .$row['fb'] ."</b></i></p>";?> </td>
        </tr>
   </tbody>
   </table>
   </center>
   
   <?php
  }else{
    echo "<p style='color: white;'> <i> <b> Please recheck your rollmate's id !</b></i>  </p>";
  }
}

   ?>


</body>
</html>