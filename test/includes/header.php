<?php


if ($_SERVER['HTTP_HOST'] == "localhost") {
    $folder_name = "";
    $path = 'http://localhost/test/' . $folder_name;
} else {
    $folder_name = "";
    $path = 'https://' . $_SERVER['HTTP_HOST'] . '' . $folder_name . '/';
}

?>
 <nav class="navbar">
        <div class="logo">
            <a class="navbar-brand" href="/">
                <div class="logo-image">
                    <img src="<?php echo $basesurl;?>images/Logo-01.jpg" alt="" class="img-fluid">
                </div>
            </a>
        </div>

        <div class="nav-main d-flex">
            <ul>
                <li>
                    <a href="#">home</a>
                </li>
                <li>
                    <a href="#">about us</a>
                </li>
                <li>
                    <a href="#">services</a>
                </li>
                <li>
                    <a href="#">blog</a>
                </li>
                <li>
                    <a href="#">project</a>
                </li>
                <li>
                    <a href="#">contact us</a>
                </li>
            </ul>
        </div>
        <div class="nav-short d-flex">
            <ul>
                <li><span class="icon-facebook"></span></span></li>
                <li><span class="icon-twitter"></span></li>
                <li><span class="icon-linkedin2"></span></li>
                <li><span class="icon-pinterest1"></span></li>
            </ul>
            <div class="vl"></div>
            <div class="call">
                <p>call us for any question</p>
                <h6><a href="#">844-479-7663/ROOF</a></h6>
            </div>
        </div>
    </nav>
