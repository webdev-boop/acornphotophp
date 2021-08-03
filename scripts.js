$(document).ready(function() {
    $(".nav-button").click(function() {
        $(".nav-button").toggleClass("change");
    });

    $(window).scroll(function() {
        let position = $(this).scrollTop();
        if(position >= 200) {
            $(".nav-menu").addClass("custom-navbar");
        } else {
            $(".nav-menu").removeClass("custom-navbar");
        }
    });

    $(window).scroll(function() {
        let position = $(this).scrollTop();
        if(position >= 620) {
            $(".camera-img").addClass("fromLeft");
            $(".Mission-text").addClass("fromRight");
        } else {
            $(".camera-img").removeClass("fromLeft");
            $(".Mission-text").removeClass("fromRight");
        }
    });



    $(window).scroll(function() {
        let position = $(this).scrollTop();
        if(position >= 4300 ) {
            $(".card-1").addClass("moveFromLeft");
            $(".card-2").addClass("moveFromBottom");
            $(".card-3").addClass("moveFromRight");
        } else {
            $(".card-1").removeClass("moveFromLeft");
            $(".card-2").removeClass("moveFromBottom");
            $(".card-3").removeClass("moveFromRight");
        }
    });
});