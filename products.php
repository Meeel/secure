<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Products</title>
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
        <section class="second-container">
            <h1><hr class="line-title">Products<hr class="line-title"></h1>
            <h2>Able to resist: Forced entry and bullet proof</h2>
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
            <div class="container-img-heroproducto"></div>
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