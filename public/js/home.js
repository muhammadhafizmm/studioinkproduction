// scroll-up animation in home
const arrow = document.querySelector(".scroll-up");
const client = document.querySelector(".client");

const clientOptions = {
    rootMargin: "-480px 0px 0px 0px"
};

const clientObsever = new IntersectionObserver(function(
    entries, 
    clientObsever
    ) {
        entries.forEach(entry => {
            if(!entry.isIntersecting){
                arrow.classList.add("active");
            } else{
                arrow.classList.remove("active")
            }
        })
    }, clientOptions);

clientObsever.observe(client);

// porto animation in home

function portoHover(j){
    var overlay = document.getElementsByClassName("overlay");
    for (var i = 0; i < overlay.length; i++){
        overlay[i].classList.add("active");
    }
    overlay[j].classList.remove("active");
}
function portoOut(j){
    var overlay = document.getElementsByClassName("overlay");
    for (var i = 0; i < overlay.length; i++){
        overlay[i].classList.remove("active");
    }
}
// client js
// client atas
$(document).ready(function(){
    var clientGallery1 = $("#gallery1 div").length;
    var totalDivWidth = 0;
    for (var i=0; i<clientGallery1; i++){
        var divWidth = $("#gallery1 div").eq(1).outerWidth(true);
        totalDivWidth = totalDivWidth + divWidth;
    }
    $("#gallery1").css('width', totalDivWidth+'px');
    var speed;
    function mediaQuery(x){
        if (x.matches){
            return speed = .5;
        }
        else{
            return speed = 1.2;
        }
    }
    var deviceWidth = window.matchMedia("(max-width: 600px)");
    mediaQuery(deviceWidth);
    deviceWidth.addListener(mediaQuery);
    animateDiv();

    function animateDiv(){
        $("#gallery1 div").eq(0).animate({
            'marginLeft':'-='+speed+'px'
        },1,function(){
            var animateGalleryWidth = $(this).outerWidth(true);

            if(speed >= animateGalleryWidth){
                $(this).parent().append($(this));
                $(this).removeAttr('style');
            }
            animInterval = setTimeout(function(){
                animateDiv();
            });
        });
    }
})

// client bawah
$(document).ready(function(){
    var clientGallery1 = $("#gallery2 div").length;
    var totalDivWidth = 0;
    for (var i=0; i<clientGallery1; i++){
        var divWidth = $("#gallery2 div").eq(1).outerWidth(true);
        totalDivWidth = totalDivWidth + divWidth;
    }
    $("#gallery2").css('width', totalDivWidth+'px');
    var speed;
    function mediaQuery(x){
        if (x.matches){
            return speed = .5;
        }
        else{
            return speed = 1.2;
        }
    }
    var deviceWidth = window.matchMedia("(max-width: 600px)");
    mediaQuery(deviceWidth);
    deviceWidth.addListener(mediaQuery);
    animateDiv();

    function animateDiv(){
        $("#gallery2 div").eq(0).animate({
            'marginRight':'-='+speed+'px'
        },1,function(){
            var animateGalleryWidth = $(this).outerWidth(true);

            if(speed >= animateGalleryWidth){
                $(this).parent().append($(this));
                $(this).removeAttr('style');
            }
            animInterval = setTimeout(function(){
                animateDiv();
            });
        });
    }
})