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