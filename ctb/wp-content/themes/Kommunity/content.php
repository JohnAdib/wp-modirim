<?php
/**
 * @package fabthemes
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<span> توسط <?php the_author(); ?> انتشار یافته</span>
			<span> / </span>
			<span> <?php the_category(', '); ?></span>
			<span> / </span>
			<span> <?php comments_number( 'دیدگاه شما چیست؟', 'یک دیدگاه', '% دیدگاه' ); ?> </span>
			<span class="entry-link"> <a href="<?php echo (esc_url( get_permalink())); ?>" rel="entry-link">لینک ثابت</a> </span>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php 
		$thumb = get_post_thumbnail_id();
		$img_url = wp_get_attachment_url( $thumb,'full' ); //get full URL to image (use "large" or "medium" if the images too big)
		$image = aq_resize( $img_url, 960, 460, true,true,true ); //resize & crop the image
		?>
		<?php if($image) : ?>
			<a href="<?php the_permalink();?>"> <img class="post-image" src="<?php echo $image ?>" alt="<?php the_title(); ?>" /> </a>
		<?php endif; ?>

		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
