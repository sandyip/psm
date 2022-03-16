<?php get_header('1');
/*Template Name: Safety And Quality page*/
?>
<main role="main">
        <div class="big-title " style=" background-image: url('<?php echo the_post_thumbnail_url();?>') ">
            <div class="container">
                <h1 class="entry-title"><?php the_title();?></h1>
            </div>
        </div>
        <div class="padding-top-lg-80 padding-top-xs-60">
            <div class="container">
                <h2 style="font-size: 32px; color: rgb(0, 0, 0); text-align: center; text-transform: none; visibility: visible; animation-name: fadeInUp;" class="text-center"><b><?php the_title();?></b></h2>
                <div class="mt-5">
                    <div class="wpb_wrapper">
                       <?php the_content();?>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-darks">
            <div class="container">
                <div class="p-90">
                    <div class="row">
                        <div class="col-md-8">
                            <p><strong style="color: white;"><?php the_field('banner_title');?></strong></p>
                            <p style="color: white;"><?php the_field('banner_content');?></p>
                            <ul>
                                <li style="color: white;"><?php the_field('banner_list_1');?></li>
                                <li style="color: white;"><?php the_field('banner_list_2');?></li>
                                <li style="color: white;"><?php the_field('banner_list_3');?></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <figure class="wpb_wrapper vc_figure">
                                <div class="vc_single_image-wrapper   vc_box_border_grey">
                                	<?php 
			                        $id_image = get_field('banner_image');
			                        $image = wp_get_attachment_image_src($id_image, 'home');
			                        ?>
			                        <img width="150" height="150" src="<?php echo $image[0]; ?>" class="vc_single_image-img attachment-thumbnail" alt="" loading="lazy" srcset="" sizes="(max-width: 150px) 100vw, 150px">
                                	
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer();?>