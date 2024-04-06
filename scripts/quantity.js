var coffeePrice = 35.00;
var teaPrice = 25.00;
var milkPrice = 45.00;
var quantity = 1;

function minusFunction() {
    if (quantity > 1) {
        quantity--;
        updateQuantityAndTotal();
    }
}

function plusFunction() {
    quantity++;
    updateQuantityAndTotal();
}

function updateQuantityAndTotal() {
    var total = coffeePrice * quantity;
    var total = teaPrice * quantity;
    var total = milkPrice * quantity;
    document.getElementById('amount').innerHTML = quantity;
    document.getElementById('total').innerHTML = "Rs. " + total.toFixed(2);
}
