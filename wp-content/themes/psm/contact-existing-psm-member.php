<?php get_header('1');
/*Template Name: Contact / Existing /Psm member page*/
?>
<main role="main">
        <div class="big-title " style=" background-image: url('<?php echo the_post_thumbnail_url();?>')">
            <div class="container">
                <h1 class="entry-title"><?php the_title();?></h1>
            </div>
        </div>
        <div class="mt-2 mb-5">
            <div class="container">
            	<?php echo do_shortcode('[wpforms id="348" title="false" description="false"]');?>
            </div>
        </div>
<?php get_footer();?>