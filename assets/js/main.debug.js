 
/*=========================================================================================
// INICIO MAIN JS
========================================================================================= */

jQuery(function($) {
	$(document).ready(function() {


//=======================================================
//Aplica a animação no scroll mediante clique no menu
//=======================================================



    $(".u-isScrollDown").click(function(event){        
        event.preventDefault();
        
       

        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 1000);

          if ($(".Navigation--main").hasClass('u-isExpanded')){
            $("#MainNavigation-container, .NavigationButton.NavigationButton--main").removeClass("u-isExpanded")
            $("#MainNavigation-container, .NavigationButton.NavigationButton--main").addClass("u-isCollapsed");  
         }
        
        varHash = $(this).attr('href');

        
        if(history.pushState) {
        
            history.pushState(null, null, varHash);
        
        }
        else {
        location.hash = '#myhash';
        window.location.hash = varHash;
        }

        
   });




/*$(function(){
      $.stellar({
        horizontalScrolling: false,
        verticalOffset: 40
      });
    });
*/



// =====================================
// .ScrollOn
// Detecta o Movimento da Barra de Rolagem e aplica a classe no body
// =====================================

$(window).scroll(function(){

      var scroll = $(window).scrollTop();

      //Class ScrollOn
      if ( scroll > 0 ) {

       $('body').addClass('u-isScrollOn');
       

      } else {
       $('body').removeClass('u-isScrollOn');
       
      }

});

// =====================================
// .ScrollFade
// Mostra os objetos conforme aparecem no scroll
// =====================================
 
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.u-isScrollFade').each( function(i){
            
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height() + 100;
            var bottom_of_window_ = $(window).scrollTop() + $(window).height();

             if ( $(this).hasClass('is-repeat') ) {
                 /* If the object is completely visible in the window, fade it it */
                  if( bottom_of_window > bottom_of_object && bottom_of_window < bottom_of_object + $(window).height() ){
                      
                      $(this).addClass('u-isScrollFade--on'); 
                      


                  } else {

                     $(this).removeClass('u-isScrollFade--on'); 
                  
                  } 

             } else {

                if( bottom_of_window > bottom_of_object && bottom_of_window < bottom_of_object + $(window).height() ){
                  
                  $(this).addClass('u-isScrollFade--on'); 
                  
                }

            }
            
            
        }); 
    
    });


//=======================================================
//Aplica a animação no scroll mediante clique no menu
//=======================================================

    $(".u-isScrollDown").click(function(event){        
        event.preventDefault();
        
       

        $('html,body').animate({scrollTop:$(this.hash).offset().top - 0}, 1000);

          if ($(".Navigation--menu--main").hasClass('u-isExpanded')){
            $("#MainNavigation-container, .NavigationButton.NavigationButton--main").removeClass("u-isExpanded")
            $("#MainNavigation-container, .NavigationButton.NavigationButton--main").addClass("u-isCollapsed");  
         }
        
        varHash = $(this).attr('href');
        
        if(history.pushState) {
        
            history.pushState(null, null, varHash);
        
        }
        else {
        location.hash = '#myhash';
        window.location.hash = varHash;
        }

        
   });


// ==========================
// Menu Toggle
// ==========================
// 



     $(".e-Toglle").click(function(event){
         event.preventDefault();
         varId = $(this).attr('id');
         varWidthWindow = $(window).width();
         
          if ($(this).hasClass('a-hzt')){
                varSide = 'a-hztResize';
             } else {
                varSide = '';
             }

            
         if ($(this).hasClass('u-isExpanded')){

            $(this).removeClass('u-isExpanded');
            $('header.Site-header').removeClass('u-isExpanded');
            $(this).addClass('u-isCollapsed');
                 $('#'+varId+'-container').stop().removeClass('u-isExpanded '+varSide);
                 $('#'+varId+'-container').stop().addClass('u-isCollapsed '+varSide);
                 $('#'+varId+'.SwitchIcon.u-isCollapsed .u-icon').show();
                 $('#'+varId+'.SwitchIcon .iconClose').hide();
                 $('.NavigationLink.Item-level1.is-hasSubMenu, .Navigation--subMenu').removeClass('u-isExpanded');
                 $('.NavigationLink.Item-level1.is-hasSubMenu, .Navigation--subMenu').addClass('u-isCollapsed');
                 
         }else{

             $('.u-contentHide, .u-contentHide--button, .Navigation .is-hasSubMenu, .Navigation--subMenu').removeClass('u-isExpanded').addClass('u-isCollapsed');
             $(this).removeClass('u-isCollapsed');
             $(this).addClass('u-isExpanded');
             $('header.Site-header').addClass('u-isExpanded');
             $('#'+varId+'-container').stop().removeClass('u-isCollapsed '+varSide);
                 $('#'+varId+'-container').stop().addClass('u-isExpanded '+varSide);
                 $('#'+varId+'.SwitchIcon.u-isExpanded .u-icon').hide();
                 $('#'+varId+'.SwitchIcon .iconClose').show();
             }
     });


function LightboxClose(iFrame) {

   $('#Lightbox--container').removeClass('Lightbox--active');
   $('#Lightbox--container').addClass('Lightbox--inactive');
   $('.Lightbox-window-content').html('');
   jQuery('body').css({'overflow-y':'auto'});
}

$( ".LightboxClose" ).on( "click", LightboxClose );





    $(document)
        .ready(function () {
            //initialize paroller.js
            $('[data-paroller-factor]').paroller();
            //initialize paroller.js and set options for elements with .paroller class
            $('.paroller-example').paroller({
                factorXs: 0.1,
                factorSm: 0.1,
                factorMd: -0.4,
                factorLg: -0.5,
                factorXl: -0.6,
                factor: -0.4,
                type: 'foreground',
                direction: 'horizontal'
            });
        });


/*s
// Carousel
 */


$('#default-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:3,
        },
        1000:{
            items:5,
        }
    }
})

$('#depoimentos-carousel').owlCarousel({
    loop:true,
    margin:0,
    dots: false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            dots:true,
            dotClass: "owl-dot owl-dot-case",
            nav:false
        },
        600:{
            items:2,
            dots:true
        },
        1000:{
            items:3,
            dots:false,
            nav:true
        }
    }
});
$('#videos-carousel').owlCarousel({
    loop:true,
    margin:0,
    dots: false,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            dots:true,
            dotClass: "owl-dot owl-dot-case",
            nav:false
        },
        600:{
            items:1,
            dots:true
        },
        1000:{
            items:1,
            dots:true
        }
    }
});


// /*=========================================================================================
// // CLOSE FUNCTION
// =========================================================================================*/

	});
});


// Abre o Lightbox
function LightboxCall(iFrame, type) {

  //alert( "clicked" );
  jQuery('#Lightbox--container').removeClass('Lightbox--inactive');
  jQuery('#Lightbox--container').addClass('Lightbox--active');
  if ( type == 'modal' ) {
    var mail = jQuery('#InputEmail').val();
    jQuery('.Lightbox-window-content').load( iFrame+'&email='+mail);
  } else {
    jQuery('.Lightbox-window-content').html( iFrame );
   }

  jQuery('body').css({'overflow-y':'hidden'});


   $(function() {
      setTimeout(function(){
        //Inserindo imagens secudárias
        $('#loading').fadeOut();
       }, 2000);
    });
   
}


// Fecha o lightbox quando a tecla ESC é pressionada
function KeyUpEsc(evt) {
 
 if (evt.keyCode == 27) {
       jQuery('#Lightbox--container').removeClass('Lightbox--active');
       jQuery('#Lightbox--container').addClass('Lightbox--inactive');
       jQuery('.Lightbox-window-content').html( '' );
       jQuery('body').css({'overflow-y':'auto'});
    }
}

jQuery(document).on( "keyup", KeyUpEsc );

// Mais formas de Fechar o LightBox

