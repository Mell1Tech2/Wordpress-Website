<?php
 /**
 * The template for displaying the search form
 *
 * @package Mell1Tech2
 */

?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">

	<label>
    <span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'mell1tech2_theme' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search for:', 'placeholder', 'mell1tech2_theme' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" />
	</label>

	<button type="submit" class="search-submit">
    <?php echo esc_html_x( 'Search', 'submit button', 'mell1tech2_theme' ); ?>
  </button>

</form>