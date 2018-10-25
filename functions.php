<?php
/**
 * Skeleton funções e definições
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage skeleton
 * @since 1.0
 */


/**
 * Funções e Configurações do Tema
 */



function skeleton_setup() {
	load_theme_textdomain( 'lpvigno' );



	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Ativando o recurso de Imagem Destacada
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );


	// Habilitando o recurso de Logotipo Customizável.

	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

/*	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
*/
	/*
	 * Editor de Estilo
 	 */
	//add_editor_style( array( 'assets/css/editor-style.css', skeleton_fonts_url() ) );

}

add_action( 'after_setup_theme', 'skeleton_setup' );



/**
 * Enqueue scripts and styles.
 */
function skeleton_scripts() {

	$skeleton_version = '1.0';

	// Add custom fonts, used in the main stylesheet.

	// Theme stylesheet.
	wp_enqueue_style('css-main', get_template_directory_uri() . '/assets/css/main.min.css', array(), $skeleton_version, 'all');
	wp_enqueue_script( 'js-main', get_template_directory_uri() . '/assets/js/main.min.js', array(), $skeleton_version, true );
	
	


?>

<?php

}
add_action( 'wp_enqueue_scripts', 'skeleton_scripts' );



// Add scripts to wp_footer()
function theme_footer_script() {


//SVG

echo'<svg style="position: absolute; width: 0; height: 0; overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>
<symbol id="iconMenu" viewBox="0 0 24 24">
<path d="M21 11h-18c-0.6 0-1 0.4-1 1s0.4 1 1 1h18c0.6 0 1-0.4 1-1s-0.4-1-1-1z"></path>
<path d="M3 7h18c0.6 0 1-0.4 1-1s-0.4-1-1-1h-18c-0.6 0-1 0.4-1 1s0.4 1 1 1z"></path>
<path d="M21 17h-18c-0.6 0-1 0.4-1 1s0.4 1 1 1h18c0.6 0 1-0.4 1-1s-0.4-1-1-1z"></path>
</symbol>
<symbol id="iconUser" viewBox="0 0 20 28">
<path d="M20 21.859c0 2.281-1.5 4.141-3.328 4.141h-13.344c-1.828 0-3.328-1.859-3.328-4.141 0-4.109 1.016-8.859 5.109-8.859 1.266 1.234 2.984 2 4.891 2s3.625-0.766 4.891-2c4.094 0 5.109 4.75 5.109 8.859zM16 8c0 3.313-2.688 6-6 6s-6-2.688-6-6 2.688-6 6-6 6 2.688 6 6z"></path>
</symbol>
<symbol id="iconClose" viewBox="0 0 24 24">
<path d="M18.984 6.422l-5.578 5.578 5.578 5.578-1.406 1.406-5.578-5.578-5.578 5.578-1.406-1.406 5.578-5.578-5.578-5.578 1.406-1.406 5.578 5.578 5.578-5.578z"></path>
</symbol>
<symbol id="iconFacebook" viewBox="0 0 16 28">
<path d="M14.984 0.187v4.125h-2.453c-1.922 0-2.281 0.922-2.281 2.25v2.953h4.578l-0.609 4.625h-3.969v11.859h-4.781v-11.859h-3.984v-4.625h3.984v-3.406c0-3.953 2.422-6.109 5.953-6.109 1.687 0 3.141 0.125 3.563 0.187z"></path>
</symbol>
<symbol id="iconInstagram" viewBox="0 0 24 28">
<path d="M16 14c0-2.203-1.797-4-4-4s-4 1.797-4 4 1.797 4 4 4 4-1.797 4-4zM18.156 14c0 3.406-2.75 6.156-6.156 6.156s-6.156-2.75-6.156-6.156 2.75-6.156 6.156-6.156 6.156 2.75 6.156 6.156zM19.844 7.594c0 0.797-0.641 1.437-1.437 1.437s-1.437-0.641-1.437-1.437 0.641-1.437 1.437-1.437 1.437 0.641 1.437 1.437zM12 4.156c-1.75 0-5.5-0.141-7.078 0.484-0.547 0.219-0.953 0.484-1.375 0.906s-0.688 0.828-0.906 1.375c-0.625 1.578-0.484 5.328-0.484 7.078s-0.141 5.5 0.484 7.078c0.219 0.547 0.484 0.953 0.906 1.375s0.828 0.688 1.375 0.906c1.578 0.625 5.328 0.484 7.078 0.484s5.5 0.141 7.078-0.484c0.547-0.219 0.953-0.484 1.375-0.906s0.688-0.828 0.906-1.375c0.625-1.578 0.484-5.328 0.484-7.078s0.141-5.5-0.484-7.078c-0.219-0.547-0.484-0.953-0.906-1.375s-0.828-0.688-1.375-0.906c-1.578-0.625-5.328-0.484-7.078-0.484zM24 14c0 1.656 0.016 3.297-0.078 4.953-0.094 1.922-0.531 3.625-1.937 5.031s-3.109 1.844-5.031 1.937c-1.656 0.094-3.297 0.078-4.953 0.078s-3.297 0.016-4.953-0.078c-1.922-0.094-3.625-0.531-5.031-1.937s-1.844-3.109-1.937-5.031c-0.094-1.656-0.078-3.297-0.078-4.953s-0.016-3.297 0.078-4.953c0.094-1.922 0.531-3.625 1.937-5.031s3.109-1.844 5.031-1.937c1.656-0.094 3.297-0.078 4.953-0.078s3.297-0.016 4.953 0.078c1.922 0.094 3.625 0.531 5.031 1.937s1.844 3.109 1.937 5.031c0.094 1.656 0.078 3.297 0.078 4.953z"></path>
</symbol>
<symbol id="iconTwitter" viewBox="0 0 26 28">
<path d="M25.312 6.375c-0.688 1-1.547 1.891-2.531 2.609 0.016 0.219 0.016 0.438 0.016 0.656 0 6.672-5.078 14.359-14.359 14.359-2.859 0-5.516-0.828-7.75-2.266 0.406 0.047 0.797 0.063 1.219 0.063 2.359 0 4.531-0.797 6.266-2.156-2.219-0.047-4.078-1.5-4.719-3.5 0.313 0.047 0.625 0.078 0.953 0.078 0.453 0 0.906-0.063 1.328-0.172-2.312-0.469-4.047-2.5-4.047-4.953v-0.063c0.672 0.375 1.453 0.609 2.281 0.641-1.359-0.906-2.25-2.453-2.25-4.203 0-0.938 0.25-1.797 0.688-2.547 2.484 3.062 6.219 5.063 10.406 5.281-0.078-0.375-0.125-0.766-0.125-1.156 0-2.781 2.25-5.047 5.047-5.047 1.453 0 2.766 0.609 3.687 1.594 1.141-0.219 2.234-0.641 3.203-1.219-0.375 1.172-1.172 2.156-2.219 2.781 1.016-0.109 2-0.391 2.906-0.781z"></path>
</symbol>
<symbol id="iconEnvelope" viewBox="0 0 28 28">
<path d="M28 11.094v12.406c0 1.375-1.125 2.5-2.5 2.5h-23c-1.375 0-2.5-1.125-2.5-2.5v-12.406c0.469 0.516 1 0.969 1.578 1.359 2.594 1.766 5.219 3.531 7.766 5.391 1.313 0.969 2.938 2.156 4.641 2.156h0.031c1.703 0 3.328-1.188 4.641-2.156 2.547-1.844 5.172-3.625 7.781-5.391 0.562-0.391 1.094-0.844 1.563-1.359zM28 6.5c0 1.75-1.297 3.328-2.672 4.281-2.438 1.687-4.891 3.375-7.313 5.078-1.016 0.703-2.734 2.141-4 2.141h-0.031c-1.266 0-2.984-1.437-4-2.141-2.422-1.703-4.875-3.391-7.297-5.078-1.109-0.75-2.688-2.516-2.688-3.938 0-1.531 0.828-2.844 2.5-2.844h23c1.359 0 2.5 1.125 2.5 2.5z"></path>
</symbol>
<symbol id="iconPlayCircle" viewBox="0 0 24 24">
<path d="M12 20.016c4.406 0 8.016-3.609 8.016-8.016s-3.609-8.016-8.016-8.016-8.016 3.609-8.016 8.016 3.609 8.016 8.016 8.016zM12 2.016c5.531 0 9.984 4.453 9.984 9.984s-4.453 9.984-9.984 9.984-9.984-4.453-9.984-9.984 4.453-9.984 9.984-9.984zM9.984 16.5v-9l6 4.5z"></path>
</symbol>
<symbol id="iconPlayCircleVazado" viewBox="0 0 24 28">
<path d="M12 2c6.625 0 12 5.375 12 12s-5.375 12-12 12-12-5.375-12-12 5.375-12 12-12zM18 14.859c0.313-0.172 0.5-0.5 0.5-0.859s-0.187-0.688-0.5-0.859l-8.5-5c-0.297-0.187-0.688-0.187-1-0.016-0.313 0.187-0.5 0.516-0.5 0.875v10c0 0.359 0.187 0.688 0.5 0.875 0.156 0.078 0.328 0.125 0.5 0.125s0.344-0.047 0.5-0.141z"></path>
</symbol>
<symbol id="iconWhatsapp" viewBox="0 0 24 28">
<path d="M15.391 15.219c0.266 0 2.812 1.328 2.922 1.516 0.031 0.078 0.031 0.172 0.031 0.234 0 0.391-0.125 0.828-0.266 1.188-0.359 0.875-1.813 1.437-2.703 1.437-0.75 0-2.297-0.656-2.969-0.969-2.234-1.016-3.625-2.75-4.969-4.734-0.594-0.875-1.125-1.953-1.109-3.031v-0.125c0.031-1.031 0.406-1.766 1.156-2.469 0.234-0.219 0.484-0.344 0.812-0.344 0.187 0 0.375 0.047 0.578 0.047 0.422 0 0.5 0.125 0.656 0.531 0.109 0.266 0.906 2.391 0.906 2.547 0 0.594-1.078 1.266-1.078 1.625 0 0.078 0.031 0.156 0.078 0.234 0.344 0.734 1 1.578 1.594 2.141 0.719 0.688 1.484 1.141 2.359 1.578 0.109 0.063 0.219 0.109 0.344 0.109 0.469 0 1.25-1.516 1.656-1.516zM12.219 23.5c5.406 0 9.812-4.406 9.812-9.812s-4.406-9.812-9.812-9.812-9.812 4.406-9.812 9.812c0 2.063 0.656 4.078 1.875 5.75l-1.234 3.641 3.781-1.203c1.594 1.047 3.484 1.625 5.391 1.625zM12.219 1.906c6.5 0 11.781 5.281 11.781 11.781s-5.281 11.781-11.781 11.781c-1.984 0-3.953-0.5-5.703-1.469l-6.516 2.094 2.125-6.328c-1.109-1.828-1.687-3.938-1.687-6.078 0-6.5 5.281-11.781 11.781-11.781z"></path>
</symbol>
<symbol id="iconChat" viewBox="0 0 24 24">
<path d="M18 8.016v-2.016h-12v2.016h12zM14.016 14.016v-2.016h-8.016v2.016h8.016zM6 9v2.016h12v-2.016h-12zM20.016 2.016c1.078 0 1.969 0.891 1.969 1.969v12c0 1.078-0.891 2.016-1.969 2.016h-14.016l-3.984 3.984v-18c0-1.078 0.891-1.969 1.969-1.969h16.031z"></path>
</symbol>
<symbol id="iconEmail" viewBox="0 0 28 28">
<path d="M28 11.094v12.406c0 1.375-1.125 2.5-2.5 2.5h-23c-1.375 0-2.5-1.125-2.5-2.5v-12.406c0.469 0.516 1 0.969 1.578 1.359 2.594 1.766 5.219 3.531 7.766 5.391 1.313 0.969 2.938 2.156 4.641 2.156h0.031c1.703 0 3.328-1.188 4.641-2.156 2.547-1.844 5.172-3.625 7.781-5.391 0.562-0.391 1.094-0.844 1.563-1.359zM28 6.5c0 1.75-1.297 3.328-2.672 4.281-2.438 1.687-4.891 3.375-7.313 5.078-1.016 0.703-2.734 2.141-4 2.141h-0.031c-1.266 0-2.984-1.437-4-2.141-2.422-1.703-4.875-3.391-7.297-5.078-1.109-0.75-2.688-2.516-2.688-3.938 0-1.531 0.828-2.844 2.5-2.844h23c1.359 0 2.5 1.125 2.5 2.5z"></path>
</symbol>
<symbol id="iconYoutube" viewBox="0 0 28 28">
<path d="M11.109 17.625l7.562-3.906-7.562-3.953v7.859zM14 4.156c5.891 0 9.797 0.281 9.797 0.281 0.547 0.063 1.75 0.063 2.812 1.188 0 0 0.859 0.844 1.109 2.781 0.297 2.266 0.281 4.531 0.281 4.531v2.125s0.016 2.266-0.281 4.531c-0.25 1.922-1.109 2.781-1.109 2.781-1.062 1.109-2.266 1.109-2.812 1.172 0 0-3.906 0.297-9.797 0.297v0c-7.281-0.063-9.516-0.281-9.516-0.281-0.625-0.109-2.031-0.078-3.094-1.188 0 0-0.859-0.859-1.109-2.781-0.297-2.266-0.281-4.531-0.281-4.531v-2.125s-0.016-2.266 0.281-4.531c0.25-1.937 1.109-2.781 1.109-2.781 1.062-1.125 2.266-1.125 2.812-1.188 0 0 3.906-0.281 9.797-0.281v0z"></path>
</symbol>
<symbol id="iconComment" viewBox="0 0 32 32">
<path d="M16 2c8.837 0 16 5.82 16 13s-7.163 13-16 13c-0.849 0-1.682-0.054-2.495-0.158-3.437 3.437-7.539 4.053-11.505 4.144v-0.841c2.142-1.049 4-2.961 4-5.145 0-0.305-0.024-0.604-0.068-0.897-3.619-2.383-5.932-6.024-5.932-10.103 0-7.18 7.163-13 16-13z"></path>
</symbol>
<symbol id="iconArrowLeftLine" viewBox="0 0 20 20">
<path d="M3.828 9l6.071-6.071-1.414-1.414-8.485 8.485 8.485 8.485 1.414-1.414-6.071-6.071h16.172v-2h-16.172z"></path>
</symbol>
<symbol id="iconArrowRightLine" viewBox="0 0 20 20">
<path d="M16.172 9l-6.071-6.071 1.414-1.414 8.485 8.485-8.485 8.485-1.414-1.414 6.071-6.071h-16.172v-2z"></path>
</symbol>
<symbol id="iconArrowRightLine_2" viewBox="0 0 24 24">
<path d="M19.9 12.4c0.1-0.2 0.1-0.5 0-0.8-0.1-0.1-0.1-0.2-0.2-0.3l-7-7c-0.4-0.4-1-0.4-1.4 0s-0.4 1 0 1.4l5.3 5.3h-11.6c-0.6 0-1 0.4-1 1s0.4 1 1 1h11.6l-5.3 5.3c-0.4 0.4-0.4 1 0 1.4 0.2 0.2 0.5 0.3 0.7 0.3s0.5-0.1 0.7-0.3l7-7c0.1-0.1 0.2-0.2 0.2-0.3z"></path>
</symbol>
<symbol id="iconPhone" viewBox="0 0 32 32">
<path d="M22 20c-2 2-2 4-4 4s-4-2-6-4-4-4-4-6 2-2 4-4-4-8-6-8-6 6-6 6c0 4 4.109 12.109 8 16s12 8 16 8c0 0 6-4 6-6s-6-8-8-6z"></path>
</symbol>
<symbol id="iconPlay" viewBox="0 0 32 32">s
<path d="M6 0v32l20-15.977-20-16.023z"></path>
</symbol>
<symbol id="iconQuoteLeft" viewBox="0 0 26 28">
<path d="M12 15v6c0 1.656-1.344 3-3 3h-6c-1.656 0-3-1.344-3-3v-11c0-4.406 3.594-8 8-8h1c0.547 0 1 0.453 1 1v2c0 0.547-0.453 1-1 1h-1c-2.203 0-4 1.797-4 4v0.5c0 0.828 0.672 1.5 1.5 1.5h3.5c1.656 0 3 1.344 3 3zM26 15v6c0 1.656-1.344 3-3 3h-6c-1.656 0-3-1.344-3-3v-11c0-4.406 3.594-8 8-8h1c0.547 0 1 0.453 1 1v2c0 0.547-0.453 1-1 1h-1c-2.203 0-4 1.797-4 4v0.5c0 0.828 0.672 1.5 1.5 1.5h3.5c1.656 0 3 1.344 3 3z"></path>
</symbol>
<symbol id="iconHelp" viewBox="0 0 24 28">
<path d="M14 21.5v-3c0-0.281-0.219-0.5-0.5-0.5h-3c-0.281 0-0.5 0.219-0.5 0.5v3c0 0.281 0.219 0.5 0.5 0.5h3c0.281 0 0.5-0.219 0.5-0.5zM18 11c0-2.859-3-5-5.688-5-2.547 0-4.453 1.094-5.797 3.328-0.141 0.219-0.078 0.5 0.125 0.656l2.063 1.563c0.078 0.063 0.187 0.094 0.297 0.094 0.141 0 0.297-0.063 0.391-0.187 0.734-0.938 1.047-1.219 1.344-1.437 0.266-0.187 0.781-0.375 1.344-0.375 1 0 1.922 0.641 1.922 1.328 0 0.812-0.422 1.219-1.375 1.656-1.109 0.5-2.625 1.797-2.625 3.313v0.562c0 0.281 0.219 0.5 0.5 0.5h3c0.281 0 0.5-0.219 0.5-0.5v0c0-0.359 0.453-1.125 1.188-1.547 1.188-0.672 2.812-1.578 2.812-3.953zM24 14c0 6.625-5.375 12-12 12s-12-5.375-12-12 5.375-12 12-12 12 5.375 12 12z"></path>
</symbol>
<symbol id="iconCity" viewBox="0 0 24 24">
<path d="M18.984 15v-2.016h-1.969v2.016h1.969zM18.984 18.984v-1.969h-1.969v1.969h1.969zM12.984 6.984v-1.969h-1.969v1.969h1.969zM12.984 11.016v-2.016h-1.969v2.016h1.969zM12.984 15v-2.016h-1.969v2.016h1.969zM12.984 18.984v-1.969h-1.969v1.969h1.969zM6.984 11.016v-2.016h-1.969v2.016h1.969zM6.984 15v-2.016h-1.969v2.016h1.969zM6.984 18.984v-1.969h-1.969v1.969h1.969zM15 11.016h6v9.984h-18v-14.016h6v-1.969l3-3 3 3v6z"></path>
</symbol>
<symbol id="iconMoney" viewBox="0 0 20 20">
<path d="M11 16.755v2.245h-2v-2.143c-1.712-0.1-3.066-0.589-4.241-1.797l1.718-1.74c0.859 0.87 2.023 1.16 3.282 1.16 1.565 0 2.405-0.599 2.405-1.702 0-0.483-0.133-0.889-0.42-1.16-0.267-0.251-0.572-0.387-1.202-0.483l-1.642-0.232c-1.164-0.174-2.022-0.541-2.634-1.141-0.648-0.657-0.973-1.546-0.973-2.707 0-2.155 1.382-3.743 3.707-4.1v-1.955h2v1.932c1.382 0.145 2.465 0.62 3.415 1.551l-1.679 1.682c-0.859-0.832-1.889-0.947-2.787-0.947-1.412 0-2.099 0.792-2.099 1.74 0 0.348 0.115 0.716 0.401 0.986 0.267 0.252 0.706 0.464 1.26 0.541l1.602 0.232c1.241 0.174 2.023 0.522 2.596 1.063 0.726 0.696 1.050 1.702 1.050 2.92 0 2.25-1.567 3.662-3.759 4.055z"></path>
</symbol>
<symbol id="iconList" viewBox="0 0 44 32">
<path d="M0 6h28v6h-28v-6zM0 14h28v6h-28v-6zM0 22h28v6h-28v-6z"></path>
<path d="M31 18l6 6 6-6z"></path>
<path d="M43 16l-6-6-6 6z"></path>
</symbol>
<symbol id="iconSearch" viewBox="0 0 26 28">
<path d="M18 13c0-3.859-3.141-7-7-7s-7 3.141-7 7 3.141 7 7 7 7-3.141 7-7zM26 26c0 1.094-0.906 2-2 2-0.531 0-1.047-0.219-1.406-0.594l-5.359-5.344c-1.828 1.266-4.016 1.937-6.234 1.937-6.078 0-11-4.922-11-11s4.922-11 11-11 11 4.922 11 11c0 2.219-0.672 4.406-1.937 6.234l5.359 5.359c0.359 0.359 0.578 0.875 0.578 1.406z"></path>
</symbol>
<symbol id="iconTripadvisor" viewBox="0 0 36 28">
<path d="M10.172 15.578c0 0.812-0.656 1.469-1.453 1.469-0.812 0-1.469-0.656-1.469-1.469 0-0.797 0.656-1.453 1.469-1.453 0.797 0 1.453 0.656 1.453 1.453zM28.203 15.563c0 0.812-0.656 1.469-1.469 1.469s-1.469-0.656-1.469-1.469 0.656-1.453 1.469-1.453 1.469 0.641 1.469 1.453zM11.953 15.578c0-1.656-1.359-3.016-3.016-3.016-1.672 0-3.016 1.359-3.016 3.016 0 1.672 1.344 3.016 3.016 3.016 1.656 0 3.016-1.344 3.016-3.016zM29.969 15.563c0-1.656-1.344-3.016-3.016-3.016-1.656 0-3.016 1.359-3.016 3.016 0 1.672 1.359 3.016 3.016 3.016 1.672 0 3.016-1.344 3.016-3.016zM13.281 15.578c0 2.406-1.937 4.359-4.344 4.359s-4.359-1.953-4.359-4.359c0-2.391 1.953-4.344 4.359-4.344s4.344 1.953 4.344 4.344zM31.313 15.563c0 2.406-1.953 4.344-4.359 4.344-2.391 0-4.344-1.937-4.344-4.344s1.953-4.344 4.344-4.344c2.406 0 4.359 1.937 4.359 4.344zM16.25 15.609c0-3.984-3.234-7.219-7.219-7.219-3.969 0-7.203 3.234-7.203 7.219s3.234 7.219 7.203 7.219c3.984 0 7.219-3.234 7.219-7.219zM26.688 6.656c-2.578-1.125-5.484-1.734-8.687-1.734s-6.391 0.609-8.953 1.719c4.953 0.016 8.953 4.016 8.953 8.969 0-4.859 3.859-8.813 8.687-8.953zM34.172 15.609c0-3.984-3.219-7.219-7.203-7.219s-7.219 3.234-7.219 7.219 3.234 7.219 7.219 7.219 7.203-3.234 7.203-7.219zM30.016 6.766h5.984c-0.938 1.094-1.625 2.562-1.797 3.578 1.078 1.484 1.719 3.297 1.719 5.266 0 4.953-4.016 8.953-8.953 8.953-2.812 0-5.313-1.281-6.953-3.297 0 0-0.734 0.875-2.016 2.797-0.219-0.453-1.328-2.031-2-2.812-1.641 2.031-4.156 3.313-6.969 3.313-4.937 0-8.953-4-8.953-8.953 0-1.969 0.641-3.781 1.719-5.266-0.172-1.016-0.859-2.484-1.797-3.578h5.703c3.063-2.047 7.516-3.328 12.297-3.328s8.953 1.281 12.016 3.328z"></path>
</symbol>
<symbol id="iconHandshake" viewBox="0 0 36 28">
<path d="M3 18c1.313 0 1.313-2 0-2s-1.313 2 0 2zM26.016 17.094c-1.234-1.609-2.438-3.25-3.844-4.719l-1.953 2.188c-1.719 1.953-4.797 1.906-6.469-0.094-1.188-1.437-1.188-3.5 0.031-4.922l2.766-3.219c-0.969-0.5-2.141-0.328-3.187-0.328-0.922 0-1.813 0.375-2.469 1.031l-2.469 2.469h-2.422v8.5c0.688 0 1.312-0.094 1.859 0.438l4.641 4.562c0.953 0.922 2.187 1.734 3.547 1.734 0.703 0 1.453-0.234 1.953-0.734 1.172 0.406 2.531-0.25 2.891-1.453 0.75 0.063 1.437-0.172 1.984-0.688 0.359-0.328 0.828-0.984 0.781-1.5 0.141 0.141 0.484 0.156 0.672 0.156 1.859 0 2.828-1.953 1.687-3.422zM28.5 18h1.5v-8h-1.453l-2.453-2.812c-0.656-0.75-1.641-1.188-2.641-1.188h-2.609c-0.875 0-1.719 0.391-2.281 1.047l-3.266 3.797c-0.578 0.688-0.578 1.656-0.016 2.344 0.891 1.062 2.531 1.078 3.453 0.047l3.016-3.406c0.719-0.797 2.031-0.047 1.703 0.969 0.594 0.688 1.234 1.359 1.813 2.047 0.781 0.969 1.531 1.984 2.297 2.969 0.484 0.625 0.844 1.375 0.938 2.188zM33 18c1.313 0 1.313-2 0-2s-1.313 2 0 2zM36 9v10c0 0.547-0.453 1-1 1h-6.781c-0.562 1.359-1.797 2.266-3.234 2.469-0.672 0.984-1.703 1.734-2.859 1.984-0.859 1.094-2.25 1.75-3.641 1.656-2.578 1.453-5.484 0.187-7.406-1.703l-4.484-4.406h-5.594c-0.547 0-1-0.453-1-1v-10.5c0-0.547 0.453-1 1-1h6.578c1.813-1.813 3.062-3.5 5.781-3.5h1.828c1.016 0 2 0.313 2.828 0.875 0.828-0.562 1.813-0.875 2.828-0.875h2.609c2.969 0 4.203 1.937 6 4h5.547c0.547 0 1 0.453 1 1z"></path>
</symbol>
<symbol id="iconMailLine" viewBox="0 0 24 24">
<path d="M20 3h-16c-1.7 0-3 1.3-3 3v12c0 1.7 1.3 3 3 3h16c1.7 0 3-1.3 3-3v-12c0-1.7-1.3-3-3-3zM4 5h16c0.4 0 0.7 0.2 0.9 0.6l-8.9 6.2-8.9-6.2c0.2-0.4 0.5-0.6 0.9-0.6zM20 19h-16c-0.6 0-1-0.4-1-1v-10.1l8.4 5.9c0.2 0.1 0.4 0.2 0.6 0.2s0.4-0.1 0.6-0.2l8.4-5.9v10.1c0 0.6-0.4 1-1 1z"></path>
</symbol>
<symbol id="iconLocation" viewBox="0 0 20 20">
<path d="M10 20s-7-9.13-7-13c0-3.866 3.134-7 7-7s7 3.134 7 7v0c0 3.87-7 13-7 13zM10 9c1.105 0 2-0.895 2-2s-0.895-2-2-2v0c-1.105 0-2 0.895-2 2s0.895 2 2 2v0z"></path>
</symbol>
<symbol id="iconMailEnvelopeOpen" viewBox="0 0 32 32">
<path d="M20.638 20h-8.332l2.244 1.98 2.267 0.011-1.697 0.009h3.378l0.020-0.018-0.099 0.001 2.218-1.983zM21.757 19l3.243-2.9v-8.091c0-0.557-0.455-1.009-1-1.009h-15c-0.552 0-1 0.444-1 1.002v8.198l3.173 2.8h10.583zM13.091 6l3.409-3 3.409 3h4.093c1.107 0 1.997 0.895 1.997 2v3.36l3 2.64v14.006c0 1.1-0.897 1.994-2.004 1.994h-20.993c-1.114 0-2.004-0.893-2.004-1.994v-14.006l3-2.64v-3.36c0-1.112 0.894-2 1.997-2h4.093zM18.428 6l-1.928-1.7-1.928 1.7h3.856zM26 12.677v2.656l1.5-1.333-1.5-1.323zM7 15.333v-2.656l-1.5 1.323 1.5 1.333zM13.5 23l-7 6h20l-7-6h-6zM27.685 28.725v0 0c0.194-0.183 0.315-0.442 0.315-0.725v-13l-8 7.017 7.685 6.708zM5.315 28.725l7.685-6.708-8-7.017v13c0 0.283 0.121 0.542 0.315 0.725v0 0zM10 10v1h13v-1h-13zM10 13v1h13v-1h-13zM10 16v1h13v-1h-13z"></path>
</symbol>
<symbol id="iconEnvelopeCotacao" viewBox="0 0 28 28">
<title>envelope</title>
<path d="M28 11.094v12.406c0 1.375-1.125 2.5-2.5 2.5h-23c-1.375 0-2.5-1.125-2.5-2.5v-12.406c0.469 0.516 1 0.969 1.578 1.359 2.594 1.766 5.219 3.531 7.766 5.391 1.313 0.969 2.938 2.156 4.641 2.156h0.031c1.703 0 3.328-1.188 4.641-2.156 2.547-1.844 5.172-3.625 7.781-5.391 0.562-0.391 1.094-0.844 1.563-1.359zM28 6.5c0 1.75-1.297 3.328-2.672 4.281-2.438 1.687-4.891 3.375-7.313 5.078-1.016 0.703-2.734 2.141-4 2.141h-0.031c-1.266 0-2.984-1.437-4-2.141-2.422-1.703-4.875-3.391-7.297-5.078-1.109-0.75-2.688-2.516-2.688-3.938 0-1.531 0.828-2.844 2.5-2.844h23c1.359 0 2.5 1.125 2.5 2.5z"></path>
</symbol>
<symbol id="iconCalendar" viewBox="0 0 32 32">
<title>calendar</title>
<path d="M10 12h4v4h-4zM16 12h4v4h-4zM22 12h4v4h-4zM4 24h4v4h-4zM10 24h4v4h-4zM16 24h4v4h-4zM10 18h4v4h-4zM16 18h4v4h-4zM22 18h4v4h-4zM4 18h4v4h-4zM26 0v2h-4v-2h-14v2h-4v-2h-4v32h30v-32h-4zM28 30h-26v-22h26v22z"></path>
</symbol>
<symbol id="iconPhone" viewBox="0 0 32 32">
<path d="M2.126 1.188c1.278-1.281 5.141-1.495 5.17-0.817 0.029 0.677 3.479 8.191 3.509 8.869s-2.274 2.987-2.948 3.663c-0.668 0.669 4.508 6.533 4.606 6.644 0.11 0.099 5.96 5.287 6.628 4.617 0.674-0.676 2.979-2.985 3.653-2.955 0.676 0.029 8.173 3.487 8.849 3.518 0.676 0.029 0.463 3.9-0.815 5.182-1.093 1.095-6.752 5.071-16.592-2.029-1.079-0.622-2.788-2.049-5.38-4.646-0.001-0.001-0.003-0.003-0.005-0.004-0.002-0.003-0.004-0.004-0.006-0.006s-0.004-0.004-0.006-0.006c-0.001-0.002-0.003-0.004-0.004-0.005-2.59-2.598-4.014-4.312-4.635-5.393-7.083-9.864-3.116-15.537-2.024-16.632z"></path>
</symbol>
<symbol id="iconSubject" viewBox="0 0 24 24">
<path d="M3.984 5.016h16.031v1.969h-16.031v-1.969zM3.984 15v-2.016h16.031v2.016h-16.031zM20.016 9v2.016h-16.031v-2.016h16.031zM14.016 17.016v1.969h-10.031v-1.969h10.031z"></path>
</symbol>
</defs>
</svg>';

?>
 <link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" />
 <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.2.1.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.paroller.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
 
<!-- Include JavaScript Mailchimp -->

<?php
}
add_action( 'wp_footer', 'theme_footer_script' );


//=====================
//Sessão para a escolha do Idioma
//=====================
		
	//Sessions PHP

//get_template_part( 'inc/function', 'language' );


function linkHome(){
	if( is_home() || is_front_page() ) {
		return '#up';
	} else {
		return get_home_url();
	}
}

function classScrollDown(){
	if ( is_home() || is_front_page() ){
		return 'u-isScrollDown';
	} else {
		return false;
	}
}


add_filter( 'body_class','my_body_classes' );
function my_body_classes( $classes ) {
 
    if ( is_page() ) {
     
        $classes[] = 'Page--' . basename(get_permalink());
        //$classes[] = 'class-name-two'; // Second Class
         
    }
     
    return $classes;
     
}

function switch_img_Mobile() {


	if( wp_is_mobile() ){
			$var_img_file = '--mobile';
			return $var_img_file;
		}
	}






class Custom_Post_Type_Image_Upload {
	
	
	public function __construct() {
		
		add_action( 'init', array( &$this, 'init' ) );
		
		if ( is_admin() ) {
			add_action( 'admin_init', array( &$this, 'admin_init' ) );
		}
	}
	
	
	/** Frontend methods ******************************************************/
	
	//===========================================================================
	// CUSTOM POST TYPES
	//===========================================================================

	/**
	 * Register the custom post type
	 */
	public function init() {

		// DESENVOLVA CUSTOM POST TYPES AQUI

	}

//==========================================
// METABOX
//========================================


//================================
// CASES DE SUCESSO
//================================
	
	
	/** Admin methods ******************************************************/
	
	
	/**
	 * Initialize the admin, adding actions to properly display and handle 
	 * the Book custom post type add/edit page
	 */
	public function admin_init() {
		global $pagenow;
		
		if ( $pagenow == 'post-new.php' || $pagenow == 'post.php' || $pagenow == 'edit.php' ) {
			
			add_action( 'add_meta_boxes', array( &$this, 'meta_boxes' ) );
			add_filter( 'enter_title_here', array( &$this, 'enter_title_here' ), 1, 2 );
			add_action( 'save_post', array( &$this, 'meta_boxes_save' ), 1, 2 );
		}
	}
	
	
	/**
	 * Save meta boxes
	 * 
	 * Runs when a post is saved and does an action which the write panel save scripts can hook into.
	 */
	public function meta_boxes_save( $post_id, $post ) {
		if ( empty( $post_id ) || empty( $post ) || empty( $_POST ) ) return;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
		if ( is_int( wp_is_post_revision( $post ) ) ) return;
		if ( is_int( wp_is_post_autosave( $post ) ) ) return;
		if ( ! current_user_can( 'edit_post', $post_id ) ) return;
		if ( $post->post_type != 'projetos' ) return;
			
		$this->process_book_meta( $post_id, $post );
	}
	
	
	/**
	 * Function for processing and storing all book data.
	 */
	private function process_book_meta( $post_id, $post ) {
		update_post_meta( $post_id, '_image_id', $_POST['upload_image_id'] );
		//update_post_meta( $post_id, 'iframe_video', $_POST['multimidia_iframe_video'] );
		update_post_meta( $post_id, 'var_tipo', $_POST['multimidia_tipo'] );
		update_post_meta( $post_id, 'value_line_1', $_POST['multimidia_value_line_1'] );
		update_post_meta( $post_id, 'value_line_2', $_POST['multimidia_value_line_2'] );

	}
	
	
	/**
	 * Set a more appropriate placeholder text for the New Book title field
	 */
	public function enter_title_here( $text, $post ) {
		if ( $post->post_type == 'projetos' ) return __( 'Título do Projeto' );
		return $text;
	}
	
	
	/**
	 * Add and remove meta boxes from the edit page
	 */
	public function meta_boxes() {
		add_meta_box( 'book-image', __( 'Multimidia' ), array( &$this, 'book_image_meta_box' ), 'projetos', 'normal', 'high' );
	}
	
	
	/**
	 * Display the image meta box
	 */
	public function book_image_meta_box() {
		global $post;

		$var_tipo = intval( get_post_meta( $post->ID, 'var_tipo', true ) );
		//$iframe_video = esc_html( get_post_meta( $post->ID, 'iframe_video', true ) );
    	$value_line_1 = esc_html( get_post_meta( $post->ID, 'value_line_1', true ) );
    	$value_line_2 = esc_html( get_post_meta( $post->ID, 'value_line_2', true ) );
		
		$image_src = '';
		
		$image_id = get_post_meta( $post->ID, '_image_id', true );
		$image_src = wp_get_attachment_url( $image_id );
		
		?>

		<table>
		 <tr>
            <td style="width: 100%;">Tipo</td>
            <td>
                <select id="tipoCase" style="width: 200px" name="multimidia_tipo" onchange="showdiv()">
                <?php
                // Generate all items of drop-down list
                for ( $tipo = 8; $tipo >= 1; $tipo -- ) {
                	
                	switch ( $tipo ) {
                		case 1 : 
                			$titleOption = 'Emprego e Renda';
                			break;
                		
                		case 2 : 
                			$titleOption = 'Educação';
                			break;

                		case 3 : 
                			$titleOption = 'Saúde';
                			break;

                		case 4 : 
                			$titleOption = 'Transparência';
                			break;

                		case 5 : 
                			$titleOption = 'Infraestrutura';
                			break;

                		case 6 : 
                			$titleOption = 'Economia';
                			break;

                		case 7 : 
                			$titleOption = 'Assistência Social';
                			break;

                		case 8 : 
                			$titleOption = 'Habitação';
                			break;
                	}


                ?>
                    <option value="<?php echo $tipo; ?>" <?php echo selected( $tipo, $var_tipo ) ?>  data-div="Div<?php echo $tipo; ?>">
                    	<?php echo $titleOption; ?>  
					</option>
                    <?php } ?>
                </select>
            </td>
        </tr>

       <!--  <tr id="Div1" class="contentTipo Div1 Div2 Div3 Div4 Div5 Div6 Div7" style="display: none;">
           <td style="width: 100%"><strong>Iframe ou Embed do vídeo</strong></td>
           <td><input type="text" size="80" name="multimidia_iframe_video" value="<?php //echo $iframe_video; ?>" placeholder="Cole o código HTML do iframe ou embed do vídeo" /></td>
       </tr> -->
    	 <tr id="Div2" class="contentTipo Div1 Div2 Div3 Div4 Div5 Div6 Div7 Div8 Div9 Div10 Div11 Div12" style="display: none;">
            <td style="width: 100%"><strong>Valor Linha 1</strong></td>
            <td><input type="text" size="80" name="multimidia_value_line_1" value="<?php echo $value_line_1; ?>" /></td>
        </tr>
         <tr id="Div2" class="contentTipo Div1 Div2 Div3 Div4 Div5 Div6 Div7 Div8 Div9 Div10 Div11 Div12" style="display: none;">
            <td style="width: 100%"><strong>Valor Linha 2</strong></td>
            <td><input type="text" size="80" name="multimidia_value_line_2" value="<?php echo $value_line_2; ?>" /></td>
        </tr>
         <tr id="Div1" class="contentTipo Div1 Div2 Div3 Div4 Div5 Div6 Div7 Div8 Div9 Div10 Div11 Div12" style="display: none;">
            <td style="width: 100%"><strong>Imagem de capa</strong></td>
            <td>
            	<img id="book_image" src="<?php echo $image_src ?>" style="max-width:280px;" />
		<input type="hidden" name="upload_image_id" id="upload_image_id" value="<?php echo $image_id; ?>" />
		<p>
			<a title="<?php esc_attr_e( 'Incluir / Alterar imagem' ) ?>" href="#" id="set-book-image"><?php _e( 'Incluir / Alterar imagem' ) ?></a>
			<a title="<?php esc_attr_e( 'Remover imagem' ) ?>" href="#" id="remove-book-image" style="<?php echo ( ! $image_id ? 'display:none;' : '' ); ?>"><?php _e( 'Remover imagem' ) ?></a>
		</p>
            </td>
        </tr>
    </table>
		
		<script type="text/javascript">
			
			function showdiv()
				{
				   var divID = $("#tipoCase option:selected").attr("data-div");
				   divID = divID.replace(" ","");
				   // $("tr#"+divID).show();
				   // $("tr#"+divID).siblings().hide();
   					$("tr.contentTipo").hide();
   					$("tr."+divID).show();
				}

		jQuery(document).ready(function($) {

			// Hide Or show by Tipo
			var divID = $("#tipoCase option:selected").attr("data-div");
			$("tr."+divID).show();
			
			// save the send_to_editor handler function
			window.send_to_editor_default = window.send_to_editor;
	
			$('#set-book-image').click(function(){
				
				// replace the default send_to_editor handler function with our own
				window.send_to_editor = window.attach_image;
				tb_show('', 'media-upload.php?post_id=<?php echo $post->ID ?>&amp;type=image&amp;TB_iframe=true');
				
				return false;
			});
			
			$('#remove-book-image').click(function() {
				
				$('#upload_image_id').val('');
				$('img').attr('src', '');
				$(this).hide();
				
				return false;
			});
			
			// handler function which is invoked after the user selects an image from the gallery popup.
			// this function displays the image and sets the id so it can be persisted to the post meta
			window.attach_image = function(html) {
				
				// turn the returned image html into a hidden image element so we can easily pull the relevant attributes we need
				$('body').append('<div id="temp_image">' + html + '</div>');
					
				var img = $('#temp_image').find('img');
				
				imgurl   = img.attr('src');
				imgclass = img.attr('class');
				imgid    = parseInt(imgclass.replace(/\D/g, ''), 10);
	
				$('#upload_image_id').val(imgid);
				$('#remove-book-image').show();
	
				$('img#book_image').attr('src', imgurl);
				try{tb_remove();}catch(e){};
				$('#temp_image').remove();
				
				// restore the send_to_editor handler function
				window.send_to_editor = window.send_to_editor_default;
				
			}
	
		});
		</script>
		<?php
	}
}

// finally instantiate our plugin class and add it to the set of globals
$GLOBALS['custom_post_type_image_upload'] = new Custom_Post_Type_Image_Upload();




//================================
// MATERIAIS e VÍDEOS
//================================



// Cria a meta_box
function conteudo_metabox() {
	
	// Tipos de post para a metabox
	$screens = array( 'clippings', 'video', 'depoimentos' );

	foreach ( $screens as $screen ) {

		add_meta_box(
			'conteudo_meta_box',          // ID da Meta Box 
			'Campos adicionais do conteúdo',   // Título
			'conteudo_metabox_callback',  // Função de callback
			$screen,                    // Local onde ela vai aparecer
			'normal',                   // Contexto
			'high'                      // Prioridade
		);
		
	} // foreach
	
} // Cria a meta_box
add_action( 'add_meta_boxes', 'conteudo_metabox', 1 );

// Essa é a função que vai exibir os dados para o usuário
function conteudo_metabox_callback( $post ) {

	// Adiciona um campo para verificação posterior
	wp_nonce_field( 'conteudo_custom_metabox', 'conteudo_custom_metabox_nonce' );
	
	$_urlswitch = get_post_meta( $post->ID, '_urlswitch', true );

	if ( 'clippings' == get_post_type() ) {
		$placeholder = 'Cole aqui o novo link do post';
		$title = 'LINK';
	}
	elseif ( 'video' == get_post_type() ) {
		$placeholder = 'Cole aqui embed ou iframe do Vídeo';
		$title = 'EMBED DO VÍDEO';
	}
	elseif ( 'depoimentos' == get_post_type() ) {
		$placeholder = 'Digite aqui o cargo';
		$title = 'CARGO';
	}

	
	echo '<h4>' . $title . '</h4>';
	echo '<input type="text" name="_urlswitch" class="widefat" value="' . esc_html( $_urlswitch ) . '" placeholder="' . $placeholder . '" />';
}

function conteudo_save_custom_metabox_data( $post_id ) {

	// Verifica o campo nonce
	if ( ! isset( $_POST['conteudo_custom_metabox_nonce'] ) ) {
		return;
	}

	// Verifica se o campo nonce é válido
	if ( ! wp_verify_nonce( $_POST['conteudo_custom_metabox_nonce'], 'conteudo_custom_metabox' ) ) {
		return;
	}

	// Se o formulário ainda não foi enviado (estiver fazendo autosave) 
	// não faremos nada
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Verifica as permissões do usuário (mínimo: editar post).
	if ( isset( $_POST['post_type'] ) && 'contato' == $_POST['post_type'] ) {

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}

	/* Perfeito, agora vamos aos campos. */
	
	$_urlswitch = isset( $_POST['_urlswitch'] ) ? $_POST['_urlswitch'] : null;

	// Atualiza os dados no BD
	
	update_post_meta( $post_id, '_urlswitch', $_urlswitch );
}
add_action( 'save_post', 'conteudo_save_custom_metabox_data' );






//======================
// Taxonomies
//=====================

add_action( 'init', 'create_my_taxonomies', 0 );

function create_my_taxonomies() {

}

//==================================
// Filter and Columns in postTypes
//==================================

add_filter( 'manage_edit-cases_sucesso_columns', 'my_columns' );

function my_columns( $columns ) {
    $columns['var_tipo'] = 'Tipo';
    unset( $columns['comments'] );
    return $columns;
}

add_action( 'manage_posts_custom_column', 'populate_columns' );

function populate_columns( $column ) {
    if ( 'var_tipo' == $column ) {
        $tipo = get_post_meta( get_the_ID(), 'var_tipo', true );
        
        switch ($tipo) {
        	case 1:
        		echo 'Vídeo';
        		break;
        	case 2:
        		echo 'Depoimento';
        		break;
        	case 3:
        		echo 'Apenas logotipo';
        		break;
        	
        }
    }
}

add_filter( 'manage_edit-cases_sucesso_sortable_columns', 'sort_me' );

function sort_me( $columns ) {
    $columns['var_tipo'] = 'var_tipo';
 
    return $columns;
}


//add_filter( 'request', 'column_ordering' );
 
add_filter( 'request', 'column_orderby' );
 
function column_orderby ( $vars ) {
    if ( !is_admin() )
        return $vars;
    
    if ( isset( $vars['orderby'] ) && 'var_tipo' == $vars['orderby'] ) {
        $vars = array_merge( $vars, array( 'meta_key' => 'var_tipo', 'orderby' => 'meta_value_num' ) );
    }
    return $vars;
}

//DIMINUI O TAMANHO DO EXCERPT EM NOTÍCIAS DA ELOHS

add_filter('excerpt_length', 'custom_excerpt_length');
function custom_excerpt_length($length) {
return 30; //Nova quantidade de caracteres do excerpt
}