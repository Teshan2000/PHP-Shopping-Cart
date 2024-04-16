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
    <div class="container">
        <h3 class="text-center">Add New Products</h3>
        <form action="/Cart.php" method="post" class="form-container mx-auto">
            <div class="form-group pb-2">
                <label class="form-label" for="id">Id</label>
                <input type="text" class="form-control" id="id" name="id" />
            </div>
            <div class="form-group pb-2">
                <label class="form-label" for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" />
            </div>
            <div class="form-group pb-2">
                <label class="form-label" for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" />
            </div>
            <div class="form-group pb-4">                                
                <label class="form-label" for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-secondary items" name="submit" style="width: 100%;">Submit</button>
        </form>
    </div>
    
</body>
</html>