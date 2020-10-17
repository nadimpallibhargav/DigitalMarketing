<!-- Main navbar -->
<nav class="navbar navbar-expand-md  fixed-top">
    <div class="container">
        <a class="navbar-brand" href="<?php echo URL_ROOT; ?>">
            <!-- <h1>Digital</h1> -->
            <!-- <p>Best auditing services in bangalore</p> -->
            <img src="<?php echo "$url_root/inc/img/logo/logo.svg"; ?>" alt="Digital Marketing">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo URL_ROOT; ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">

                    <a class="nav-link" target="_blank" href="<?php echo URL_ROOT; ?>inc/layout_files/pages/about.php">About Us<span class="sr-only">(current)</span></a>

                </li>
                <li class="nav-item dropdown" style="background:transparent;">
                    <a class="nav-link dropdown-toggle " href="#" id="navbardrop" data-toggle="dropdown">
                        Services
                    </a>
                    <div class="dropdown-menu services_dropdown">
                            <a class="dropdown-item" target="_blank" href="<?php echo URL_ROOT; ?>inc/layout_files/pages/service_sections/google_ads.php">Google Ads</a>
                            <a class="dropdown-item" target="_blank" href="<?php echo URL_ROOT; ?>inc/layout_files/pages/service_sections/web_development.php">Web Developement</a>
                            <a class="dropdown-item" target="_blank" href="<?php echo URL_ROOT; ?>inc/layout_files/pages/service_sections/smo.php">SMO (Social Media Optimization)</a>
                            <a class="dropdown-item" target="_blank" href="<?php echo URL_ROOT; ?>inc/layout_files/pages/service_sections/seo.php">SEO (Search Engine Optimization)</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" target="_blank" href="<?php echo URL_ROOT; ?>inc/layout_files/pages/why_choose_us.php">Why Choose Us ?<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" target="_blank" href="<?php echo URL_ROOT; ?>inc/layout_files/pages/faq.php">Faq's<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">

                    <a class="nav-link" href="<?php echo URL_ROOT; ?>inc/layout_files/pages/contact_us.php">Contact Us<span class="sr-only">(current)</span></a>

                

                </li>
            </ul>
        </div>
    </div><!-- conatiner closing -->
</nav>