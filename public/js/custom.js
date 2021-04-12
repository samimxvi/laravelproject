if (document.readyState == "loading") {
    document.addEventListener("DOMContentLoaded", ready);
} else {
    ready();
}

function ready() {
    var quantityInputs = document.getElementsByClassName("cart-item-quantity");

    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i];

        input.addEventListener("change", quantityChanged);
    }
}

function quantityChanged(event) {
    var input = event.target;
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1;
    }

    updateCartTotal();
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName("cart-items")[0];
    var cartRows = cartItemContainer.getElementsByClassName("cart");
    var fullPrice = 0;
    var total = 0;

    for (var i = 0; i < cartRows.length; i++) {
        var cart = cartRows[i];
        var priceElement = cart.getElementsByClassName("price")[0];
        var quantityElement = cart.getElementsByClassName(
            "cart-item-quantity"
        )[0];

        var price = parseFloat(priceElement.innerText);
        var quantity = parseInt(quantityElement.value);

        fullPrice = price * quantity;
        total = total + fullPrice;

        fullPrice = (Math.round(fullPrice * 100) / 100).toFixed(2);
        document.getElementsByClassName("full-price")[i].innerText =
            fullPrice + " EUR";
    }

    total = (Math.round(total * 100) / 100).toFixed(2);
    document.getElementById("total").innerText = total + " EUR";
    document.getElementById("inputTotal").value = total;
}
