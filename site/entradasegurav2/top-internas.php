<?php /* Header */ ?>
  <header class="header">
    <div class="header-nav navbar-fixed-top navbar-dark navbar-transparent navbar-sticky-animated animated-active">
      <div class="header-nav-wrapper">
        <div class="container">
          <nav id="menuzord-right" class="menuzord green">
          <a class="menuzord-brand pull-left flip" href="<?php bloginfo("url"); ?>">
            <?php dynamic_sidebar("logo-cabecalho"); ?> 
            </a>
            <?php 
                wp_nav_menu( 
                    array( 
                      'menu' => 'menu-superior-internas',
                      'container' => 'ul',
                      'menu_class' => 'menuzord-menu'
                    ) 
                ); 
            ?>
          </nav>
        </div>
      </div>
    </div>
  </header>