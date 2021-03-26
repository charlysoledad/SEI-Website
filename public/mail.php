<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>SEI - Correo</title>
  <meta name="description" content="En SEI nos dedicamos a ofrecerle los mejores productos y servicios de calidad, como lo son todos nuestros productos directamente de proveedor.">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png"  sizes="32x32" href="icon.png">

    <link rel="manifest" href="site.webmanifest">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="TecnoSystemsRAS">
    <meta name="apple-mobile-web-app-title" content="TecnoSystemsRAS">
    <meta name="theme-color" content="#000000">
    <meta name="msapplication-navbutton-color" content="#000000">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-starturl" content="/">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" type="image/png" sizes="32x32" href="icon.png">
    <link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120-precomposed.png" /> 
    <link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152-precomposed.png" />
  <!-- Place favicon.ico in the root directory -->
  <script src="https://kit.fontawesome.com/257e99a5c0.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">

  <meta name="theme-color" content="#fafafa">

  <script async src="https://www.googletagmanager.com/gtag/js?id=G-SYZT429Y0G"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-SYZT429Y0G');
  </script>

</head>

<body>
  <header class="site-header">
    <div class="content-header clearfix">
        <div class="logo"><a href="/"><img src="img/logo.png" alt="SEI"></a></div>
        <nav class="navegador-principal clearfix" id="navegador-principal">
            <ul>
              <li><a href="/">Inicio</a></li>
              <li><a href="#">Cat&aacute;logos</a></li>
              <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </div>
</header>
<header class="site-header-movil">
    <div class="content-header-movil clearfix">
        <div class="menu-movil">
            <i class="fas fa"></i>
        </div>
        <div class="logo-movil upper">
            <a href="/"><img src="img/logo-letters.png" alt="SEI"></a>
            <!-- <a href="/">SEI</a> -->
        </div>
        <nav class="navegador-movil clearfix" id="navegador-movil">
            <ul>
              <li><a href="/">Inicio</a></li>
              <li><a href="#">Cat&aacute;logos</a></li>
              <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </div>
</header>

<?php
if(isset($_REQUEST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "ventas@seigpd.com.mx";
    $second_email = "ventas1@seigpd.com.mx";
 
    function died($error) {
        // your error code can go here
        echo "Lo sentimos mucho, pero se han encontrado errores en el formulario que ha enviado. ";
        echo "Estos errores aparecen a continuación.<br /><br />";
        echo $error."<br /><br />";
        echo "Por favor, vuelva y corrija estos errores.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['asunto']) ||
        !isset($_POST['nombre']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telefono']) ||
        !isset($_POST['message'])) {
        died('Lo sentimos, pero parece que hay un problema con el formulario que ha enviado.');       
    }
 
    $email_subject = $_POST['asunto']; // required
    $first_name = $_POST['nombre']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telefono']; // not required
    $comments = $_POST['message']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'La dirección de correo electrónico que ha introducido no parece ser válida.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'El nombre que ha introducido no parece ser válido.<br />';
  }
 
  if(!preg_match($string_exp,$email_subject)) {
    $error_message .= 'El asunto que ha introducido no parece ser válido.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'El mensaje que ha introducido no parece ser válido.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Detalles.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }  
 
    $email_message .= "Name: ".clean_string($first_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Mensaje: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n".'Cc:'.$second_email."\r\n";
@mail($email_to, $email_subject, $email_message, $headers);  

?>
 
<!-- include your own success html here -->
 
<div class="contact-us clearfix">
  <h2>Gracias por contactarnos, en breve nos comunicaremos con usted.</h2>
  <a href="/"><i class="fas fa-arrow-left"></i> Volver</a>
</div>
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

  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
   <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
   <script
   src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvy0rbpy0_NL4VDSJT7Iwp2Inc5gcSdsc&callback=initMap&libraries=&v=weekly"
   async
 ></script>

  <script>

  /* Google Analytics: change UA-XXXXX-Y to be your site's ID. */
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html> 

<?php
}
?>