<?php
/**
	*Plugin Name: Elham Facebook Tag
	*Plugin url: https://github.com/elham-rababah/plugin
	*Description: This plugin adds some Facebook Open Graph tags to our single posts.
	* Version: 1.0.0
	* Author: Elham Rababh
	* Author URI:https://github.com/elham-rababah
	* License: GPL2 
*/
// wp_head to  add info to head we will found this useful in case modifiyng SEO
add_action( 'wp_head', 'elham_facebook_tags' );
function elham_facebook_tags() {
	//echo 'I am in the head section';
	if( is_single() ) {
  ?>
  	<!-- add info to the header -->
    <meta property="og:title" content="<?php the_title() ?>" />
    <meta property="og:site_name" content="<?php bloginfo( 'name' ) ?>" />
    <meta property="og:url" content="<?php the_permalink() ?>" />
    <meta property="og:description" content="<?php the_excerpt() ?>" />
    <meta property="og:type" content="article" />
    
    <?php 
      if ( has_post_thumbnail() ) :
        $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); 
    ?>
      <meta property="og:image" content="<?php echo $image[0]; ?>"/>  
    <?php endif; ?>
    
  <?php
  }
}
