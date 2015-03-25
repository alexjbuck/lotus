<?php
/** 
 * The template for displaying search forms in Lotus
 * 
 * @package lotus
 */
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<label for="s" class="screen-reader-text"><?php _e( 'Search','lotus');?></label>
	<input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() );?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'lotus' );?>"/>
	<input type="submit" class="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'lotus' ); ?>" />
</form>