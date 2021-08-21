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
  
  <?php include_once "top.php"; ?>
<?php /* Start main-content */ ?>
<div class="main-content">

  <?php include_once "slider.php"; ?> 
  <?php include_once "about.php"; ?>
  <?php include_once "proposicaoValor.php"; ?> 
  <?php include_once "testimonials.php"; ?>
  <?php include_once "contact.php"; ?>

</div>
  <?php /* end main-content */ ?>

  <?php include_once "bottom.php"; ?>  
</div>

<?php include_once "footer.php"; ?>