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