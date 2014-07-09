
// isotope
jQuery(document).ready(function($) {
"use strict";
    var $container = $('.posts-list > ul');
    $container.imagesLoaded(function() {
      $container.isotope({
        //filter: '.web-design'
      });
    });
    $container.isotope();
    var $optionSets = $('.categories-portfolio .option-set'),
        $optionLinks = $optionSets.find('a');
    $optionLinks.click(function(){
      var $this = $(this);
      if ( $this.hasClass('selected') ) {
        return false;
      }
      var $optionSet = $this.parents('.option-set');
      $optionSet.find('.selected').removeClass('selected');
      $this.addClass('selected');
      var options = {},
          key = $optionSet.attr('data-option-key'),
          value = $this.attr('data-option-value');
      value = value === 'false' ? false : value;
      options[ key ] = value;
      if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
        changeLayoutMode( $this, options )
      } else {
        $container.isotope( options );
      }
      return false;
    }); 
    // resize images on window resize !!
    $(window).resize(function(){ $('.posts-list ul').isotope('reLayout'); });
});
 // end isotope

// Bootstrap carousel
jQuery(document).ready(function( $ ) {
    "use strict";
    $('#bullets-carousel').carousel({
        interval: 0
    })

    $('#bullets-carousel-skills').carousel({
        interval: 0
    })

    $('#carousel-clients').carousel({
      interval: 0
    })

    $('#simple-carousel').carousel({
        interval: 6000,
    })
    $('#simple-carousel-2').carousel({
        interval: 5000,
    })
});

// Inview plugin settings
    jQuery(document).ready(function($) {
       "use strict"; 
        var fadeL = jQuery('.fadeInL');
        var fadeR = jQuery('.fadeInR');
        var fadeDown = jQuery('.fadeInDown');
        var fadeIn = jQuery('.fadeInIn');
        var fadeUp = jQuery('.fadeInUp');
        var fadeLBig = jQuery('.fadeInL-Big');
        var fadeDownBig = jQuery('.fadeInDown-Big');
        var fadeInBig = jQuery('.fadeInIn-Big');
        var fadeUpBig = jQuery('.fadeInUp-Big');

        var progressBar = jQuery('.progress-inner'); 
        var progressNumbers = jQuery('.progress-numbers'); 
        var scaleIn = jQuery('.scaleIn');
        var rotateLR = jQuery('.rotateLR');
        var rotateIn = jQuery('.rotateIn');
        var rotateInX = jQuery('.rotateInX');

        var browser = false;
        var p = navigator.platform;

        if (p === 'iPad' || p === 'iPhone' || p === 'iPod') {
            browser = true;
        }

        if (browser === false) {

            fadeL.css({visibility: 'hidden'});
            fadeR.css({visibility: 'hidden'});
            fadeDown.css({visibility: 'hidden'});
            fadeIn.css({visibility: 'hidden'});
            fadeUp.css({visibility: 'hidden'});
            fadeLBig.css({visibility: 'hidden'});
            fadeDownBig.css({visibility: 'hidden'});
            fadeInBig.css({visibility: 'hidden'});
            fadeUpBig.css({visibility: 'hidden'}); 

            progressBar.css({visibility: 'hidden'});
            progressNumbers.css({visibility: 'hidden'});
            scaleIn.css({visibility: 'hidden'});
            rotateLR.css({visibility: 'hidden'});
            rotateIn.css({visibility: 'hidden'});
            rotateInX.css({visibility: 'hidden'});

            fadeL.on('inview', function (event, visible) {
                if (visible) {
                    jQuery(this).addClass('fadeL');
                    jQuery(this).css({visibility: 'visible'});
                }
            });
            fadeDown.on('inview', function (event, visible) {
                if (visible) {
                    jQuery(this).addClass('fadeDown');
                    jQuery(this).css({visibility: 'visible'});
                }
            });
            fadeIn.on('inview', function (event, visible) {
                if (visible) {
                    jQuery(this).addClass('fadeIn');
                    jQuery(this).css({visibility: 'visible'});
                }
            });
            fadeUp.on('inview', function (event, visible) {
                if (visible) {
                    jQuery(this).addClass('fadeUp');
                    jQuery(this).css({visibility: 'visible'});
                }
            });
            fadeR.on('inview', function (event, visible) {
                if (visible) {
                    jQuery(this).addClass('fadeR');
                    jQuery(this).css({visibility: 'visible'});
                }
            });

            fadeLBig.on('inview', function (event, visible) {
                if (visible) {
                    jQuery(this).addClass('fadeL-Big');
                    jQuery(this).css({visibility: 'visible'});
                }
            });
            fadeDownBig.on('inview', function (event, visible) {
                if (visible) {
                    jQuery(this).addClass('fadeDown-Big');
                    jQuery(this).css({visibility: 'visible'});
                }
            });
            fadeInBig.on('inview', function (event, visible) {
                if (visible) {
                    jQuery(this).addClass('fadeIn-Big');
                    jQuery(this).css({visibility: 'visible'});
                }
            });
            fadeUpBig.on('inview', function (event, visible) {
                if (visible) {
                    jQuery(this).addClass('fadeUp-Big');
                    jQuery(this).css({visibility: 'visible'});
                }
            });



            progressBar.on('inview', function (event, visible) { 
                if (visible) {
                    jQuery(this).addClass('progress-bar-filled');
                    jQuery(this).css({visibility: 'visible'});
                }
            });
            progressNumbers.on('inview', function (event, visible) { 
                if (visible) {
                    jQuery(this).addClass('progress-numbers-filled');
                    jQuery(this).css({visibility: 'visible'});
                }
            });
            scaleIn.on('inview', function (event, visible) { 
                if (visible) {
                    jQuery(this).addClass('scale-In');
                    jQuery(this).css({visibility: 'visible'});
                }
            });
            rotateLR.on('inview', function (event, visible) { 
                if (visible) {
                    jQuery(this).addClass('rotate-LR');
                    jQuery(this).css({visibility: 'visible'});
                }
            });
            rotateIn.on('inview', function (event, visible) { 
                if (visible) {
                    jQuery(this).addClass('rotate-In');
                    jQuery(this).css({visibility: 'visible'});
                }
            });
            rotateInX.on('inview', function (event, visible) { 
                if (visible) {
                    jQuery(this).addClass('rotate-InX');
                    jQuery(this).css({visibility: 'visible'});
                }
            });
        }
});
// End inview settings

// Go to top button
jQuery(document).ready(function($) {
"use strict";
    $(window).scroll(function(){
        if($(document).scrollTop() > 300)
        {    
            $('.back-to-top').css({bottom:"50px"});
        }
        else
        {  
           $('.back-to-top').css({bottom:"-80px"});
        }
    });
     
  $('.back-to-top').click(function(){
      $('html, body').animate({scrollTop:0}, 'slow');
      return false;
  }); 
});
// End button top
