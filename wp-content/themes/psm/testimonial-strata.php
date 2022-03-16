<?php get_header('1');
/*Ttemplate Name: Testimonial Strata Page*/
?>
    <main role="main">
        <div class="big-title " style=" background-image: url('<?php echo the_post_thumbnail_url();?>')">
            <div class="container">
                <h1 class="entry-title"><?php the_title();?></h1>
            </div>
        </div>
        <div class="mt-2 mb-5">
            <section id="gallery">
                <div class="container">
                    <div class="row">
                    	<?php
						if( have_rows('add_strata_managers') ):
						    while( have_rows('add_strata_managers') ) : the_row();
						    	?>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 image"><br>
                            <div class="boxed">
                                <p><?php echo get_sub_field('content');?></p>
                                <p><strong><?php echo get_sub_field('name');?><br>
                                    </strong><?php echo get_sub_field('position');?></p>
                            </div>
                        </div><br>
                        <?php endwhile;?>
                    <?php endif;?>
                        
                    </div><!-- End row -->
                </div><!-- End container -->
            </section>
        </div>
<?php get_footer();?>