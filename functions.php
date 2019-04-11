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
	load_theme_textdomain( 'templates-lp' );



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
<symbol id="iconPhone" viewBox="0 0 32 32">
<title>phone</title>
<path d="M22 20c-2 2-2 4-4 4s-4-2-6-4-4-4-4-6 2-2 4-4-4-8-6-8-6 6-6 6c0 4 4.109 12.109 8 16s12 8 16 8c0 0 6-4 6-6s-6-8-8-6z"></path>
</symbol>
<symbol id="iconEnvelope" viewBox="0 0 28 28">
<title>envelope</title>
<path d="M28 11.094v12.406c0 1.375-1.125 2.5-2.5 2.5h-23c-1.375 0-2.5-1.125-2.5-2.5v-12.406c0.469 0.516 1 0.969 1.578 1.359 2.594 1.766 5.219 3.531 7.766 5.391 1.313 0.969 2.938 2.156 4.641 2.156h0.031c1.703 0 3.328-1.188 4.641-2.156 2.547-1.844 5.172-3.625 7.781-5.391 0.562-0.391 1.094-0.844 1.563-1.359zM28 6.5c0 1.75-1.297 3.328-2.672 4.281-2.438 1.687-4.891 3.375-7.313 5.078-1.016 0.703-2.734 2.141-4 2.141h-0.031c-1.266 0-2.984-1.437-4-2.141-2.422-1.703-4.875-3.391-7.297-5.078-1.109-0.75-2.688-2.516-2.688-3.938 0-1.531 0.828-2.844 2.5-2.844h23c1.359 0 2.5 1.125 2.5 2.5z"></path>
</symbol>
<symbol id="iconFacebook" viewBox="0 0 32 32">
<title>facebook</title>
<path d="M19 6h5v-6h-5c-3.86 0-7 3.14-7 7v3h-4v6h4v16h6v-16h5l1-6h-6v-3c0-0.542 0.458-1 1-1z"></path>
</symbol>
<symbol id="iconInstagram" viewBox="0 0 32 32">
<title>instagram</title>
<path d="M16 2.881c4.275 0 4.781 0.019 6.462 0.094 1.563 0.069 2.406 0.331 2.969 0.55 0.744 0.288 1.281 0.638 1.837 1.194 0.563 0.563 0.906 1.094 1.2 1.838 0.219 0.563 0.481 1.412 0.55 2.969 0.075 1.688 0.094 2.194 0.094 6.463s-0.019 4.781-0.094 6.463c-0.069 1.563-0.331 2.406-0.55 2.969-0.288 0.744-0.637 1.281-1.194 1.837-0.563 0.563-1.094 0.906-1.837 1.2-0.563 0.219-1.413 0.481-2.969 0.55-1.688 0.075-2.194 0.094-6.463 0.094s-4.781-0.019-6.463-0.094c-1.563-0.069-2.406-0.331-2.969-0.55-0.744-0.288-1.281-0.637-1.838-1.194-0.563-0.563-0.906-1.094-1.2-1.837-0.219-0.563-0.481-1.413-0.55-2.969-0.075-1.688-0.094-2.194-0.094-6.463s0.019-4.781 0.094-6.463c0.069-1.563 0.331-2.406 0.55-2.969 0.288-0.744 0.638-1.281 1.194-1.838 0.563-0.563 1.094-0.906 1.838-1.2 0.563-0.219 1.412-0.481 2.969-0.55 1.681-0.075 2.188-0.094 6.463-0.094zM16 0c-4.344 0-4.887 0.019-6.594 0.094-1.7 0.075-2.869 0.35-3.881 0.744-1.056 0.412-1.95 0.956-2.837 1.85-0.894 0.888-1.438 1.781-1.85 2.831-0.394 1.019-0.669 2.181-0.744 3.881-0.075 1.713-0.094 2.256-0.094 6.6s0.019 4.887 0.094 6.594c0.075 1.7 0.35 2.869 0.744 3.881 0.413 1.056 0.956 1.95 1.85 2.837 0.887 0.887 1.781 1.438 2.831 1.844 1.019 0.394 2.181 0.669 3.881 0.744 1.706 0.075 2.25 0.094 6.594 0.094s4.888-0.019 6.594-0.094c1.7-0.075 2.869-0.35 3.881-0.744 1.050-0.406 1.944-0.956 2.831-1.844s1.438-1.781 1.844-2.831c0.394-1.019 0.669-2.181 0.744-3.881 0.075-1.706 0.094-2.25 0.094-6.594s-0.019-4.887-0.094-6.594c-0.075-1.7-0.35-2.869-0.744-3.881-0.394-1.063-0.938-1.956-1.831-2.844-0.887-0.887-1.781-1.438-2.831-1.844-1.019-0.394-2.181-0.669-3.881-0.744-1.712-0.081-2.256-0.1-6.6-0.1v0z"></path>
<path d="M16 7.781c-4.537 0-8.219 3.681-8.219 8.219s3.681 8.219 8.219 8.219 8.219-3.681 8.219-8.219c0-4.537-3.681-8.219-8.219-8.219zM16 21.331c-2.944 0-5.331-2.387-5.331-5.331s2.387-5.331 5.331-5.331c2.944 0 5.331 2.387 5.331 5.331s-2.387 5.331-5.331 5.331z"></path>
<path d="M26.462 7.456c0 1.060-0.859 1.919-1.919 1.919s-1.919-0.859-1.919-1.919c0-1.060 0.859-1.919 1.919-1.919s1.919 0.859 1.919 1.919z"></path>
</symbol>
<symbol id="icon-circle-left" viewBox="0 0 16 16">
<title>circle-left</title>
<path d="M8 16c4.418 0 8-3.582 8-8s-3.582-8-8-8-8 3.582-8 8 3.582 8 8 8zM8 1.5c3.59 0 6.5 2.91 6.5 6.5s-2.91 6.5-6.5 6.5-6.5-2.91-6.5-6.5 2.91-6.5 6.5-6.5z"></path>
<path d="M10.457 4.957l-1.414-1.414-4.457 4.457 4.457 4.457 1.414-1.414-3.043-3.043z"></path>
</symbol>
<symbol id="icon-circle-right" viewBox="0 0 16 16">
<title>circle-right</title>
<path d="M8 0c-4.418 0-8 3.582-8 8s3.582 8 8 8 8-3.582 8-8-3.582-8-8-8zM8 14.5c-3.59 0-6.5-2.91-6.5-6.5s2.91-6.5 6.5-6.5 6.5 2.91 6.5 6.5-2.91 6.5-6.5 6.5z"></path>
<path d="M5.543 11.043l1.414 1.414 4.457-4.457-4.457-4.457-1.414 1.414 3.043 3.043z"></path>
</symbol>
<symbol id="iconPlay" viewBox="0 0 32 32">
<title>play2</title>
<path d="M16 0c-8.837 0-16 7.163-16 16s7.163 16 16 16 16-7.163 16-16-7.163-16-16-16zM16 29c-7.18 0-13-5.82-13-13s5.82-13 13-13 13 5.82 13 13-5.82 13-13 13zM12 9l12 7-12 7z"></path>
</symbol>
</defs>
</svg>';

?>
 <link rel="stylesheet"  type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css" />
 <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.2.1.min.js"></script>
 <script src="<?php // echo get_template_directory_uri(); ?>/assets/js/jquery.paroller.min.js"></script>
 <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
 
<!-- Include JavaScript Mailchimp -->

<?php
}
add_action( 'wp_footer', 'theme_footer_script' );



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
		$labels_depoimentos = array(
			"name" => __( "Depoimentos", "" ),
			"singular_name" => __( "Depoimento", "" ),
			"menu_name" => __( "Depoimentos", "" ),
			"all_items" => __( "Todos os depoimentos", "" ),
			"add_new" => __( "Adicionar novo depoimento", "" ),
			"add_new_item" => __( "Adicionar novo depoimento", "" ),
			"edit_item" => __( "Editar depoimento", "" ),
			"new_item" => __( "Novo depoimento", "" ),
			"view_item" => __( "Visualizar depoimento", "" ),
			"view_items" => __( "Visualizar depoimentos", "" ),
			"search_items" => __( "Pesquisar depoimento", "" ),
			"not_found" => __( "Sem resultados", "" ),
			"not_found_in_trash" => __( "Sem resultados", "" ),
			"parent_item_colon" => __( "Relacionados", "" ),
			"featured_image" => __( "Imagem destacada", "" ),
			"set_featured_image" => __( "Editar imagem destacada", "" ),
			"remove_featured_image" => __( "Remover imagem destacada", "" ),
			"parent_item_colon" => __( "Relacionados", "" ),
		);

		$args_depoimentos = array(
			"label" => __( "Depoimentos", "" ),
			"labels" => $labels_depoimentos,
			"description" => "",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"show_in_rest" => false,
			"rest_base" => "",
			"has_archive" => false,
			"show_in_menu" => true,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"rewrite" => array("with_front" => false ),
			"query_var" => true,
			"menu_icon" => "dashicons-businessman",
			"supports" => array( "title", "editor", "thumbnail"),
		);

		register_post_type( "depoimentos", $args_depoimentos );

		$labels_titulo_site = array(
			"name" => __( "Título do site", "" ),
			"singular_name" => __( "Título do site", "" ),
			"menu_name" => __( "Título do site", "" ),
			"all_items" => __( "Todos os títulos do site", "" ),
			"add_new" => __( "Adicionar novo título pro site", "" ),
			"add_new_item" => __( "Adicionar novo Título do site", "" ),
			"edit_item" => __( "Editar Título do site", "" ),
			"new_item" => __( "Novo Título do site", "" ),
			"view_item" => __( "Visualizar Título do site", "" ),
			"view_items" => __( "Visualizar Título do site", "" ),
			"search_items" => __( "Pesquisar Título do site", "" ),
			"not_found" => __( "Sem resultados", "" ),
			"not_found_in_trash" => __( "Sem resultados", "" ),
			"parent_item_colon" => __( "Relacionados", "" ),
			"featured_image" => __( "Imagem destacada", "" ),
			"set_featured_image" => __( "Editar imagem destacada", "" ),
			"remove_featured_image" => __( "Remover imagem destacada", "" ),
			"parent_item_colon" => __( "Relacionados", "" ),
		);

		$args_titulo_site = array(
			"label" => __( "titulo_site", "" ),
			"labels" => $labels_titulo_site,
			"description" => "",
			"public" => true,
			"publicly_queryable" => true,
			"show_ui" => true,
			"show_in_rest" => false,
			"rest_base" => "",
			"has_archive" => false,
			"show_in_menu" => true,
			"exclude_from_search" => false,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hierarchical" => false,
			"rewrite" => array("with_front" => false ),
			"query_var" => true,
			"menu_icon" => "dashicons-businessman",
			"supports" => "title",
		);

		register_post_type( "titulo_site", $args_titulo_site );

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

//Console PHP - Desenvolvido por Paulo Arthur e Petrus Rennan

function console_php($obj){
	echo '<script type="text/javascript">
		console.log('.json_encode($obj).');
	</script>';	
}