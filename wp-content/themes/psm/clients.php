<?php get_header('1');
/*Template Name: Client Page*/
?>
 <main role="main">
        <div class="big-title " style=" background-image: url('<?php echo the_post_thumbnail_url();?>')">
            <div class="container">
                <h1 class="entry-title"><?php the_title();?></h1>
            </div>
        </div>
        <h2 style="font-size: 32px; color: rgb(0, 0, 0); text-align: center; text-transform: none; visibility: visible; animation-name: fadeInUp;" class="mt-5"><b>OUR CLIENTS</b></h2>
        <div class="mt-2 mb-5">
            <section id="gallery">
                <div class="container">
                    <div id="image-gallery">
                        <div class="row">
                        	<?php 
                        	if( have_rows('add_clients') ):
                        		while( have_rows('add_clients') ) : the_row();
                        			?>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 image">
                                <div class="img-wrapper">
                                    <a href=""><img src="<?php echo get_sub_field('client_image')['url'];?>" class="img-responsive"></a>
                                </div>
                            </div>
                           <?php endwhile;?>
                            <?php endif;?>
                        </div><!-- End row -->
                    </div><!-- End image gallery -->
                </div><!-- End container -->
            </section>
        </div>
<?php get_footer();?>