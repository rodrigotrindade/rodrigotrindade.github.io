<?php $internas = TRUE; ?>
<?php include_once("../header.php"); ?> 

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

        <?php include_once("../top.php"); ?> 

            <!-- TOP -->
			<section class="pt-5 page_title ds s-overlay s-pt-140 s-pt-md-170 s-pb-60 s-pb-md-90 s-pb-lg-100" 
            style="background: url(../images/kwiver/leash/homepage-2.jpg) no-repeat center/cover">
				<div class="container">
					<div class="row pt-5">
						<div class="col-md-12 text-center pt-5">
							<h1>KW Leash</h1>
						</div>
					</div>
				</div>
			</section>
            <!-- END TOP -->
		
			<section id="about" class="mt-5 about_us ls c-mb-30">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-12 text-center text-sm-left order-1 order-lg-1">
							<h3 class="special-heading">
								<span class="text-capitalize ">
								We are introducing the KW Leash®
								</span>
							</h3>
							
							<div class="fw-divider-space divider-20 divider-lg-60"></div>
							<div class="text-block with-border">
								<p>
								We, kitewavers´, love riding strapless surfboards. But
								when we have challeging conditions such as high/large
								waves, reef breaks, rock clifs or even wasting time body
								dragging, being far from your board is not an option, it is
								likely to put you at risk.								</p>
								<p>
                                By the way we know surf leashes don´t meet the
								kitewavers’ needs so we´ve developed a new, safer and
								easier to use product. 
								</p>
							</div>
							<div class="fw-divider-space divider-30 divider-lg-60"></div>
						</div>
					</div>
					<div class="row align-items-top mb-5 mt-3">
						<div class="col-lg-6 order-2">
							<div class="img-leash-kwiver img-wrap absolute-image-left">
								<img src="../images/kwiver/leash/ankle-free-strap.png" class="img-leash" alt="about1">
							</div>
						</div>
						<div class="col-lg-6 order-1 mb-0">
							<h5 class="special-heading">
								<span class="text-capitalize ">
                                	Ankle free strap
								</span>
							</h5>
							<div class="text-block with-border"> 
								<ul>
									<li>The KW Leash® is attached to the
										harness. This provides performance, agility and, in case
										of panic, you won´t be dragged by your leg.
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row align-items-top mb-5 mt-3">
						<div class="col-lg-6 order-2">
							<div class="img-leash-kwiver img-wrap absolute-image-left">
								<img src="../images/kwiver/leash/quick-and-easy-eject-2.png" class="img-leash" alt="about1">
							</div>
						</div>
						<div class="col-lg-6 order-1 mb-0">
							<h5 class="special-heading">
								<span class="text-capitalize ">
								Quick and easy eject
								</span>
							</h5>
							<div class="text-block with-border"> 
								<ul>
									<li>Allows kitewavers to get rid of
										the board quickly avoiding dangerous situations or
										emergencies.  
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row align-items-top mb-5 mt-3">
						<div class="col-lg-6 order-2">
							<div class="img-leash-kwiver img-wrap absolute-image-left">
								<img src="../images/kwiver/leash/anti-slingshot-system.png" class="img-leash" alt="about1">
							</div>
						</div>
						<div class="col-lg-6 order-1 mb-0">
							<h5 class="special-heading">
								<span class="text-capitalize "> 
								Anti-slingshot system
								</span>
							</h5>
							<div class="text-block with-border"> 
								<ul>
									<li>System developted to
										deaccelerate the boardslingshot.
									</li>
								</ul>
							</div>
						</div> 
					</div>

					<div class="row align-items-top mt-2">
						<div class="col-lg-12 order-1">
							<div class="text-block with-border">
								<button type="submit" onclick="gobuy();" style="width:100%" class="single_add_to_cart_button button pl-5 pr-5 alt">Buy</button>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="ds pt-5">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<h3 class="special-heading text-center">
								<span class="text-capitalize ">
									Our Projects
								</span>
							</h3>
							<!-- <h3 class="special-heading text-center">
								<span class="text-capitalize thin">
									You Will Love It.
								</span>
							</h3> -->
							<div class="fw-divider-space divider-30 divider-lg-65"></div>
							<div class="row justify-content-center">
								<div class="col-md-10 col-xl-8">
									<div class="d-none filters gallery-filters small-text text-lg-right">
										<a href="#" data-filter="*" class="active selected">All</a>
										<a href="#" data-filter=".corporate">Web Design</a>
										<a href="#" data-filter=".business">Logo Design </a>
										<a href="#" data-filter=".entertainment">Averticement</a>
										<a href="#" data-filter=".innovations">Averticement</a>
										<a href="#" data-filter=".design">Design</a>
										<a href="#" data-filter=".photo">Photo</a>
									</div>
								</div>
							</div>
							<?php
								$photos = array(
									array(
										"index" => "1",
										"date" => "February 1, 2022",
										"text" => "Lorem ipsum dolor sit",
										"link" => "#",
										"filter" => ""
									),
									array(
										"index" => "2",
										"date" => "February 2, 2022",
										"text" => "Lorem ipsum dolor sit",
										"link" => "#",
										"filter" => ""
									),
									array(
										"index" => "3",
										"date" => "February 3, 2022",
										"text" => "Lorem ipsum dolor sit",
										"link" => "#",
										"filter" => ""
									),
									array(
										"index" => "4",
										"date" => "February 4, 2022",
										"text" => "Lorem ipsum dolor sit",
										"link" => "#",
										"filter" => ""
									),
									array(
										"index" => "5",
										"date" => "February 5, 2022",
										"text" => "Lorem ipsum dolor sit",
										"link" => "#",
										"filter" => ""
									),
									array(
										"index" => "6",
										"date" => "February 6, 2022",
										"text" => "Lorem ipsum dolor sit",
										"link" => "#",
										"filter" => ""
									),
								);
							?>
							<div class="owl-carousel shortcode-gallery" data-dots="true" data-center="false" data-autoplay="true" data-margin="0" data-loop="false" data-responsive-lg="5" data-responsive-md="4" data-responsive-sm="2" data-responsive-xs="1" data-filters=".gallery-filters">
								<?php foreach($photos as $photo): ?>
								<div class="grid-item <?=$photo["filter"]?>">
									<div class="vertical-item item-gallery content-absolute ds">
										<div class="item-media">
											<img src="../images/kwiver/leash/slides/slide-<?=$photo["index"]?>_p.png" alt="">
										</div>
										<div class="item-content ">
											<span><?=$photo["date"]?></span>
											<h6>
												<a href="<?=$photo["link"]?>"><?=$photo["text"]?></a>
											</h6>
											<div class="links-wrap">
												<a class="link-zoom photoswipe-link" title="" href="../images/kwiver/leash/slides/slide-<?=$photo["index"]?>.png"></a>
											</div>
										</div>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</section>

			<script>
				function gobuy(){
					window.open("https://wa.me/5551992262662?text=Olá!", '_blank');
				}
			</script>

			<?php include_once("../bottom.php"); ?>
		</div>
	</div>


<?php include_once("../footer.php"); ?>