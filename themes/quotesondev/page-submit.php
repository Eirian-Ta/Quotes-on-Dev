<?php
/**
 * The template for displaying the Submit a Quote page.
*
 */

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <section class="quote-submission">
      <header class="entry-header">
        <?php the_title( '<h2 class="entry-title">', ' a quote </h2>' ); ?>
      </header><!-- .entry-header -->

      <?php if ( is_user_logged_in() && current_user_can( 'edit_posts' ) ) : ?>

        <div class="quote-submission-wrapper">
          <form id="quote-submission-form">
            <div>
              <label for="quote-author">Author of Quote</label>
              <input type="text" name="quote-author" class="submit-form-input" id="quote-author" required aria-required="true">
            </div>
            <div>
              <label for="quote-content">Quote</label>
              <textarea rows="3" cols="20" name="quote-content" class="submit-form-input" id="quote-content" required aria-required="true"></textarea>
            </div>
            <div>
              <label for="quote-source">Where did you find this quote? (e.g. book name)</label>
              <input type="text" name="quote-source" class="submit-form-input" id="quote-source">
            </div>
            <div>
              <label for="quote-source-url">Provide the the URL of the quote source, if available.</label>
              <input type="url" name="quote-source-url" class="submit-form-input" id="quote-source-url">
            </div>

            <input type="submit" value="Submit Quote" class="btn" id="submit-quote">
          </form>

          <p class="submit-success-message"></p>
      </div>

    <?php else : ?>

      <p>Sorry, you must be logged in to submit a quote!</p>

      <p><?php echo sprintf( '<a href="%1s">%2s</a>', esc_url( wp_login_url() ), 'Click here to login.' ); ?></p>

    <?php endif; ?>
    </section>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>