$(document).ready(function(){

    // banner owl carousel
    $("#banner-area .owl-carousel").owlCarousel({
        dots: true,
        items: 1
    }); 

    //Top Sale
    $("#top-sale .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        responsive:{
            0:{
                items: 1
            },
            600:{
                items: 3
            },
            1000:{
                items: 5
            }
         }
    });

    //isotop filter
    var $grid = $(".grid").isotope({
        itemSelector:'.grid-items',
        layoutMode:'fitRows'
    });

    $(".button-group").on("click", "button",function(){
        var filterValue =  $(this).attr('data-filter');
        $grid.isotope({filter:filterValue});
    })

    //New phones
    $("#new-phones .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        responsive:{
            0:{
                items: 1
            },
            600:{
                items: 3
            },
            1000:{
                items: 5
            }
         }
    });

    //Blogs owa
    $("#blogs .owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        responsive:{
            0:{
                items: 1
            },
            600:{
                items: 3
            }
         }
    });

    $("")
});