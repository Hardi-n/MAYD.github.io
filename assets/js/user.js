function cart() {
    document.getElementById("cart").style.display = "block";
    document.getElementById("orderhistory").style.display = "none";
    document.getElementById("profile_div").style.display = "none";
}
function orderhistory() {
    document.getElementById("orderhistory").style.display = "block";
    document.getElementById("cart").style.display = "none";
    document.getElementById("profile_div").style.display = "none";
}
function profile() {
    document.getElementById("profile_div").style.display = "block";
    document.getElementById("orderhistory").style.display = "none";
    document.getElementById("cart").style.display = "none";
}