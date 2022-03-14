<?php 
    include 'Navbar.php';
    include "connexion.php";
    session_start();
    if(isset($_POST['submit']))
    {
           
            $email= $_POST['email'];
            $pswd= md5($_POST['pswd']);
        
                $sql="SELECT * FROM client WHERE email='$email' AND pass='$pswd' ";
                $res= mysqli_query($conn, $sql);
                $result = $res->fetch_assoc();
                    //   echo $sql ."<br>". $result["idClient"];
                if(!empty($result))
                  {
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['First_Name']=$row['First_Name'];
                   header("location : PAGE_PRINCIPALE.php");
                  }
                else
                {
                  echo"<script> alert ('email invalid or passowrd ')</script>";
                }
    }
            else
            {
              echo"<script> alert ('Passowrd Not Matchind ')</script>";
            }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link rel="stylesheet" href="style-sign-in.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Authentication</title>
</head>

<body>
    
    <div class="container">
        <h5 id="h5">Good to see you again!</h5>
        <h3 id="h3">Sign In</h3>
        <form method="post" action="">
            <input class="form-control form-control email" placeholder=" Email Address" type="text" id="email" placeholder="Enter email">
            <input class="form-control form-control password" placeholder=" Password" type="password" id="pwd" placeholder="Enter password">
            <!-- <input id="Sign_In_btn" type="button" value="Sign In"> -->
            <button type="submit" name="submit" id="Sign_In_btn" class="btn btn-primary">LOGIN</button>

        </form>
        <p id="p">Don't have an account?</p>
        <a id="a" href="register_form.php">Create Account</a>
    </div>
    <?php include 'footer.php'?>

</body>

</html>