<?php 
/**
 * This is your functions file. You can change or remove any of the features
 * provided by the parent theme. All styling changes should be done within
 * your style.css file.
 *
 * @package AlkuBee
 * @subpackage Functions
 */

/* Attach our child theme setup to the `after_setup_theme` hook. */
add_action( 'after_setup_theme', 'alku_bee_theme_setup', 11 );

/**
 * Theme setup function. Inside this function is where you should add all the 
 * calls to add/remove any filters and actions that you might want to change
 * from the parent theme. This function will run AFTER ther parent theme's
 * setup function.
 *
 * @since 0.1.0
 */
function alku_bee_theme_setup() {

  /* Get the theme prefix. */
  $prefix = hybrid_get_prefix();

  /* Lets set the default layout to One column. */
  add_filter( 'get_post_layout', 'alku_bee_theme_layout' );

  /* Lets remove the only sidebar available. */
  remove_theme_support( 'hybrid-core-sidebars' );

}

/**
 * Changes the default layout to One column.
 *
 * @since 0.1.0
 */
function alku_bee_theme_layout( $layout ) {

  if ( 'layout-2c-l' == $layout )
    $layout = 'layout-1c';

  return $layout;
}
?>