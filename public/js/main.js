var page = "";
$(document).ready(function () {
    path = window.location.pathname;
    page = path.split("/").pop();
    if (page === "") {
      page = "/";
      //console.log("index.html");
    } else {
      //console.log(page);
    }
  
    $('a[href^="' + page + '"').addClass("active");

    // Show Navigation Menu Movil
  $('.menu-movil > i').addClass('bars-menu');
  var state_menu = 1;
  $('.menu-movil').on('click', function(){
      if(state_menu == 1){
          $('.menu-movil > i').removeClass('bars-menu');
          $('.menu-movil > i').addClass('close-menu');
          state_menu = 0;
      }else{
          $('.menu-movil > i').addClass('bars-menu');
          $('.menu-movil > i').removeClass('close-menu');
          state_menu = 1;
      }
      $('.navegador-movil').slideToggle();
  });
  
  // Menu fijo
  var windowH = $(window).height();
  var windowW = $(window).width();

  $(window).resize(function() {
      delay(function(){
          onResize();
      },100)
  });

  $(window).scroll(function(){
      var scroll = $(window).scrollTop();
      scrollMenuTop(scroll);
  });

  /* Functions */ 
  var delay = (function() {
      var timer = 0;
      return function(callback, ms){
          clearTimeout(timer);
          timer = setTimeout(callback, ms);
      }
  })();

  var onResize = function() {
      windowH = $(window).height();
      windowW = $(window).width();
  }
  function scrollMenuTop(var_scroll){
      if(windowW > 992){
          var barraH = $('.site-header').innerHeight();
          if (var_scroll > barraH) {
              //console.log("ya rebasaste la altura de la window");
              $('.content-header').addClass('fixed');
              $('body').css({'margin-top': (100)+'px!important'});
          } else {
              //console.log("aun no");
              $('.content-header').removeClass('fixed');
              $('body').css({'margin-top': '0px'});
          }
      }
      if(windowW < 990){
          var barraH = $('.logo-movil').innerHeight();
          if (var_scroll > 40) {
              //console.log("ya rebasaste la altura de la window" + barraH);
              $('.content-header-movil').addClass('fixed-movil');
              $('body').css({'margin-top': (50)+'px!important'});
          } else {
              //console.log("aun no");
              $('.content-header-movil').removeClass('fixed-movil');
              $('body').css({'margin-top': '0px'});
          }
      }
  }

});
// function copied from http://detectmobilebrowsers.com/
function isMobileOrTablet() {
  var check = false;
  // eslint-disable-next-line
  (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
  return check;
}

window.isMobileOrTablet = window.isMobileOrTablet || isMobileOrTablet;
// if(page === "/" ){
// // Initialize and add the map
// function initMap() {
//     // The location of Uluru
//     const uluru = { lat: 25.5861868, lng: -103.4932601 };
//     // The map, centered at Uluru
//     const map = new google.maps.Map(document.getElementById("map"), {
//     zoom: 20,
//     center: uluru,
//     });
//     // The marker, positioned at Uluru
//     const marker = new google.maps.Marker({
//     position: uluru,
//     map: map,
//     });
// }
// }