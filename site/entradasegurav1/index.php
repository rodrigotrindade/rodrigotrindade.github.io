<?php include_once "header.php"; ?>

<body class="boxed-layout pt-40 pb-40" data-bg-img="<?php bloginfo('template_url'); ?>/images/pattern/p11.png">
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
  
  <?php include_once "top.php"; ?>
  
  <?php /* Start main-content */ ?>
  <div class="main-content">
    
  <?php include_once "slider.php"; ?>
  <?php include_once "about.php"; ?>  
  <?php /* include_once "schedule.php"; ?>  
  <?php include_once "speaker.php"; ?>  
  <?php include_once "call.php"; ?>  
  <?php include_once "tickets.php"; ?>  
  <?php include_once "facilities.php"; ?>  
  <?php include_once "funfact.php"; ?>  
  <?php include_once "sponsors.php"; ?>  
  <?php include_once "news.php"; ?>  
  <?php include_once "testimonials.php"; ?>  
  <?php include_once "map.php"; */ ?>  

  </div>
  <?php /* end main-content */ ?>
  
  <?php include_once "bottom.php"; ?>  
</div>

<?php include_once "footer.php"; ?>