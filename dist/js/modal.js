var modal = document.getElementById("formtrans");
var btn = document.getElementById("newtrans");
var close = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    modal.style.display = "block";
}

close.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function() {
    if(event.target == modal) {
        modal.style.display = "none";
    }
}