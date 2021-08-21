<?php
/*
 * Rodrigo Trindade Design Digital
 * rodrigo@rodrigotrindade.com.br
 * www.rodrigotrindade.com.br
 *
 * Template name: Modelo Texto
 */
?>
<?php
   the_post();
   global $post;
   $img = wp_get_attachment_url(get_post_thumbnail_id());
?>
<?php include_once "header.php"; ?>
<body class="">
<div id="wrapper"> 
  <?php /* preloader */ ?>
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Desabilitar Preloader</div>
  </div>
  
  <?php include_once "top-internas.php"; ?>
<?php /* Start main-content */ ?>
<div class="main-content">
  <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-stellar-background-ratio="0.5" data-bg-img="<?=$img?>" style="background-color: rgb(0,41,67);">
    <div class="container pt-90 pb-30">
      <!-- Section Content -->
      <div class="section-content pt-100">
        <div class="row"> 
          <div class="col-md-12">
            <h3 class="title text-white"><?=get_the_title(); ?></h2>
          </div>
          <div class="col-md-12">
            <ol class="breadcrumb text-center mt-10 white">
              <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
              <li class="active"><?=get_the_title(); ?></li>
            </ol>
          </div>
        </div>
      </div>
    </div>      
  </section>
  <section class="divider bg-lighter" style="min-height: 540px;">
      <div class="container">
        <div class="row pt-30">
          <div class="col-md-12">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </section>

</div>
  <?php /* end main-content */ ?>

  <?php include_once "bottom.php"; ?>  
</div>

<?php include_once "footer.php"; ?>