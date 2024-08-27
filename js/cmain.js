document.getElementById('wishlist-icon').addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('wishlist-popup').style.display = 'block';
    document.getElementById('cart-popup').style.display = 'none'; // Hide cart popup
});

document.getElementById('cart-icon').addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('cart-popup').style.display = 'block';
    document.getElementById('wishlist-popup').style.display = 'none'; // Hide wishlist popup
});

window.addEventListener('click', function(e) {
    if (!e.target.closest('.humberger__menu__cart')) {
        document.getElementById('wishlist-popup').style.display = 'none';
        document.getElementById('cart-popup').style.display = 'none';
    }
});
