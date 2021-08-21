<?php

/*
 * Developed by / Design by
 * Rodrigo Trindade
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 */

function footerAdmin() {
	echo '<a href="http://www.rodrigotrindade.com.br/" title="Visite o portfólio!" target="_blank">Rodrigo Trindade - Design Digital</a>';
} 
add_filter('admin_footer_text', 'footerAdmin');

?>
