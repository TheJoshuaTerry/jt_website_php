
//function, that loads in register panel via vanilla JS AJAX

function loadRegister() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("fullPanel").innerHTML = this.responseText;
        }
    xhttp.open("GET", "account/reg.php", true);
    xhttp.send();
}

//function, that loads in login panel via vanilla JS AJAX

function loadLogin() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
        document.getElementById("fullPanel").innerHTML = this.responseText;
    }
    xhttp.open("GET", "account/log.php", true);
    xhttp.send();
}