<?php get_header('1');
/*Template Name: Why Us Page*/
?>
<main role="main">
        <div class="big-title " style=" background-image: url('<?php echo the_post_thumbnail_url();?>') ">
            <div class="container">
                <h1 class="entry-title"><?php the_title();?></h1>
            </div>
        </div>
        <div class="padding-top-lg-80 padding-top-xs-60">
            <div class="container">
                <h2 style="font-size: 32px; color: rgb(0, 0, 0); text-align: center; text-transform: none; visibility: visible; animation-name: fadeInUp;" class="text-center"><b>Why chose Perfect Strata Maintenance</b></h2>
                <div class="mt-5">
                    <div class="row">
                        <!-- DEMO 3 Item-->
                        <div class="col-lg-6 col-md-6 col-xs-12 mb-3">
                            <div class="row">
                                <div class="col-2">
                                <?php 
		                        $id_image = get_field('why_logo_1');
		                        $image = wp_get_attachment_image_src($id_image, 'home');
		                        ?>
                        		<img class="img-fluid " src="<?php echo $image[0]; ?>"  width="80" height="80" alt="" title="">
                                   
                                </div>
                                <div class="col-10">
                                    <strong><?php the_field('why_title_1');?></strong>
                                    <br>
                                    <p><?php the_field('why_content_1');?></p>
                                </div>
                            </div>
                        </div>
                        <!-- DEMO 3 Item    -->
                        <div class="col-lg-6 col-md-6 col-xs-12 mb-3">
                            <div class="row">
                                <div class="col-2">
                                     <?php 
		                        $id_image = get_field('why_logo_2');
		                        $image = wp_get_attachment_image_src($id_image, 'home');
		                        ?>
                        		<img class="img-fluid " src="<?php echo $image[0]; ?>"  width="80" height="80" alt="" title="">
                                </div>
                                <div class="col-10">
                                    <strong><?php the_field('why_title_2');?></strong>
                                    <br>
                                    <p><?php the_field('why_content_2');?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 mb-3">
                            <div class="row">
                                <div class="col-2">
                                     <?php 
		                        $id_image = get_field('why_logo_3');
		                        $image = wp_get_attachment_image_src($id_image, 'home');
		                        ?>
                        		<img class="img-fluid " src="<?php echo $image[0]; ?>"  width="80" height="80" alt="" title="">
                                </div>
                                <div class="col-10">
                                    <strong><?php the_field('why_title_3');?></strong>
                                    <br>
                                    <p><?php the_field('why_content_3');?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 mb-3">
                            <div class="row">
                                <div class="col-2">
                                     <?php 
		                        $id_image = get_field('why_logo_4');
		                        $image = wp_get_attachment_image_src($id_image, 'home');
		                        ?>
                        		<img class="img-fluid " src="<?php echo $image[0]; ?>"  width="80" height="80" alt="" title="">
                                </div>
                                <div class="col-10">
                                    <strong><?php the_field('why_title_4');?></strong>
                                    <br>
                                    <p><?php the_field('why_content_4');?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 mb-3">
                            <div class="row">
                                <div class="col-2">
                                     <?php 
		                        $id_image = get_field('why_logo_5');
		                        $image = wp_get_attachment_image_src($id_image, 'home');
		                        ?>
                        		<img class="img-fluid " src="<?php echo $image[0]; ?>"  width="80" height="80" alt="" title="">
                                </div>
                                <div class="col-10">
                                    <strong><?php the_field('why_title_5');?></strong>
                                    <br>
                                    <p><?php the_field('why_content_5');?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 mb-3">
                            <div class="row">
                                <div class="col-2">
                                     <?php 
		                        $id_image = get_field('why_logo_6');
		                        $image = wp_get_attachment_image_src($id_image, 'home');
		                        ?>
                        		<img class="img-fluid " src="<?php echo $image[0]; ?>"  width="80" height="80" alt="" title="">
                                </div>
                                <div class="col-10">
                                    <strong><?php the_field('why_title_6');?></strong>
                                    <br>
                                    <p><?php the_field('why_content_6');?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 style="font-size: 32px; color: rgb(0, 0, 0); text-align: center; text-transform: none; visibility: visible; animation-name: fadeInUp;" class="text-center mt-5"><b>Added Value Items</b></h2>
                <div class="mt-5">
                    <div class="row">
                        <!-- DEMO 3 Item-->
                        <div class="col-lg-6 col-md-6 col-xs-12 mb-3">
                            <div class="row">
                                <div class="col-2">
                                    <?php 
			                        $id_image = get_field('added_logo_1');
			                        $image = wp_get_attachment_image_src($id_image, 'home');
			                        ?>
	                        		<img class="img-fluid " src="<?php echo $image[0]; ?>"  width="80" height="80" alt="" title="">
                                </div>
                                <div class="col-10">
                                    <strong><?php the_field('added_title_1');?></strong>
                                    <br>
                                    <p><?php the_field('added_content_1');?></p>
                                </div>
                            </div>
                        </div>
                        <!-- DEMO 3 Item    -->
                        <div class="col-lg-6 col-md-6 col-xs-12 mb-3">
                            <div class="row">
                                <div class="col-2">
                                    <?php 
			                        $id_image = get_field('added_logo_2');
			                        $image = wp_get_attachment_image_src($id_image, 'home');
			                        ?>
	                        		<img class="img-fluid " src="<?php echo $image[0]; ?>"  width="80" height="80" alt="" title="">
                                </div>
                                <div class="col-10">
                                    <strong><?php the_field('added_title_2');?></strong>
                                    <br>
                                    <p><?php the_field('added_content_2');?></p>
                                </div>
                            </div>
                        </div>



                        <div class="col-lg-12 col-md-12 col-xs-12 mb-3">
                            <div class="row">
                                <div class="col-1 col-xs-1">
                                    <?php 
			                        $id_image = get_field('added_logo_3');
			                        $image = wp_get_attachment_image_src($id_image, 'home');
			                        ?>
	                        		<img class="img-fluid " src="<?php echo $image[0]; ?>"  width="80" height="80" alt="" title="">
                                </div>
                                <div class="col-11 col-xs-11">
                                    <strong><?php the_field('added_title_3');?></strong>
                                    <br>
                                    <p><?php the_field('added_content_3');?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer();?>