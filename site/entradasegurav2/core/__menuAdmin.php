<?php

/*
 * Developed by / Design by
 * Rodrigo Trindade
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 */

// ADICIONAR NOVOS ITENS
function rodrigoTrindade() {
	global $wp_admin_bar;
	if ( !is_super_admin() || !is_admin_bar_showing() )
		return;
	$wp_admin_bar->add_menu( array(
            'id' => 'rodrigo',
            'title' => __("<img src='".get_stylesheet_directory_uri() . '/core/images/site-login-logo-p.png'."' alt='Rodrigo Trindade - Design Digital' title='Rodrigo Trindade - Design Digital' />"),
	));

	$wp_admin_bar->add_menu( array(
		'parent' => 'rodrigo',
		'id'     => 'rodrigo_site',
		'title' => __("Rodrigo Trindade - Design Digital"),
		'href' => __('http://www.rodrigotrindade.com.br/'),
                'meta'  => array(
                    'title' => __('Visite o site!'),
                    'target' => '_blank'
                )
	));

}
add_action('admin_bar_menu', 'rodrigoTrindade',25);

// REMOVER ITENS
function removeItensMenu() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('wp-logo');
        $wp_admin_bar->remove_menu('comments');
        $wp_admin_bar->remove_menu('new-content');
	$wp_admin_bar->remove_menu('updates');
        $wp_admin_bar->remove_menu('site-name');
}
add_action( 'wp_before_admin_bar_render', 'removeItensMenu' );

?>