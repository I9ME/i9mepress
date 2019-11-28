<?php

// CONTROLA A ESTRUTURA DO SITE POR COMPLETO
class i9mepress_construct {

	//$has_header: Controla a exibição do header
	public $has_header = true;

	//$has_footer: Controla a exibição do footer
	public $has_footer = true;

	public function console_php($obj){
		echo '<script type="text/javascript">
			console.log('.json_encode($obj).');
		</script>';	
	}

	public function excerpt_limiter($str, $chars=100){
		
		if (strlen($str) >= $chars){
			
			$str = substr($str, 0, $chars);
			$split = str_split($str);
			$final = $chars - 1;
			
			if ($split[$final] != " "){
		
				$aux = $final;
		
				while ($split[$aux] != " ") {
		
					unset($split[$aux]);
					$aux -= 1;
		
				}
				
				$real_chars = sizeof($split);
				return substr($str, 0, $real_chars) . "[...]";
		
			}else{
		
				return substr($str, 0, $chars). "[...]";
		
			}
		
		}else if (strlen($str) < $chars){
		
			return $str;
		
		}else{
		
			return "erro desconhecido, favor contatar o desenvolvedor da função.";
		}
	}

	public function global_query_have_posts($post_type){
		$args = array(
			"post_type" => $post_type,
		);
		
		$query = new WP_Query($args);
		return $query->have_posts();
	}

	public function get_youtube_thumbnail($link, $size=0) {
		$video_id = explode("?v=", $link)[1];
		
		$url_host = parse_url($link)["host"];
		
		if ($video_id && $url_host == "www.youtube.com") {
			if ($size == 0) {
				return "https://img.youtube.com/vi/". $video_id ."/0.jpg";
			}else if ($size == 1) {
				return "https://img.youtube.com/vi/". $video_id ."/1.jpg";
				
			}else if ($size == 2) {
				return "https://img.youtube.com/vi/". $video_id ."/2.jpg";
			}else if ($size >= 3) {
				return "https://img.youtube.com/vi/". $video_id ."/3.jpg";
				
			}
		}else{
			return get_template_directory_uri() . "/assets/images/imagem-modelo.png";
		}
    }
    
    public function SVGen () {

        $symbols = [
            
            '<symbol id="icon-close" viewBox="0 0 20 20">
			<title>close</title>
			<path d="M10 8.586l-7.071-7.071-1.414 1.414 7.071 7.071-7.071 7.071 1.414 1.414 7.071-7.071 7.071 7.071 1.414-1.414-7.071-7.071 7.071-7.071-1.414-1.414-7.071 7.071z"></path>
			</symbol>',

            '<symbol id="icon-menu" viewBox="0 0 20 20"><title>menu</title><path d="M0 3h20v2h-20v-2zM0 9h20v2h-20v-2zM0 15h20v2h-20v-2z"></path></symbol>',

            //ADICIONE SYMBOLS DO ICOMOON AQUI
        ];

        return $symbols;

    }
}

$i9mepress = new i9mepress_construct();