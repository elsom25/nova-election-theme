<?php
/**
 * @package Election
 */
?>

<article id="post-<?php the_ID(); ?>" role="article" <?php post_class(); ?>>
  <header class="post-header">
    <h2 class="post-title">
      <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
    </h2>

    <?php if ( 'post' == get_post_type() ) : ?>
    <p class="post-meta">
      <?php election_posted_on(); ?>
    </p><!-- .entry-meta -->
    <?php endif; ?>
  </header><!-- .entry-header -->

  <?php if ( is_search() ) : // Only display Excerpts for Search ?>
  <section class="post-excerpt">
    <?php the_excerpt(); ?>
  </section><!-- .entry-summary -->
  <?php else : ?>
  <section class="post-content">
    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'election' ) ); ?>
    <?php
      wp_link_pages( array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'election' ),
        'after'  => '</div>',
      ) );
    ?>
  </section><!-- .entry-content -->
  <?php endif; ?>

  <footer class="post-meta">
    <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
      <?php
        /* translators: used between list items, there is a space after the comma */
        $categories_list = get_the_category_list( __( ', ', 'election' ) );
        if ( $categories_list && election_categorized_blog() ) :
      ?>
      <span class="cat-links">
        <?php printf( __( 'Posted in %1$s', 'election' ), $categories_list ); ?>
      </span>
      <?php endif; // End if categories ?>

      <?php
        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list( '', __( ', ', 'election' ) );
        if ( $tags_list ) :
      ?>
      <span class="tags-links">
        <?php printf( __( 'Tagged %1$s', 'election' ), $tags_list ); ?>
      </span>
      <?php endif; // End if $tags_list ?>
    <?php endif; // End if 'post' == get_post_type() ?>

    <?php edit_post_link( __( 'Edit', 'election' ), '<span class="edit-link">', '</span>' ); ?>
  </footer><!-- .entry-meta -->
</article><!-- #post-## -->
