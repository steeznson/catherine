$(document).ready(function(){
    const image = document.getElementById('splashimg');
    // const revealer = document.getElementById("revealer");
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

    const artworks = document.querySelectorAll("img[data-src]");

    const loadImg = function(entries, observer){
        entries.forEach(function(entry){
            if(!entry.isIntersecting) return;
            entry.target.src = entry.target.dataset.src;
            entry.target.addEventListener("load", function(){
                entry.target.classList.remove("lazy-image");
            });
            observer.unobserve(entry.target);
         });
    };

    const imgObserver = new IntersectionObserver(loadImg,{root:null, threshold:0});

    artworks.forEach(img => imgObserver.observe(img));
    


    // if (revealer){
    //     revealer.addEventListener("click", function(){
    //         const uninitialisedImgs = $('.uninitialised-image');
    //         for(let i = 0; i < uninitialisedImgs.length; ++i){
    //             uninitialisedImgs[i].src = uninitialisedImgs[i].getAttribute('data-src');
    //         }
    //         $(".hide").removeClass("hide");
    //         $("#revealerDiv").hide();
    //     });
    // }
});
