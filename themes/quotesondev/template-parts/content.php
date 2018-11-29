<?php
/**
 * Template part for displaying posts.
 *
 * @package QOD_Starter_Theme
 */

?>

<?php

$quoteSource = get_post_meta( get_the_ID(), '_qod_quote_source', true );
$quoteSourceUrl = get_post_meta( get_the_ID(), '_qod_quote_source_url', true );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-content">
    <?php the_excerpt(); ?>
  </div><!-- .entry-content -->

  <header class="entry-meta">
    <?php the_title( '<h3 class="entry-title"> &mdash; ', '</h3>' ); ?>
        
    <?php if( $quoteSource && $quoteSourceUrl ):
      echo "<span class='source'> <a href='$quoteSourceUrl' rel='bookmark'> $quoteSource </a></span>";
    elseif( $quoteSource ):
      echo "<span class='source'> $quoteSource </span>";
    else: ?>
    <?php endif; ?>
  </header><!-- .entry-header -->
</article><!-- #post-## -->



<?php if( is_home() || is_single() ): ?>
  <button type="button" class="btn" id="new-quote-button">Show Me Another!</button>
<?php endif; ?>
