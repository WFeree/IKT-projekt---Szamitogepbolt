// A következő 8 object az emberiség legszégyenteljesebb adattárolási módja de túl fáradt vagyok és túl este van hogy jobbra csináljam :p

let data = [
    Motherboard = {
        parentId: "0",
        name: "",
        brand: "",
        rating: "",
        price: ""
    },
    Processor = {
        parentId: "1",
        name: "",
        brand: "",
        rating: "",
        price: ""
    },
    Memory = {
        parentId: "2",
        name: "",
        brand: "",
        rating: "",
        price: ""
    },
    Graphics = {
        parentId: "3",
        name: "",
        brand: "",
        rating: "",
        price: ""
    },
    HDD = {
        parentId: "4",
        name: "",
        brand: "",
        rating: "",
        price: ""
    },
    Monitor = {
        parentId: "5",
        name: "",
        brand: "",
        rating: "",
        price: ""
    },
    Mouse = {
        parentId: "6",
        name: "",
        brand: "",
        rating: "",
        price: ""
    },
    Keyboard = {
        parentId: "7",
        name: "",
        brand: "",
        rating: "",
        price: ""
    }
]




const cartIcon = document.querySelector('.cart-icon');
const cartCount = document.querySelector('.cart-num');
const overlay = document.querySelector('.cart-overlay');
const shadow = document.querySelector('.cart-shadow-overlay')
let cartItems = [];

function toggleOverlay() {
    cartIcon.classList.toggle('active');
    overlay.classList.toggle('active');
    shadow.classList.toggle("active")
}

function addToCart(itemName, itemPrice, itemImg) {

    const existingItem = cartItems.find(item => item.name === itemName);

    if (existingItem) {
        existingItem.quantity += 1;
    } else {

        cartItems.push({
            name: itemName,
            price: itemPrice,
            img: itemImg,
            quantity: 1
        });
    }

    updateCartOverlay();
    updateCartCount();
}

function updateCartCount() {
    const totalItems = cartItems.reduce((sum, item) => sum + item.quantity, 0);
    cartCount.textContent = totalItems;
}

function updateCartOverlay() {
    overlay.innerHTML = '';

    cartItems.forEach(item => {
        const cartItem = document.createElement('div');
        cartItem.classList.add('item');

        cartItem.innerHTML = `
            <img src="${item.img}" class="cart-img">
            <div class="cart-details">
                <h2><span class="cart-name">${item.name}</span> <span class="cart-amount">x ${item.quantity}</span></h2>
                <p><span class="cart-price">${(item.price * item.quantity).toFixed(2)}</span> $</p>
            </div>
        `;

        overlay.appendChild(cartItem);
    });
}

const essential = document.querySelector(".essential")
const other = document.querySelector(".other")
const tabs = document.querySelectorAll(".tab")
const necessary = document.querySelector(".necessary")
const optional = document.querySelector(".optional")


tabs.forEach(tab => {
    tab.addEventListener("click", () => {
        if (essential.classList.contains("active")) {
            essential.classList.remove("active")
            other.classList.add("active")
            necessary.classList.remove("active-items")
            optional.classList.add("active-items")
        }
        else{
            other.classList.remove("active")
            essential.classList.add("active")
            optional.classList.remove("active-items")
            necessary.classList.add("active-items")
        }
    })
});

const addPartBtns = document.querySelectorAll("#add-part")

addPartBtns.forEach(btn => {
    btn.addEventListener("click", () =>{
        let selectedClass = btn.textContent.split(" ")[2]
        console.log(selectedClass)
        let selectedClassParts = document.querySelector(`.${selectedClass}`)

        selectedClassParts.classList.add("active")
        btn.classList.add("hidden")
    })
});


// Megváltás Történt (Működik a kódom)

function deleteActive(element) {
    let fullParent = element.parentElement.parentElement.parentElement
    console.log(element.parentElement.parentElement.parentElement)
    fullParent.classList.remove("active")
    for (let i = 0; i < data.length; i++) {
        if (fullParent.classList.contains(data[i].parentId)) {
            data[i].price = fullParent.querySelector(".prod-price").innerText
            
            data[i].brand = fullParent.querySelector(".brand").innerText

            data[i].name = fullParent.querySelector(".prod-name").innerText

            data[i].rating = fullParent.querySelector(".review").children.length
        }
        
    }
}