<section id="testimonials" class="divider parallax layer-overlay overlay-deep" data-stellar-background-ratio="0.5" data-bg-img="<?php bloginfo('template_url'); ?>/images/testimonials.jpg">
      <div class="container pb-30">
        <div class="section-title mb-30">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="font-36 text-theme-colored mb-30">Depoimentos</h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row" id="depoimentos">
              <div class="col-md-12 mb-30">
                <div class="testimonial-carousel">
<?php
$args = array( 
  'post_type' => 'depoimentos', 
  'posts_per_page' => -1,
  'meta_key' => '_Z_ordemDepoimento',
  'post_status' => 'publish',
  'orderby' => 'meta_value_num', 
  'order' => 'ASC'
  );
$loop = new WP_Query( $args );
$i = 0;
while ( $loop->have_posts() ) : 
  $loop->the_post();
  global $post;
  $custom = get_post_custom();
  if ( has_post_thumbnail() ):
    $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ))[0];
  endif;

?>
                <div class="item text-center">
                  <div class="content bg-az-escuro">
                    <p><?=$post->post_content?></p>
                    <?php if ( has_post_thumbnail() ): ?>
                    <div class="thumb"><img width="75" class="" alt="" src="<?=$img?>"></div>
                    <?php endif; ?>
                    <h5 class="author text-theme-colored mt-20 mb-0"><?=$post->post_excerpt?></h5>
                  </div>
                </div>    
<?php
endwhile;
?>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </section>