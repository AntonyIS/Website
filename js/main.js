$(document).ready(function () {
    $("#latestTech").mouseenter(function(){
        $("#touch2").show(1000);
        $("#touch3").show(3000);
    });
    $("#latestTech").mouseleave(function(){
        $("#touch2").hide(1000);
        $("#touch3").hide(3000);
    });

    $("#latestTech").mouseenter(function(){
        $("#touch1").hide(1000);
        $("#touch4").hide(3000);
    });
    $("#latestTech").mouseleave(function(){
        $("#touch1").show(1000);
        $("#touch4").show(3000);
    });


    $("#py").mouseenter(function(){
        $("#py_").show(1000);
    });

    $("#py").mouseleave(function(){
        $("#py_").hide(2000);
    });

    $("#js").mouseenter(function(){
        $("#js_").show(1000);
    });

    $("#js").mouseleave(function(){
        $("#js_").hide(2000);
    });


    $("#jv").mouseleave(function(){
        $("#jv_").hide(2000);
    });
    $("#jv").mouseleave(function(){
        $("#jv_").hide(2000);
    });
    $("#php").mouseleave(function(){
        $("#php_").hide(2000);
    });
    $("#php").mouseleave(function(){
        $("#php_").hide(2000);
    });

    $(".card-img").mouseenter(function(){
        $(this).css({
            "height": "200",
            "width":"330",
            "filter":"blur(0.5px)"
        });

    });

    $(".card-img").mouseleave(function(){
        $(this).css({
            "height":"218",
            "width":"340",
            "filter":"blur(0px)"
        });
    });
    $('#rule').mouseenter(function () {
        $('$contact').show()
    });
    $('#rule').mouseleave(function () {
        $('$contact').hide()
    });





});
// floating button
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}