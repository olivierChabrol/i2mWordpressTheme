<?php

if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
}
else {
    if ( ! is_page_template() ) {
        get_header();

        get_template_part( 'template-parts/front-page/cover' );
        get_template_part( 'template-parts/front-page/services' );

        $default_sidebar_position = get_theme_mod( 'default_sidebar_position', 'right' );
        ?>
        <div class="container">
		    <div class="row">

			    <?php if ( $default_sidebar_position === 'no' ) : ?>
				    <div class="col-md-12 wp-bp-content-width">
			    <?php else : ?>
				    <div class="col-md-8 wp-bp-content-width">
			    <?php endif; ?>

                <?php if ( get_theme_mod( 'show_main_content', 1 ) ) : ?>

                <div class="wp-bp-main-content">
                    <div id="main" class="col justify-content-center">
                        <?php 
                            while ( have_posts() ) : the_post(); ?>

                            <h2 class="mb-4"><?php the_title(); ?></h2>
                            
                            <?php i2m_theme_post_thumbnail();
                                  the_content();
                            endwhile; 
                        ?>
                    </div>
                </div> <!-- main-content -->
            </div> <!--md-8 -->

                <?php if ( $default_sidebar_position != 'no' ) : ?>
                    <?php if ( $default_sidebar_position === 'right' ) : ?>
                        <div class="col-md-4 wp-bp-sidebar-width">
                            <?php elseif ( $default_sidebar_position === 'left' ) : ?>
                        <div class="col-md-4 order-md-first wp-bp-sidebar-width">
                        <?php endif; ?>
                            <?php get_sidebar(); ?>
                        </div><!-- /.col-md-4 -->
                <?php endif; ?>

            </div> <!-- row -->
        </div> <!-- container -->
        <?php endif; ?>

        <?php
        get_footer();
    }
    else {
        include( get_page_template() );
    }
}
?>
