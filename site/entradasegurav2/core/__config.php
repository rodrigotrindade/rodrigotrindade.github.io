<?php

/**
 * @Author: Rodrigo Trindade - Design Digital
 * @Date:   29-05-2019 22:38:18
 * @Last Modified by:   Rodrigo Trindade
 * @Last Modified time: 03-09-2019 21:44:06
 */

// CONEXÃO
mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);

// SETANDO SUPORTE AO TEMA
if ( function_exists('add_theme_support')) :
    
    add_theme_support('post-thumbnails');
    add_theme_support( 'html5', array( 'search-form' ) );
    
    set_post_thumbnail_size(100, 75, true);
    add_image_size('slider', 1920, 1281, true);

endif;

//ALTERANDO LOGIN LOGO ---------------------------------------------------------
function meu_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/core/images/site-login-logo.png);
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'meu_login_logo' );

function minha_url() {
    return 'http://www.rodrigotrindade.com.br';
}
add_filter( 'login_headerurl', 'minha_url' );

function meu_title() {
    return 'Rodrigo Trindade - Visite o Portfólio!';
}
add_filter( 'login_headertitle', 'meu_title' );

function minha_css() {
    wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/core/css/login.css' );
//    wp_enqueue_script( 'custom-login', get_template_directory_uri() . '/style-login.js' );
}
add_action( 'login_enqueue_scripts', 'minha_css' );

// -----------------------------------------------------------------------------

/** RESUMO NAS PÁGINAS */
add_post_type_support('page','excerpt');

/** -------------------------------------------------------------------- */


/** DESATIVANDO ATUALIZAÇÕES  */
//function remove_core_updates(){
//global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
//}
//add_filter('pre_site_transient_update_core','remove_core_updates');
//add_filter('pre_site_transient_update_plugins','remove_core_updates');
//add_filter('pre_site_transient_update_themes','remove_core_updates');

/** -------------------------------------------------------------------- */


/** REMOVENDO ITENS DESNECESSÁRIOS DO MENU ADMINISTRATIVO */
function remove_menus () {

    global $menu;
    $restricted = array(
    //Remova ou comente as linhas a seguir para exibir os itens.
        __('Dashboard'),
       __('Posts'),
//        __('Media'),
        __('Links'),
   	    // __('Pages'),
//        __('Appearance'),
        __('Tools'),
//        __('Users'),
     	// __('Settings'),
        __('Comments'),
        // __('Plugins'),
        __('Contato'),
        __('reCaptcha'),
    );

    end ($menu);
    
    while (prev($menu)):
        $value = explode(' ',$menu[key($menu)][0]);
        if(in_array($value[0] != NULL ? $value[0] : "" , $restricted)):
            unset($menu[key($menu)]);
        endif;
    endwhile;                
}

global $current_user;
get_currentuserinfo();

// if($current_user->user_login != "rodrigo" && $current_user->user_login != "rodrigo.trindade"):
    add_action('admin_menu', 'remove_menus'); 
// endif;

function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[30][0] = 'Formulários de Contato';
    // echo "<pre style='margin-left: 150px'>";
    // print_r($menu);
    // echo "</pre>";
}
add_action( 'admin_menu', 'change_post_menu_label' );

/** -------------------------------------------------------------------- */

/** PAGINAÇÃO */
function paginacao() {

global $wp_query;
$total = $wp_query->max_num_pages;
                  
if ( $total > 1 )  {

    if ( !$current_page = get_query_var('paged') )
        $current_page = 1;
                           
        $big = 999999999;
        $permalink_structure = get_option('permalink_structure');
        $format = empty( $permalink_structure ) ? '&page=%#%' : 'page/%#%/';
        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
            'format' => $format,
            'current' => $current_page,
            'total' => $total,
            'mid_size' => 2,
            'type' => 'list'
        ));
    }
}

function aj_modify_posts_per_page( $query ) {
    if ( $query->is_search() ) {
        $query->set( 'posts_per_page', '5' );
    }
}
add_action( 'pre_get_posts', 'aj_modify_posts_per_page' );

/** -------------------------------------------------------------------- */

/** LISTA DE CATEGORIAS */

function listaCategorias(){
    $args = array(
	'show_option_all'    => '',
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => 'list',
	'show_count'         => 0,
	'hide_empty'         => 1,
	'use_desc_for_title' => 1,
	'child_of'           => 0,
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => 1,
	'title_li'           => __( '' ),
	'show_option_none'   => __( 'Sem categorias' ),
	'number'             => null,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'category',
	'walker'             => null
    );
    
    wp_list_categories($args);   
}

/** -------------------------------------------------------------------- */

/** DESABILITA O AUTO SAVE */
add_action( 'wp_print_scripts', 'disable_autosave' ); 

function disable_autosave() {
    wp_deregister_script('autosave');
}

/** -------------------------------------------------------------------- */

/** SALVA ALTERAÇÕES */
add_action('save_post', 'salvaEvento');

function salvaEvento(){
  global $post;

    // SLIDER
    updateEvento("_Z_slider_ordem");
    updateEvento("_Z_slider_link");
    updateEvento("_Z_slider_frase1");
    updateEvento("_Z_slider_frase2");
    updateEvento("_Z_slider_frase3");
    updateEvento("_Z_ordemDepoimento");
} 

function updateEvento($campo){
    global $post;
    update_post_meta($post->ID, $campo, str_replace('"',"'",$_POST[$campo]));
}
  
?>
