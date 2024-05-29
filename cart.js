
let cart = [];

function addToCart(name, description, price) {
    const item = { name, description, price };
    if (!cart.find(cartItem => cartItem.name === name)) {
        cart.push(item);
        renderCart();
    }
}

function removeFromCart(name) {
    cart = cart.filter(cartItem => cartItem.name !== name);
    renderCart();
}

function calculateTotal() {
    return cart.reduce((total, cartItem) => total + cartItem.price, 0).toFixed(2);
}

function renderCart() {
    const cartContainer = document.getElementById('cart-items');
    const cartList = document.createElement('div');
    cartContainer.innerHTML = ''; // Clear the cart display
    cart.forEach(cartItem => {
        const cartItemElement = document.createElement('div');
        cartItemElement.className = 'cart-item';
        cartItemElement.innerHTML = `
            <h3>${cartItem.name}</h3>
            <p>${cartItem.description}</p>
            <p>Price: £${cartItem.price.toFixed(2)}</p>
            <button onclick="removeFromCart('${cartItem.name}')">Remove</button>
        `;
        cartList.appendChild(cartItemElement);
    });
    cartContainer.appendChild(cartList);

    // Update total price
    document.getElementById('total-price').textContent = calculateTotal();
}

function showTab(tabId) {
    // Hide all tabs
    const tabs = document.querySelectorAll('.tab');
    tabs.forEach(tab => {
        tab.classList.remove('active');
    });

    // Show the selected tab
    const activeTab = document.getElementById(tabId);
    activeTab.classList.add('active');

    // Highlight the active tab link
    const tabLinks = document.querySelectorAll('nav ul a');
    tabLinks.forEach(link => {
        if (link.getAttribute('href').substring(1) === tabId) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });
}

// Show the default tab on page load
document.addEventListener('DOMContentLoaded', () => {
    showTab('starters');
});
