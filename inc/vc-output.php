<?php
//this for top section Headin
function heading($heading){
    extract(
        shortcode_atts(
            array(
                't_heading' => '',
                't_desc' => '',

            ),
            $heading
        )
    );

    ob_start();
    ?>
    <!-- for Section heading -->
    <header class="special">
        <h2><?php echo esc_attr($t_heading); ?></h2>
        <p><?php echo esc_attr($t_desc); ?></p>
    </header>
<?php
    return ob_get_clean();
}
add_shortcode('t_heading', 'heading');


//this is for iconbox with text
function iconboxs($iconboxs){
    extract(
        shortcode_atts(
            array(
                'icon_icon'     => '',
                'icon_heiding'  => '',
                'icon_desc'     => ''

            ),
            $iconboxs
        )
    );
    ob_start();
    ?>
    <div class="highlights">
        <section>
            <div class="content">
                <header>
                    <a href="#" class="icon <?php echo esc_attr__($icon_icon); ?>"><span class="label">Icon</span></a>
                    <h3><?php echo esc_attr($icon_heiding); ?></h3>
                </header>
                <p><?php echo esc_attr($icon_desc); ?></p>
            </div>
        </section>
    </div>
<?php
    return ob_get_clean();
}
add_shortcode('iconbox', 'iconboxs');


//this for top section Headin
function m_headings($m_headings){
    extract(
        shortcode_atts(
            array(
                'm_heading' => '',
                'm_desc' => '',

            ),
            $m_headings
        )
    );

    ob_start();
    ?>
    <!-- CTA -->
    <section id="cta" class="wrapper">
        <div class="inner">
            <h2><?php echo esc_attr($m_heading); ?></h2>
            <p><?php echo esc_attr($m_desc); ?></p>
        </div>
    </section>

<?php
    return ob_get_clean();
}
add_shortcode('m_heading', 'm_headings');


//this is for bottom section Heading
function b_headings($b_headings){
    extract(
        shortcode_atts(
            array(
                'b_heading' => '',
                'b_desc' => '',

            ),
            $b_headings
        )
    );

    ob_start();
    ?>
    <div class="inner">
        <header class="special">
            <h2><?php echo esc_attr($b_heading); ?></h2>
            <p><?php echo esc_attr($b_desc); ?></p>
        </header>

    <?php
        return ob_get_clean();
    }
add_shortcode('b_heading', 'b_headings');


// For team section
function teams($teams){
    extract(
        shortcode_atts(
            array(
                'team_m'          => '',
            ),
            $teams
        )
    );
    ob_start();
    ?>
    <?php
        $args = array('post_type' => 'team', 'posts_per_page' => $team_m);
        $the_query = new WP_Query($args);
    ?>

<!-- Testimonials -->
<div class="testimonials">
    <?php if($the_query->have_posts()): ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
	<section>
		<div class="content">
			<blockquote>
				<p><?php the_content() ?></p>
			</blockquote>
				<div class="author">
					<div class="image">
                        <?php the_post_thumbnail(); ?>
					</div>
					<p class="credit">- <strong><?php the_title(); ?></strong> <span>CEO - ABC Inc.</span></p>
				</div>
		</div>
	</section>
    <?php wp_reset_postdata(); ?>
    <?php endwhile; ?>
    <?php else: ?>
    <p><?php _e("Sorry this is empty") ?></p>
    <?php endif; ?>
</div>
<?php
    return ob_get_clean();
}
add_shortcode('team', 'teams');

// For generic page section
function generics($generics){
    extract(
        shortcode_atts(
            array(
                'heading_one' => '',
                'text_one' => '',
                'heading_two' => '',
                'text_two' => '',

            ), $generics
        )
    );

    ob_start();
    ?>
		<header>
			<h2><?php echo esc_attr($heading_one); ?></h2>
		</header>
		<p><?php  echo esc_attr($text_one); ?></p>
		<hr />
		<h3><?php echo esc_attr($heading_two); ?></h3>
		<p><?php echo esc_attr($text_two); ?></p>

	
    <?php
        return ob_get_clean();
    }
add_shortcode('generic', 'generics');