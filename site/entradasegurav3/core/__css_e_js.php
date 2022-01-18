<?php

/**
 * @Author: Rodrigo Trindade - Design Digital
 * @Date:   07-04-2019 19:37:49
 * @Last Modified by:   Rodrigo Trindade
 * @Last Modified time: 27-05-2019 22:37:48
 */
?>
<?php

function my_theme_enqueue_styles(){
    // wp_enqueue_style('parent_style', get_template_directory_uri().'/css/cliente.css');
    // wp_enqueue_script('script', get_template_directory_uri().'/js/cliente.js', array ( 'jquery' ), 3.34, true);
}

add_action('wp_enqueue_scripts','my_theme_enqueue_styles');

?>