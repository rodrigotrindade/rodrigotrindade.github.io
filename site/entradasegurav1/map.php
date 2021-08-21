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