<?php
function fruitful_slide_skins_select() {
	$slide_anim_options = array(
		'0' => array(
			'value' =>	   'theme-default',
			'label' => __( 'default', 'fruitful' )
		),
		'1' => array(
			'value' =>	   'theme-dark',
			'label' => __( 'dark', 'fruitful' )
		),
		'2' => array(
			'value' =>	   'theme-bar',
			'label' => __( 'bar', 'fruitful' )
		),
		'4' => array(
			'value' =>	   'theme-light',
			'label' => __( 'light', 'fruitful' )
		)
	);

	return apply_filters( 'fruitful_slide_select', $slide_anim_options );
}

function fruitful_slide_select() {
	$slide_anim_options = array(
		'0' => array(
			'value' =>	   '0',
			'label' => __( 'None', 'fruitful' )
		),
		'1' => array(
			'value' =>	   '1',
			'label' => __( 'FlexSlider', 'fruitful' )
		),
		'2' => array(
			'value' =>	   '2',
			'label' => __( 'Nivo Slider', 'fruitful' )
		)
	);

	return apply_filters( 'fruitful_slide_select', $slide_anim_options );
}


function fruitful_flex_effect() {
	$slide_anim_options = array(
		'0' => array(
			'value' =>	   'random',
			'label' => __( 'random', 'fruitful' )
		),
		'1' => array(
			'value' =>	   'sliceDownRight',
			'label' => __( 'sliceDownRight', 'fruitful' )
		),
		'2' => array(
			'value' =>	   'sliceDownLeft',
			'label' => __( 'sliceDownLeft', 'fruitful' )
		),
		'3' => array(
			'value' =>	   'sliceUpRight',
			'label' => __( 'sliceUpRight', 'fruitful' )
		),
		'4' => array(
			'value' =>	   'sliceUpDown',
			'label' => __( 'sliceUpDown', 'fruitful' )
		),
		'5' => array(
			'value' =>	   'sliceUpDownLeft',
			'label' => __( 'sliceUpDownLeft', 'fruitful' )
		),
		'6' => array(
			'value' =>	   'fold',
			'label' => __( 'fold', 'fruitful' )
		),
		'7' => array(
			'value' =>	   'fade',
			'label' => __( 'fade', 'fruitful' )
		),
		'8' => array(
			'value' =>	   'boxRandom',
			'label' => __( 'boxRandom', 'fruitful' )
		),
		'9' => array(
			'value' =>	   'boxRain',
			'label' => __( 'boxRain', 'fruitful' )
		),
		'10' => array(
			'value' =>	   'boxRainReverse',
			'label' => __( 'boxRainReverse', 'fruitful' )
		),
		'11' => array(
			'value' =>	   'boxRainGrow',
			'label' => __( 'boxRainGrow', 'fruitful' )
		),
		'12' => array(
			'value' =>	   'boxRainGrowReverse',
			'label' => __( 'boxRainGrowReverse', 'fruitful' )
		)
		
	);

	return apply_filters( 'fruitful_slide_select', $slide_anim_options );
}

function fruitful_slide_anim_list() {
	$slide_anim_options = array(
		'0' => array(
			'value' =>	   'fade',
			'label' => __( 'fade', 'fruitful' )
		),
		'1' => array(
			'value' =>	   'slide',
			'label' => __( 'slide', 'fruitful' )
		)
	);

	return apply_filters( 'fruitful_slide_anim_list', $slide_anim_options );
}

function fruitful_slide_direction_list() {
	$slide_direct_options = array(
		'0' => array(
			'value' =>	   'horizontal',
			'label' => __( 'horizontal', 'fruitful' )
		),
		'1' => array(
			'value' =>	   'vertical',
			'label' => __( 'vertical', 'fruitful' )
		)
	);

	return apply_filters( 'fruitful_slide_direction_list', $slide_direct_options );
}

function fruitful_bool_list() {
	$font_bool_options = array(
		'0' => array(
			'value' =>	   'true',
			'label' => __( 'true', 'fruitful' )
		),
		'1' => array(
			'value' =>	   'false',
			'label' => __( 'false', 'fruitful' )
		)
	);
	return apply_filters( 'fruitful_bool_list', $font_bool_options);
}



function fruitful_fonts_list() {
	$font_family_options = array(
		'0' => array(
			'value' =>	   'Verdana, Geneva, sans-serif',
			'label' => __( 'Verdana, Geneva, sans-serif', 'fruitful' )
		),
		'1' => array(
			'value' =>	   'Georgia, Times New Roman, Times, serif',
			'label' => __( 'Georgia, Times New Roman, Times, serif', 'fruitful' )
		),
		'2' => array(
			'value' => 	   	'Courier New, Courier, monospace',
			'label' => __( 	'Courier New, Courier, monospace', 'fruitful' )
		),
		'3' => array(
			'value' => 	   'Arial, Helvetica, sans-serif',
			'label' => __( 'Arial, Helvetica, sans-serif', 'fruitful' )
		),
		'4' => array(
			'value' => 	   'Tahoma, Geneva, sans-serif',
			'label' => __( 'Tahoma, Geneva, sans-serif', 'fruitful' )
		),
		'5' => array(
			'value' => 	   'Trebuchet MS, Arial, Helvetica, sans-serif',
			'label' => __( 'Trebuchet MS, Arial, Helvetica, sans-serif', 'fruitful' )
		),
		'6' => array(
			'value' => 	   'Arial Black, Gadget, sans-serif',
			'label' => __( 'Arial Black, Gadget, sans-serif', 'fruitful' )
		),
		'7' => array(
			'value' => 	   'Times New Roman, Times, serif',
			'label' => __( 'Times New Roman, Times, serif', 'fruitful' )
		),
		'8' => array(
			'value' => 	   'Comic Sans MS, cursive',
			'label' => __( 'Comic Sans MS, cursive', 'fruitful' )
		),
		'9' => array(
			'value' => 	   'Open Sans, sans-serif',
			'label' => __( 'Open Sans, sans-serif', 'fruitful' )
		)
	);

	return apply_filters( 'fruitful_fonts_list', $font_family_options );
}

 function fruitful_custom_do_settings_sections($page) {
    global $wp_settings_sections, $wp_settings_fields;
	$id_=0;
	$optins = (array) get_option( 'fruitful_theme_options' );
    if ( !isset($wp_settings_sections) || !isset($wp_settings_sections[$page]) )
        return;
    foreach( (array) $wp_settings_sections[$page] as $section ) {

		if ($section['title'] != "") {
		   print "<h3>{$section['title']}</h3>\n";
		}
        call_user_func($section['callback'], $section);
        if ( !isset($wp_settings_fields) ||
             !isset($wp_settings_fields[$page]) ||
             !isset($wp_settings_fields[$page][$section['id']]) )
                continue;
        	 
			$name_id = "settings-section-" . $id_;
			 print '<div id="'. $name_id .'" class="settings-section">';
					fruitful_custom_do_settings_fields($page, $section['id']);
			 print '</div>';
		$id_++;		 
    }
}


function fruitful_custom_do_settings_fields($page, $section) {
    global $wp_settings_fields;
	$id_=0;

    if ( !isset($wp_settings_fields) ||
         !isset($wp_settings_fields[$page]) ||
         !isset($wp_settings_fields[$page][$section]) )
        return;
		
    foreach ( (array) $wp_settings_fields[$page][$section] as $field ) {
        print '<div id="set_form_row_' . $id_ .'" class="settings-form-row">';
        if ( !empty($field['args']['label_for']) )
            print '<h3 class="main-header-options">' . $field['title'];
        else
            print '<h3 class="main-header-options">' . $field['title'];
			print '</h3>';
				print '<span class="add_element_info">'.$field['args']['info'].'</span>';
				print '<div class="box-options">';
				call_user_func($field['callback'], $field['args']);
		print '</div></div>';
			$id_++;		 
    }
}

function fruitful_add_admin_style() {
	wp_enqueue_style('admin-style', 		get_template_directory_uri() . '/inc/css/admin.css');
	wp_enqueue_style('colorpicker-style',	get_template_directory_uri() . '/inc/js/colorpicker/colorpicker.css');
	wp_enqueue_style('ch-style',			get_template_directory_uri() . '/inc/js/ch/ch.css');
	wp_enqueue_style('sl-style',			get_template_directory_uri() . '/inc/js/sl/jquery.formstyler.css');
	wp_enqueue_style('dialog', 				'http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css');
}

function fruitful_add_jquery_script() {
	
	if( function_exists( 'wp_enqueue_media' ) ){
		wp_enqueue_media();
	} else {
		wp_enqueue_style ('thickbox');
		wp_enqueue_script('media-upload');
		wp_enqueue_script('thickbox');
	}
						
	wp_enqueue_script('color-picker',		get_template_directory_uri() . "/inc/js/colorpicker/colorpicker.js", array('jquery'));
	wp_enqueue_script('chJq',				get_template_directory_uri() . "/inc/js/ch/ch.js", array('jquery'));
	wp_enqueue_script('slJq',				get_template_directory_uri() . "/inc/js/sl/jquery.formstyler.min.js", array('jquery'));
	wp_enqueue_script('dialog', 			'http://code.jquery.com/ui/1.10.3/jquery-ui.js',  array('jquery'));
	wp_enqueue_script('uploads_',			get_template_directory_uri() . "/inc/js/uploads_.js", array('jquery'));
	wp_enqueue_script('admin-jQuery-fruit',	get_template_directory_uri() . "/inc/js/main.js", array('jquery'));
}

function fruitful_get_box_upload_image($val, $field, $btnclassup = 'upload_btn', $btnclassr = 'reset_btn', $imgcontclass = '') {
		 $out  = '';
		
		 $out .= '<div class="box-image">';
			if ($val != '') {
				$out .= '<div class="img-container '.$imgcontclass.'">';
					$image_attributes = wp_get_attachment_image_src( $val, 'full');
					$out .= '<img src="'.$image_attributes[0].'" alt="" />';
				$out .= '</div>	';
			}
			
			$out .= '<input class="of-input" name="fruitful_theme_options['. $field .']"   id="'. $field .'_upload" type="hidden" value="'. $val .'" />';
			$out .= '<div class="upload_button_div">';
				$out .= '<span data-imagetype="'.$imgcontclass.'" class="button '. $btnclassup .'" id="'. $field .'">'. __('Upload Image', 'fruitful') .'</span>';
			if(!empty($val)) {
				$none = '';
			} else { 
				$none = 'none';
			}
				$out .= '<span class="button ' . $btnclassr . ' ' . $none .'" id="reset_'. $field .'" title="' . $field . '">'.__('Remove', 'fruitful') .'</span>';
			$out .= '</div>';
		$out .= '</div>';
	return $out;
}


function fruitful_get_box_upload_slide($attach_id, 
							  $image_text,	
							  $ind,
							  $btnclassup 	= 'upload_btn', 
							  $btnclassr 	= 'reset_btn'
							  ) {
		 $out  = ''; 

			$out .= '<div class="box-image">';
			if ($attach_id != -1) {
				$out .= '<div class="img-container custom-slide">';
					$image_attributes = wp_get_attachment_image_src($attach_id, 'full');
					$out .= '<img src="'.$image_attributes[0].'" alt="" />';
				$out .= '</div>	';
				
			}
			
			/*
				* For New Slider Options
				* $out .= '<label for="">'. __('HTML Text', 'fruitful') .'</label>';
				* $out .= '<textarea class="of-area" name="fruitful_theme_options[slides][slide-'.$ind.'][text]" id="attach-'.$ind.'" cols="30" rows="10">'.$image_text.'</textarea>';
			*/
			
			$out .= '<input class="of-input" name="fruitful_theme_options[slides][slide-'.$ind.'][attach_id]"   id="attach-'.$ind.'" type="hidden" value="'. $attach_id .'" />';
			$out .= '<div class="upload_button_div">';
				$out .= '<span data-imagetype="slide" class="button '. $btnclassup .'" id="add-slide-btn-'. $ind .'">Upload Image</span>';
			$out .= '</div>';
		$out .= '</div>';
	return $out;
}


function fruitful_get_select_fields($field_name, $options, $array_of_values, $class_name = "selected") {
		$out = '';
		$out .= '<select class="'. $class_name .'" name="fruitful_theme_options['.$field_name.']" id="options-'.$field_name.'">' . chr(13);
		$selected = $options[$field_name];
		$p = $r = '';

			foreach ( $array_of_values as $option ) {
				$label = $option['label'];
				if ( $selected == $option['value'] ) // Make default first in list
					$p = "\n\t<option style=\"padding-right: 10px;\" selected='selected' value='" . esc_attr( $option['value'] ) . "'>$label</option>";
				else
					$r .= "\n\t<option style=\"padding-right: 10px;\" value='" . esc_attr( $option['value'] ) . "'>$label</option>";
			}
			$out .= $p . $r;
		
	$out .= '</select>' . chr(13);
	echo $out;
}
	
function fruitful_ret_options ($name_options) {
   return $options = array_filter((array) get_option($name_options));
}


function fruitful_get_default_array() {
return array(
				/*General Settings*/
				'responsive'		=> 'on',
				'postcomment'		=> 'on',
				'pagecomment'		=> 'on',
				'is_fixed_header'	=> 'off',
				'styletheme'		=> 'off',

				/*Background Image*/
				'backgroung_img'    => '',
				'background_color'	=> '#ffffff', 
				'bg_repeating'		=> 'off',
			
				/*logo*/
				'logo_img'			=> '',
				//'logo_w'			=> '160',
				//'logo_h'			=> '60',
				'fav_icon'			=> '',
				
				/*menu*/
				'menu_bg_color'		=> '#ffffff',
				'menu_btn_color'	=> '#e1704b',
				'menu_hover_color'	=> '#ffffff',
				'menu_font_color'	=> '#333333',		
				
				/*fonts*/
				'h_font_family'		=> 'Open Sans, sans-serif',
				'h1_size'			=> '26',
				'h2_size'			=> '24',
				'h3_size'			=> '18',
				'h4_size'			=> '14',
				'h5_size'			=> '12',
				'h6_size'			=> '10',
				'm_font_family'		=> 'Open Sans, sans-serif',
				'm_size'			=> '14',
				'p_font_family'		=> 'Open Sans, sans-serif',
				'p_size'			=> '12',
				'select_slider'     => '1',
				
				
				/*Sliders*/
				
				//'s_width'			=> '960',
				//'s_height'		=> '520',
				
				/*slider flex*/
				's_animation'		=> 'fade', 
				's_direction'		=> 'horizontal',
				's_reverse'			=> 'false',
				's_slideshow'		=> 'true',
				's_slideshowSpeed'	=> '7000',
				's_animationSpeed'	=> '600',
				's_initDelay'		=> '0',
				's_randomize'		=> 'false',
				's_controlnav'		=> 'true',
				
				/*slider nivo*/
				'nv_skins'				=> 'theme-bar',
				'nv_animation' 			=> 'random',
				'nv_slice' 				=> '15',
				'nv_boxCols' 			=> '8',
				'nv_boxRows' 			=> '4',
				'nv_animSpeed' 			=> '500',
				'nv_pauseTime' 			=> '3000',
				'nv_startSlide'			=> '0',
				'nv_directionNav' 		=> 'true',
				'nv_controlNav' 		=> 'true',
				'nv_controlNavThumbs' 	=> 'false',
				'nv_pauseOnHover' 		=> 'true',
				'nv_manualAdvance' 		=> 'false',
				'nv_prevText' 			=> 'Prev',
				'nv_nextText' 			=> 'Next',
				'nv_randomStart' 		=> 'false',
				'slides'				=> '',
				
				/*End Sliders*/
				
				/*footer*/			 
				'footer_text'		=> stripslashes(' Fruitful theme by <a href="http://fruitfulcode.com">fruitfulcode</a> Powered by: <a href="http://wordpress.org">WordPress</a>'),
				
				/*socials*/
				'facebook_url' 		=> '',
				'twitter_url' 		=> '',
				'linkedin_url'		=> '',
				'myspace_url'		=> '',
				'googleplus_url'	=> '',
				'dribbble_url'		=> '',
				'skype_link'		=> '',
				'flickr_link'		=> '',
				'youtube_url'		=> '',
				'rss_link'			=> '',

				'custom_css'        => stripslashes('')
		);
}
?>