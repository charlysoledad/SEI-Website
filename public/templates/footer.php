<!-- Footer -->
<footer>
    <div class="social">
      <h3>redes sociales</h3>
      <a href="https://www.facebook.com/suministroselectricoseiluminacion/" target="_blank"><i class="fab fa-facebook-square"></i></a>
    </div>
    <div class="copyr">
      <p>&copy; 2021 SEI. Todos los derechos reservados</p>
    </div>
  </footer>
  <!-- End Footer -->

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
  <?php if($isIndex){ ?>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      new Splide('#splide', {
        type: 'loop',
        perPage: 1,
        autoplay: true,
        pauseOnHover: true,
      }).mount();
    });
  </script>
  <?php } ?>
  <!-- Async script executes immediately and must be after any DOM elements used in callback.
   <script
   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvy0rbpy0_NL4VDSJT7Iwp2Inc5gcSdsc&callback=initMap&libraries=&v=weekly"
   async></script> -->
  <script src='https://api.tomtom.com/maps-sdk-for-web/cdn/6.x/6.6.0/maps/maps-web.min.js'></script>
  <script src="js/formatter.js"></script>
  <script>
    var roundLatLng = Formatters.roundLatLng;
    var center = [-103.493317, 25.586354];
    var popup = new tt.Popup({
      offset: 35
    });
    var map = tt.map({
      key: '0DMV1cLN6u4AbHiGlfiaEa8GiJgrNMf3',
      container: 'map',
      dragPan: !isMobileOrTablet(),
      center: center,
      zoom: 17
    });
    map.addControl(new tt.FullscreenControl());
    map.addControl(new tt.NavigationControl());

    var marker = new tt.Marker({
      draggable: true
    }).setLngLat(center).addTo(map);

    function onDragEnd() {
      var lngLat = marker.getLngLat();
      lngLat = new tt.LngLat(roundLatLng(lngLat.lng), roundLatLng(lngLat.lat));

      popup.setHTML(lngLat.toString());
      popup.setLngLat(lngLat);
      marker.setPopup(popup);
      marker.togglePopup();
    }

    marker.on('dragend', onDragEnd);
  </script>




  <!-- //   /* Google Analytics: change UA-XXXXX-Y to be your site's ID. */
//     window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
//     ga('create', 'G-SYZT429Y0G', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview') -->
  <!-- //   <script src="https://www.google-analytics.com/analytics.js" async></script> -->
</body>

</html>