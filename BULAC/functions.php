<?php

	register_nav_menu( 'main-nav', 'Header Navigation' );

	add_action( 'wp_enqueue_script', 'load_jquery' );
	function load_jquery() {
		wp_enqueue_script( 'jquery' );
	}

	add_theme_support('post-thumbnails');


	class Global_Header_Nav extends Walker_Nav_Menu {

		function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
			$element->has_children = !empty( $children_elements[$element->ID] );
			$element->classes[] = ( $element->current || $element->current_item_ancestor ) ? 'active' : '';
			$element->classes[] = ( $element->has_children ) ? 'has-dropdown' : '';

			parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
		}

		function start_el( &$output, $object, $depth = 0, $args = array(), $current_object_id = 0 ) {
			$item_html = '';
			parent::start_el( $item_html, $object, $depth, $args );	

			$output .= ( $depth == 0 ) ? '<li class="divider"></li>' : '';

			$classes = empty( $object->classes ) ? array() : (array) $object->classes;	

			if( in_array('label', $classes) ) {
				$output .= '<li class="divider"></li>';
				$item_html = preg_replace( '/<a[^>]*>(.*)<\/a>/iU', '<label>$1</label>', $item_html );
			}

			if ( in_array('divider', $classes) ) {
				$item_html = preg_replace( '/<a[^>]*>( .* )<\/a>/iU', '', $item_html );
			}

			$output .= $item_html;
		}

		function start_lvl( &$output, $depth = 0, $args = array() ) {
			$output .= "\n<ul class=\"sub-menu dropdown\">\n";
		}

	}

	if (function_exists('register_sidebar')) {
		register_sidebar(array(
			'name' => 'Footer Widgets',
			'id'   => 'footer-widgets',
			'description'   => 'Widget Area',
			'before_widget' => '<div class="large-4 columns">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5>',
			'after_title'   => '</h5>'
			));
	}

	function custom_login() { ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css'; ?>" type="text/css" media="all" />
	<?php }

	add_action( 'login_enqueue_scripts', 'custom_login' );



