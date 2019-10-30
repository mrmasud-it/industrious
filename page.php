<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Industrious
 */

get_header();
?>


<!-- Heading -->
<div id="heading">
	<h1><?php the_title(); ?></h1>
</div>

<!-- Main -->
<section id="main" class="wrapper">
	<div class="inner">
		<div class="content">

			<!-- Elements -->
			<div class="row">
				<?php
				while (have_posts()) :
					the_post();

					the_content();

					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
