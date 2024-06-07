<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="bi bi-telephone" class="rounded-circle">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="scripts/quantity.js"></script>
    <title>Shopping Cart</title>
</head>
<body>
    <div class="cart">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="header">
                        <h3>Shopping Cart</h3>
                        <button type="button" class="btn btn-secondary items" onclick="openForm()">Add Product &nbsp;<i class="fa-solid fa-plus"></i></button>
                    </div>
                    <hr>
                    <?php 
                        include("Connect.php");

                        $query = "SELECT * FROM products";
                        $result = mysqli_query($conn, $query);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['Id'];
                                $name = $row['Name'];
                                $description = $row['Description'];
                                $price = $row['Price'];
                                $image = $row['Image'];
                    ?>
                    <div class="body">
                        <div class="product-title">
                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="title">Product Details</p>
                                </div>
                                <div class="col-lg-2">
                                    <p class="title">Price</p>
                                </div>
                                <div class="col-lg-2">
                                    <p class="title">Quantity</p>
                                </div>
                                <div class="col-lg-2">
                                    <p class="title">Total</p>
                                </div>
                            </div>
                        </div>                        
                        <div class="product-card">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="product-description">
                                        <div class="product-image">
                                            <img src="images/<?php echo $image;?>" alt="<?php echo $name;?>" class="rounded" width="145%">
                                        </div>                                        
                                        <div class="product-details">
                                            <h6><?php echo $name; ?></h6>     
                                            <p><?php echo $description; ?></p>                                        
                                        </div>                          
                                    </div>           
                                </div>
                                <div class="col-lg-2">
                                    <div class="product-price">
                                        <h6 id="price-<?php echo $id;?>">Rs. <?php echo number_format($price, 2);?></h6>
                                    </div>                   
                                </div>
                                <div class="col-lg-2">
                                    <div class="product-quantity">
                                        <div class="buttons">
                                            <i class="fa-solid fa-minus" onclick="updateQuantityAndTotal('remove', <?php echo $id; ?>)"></i>
                                        </div>
                                        <h6 id="quantity-<?php echo $id; ?>">1</h6> 
                                        <div class="buttons">
                                            <i class="fa-solid fa-plus" onclick="updateQuantityAndTotal('add', <?php echo $id; ?>)"></i>
                                        </div>
                                    </div>      
                                </div>
                                <div class="col-lg-2">
                                    <div class="product-total">
                                        <h6 id="total-<?php echo $id; ?>">Rs. <?php echo number_format($price, 2); ?></h6>
                                    </div>  
                                </div>
                            </div>           
                        </div>
                    </div>
                    <?php 
                            } 
                        } else { 
                    ?>
                    <div class="body">
                        <div class="empty-cart px-5">
                            <p>Your cart is currently empty. Add products to your cart to see them here.</p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-lg-4 summary">
                    <div class="header">
                        <h4 class="pt-1 mx-auto">Order Summary</h4>
                    </div>
                    <hr>
                    <div class="body">
                        <div class="order-card">
                            <div class="order-amount">
                                <p class="title">Amount</p>
                                <p class="title" id="total-items">0 Items</p>                           
                            </div>
                            <div class="order-subtotal">
                                <h6>Sub Total</h6>
                                <h6 id="subtotal">Rs. 0.00</h6>                           
                            </div>
                            <div class="order-delivery">
                                <h6>Shipping / Delivery</h6>
                                <h6 id="deliveryPrice">Rs. 50.00</h6>                           
                            </div>
                            <div class="order-total">
                                <h6>Total Price</h6>
                                <h6 id="finaltotal">Rs. 50.00</h6>                           
                            </div>                            
                            <button type="button" class="btn btn-secondary checkout" onclick="myFunction()">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
    </div> 
</body> 
</html>
