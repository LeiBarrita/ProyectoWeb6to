$(document).ready(function(){

    $(".placeholder-box").mouseenter(function(){
        $(this).addClass("bgcolorpvr");
    });
    $(".placeholder-box").mouseleave(function(){
        $(this).removeClass("bgcolorpvr");
    });

    $(".delete-btn").click(function(){
        window.location.href = "index.html";
    });
});