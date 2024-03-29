<?php
/**
 * @package Election
 */
?>

<article id="post-<?php the_ID(); ?>" role="article" <?php post_class(); ?>>
	<header class="post-header">
    <h1 class="post-title"><?php the_title(); ?></h1>

		<div class="post-meta">
			<?php election_posted_on(); ?>
		</div><!-- .post-meta -->
	</header><!-- .post-header -->

	<div class="post-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'election' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .post-content -->

	<footer class="post-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'election' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'election' ) );

			if ( ! election_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'election' );
				} else {
					$meta_text = __( 'Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'election' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'election' );
				} else {
					$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'election' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>

		<?php edit_post_link( __( 'Edit', 'election' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .post-meta -->
</article><!-- #post-## -->
