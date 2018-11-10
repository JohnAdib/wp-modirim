<?php
/**
 * @package fabthemes
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<span> توسط <?php the_author(); ?> انتشار یافته</span>
			<span> / </span>
			<span> <?php the_category(', '); ?></span>
			<span> / </span>
			<span> <?php comments_number( 'دیدگاه شما چیست؟', 'یک دیدگاه', '% دیدگاه' ); ?> </span>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php 
		$thumb = get_post_thumbnail_id();
		$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
		$image = aq_resize( $img_url, 960, 460, true,true,true ); //resize & crop the image
		?>
		<?php if($image) : ?>
			 <img class="post-image" src="<?php echo $image ?>" alt="<?php the_title(); ?>" />
		<?php endif; ?>

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'fabthemes' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			echo get_the_tag_list('',' ','');
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
