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

	// HOMEPAGE ESQ
    // register_sidebar( array(
	// 	'name'          => __( 'Homepage Esq', 'rodrigo' ),
	// 	'id'            => 'homepageesq',
	// 	'description'   => __( 'Conteúdo esquerdo na abertura da homepage.', 'rodrigo' ),
	// 	'before_widget' => '',
	// 	'after_widget'  => '',
	// ) ); 

	// HOMEPAGE DIR
    register_sidebar( array(
		'name'          => __( 'Homepage Dir', 'rodrigo' ),
		'id'            => 'homepagedir',
		'description'   => __( 'Conteúdo direito na abertura da homepage.', 'rodrigo' ),
		'before_widget' => '',
		'after_widget'  => '',
	) ); 
/*
	// ABOUT 
    register_sidebar( array(
		'name'          => __( 'About', 'rodrigo' ),
		'id'            => 'about',
		'description'   => __( 'Espaço para o about', 'rodrigo' ),
		'before_widget' => '',
		'after_widget'  => '',
	) );      

	// SOBRE CAIXA 1
    register_sidebar( array(
		'name'          => __( 'Caixa 1', 'rodrigo' ),
		'id'            => 'caixa1',
		'description'   => __( 'Espaço o conteúdo Sobre Caixa 1', 'rodrigo' ),
		'before_widget' => '',
		'after_widget'  => '',
	) );   

	// SOBRE CAIXA 2
    register_sidebar( array(
		'name'          => __( 'Caixa 2', 'rodrigo' ),
		'id'            => 'caixa2',
		'description'   => __( 'Espaço o conteúdo Sobre Caixa 2', 'rodrigo' ),
		'before_widget' => '',
		'after_widget'  => '',
	) );  

	// SOBRE CAIXA 3
    register_sidebar( array(
		'name'          => __( 'Caixa 3', 'rodrigo' ),
		'id'            => 'caixa3',
		'description'   => __( 'Espaço o conteúdo Sobre Caixa 3', 'rodrigo' ),
		'before_widget' => '',
		'after_widget'  => '',
	) );  

	// SOBRE CAIXA 4
    register_sidebar( array(
		'name'          => __( 'Caixa 4', 'rodrigo' ),
		'id'            => 'caixa4',
		'description'   => __( 'Espaço o conteúdo Sobre Caixa 4', 'rodrigo' ),
		'before_widget' => '',
		'after_widget'  => '',
	) );  

	// FOTO CAIXA 1
    register_sidebar( array(
		'name'          => __( 'Foto 1', 'rodrigo' ),
		'id'            => 'foto1',
		'description'   => __( 'Espaço da Foto da Caixa 1', 'rodrigo' ),
		'before_widget' => '',
		'after_widget'  => '',
	) ); 

	// FOTO CAIXA 2
    register_sidebar( array(
		'name'          => __( 'Foto 2', 'rodrigo' ),
		'id'            => 'foto2',
		'description'   => __( 'Espaço da Foto da Caixa 2', 'rodrigo' ),
		'before_widget' => '',
		'after_widget'  => '',
	) );       

	// FOTO CAIXA 3
    register_sidebar( array(
		'name'          => __( 'Foto 3', 'rodrigo' ),
		'id'            => 'foto3',
		'description'   => __( 'Espaço da Foto da Caixa 3', 'rodrigo' ),
		'before_widget' => '',
		'after_widget'  => '',
	) );       

	// FOTO CAIXA 4
    register_sidebar( array(
		'name'          => __( 'Foto 4', 'rodrigo' ),
		'id'            => 'foto4',
		'description'   => __( 'Espaço da Foto da Caixa 4', 'rodrigo' ),
		'before_widget' => '',
		'after_widget'  => '',
	) ); 
*/
	// REDES SOCIAIS
    register_sidebar( array(
		'name'          => __( 'Redes Sociais', 'rodrigo' ),
		'id'            => 'social',
		'description'   => __( 'Espaço para Redes Sociais', 'rodrigo' ),
		'before_widget' => '',
		'after_widget'  => '',
	) );     

	// CONTATO
    register_sidebar( array(
		'name'          => __( 'Contato', 'rodrigo' ),
		'id'            => 'contato',
		'description'   => __( 'Espaço para informações de contato', 'rodrigo' ),
		'before_widget' => '',
		'after_widget'  => '',
	) );   
	
	// AJUDA
    register_sidebar( array(
		'name'          => __( 'Ajuda', 'rodrigo' ),
		'id'            => 'ajuda',
		'description'   => __( 'Espaço para links de ajuda', 'rodrigo' ),
		'before_widget' => '',
		'after_widget'  => '',
	) );
	
	// CONTATO
    register_sidebar( array(
		'name'          => __( 'Form Contato Home', 'rodrigo' ),
		'id'            => 'formcontato_home',
		'description'   => __( 'Espaço para o formulário de contato da homepage', 'rodrigo' ),
		'before_widget' => '',
		'after_widget'  => '',
	) );
}
add_action( 'widgets_init', 'rodrigo_widgets_init' );
?>