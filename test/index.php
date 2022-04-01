<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>VICTORY ROOFER</title>

    <?php
    $srcurl = "includes/";
    $basesurl = "assets/";


    $style = $_SERVER['HTTP_HOST'];
    $style = $srcurl . "style.php";
    include($style);
    $urhere = "homepage";

    ?>

</head>

<body>

    <!-- ==================== Start Navbar ==================== -->
    <?php
    $header = $_SERVER['HTTP_HOST'];
    $header = $srcurl . "header.php";
    include($header);
    ?>
    <!-- ==================== End Navbar ==================== -->

    <!-- ==================== Start Banner ==================== -->
    <?php
    $bannner = $_SERVER['HTTP_HOST'];
    $banner = $srcurl . "banner.php";
    include($banner);
    ?>
    <!-- ==================== End Banner ==================== -->

    <!-- ==================== Start Services ==================== -->
    <?php
    $services = $_SERVER['HTTP_HOST'];
    $services = $srcurl . "services.php";
    include($services);
    ?>
    <!-- ==================== End Services ==================== -->

    <!-- ==================== Start about ==================== -->
    <?php
    $about = $_SERVER['HTTP_HOST'];
    $about = $srcurl . "about.php";
    include($about);
    ?>
    <!-- ==================== End about ==================== -->

    <!-- ==================== Start contact-us ==================== -->
    <?php
    $contact = $_SERVER['HTTP_HOST'];
    $contact = $srcurl . "contact-us.php";
    include($contact);
    ?>
    <!-- ==================== End contact-us ==================== -->

    <!-- ==================== Start portfolio ==================== -->
    <?php
    $portfolio = $_SERVER['HTTP_HOST'];
    $portfolio = $srcurl . "portfolio.php";
    include($portfolio);
    ?>
    <!-- ==================== End portfolio ==================== -->

    <!-- ==================== Start testimonial ==================== -->
    <?php
    $testimonial = $_SERVER['HTTP_HOST'];
    $testimonial = $srcurl . "testimonial.php";
    include($testimonial);
    ?>
    <!-- ==================== End testimonial ==================== -->

    <!-- ==================== Start testimonial-2 ==================== -->
    <?php
    $testimonial2 = $_SERVER['HTTP_HOST'];
    $testimonial2 = $srcurl . "testimonial-2.php";
    include($testimonial2);
    ?>
    <!-- ==================== End testimonial-2 ==================== -->

    <!-- ==================== Start location ==================== -->
    <?php
    $location = $_SERVER['HTTP_HOST'];
    $location = $srcurl . "location.php";
    include($location);
    ?>
    <!-- ==================== End location ==================== -->

    <!-- ==================== Start join-us ==================== -->
    <?php
    $joinus = $_SERVER['HTTP_HOST'];
    $joinus = $srcurl . "join-us.php";
    include($joinus);
    ?>
    <!-- ==================== End join-us ==================== -->

    <!-- ==================== Start Footer ==================== -->
    <?php
    $footer = $_SERVER['HTTP_HOST'];
    $footer = $srcurl . "footer.php";
    include($footer);
    ?>
    <!-- ==================== End Footer ==================== -->

</body>

</html>