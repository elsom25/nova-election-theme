<?php
/**
 * Template Name: Endorsements
 *
 * @package Election
 */

get_header(); ?>
<div class="static-page endorsements">
<?php get_template_part( 'template-static-header' ); ?>

<header class="page-header vertical-wrap">
  <div class="row">
    <div class="small-12 columns">
      <div class="vertical">
        <h1>Endorsements</h1>
        <p class="lead">
          We’re a growing group of students who want to see real change within the Federation of Students.
        </p>
      </div>
    </div>
  </div>
</header>
<div class="content fancy-dark" role="main">
  <section class="root-content">
    <div class="wrap">
      <dl id="endorsement-filters" class="sub-nav">
        <dt>Filter:</dt>
        <dd class="active"><a href="#" data-filter="*">All</a></dd>
        <dd><a href="#" data-filter=".team">Team</a></dd>
        <dd><a href="#" data-filter=".pres">President</a></dd>
        <dd><a href="#" data-filter=".vped">VP Education</a></dd>
        <dd><a href="#" data-filter=".vpin">VP Internal</a></dd>
        <dd><a href="#" data-filter=".vpof">VP Operations &amp; Finance</a></dd>
      </dl>
      <div id="endorsement-collection" class="endorsement-collection">
        <?php
        $args = array( 'post_type' => 'tw_endorsement', 'posts_per_page' => -1 );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
          $terms = get_the_terms( get_the_ID(), 'internal_category' );
          $terms_list = array();
          foreach( $terms as $term ) {
            $terms_list[] = $term->slug;
          }
          $term_string = join( ' ', $terms_list );
        ?>
          <article class="endorsement <?php echo $term_string; ?>">
            <?php if ( has_post_thumbnail() ) : ?>
              <header>
                <div class="img-wrap"><?php the_post_thumbnail(); ?></div>
              </header>
            <?php endif; ?>
            <section>
              <blockquote>
                <?php the_content(); ?>
                <cite><?php the_title(); ?></cite>
              </blockquote>
            </section>
          </article>
        <?php endwhile; ?>
      </div>
      <div class="padd"></div>
    </div>
  </section>
</div>

</div><!--/.static-page-->
<?php get_footer(); ?>
