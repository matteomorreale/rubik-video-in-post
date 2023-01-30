<?php 
    /*
    Plugin Name: Rubik Video in Post
    Version: 1.7
    Description: Permette di taggare i video presenti all'interno dei post
    Author: Matteo Morreale
    Author URI: https://madeit.srl
    */

    // Matteo Morreale - CC Attribuzione non Commerciale
    // Hai libertà di riutilizzare, modificare e condividere questo sorgente ma non a fini commerciali, ed è necessario citarne l'autore

    require_once("vendor/autoload.php");
    use Spatie\SchemaOrg\Schema;

	// Define path and URL to the ACF plugin.
	if( !function_exists('acf_add_local_field_group') ):
		define( 'MY_ACF_PATH', plugin_dir_path( __DIR__ ) . 'rubik-video-in-post/acf/' );
		define( 'MY_ACF_URL', plugin_dir_url( __FILE__ ) . 'acf/' );

		// Include the ACF plugin.
		include_once( MY_ACF_PATH . 'acf.php' );

		// Customize the url setting to fix incorrect asset URLs.
		add_filter('acf/settings/url', 'my_acf_settings_url');
		function my_acf_settings_url( $url ) {
			return MY_ACF_URL;
		}

		// (Optional) Hide the ACF admin menu item.
		//add_filter('acf/settings/show_admin', '__return_false');

		// When including the PRO plugin, hide the ACF Updates menu
		//add_filter('acf/settings/show_updates', '__return_false', 100);
	endif;

	// This one needs to be there, since ACF had to be included before
	require_once("include/struct.php");

	add_action( 'the_content', 'my_schema_org_videos');
	function my_schema_org_videos($content){
		$output = '';
		if(get_field("sono_presenti_uno_o_piu_video_nel_post")){
			if( have_rows('video_presenti_nel_post') ):
				while ( have_rows('video_presenti_nel_post') ) : the_row();
				$video = Schema::videoObject();

				if(!empty(get_sub_field('titolo_del_video'))){
					$video->name(get_sub_field('titolo_del_video'));
				}

				if(!empty(get_sub_field('url_tradizionale_del_video'))){
					$video->contentUrl(get_sub_field('url_tradizionale_del_video'));
				}

				if(!empty(get_sub_field('breve_descrizione_del_video'))){
					$video->description(get_sub_field('breve_descrizione_del_video'));
				}

				if(!empty(get_sub_field('url_di_embed_del_video'))){
					$video->embedUrl(get_sub_field('url_di_embed_del_video'));
				}

				if(!empty(get_sub_field('e_un_video_live')) && get_sub_field('e_un_video_live') ){
					$broadcast = Schema::BroadcastEvent();
					$broadcast->isLiveBroadcast(get_sub_field('e_un_video_live'));
					$output .= $broadcast->toJson();
				}

				if( !empty(get_post_thumbnail_id(get_the_ID())) && !empty(get_the_post_thumbnail_url( get_the_ID(), "large" ))){
					$video->thumbnailUrl($image);
				}

				$video->uploadDate(get_the_modified_time("Y-m-d\Th:i:s\Z"));
				$output .= $video->toJson();

				endwhile;
			endif; 
		}
		return $content . $output;
	}