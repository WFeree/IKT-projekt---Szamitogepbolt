let CompareBtn = document.getElementById("compare")
let Cards = document.getElementsByClassName("card")
let Checkboxes = document.getElementsByClassName("checkbox")

CompareBtn.addEventListener("click", ()=>{
    for (let checkbox of Checkboxes) {
        checkbox.style.display = (checkbox.style.display === "block" || checkbox.style.display === "") ? "none" : "block";
    }
});

function expandClick(ele){
    ele.nextElementSibling.classList.remove("hidden")
    ele.classList.add("hidden")
}
function select(name, brand, rating, price, category){
    obj = {
        "name": name,
        "brand": brand,
        "rating": rating,
        "price": price,
        "category": category,
        "activated": true
    }
    let data = JSON.parse(localStorage.getItem("data") || "[]");
    data.push(obj)
    localStorage.data = JSON.stringify(data)
    location.href = "/"
}

//

document.addEventListener("DOMContentLoaded", () => {
    const checkboxes = document.querySelectorAll('.checkbox');
    const compareBar = document.getElementById('compare-bar');
    const compareList = document.getElementById('compare-list');

    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener('change', () => {
            const name = checkbox.getAttribute('data-name');
            const brand = checkbox.getAttribute('data-brand');
            const price = checkbox.getAttribute('data-price');
            const category = checkbox.getAttribute('data-category');

            if (checkbox.checked) {
                const listItem = document.createElement('li');
                listItem.textContent = `${brand} ${name} - ${price} Ft [${category}]`;
                listItem.dataset.name = name; // Ez az azonosításhoz szükséges
                compareList.appendChild(listItem);
            }
            else {
                // Elem eltávolítása
                const listItem = compareList.querySelector(`[data-name="${name}"]`);
                if (listItem) listItem.remove();
            }
            if (!checkbox.checked) {
                const listItem = compareList.querySelector(`[data-name="${name}"]`);
                if (listItem) {
                    listItem.remove();
                }
            }

            // Az alsó sáv megjelenítése/elrejtése
            if (compareList.children.length > 0) {
                compareBar.style.display = 'block';
            } else {
                compareBar.style.display = 'none';
            }
        });
    });
});