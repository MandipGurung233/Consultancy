
$(function(){
    var navbar = $('.navigationSecond');
    $(window).scroll(function(){
        if($(window).scrollTop() <= 30){
            navbar.removeClass('navbar-scroll');
            navbar.removeClass('bg-primary');
            navbar.removeClass('logos');
            navbar.removeClass('logo');
        } else{
            navbar.addClass('navbar-scroll');
            navbar.addClass('bg-primary');
            navbar.addClass('logo');
            navbar.addClass('logos');
        }
    });
});

$(function(){
    var navbar = $('.back');
    $(window).scroll(function(){
        if($(window).scrollTop() <= 150){
            navbar.removeClass('back-top');
            navbar.removeClass('icon');
            
        } else{
            navbar.addClass('back-top');
            navbar.addClass('icon');
        }
    });
});



            
                    $(document).ready(function(){
                     $('.owl-carousel').owlCarousel({
                     loop:true,
                     margin:20,
                     autoplay:true,
                     autoplayTimeout: 3000,
                     autoplayHoverPause:true,
                     nav:false,
                     responsive:{
                         0:{
                             items:1
                         },
                         600:{
                             items:3
                         },
                         1000:{
                             items:3
                         }
                     }
                 });
             });
            
        