<?php
/**
 * Sean Fisher 2013 WordPress Theme
 *
 * @author Sean Fisher
**/

define('SF_INC', dirname(__FILE__).'/inc/');

if (! file_exists(__DIR__.'/vendor/autoload.php'))
    return print "Composer not setup for sf-2013";

require(__DIR__.'/vendor/autoload.php');

// Init Hook
add_action('init', function()
{
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
        'supports'	=>	array('title','revisions','editor'),
    ));
});

/**
 * Setup the meta to have javscript load
 *
 * @access private
**/
add_action( 'admin_menu' , function()
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
});

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
    include (SF_INC.'admin/js-meta-box.php');
}

/**
 * On Save Post
 *
 * @access  private
**/
add_action('save_post', function($post_id)
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
});

/**
 * Setup our Scripts/Styles
 *
 * @access      private
 * @link        http://codex.wordpress.org/Function_Reference/wp_enqueue_script
**/
function sf_enqueue()
{
    wp_register_script('modernizer', 'http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.1/modernizr.min.js', array(), '2.6.1');
    wp_enqueue_script('modernizr');
    // Fix jQuery to load from Google's CDN
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array(), '1.10.2');
    
    // Add our scripts
    wp_register_script( 'bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '3.0');
    wp_register_script( 'sf-2013', get_template_directory_uri().'/js/site.js', array(), '2013');
    //wp_register_script( 'jquery.transit', get_template_directory_uri().'/js/jquery.transit.js', array(), '1.0');
    
    // Enqueue Javascript
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('sf-2013');
    
    // Compile the LESS into CSS!
    $less = new lessc;

    if (defined('WP_LOCAL_DEV') AND WP_LOCAL_DEV)
        $less->compileFile(__DIR__.'/less/site.less', __DIR__.'/css/site.css');
    else
        $less->checkedCompile(__DIR__.'/less/site.less', __DIR__.'/css/site.css');
    
    // CSS -- checkedCompile
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css');
    wp_register_style('sf-2013', get_template_directory_uri().'/css/site.css');
    wp_register_style('sf-2013-font', 'http://fonts.googleapis.com/css?family=Cutive|Open+Sans:400italic,400,700,300');

    wp_enqueue_style('bootstrap');
    wp_enqueue_style('sf-2013');
    wp_enqueue_style('sf-2013-font');

    wp_register_style('syntaxhighlighter-theme-journeys', get_template_directory_uri().'/css/syntax.css',
        array( 'syntaxhighlighter-core' ), '1.2.3'
    );
}
add_action('wp_enqueue_scripts', 'sf_enqueue');


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
    echo '<a href="'.get_permalink().'" rel="bookmark">'.get_the_date().'</a>';
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


add_filter('syntaxhighlighter_themes', function($themes)
{
    $themes['journeys'] = __( 'Journeys',      'journeys' );
    return $themes;
});

add_action('template_redirect', function() {
    remove_action( 'wp_head', 'feed_links', 2 );
    remove_action( 'wp_head', 'feed_links_extra', 3 );
});

// super easy way to move javascript to footer
remove_action('wp_head', 'wp_print_scripts');
remove_action('wp_head', 'wp_print_head_scripts', 9);
remove_action('wp_head', 'wp_enqueue_scripts', 1);
add_action('wp_footer', 'wp_print_scripts', 5);
add_action('wp_footer', 'wp_enqueue_scripts', 5);
add_action('wp_footer', 'wp_print_head_scripts', 5);