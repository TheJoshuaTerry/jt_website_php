//Creates cookie key:value pair with expiration date
function bakeCookie(name, value, expirationDay) {
    var expiry;

    if (expirationDay) {
        var date = new Date();
        date.setTime(date.getTime() + (expirationDay * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    } else {
        expiry = "";
    }
    document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + expiry + "; path=/";
}

//Reads cookie with key
function readCookie(name) {
    var nameEQ = encodeURIComponent(name) + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ')
            c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0)
            return decodeURIComponent(c.substring(nameEQ.length, c.length));
    }
    return null;
}

//Deletes cookie
function eraseCookie(name) {
    bakeCookie(name, "", -1);
}

// function bakeCookie(){
//     document.cookie= "name=oeschger; SameSite=None; Secure";
// }

const cookieContainer = document.querySelector("#cookie-container");
const cookieButton = document.querySelector(".cookieButton");


//Listens to click, then modifies the DOM and hides it. What could that encoding be?
cookieButton.addEventListener("click", () => {
    document.getElementById("cookie-container").style.visibility = "hidden";
    bakeCookie("CKI", "SSB3aG9sZWhlYXJ0ZWRseSB3ZWxjb21lIHlvdSBvbiBteSB3ZWJzaXRlLCBob3BlIHlvdSBoYXZlIGEgd29uZGVyZnVsIGRheSE=", 1);
  });

//Sets timer, so that the cookie will not immediately load to site, but after 1.75 seconds, its more pleasant and professional feeling that way, i think.
setTimeout(() => {
    if(!readCookie("CKI")) {
        document.getElementById("cookie-container").style.visibility = "visible";
    }
}, 1750);

