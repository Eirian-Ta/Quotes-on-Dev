<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package QOD_Starter_Theme
 */

/**
 * Removes Comments from admin menu.
 */
function qod_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'qod_remove_admin_menus' );

/**
 * Removes comments support from Posts and Pages.
 */
function qod_remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
add_action( 'init', 'qod_remove_comment_support', 100 );

/**
 * Removes Comments from admin bar.
 */
function qod_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'qod_admin_bar_render' );

/**
 * Removes Comments-related metaboxes.
 */
 function qod_remove_comments_meta_boxes() {
	remove_meta_box( 'commentstatusdiv', 'post', 'normal' );
	remove_meta_box( 'commentsdiv', 'post', 'normal' );
	remove_meta_box( 'trackbacksdiv', 'post', 'normal' );
}
add_action( 'admin_init', 'qod_remove_comments_meta_boxes' );



function qod_login_logo() { 
?> 
<style type="text/css"> 
.login-action-login {
  background: #222222;
}

.login .message {
  border-left: 4px solid #00cc00!important;
}
.login form input:focus {
  border: 2px solid #00cc00!important;;
}

body.login div#login h1 a {
  background-image: url(http://localhost/Project5/wp-content/themes/quotesondev/assets/qod-logo.svg);
  background-size: 500px auto;
  width: 500px!important;
  margin-left: -100px;
}
body.login div#login form#loginform p.submit input#wp-submit {
  background-color: #00cc00;
  border: none!important;
  box-shadow: none!important;
  text-shadow: none!important;
} 
</style>
<?php 
} add_action( 'login_enqueue_scripts', 'qod_login_logo' );

function the_url( $url ) {
    return home_url();
}
add_filter( 'login_headerurl', 'the_url' );
