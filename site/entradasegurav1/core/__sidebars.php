<?php
/**
 * @Author: Rodrigo Trindade - Design Digital
 * @Date:   02-02-2021 20:23
 * @Last Modified by:   Rodrigo Trindade
 * @Last Modified time: 02-02-2021 20:23
 */
?>
<?php
function rodrigo_widgets_init() {

	// ENDEREÇO TOPO  
    register_sidebar( array(
		'name'          => __( 'Logo Cabeçalho', 'rodrigo' ),
		'id'            => 'logo-cabecalho',
		'description'   => __( 'Espaço no cabeçalho para o logo', 'rodrigo' ),
		'before_widget' => '',
		'after_widget'  => '',
	) );      

	// SOBRE
    register_sidebar( array(
		'name'          => __( 'Sobre', 'rodrigo' ),
		'id'            => 'sobre',
		'description'   => __( 'Espaço o conteúdo Sobre...', 'rodrigo' ),
		'before_widget' => '',
		'after_widget'  => '',
	) );       
}
add_action( 'widgets_init', 'rodrigo_widgets_init' );
?>