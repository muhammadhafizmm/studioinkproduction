const html = document.querySelector("html");
const popUp = document.querySelector(".popUp");
const popUpObject = document.querySelectorAll(".popUp .object");
const iframe = document.querySelectorAll("iframe")

function popingUp(j) {
    popUp.style.display = "flex";
    html.classList.add("overflow-none");
    for (let i = 0; i < popUpObject.length; i++) {
        popUpObject[i].style.display = "none";
    }
    popUpObject[j].style.display = "flex";
}
function popingGone() {
    popUp.style.display = "none";
    html.classList.remove("overflow-none");
    for (let i = 0; i < popUpObject.length; i++) {
    popUpObject[i].style.display = "none";
    }
}
function pause() {
    for (let i = 0; i < iframe.length; i++) {
        const iframeSrc = iframe[i].src;
        iframe[i].src = iframeSrc;
    }
}