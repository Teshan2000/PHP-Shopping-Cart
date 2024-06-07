function openForm() {
    var windowFeatures = "height=500,width=1000";
    var formWindow = window.open("Item.php", "_blank", windowFeatures);
}
function closeForm() {
    document.getElementById("myForm").style.display = "none";
}
function updateQuantityAndTotal(action, productId) {
    var quantityElement = document.getElementById('quantity-' + productId);
    var priceElement = document.getElementById('price-' + productId);
    var totalElement = document.getElementById('total-' + productId);

    var quantity = parseInt(quantityElement.innerText);
    var price = parseFloat(priceElement.innerText.replace('Rs. ', ''));
    var total = parseFloat(totalElement.innerText.replace('Rs. ', ''));

    if (action === 'add') {
        quantity++;
    } else if (action === 'remove' && quantity > 1) {
        quantity--;
    }

    total = quantity * price;
    quantityElement.innerText = quantity;
    totalElement.innerText = 'Rs. ' + total.toFixed(2);

    updateOrderSummary();
}

function updateOrderSummary() {
    var productTotals = document.querySelectorAll('.product-total h6');
    var subtotal = 0;
    var totalItems = 0;

    productTotals.forEach(function(totalElement) {
        var total = parseFloat(totalElement.innerText.replace('Rs. ', ''));
        subtotal += total;
        totalItems++;
    });

    var deliveryPrice = parseFloat(document.getElementById('deliveryPrice').innerText.replace('Rs. ', ''));
    var finalTotal = subtotal + deliveryPrice;

    document.getElementById('subtotal').innerText = 'Rs. ' + subtotal.toFixed(2);
    document.getElementById('finaltotal').innerText = 'Rs. ' + finalTotal.toFixed(2);
    document.getElementById('total-items').innerText = totalItems + ' Items';
}