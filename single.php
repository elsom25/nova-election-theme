<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Election
 */

get_header(); ?>
<div class="static-page blog single">
<?php get_template_part( 'template-static-header' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <div class="content" role="main">
    <section class="root-content">
      <div class="row">
        <div class="small-12 columns">
          <?php get_template_part( 'content', 'single' ); ?>
          <?php election_content_nav( 'nav-below' ); ?>
        </div>
      </div>
    </section>
  </div>
<?php endwhile; ?>

</div><!--/.static-page-->
<?php get_footer(); ?>
