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
                <?php 
                    include("Connect.php");

                    // Query to fetch products from the database
                    $query = "SELECT * FROM products";
                    $result = mysqli_query($conn, $query);

                    // Loop through fetched products and create product cards
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-lg-8">
                    <div class="header">
                        <h3>Shopping Cart</h3>
                        <button type="button" class="btn btn-secondary items" onclick="openForm()">Add Product &nbsp;<i class="fa-solid fa-plus"></i></button>
                    </div>
                    <hr>
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
                                            <img src="images/coffee.jpg" alt="coffee" class="rounded" width="145%">
                                        </div>                                        
                                        <div class="product-details">
                                            <h6>Black Coffee</h6>
                                            <p>A Black Coffee Cup<br>65 ml</p>
                                        </div>                          
                                    </div>           
                                </div>
                                <div class="col-lg-2">
                                    <div class="product-price">
                                        <h6>Rs. 35.00</h6>
                                    </div>                   
                                </div>
                                <div class="col-lg-2">
                                    <div class="product-quantity">
                                        <div class="buttons">
                                            <i class="fa-solid fa-minus" onclick="updateCoffeeQuantityAndTotal('remove')"></i>
                                        </div>
                                        <h6 id="coffee-amount">1</h6> 
                                        <div class="buttons">
                                            <i class="fa-solid fa-plus" onclick="updateCoffeeQuantityAndTotal('add')"></i>
                                        </div>
                                    </div>                                             
                                </div>
                                <div class="col-lg-2">
                                    <div class="product-total">
                                        <h6 id="coffee-total">Rs. 35.00</h6>
                                    </div>                   
                                </div>
                            </div>           
                        </div>
                        <div class="product-card">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="product-description">
                                        <div class="product-image">
                                            <img src="images/tea.jpg" alt="tea" class="rounded" width="145%">
                                        </div>                                        
                                        <div class="product-details">
                                            <h6>Brown Tea</h6>
                                            <p>A Brown Tea Cup<br>65 ml</p>
                                        </div>                          
                                    </div>           
                                </div>
                                <div class="col-lg-2">
                                    <div class="product-price">
                                        <h6>Rs. 25.00</h6>
                                    </div>                   
                                </div>
                                <div class="col-lg-2">
                                    <div class="product-quantity">
                                        <div class="buttons">
                                            <i class="fa-solid fa-minus" onclick="updateTeaQuantityAndTotal('remove')"></i>
                                        </div>
                                        <h6 id="tea-amount">1</h6> 
                                        <div class="buttons">
                                            <i class="fa-solid fa-plus" onclick="updateTeaQuantityAndTotal('add')"></i>
                                        </div>
                                    </div>                                             
                                </div>
                                <div class="col-lg-2">
                                    <div class="product-total">
                                        <h6 id="tea-total">Rs. 25.00</h6>
                                    </div>                   
                                </div>
                            </div>           
                        </div>
                        <div class="product-card">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="product-description">
                                        <div class="product-image">
                                            <img src="images/milk.jpg" alt="milk" class="rounded" width="145%">
                                        </div>                                        
                                        <div class="product-details">
                                            <h6>White Milk</h6>
                                            <p>A White Milk Cup<br>65 ml</p>
                                        </div>                          
                                    </div>           
                                </div>
                                <div class="col-lg-2">
                                    <div class="product-price">
                                        <h6>Rs. 45.00</h6>
                                    </div>                   
                                </div>
                                <div class="col-lg-2">
                                    <div class="product-quantity">
                                        <div class="buttons">
                                            <i class="fa-solid fa-minus" onclick="updateMilkQuantityAndTotal('remove')"></i>
                                        </div>
                                        <h6 id="milk-amount">1</h6> 
                                        <div class="buttons">
                                            <i class="fa-solid fa-plus" onclick="updateMilkQuantityAndTotal('add')"></i>
                                        </div>
                                    </div>                                     
                                </div>
                                <div class="col-lg-2">
                                    <div class="product-total">
                                        <h6 id="milk-total">Rs. 45.00</h6>
                                    </div>                   
                                </div>
                            </div>           
                        </div>
                        <div class="product-card">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="product-description">
                                    <div class="product-image">
                                        <img src="images/<?php echo $row['image']; ?>" alt="<?php echo $row['name']; ?>" class="rounded" width="145%">
                                    </div>                                        
                                    <div class="product-details">
                                        <h6><?php echo $row['name']; ?></h6>                                        
                                    </div>                          
                                </div>           
                            </div>
                            <div class="col-lg-2">
                                <div class="product-price">
                                    <h6><?php echo $row['price']; ?></h6>
                                </div>                   
                            </div>
                            <div class="col-lg-2">
                                <div class="product-quantity">
                                    <div class="buttons">
                                        <i class="fa-solid fa-minus" onclick="updateMilkQuantityAndTotal('remove')"></i>
                                    </div>
                                    <h6 id="milk-amount">1</h6> 
                                    <div class="buttons">
                                        <i class="fa-solid fa-plus" onclick="updateMilkQuantityAndTotal('add')"></i>
                                    </div>
                                </div>      
                            </div>
                            <div class="col-lg-2">
                                <div class="product-total">
                                    <h6 id="milk-total">Rs. 45.00</h6>
                                </div>  
                            </div>
                        </div>           
                    </div>
                    </div>
                </div>
                <?php } ?>
                <div class="col-lg-4 summary">
                    <div class="header">
                        <h4 class="pt-1 mx-auto">Order Summary</h4>
                    </div>
                    <hr>
                    <div class="body">
                        <div class="order-card">
                            <div class="order-amount">
                                <p class="title">Amount</p>
                                <p class="title">3 Items</p>                           
                            </div>
                            <div class="order-subtotal">
                                <h6>Sub Total</h6>
                                <h6 id="subtotal">Rs. 115.00</h6>                           
                            </div>
                            <div class="order-delivery">
                                <h6>Shipping / Delivery</h6>
                                <h6 id="deliveryPrice">Rs. 50.00</h6>                           
                            </div>
                            <div class="order-total">
                                <h6>Total Price</h6>
                                <h6 id="finaltotal">Rs. 165.00</h6>                           
                            </div>                            
                            <button type="button" class="btn btn-secondary checkout" onclick="myFunction()">Checkout</button>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
    </div> 
    <script>
        function openForm() {
            var windowFeatures = "height=500,width=1000";
            var formWindow = window.open("Item.php", "_blank", windowFeatures);
        }
        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>
      
</body> 
</html>