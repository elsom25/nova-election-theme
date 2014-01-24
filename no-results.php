<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Election
 */
?>

<header class="page-header vertical-wrap">
  <div class="row">
    <div class="small-12 columns">
      <div class="vertical">
        <h1><?php _e( 'Nothing Found', 'election' ); ?></h1>
      </div>
    </div>
  </div>
</header>
<div class="content" role="main">
  <section class="root-content">
    <div class="row">
      <div class="small-12 columns">
        <article>
          <h2><strong>Not Found.</strong> We're trying hard though.</h2>
      		<?php if ( is_search() ) : ?>
      			<p><?php _e( 'Sorry, but nothing matched your search. Why not try again with something different?', 'election' ); ?></p>
      		<?php else : ?>
      			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'election' ); ?></p>
      		<?php endif; ?>

          <?php get_template_part( 'template-not-found' ); ?>
        </article>
      </div>
    </div>
  </section>
</div>
