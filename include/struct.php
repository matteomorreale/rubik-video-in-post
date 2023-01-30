<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_63ceb5aad71f4',
	'title' => 'Informazioni aggiuntive',
	'fields' => array(
		array(
			'key' => 'field_63ceb5bef4a5b',
			'label' => 'Sono presenti uno o più video nel post?',
			'name' => 'sono_presenti_uno_o_piu_video_nel_post',
			'aria-label' => '',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_63ceb5aaf4a5a',
			'label' => 'Video presenti nel post',
			'name' => 'video_presenti_nel_post',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_63ceb5bef4a5b',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'block',
			'pagination' => 0,
			'min' => 0,
			'max' => 0,
			'collapsed' => '',
			'button_label' => 'Aggiungi video',
			'rows_per_page' => 20,
			'sub_fields' => array(
				array(
					'key' => 'field_63d124b0e88d9',
					'label' => 'Titolo del video',
					'name' => 'titolo_del_video',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => 'Dare un titolo al video, non deve essere per forza quello originale di youtube, vimeo etc.',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_63ceb5aaf4a5a',
				),
				array(
					'key' => 'field_63ceb5e1f4a5c',
					'label' => 'Url tradizionale del video',
					'name' => 'url_tradizionale_del_video',
					'aria-label' => '',
					'type' => 'url',
					'instructions' => 'Inserisci l\'indirizzo del video, non quello di embed ma, ad esempio, l\'indirizzo del video su YouTube così come lo apriresti sul tuo pc.
Ad esempio: https://www.youtube.com/watch?v=dQw4w9WgXcQ',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'https://www.youtube.com/watch?v=',
					'parent_repeater' => 'field_63ceb5aaf4a5a',
				),
				array(
					'key' => 'field_63ceb609f4a5d',
					'label' => 'Url di EMBED del video',
					'name' => 'url_di_embed_del_video',
					'aria-label' => '',
					'type' => 'url',
					'instructions' => 'L\'indirizzo di EMBED del video, quindi non l\'indirizzo tradizionale ma quello fornito nel codice di EMBED.
Ad esempio: https://www.youtube.com/embed/dQw4w9WgXcQ',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'parent_repeater' => 'field_63ceb5aaf4a5a',
				),
				array(
					'key' => 'field_63ceb6dbf4a5e',
					'label' => 'Breve descrizione del video',
					'name' => 'breve_descrizione_del_video',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'maxlength' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'parent_repeater' => 'field_63ceb5aaf4a5a',
				),
				array(
					'key' => 'field_63ceb81af4a5f',
					'label' => 'È un video LIVE?',
					'name' => 'e_un_video_live',
					'aria-label' => '',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
					'parent_repeater' => 'field_63ceb5aaf4a5a',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
));

endif;		