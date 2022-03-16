<?php get_header('1');
/*Template Name: Project Page*/
?>
<main role="main">
        <div class="big-title " style=" background-image: url('<?php echo the_post_thumbnail_url();?>')">
            <div class="container">
                <h1 class="entry-title"><?php the_title();?></h1>
            </div>
        </div>
        <div class="py-5">
            <section id="gallery">
                <div class="container-fluid">
                    <div id="image-gallery">
                        <div class="row">

                        	<?php 
                        	if( have_rows('add_projects') ):
                        		while( have_rows('add_projects') ) : the_row();
                        			?>

                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 image">
                                <div class="img-wrapper">
                                    <a href="<?php echo get_sub_field('project_image')['url'];?>"><img src="<?php echo get_sub_field('project_image')['url'];?>" class="img-responsive"></a>
                                    <div class="img-overlay">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </div>
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