<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootrstrap v5.2.3 -->
    <!-- CSS only -->
    <link href="assets/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="assets/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/carousel.js"></script>
    
    <link href="assets/fontawesome-free-6.4.2-web/css/fontawesome.css" rel="stylesheet">
    <link href="assets/fontawesome-free-6.4.2-web/css/brands.css" rel="stylesheet">
    <link href="assets/fontawesome-free-6.4.2-web/css/solid.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    
  <meta name="keywords" content="Darwin solar, solar Darwin, Darwin solar installers, darwin solar panels, darwin solar reviews, Home solar, nt solar rebates, solar batteries darwin, solar in darwin, solar installation darwin"/>
  <meta name="description" content="Experts in Darwin Solar Energy for your home and business. Darwin solar installations helping you save money. No Upfront cost solar Darwin NT."/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="Eco Tech Electrical | Darwin Solar Installations | Solar Power"/>
    <meta property="og:description" content="Experts in Darwin Solar Energy for your home and business. Darwin solar installations helping you save money. No Upfront cost solar Darwin NT."/>
    <meta property="og:site_name" content="Eco Tech Electrical | Darwin Solar Installations | Solar Power"/>
    <meta name="twitter:description" content="Experts in Darwin Solar Energy for your home and business. Darwin solar installations helping you save money. No Upfront cost solar Darwin NT."/>
    <meta name="twitter:title" content="Eco Tech Electrical | Darwin Solar Installations | Solar Power"/>
    <meta property="og:image" content="images/port.jpg"/>
    <title>Eco Tech Electrical | Darwin Solar Installations | Solar Power</title>
</head>

<body>

    <!-- navbar -->
     <?php include 'pages/header.php' ?>
    <!-- navbar -->

    <main class="main mt-custom">
        <?php
        $directory = 'pages';
        $whitelist = array_map(function ($file) use ($directory) {

            return "$directory/$file";
        }, array_diff(scandir($directory), array('..', '.')));
        if (!isset($_GET['page'])) {
            $page = "homepage";
        } else {
            $route = explode("?", $_GET['page']);
            $page = $route[0];
        }
        $file = "$directory/$page" . ".php";

        if (in_array($file, $whitelist) && file_exists($file)) {
            include($file);
        } else {
            echo "The Page you are looking for, does not exist!";
        }
        ?> 
        <?php include 'pages/footer.php' ?>
    </main>

   

   
</body>

</html>