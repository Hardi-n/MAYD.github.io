function addproduct() {
    document.getElementById("addproduct").style.display = "block";
    document.getElementById("viewproduct").style.display = "none";
    document.getElementById("orderlist").style.display = "none";
    document.getElementById("enquerylist").style.display = "none";
    document.getElementById("registereduser").style.display = "none";
    document.getElementById("addproduct_div").style.display = "block";
}
function viewproduct() {
    document.getElementById("addproduct_div").style.display = "none";
    document.getElementById("addproduct").style.display = "none";
    document.getElementById("viewproduct").style.display = "block";
    document.getElementById("orderlist").style.display = "none";
    document.getElementById("enquerylist").style.display = "none";
    document.getElementById("registereduser").style.display = "none";
}
function orderlist() {
    document.getElementById("addproduct_div").style.display = "none";
    document.getElementById("orderlist").style.display = "block";
    document.getElementById("viewproduct").style.display = "none";
    document.getElementById("addproduct").style.display = "none";
    document.getElementById("enquerylist").style.display = "none";
    document.getElementById("registereduser").style.display = "none";
}
function enquerylist() {
    document.getElementById("addproduct_div").style.display = "none";
    document.getElementById("enquerylist").style.display = "block";
    document.getElementById("addproduct").style.display = "none";
    document.getElementById("viewproduct").style.display = "none";
    document.getElementById("orderlist").style.display = "none";
    document.getElementById("registereduser").style.display = "none";
}
function registereduser() {
    document.getElementById("addproduct_div").style.display = "none";
    document.getElementById("registereduser").style.display = "block";
    document.getElementById("enquerylist").style.display = "none";
    document.getElementById("addproduct").style.display = "none";
    document.getElementById("viewproduct").style.display = "none";
    document.getElementById("orderlist").style.display = "none";
}