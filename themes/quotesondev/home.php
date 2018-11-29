<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

    <?php if ( have_posts() ) : ?>

      <?php if ( is_home() && ! is_front_page() ) : ?>
        <header>
          <h2 class="page-title screen-reader-text"><?php single_post_title(); ?></h2>
        </header>
      <?php endif; ?>

      <?php /* Start the Loop */
      

      $quotes = get_posts( array( 'posts_per_page' => 1, 'orderby' => 'rand') );

      foreach ( $quotes as $post ) : setup_postdata( $post ); ?>
      
      <?php get_template_part( 'template-parts/content' ); ?>

      <?php endforeach; 
      wp_reset_postdata();?>

    <?php else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->





<?php get_footer(); ?>
