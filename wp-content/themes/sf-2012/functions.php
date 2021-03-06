<?php
/**
 * Sean Fisher 2012 WordPress Theme
 *
 * @author      Sean Fisher
**/

// if (! is_user_logged_in() ) wp_die('We\'ll be back shortly.');

// Less CSS
// require_once(dirname(__FILE__).'/Less.php');

define('sf_INC', dirname(__FILE__).'/inc/');

// Init Hook
function sf_init()
{
     require(__DIR__.'/vendor/autoload.php');

    register_post_type( 'work',
		array(
			'labels' => array(
				'name' => __( 'Work' ),
				'singular_name' => __( 'Work' ),
				'add_new'	=>	'Add Work',
				'edit_item'	=>	'Edit Work',
				'view_item'	=>	'View Work',
				'search_items'	=>	'Search Work',
				'add_new_item'	=>	'Add New Work',
				'not_found'	=>	'No Work Found',
			),
		'rewrite'	=>	array(
            'slug'  => 'work',
        ),
		//'query_var'               =>	false,
		'public'                  => TRUE,
		'show_ui'                 => TRUE,
		'exclude_from_search'     => TRUE,
		'has_archive'             => FALSE,
		'supports'	=>	array('title'/** , 'thumbnail' **/,'revisions','editor',
			),
				/*'title'	=>	TRUE,
				'editor'	=>	FALSE,
				'author'	=>	FALSE,
				'thumbnail'	=>	TRUE,
				'excerpt'	=>	FALSE,
				'trackbacks'	=>	FALSE,
				'custom-fields'	=>	FALSE,
				'comments'	=>	FALSE,
				'revisions'	=>	TRUE,
				'page-attributes'	=>	FALSE,
				*/
		
		)
	);
}
add_action('init', 'sf_init');

/**
 * Setup the meta to have javscript load
 *
 * @access private
**/
function sf_setup_meta()
{	
	add_meta_box('sf_js_box', 'Page\'s Javascript', 'sf_js_box', 'page', 'normal', 'core');
	add_meta_box('sf_work_box', 'Work Information', function()
	{
        $image = $image_small = $work = $website = '';
        $weight = 10;
        
        if (isset($_GET['post'])) :
            $image = get_post_meta($_GET['post'], 'sf-image', TRUE);
            $image_small = get_post_meta($_GET['post'], 'sf-image-small', TRUE);
            $website = get_post_meta($_GET['post'], 'sf-website', TRUE);
            $weight = (int) get_post_meta($_GET['post'], 'sf-weight', TRUE);
            $work = get_post_meta($_GET['post'], 'sf-work', TRUE);
        endif;
        
        include(dirname(__FILE__).'/inc/work-meta-box.php');
    }, 'work', 'normal', 'core');
}
add_action( 'admin_menu' , 'sf_setup_meta' );

/**
 * Callback to the Admin's Meta Box
 *
 * @access      private
**/
function sf_js_box()
{
    if (isset($_GET['post'])) :
        $jquery_ready = get_post_meta($_GET['post'], 'jquery-doc-ready', TRUE);
        $js_footer = get_post_meta($_GET['post'], 'javascript-footer', TRUE);
    endif;
    
    // Trying to keep it neat, we have the Meta box in a seperate file
    include (sf_INC.'admin/js-meta-box.php');
}

/**
 * On Save Post
 *
 * @access  private
**/
function sf_save_post($post_id)
{
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) 
        return $post_id;
     
    if (defined('DOING_AJAX') AND DOING_AJAX)
        return $post_id;
     
    switch($_POST['post_type'])
    {
        case 'work' :
            // Custom Javascript
            delete_post_meta($post_id, 'sf-image');
            add_post_meta($post_id, 'sf-image', $_POST['post']['image'], true);
            
            delete_post_meta($post_id, 'sf-image-small');
            add_post_meta($post_id, 'sf-image-small', $_POST['post']['image-small'], true);
            
            delete_post_meta($post_id, 'sf-website');
            add_post_meta($post_id, 'sf-website', $_POST['post']['website'], true);
            
            delete_post_meta($post_id, 'sf-weight');
            add_post_meta($post_id, 'sf-weight', intval($_POST['post']['weight']), true);
            
            delete_post_meta($post_id, 'sf-work');
            add_post_meta($post_id, 'sf-work', $_POST['post']['work'], true);
            
        break;
        
        // Nothing setup for that post type
        default :
            return $post_id;
        break;
    }
}
add_action('save_post', 'sf_save_post');

/**
 * Setup our Scripts/Styles
 *
 * @access      private
 * @link        http://codex.wordpress.org/Function_Reference/wp_enqueue_script
**/
function sf_enqueue()
{
    // Fix jQuery to load from Google's CDN
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js', array(), '1.7.2');
    
    // Add our scripts
    wp_register_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '1.0');
    wp_register_script( 'sf-2012', get_template_directory_uri().'/js/site.js', array(), '1.0');
    wp_register_script( 'jquery.transit', get_template_directory_uri().'/js/jquery.transit.js', array(), '1.0');
    wp_register_script( 'jquery.gridrotator', get_template_directory_uri().'/js/jquery.gridrotator.js', array(), '1.0');
    
    // Enqueue Javascript
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('jquery.transit');
    wp_enqueue_script('jquery.gridrotator');
    wp_enqueue_script('sf-2012');
    
    // Compile the LESS into CSS!
    require_once(dirname(__FILE__).'/Less.php');
    Less::init();
    Less::compile('site');
    
    // CSS
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css');
    wp_register_style('sf-2012', get_template_directory_uri().'/css/site.css');
    wp_register_style('jquery.gridrotator', get_template_directory_uri().'/css/grid/style.css');
    
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('sf-2012');
    wp_enqueue_style('jquery.gridrotator');
}
add_action('wp_enqueue_scripts', 'sf_enqueue');

/**
 * CSS for /wp-admin
 *
 * @access      private
**/
function sf_enqueue_admin()
{
    require_once(dirname(__FILE__).'/Less.php');
    Less::init();
    Less::compile('admin-area');
    
    wp_register_style('sf_admin', get_template_directory_uri().'/css/admin-area.css');

    wp_enqueue_style('sf_admin');
}

function autoConvert($text) {
    //$text = preg_replace("/((http(s?):\/\/)|(www\.))([\w\.]+)([a-zA-Z0-9?&%.;:\/=+_-]+)/i", "<a href='http$3://$4$5$6' target='_blank'>$2$4$5$6</a>", $text);
    $text = preg_replace("/(?<=\A|[^A-Za-z0-9_])@([A-Za-z0-9_]+)(?=\Z|[^A-Za-z0-9_])/", "<a href='http://twitter.com/$1' target='_blank'>$0</a>", $text);
    $text = preg_replace("/(?<=\A|[^A-Za-z0-9_])#([A-Za-z0-9_]+)(?=\Z|[^A-Za-z0-9_])/", "<a href='http://twitter.com/search?q=%23$1' target='_blank'>$0</a>", $text);
    return $text;
}


if ( ! function_exists( 'twentyten_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 *
 * @since Twenty Ten 1.0
 */
function twentyten_posted_on() {
    echo 'Posted on <a href="'.get_permalink().'" rel="bookmark">'.get_the_date().'</a>';
    return;
	printf( __( '<span class="%1$s">Posted on</span> %2$s  %3$s', 'twentyten' ),
		'meta-prep meta-prep-author',
		sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
			get_permalink(),
			esc_attr( get_the_time() ),
			get_the_date()
		),
		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
			get_author_posts_url( get_the_author_meta( 'ID' ) ),
			esc_attr( sprintf( __( 'View all posts by %s', 'twentyten' ), get_the_author() ) ),
			get_the_author()
		)
	);
}
endif;
//add_action('admin_init', 'sf_enqueue_admin');
