//navbar function
function tooglebtn1() {
    const btn = document.getElementById("mobile-menu-button");
    const nav = document.getElementById("navbar");
    const ops = document.getElementById("select");
    btn.classList.toggle("active");
    ops.classList.toggle("active");
    nav.classList.toggle("active");
 };
// adjust height container gallery
const containerGallery = document.getElementById("containerGal");
const gallery = document.getElementsByClassName("gallery");
containerGallery.style.height = gallery[0].offsetHeight.toString() + "px";

//selector function
function tooglebtn2(j){
    const div = document.getElementsByClassName('selector');
    const opsi = document.getElementsByClassName('opsi');
    const line = document.getElementsByClassName('line');
    const containerGallery = document.getElementById("containerGal");
    const gallery = document.getElementsByClassName("gallery");

    for (let i = 0; i < opsi.length; i++){
        div[i].classList.remove('active')
        opsi[i].classList.remove('active');
        line[i].classList.remove('active');
    }
    div[j].classList.add('active');
    opsi[j].classList.add('active');
    line[j].classList.add('active');
    containerGallery.classList.toggle('active');
    containerGallery.style.height = gallery[j].offsetHeight.toString() + "px";
}
function lineover(j){
    const line = document.getElementsByClassName("nav-line");
    const sel = document.getElementsByClassName("nav-select");
        line[j].classList.add("active");
        sel[j].classList.add("active");
};
function lineout(j){
    const line = document.getElementsByClassName("nav-line");
    const sel = document.getElementsByClassName("nav-select");
        line[j].classList.remove("active");
        sel[j].classList.remove("active");
}