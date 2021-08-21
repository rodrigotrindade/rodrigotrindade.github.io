<?php /* Header */ ?>
  <header id="header" class="header navbar-scrolltofixed bg-theme-colored">
    <div class="header-nav">
      <div class="header-nav-wrapper">
        <div class="container">
          <nav id="menuzord-right" class="menuzord green no-bg">
              <a class="menuzord-brand pull-left flip" href="<?php bloginfo("url"); ?>">
            <?php dynamic_sidebar("logo-cabecalho"); ?> 
            </a>
            <?php 
                wp_nav_menu( 
                    array( 
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