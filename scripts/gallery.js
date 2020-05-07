$(document).ready(function(){
    var image = document.getElementById('splashimg');
    var revealer = document.getElementById("revealer");
    new simpleParallax(image);
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none",
        padding:0, margin:0,

        beforeShow: function () {
        $("body *:not(.fancybox-overlay, .fancybox-overlay *)").addClass("blur");
        },
        afterClose: function () {
            $("body *:not(.fancybox-overlay, .fancybox-overlay *)").removeClass("blur");
        }
    });

    if (revealer){
        revealer.addEventListener("click", function(){
            $(".hide").removeClass("hide");
            $("#revealerDiv").hide();
        });
    }
});
