<?php get_header('1');
/*Template Name: Services Page*/
?>
 <main role="main">
        <div class="big-title " style=" background-image: url('<?php echo the_post_thumbnail_url();?>') ">
            <div class="container">
                <h1 class="entry-title"><?php the_title();?></h1>
            </div>
        </div>
        <div class="container py-5">
            <h3 class="font-weight-bold mb-5 text-center">WHAT WE OFFER</h3>
            <div class="row">
                <!-- DEMO 2 Item-->
                <div class="col-lg-4 col-md-4 col-xs-12 mb-3 mb-lg-0">
                    <div class="hover hover-2 text-white rounded">
                        <?php 
                        $id_image = get_field('offer_image_1');
                        $image = wp_get_attachment_image_src($id_image, 'home');
                        ?>
                        <img src="<?php echo $image[0]; ?>"  alt="">
                        
                        <div class="hover-overlay"></div>
                        <div class="hover-2-content px-5 py-4">
                            <p class="hover-2-description text-uppercase mb-0"><?php the_field('offer_title_1');?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 mb-3 mb-lg-0">
                    <div class="hover hover-2 text-white rounded">
                        <?php 
                        $id_image = get_field('offer_image_2');
                        $image = wp_get_attachment_image_src($id_image, 'home');
                        ?>
                        <img src="<?php echo $image[0]; ?>"  alt="">
                        <div class="hover-overlay"></div>
                        <div class="hover-2-content px-5 py-4">
                            <p class="hover-2-description text-uppercase mb-0"><?php the_field('offer_title_2');?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 mb-3 mb-lg-0">
                    <div class="hover hover-2 text-white rounded">
                        <?php 
                        $id_image = get_field('offer_image_3');
                        $image = wp_get_attachment_image_src($id_image, 'home');
                        ?>
                        <img src="<?php echo $image[0]; ?>"  alt="">
                        <div class="hover-overlay"></div>
                        <div class="hover-2-content px-5 py-4">
                            <p class="hover-2-description text-uppercase mb-0"><?php the_field('offer_title_3');?></p>
                        </div>
                    </div>
                </div>
                <!-- /END THE FEATURETTES -->
            </div>
        </div>
        <div class="padding-top-lg-80 padding-top-xs-60 mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <ul class="heli-listing-3">
                            <?php the_field('offer_list_1');?>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="heli-listing-3">
                           <?php the_field('offer_list_2');?>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="heli-listing-3">
                            <?php the_field('offer_list_3');?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer();?>