<?php get_header('1');
/*Template Name: Testimonial Owners Page*/
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
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 image">
                            <div class="boxed">
                                <?php the_field('owner_content_1');?>
                                <p><strong><?php the_field('owner_1');?></strong><br>
                                    <?php the_field('owner_position_1');?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 image">
                            <div class="boxed">
                               <?php the_field('owner_content_2');?>
                                <p><strong><?php the_field('owner_2');?></strong><br>
                                    <?php the_field('owner_position_2');?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-4">
                            <div class="boxed">
                                <?php the_field('owner_content_3');?>
                                <p><strong><?php the_field('owner_3');?></strong><br>
                                    <?php the_field('owner_position_3');?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-4">
                            <div class="boxed">
                                <?php the_field('owner_content_4');?>
                                <p><strong><?php the_field('owner_4');?></strong><br>
                                    <?php the_field('owner_position_4');?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-4">
                            <div class="boxed">
                                <?php the_field('owner_content_5');?>
                                <p><strong><?php the_field('owner_5');?></strong><br>
                                    <?php the_field('owner_position_5');?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-4">
                            <div class="boxed">
                                <?php the_field('owner_content_6');?>
                                <p><strong><?php the_field('owner_6');?></strong><br>
                                    <?php the_field('owner_position_6');?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-4">
                            <div class="boxed">
                                <?php the_field('owner_content_7');?>
                                <p><strong><?php the_field('owner_7');?></strong><br>
                                    <?php the_field('owner_position_7');?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-4">
                            <div class="boxed">
                                <?php the_field('owner_content_8');?>
                                <p><strong><?php the_field('owner_8');?></strong><br>
                                    <?php the_field('owner_position_8');?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-4">
                            <div class="boxed">
                                <?php the_field('owner_content_9');?>
                                <p><strong><?php the_field('owner_9');?></strong><br>
                                    <?php the_field('owner_position_9');?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-4">
                            <div class="boxed">
                                <?php the_field('owner_content_10');?>
                                <p><strong><?php the_field('owner_10');?></strong><br>
                                    <?php the_field('owner_position_10');?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-4">
                            <div class="boxed">
                                <?php the_field('owner_content_11');?>
                                <p><strong><?php the_field('owner_11');?></strong><br>
                                    <?php the_field('owner_position_11');?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-4">
                            <div class="boxed">
                                <?php the_field('owner_content_12');?>
                                <p><strong><?php the_field('owner_12');?></strong><br>
                                    <?php the_field('owner_position_12');?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-4">
                            <div class="boxed">
                                <?php the_field('owner_content_13');?>
                                <p><strong><?php the_field('owner_13');?></strong><br>
                                    <?php the_field('owner_position_13');?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-4">
                            <div class="boxed">
                                <?php the_field('owner_content_14');?>
                                <p><strong><?php the_field('owner_14');?></strong><br>
                                    <?php the_field('owner_position_14');?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-4">
                            <div class="boxed">
                               <?php the_field('owner_content_15');?>
                                <p><strong><?php the_field('owner_15');?></strong><br>
                                    <?php the_field('owner_position_15');?></p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 mt-4">
                            <div class="boxed">
                                <?php the_field('owner_content_16');?>
                                <p><strong><?php the_field('owner_16');?></strong><br>
                                    <?php the_field('owner_position_16');?></p>
                            </div>
                        </div>
                    </div><!-- End row -->
                </div><!-- End container -->
            </section>
        </div>

<?php get_footer();?>