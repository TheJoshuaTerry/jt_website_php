//Listens to click in the DOM in vanilla JS and then loads new page in
const openAbout = document.querySelector(".clickmeButton");
openAbout.addEventListener("click", () => {

    document.location = "about.php";

})