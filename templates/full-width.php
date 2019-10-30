<?php
/*
* Template Name: Home Template
*/
get_header();
?>
<!-- Banner -->
<section id="banner">
    <div class="inner">
        <h1><?php bloginfo('title'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
    </div>
    <video autoplay loop muted playsinline src="<?php echo get_template_directory_uri(); ?>/images/banner.mp4"></video>
</section>
<!-- Highlights -->
<section class="wrapper">
    <div class="inner">
        <?php while (have_posts()) : the_post();

            the_content();

        endwhile; ?>
    </div>
</section>

<?php
get_footer();
?>