var coffeePrice = 35.00;
var teaPrice = 25.00;
var milkPrice = 45.00;

var coffeeQuantity = 1;
var teaQuantity = 1;
var milkQuantity = 1;

var deliveryPrice = 50.00;

function updateCoffeeQuantityAndTotal(action) {
    if(action === 'add') {
        coffeeQuantity++;
    }
    else if(action === 'remove' && coffeeQuantity > 1) {
        coffeeQuantity--;
    }
    updateTotal('coffee');
    updateSubTotal();
    updateFinalTotal();
}

function updateTeaQuantityAndTotal(action) {
    if(action === 'add') {
        teaQuantity++;
    }
    else if(action === 'remove' && teaQuantity > 1) {
        teaQuantity--;
    }
    updateTotal('tea');
    updateSubTotal();
    updateFinalTotal();
}

function updateMilkQuantityAndTotal(action) {
    if(action === 'add') {
        milkQuantity++;
    }
    else if(action === 'remove' && milkQuantity > 1) {
        milkQuantity--;
    }
    updateTotal('milk');
    updateSubTotal();
    updateFinalTotal();
}

function updateTotal(product) {
    var total = 0;
    var quantity = 0;

    if(product === "coffee") {
        total = coffeePrice * coffeeQuantity;
        quantity = coffeeQuantity;
    }
    else if(product === 'tea') {
        total = teaPrice * teaQuantity;
        quantity = teaQuantity;
    }
    else if(product === 'milk') {
        total = milkPrice * milkQuantity;
        quantity = milkQuantity;
    }

    document.getElementById(product + '-amount').innerHTML = quantity;
    document.getElementById(product + '-total').innerHTML = "Rs. " + total.toFixed(2);
}

function updateSubTotal() {
    var subtotal = coffeePrice * coffeeQuantity + teaPrice * teaQuantity + milkPrice * milkQuantity;
    document.getElementById('subtotal').innerHTML = "Rs. " + subtotal.toFixed(2);
}

function updateFinalTotal() {
    var subtotal = coffeePrice * coffeeQuantity + teaPrice * teaQuantity + milkPrice * milkQuantity;
    var finaltotal = subtotal + deliveryPrice;
    document.getElementById('finaltotal').innerHTML = "Rs. " + finaltotal.toFixed(2);
}