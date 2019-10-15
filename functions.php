<?php

//add styles theme

add_action('wp_enqueue_scripts','add_styles');

function add_styles(){
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css');
    wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('Futura PT', get_template_directory_uri() . '/assets/fonts/Futura PT/stylesheet.css');
    wp_enqueue_style('Montserrat', get_template_directory_uri() . '/assets/fonts/Montserrat/stylesheet.css');
    wp_enqueue_style('Lato', get_template_directory_uri() . '/assets/fonts/Lato/lato.css');
    wp_enqueue_style('Helventica Neue', get_template_directory_uri() . '/assets/fonts/Helventica Neue/stylesheet.css');
	wp_enqueue_style('Bootstrao-grid', get_template_directory_uri() . '/assets/css/bootstrap-grid.css');
	
}

//#######################################################################################################################

//add scripts theme

add_action('wp_footer', 'add_scripts');

function add_scripts(){
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', 'jquery', time() );
	wp_enqueue_script('scrollreveal', 'https://unpkg.com/scrollreveal');
	wp_enqueue_script( 'load', get_template_directory_uri() . '/assets/js/load.js', 'jquery', time() );
	wp_enqueue_script( 'form', get_template_directory_uri() . '/assets/js/form.js', 'jquery', time() );
	wp_enqueue_script( 'fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', 'jquery');
}

//########################################################################################################################

//add suctom logo

add_action('after_setup_theme', 'theme_custom_logo');

function theme_custom_logo(){
	add_theme_support( 'custom-header', array(
		'default-image'          => '',
		'random-default'         => false,
		'width'                  => 0,
		'height'                 => 0,
		'flex-height'            => false,
		'flex-width'             => false,
		'default-text-color'     => '', // вызывается функций get_header_textcolor()
		'header-text'            => true,
		'uploads'                => true,
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
		'video'                  => false, // с 4.7
		'video-active-callback'  => 'is_front_page', // с 4.7
	) );
	add_theme_support( 'custom-logo' );
}

//########################################################################################################################

//register menu

add_action('after_setup_theme', 'theme_register_nav_menu');

function theme_register_nav_menu(){
    register_nav_menu('top', 'Top menu');
    register_nav_menu('bottom', 'Footer menu');
}

//#######################################################################################################################

//add svg types image

add_filter('upload_mimes', 'add_csv_type');

function add_csv_type($mimes){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
    

//#############################################################################################################################

//add thumnails to post

add_action('after_setup_theme', 'post_thumbnail');

function post_thumbnail(){
    add_theme_support( 'post-thumbnails', array( 'post') ); 
}

//##########################################################################################################################

//register post types

add_action('init', 'register_post_types');

function register_post_types(){
    $labels = array(
		'name'               => 'Questions', // primary name for record type
		'singular_name'      => 'Questions', // name for one entry of this type
		'add_new'            => 'Add question', // to add a new entry
		'add_new_item'       => 'Adding question', // header of the newly created entry in the admin panel
		'edit_item'          => 'Edit question', // to edit record type
		'new_item'           => 'New question', // text of new entry
		'view_item'          => 'Watch question', // to view entries of this type
		'search_items'       => 'Search for questions among all.', // to search for these record types
		'not_found'          => 'Not found', // if nothing was found in the search result
		'not_found_in_trash' => 'Not found in trash', // if not found in trash
		'parent_item_colon'  => '', 
		'menu_name'          => 'Questions', // menu name
	);
	$args = array(
		'labels' 	  	=> $labels,
		'public' 	  	=> true,
		'show_ui' 	  	=> true, // show interface in admin panel
		'has_archive' 	=> true,
		'description' 	=> 'Questions', 
		'menu_icon'   	=> 'dashicons-format-status', 
		'menu_position' => 4, 
		'supports' 		=> array( 'title', 'editor'),
		'taxonomy' 		=> [],
		
	);
	register_post_type('questions', $args);
}

//#######################################################################################################################

//load more 

function true_load_posts(){
 
	$args = unserialize( stripslashes( $_POST['query'] ) );
	$args['paged'] = $_POST['page'] + 1; 
	$args['post_status'] = 'publish';
 
	query_posts( $args );
	$i=1; ?>
	<div class="postsblock" id="loadposts">
	<div class="mbox"> <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();  
    	if($i==1){?>
        <div class="row">
        <?php } ?>
        	<div class="post">
            	<div class="post_image"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a></div>
                <div class="post_date"><span><?php the_time('M j')?> • <?php the_category(' ','',''); ?></span></div>
                <div class="post_title"><h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3></div>
            </div>
        <?php if($i==3){ $i=0; ?>
        </div>
        <?php } 
        $i++;
        ?>
        <?php endwhile;
        if($i!=3){ ?>
        </div>
        <?php } ?>
		<?php endif;
		?>
		</div>
		</div><?php 
	die();
}
 
 
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

//############################################################################################################################

//form connect

add_action('wp_ajax_send_mail' , 'send_mail');
add_action('wp_ajax_nopriv_send_mail', 'send_mail');
function send_mail(){
	$contactName = strip_tags($_POST['name']);
	$contactEmail = $_POST['email'];
	$contactSubject = 'returnHandler';
	$website = strip_tags($_POST['website']) ;
	$platform = strip_tags($_POST['platform']) ;
	$comment = strip_tags($_POST['comment']);
	$contactMessage = '<strong>Website: ' . $website . '</strong> <br /><br /> ' . '<strong>Platform: ' . $platform . '</strong> <br /><br />' . $comment;
	$to = get_option('admin_email');
	remove_all_filters( 'wp_mail_from' );
	remove_all_filters( 'wp_mail_from_name' );
	$headers = [
		'From: ' . $contactName . ' <' . $contactEmail . '>',
		'content-type: text/html',
	];
	wp_mail($to, $contactSubject, $contactMessage, $headers);
	wp_die();
}
//###############################################################################################################################