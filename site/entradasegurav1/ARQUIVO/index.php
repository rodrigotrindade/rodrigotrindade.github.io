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
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <?php /* Header */ ?>
  <header class="header">
    <div class="header-nav navbar-fixed-top navbar-dark navbar-transparent navbar-sticky-animated animated-active">
      <div class="header-nav-wrapper">
        <div class="container">
          <nav id="menuzord-right" class="menuzord green">
            <a class="menuzord-brand pull-left flip" href="javascript:void(0)"><img src="images/logo-wide.png" alt=""></a>
            <ul class="menuzord-menu">
              <li class="active"><a href="#home">Home</a></li>
              <li><a href="#about">about</a></li>
              <li><a href="#schedule">Schedule</a></li>
              <li><a href="#speaker">Speakers</a></li>
              <li><a href="#tickets">Tickets</a></li>
              <li><a href="#event">Event</a></li>
              <li><a href="#news">News</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  
  <?php /* Start main-content */ ?>
  <div class="main-content">
    <?php /* Section: home */ ?>
    <section id="home" class="divider">
      <div class="container-fluid p-0">
        
        <?php /* Slider Revolution Start */ ?>
        <div class="rev_slider_wrapper">
          <div class="rev_slider" data-version="5.0">
            <ul>

              <?php /* SLIDE 1 */ ?>
              <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="http://placehold.it/1920x1281" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-description="">
                <?php /* MAIN IMAGE */ ?>
                <img src="http://placehold.it/1920x1281"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                <?php /* LAYERS */ ?>

                <?php /* LAYER NR. 1 */ ?>
                <div class="tp-caption tp-resizeme text-theme-colored"
                  id="rs-1-layer-1"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-115']"
                  data-fontsize="['30']"
                  data-lineheight="['70']"

                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;">Third International Conference on
                </div>

                <?php /* LAYER NR. 2 */ ?>
                <div class="tp-caption tp-resizeme text-center text-white font-montserrat" 
                  id="rs-1-layer-2"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-40'']"
                  data-fontsize="['72','72','54','24']"
                  data-lineheight="['90']"

                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:600;">Financing for Development
                </div>

                <?php /* LAYER NR. 3 */ ?>
                <div class="tp-caption tp-resizeme text-center text-white" 
                  id="rs-1-layer-3"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['40']"
                  data-fontsize="['24']"
                  data-lineheight="['36']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1800" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:600;">15-20 February, 2018, Sydney
                </div>
              </li>

              <?php /* SLIDE 2 */ ?>
              <li data-index="rs-2" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="http://placehold.it/1920x1280" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-description="">
                <?php /* MAIN IMAGE */ ?>
                <img src="http://placehold.it/1920x1280"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                <?php /* LAYERS */ ?>

                <?php /* LAYER NR. 1 */ ?>
                <div class="tp-caption tp-resizeme text-theme-colored"
                  id="rs-2-layer-1"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-115']"
                  data-fontsize="['30']"
                  data-lineheight="['70']"

                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600;">Third International Conference on
                </div>

                <?php /* LAYER NR. 2 */ ?>
                <div class="tp-caption tp-resizeme text-center text-white font-montserrat" 
                  id="rs-2-layer-2"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-40'']"
                  data-fontsize="['72','72','54','24']"
                  data-lineheight="['90']"

                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:600;">Financing for Development
                </div>

                <?php /* LAYER NR. 3 */ ?>
                <div class="tp-caption tp-resizeme text-center text-white" 
                  id="rs-2-layer-3"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['40']"
                  data-fontsize="['24']"
                  data-lineheight="['36']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1800" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:600;">15-20 February, 2018, Sydney
                </div>
              </li>

              <?php /* SLIDE 3 */ ?>
              <li data-index="rs-3" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="http://placehold.it/1920x1281" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-description="">
                <?php /* MAIN IMAGE */ ?>
                <img src="http://placehold.it/1920x1281"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="6" data-no-retina>
                <?php /* LAYERS */ ?>

                <?php /* LAYER NR. 1 */ ?>
                <div class="tp-caption tp-resizeme text-theme-colored"
                  id="rs-3-layer-1"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-115']"
                  data-fontsize="['30']"
                  data-lineheight="['70']"

                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1000" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 7; white-space: nowrap; font-weight:600; color:#bbb;">Third International Conference on
                </div>

                <?php /* LAYER NR. 2 */ ?>
                <div class="tp-caption tp-resizeme text-center text-white font-montserrat" 
                  id="rs-3-layer-2"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['-40'']"
                  data-fontsize="['72','72','54','24']"
                  data-lineheight="['90']"

                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1400" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:600;">Financing for Development
                </div>

                <?php /* LAYER NR. 3 */ ?>
                <div class="tp-caption tp-resizeme text-center text-white" 
                  id="rs-3-layer-3"

                  data-x="['center']"
                  data-hoffset="['0']"
                  data-y="['middle']"
                  data-voffset="['40']"
                  data-fontsize="['24']"
                  data-lineheight="['36']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;s:500"
                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1800" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on"
                  style="z-index: 5; white-space: nowrap; font-weight:600;">15-20 February, 2018, Sydney
                </div>
              </li>

            </ul>
          </div><?php /* end .rev_slider */ ?>
        </div>
        <?php /* end .rev_slider_wrapper */ ?>
        <script>
          $(document).ready(function(e) {
            var revapi = $(".rev_slider").revolution({
              sliderType:"standard",
              jsFileLocation: "js/revolution-slider/js/",
              sliderLayout: "fullscreen",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "off",
                  touch: {
                      touchenabled: "on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                  },
                  arrows: {
                      style: "gyges",
                      enable: true,
                      hide_onmobile: false,
                      hide_onleave: true,
                      hide_delay: 200,
                      hide_delay_mobile: 1200,
                      tmp: '',
                      left: {
                          h_align: "left",
                          v_align: "center",
                          h_offset: 0,
                          v_offset: 0
                      },
                      right: {
                          h_align: "right",
                          v_align: "center",
                          h_offset: 0,
                          v_offset: 0
                      }
                  },
                    bullets: {
                    enable: true,
                    hide_onmobile: true,
                    hide_under: 800,
                    style: "hebe",
                    hide_onleave: false,
                    direction: "horizontal",
                    h_align: "center",
                    v_align: "bottom",
                    h_offset: 0,
                    v_offset: 30,
                    space: 5,
                    tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [700, 768, 960, 720],
              lazyType: "none",
              parallax:"mouse",
              parallaxBgFreeze:"off",
              parallaxLevels:[2,3,4,5,6,7,8,9,10,1],
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
              }
            });
          });
        </script>
        <?php /* Slider Revolution Ends */ ?>
      </div>
    </section>
    
    <?php /* Section: About */ ?>
    <section id="about">
      <div class="container-fluid pt-0 pb-0">
        <div class="row">
          <div class="divider layer-overlay overlay-deep equal-height" data-bg-img="http://placehold.it/1920x1280">
            <div class="col-md-12 col-lg-6 md-text-center sm-height-auto">
              <div class="p-50 pl-md-0 pr-0">
                <h2 class="text-black-444">Meet Up For Free Registretion</h2>
                <ul class="list-inline xs-list-inline-none mt-50">
                  <li>
                    <h4 class="text-gray-light"><i class="fa fa-map-marker text-theme-colored"></i> Location</h4>
                    <h6 class="text-gray">Khulna, Bangladesh</h6>
                  </li>
                  <li class="ml-30">
                    <h4 class="text-gray-light"><i class="fa fa-ticket text-theme-colored"></i> Tickets</h4>
                    <h6 class="text-gray">130 tickets remaining</h6>
                  </li>
                  <li class="ml-30">
                    <h4 class="text-gray-light"><i class="fa fa-microphone text-theme-colored"></i> Speakers</h4>
                    <h6 class="text-gray">25 professional Speakers</h6>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 pr-0 pt-50 pl-md-0 sm-height-auto bg-theme-colored">
              <div id="clock" class="countdown-timer timer-box bg-theme-colored" data-endingdate="2018/02/15"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3 class="sub-title font-28 text-gray-darkgray m-0 mt-0 mt-md-0">Overview</h3>
            <h2 class="title font-48 text-gray mt-0 mb-20">About the Conference</h2>
            <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam modi consequuntur maxime voluptates earum illo sunt, veritatis maiores doloribus ut id, nostrum. Temporibus odit quas illum eos dolores itaque facilis omnis beatae saepe eum. Odit labore vel temporibus quasi.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam modi consequuntur maxime voluptates earum illo sunt, veritatis maiores doloribus ut id, nostrum. Temporibus odit quas illum eos dolores itaque facilis omnis beatae saepe eum. Odit labore vel temporibus.</p>
            <a class="btn btn-colored btn-theme-colored btn-lg text-uppercase smooth-scroll font-13 mt-30" href="#schedule">See Event Schedule</a>
            <a class="btn btn-dark-light btn-lg text-uppercase smooth-scroll font-13 mt-30" href="#tickets">Register Now</a>
          </div>
        </div>
      </div>
    </section>

    <?php /* Section: Schedule */ ?>
    <section id="schedule">
      <div class="divider parallax layer-overlay overlay-darkblue" data-stellar-background-ratio="0.5" data-bg-img="http://placehold.it/1920x1280">
        <div class="container pt-50 pb-50">
          <div class="section-title">
            <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="title text-white mb-0">Event Schedule</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="layer-overlay overlay-deep" data-bg-img="http://placehold.it/1920x1280">
        <div class="container pt-80 pb-80">
          <div class="section-content">
            <div class="row">
              <div class="col-md-12">
                <div class="schedule-tab">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">Day 1 <span>17 Feb 2018</span></a></li>
                    <li class=""><a href="#tab2" data-toggle="tab">Day 2 <span>18 Feb 2018</span></a></li>
                    <li class=""><a href="#tab3" data-toggle="tab">Day 3 <span>19 Feb 2018</span></a></li>
                    <li class=""><a href="#tab4" data-toggle="tab">Day 4 <span>20 Feb 2018</span></a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab1">
                      <div class="cd-timeline cd-container">
                        <?php /* cd-timeline-block */ ?>
                        <div class="cd-timeline-block">
                          <div class="cd-timeline-img cd-movie"> <i class="fa fa-file-text-o"></i> </div>
                          <div class="cd-timeline-content">
                            <div class="row equal-height">
                              <div class="col-sm-8 pr-0 sm-height-auto">
                                <div class="cd-content-left p-15">
                                  <h5 class="timeline-title">Registration + Breakfast</h5>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <?php /* cd-timeline-block */ ?>
                        <div class="cd-timeline-block">
                          <div class="cd-timeline-img cd-movie"> <i class="fa fa-user"></i> </div>
                          <div class="cd-timeline-content">
                            <div class="row equal-height">
                              <div class="col-sm-8 pr-0 sm-height-auto">
                                <div class="cd-content-left p-15">
                                  <h5 class="timeline-title">The Future of CSS <span class="toggle-content"><i class="fa fa-plus-square-o"></i></span></h5>
                                  <p>Lorem ipsum dolor sit amet, te eum graeco partiendo, ei qui iudico accusamus. Amet rebum nostrud has in, movet iisque no qui, ea duo everti ancillae probatus. Odio ignota vix id. Ex est consul contentiones. Nobis facete usu ut, ludus partem deterruisset ei usu. Vel cu fabulas periculis, eu mea percipit probatus consequuntur.</p>
                                  <div class="cd-speaker clearfix">
                                    <img width="70" class="pull-left flip img-circle mr-15" src="http://placehold.it/75x75" alt="">
                                    <h6 class="pt-0 mb-0">Jacob Doe</h6><span class="font-12">Director, abc inc.</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4 pl-0 pl-sm-15 sm-height-auto">
                                <div class="cd-content-right p-15">
                                  <ul class="cd-timeline-meta mt-sm-0">
                                    <li><i class="fa fa-clock-o"></i> 9AM - 11 AM</li>
                                    <li><i class="fa fa-thumb-tack"></i> Convention Center, Hilton Hotel</li>
                                  </ul>
                                  <a href="#" class="btn btn-colored btn-theme-colored btn-sm text-uppercase">Read more</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <?php /* cd-timeline-block */ ?>
                        <div class="cd-timeline-block">
                          <div class="cd-timeline-img cd-movie"> <i class="fa fa-user"></i> </div>
                          <div class="cd-timeline-content">
                            <div class="row equal-height">
                              <div class="col-sm-8 pr-0 sm-height-auto">
                                <div class="cd-content-left p-15">
                                  <h5 class="timeline-title">Fun with Animation API <span class="toggle-content"><i class="fa fa-plus-square-o"></i></span></h5>
                                  <p>Lorem ipsum dolor sit amet, te eum graeco partiendo, ei qui iudico accusamus. Amet rebum nostrud has in, movet iisque no qui, ea duo everti ancillae probatus. Odio ignota vix id. Ex est consul contentiones. Nobis facete usu ut, ludus partem deterruisset ei usu. Vel cu fabulas periculis, eu mea percipit probatus consequuntur.</p>
                                  <div class="cd-speaker clearfix">
                                    <img width="70" class="pull-left flip img-circle mr-15" src="http://placehold.it/75x75" alt=""> 
                                    <h6 class="pt-0 mb-0">Jacob Doe</h6><span class="font-12">Director, abc inc.</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4 pl-0 pl-sm-15 sm-height-auto">
                                <div class="cd-content-right p-15">
                                  <ul class="cd-timeline-meta mt-sm-0">
                                    <li><i class="fa fa-clock-o"></i> 9AM - 11 AM</li>
                                    <li><i class="fa fa-thumb-tack"></i> Convention Center, Hilton Hotel</li>
                                  </ul>
                                  <a href="#" class="btn btn-colored btn-theme-colored btn-sm text-uppercase">Read more</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <?php /* cd-timeline-block */ ?>
                        <div class="cd-timeline-block">
                          <div class="cd-timeline-img cd-movie"> <i class="fa fa-cutlery"></i> </div>
                          <div class="cd-timeline-content">
                            <div class="row equal-height">
                              <div class="col-sm-8 pr-0 sm-height-auto">
                                <div class="cd-content-left p-15">
                                  <h5 class="timeline-title">Lunch Break</h5>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <?php /* cd-timeline-block */ ?>
                        <div class="cd-timeline-block">
                          <div class="cd-timeline-img cd-movie"> <i class="fa fa-user"></i> </div>
                          <div class="cd-timeline-content">
                            <div class="row equal-height">
                              <div class="col-sm-8 pr-0 sm-height-auto">
                                <div class="cd-content-left p-15">
                                  <h5 class="timeline-title">Sass Map Magic <span class="toggle-content"><i class="fa fa-plus-square-o"></i></span></h5>
                                  <p>Lorem ipsum dolor sit amet, te eum graeco partiendo, ei qui iudico accusamus. Amet rebum nostrud has in, movet iisque no qui, ea duo everti ancillae probatus. Odio ignota vix id. Ex est consul contentiones. Nobis facete usu ut, ludus partem deterruisset ei usu. Vel cu fabulas periculis, eu mea percipit probatus consequuntur.</p>
                                  <div class="cd-speaker clearfix">
                                    <img width="70" class="pull-left flip img-circle mr-15" src="http://placehold.it/75x75" alt=""> 
                                    <h6 class="pt-0 mb-0">Jacob Doe</h6><span class="font-12">Director, abc inc.</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4 pl-0 pl-sm-15 sm-height-auto">
                                <div class="cd-content-right p-15">
                                  <ul class="cd-timeline-meta mt-sm-0">
                                    <li><i class="fa fa-clock-o"></i> 9AM - 11 AM</li>
                                    <li><i class="fa fa-thumb-tack"></i> Convention Center, Hilton Hotel</li>
                                  </ul>
                                  <a href="#" class="btn btn-colored btn-theme-colored btn-sm text-uppercase">Read more</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <?php /* cd-timeline-block */ ?>
                        <div class="cd-timeline-block">
                          <div class="cd-timeline-img cd-movie"> <i class="fa fa-thumbs-o-up"></i> </div>
                          <div class="cd-timeline-content">
                            <div class="row equal-height">
                              <div class="col-sm-8 pr-0 sm-height-auto">
                                <div class="cd-content-left p-15">
                                  <h5 class="timeline-title">Vote of Thanks</h5>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php /* cd-timeline */ ?>
                    </div>

                    <div class="tab-pane fade in" id="tab2">
                      <div class="cd-timeline cd-container">
                        <?php /* cd-timeline-block */ ?>
                        <div class="cd-timeline-block">
                          <div class="cd-timeline-img cd-movie"> <i class="fa fa-file-text-o"></i> </div>
                          <div class="cd-timeline-content">
                            <div class="row equal-height">
                              <div class="col-sm-8 pr-0 sm-height-auto">
                                <div class="cd-content-left p-15">
                                  <h5 class="timeline-title">Registration + Breakfast</h5>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <?php /* cd-timeline-block */ ?>
                        <div class="cd-timeline-block">
                          <div class="cd-timeline-img cd-movie"> <i class="fa fa-user"></i> </div>
                          <div class="cd-timeline-content">
                            <div class="row equal-height">
                              <div class="col-sm-8 pr-0 sm-height-auto">
                                <div class="cd-content-left p-15">
                                  <h5 class="timeline-title">The Future of CSS <span class="toggle-content"><i class="fa fa-plus-square-o"></i></span></h5>
                                  <p>Lorem ipsum dolor sit amet, te eum graeco partiendo, ei qui iudico accusamus. Amet rebum nostrud has in, movet iisque no qui, ea duo everti ancillae probatus. Odio ignota vix id. Ex est consul contentiones. Nobis facete usu ut, ludus partem deterruisset ei usu. Vel cu fabulas periculis, eu mea percipit probatus consequuntur.</p>
                                  <div class="cd-speaker clearfix">
                                    <img width="70" class="pull-left flip img-circle mr-15" src="http://placehold.it/75x75" alt="">
                                    <h6 class="pt-0 mb-0">Jacob Doe</h6><span class="font-12">Director, abc inc.</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4 pl-0 pl-sm-15 sm-height-auto">
                                <div class="cd-content-right p-15">
                                  <ul class="cd-timeline-meta mt-sm-0">
                                    <li><i class="fa fa-clock-o"></i> 9AM - 11 AM</li>
                                    <li><i class="fa fa-thumb-tack"></i> Convention Center, Hilton Hotel</li>
                                  </ul>
                                  <a href="#" class="btn btn-colored btn-theme-colored btn-sm text-uppercase">Read more</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <?php /* cd-timeline-block */ ?>
                        <div class="cd-timeline-block">
                          <div class="cd-timeline-img cd-movie"> <i class="fa fa-user"></i> </div>
                          <div class="cd-timeline-content">
                            <div class="row equal-height">
                              <div class="col-sm-8 pr-0 sm-height-auto">
                                <div class="cd-content-left p-15">
                                  <h5 class="timeline-title">Fun with Animation API <span class="toggle-content"><i class="fa fa-plus-square-o"></i></span></h5>
                                  <p>Lorem ipsum dolor sit amet, te eum graeco partiendo, ei qui iudico accusamus. Amet rebum nostrud has in, movet iisque no qui, ea duo everti ancillae probatus. Odio ignota vix id. Ex est consul contentiones. Nobis facete usu ut, ludus partem deterruisset ei usu. Vel cu fabulas periculis, eu mea percipit probatus consequuntur.</p>
                                  <div class="cd-speaker clearfix">
                                    <img width="70" class="pull-left flip img-circle mr-15" src="http://placehold.it/75x75" alt=""> 
                                    <h6 class="pt-0 mb-0">Jacob Doe</h6><span class="font-12">Director, abc inc.</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4 pl-0 pl-sm-15 sm-height-auto">
                                <div class="cd-content-right p-15">
                                  <ul class="cd-timeline-meta mt-sm-0">
                                    <li><i class="fa fa-clock-o"></i> 9AM - 11 AM</li>
                                    <li><i class="fa fa-thumb-tack"></i> Convention Center, Hilton Hotel</li>
                                  </ul>
                                  <a href="#" class="btn btn-colored btn-theme-colored btn-sm text-uppercase">Read more</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <?php /* cd-timeline-block */ ?>
                        <div class="cd-timeline-block">
                          <div class="cd-timeline-img cd-movie"> <i class="fa fa-cutlery"></i> </div>
                          <div class="cd-timeline-content">
                            <div class="row equal-height">
                              <div class="col-sm-8 pr-0 sm-height-auto">
                                <div class="cd-content-left p-15">
                                  <h5 class="timeline-title">Lunch Break</h5>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <?php /* cd-timeline-block */ ?>
                        <div class="cd-timeline-block">
                          <div class="cd-timeline-img cd-movie"> <i class="fa fa-user"></i> </div>
                          <div class="cd-timeline-content">
                            <div class="row equal-height">
                              <div class="col-sm-8 pr-0 sm-height-auto">
                                <div class="cd-content-left p-15">
                                  <h5 class="timeline-title">Sass Map Magic <span class="toggle-content"><i class="fa fa-plus-square-o"></i></span></h5>
                                  <p>Lorem ipsum dolor sit amet, te eum graeco partiendo, ei qui iudico accusamus. Amet rebum nostrud has in, movet iisque no qui, ea duo everti ancillae probatus. Odio ignota vix id. Ex est consul contentiones. Nobis facete usu ut, ludus partem deterruisset ei usu. Vel cu fabulas periculis, eu mea percipit probatus consequuntur.</p>
                                  <div class="cd-speaker clearfix">
                                    <img width="70" class="pull-left flip img-circle mr-15" src="http://placehold.it/75x75" alt=""> 
                                    <h6 class="pt-0 mb-0">Jacob Doe</h6><span class="font-12">Director, abc inc.</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4 pl-0 pl-sm-15 sm-height-auto">
                                <div class="cd-content-right p-15">
                                  <ul class="cd-timeline-meta mt-sm-0">
                                    <li><i class="fa fa-clock-o"></i> 9AM - 11 AM</li>
                                    <li><i class="fa fa-thumb-tack"></i> Convention Center, Hilton Hotel</li>
                                  </ul>
                                  <a href="#" class="btn btn-colored btn-theme-colored btn-sm text-uppercase">Read more</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <?php /* cd-timeline-block */ ?>
                        <div class="cd-timeline-block">
                          <div class="cd-timeline-img cd-movie"> <i class="fa fa-thumbs-o-up"></i> </div>
                          <div class="cd-timeline-content">
                            <div class="row equal-height">
                              <div class="col-sm-8 pr-0 sm-height-auto">
                                <div class="cd-content-left p-15">
                                  <h5 class="timeline-title">Vote of Thanks</h5>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php /* cd-timeline */ ?>
                    </div>

                    <div class="tab-pane fade in" id="tab3">
                      <div class="cd-timeline cd-container">
                        <?php /* cd-timeline-block */ ?>
                        <div class="cd-timeline-block">
                          <div class="cd-timeline-img cd-movie"> <i class="fa fa-file-text-o"></i> </div>
                          <div class="cd-timeline-content">
                            <div class="row equal-height">
                              <div class="col-sm-8 pr-0 sm-height-auto">
                                <div class="cd-content-left p-15">
                                  <h5 class="timeline-title">Registration + Breakfast</h5>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <?php /* cd-timeline-block */ ?>
                        <div class="cd-timeline-block">
                          <div class="cd-timeline-img cd-movie"> <i class="fa fa-user"></i> </div>
                          <div class="cd-timeline-content">
                            <div class="row equal-height">
                              <div class="col-sm-8 pr-0 sm-height-auto">
                                <div class="cd-content-left p-15">
                                  <h5 class="timeline-title">The Future of CSS <span class="toggle-content"><i class="fa fa-plus-square-o"></i></span></h5>
                                  <p>Lorem ipsum dolor sit amet, te eum graeco partiendo, ei qui iudico accusamus. Amet rebum nostrud has in, movet iisque no qui, ea duo everti ancillae probatus. Odio ignota vix id. Ex est consul contentiones. Nobis facete usu ut, ludus partem deterruisset ei usu. Vel cu fabulas periculis, eu mea percipit probatus consequuntur.</p>
                                  <div class="cd-speaker clearfix">
                                    <img width="70" class="pull-left flip img-circle mr-15" src="http://placehold.it/75x75" alt="">
                                    <h6 class="pt-0 mb-0">Jacob Doe</h6><span class="font-12">Director, abc inc.</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4 pl-0 pl-sm-15 sm-height-auto">
                                <div class="cd-content-right p-15">
                                  <ul class="cd-timeline-meta mt-sm-0">
                                    <li><i class="fa fa-clock-o"></i> 9AM - 11 AM</li>
                                    <li><i class="fa fa-thumb-tack"></i> Convention Center, Hilton Hotel</li>
                                  </ul>
                                  <a href="#" class="btn btn-colored btn-theme-colored btn-sm text-uppercase">Read more</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <?php /* cd-timeline-block */ ?>
                        <div class="cd-timeline-block">
                          <div class="cd-timeline-img cd-movie"> <i class="fa fa-user"></i> </div>
                          <div class="cd-timeline-content">
                            <div class="row equal-height">
                              <div class="col-sm-8 pr-0 sm-height-auto">
                                <div class="cd-content-left p-15">
                                  <h5 class="timeline-title">Fun with Animation API <span class="toggle-content"><i class="fa fa-plus-square-o"></i></span></h5>
                                  <p>Lorem ipsum dolor sit amet, te eum graeco partiendo, ei qui iudico accusamus. Amet rebum nostrud has in, movet iisque no qui, ea duo everti ancillae probatus. Odio ignota vix id. Ex est consul contentiones. Nobis facete usu ut, ludus partem deterruisset ei usu. Vel cu fabulas periculis, eu mea percipit probatus consequuntur.</p>
                                  <div class="cd-speaker clearfix">
                                    <img width="70" class="pull-left flip img-circle mr-15" src="http://placehold.it/75x75" alt=""> 
                                    <h6 class="pt-0 mb-0">Jacob Doe</h6><span class="font-12">Director, abc inc.</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4 pl-0 pl-sm-15 sm-height-auto">
                                <div class="cd-content-right p-15">
                                  <ul class="cd-timeline-meta mt-sm-0">
                                    <li><i class="fa fa-clock-o"></i> 9AM - 11 AM</li>
                                    <li><i class="fa fa-thumb-tack"></i> Convention Center, Hilton Hotel</li>
                                  </ul>
                                  <a href="#" class="btn btn-colored btn-theme-colored btn-sm text-uppercase">Read more</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <?php /* cd-timeline-block */ ?>
                        <div class="cd-timeline-block">
                          <div class="cd-timeline-img cd-movie"> <i class="fa fa-cutlery"></i> </div>
                          <div class="cd-timeline-content">
                            <div class="row equal-height">
                              <div class="col-sm-8 pr-0 sm-height-auto">
                                <div class="cd-content-left p-15">
                                  <h5 class="timeline-title">Lunch Break</h5>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <?php /* cd-timeline-block */ ?>
                        <div class="cd-timeline-block">
                          <div class="cd-timeline-img cd-movie"> <i class="fa fa-user"></i> </div>
                          <div class="cd-timeline-content">
                            <div class="row equal-height">
                              <div class="col-sm-8 pr-0 sm-height-auto">
                                <div class="cd-content-left p-15">
                                  <h5 class="timeline-title">Sass Map Magic <span class="toggle-content"><i class="fa fa-plus-square-o"></i></span></h5>
                                  <p>Lorem ipsum dolor sit amet, te eum graeco partiendo, ei qui iudico accusamus. Amet rebum nostrud has in, movet iisque no qui, ea duo everti ancillae probatus. Odio ignota vix id. Ex est consul contentiones. Nobis facete usu ut, ludus partem deterruisset ei usu. Vel cu fabulas periculis, eu mea percipit probatus consequuntur.</p>
                                  <div class="cd-speaker clearfix">
                                    <img width="70" class="pull-left flip img-circle mr-15" src="http://placehold.it/75x75" alt=""> 
                                    <h6 class="pt-0 mb-0">Jacob Doe</h6><span class="font-12">Director, abc inc.</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4 pl-0 pl-sm-15 sm-height-auto">
                                <div class="cd-content-right p-15">
                                  <ul class="cd-timeline-meta mt-sm-0">
                                    <li><i class="fa fa-clock-o"></i> 9AM - 11 AM</li>
                                    <li><i class="fa fa-thumb-tack"></i> Convention Center, Hilton Hotel</li>
                                  </ul>
                                  <a href="#" class="btn btn-colored btn-theme-colored btn-sm text-uppercase">Read more</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <?php /* cd-timeline-block */ ?>
                        <div class="cd-timeline-block">
                          <div class="cd-timeline-img cd-movie"> <i class="fa fa-thumbs-o-up"></i> </div>
                          <div class="cd-timeline-content">
                            <div class="row equal-height">
                              <div class="col-sm-8 pr-0 sm-height-auto">
                                <div class="cd-content-left p-15">
                                  <h5 class="timeline-title">Vote of Thanks</h5>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php /* cd-timeline */ ?>
                    </div>

                    <div class="tab-pane fade in" id="tab4">
                      <div class="cd-timeline cd-container">
                        <?php /* cd-timeline-block */ ?>
                        <div class="cd-timeline-block">
                          <div class="cd-timeline-img cd-movie"> <i class="fa fa-file-text-o"></i> </div>
                          <div class="cd-timeline-content">
                            <div class="row equal-height">
                              <div class="col-sm-8 pr-0 sm-height-auto">
                                <div class="cd-content-left p-15">
                                  <h5 class="timeline-title">Registration + Breakfast</h5>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <?php /* cd-timeline-block */ ?>
                        <div class="cd-timeline-block">
                          <div class="cd-timeline-img cd-movie"> <i class="fa fa-user"></i> </div>
                          <div class="cd-timeline-content">
                            <div class="row equal-height">
                              <div class="col-sm-8 pr-0 sm-height-auto">
                                <div class="cd-content-left p-15">
                                  <h5 class="timeline-title">The Future of CSS <span class="toggle-content"><i class="fa fa-plus-square-o"></i></span></h5>
                                  <p>Lorem ipsum dolor sit amet, te eum graeco partiendo, ei qui iudico accusamus. Amet rebum nostrud has in, movet iisque no qui, ea duo everti ancillae probatus. Odio ignota vix id. Ex est consul contentiones. Nobis facete usu ut, ludus partem deterruisset ei usu. Vel cu fabulas periculis, eu mea percipit probatus consequuntur.</p>
                                  <div class="cd-speaker clearfix">
                                    <img width="70" class="pull-left flip img-circle mr-15" src="http://placehold.it/75x75" alt="">
                                    <h6 class="pt-0 mb-0">Jacob Doe</h6><span class="font-12">Director, abc inc.</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4 pl-0 pl-sm-15 sm-height-auto">
                                <div class="cd-content-right p-15">
                                  <ul class="cd-timeline-meta mt-sm-0">
                                    <li><i class="fa fa-clock-o"></i> 9AM - 11 AM</li>
                                    <li><i class="fa fa-thumb-tack"></i> Convention Center, Hilton Hotel</li>
                                  </ul>
                                  <a href="#" class="btn btn-colored btn-theme-colored btn-sm text-uppercase">Read more</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <?php /* cd-timeline-block */ ?>
                        <div class="cd-timeline-block">
                          <div class="cd-timeline-img cd-movie"> <i class="fa fa-user"></i> </div>
                          <div class="cd-timeline-content">
                            <div class="row equal-height">
                              <div class="col-sm-8 pr-0 sm-height-auto">
                                <div class="cd-content-left p-15">
                                  <h5 class="timeline-title">Fun with Animation API <span class="toggle-content"><i class="fa fa-plus-square-o"></i></span></h5>
                                  <p>Lorem ipsum dolor sit amet, te eum graeco partiendo, ei qui iudico accusamus. Amet rebum nostrud has in, movet iisque no qui, ea duo everti ancillae probatus. Odio ignota vix id. Ex est consul contentiones. Nobis facete usu ut, ludus partem deterruisset ei usu. Vel cu fabulas periculis, eu mea percipit probatus consequuntur.</p>
                                  <div class="cd-speaker clearfix">
                                    <img width="70" class="pull-left flip img-circle mr-15" src="http://placehold.it/75x75" alt=""> 
                                    <h6 class="pt-0 mb-0">Jacob Doe</h6><span class="font-12">Director, abc inc.</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4 pl-0 pl-sm-15 sm-height-auto">
                                <div class="cd-content-right p-15">
                                  <ul class="cd-timeline-meta mt-sm-0">
                                    <li><i class="fa fa-clock-o"></i> 9AM - 11 AM</li>
                                    <li><i class="fa fa-thumb-tack"></i> Convention Center, Hilton Hotel</li>
                                  </ul>
                                  <a href="#" class="btn btn-colored btn-theme-colored btn-sm text-uppercase">Read more</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <?php /* cd-timeline-block */ ?>
                        <div class="cd-timeline-block">
                          <div class="cd-timeline-img cd-movie"> <i class="fa fa-cutlery"></i> </div>
                          <div class="cd-timeline-content">
                            <div class="row equal-height">
                              <div class="col-sm-8 pr-0 sm-height-auto">
                                <div class="cd-content-left p-15">
                                  <h5 class="timeline-title">Lunch Break</h5>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <?php /* cd-timeline-block */ ?>
                        <div class="cd-timeline-block">
                          <div class="cd-timeline-img cd-movie"> <i class="fa fa-user"></i> </div>
                          <div class="cd-timeline-content">
                            <div class="row equal-height">
                              <div class="col-sm-8 pr-0 sm-height-auto">
                                <div class="cd-content-left p-15">
                                  <h5 class="timeline-title">Sass Map Magic <span class="toggle-content"><i class="fa fa-plus-square-o"></i></span></h5>
                                  <p>Lorem ipsum dolor sit amet, te eum graeco partiendo, ei qui iudico accusamus. Amet rebum nostrud has in, movet iisque no qui, ea duo everti ancillae probatus. Odio ignota vix id. Ex est consul contentiones. Nobis facete usu ut, ludus partem deterruisset ei usu. Vel cu fabulas periculis, eu mea percipit probatus consequuntur.</p>
                                  <div class="cd-speaker clearfix">
                                    <img width="70" class="pull-left flip img-circle mr-15" src="http://placehold.it/75x75" alt=""> 
                                    <h6 class="pt-0 mb-0">Jacob Doe</h6><span class="font-12">Director, abc inc.</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-4 pl-0 pl-sm-15 sm-height-auto">
                                <div class="cd-content-right p-15">
                                  <ul class="cd-timeline-meta mt-sm-0">
                                    <li><i class="fa fa-clock-o"></i> 9AM - 11 AM</li>
                                    <li><i class="fa fa-thumb-tack"></i> Convention Center, Hilton Hotel</li>
                                  </ul>
                                  <a href="#" class="btn btn-colored btn-theme-colored btn-sm text-uppercase">Read more</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <?php /* cd-timeline-block */ ?>
                        <div class="cd-timeline-block">
                          <div class="cd-timeline-img cd-movie"> <i class="fa fa-thumbs-o-up"></i> </div>
                          <div class="cd-timeline-content">
                            <div class="row equal-height">
                              <div class="col-sm-8 pr-0 sm-height-auto">
                                <div class="cd-content-left p-15">
                                  <h5 class="timeline-title">Vote of Thanks</h5>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <?php /* cd-timeline */ ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php /* Section: Speaker */ ?>
    <section id="speaker">
      <div class="divider parallax layer-overlay overlay-darkblue" data-stellar-background-ratio="0.5" data-bg-img="http://placehold.it/1920x1280">
        <div class="container pt-50 pb-50">
          <div class="section-title">
            <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="title text-white mb-0">Our Speakers</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-white-light">
        <div class="container pt-80 pb-80">
          <div class="section-content">
            <div class="row multi-row-clearfix">
              <div class="col-xs-12 col-sm-6 col-md-3 mb-30">
                <div class="team-member clearfix">
                  <div class="team-thumb"><img alt="" src="http://placehold.it/400x400" class="img-fullwidth"></div>
                  <div class="overlay">
                    <div class="content text-center">
                      <h4 class="author mb-0"><a href="page-speakers-details.html">Alex Jacobson</a></h4>
                      <h6 class="title text-gray font-14 mt-5 mb-15">Finance manager</h6>
                    </div>
                  </div>
                  <ul class="social-icons flat icon-white square mt-10">
                    <li class=""><a href="#"><i class="fa fa-facebook pr-10 pl-10"></i></a></li>
                    <li class=""><a href="#"><i class="fa fa-twitter pr-10 pl-10"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus pr-10 pl-10"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 mb-30">
                <div class="team-member clearfix">
                  <div class="team-thumb"><img alt="" src="http://placehold.it/400x400" class="img-fullwidth"></div>
                  <div class="overlay">
                    <div class="content text-center">
                      <h4 class="author mb-0"><a href="page-speakers-details.html">Alex Jacobson</a></h4>
                      <h6 class="title text-gray font-14 mt-5 mb-15">Finance manager</h6>
                    </div>
                  </div>
                  <ul class="social-icons flat icon-white square mt-10">
                    <li class=""><a href="#"><i class="fa fa-facebook pr-10 pl-10"></i></a></li>
                    <li class=""><a href="#"><i class="fa fa-twitter pr-10 pl-10"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus pr-10 pl-10"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 mb-30">
                <div class="team-member clearfix">
                  <div class="team-thumb"><img alt="" src="http://placehold.it/400x400" class="img-fullwidth"></div>
                  <div class="overlay">
                    <div class="content text-center">
                      <h4 class="author mb-0"><a href="page-speakers-details.html">Alex Jacobson</a></h4>
                      <h6 class="title text-gray font-14 mt-5 mb-15">Finance manager</h6>
                    </div>
                  </div>
                  <ul class="social-icons flat icon-white square mt-10">
                    <li class=""><a href="#"><i class="fa fa-facebook pr-10 pl-10"></i></a></li>
                    <li class=""><a href="#"><i class="fa fa-twitter pr-10 pl-10"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus pr-10 pl-10"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 mb-30">
                <div class="team-member clearfix">
                  <div class="team-thumb"><img alt="" src="http://placehold.it/400x400" class="img-fullwidth"></div>
                  <div class="overlay">
                    <div class="content text-center">
                      <h4 class="author mb-0"><a href="page-speakers-details.html">Alex Jacobson</a></h4>
                      <h6 class="title text-gray font-14 mt-5 mb-15">Finance manager</h6>
                    </div>
                  </div>
                  <ul class="social-icons flat icon-white square mt-10">
                    <li class=""><a href="#"><i class="fa fa-facebook pr-10 pl-10"></i></a></li>
                    <li class=""><a href="#"><i class="fa fa-twitter pr-10 pl-10"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus pr-10 pl-10"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 mb-30">
                <div class="team-member clearfix">
                  <div class="team-thumb"><img alt="" src="http://placehold.it/400x400" class="img-fullwidth"></div>
                  <div class="overlay">
                    <div class="content text-center">
                      <h4 class="author mb-0"><a href="page-speakers-details.html">Alex Jacobson</a></h4>
                      <h6 class="title text-gray font-14 mt-5 mb-15">Finance manager</h6>
                    </div>
                  </div>
                  <ul class="social-icons flat icon-white square mt-10">
                    <li class=""><a href="#"><i class="fa fa-facebook pr-10 pl-10"></i></a></li>
                    <li class=""><a href="#"><i class="fa fa-twitter pr-10 pl-10"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus pr-10 pl-10"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 mb-30">
                <div class="team-member clearfix">
                  <div class="team-thumb"><img alt="" src="http://placehold.it/400x400" class="img-fullwidth"></div>
                  <div class="overlay">
                    <div class="content text-center">
                      <h4 class="author mb-0"><a href="page-speakers-details.html">Alex Jacobson</a></h4>
                      <h6 class="title text-gray font-14 mt-5 mb-15">Finance manager</h6>
                    </div>
                  </div>
                  <ul class="social-icons flat icon-white square mt-10">
                    <li class=""><a href="#"><i class="fa fa-facebook pr-10 pl-10"></i></a></li>
                    <li class=""><a href="#"><i class="fa fa-twitter pr-10 pl-10"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus pr-10 pl-10"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 mb-30">
                <div class="team-member clearfix">
                  <div class="team-thumb"><img alt="" src="http://placehold.it/400x400" class="img-fullwidth"></div>
                  <div class="overlay">
                    <div class="content text-center">
                      <h4 class="author mb-0"><a href="page-speakers-details.html">Alex Jacobson</a></h4>
                      <h6 class="title text-gray font-14 mt-5 mb-15">Finance manager</h6>
                    </div>
                  </div>
                  <ul class="social-icons flat icon-white square mt-10">
                    <li class=""><a href="#"><i class="fa fa-facebook pr-10 pl-10"></i></a></li>
                    <li class=""><a href="#"><i class="fa fa-twitter pr-10 pl-10"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus pr-10 pl-10"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 mb-30">
                <div class="team-member clearfix">
                  <div class="team-thumb"><img alt="" src="http://placehold.it/400x400" class="img-fullwidth"></div>
                  <div class="overlay">
                    <div class="content text-center">
                      <h4 class="author mb-0"><a href="page-speakers-details.html">Alex Jacobson</a></h4>
                      <h6 class="title text-gray font-14 mt-5 mb-15">Finance manager</h6>
                    </div>
                  </div>
                  <ul class="social-icons flat icon-white square mt-10">
                    <li class=""><a href="#"><i class="fa fa-facebook pr-10 pl-10"></i></a></li>
                    <li class=""><a href="#"><i class="fa fa-twitter pr-10 pl-10"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus pr-10 pl-10"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php /* Section: Call to action */ ?>
    <section class="divider parallax layer-overlay overlay-darkblue" data-bg-img="http://placehold.it/1920x1280">
      <div class="container pt-70">
        <div class="row">
          <div class="col-md-4 mb-sm-20">
            <div class="about-icon bg-light">
              <i class="pe-7s-micro icon font-32"></i>
              <h4 class="title"><a href="#">Knowledgable speakers</a></h4>
              <p class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, et iste sint.</p>
              <a class="text-theme-colored font-13" href="#">read more</a>
            </div>
          </div>
          <div class="col-md-4 mb-sm-20">
            <div class="about-icon bg-light">
              <i class="pe-7s-display1 icon font-32"></i>
              <h4 class="title"><a href="#">25 Awesome Sessions</a></h4>
              <p class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, et iste sint.</p>
              <a class="text-theme-colored font-13" href="#">read more</a>
            </div>
          </div>
          <div class="col-md-4 mb-sm-20">
            <div class="about-icon bg-light">
              <i class="pe-7s-photo-gallery icon font-32"></i>
              <h4 class="title"><a href="#">Picture perfect setting</a></h4>
              <p class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, et iste sint.</p>
              <a class="text-theme-colored font-13" href="#">read more</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php /* Section: tickets */ ?>
    <section id="tickets" class="divider parallax layer-overlay overlay-deep" data-stellar-background-ratio="0.5" data-bg-img="http://placehold.it/1920x1280">
      <div class="container pb-80">
        <div class="section-title mb-30">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="title text-theme-colored">Tickets</h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row equal-height-pricing-table">
            <div class="col-md-8 col-md-offset-2">
              <div class="col-xs-12 col-sm-6 col-md-6 p-0">
                <div class="pricing-table maxwidth400">
                  <div class="table-price text-white">$80</div>
                  <h6 class="table-title text-theme-colored">Per Month</h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore adipisci, reprehenderit laborum!</p>
                  <a class="btn btn-colored btn-theme-colored btn-sm pl-20 pr-20 mt-30" href="#">Buy Ticket</a> 
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 p-0">
                <div class="pricing-table maxwidth400" data-bg-color="rgba(18,27,38,0.98);">
                  <div class="table-price text-white">$120</div>
                  <h6 class="table-title text-theme-colored">Per Month</h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore adipisci, reprehenderit laborum!</p>
                  <a class="btn btn-colored btn-theme-colored btn-sm pl-20 pr-20 mt-30" href="#">Buy Ticket</a> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php /* Section: Event Facilities */ ?>
    <section id="event">
      <div class="divider parallax layer-overlay overlay-darkblue" data-stellar-background-ratio="0.5" data-bg-img="http://placehold.it/1920x1280">
        <div class="container pt-50 pb-50">
          <div class="section-title">
            <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="title text-white mb-0">Event Facilities</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-white-light">
        <div class="container pb-80 pt-80">
          <div class="section-content">
            <div class="row">
              <div class="col-md-4 mb-sm-20">
                <div class="event-facilities">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/500x700" alt="">
                    <div class="overlay">
                      <h4 class="title">Transport</h4>
                      <p>Lorem ipsum dolor sit amet, consec tetur adipis icing elit culpa volupt</p>
                      <a class="btn btn-colored btn-theme-colored btn-sm" href="#">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-sm-20">
                <div class="event-facilities">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/500x700" alt="">
                    <div class="overlay">
                      <h4 class="title">Hotel & Restaurant</h4>
                      <p>Lorem ipsum dolor sit amet, consec tetur adipis icing elit culpa volupt</p>
                      <a class="btn btn-colored btn-theme-colored btn-sm" href="#">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-sm-20">
                <div class="event-facilities">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://placehold.it/500x700" alt="">
                    <div class="overlay">
                      <h4 class="title">Facilities</h4>
                      <p>Lorem ipsum dolor sit amet, consec tetur adipis icing elit culpa volupt</p>
                      <a class="btn btn-colored btn-theme-colored btn-sm" href="#">Read More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php /* Divider: Funfact */ ?>
    <section class="divider parallax layer-overlay overlay-darkblue" data-bg-img="http://placehold.it/1920x1280">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact pt-15 pr-40 pb-15 pl-20">
              <i class="pe-7s-note2 text-black-light mt-5 font-48 pull-left flip" data-text-color="#ccc"></i>
              <h2 class="animate-number text-red mt-0 font-48 pull-right flip" data-value="754" data-animation-duration="2000">0</h2>
              <div class="clearfix"></div>
              <h4 class="text-uppercase text-right flip font-14" data-text-color="rgba(255,255,255,0.3)">Topics</h4>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact pt-15 pr-40 pb-15 pl-20">
              <i class="pe-7s-users text-black-light mt-5 font-48 pull-left flip" data-text-color="#ccc"></i>
              <h2 class="animate-number text-red mt-0 font-48 pull-right flip" data-value="125" data-animation-duration="2500">0</h2>
              <div class="clearfix"></div>
              <h4 class="text-uppercase text-right flip font-14" data-text-color="rgba(255,255,255,0.3)">Speaker</h4>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact pt-15 pr-40 pb-15 pl-20">
              <i class="pe-7s-magic-wand text-black-light mt-5 font-48 pull-left flip" data-text-color="#ccc"></i>
              <h2 class="animate-number text-red mt-0 font-48 pull-right flip" data-value="45" data-animation-duration="3000">0</h2>
              <div class="clearfix"></div>
              <h4 class="text-uppercase text-right flip font-14" data-text-color="rgba(255,255,255,0.3)">Sponsor</h4>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
            <div class="funfact pt-15 pr-40 pb-15 pl-20">
              <i class="pe-7s-global text-black-light mt-5 font-48 pull-left flip" data-text-color="#ccc"></i>
              <h2 class="animate-number text-red mt-0 font-48 pull-right flip" data-value="225" data-animation-duration="2500">0</h2>
              <div class="clearfix"></div>
              <h4 class="text-uppercase text-right flip font-14" data-text-color="rgba(255,255,255,0.3)">Countries</h4>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php /* Section: Sponsors */ ?>
    <section id="sponsors" class="divider parallax layer-overlay overlay-deep" data-stellar-background-ratio="0.5" data-bg-img="http://placehold.it/1920x1280">
      <div class="container pt-70">
        <div class="section-title">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="title text-theme-colored">Sponsors</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="row sponsors-style2 pt-30 pb-20">
              <div class="col-xs-6 col-md-3 text-center">
                <a href="#"><img src="http://placehold.it/150x120" alt=""></a>
              </div>
              <div class="col-xs-6 col-md-3 text-center">
                <a href="#"><img src="http://placehold.it/150x120" alt=""></a>
              </div>
              <div class="col-xs-6 col-md-3 text-center">
                <a href="#"><img src="http://placehold.it/150x120" alt=""></a>
              </div>
              <div class="col-xs-6 col-md-3 text-center">
                <a href="#"><img src="http://placehold.it/150x120" alt=""></a>
              </div>
              <div class="col-xs-6 col-md-3 text-center">
                <a href="#"><img src="http://placehold.it/150x120" alt=""></a>
              </div>
              <div class="col-xs-6 col-md-3 text-center">
                <a href="#"><img src="http://placehold.it/150x120" alt=""></a>
              </div>
              <div class="col-xs-6 col-md-3 text-center">
                <a href="#"><img src="http://placehold.it/150x120" alt=""></a>
              </div>
              <div class="col-xs-6 col-md-3 text-center">
                <a href="#"><img src="http://placehold.it/150x120" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php /* Section: News */ ?>
    <section id="news">
      <div class="divider parallax layer-overlay overlay-darkblue" data-stellar-background-ratio="0.5" data-bg-img="http://placehold.it/1920x1280">
        <div class="container pt-50 pb-50">
          <div class="section-title">
            <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="title text-white mb-0">Event News</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="divider">
        <div class="container pb-40">
          <div class="section-content">
            <div class="row multi-row-clearfix">
              <div class="blog-posts">
                <div class="col-xs-12 col-sm-12 col-md-6">
                  <article class="post clearfix maxwidth500">
                    <div class="col-md-12 col-lg-6 p-0">
                      <div class="entry-header">
                        <div class="post-thumb">
                          <img src="http://placehold.it/250x250" alt="" class="img-responsive img-fullwidth">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-6 p-0">
                      <div class="entry-content p-30 pl-40">
                        <h5 class="entry-title pt-0"><a href="#">Business conferences</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elits. Fugit vel, eius cum eum.</p>
                        <div class="entry-meta pull-left flip mt-10">
                          <ul class="list-inline">
                            <li><i class="fa fa-thumbs-o-up mr-5"></i> 13</li>
                            <li><i class="fa fa-comments-o mr-5"></i> 43</li>
                          </ul>
                        </div>
                        <a class="text-theme-colored font-11 mt-10 mb-0 pull-right flip" href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                        <div class="clearfix"></div>
                        <div class="entry-date">
                          25, DEC 2016
                        </div>
                        <div class="author-thumb">
                          <img class="img-circle" src="http://placehold.it/50x50" alt="">
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                  <article class="post clearfix maxwidth500">
                    <div class="col-md-12 col-lg-6 p-0">
                      <div class="entry-header">
                        <div class="post-thumb">
                          <img src="http://placehold.it/250x250" alt="" class="img-responsive img-fullwidth">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-6 p-0">
                      <div class="entry-content p-30 pl-40">
                        <h5 class="entry-title pt-0"><a href="#">Business conferences</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elits. Fugit vel, eius cum eum.</p>
                        <div class="entry-meta pull-left flip mt-10">
                          <ul class="list-inline">
                            <li><i class="fa fa-thumbs-o-up mr-5"></i> 13</li>
                            <li><i class="fa fa-comments-o mr-5"></i> 43</li>
                          </ul>
                        </div>
                        <a class="text-theme-colored font-11 mt-10 mb-0 pull-right flip" href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                        <div class="clearfix"></div>
                        <div class="entry-date">
                          25, DEC 2016
                        </div>
                        <div class="author-thumb">
                          <img class="img-circle" src="http://placehold.it/50x50" alt="">
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                  <article class="post clearfix maxwidth500">
                    <div class="col-md-12 col-lg-6 p-0">
                      <div class="entry-header">
                        <div class="post-thumb">
                          <img src="http://placehold.it/250x250" alt="" class="img-responsive img-fullwidth">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-6 p-0">
                      <div class="entry-content p-30 pl-40">
                        <h5 class="entry-title pt-0"><a href="#">Business conferences</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elits. Fugit vel, eius cum eum.</p>
                        <div class="entry-meta pull-left flip mt-10">
                          <ul class="list-inline">
                            <li><i class="fa fa-thumbs-o-up mr-5"></i> 13</li>
                            <li><i class="fa fa-comments-o mr-5"></i> 43</li>
                          </ul>
                        </div>
                        <a class="text-theme-colored font-11 mt-10 mb-0 pull-right flip" href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                        <div class="clearfix"></div>
                        <div class="entry-date">
                          25, DEC 2016
                        </div>
                        <div class="author-thumb">
                          <img class="img-circle" src="http://placehold.it/50x50" alt="">
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                  <article class="post clearfix maxwidth500">
                    <div class="col-md-12 col-lg-6 p-0">
                      <div class="entry-header">
                        <div class="post-thumb">
                          <img src="http://placehold.it/250x250" alt="" class="img-responsive img-fullwidth">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 col-lg-6 p-0">
                      <div class="entry-content p-30 pl-40">
                        <h5 class="entry-title pt-0"><a href="#">Business conferences</a></h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elits. Fugit vel, eius cum eum.</p>
                        <div class="entry-meta pull-left flip mt-10">
                          <ul class="list-inline">
                            <li><i class="fa fa-thumbs-o-up mr-5"></i> 13</li>
                            <li><i class="fa fa-comments-o mr-5"></i> 43</li>
                          </ul>
                        </div>
                        <a class="text-theme-colored font-11 mt-10 mb-0 pull-right flip" href="#">Read more <i class="fa fa-angle-double-right"></i></a>
                        <div class="clearfix"></div>
                        <div class="entry-date">
                          25, DEC 2016
                        </div>
                        <div class="author-thumb">
                          <img class="img-circle" src="http://placehold.it/50x50" alt="">
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php /* Divider: Testimonials */ ?>
    <section id="testimonials" class="divider parallax layer-overlay overlay-deep" data-stellar-background-ratio="0.5" data-bg-img="http://placehold.it/1920x1280">
      <div class="container pb-30">
        <div class="section-title mb-30">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="font-36 text-theme-colored mb-30">Our Clients Say</h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 mb-30">
              <div class="testimonial-carousel">
                <div class="item text-center">
                  <div class="content bg-white-light">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat.</p>
                    <div class="thumb"><img width="75" class="img-circle" alt="" src="http://placehold.it/75x75"></div>
                    <h5 class="author text-theme-colored mt-20 mb-0">Catherine Grace</h5>
                    <h6 class="title text-gray mt-0">Designer</h6>
                  </div>
                </div>
                <div class="item text-center">
                  <div class="content bg-white-light">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat.</p>
                    <div class="thumb"><img width="75" class="img-circle" alt="" src="http://placehold.it/75x75"></div>
                    <h5 class="author text-theme-colored mt-20 mb-0">Catherine Grace</h5>
                    <h6 class="title text-gray mt-0">Designer</h6>
                  </div>
                </div>
                <div class="item text-center">
                  <div class="content bg-white-light">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat.</p>
                    <div class="thumb"><img width="75" class="img-circle" alt="" src="http://placehold.it/75x75"></div>
                    <h5 class="author text-theme-colored mt-20 mb-0">Catherine Grace</h5>
                    <h6 class="title text-gray mt-0">Designer</h6>
                  </div>
                </div>
                <div class="item text-center">
                  <div class="content bg-white-light">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat.</p>
                    <div class="thumb"><img width="75" class="img-circle" alt="" src="http://placehold.it/75x75"></div>
                    <h5 class="author text-theme-colored mt-20 mb-0">Catherine Grace</h5>
                    <h6 class="title text-gray mt-0">Designer</h6>
                  </div>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </section>

     <?php /* Divider: Contact form */ ?>
    <section id="contact" class="bg-light">
      <div class="divider parallax layer-overlay overlay-darkblue" data-stellar-background-ratio="0.5" data-bg-img="http://placehold.it/1920x1280">
        <div class="container pt-50 pb-50">
          <div class="section-title">
            <div class="row">
              <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="title text-white mb-0">Contact</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h4 class="text-uppercase">Send Us a Messase</h4>
            <div class="line-bottom mb-30"></div>

            <?php /* Contact Form */ ?>
            <form id="contact_form" name="contact_form" class="form-transparent" action="includes/sendmail.php" method="post">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input id="form_name" name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <input id="form_subject" name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input id="form_phone" name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <textarea id="form_message" name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
                <button type="reset" class="btn btn-default btn-flat btn-theme-colored">Reset</button>
              </div>
            </form>
            <?php /* Contact Form Validation */ ?>
            <script type="text/javascript">
              $("#contact_form").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script>
          </div>
        </div>
      </div>
    </section>

    <?php /* Section: Map */ ?>
    <section>
      <div class="container-fluid p-0">
        <?php /* Google Map HTML Codes */ ?>
        <div 
          data-address="121 King Street, Melbourne Victoria 3000 Australia"
          data-popupstring-id="#popupstring1"
          class="map-canvas autoload-map bg-theme-colored"
          data-mapstyle="style1"
          data-height="420"
          data-latlng="-37.817314,144.955431"
          data-title="sample title"
          data-zoom="12"
          data-marker="images/map-icon-blue.png">
        </div>
        <div class="map-popupstring hidden" id="popupstring1">
          <div class="text-center">
            <h3>NextEvent Office</h3>
            <p>121 King Street, Melbourne Victoria 3000 Australia</p>
            <?php /* Google Map Javascript Codes */ ?>
            <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
            <script src="js/google-map-init.js"></script>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php /* end main-content */ ?>
  
  <?php /* Footer */ ?>
  <footer id="footer" class="footer" data-bg-color="#121212">
    <div class="container pt-60 pb-30">
      <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
          <img src="images/logo-wide-dark.png" alt="">
          <p class="font-12 mt-20 mb-20">NextEvent is a library of corporate and business templates with predefined web elements which helps you to build your own site. Lorem ipsum dolor sit amet elit.</p>
          <ul class="social-icons flat medium list-inline mb-40">
            <li><a href="#"><i class="fa fa-facebook"></i></a> </li>
            <li><a href="#"><i class="fa fa-twitter"></i></a> </li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a> </li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a> </li>
            <li><a href="#"><i class="fa fa-youtube"></i></a> </li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h6 class="widget-title line-bottom">Quick Links</h6>
            <ul class="list-border list theme-colored angle-double-right">
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Donor Privacy Policy</a></li>
              <li><a href="#">Disclaimer</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Copyright Notice</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h6 class="widget-title line-bottom">Latest News</h6>
            <div class="latest-posts">
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="http://placehold.it/77x50" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Sustainable Construction</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="http://placehold.it/77x50" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Industrial Coatings</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="http://placehold.it/77x50" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Storefront Installations</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h6 class="widget-title line-bottom">Tags</h6>
            <ul class="list-inline tags">
              <li><a href="#">Business</a></li>
              <li><a href="#">Venue</a></li>
              <li><a href="#">Event</a></li>
              <li><a href="#">Corporate</a></li>
              <li><a href="#">Meeting</a></li>
              <li><a href="#">conferences</a></li>
              <li><a href="#">Modern</a></li>
              <li><a href="#">Party</a></li>
              <li><a href="#">Music</a></li>
              <li><a href="#">Wedding</a></li>
              <li><a href="#">Ticket</a></li>
              <li><a href="#">convene</a></li>
              <li><a href="#">Schedule</a></li>
              <li><a href="#">Speakers</a></li>
              <li><a href="#">Management</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h6 class="widget-title line-bottom">Quick Contact</h6>
            <form id="quick_contact_form2" name="footer_quick_contact_form" class="quick-contact-form" action="includes/quickcontact.php" method="post">
              <div class="form-group">
                <input id="form_email" name="form_email" class="form-control" type="text" required="" placeholder="Enter Email">
              </div>
              <div class="form-group">
                <textarea id="form_message" name="form_message" class="form-control" required="" placeholder="Enter Message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-default btn-flat btn-xs btn-transparent text-gray pt-5 pb-5" data-loading-text="Please wait...">Send Message</button>
              </div>
            </form>

            <?php /* Quick Contact Form Validation */ ?>
            <script type="text/javascript">
              $("#quick_contact_form2").validate({
                submitHandler: function(form) {
                  var form_btn = $(form).find('button[type="submit"]');
                  var form_result_div = '#form-result';
                  $(form_result_div).remove();
                  form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                  var form_btn_old_msg = form_btn.html();
                  form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                  $(form).ajaxSubmit({
                    dataType:  'json',
                    success: function(data) {
                      if( data.status == 'true' ) {
                        $(form).find('.form-control').val('');
                      }
                      form_btn.prop('disabled', false).html(form_btn_old_msg);
                      $(form_result_div).html(data.message).fadeIn('slow');
                      setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                    }
                  });
                }
              });
            </script>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid p-20" data-bg-color="#181818">
      <div class="row text-center">
        <div class="col-md-12">
          <p class="font-11 m-0" data-text-color="#555">Copyright &copy;2015 <a class="font-11" href="#">ThemeMascot</a>. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>

<?php include_once "footer.php"; ?>