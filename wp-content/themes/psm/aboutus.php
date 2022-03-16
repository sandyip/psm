<?php get_header('1');
/*Template Name: About Us Page*/
?>
 <main role="main">
        <div class="big-title " style=" background-image: url('<?php echo the_post_thumbnail_url();?>') ">
            <div class="container">
                <h1 class="entry-title"><?php the_title();?></h1>
            </div>
        </div>
        <div class="padding-top-lg-80 padding-top-xs-60">
            <div class="container">
                <h2 style="font-size: 32px; color: rgb(0, 0, 0); text-align: center; text-transform: none; visibility: visible; animation-name: fadeInUp;" class="vc_custom_heading wow fadeInUp vc_custom_1556951127517"><b><?php the_field('about_us_header');?></b></h2>
                <div class="mt-5">
                    <?php the_field('about_us_content');?>
                </div>
                <div class="wpb_text_column wpb_content_element ">
                    <div class="">
                        <p><strong>We provide:</strong></p>
                        <?php the_field('about_us_we_provide');?>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-dark">
            <div class="container">
                <div class="m-5 p-90">
                    <div class="row">
                        <div class="col-md-8">
                            <p><strong style="color: white;">These solutions allow you to:</strong></p>
                            <ul>
                                <li style="color: white;">Increase productivity &gt;<?php the_field('about_us_banner_list_1');?> </li>
                                <li style="color: white;">Increase customer satisfaction &gt;<?php the_field('about_us_banner_list_2');?></li>
                                <li style="color: white;">Reduce operating costs &gt; <?php the_field('about_us_banner_list_3');?></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                	<?php 
			                        $id_image = get_field('about_us_banner_image');
			                        $image = wp_get_attachment_image_src($id_image, 'home');
			                        ?>
			                        <img width="150" height="150" src="<?php echo $image[0]; ?>"  class="vc_single_image-img attachment-thumbnail" alt="" loading="lazy" >
                                	<!-- <img width="150" height="150" src="https://perfectstratamaintenance.com.au/wp-content/uploads/2019/05/P-150x150.png" class="vc_single_image-img attachment-thumbnail" alt="" loading="lazy" srcset="https://perfectstratamaintenance.com.au/wp-content/uploads/2019/05/P-150x150.png 150w, https://perfectstratamaintenance.com.au/wp-content/uploads/2019/05/P-100x100.png 100w" sizes="(max-width: 150px) 100vw, 150px"> -->
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white">
            <div class="container">
                <div class="p-90">
                    <div class="row">
                        <div class="col-md-4">
                            <figure class="wpb_wrapper vc_figure">
                            	<?php 
		                        $id_image = get_field('about_us_director_image');
		                        $image = wp_get_attachment_image_src($id_image, 'home');
		                        ?>
                        <img src="<?php echo $image[0]; ?>"  width="255" height="341">
                                
                            </figure>
                        </div>
                        <div class="col-md-8">
                            <div class="wpb_wrapper">
                                <h2 style="font-size: 32px; color: rgb(0, 0, 0); text-align: left; text-transform: none; visibility: visible; animation-name: fadeInUp;" class=""><b><?php the_field('about_us_director');?></b></h2>
                                <div class="mt-4">

                                       <?php the_field('about_us_director_content');?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white">
        <div class="wpb_wrapper">
            <h6 style="text-align: center;"><strong>Organisations we support</strong></h6>
        </div>

    <div class="wpb_single_image wpb_content_element vc_align_center">
        
        <figure class="text-center">
        	<?php 
                        $id_image = get_field('organization_image');
                        $image = wp_get_attachment_image_src($id_image, 'home');
                        ?>
                        <img src="<?php echo $image[0]; ?>" class="img-fluid" width="900" height="124">
           
        </figure>
    </div>
</div>
<?php get_footer();?>