<?php
// This function enqueues the Normalize.css for use. The first parameter is a name for the stylesheet, the second is the URL. Here we
// use an online version of the css file.
function add_normalize_CSS() {
    wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}

// supprimer le versionning de wordpress
add_filter('the_generator', 'wpm_delete_version');

// On retourne une chaine de caractère vide à la place de la version de WordPress
function wpm_delete_version() {
return '';
}

// [CUSTOMISATION] Pour adapter menu bootstrap en wp
require_once('wp-bootstrap-navwalker.php');


function wpc_main_nav() {
    wp_nav_menu(
        array(
            'menu_id'        => 'nav',
            'container'         => false,
            'theme_location'    => 'main',
            'depth'             => '1',
        )
    );
}

function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

// Register a new sidebar simply named 'sidebar'
function add_widget_Support() {
                register_sidebar( array(
                                'name'          => 'Sidebar',
                                'id'            => 'sidebar',
                                'before_widget' => '<div>',
                                'after_widget'  => '</div>',
                                'before_title'  => '<h2>',
                                'after_title'   => '</h2>',
                ) );
}
// Hook the widget initiation and run our function
add_action( 'widgets_init', 'add_Widget_Support' );

// Register a new navigation menu
function add_Main_Nav() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
// Hook to the init action hook, run our navigation menu function
add_action( 'init', 'add_Main_Nav' );


/* Kill Gutenberg */
add_filter('use_block_editor_for_post', '__return_false', 10);

// [CUSTOMISATION] Appliquer le theme de la page parent aux sous-pages

function switch_page_template() {
  global $post;
  // Checks if current post type is a page, rather than a post
  if (is_page()){
  $ancestors = $post->ancestors;
  
  if ($ancestors) {
  $parent = get_post(end($ancestors));
  $slug = $parent->post_name;
  $template = TEMPLATEPATH."/page-".$slug."-subpage.php";
  if (file_exists($template)) {
  load_template($template);
  exit;
  }
  } else {
  return true;
  }
  }
  }
  
  add_action('template_redirect','switch_page_template');


  add_action( 'init', 'cp_change_post_object' );

/*
/ CUSTOM POST TYPE :  recettes
* On utilise une fonction pour créer notre custom post type
*/

function wpm_custom_post_type_recettes() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Recettes', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Recettes', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Recettes'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les Recettes'),
		'view_item'           => __( 'Voir toutes les Recettes'),
		'add_new_item'        => __( 'Ajouter une Recette'),
		'add_new'             => __( 'Ajouter Recette'),
		'edit_item'           => __( 'Modifier Recette'),
		'update_item'         => __( 'Mettre à jour la Recette'),
		'search_items'        => __( 'Chercher une Recette'),
		'not_found'           => __( 'Aucun résultat'),
		'not_found_in_trash'  => __( 'Aucun résultat dans la corbeille'),
	);

	// On peut définir ici d'autres options pour notre custom post type

	$args = array(
		'label'               => __( 'recettes'),
		'description'         => __( 'Liste des Recettes'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields', ),
		/*
		* Différentes options supplémentaires
		*/
		'hierarchical'        => false,
		'public'              => true,
        'has_archive'         => 'nos-recettes',
		'menu_icon' => get_bloginfo('template_directory') . '/assets/img/icons/actualites-16-white.png',

	);

	// On enregistre notre custom post type qu'on nomme ici "News" et ses arguments
	register_post_type( 'recettes', $args );

}

add_action( 'init', 'wpm_custom_post_type_recettes', 0 );

/* Les taxonomies  */
add_action( 'init', 'wpm_add_taxonomies_recettes', 0 );

//On crée la taxonomie
function wpm_add_taxonomies_recettes() {

  // Catégorie de fiches
	$labels_cat_serie = array(
		'name'                       => _x( 'Catégorie de Recettes', 'taxonomy general name'),
		'singular_name'              => _x( 'Catégorie de Recettes', 'taxonomy singular name'),
		'search_items'               => __( 'Chercher une catégorie'),
		'popular_items'              => __( 'Catégories populaires'),
		'all_items'                  => __( 'Toutes les catégories'),
		'edit_item'                  => __( 'Modifier une catégorie'),
		'update_item'                => __( 'Mettre à jour une catégorie'),
		'add_new_item'               => __( 'Ajouter une nouvelle catégorie'),
		'new_item_name'              => __( 'Nom de la nouvelle catégorie'),
		'add_or_remove_items'        => __( 'Ajouter ou supprimer une catégorie'),
		'choose_from_most_used'      => __( 'Choisir parmi les catégories les plus utilisées'),
		'not_found'                  => __( 'Aucun résultat'),
		'menu_name'                  => __( 'Categories'),
	);

	$args_cat_serie = array(
	// Si 'hierarchical' est défini à true, notre taxonomie se comportera comme une catégorie standard
		'hierarchical'          => true,
		'labels'                => $labels_cat_serie,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'nos-recettes' ),
    'with_front'            => false,
	);

	register_taxonomy( 'recettes_cat', 'recettes', $args_cat_serie );
}

add_action( 'init', 'create_tag_taxonomies', 0 );

//create two taxonomies, genres and tags for the post type "tag"
function create_tag_taxonomies() 
{
  // Add new taxonomy, NOT hierarchical (like tags)
  $labels = array(
    'name' => _x( 'Tags', 'taxonomy general name' ),
    'singular_name' => _x( 'Tag', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Tags' ),
    'popular_items' => __( 'Popular Tags' ),
    'all_items' => __( 'All Tags' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Tag' ), 
    'update_item' => __( 'Update Tag' ),
    'add_new_item' => __( 'Add New Tag' ),
    'new_item_name' => __( 'New Tag Name' ),
    'separate_items_with_commas' => __( 'Separate tags with commas' ),
    'add_or_remove_items' => __( 'Add or remove tags' ),
    'choose_from_most_used' => __( 'Choose from the most used tags' ),
    'menu_name' => __( 'Tags' ),
  ); 

  register_taxonomy('tag','recettes',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'tag' ),
  ));
}

// Supprimer les emojis et autres elements inutiles de wp_head
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action('wp_head', 'wp_generator');
function remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action('wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style'));
}
add_action('widgets_init', 'remove_recent_comments_style');

// defet parsing js

function defer_parsing_of_js( $url ) {
    if ( is_user_logged_in() ) return $url; //don't break WP Admin
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    return str_replace( ' src', ' defer src', $url );
}
add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );


if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

