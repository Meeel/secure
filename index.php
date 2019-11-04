<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Secure Americas</title>
    <?php include("common-files/library-header.php"); ?>
</head>
<body>
    <!--Loader-->
    <?php include("common-files/loader.php"); ?>
    <!--End Loader-->
    <!--CONTENT-->
    <div class="wrapper">
        <!--Header-->
        <?php include("common-files/header.php"); ?>
        <!--End Header-->
        <section class="first-container">
            <video controls autoplay muted poster="assets/img/home/portada-video.jpg">
                <source src="assets/video/secure.webm" type="video/webm">
                <source src="assets/video/secure.mp4" type="video/mp4">
                      I'm sorry; your browser doesn't support HTML5 video.
                      <!-- You can embed a Flash player here, to play your mp4 video in older browsers -->
                  </video>
              </section>
        <section class="second-container">
            <div class="container-headings">
                <h1><hr class="line-title">Products<hr class="line-title"></h1>
                <h2>Able to resist: Forced entry and bullet proof</h2>
            </div>
            <div class="img-products-container">
                <div class="prod1"></div>
                <div class="prod1"></div>
                <div class="prod1"></div>
                <div class="prod2"></div>
                <div class="prod2 prod5"></div>
            </div>
            <div class="container-link-productos">
                <a href="product-solid-polycarbonate" class="link-producto">
                    <div class="container-producto container-prod-1"></div>
                    <p class="txt-producto">Solid Polycarbonate</p>
                </a>
                <a href="product-secure-ballistic-glass" class="link-producto">
                    <div class="container-producto container-prod-2"></div>
                    <p class="txt-producto">Secure Ballistic Glass</p>
                </a>
                <a href="product-secure-windows" class="link-producto">
                    <div class="container-producto container-prod-3"></div>
                    <p class="txt-producto">Secure Windows</p>
                </a>
                <a href="product-secure-doors" class="link-producto">
                    <div class="container-producto container-prod-4"></div>
                    <p class="txt-producto">Secure Doors</p>
                </a>
                <a href="product-secure-vestibules" class="link-producto">
                    <div class="container-producto container-prod-5"></div>
                    <p class="txt-producto">Secure Vestibules</p>
                </a>
            </div>
            <div class="container-img-heroproducto img-heroproduct-1"></div>
        </section>
        <section class="third-container">
            <div class="container-headings">   
                <h1 class="h-white"><hr class="line-title line-white">Ballistic Levels<hr class="line-title line-white"></h1>
                <!--h2 class="h-white">Capable to resist: Forced entry and bullet proof</h2-->
            </div>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <h3>SBR - III Ultra Light</h3>
                    <img src="assets/img/home/tabla-balistica-1.jpg" alt="Balística"></div>
                <div class="item">
                    <h3>SBR - IV</h3>
                    <img src="assets/img/home/tabla-balistica-2.jpg" alt="Balística"></div>
                <div class="item">
                    <h3>SBR - V</h3>
                    <img src="assets/img/home/tabla-balistica-3.jpg" alt="Balística"></div>
                <div class="item">
                    <h3>SBR VI</h3>
                    <img src="assets/img/home/tabla-balistica-4.jpg" alt="Balística"></div>
            </div>
            <div class="container-img-heroproducto-b img-heroproduct-2"></div>
        </section>
        <!--Contact-->
        <?php include("common-files/contact.php"); ?>
        <!--End Contact-->
        <!--Footer-->
        <?php include("common-files/footer.php"); ?>
        <!--End Footer-->
    </div>
    <?php include("common-files/library-footer.php"); ?>
    <?php include("assets/php/mail.php"); ?>
</body>
</html>