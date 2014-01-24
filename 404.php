<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Election
 */

get_header(); ?>
<div class="static-page error-404 not-found">
<?php get_template_part( 'template-static-header' ); ?>

<header class="page-header vertical-wrap">
  <div class="row">
    <div class="small-12 columns">
      <div class="vertical">
        <h1><?php _e( 'Oops! That page can&rsquo;t be found.', 'election' ); ?></h1>
      </div>
    </div>
  </div>
</header>
<div class="content" role="main">
  <section class="root-content">
    <div class="row">
      <div class="small-12 columns">
        <article>
    		  <h2><strong>404.</strong> That's an error.</h2>
          <p>These are not the pages you're looking for.</p>
          <?php get_template_part( 'template-not-found' ); ?>
        </article>
      </div>
    </div>
  </section>
</div>

</div><!--/.static-page-->
<?php get_footer(); ?>
