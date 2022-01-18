<section id="contato" class="divider" data-bg-color="#fff">
      <div class="container pb-30">
        <div class="row">
          <div class="col-sm-7 col-md-6">
            <h4 class="text-uppercase">Contato</h4>
            <div class="line-bottom mb-30"></div>
            <ul class="list no-dot">
                <?php dynamic_sidebar("contato"); ?>
                <?php /* 
              <li><i class="fa fa-phone"></i> +012 233 3455</li>
              <li><i class="fa fa-envelope"></i> hello@yourdomain.com</li>
              <li><i class="fa fa-globe"></i> www.yourdomain.com</li>
              <li><i class="fa fa-clock-o"></i> Mon-Fri 9.00am-20.00pm</li>
              <li><i class="fa fa-map-marker"></i> 121 King Street, Melbourne Victoria 3000</li>
              */?>
            </ul>
			<h4 class="text-uppercase mt-50">Políticas</h4>
            <div class="line-bottom"></div>
            <ul class="list no-dot">
            	<?php dynamic_sidebar("ajuda"); ?>
            </ul>
<!--             <ul class="social-icons icon-blue small m-0 mt-30 mb-30"> -->
             <?php // dynamic_sidebar("social"); ?> 
<!--            </ul> -->
          </div>
          <div class="col-sm-12 col-md-6">
            <?php dynamic_sidebar("formcontato_home"); ?>  
          </div>
        </div>
      </div>
</section>