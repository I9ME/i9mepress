 
/*=========================================================================================
// INICIO MAIN JS
========================================================================================= */

var is_mobile = navigator.userAgent.match(/Android/i)
|| navigator.userAgent.match(/webOS/i)
|| navigator.userAgent.match(/iPhone/i)
|| navigator.userAgent.match(/iPad/i)
|| navigator.userAgent.match(/iPod/i)
|| navigator.userAgent.match(/BlackBerry/i)
|| navigator.userAgent.match(/Windows Phone/i);

var is_not_ipad = ! navigator.userAgent.match(/iPad/i);

//=======================
// FUNÇÕES GLOBAIS JAVASCRIPT
//=======================

    // parseStringMIME: FUNÇÃO QUE CONVERTE STRINGS EM UM DOCUMENTO HTML

    // * PARÂMETROS *
    //content: conteúdo string a ser convertida
    //mime: tipo do conteúdo, seguindo os códigos MIME. o padrão é um documento HTML
    
    window.parseStringMIME = function (content, mime="text/html") {

        // DOMParser: https://developer.mozilla.org/en-US/docs/Web/API/DOMParser
        
        var domparser = new DOMParser();
        
        return domparser.parseFromString(content, mime);
    }

    // DisplayLightBox: Função global de abertura do Lightbox
    
    // * PARÂMETROS *
    // lightbox: Nome da classe do lightbox
    // mobile, tablet, desktop: arrays com as dimensões dos respectivos dispositivos

    window.DisplayLightBox = function (lightbox, mobile, tablet, desktop) {
        CloseLightBox();
        // ESTABELECENDO DIMENSÕES DO LIGHTBOX, LEVANDO EM CONTA O DISPOSITIVO
        if (jQuery("." + lightbox).hasClass(lightbox + "--mobile")) {
            
            jQuery("." + lightbox).css("height", mobile["height"]);
            jQuery("." + lightbox).css("width", mobile["width"]);

        }else if (jQuery("." + lightbox).hasClass(lightbox + "--tablet")) {

            jQuery("." + lightbox).css("height", tablet["height"]);
            jQuery("." + lightbox).css("width", tablet["width"]);

        }else{

            jQuery("." + lightbox).css("height", desktop["height"]);
            jQuery("." + lightbox).css("width", desktop["width"]);

        }

        // APLICANDO MÁSCARA ESCURA AO REDOR DO SITE
        jQuery(".BlackMask").css("display", "block");

        // IMPRIMINDO IFRAME NA TELA

        //IMPEDINDO SCROLL DO USUÁRIO
        jQuery("body").css("overflow", "hidden");

        //BOTÃO DE FECHAR
        var $closebutton = '<div id="imageclosebutton" class="ImageCloseButton is-animating u-positionAbsolute u-cursorPointer"><svg class="u-icon icon-close"><use xlink:href="#icon-close"></use></svg></div>';
        parseCloseDOM = parseStringDOM($closebutton);
        var closebutton = parseCloseDOM.getElementById("imageclosebutton");
        
        closebutton.onclick = CloseLightBox;
        
        jQuery("." + lightbox).append(closebutton);

    }

    //CloseLightBox: FECHAR LIGHTBOX
    window.CloseLightBox = function () {

        //REVERTENDO TODOS OS PROCESSOS DE ABERTURA DO LIGHTBOX
        jQuery(".Lightbox").css("background", "#fff");
        jQuery(".Lightbox").css("height", "0");
        jQuery(".Lightbox").css("width", "0");

        jQuery(".BlackMask").css("display", "none");
        
        jQuery(".Lightbox").html("");

        jQuery("body").css("overflow", "initial");

    }

    window.OpenMobileMenu = function () {

        if (is_mobile) {

            jQuery("body").removeClass("u-isCollapsed").addClass("u-isExpanded").css("overflow", "hidden");
        
            //NAV MENU
            jQuery("#MainNavigation-container").slideDown("slow");   

        }             
        
    }

    window.CloseMobileMenu = function () {

        if (is_mobile) {

            jQuery("body").removeClass("u-isExpanded").addClass("u-isCollapsed").css("overflow", "initial");
            
            //NAV MENU
            jQuery("#MainNavigation-container").slideUp("slow");
        
        }
    }

    //Sistema de busca global
    function open_i9mepress_header_search () {
        jQuery(".BlackMask").css("display", "block");
        jQuery("body").css("overflow", "hidden");
        jQuery(".BlackMask").addClass("activate");
        jQuery(".Site-header .Search").fadeIn();
        jQuery(".Site-header .Search input").focus();
    }

    function close_i9mepress_header_search () {
        jQuery(".BlackMask").css("display", "none");
        jQuery("body").css("overflow", "initial");
        jQuery(".BlackMask").removeClass("activate");
        jQuery(".Site-header .Search").fadeOut();
    }

//====================================
// FIM DAS FUNÇÕES GLOBAIS JAVASCRIPT
//====================================

//====================================
// Core JQuery
//====================================

jQuery(function($) {
	$(document).ready(function() {

        //ContentAsync
        setTimeout(function(){
            $('.ContentAsync-item').each(function(){
            var src = $(this).attr('data-img-src');
            var alt = $(this).attr('data-img-alt');
            var classCSS = $(this).attr('data-img-class');
            $('<img>').fadeIn(300).attr('src', src).attr('alt', alt).attr('class', classCSS).appendTo(this);
            });
            $('.ContentAsync-item--bg').each(function(){
            var src = $(this).attr('data-img-bg');
            $(this).css({'background-image':'url('+src+')'});
            });
        }, 800);



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
        // .u-triggerAppear
        // ativa gatilhos js conforme aparecem no scroll
        // =====================================
        // Usage -> [seletor, animation_delay, pullback]
        // seletor: Seletor JQuery
        // animation_delay: Delay de aparição da animação, se 0, aparece quando o conteúdo está no topo da tela.
        // pullback: se "verdadeiro", A animação vai e volta mediante scroll.

        /* Every time the window is scrolled ... */
        $(window).scroll( function(){

            var triggerAppear_sections = [
                $("#secao-intro"), 
                [$("#secao-eventos-sociais"), 300, false, true],
                $("#secao-galeria"),
                $("#secao-depoimentos"),
                $("#secao-premios"),
                $("#secao-lojas"),
                $("#secao-contato")
            ];

            triggerAppear_sections.forEach( function (arrayDOM) {

                if ($.type(arrayDOM) != "array") {
                    var $arrayDOM = arrayDOM,
                    $anime_delay = 300,
                    // Caso "true" A classe ".u-triggerAppear" desaparece quando o scroll subir.
                    trigger_pullback = false,
                    $header_trigger = false;
                }else{
                    var $arrayDOM = arrayDOM[0],
                    $anime_delay = arrayDOM[1],
                    // Caso "true" A classe ".u-triggerAppear" desaparece quando o scroll subir.
                    trigger_pullback = arrayDOM[2],
                    $header_trigger = arrayDOM[3];

                }

                /* Check the location of each desired element */
                $arrayDOM.each( function(i){
                    var bottom_of_object = $(this).offset().top;
                    var bottom_of_window = $(window).scrollTop() + $anime_delay;

                    
                        /* If the object is completely visible in the window, fade it it */
                        if( bottom_of_window > bottom_of_object ){
                            
                            //$(this).animate({'opacity':'1'},500);
                            $(this).addClass('u-triggerAppear');
                            if ($header_trigger) {
                                $("body").addClass("u-headerTrigger");
                            }

                        } else if (trigger_pullback) {
                            $(this).removeClass('u-triggerAppear');
                        } else if ($header_trigger) {
                            $("body").removeClass("u-headerTrigger");
                        }

                });

            } );

        });


        //ScrollDown


        $(".u-isScrollDown").click(function(event){
            event.preventDefault();
            

            $('html,body').animate({scrollTop:$(this.hash).offset().top - 50}, 1000);

            if ($("body").hasClass('u-isExpanded')){
                CloseMobileMenu();
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

        $(".e-Toglle").on("click", function(){

            if ($("body").hasClass("u-isExpanded")){
                
                CloseMobileMenu();

            } else if ($("body").hasClass("u-isCollapsed")) {

                OpenMobileMenu();
                
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
            margin:100,
            dots: true,
            responsiveClass:true,
            navSpeed: 1100,
            dotSpeed: 1100,
            navText: ['<i class="FigureIcon FigureIcon--SetaLeft u-displayBlock"></i>','<i class="FigureIcon FigureIcon--SetaRight u-displayBlock"></i>'],
            responsive:{
                0:{
                    items:1,
                    dots:true,
                    dotClass: "owl-dot owl-dot-case",
                    nav:false
                },
                600:{
                    items:1,
                    dots:false,
                    nav: true
                },
                1000:{
                    items:1,
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

        $('#mobile-estrutura-carousel').owlCarousel({
            loop:true,
            margin:0,
            dots:true,
            responsiveClass:true,
            // autoplay: true,
            // autoplayTimeout: 2000,
            // autoplaySpeed: 1000,
            nav: true,
            navText: ['<i class="FigureIcon FigureIcon--whiteSetaLeft u-displayBlock"></i>','<i class="FigureIcon FigureIcon--whiteSetaRight u-displayBlock"></i>'],
            responsive:{
                0:{
                    items:1,
                    dotClass: "owl-dot owl-dot-case",
                    dots:false,
                },
                600:{
                    items:1,
                    dots:false,
                },
                1000:{
                    items:1,
                    dots:false,
                }
            }
        });

        $('#galeria-carousel').owlCarousel({
            loop:true,
            margin:0,
            dots:true,
            responsiveClass:true,
            // autoplay: true,
            // autoplayTimeout: 2000,
            // autoplaySpeed: 1000,
            nav: true,
            navText: ['<i class="FigureIcon FigureIcon--whiteSetaLeft u-displayBlock"></i>','<i class="FigureIcon FigureIcon--whiteSetaRight u-displayBlock"></i>'],
            responsive:{
                0:{
                    items:1,
                    dotClass: "owl-dot owl-dot-case",
                    dots:false,
                },
                600:{
                    items:1,
                    dots:false,
                },
                1000:{
                    items:1,
                    dots:false,
                }
            }
        });

        $('#lojas-carousel').owlCarousel({
            loop:true,
            margin:30,
            dots: true,
            responsiveClass:true,
            navSpeed: 1100,
            dotSpeed: 1100,
            navText: ['<i class="FigureIcon FigureIcon--SetaLeft u-displayBlock"></i>','<i class="FigureIcon FigureIcon--SetaRight u-displayBlock"></i>'],
            responsive:{
                0:{
                    items:1,
                    dots:true,
                    dotClass: "owl-dot owl-dot-case",
                    nav:false
                },
                600:{
                    items:1,
                    dots:false,
                    nav: true
                },
                1000:{
                    items:1,
                    dots:false,
                    nav:true
                }
            }
        });

        //SISTEMA DE DROPDOWNS I9MEPRESS

        //Adicione aqui os droptitles

        //Dropdowns: Todos os dropdowns
        //Close on scroll:Dropdowns que serão fechados mediante scroll

        $dropdowns = ["one", "two", "three", "four"];
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
        // $("body").click(function(event){
        //     console.log(event.target);
        //     if (event.target.hasAttribute("click")) {
        //         var click = event.target.getAttribute("click")
        //     }else{
        //         var click = "false";
        //     }
        //     if(click != "true"){
        //         removeAllActives();
        //     }
        // });

        // FIM DE DROPDOWNS I9MEPRESS


        // ============
        //  SISTEMA DE LIGHTBOX
        //=============

        //ABRIR LIGHTBOX
        // DESKTOP - height: 515px; width: 815px;
        // TABLET - height: 485px; width: 615px;
        // MOBILE - height: 315px; width: 305px;
        function OpenImageLightBox (image_src, image_alt) {

            var lightbox = "LightboxImage",
            content = "<img id='lightboxcontent' class='content u-cursorPointer' src='"+ image_src +"' alt='"+ image_alt +"' />",
            mobile = {
                "height": "385px",
                "width": "335px"
            },
            tablet = {
                "height": "485px",
                "width": "615px"
            },
            desktop = {
                "height": "600px",
                "width": "600px"
            };

            DisplayLightBox(lightbox, mobile, tablet, desktop);

            $("." + lightbox).append(content);
        }

        // EVENTO DE FECHAMENTO DO LIGHTBOX AO CLICAR NA MÁSCARA ESCURA
        $(".BlackMask").click(function(){
            CloseLightBox();
        });

        // ASSOCIE AQUI A FUNÇÃO DE ABERTURA DO LIGHTBOX A ELEMENTO DOM DESEJADO



        // ============
        //  FIM DO SISTEMA DE LIGHTBOX
        //=============


        //DETECTA SE O INPUT FOI PREENCHIDO

        var form_input_array = Array.from(document.getElementsByClassName("Form-input"));

        form_input_array.forEach(function(element){

            element.oninput = function () {

                if (element.value != "") {

                    element.classList.add("Form-input--written");

                }else {

                    element.classList.remove("Form-input--written");

                }   
            }
        });

        //REMOVE SPAN DO CONTACT FORM
        var span = $(".wpcf7-form-control-wrap");

        span.each(function(){
            
            var span = $(this);
            var input = $(this).children();
            var form_row = $(this).parent();

            form_row.append(span);
            form_row.prepend(input);
        });

        //Corrigindo a estrutura da paginação
        var prev = $(".Pagination .prev.page-numbers"),
        next = $(".Pagination .next.page-numbers"),
        current = $(".Pagination .page-numbers.current");

        prev.removeClass("page-numbers");
        next.removeClass("page-numbers");

        var pages = $(".Pagination .page-numbers"),
        last = pages[pages.length - 1];

        $(".Pagination").empty();

        if (prev.length) {
            $(".Pagination").append(prev);
        }else{
            $(".Pagination").append('<div class="prev"><svg class="u-icon u-icon--disabled icon-arrow-left-circle"><use xlink:href="#icon-arrow-left-circle"></use></svg></div>');
        }
        if (current[0] == last) {
            $(".Pagination").append("<span class='page-numbers current'>" + current.text() + "</span>");
        }else{
            $(".Pagination").append(current);
        }
        $(".Pagination").append("<span class='Pagination-divisor u-displayFlex'>/</span>");
        $(".Pagination").append(last);

        if (next.length) {
            $(".Pagination").append(next);
        }else{
            $(".Pagination").append('<div class="next"><svg class="u-icon u-icon--disabled icon-arrow-right-circle"><use xlink:href="#icon-arrow-right-circle"></use></svg></div>');
        }

        // Estrutura corretora de formulários da loja virtual
        //fields => ['DOM', 'has_label']
        var fields = [
            [".Checkout-content-items-item--billing", true],
            [".Checkout-content-items-item--shipping", true],
            [".MyAccount-forms", true]
        ];

        fields.forEach(function(field){
            $(field[0] + " .form-row").each(function(){
                if ( field[1] ) {
                    var label = $(this).children()[0],
                    span = $(this).children()[1],
                    input = $(span).children()[0],
                    label_text = $(label).text();
                }else{
                    var label = $(this).children()[0],
                    input = $(this).children()[1],
                    label_text = $(label).text();
                }
                $(input).attr("placeholder", label_text);
                $(label).remove();
            });
        });

        $(".busca-global").click(function(){
            open_i9mepress_header_search();
        });

        $(".BlackMask, .Search-esc").click(function(){
            close_i9mepress_header_search();
        });

        //STELLAR JS
        $.stellar();


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
      var assets_url = assets.url_assets;
  
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