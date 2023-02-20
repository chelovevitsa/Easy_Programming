let cart = [];

function addToCart(productId) {
  cart.push(productId);
  updateCartTotal();
  console.log(cart)
}

function updateCartTotal() {
    let cartTotal = 0;
    for (const element of cart) {
      cartTotal+=Number(element);
    }
    document.getElementById("total").innerHTML = cartTotal;
  }