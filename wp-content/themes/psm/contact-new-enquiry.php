<?php get_header('1');
/*Template Name: contact / New Enquiry page*/
?>
<main role="main">
        <div class="big-title " style=" background-image: url('<?php echo the_post_thumbnail_url();?>')">
            <div class="container">
                <h1 class="entry-title"><?php the_title();?></h1>
            </div>
        </div>
        <div class="mt-2">
            <div class="container">
                <div class="row contact-info-wrap no-gutters justify-content-center">
              <div class="col-md-4 col-sm-6">
                <div class="contact-box">
                  <div class="contact-box-icon">
                    <img src="img/contact_icon01.png" alt="">
                  </div>
                  <div class="contact-box-content">
                    <h5>Phone Number</h5>
                    <span><a href="tel:1300 962 622"> <?php the_field('phone_number');?></a></span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="contact-box">
                  <div class="contact-box-icon">
                    <img src="img/contact_icon02.png" alt="">
                  </div>
                  <div class="contact-box-content">
                    <h5>Find Location</h5>
                    <span><a href="https://www.google.com/maps/place/8%2F3+Victoria+Rd,+Parramatta+NSW+2150,+Australia/@-33.8090663,151.0039689,17z/data=!3m1!4b1!4m5!3m4!1s0x6b12a31c810df083:0x4b42c65fccdf6a35!8m2!3d-33.8090663!4d151.0061576" target="_blank"><?php the_field('find_location');?></a></span>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="contact-box">
                  <div class="contact-box-icon">
                    <img src="img/contact_icon03.png" alt="">
                  </div>
                  <div class="contact-box-content">
                    <h5>Our Mail</h5>
                    <span><a href="mailto:<?php the_field('our_mail');?>"><?php the_field('our_mail');?></a></span>
                  </div>
                </div>
              </div>
            </div>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13260.50323384326!2d151.0061576!3d-33.8090663!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x64a91366faa987d7!2sPerfect%20Strata%20Maintenance!5e0!3m2!1sen!2sau!4v1606887224800!5m2!1sen!2sau" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            <div class="container">
                <h2 class="text-center mt-4">GET IN TOUCH</h2>
                <p class="text-center mb-4">Contact us with any enquiries to see how we can assist you.</p>
                <?php echo do_shortcode('[wpforms id="362" title="false" description="false"]');?>
            </div>
        </div>
<?php get_footer();?>