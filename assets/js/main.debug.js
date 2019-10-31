 
/*=========================================================================================
// INICIO MAIN JS
========================================================================================= */

jQuery(function($) {
	$(document).ready(function() {





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
    

    $('html,body').animate({scrollTop:$(this.hash).offset().top - 100}, 1000);

    $(".e-Toglle").removeClass("u-isExpanded").addClass("u-isCollapsed");
    $(".Navigation--menu").removeClass("u-isExpanded").addClass("u-isCollapsed"); 

      if ($(".Navigation--main").hasClass('u-isExpanded')){
        $("#MainNavigation-container, .NavigationButton.NavigationButton--main").removeClass("u-isExpanded")
        $("#MainNavigation-container, .NavigationButton.NavigationButton--main").addClass("u-isCollapsed"); 
     }

    
    varHash = $(this).attr('href');

    
    /*if (location.hash == varHash) {
        $(this).addClass('u-isActive');
    } else {
        $(this).removeClass('u-isActive');
    }*/
    
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

        //$('body').css({'overflow':'scroll'});
        $(this).removeClass('u-isExpanded');
        $(this).addClass('u-isCollapsed');
        $('#'+varId+'-container').stop().removeClass('u-isExpanded '+varSide);
        $('#'+varId+'-container').stop().addClass('u-isCollapsed '+varSide);
        //if( varId == 'MainNavigation' || varWidthWindow <= 480 ) { $('body').removeClass('u-isScrollOff'); }
        $('#'+varId+'.SwitchIcon.u-isCollapsed .u-icon').show();
        $('#'+varId+'.SwitchIcon .iconClose').hide();
        $('body').removeClass("u-overflowHidden");
        $('.NavigationLink.Item-level1.is-hasSubMenu, .Navigation--subMenu').removeClass('u-isExpanded');
        $('.NavigationLink.Item-level1.is-hasSubMenu, .Navigation--subMenu').addClass('u-isCollapsed');
                
    }else{

        //$('body').css({'overflow':'hidden'});
        $('.u-contentHide, .u-contentHide--button, .Navigation .is-hasSubMenu, .Navigation--subMenu').removeClass('u-isExpanded').addClass('u-isCollapsed');
        $(this).removeClass('u-isCollapsed');
        $(this).addClass('u-isExpanded');
        $('#'+varId+'-container').stop().removeClass('u-isCollapsed '+varSide);
        $('#'+varId+'-container').stop().addClass('u-isExpanded '+varSide);
        //if( varId == 'MainNavigation' || varWidthWindow <= 480 ) { $('body').addClass('u-isScrollOff'); }
        $('#'+varId+'.SwitchIcon.u-isExpanded .u-icon').hide();
        $('#'+varId+'.SwitchIcon .iconClose').show();
        $('body').addClass("u-overflowHidden");

    }
    });


function LightboxClose() {
//alert( "clicked" );
    $('.Lightbox-window-content').html('');
    jQuery('.Lightbox-window').removeClass("u-displayBlock").addClass("u-displayNone");
    $('#Lightbox--container').removeClass('Lightbox--active');
    $('#Lightbox--container').addClass('Lightbox--inactive');
    $('body').removeClass('u-modalActive');
    $('.LightboxClose, .ContainerButtonClose').removeClass('Lightbox--active');
    $('.Site').css({height:'auto'});

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


//SISTEMA DE DROPDOWNS I9MEPRESS

//Adicione aqui os droptitles

//Dropdowns: Todos os dropdowns
//Close on scroll:Dropdowns que serão fechados mediante scroll

$dropdowns = ["banners", "categories", "painel", "filterby"];
$close_on_scroll = [$dropdowns[2]];

var global_submenu = ".Submenu-dropdown--"; // + droptitle
var global_seta = "#Dropdown-seta--"; // + droptitle


//AÇÕES

//Ações de dropdown

window.removeAllActives = function () {
    $(".seta-active").css("transform", "rotate(0deg)");
    $(".actived")
    .slideUp()
    .removeClass("actived");
}

window.OpenMenu = function (submenu, seta) {
    submenu.slideDown();
    removeAllActives();
    submenu.addClass("actived");
    seta.addClass("seta-active");
    seta.css("transform", "rotate(180deg)");
}

window.CloseMenu = function (submenu, seta) {
    submenu.slideUp();
    submenu.removeClass("actived");
    seta.removeClass("seta-active");
    seta.css("transform", "rotate(0deg)");
}

// EVENTOS

//Eventos de dropdown

$dropdowns.forEach(function(droptitle){
    var submenu = $(global_submenu + droptitle);
    var seta = $(global_seta + droptitle);
    $("#Dropdown-" + droptitle).click(function(event){
        if (submenu.hasClass("actived")){
            
            CloseMenu(submenu, seta);
        
        }else{

            OpenMenu(submenu, seta);
        }
    });
});

$close_on_scroll.forEach(function(droptitle){
    var submenu = $(global_submenu + droptitle);
    var seta = $(global_seta + droptitle);

    $(window).on("scroll", function(){
        CloseMenu(submenu, seta);
    });
});

// APAGAR DROPDOWN MEDIANTE CLIQUE FORA DO BALÃO
$("body").click(function(event){
    if (event.target.hasAttribute("click")) {
        var click = event.target.getAttribute("click")
    }else{
        var click = "false";
    }
    console.log(click);
    if(click != "true"){
        removeAllActives();
    }
});

// FIM DE DROPDOWNS I9MEPRESS


// /*=========================================================================================
// // CLOSE FUNCTION
// =========================================================================================*/

	});
});


// Abre o Lightbox
function LightboxCall(content, utm_source, campaign_id, source, source_url, source_position, title_action, extra_data) {
    //alert( "clicked" );
    //jQuery('body').css({'overflow-y':'hidden'});
    jQuery('body').addClass('u-modalActive');
    jQuery('.Site').addClass('Lightbox--active');
    jQuery('.Lightbox--container').removeClass('Lightbox--inactive');
    jQuery('.Lightbox--container').addClass('Lightbox--active');
    jQuery('.Lightbox-window').removeClass("u-displayNone").addClass("u-displayBlock");
    $('.LightboxClose, .ContainerButtonClose').addClass('Lightbox--active');
  
    var extra_data_id = extra_data;
  
    if( jQuery('#'+extra_data_id).hasClass('Form-input') ) {
  
      var $value_extra_data = escape(jQuery('#'+extra_data_id).val());
  
    } else {
  
      var $value_extra_data = extra_data;
  
    }

    var sizeModal = $('.Lightbox--container').height();

        
    $('.Site').css({height:sizeModal+'px'});

      
  
       
  
  
  jQuery(function($){
  
      // variaveis
      var page = 1;
      var loading = true;
      var $window = $(window);
      var $content = $('.Lightbox-window-content');
      console.log("Até aqui funciona");
      var assets_url = assets.url_assets;
      console.log(assets_url); 
  
      // funcção que busca os posts
      var load_posts = function() {
          $.ajax({
              type: "GET",
              data: {action: 'load_posts',  content: content, utm_source: utm_source, campaign_id: campaign_id, source: source, source_url: source_url, source_position: source_position, title_action: title_action, extra_data: $value_extra_data},
              dataType: "html",
              url: ajaxLoad.url,
              beforeSend: function() {
                  $content.append('<div id="temp_load" style="text-align: center"><img src="'+assets_url+'/images/ajax-loader.gif"></div>');
              },
              success: function(data) {
                  // transforma a data em objeto
                  var $data = $(data);
                  // verifica se existe dados
                  if($data.length) {
                      // oculta o conteudo
                      $data.hide();
  
                      // insere no conteudo a data
                      $content.append($data);
  
                      // da o fadeIn no conteudo e oculta a div #temp_load
                      $data.fadeIn(500, function(){
                          $('#temp_load').remove();
                          loading = false;
                      })
                  } else {
                      $('#temp_load').remove();
                  }
              }
          });
      }
  
      // carrega o post
      load_posts();
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

