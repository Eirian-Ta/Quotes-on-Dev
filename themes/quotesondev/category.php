<?php
/**
 * The main template file.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main category" role="main">

    <?php if ( have_posts() ) : ?>

      <header>
        <h2 class="page-title"><?php  single_cat_title("Category: "); ?></h2> 
      </header>
      
      <?php while ( have_posts() ) : the_post(); ?>
                
        <?php get_template_part( 'template-parts/content'); ?>

      <?php endwhile; ?>

      <?php qod_numbered_pagination(); ?>

    <?php else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
