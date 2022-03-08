
<?php 
    include "connexion.php";
?>
<?php 
    include "Navbar.php";
?>
<?php 
     $sql = "SELECT * FROM `produit`";
     $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style-header.css">
    <title>PAGE PRINCIPALE</title>
</head>
<body>
        <div class="container">
        <img class="img-header" src="images/photo-header.png">
        <div class="centered">
            <h3 class="slogo">BE THE BEST MAN THAT YOU CAN BE</h3>
        </div>
        </div>
        <!-- <header>
            <div class="header-image-menu " >
            <img class="img-header" src="images/photo-header.png" >
            <h3 class="slogo">BE THE BEST MAN THAT YOU CAN BE</h3>
            </div>
        </header>   -->

        <legend>Free shipping worldwide</legend>

        <div class="div-category">
            <h3 class="category category1">skin care</h3>
            <h3 class="category category2">body care</h3>
            <h3 class="category category3">Beard</h3>
            <h3 class="category">Boxes</h3>
        </div>
        <div class=" produits">
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
           
            
            <div class="card">
            <div>
            <a href="item.php?id=<?php echo $row["idProduit"] ?>">
            <?php echo '<img class="card-img-top" src="'. 'images/'. $row["image"].'" alt="HTML5 Icon" style="width:100%">';?>
            <h4 ><?php echo $row["libelle"]?></h4>
            <?php
            if($row["stock"] == 0): 
            ?>
                  <p  style="color:red;"><?php echo "out of stock" ?></p>
            <?php else: ?> 
                  <p class="price"><?php echo $row["prix"]?></p>
              <?php endif ?>
            </a>
            </div>
            </div>
            
            <?php
                endwhile;
            ?>
            </div>
                

            <div class="container-fluid mt-3">
            <div class="container-fluid">
                <div class="row">
                <div class="par-details col-sm-3 col-md-6 col-lg-4  ">
                    <h2 class="titre">OUR FORMULAE</h2>
                    <p class="par1">clean <br>
                    Anti pollution <br>
                    Without controversive ingredients </p><br> <br>
                    <p class="par2">Archiman takes care of men by developing specific treatments 
                        adapted to the most demanding male skin. #ArchiSelection 
                        #ArchiBlacklist #ArchiDemanding</p>
                </div>
                <div class="div-img col-sm-9 col-md-6 col-lg-8 " style="padding-left: 0px; padding-right: 0px;">
                <img class="photo-headr" src="images/photo-headr2.jpg">

                </div>
                </div>
            </div>
            </div>

    <?php 
     include "footer.php";
    ?>  
</body>
</html>