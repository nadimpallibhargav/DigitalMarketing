<!-- Including configuration file  -->
<?php require_once '../../config/config.php'; ?>

<!-- Including layout : Header file  -->
<?php require_once '../../layout_files/layout/header_other_pages.php' ?>

<section class="container contact container-fluid">
    <h1>Contact Us</h1>
    <div class="row">
    <div class="contact_form col-md-6">
        <h2>Enquire Now</h2>
        <hr>
        <form action="" method="POST">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user-alt" aria-hidden="true"></i></div>
                    </div>
                    <input type="text" class="form-control" name="name" placeholder="Enter your name">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-envelope" aria-hidden="true"></i></div>
                    </div>
                    <input type="text" class="form-control" name="email" placeholder="Enter your email">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-phone" aria-hidden="true"></i></div>
                    </div>
                    <input type="text" class="form-control" name="contact" placeholder="Enter your contact number">
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-alt" aria-hidden="true"></i></div>
                    </div>
                    <input type="text" class="form-control" name="message" placeholder="Write your message here (Optional)">
                </div>
                <button class="btn btn-block btn-danger" name="submit" type="submit">Submit</button>
        </form>
    </div>
    <div class="contact_text col-md-6">
    <div class="contact_text_quick">
    <h2>Quick Links</h2>
    <hr>
    <ul>
   
    <!-- <li><i class="fas fa-palette"></i><a href="">Logo Design & Graphics</a></li>    -->
    <!-- <li><i class="fas fa-mobile-alt"></i><a href=""> Mobile App Development</a></li>   
    <li><i class="far fa-chart-bar"></i><a href="">Digital Marketing</a></li>    -->
    <li><i class="fab fa-google"></i><a href="">Google Ads</a></li> 
    <li><i class="fas fa-laptop"></i><a href="">Web Development</a></li>  
    <li><i class="fas fa-search-dollar"></i><a href="">SEO - Search Engine Optimization</a></li>  
    <li><i class="fas fa-search-dollar"></i><a href="">SMO - Search Object Optimization</a></li>  
    <!-- <li><i class="fas fa-search-dollar"></i><a href="">SE</a></li>    -->
    <!-- <li><i class="fas fa-cart-plus"></i><a href="">E-Commerce Website Development</a></li>         -->
    </ul>
    </div>
    <div class="contact_text_contact">
    <h2>Contact Us</h2>
    <hr>
    <ul>
    <li><i class="fas fa-map-marker"></i> Andree Road, Bheemanna Garden, Shanthi Nagar,Bangalore - 560 027, Karnataka, India</li>
    <li><i class="fas fa-map-marker"></i> SVR, 2nd Cross, Panathur Main Rd, Munireddy Layout, Kadubeesanahalli, Bangalore - 560 103, Karnataka, India</li>
    <li><i class="fas fa-phone"></i> +91 8056 907 907   +91 9886 727 874</li>
    <li><i class="fas fa-blender-phone"></i> +91 8040 976 272</li>
    <li><i class="fas fa-envelope"></i> support@osawebsolutions.com</li>
    </ul>
    </div>
    </div>

    </div>
</section>
<!-- Inclding layout : Footer file  -->
<?php require_once '../../layout_files/layout/footer.php'; ?>

<!-- Including layout : Footer file -->
<?php require_once '../../layout_files/pages/home_sections/sec_6_footer.php'; ?>