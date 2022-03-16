<?php get_header();?>
    <main role="main">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                	 <?php 
                        $id_image = get_field('slider_image_1');
                        $image = wp_get_attachment_image_src($id_image, 'home');
                        ?>
                        <img src="<?php echo $image[0]; ?>"  alt="Chania" width="100%">
                   
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1><?php the_field('slider_title_1');?></h1>
                            <p><?php the_field('slider_subtitle_1');?></p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button"><?php the_field('slider_button_1')?></a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <?php 
                        $id_image = get_field('slider_image_2');
                        $image = wp_get_attachment_image_src($id_image, 'home');
                        ?>
                        <img src="<?php echo $image[0]; ?>"  alt="Chania" width="100%">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1><?php the_field('slider_title_2');?></h1>
                            <p><?php the_field('slider_subtitle_2');?></p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button"><?php the_field('slider_button_2');?></a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <?php 
                        $id_image = get_field('slider_image_3');
                        $image = wp_get_attachment_image_src($id_image, 'home');
                        ?>
                        <img src="<?php echo $image[0]; ?>"  alt="Chania" width="100%">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1><?php the_field('slider_title_3');?></h1>
                            <p><?php the_field('slider_subtitle_3');?></p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button"><?php the_field('slider_button_3');?></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->
        <div class="container marketing">
            <!-- START THE FEATURETTES -->
            <!-- DEMO 2-->
            <div class="py-5">
                <h3 class="font-weight-bold mb-5">WHAT WE OFFER</h3>
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
            <div class="py-5">
                <h3 class="font-weight-bold mb-5">SOME OF OUR PROJECTS</h3>
                <div class="row">
                	<?php $args = array(
                		'post_type'    => 'projects',
                		'posts_per_page' => 6,
                		'orderby'         => 'title',
                		'order'          => 'ASC'
                	);
                	$projects = new WP_Query($args);
                	while($projects->have_posts()) : $projects-> the_post();
                	?>
                    <!-- DEMO 3 Item-->
                    <div class="col-lg-4 col-md-4 col-xs-6 mb-3 mb-lg-0">
                        <div class="hover hover-3 text-white rounded" style="margin-top: 25px;"><img src="<?php echo the_post_thumbnail_url();?>" alt="">
                            <div class="hover-overlay"></div>
                            <div class="hover-3-content px-5 py-4">
                                <p class="hover-3-description small text-uppercase mb-0"><i class="fa fa-search fa-2x"></i></p>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_postdata();?>
                </div>
            </div>
        </div>
        <div class="bg-overlay">
            <div class="row text-center">
                <div class="col-md-4" style="padding: 1rem 6rem;">
                    <h4><?php the_field('lower_banner_title');?></h4>
                    <h1><?php the_field('lower_banner_subtitle');?></h1>
                    <br>
                    <div class="wpb_wrapper">
                        <div class="socio mb-3 text-center">
                            <a href="<?php the_field('facebook_link');?>" target=" _blank">FACEBOOK
                            </a>
                        </div>
                        <div class="socio mb-3 text-center"><a href="<?php the_field('linkedin_link');?>" target=" _blank">linkedin</a>
                        </div>
                         <div class="socio mb-3 text-center"><a href="<?php the_field('instagram_link');?>" target=" _blank">Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="brands py-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="brands_slider_container">
                            <div class="owl-carousel owl-theme brands_slider">
                            	<?php $args = array(
			                		'post_type'    => 'brands',
			                		'posts_per_page' => 6,
			                		'orderby'         => 'title',
			                		'order'          => 'ASC'
			                	);
			                	$brands = new WP_Query($args);
			                	while($brands->have_posts()) : $brands-> the_post();
			                	?>
                                <div class="owl-item">
                                    <div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo the_post_thumbnail_url();?>" alt=""></div>
                                </div>
                                <?php endwhile; wp_reset_postdata();?>
                            </div> <!-- Brands Slider Navigation -->
                            <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
<?php get_footer();?>