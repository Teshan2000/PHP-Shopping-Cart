<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="bi bi-telephone" class="rounded-circle">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="/bootstrap.min.css">
    <title>Shopping Cart</title>
</head>
<body>
    <div class="cart shadow-sm bg-white rounded">
        <div class="header">
            <h3>Shopping Cart</h3>
            <h>3 Items</h4>
        </div>
        <hr>
        <div class="body">
        <div class="cart-items">
            <div class="img-box">
                <img src="images/coffee.jpg" height="120px">
            </div>
            <div class="about">
                <h1 class="title">Coffee</h1>
                <h3 class="subtitle">65 ml</h3>
                <h3 class="subtitle">A Black Coffee Cup</h3>
            </div>
            <div class="counter">
                <div class="btn">-</div>
                <div class="count">2</div>
                <div class="btn">+</div>
            </div>
            <div class="price">
                <div class="amount">Rs. 150</div>
                <div class="save"><u>Save For Later</u></div>
                <div class="remove"><u>Remove</u></div>
            </div>
        </div>

        <div class="cart-items">
            <div class="img-box">
                <img src="images/milk.jpg" height="120px">
            </div>
            <div class="about">
                <h1 class="title">Milk</h1>
                <h3 class="subtitle">65 ml</h3>
                <h3 class="subtitle">A pure Milk Cup</h3>
            </div>
            <div class="counter">
                <div class="btn">-</div>
                <div class="count">2</div>
                <div class="btn">+</div>
            </div>
            <div class="price">
                <div class="amount">Rs. 200</div>
                <div class="save"><u>Save For Later</u></div>
                <div class="remove"><u>Remove</u></div>
            </div>
        </div>
        </div>
    </div>
</body> 
</html>