<?php 
    include "connexion.php";
    include 'Navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style-checkout.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <title>Checkout Page</title>
</head>

<body>
    
    <main class="container">
        <div class="Left_column ">
            <label class="title">Customer & Shipping Information</label>
            <form class="cart_form" method='post' action=''>
                <label class="label" for="">First Name</label>
                <input class="form-control form-control disabling_btn_js" onClick="disabled_inputs()" value="<?php ?>"
                    type="text" />
                <label class="label" for="">Last Name</label>
                <input class="form-control form-control disabling_btn_js" onClick="disabled_inputs()" value="<?php ?>"
                    type="text" />
                <label class="label" for="">Email</label>
                <input class="form-control form-control disabling_btn_js" onClick="disabled_inputs()" value="<?php ?>"
                    type="text" />
                <label class="label" for="">Phone Number</label>
                <input class="form-control form-control disabling_btn_js" onClick="disabled_inputs()" value="<?php ?>"
                    type="text" />
                <label class="label" for="">Shipping Address</label>
                <input class="form-control form-control pre_btn_mgn" type="text" value="<?php ?>"/>
                <input class="" name="checkout_btn" id="checkout_btn" type="submit" value="Checkout" />
            </form>
        </div>
        <div class="Right_column">
            <div class="reiterated ">
                <div class="right_list">
                    <img class="product-on-cart" src="pat.jpg" alt="" />
                    <h6>ANTI-AGING AND MOISTURIZING FACE CREAM</h6>
                    <div class="product_price_and_value">
                        <tr>
                            <td>
                                <p class="product_price">Price</p>
                            </td>
                            <td></td>
                            <td></td>
                            <td>
                                <p class="product_price_value">Value</p>
                            </td>
                        </tr>
                    </div>
                    <!-- Quantity button -->
                    <div class="quantity_label_and_button">
                        <label id="select_quantity" for="">SELECT QUANTITY</label>
                        <div class="quantity_container">
                            <input id="decrement"type="button" class="quantity" onclick='disabled_quantity()' value="-" />
                            <input type="text" name="quantity" value="1" size="1" onclick='disabled_quantity()'class="quantity" />
                            <input id="increment"type="button" class="quantity" onclick='disabled_quantity()' value="+" />
                        </div>
                    </div>
                    <!--  -->
                    <br>
                    <br>
                    <hr class="demarcation">
                    <div class="subtotal_price_and_value">
                        <tr>
                            <td>
                                <p class="subtotal_price">Subtotal Price</p>
                            </td>
                            <td></td>
                            <td></td>
                            <td>
                                <p class="subtotal_value">value</p>
                            </td>
                        </tr>
                    </div>
                </div>
                <br>
                <hr class="demarcation">
            </div>

            <div class="total_value ">
                <tr><p class="total"> Total </p><tr>
                <td></td>
                <tr>><p class="value"> Value </p></tr>                
            </div>
        </div>
    </main>
    <?php include 'footer.php'?>
    <script src="script.js"></script>
</body>

</html>