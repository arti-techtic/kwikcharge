// Page Scroll
// Navigation

$(document).ready(function () {
    $(document).on("scroll", onScroll);
    
    //smoothscroll
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        $('a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
      
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('.top-line ul li').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href")); 
        if(refElement.length>0){

            if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                $('.top-line ul li').removeClass("active");
                currLink.addClass("active");
            }
            else{
                currLink.removeClass("active");
            }
        }
    });
}


// Scroll to top
jQuery(document).ready(function($){
  toggleButton()
  $(window).scroll(toggleButton);
  //Click event to scroll to top
  $('.top').click(function(){
    $('html, body').animate({scrollTop : 0},360);
    return false;
  });
});

function toggleButton() {
  if ($(window).scrollTop() > 100) {
    $('.top').fadeIn();
  } else {
    $('.top').fadeOut();
  }
}


// FIXED HEADER
$(window).scroll(function(){
    if ($(this).scrollTop() > 0) {
       $('.top-line').addClass('fixed-header');
    } else {
       $('.top-line').removeClass('fixed-header');
    }
});

$('.work-list').slick({
  dots: false,
  infinite: true,
  cssEase: 'linear',
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: false,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    
  ]
});