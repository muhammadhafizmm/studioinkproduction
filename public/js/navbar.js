//navbar function
function tooglebtn1() {
    var btn = document.getElementById("mobile-menu-button");
    var nav = document.getElementById("navbar");
    var ops = document.getElementById("select");
    btn.classList.toggle("active");
    ops.classList.toggle("active");
    nav.classList.toggle("active");
 };
 //selector function
 function tooglebtn2(j){
    var div = document.getElementsByClassName('selector');
    var opsi = document.getElementsByClassName('opsi');
    var line = document.getElementsByClassName('line');
    var gallery = document.getElementById("containerGal");

    for (var i = 0; i < opsi.length; i++){
        div[i].classList.remove('active')
        opsi[i].classList.remove('active');
        line[i].classList.remove('active');
    }
    div[j].classList.add('active');
    opsi[j].classList.add('active');
    line[j].classList.add('active');
    gallery.classList.toggle('active');
}
 function lineover(j){
     var line = document.getElementsByClassName("nav-line");
     var sel = document.getElementsByClassName("nav-select");
         line[j].classList.add("active");
         sel[j].classList.add("active");
 };
 function lineout(j){
     var line = document.getElementsByClassName("nav-line");
     var sel = document.getElementsByClassName("nav-select");
         line[j].classList.remove("active");
         sel[j].classList.remove("active");
 }