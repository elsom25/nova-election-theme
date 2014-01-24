<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Election
 */

get_header(); ?>
<?php if ( have_posts() ) : ?>
  <div class="static-page blog">
<?php else : ?>
  <div class="static-page blog no-results not-found">
<?php endif; ?>

<?php get_template_part( 'template-static-header' ); ?>

<?php if ( have_posts() ) : ?>

  <header class="page-header vertical-wrap">
    <div class="row">
      <div class="small-12 columns">
        <div class="vertical">
            <h1>Blog</h1>
        </div>
      </div>
    </div>
  </header>
  <div class="content fancy-dark" role="main">
    <section class="root-content">
      <div class="row">
        <div class="small-12 columns">
          <?php while ( have_posts() ) : the_post(); ?>
            <?php
              get_template_part( 'content', get_post_format() );
            ?>
          <?php endwhile; ?>

          <?php election_content_nav( 'nav-below' ); ?>
        </div>
      </div>
    </section>
  </div>

<?php else : ?>

  <?php get_template_part( 'no-results', 'index' ); ?>

<?php endif; ?>

</div><!--/.static-page-->
<?php get_footer(); ?>
