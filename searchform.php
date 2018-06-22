<?php
/**
 * Template for displaying search forms in Twenty Seventeen
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?=  esc_url( home_url( '/' ) ); ?>">
	<label for="<?=  $unique_id; ?>">
		<span class="screen-reader-text"><?=  _x( 'Search for:', 'label', 'pqnhat89' ); ?></span>
	</label>
	<input type="search" id="<?=  $unique_id; ?>" class="search-field" placeholder="<?=  esc_attr_x( 'Search &hellip;', 'placeholder', 'pqnhat89' ); ?>" value="<?=  get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><?=  pqnhat89_get_svg( array( 'icon' => 'search' ) ); ?><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'pqnhat89' ); ?></span></button>
</form>
