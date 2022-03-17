<?php 
          include "connexion.php";
          include 'Navbar.php';

          error_reporting(0);

          if(isset($_POST['submit']))
          {
                  $First_Name= $_POST['First_Name'];
                  $Last_Name= $_POST['Last_Name'];
                  $Adresse= $_POST['Adresse'];
                  $Phone= $_POST['Phone'];
                  $email= $_POST['email'];
                  $pswd= md5($_POST['pswd']);
                  $cpswd= md5($_POST['cpswd']);
                  
                  if($pswd==$cpswd)
                  {
                      $sql="SELECT * FROM client WHERE email='$email'";
                      $res= mysqli_query($conn, $sql);
                      $result = $res->fetch_assoc();
                    //   echo $sql ."<br>". $result["idClient"];
                      if(empty($result))
                        {
                          $sql="INSERT INTO client(nom ,prenom ,adresse ,telephone ,email ,pass)
                               VALUES('$First_Name','$Last_Name','$Adresse','$Phone','$email','$pswd')";
                          $result = mysqli_query($conn, $sql);
                          if($result)
                            {
                            //   echo"<script> alert (WAW')</script>";
                              $First_Name="";
                              $Last_Name="";
                              $Adresse="";
                              $Phone="";
                              $email="";
                              $_POST['pswd']="";
                              $_POST['cpswd']="";
                            }
                            else{
                              echo"<script> alert (OOOPS ')</script>";
                            }
                        }
                      else{
                        echo"<script> alert ('email invalid ')</script>";
                      }
                  }
                  else
                  {
                    echo"<script> alert ('Passowrd Not Matchind ')</script>";
                  }
                      
          }
      ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="style.css">   
        <link rel="stylesheet" href="style-sign-up.css">

    <title>Register</title>
</head>

<body>
    
    <div class="container">
        <h3 id="h3">Create Account</h3>
        <form class="register_form" method="post" action="">
            <label for="">First Name</label>
            <input class="form-control form-control" type="text" id="First_Name" placeholder="Enter First Name" name="First_Name">
            <label for="">Last Name</label>
            <input class="form-control form-control " type="text" id="Last_Name" placeholder="Enter Last Name" name="Last_Name">
            <label for="">Address</label>
            <input class="form-control form-control"  type="text"  id="Adresse" placeholder="Enter Adresse" name="Adresse">
            <label for="">Phone Number</label>
            <input class="form-control form-control" type="text"  id="Phone" placeholder="Enter Number Phone" name="Phone">
            <label for="">Email</label>
            <input class="form-control form-control" type="text" id="email" placeholder="Enter email" name="email">
            <label for="">Password</label>
            <input class="form-control form-control " type="password" id="pwd" placeholder="Enter password" name="pswd">
            <label for="">Confirmer Password</label>
            <input class="form-control form-control " type="password"  id="cpwd" placeholder="Confirmer password" name="cpswd">
            <button type="submit" name="submit" class="btn btn-primary" style="MARGIN-LEFT: 39%;WIDTH: 30%;">Submit</button>

        </form>
    </div>
    <?php include 'footer.php'?>

</body>

</html>        
    <!-- <input id="Register_btn" type="button" value="Register"> -->
