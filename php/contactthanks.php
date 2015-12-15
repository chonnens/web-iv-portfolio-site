<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Honnens Design</title>
  <link href="../css/normalize.css" rel="stylesheet">
  <link href="../css/foundation.css" rel="stylesheet">
  <link href="../css/custom.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type=
  'text/css'>
  <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,200' rel='stylesheet' type=
  'text/css'>
  <link href="../imgs/Favicon-H.png" rel="icon" type="image/png">
</head><!--Table of Contents

    1. Navigation
    2. Footer
    3. Scripts

-->
<body>
  <!--1. Navigation-->
  <nav id="menu">
    <a class="menu-link" href="#menu"></a>
    <ul>
      <li>
        <a class="sliding-u-l-r" href="../index.html#works">Works</a>
      </li>
      <li>
        <a class="sliding-u-l-r" href="../index.html#about">About</a>
      </li>
      <li>
        <a class="sliding-u-l-r" href="../index.html#contact">Contact</a>
      </li>
    </ul>
    <p>Hello!</p>
    <p>My name is Chelsea and I am a print and web designer. Please have a look around and make
    yourself at home!</p>
  </nav>
  <div class="container">
    <!--holds content that scoots over with navigation-->
    <div class="row above-logo">
      <div class="small-6 medium-4 columns small-centered">
        <a href="../index.html"><img alt="Honnens Design Logo" src="../imgs/logo.svg"></a>
      </div>
    </div>
    <div class="row small-centered above-logo">
      <h1 class="text-center l-m-t">Thanks!</h1>
      <p class="text-center">Your message has been received.</p>
    </div>
  </div><!-- end container div -->
 
 
  <!--2. Footer-->
  <footer id="sticky">
    <div class="row">
      <div class="columns medium-6 small-only-text-center">
        <a class="sliding-u-l-r" href="mailto:hello@honnensdesign.com">hello@honnensdesign.com</a>
      </div>
      <div class="columns medium-6">
        <ul class="small-only-text-center medium-text-right">
          <li>
            <a class="sliding-u-l-r" href="../index.html#works">works</a>
          </li>
          <li>
            <a class="sliding-u-l-r" href="../index.html#about">about</a>
          </li>
          <li>
            <a class="sliding-u-l-r" href="../index.html#contact">contact</a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
  
  
  <!--3. Scripts-->
  <script src="../js/vendor/modernizr.js">
  </script> 
  <script src="../js/vendor/jquery.js">
  </script> 
  <script src="../js/foundation/foundation.js">
  </script> 
  <script src="../js/foundation/foundation.interchange.js">
  </script> 
  <script>
    
    <!--Foundation-->
    $(document).foundation();
    $(".menu-link").click(function(){
      $("#menu").toggleClass("active");
      $(".container").toggleClass("active");
    });
  </script> 
  <script>
   
    <!--Smooth Scroll-->
    $(function() {
    $('a[href*=#]:not([href=#menu])').click(function() {

    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top+0
        }, 1000);

        return false;
      }
    }
    });
    });
  </script>
</body>
</html>