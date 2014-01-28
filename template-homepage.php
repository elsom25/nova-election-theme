<?php
/**
 * Template Name: Homepage
 *
 * @package Election
 */

$team_url = get_permalink() . 'team/';
$plat_url = get_permalink() . 'platform/';
$blog_url = get_permalink( get_option('page_for_posts' ) );

get_header(); ?>

<div class="fixed">
  <?php get_template_part( 'template-nav-cta' ); ?>
</div>
<header class="hero text-center">
  <h1>
    <img data-interchange="[<?php bloginfo('template_url'); ?>/img/nova-logo-mobile.png, (default)], [<?php bloginfo('template_url'); ?>/img/nova-logo-small.png, (only screen and (min-width:37.5em))], [<?php bloginfo('template_url'); ?>/img/nova-logo.png, (only screen and (min-width:52.5em))]">
    <noscript><img src="<?php bloginfo('template_url'); ?>/img/nova-logo-mobile.png"></noscript>
  </h1>
  <h2><?php bloginfo('description'); ?></h2>
  <nav class="site-navigation">
    <ul class="inline-list">
      <?php
      $menu_params = array(
        'theme_location' => 'primary',
        'container' => false,
        'items_wrap' => '%3$s'
      );
      wp_nav_menu( $menu_params );
      ?>
    </ul>
  </nav>
  <div class="flex-video-wrap">
    <div class="flex-video-safe">
      <iframe width="853" height="480" src="//www.youtube.com/embed/HWoYoWGhJjQ" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</header>

<div class="content" role="main">
  <section class="hero-row team-row acts-as-link">
    <div class="row">
      <div class="border"></div>
      <div class="small-3 columns">
        <img src="<?php bloginfo('template_url'); ?>/img/profile_jesse_sqr.jpg" />
      </div>
      <div class="small-3 columns">
        <img src="<?php bloginfo('template_url'); ?>/img/profile_luke_sqr.jpg" />
      </div>
      <div class="small-3 columns">
        <img src="<?php bloginfo('template_url'); ?>/img/profile_anjali_sqr.jpg" />
      </div>
      <div class="small-3 columns">
        <img src="<?php bloginfo('template_url'); ?>/img/profile_elizabeth_sqr.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <div class="cta text-center">
          <a href="<?php echo $team_url; ?>">
            <h1>Team</h1>
            <p>Learn more&hellip;</p>
          </a>
        </div>
      </div>
    </div>
  </section>

  <?php if ( have_posts() ) : ?>
    <section class="hero-row blog-row">
      <row class="show-for-small">
        <div class="small-12 columns">
          <div class="cta text-center">
            <a class="blog-cta" href="<?php echo $blog_url; ?>">
              <h1>Blog</h1>
              <p>Read more&hellip;</p>
            </a>
          </div>
        </div>
      </row>
      <div class="row">
        <div class="border hide-for-small" id="blog-border"></div>
        <div class="large-6 columns">

          <?php query_posts('showposts=1'); ?>
          <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" class="acts-as-link main-blog-post" role="article" <?php post_class(); ?>>
              <header class="post-header">
                <h2 class="post-title">
                  <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                </h2>

                <?php if ( 'post' == get_post_type() ) : ?>
                <em class="post-meta">
                  <?php election_posted_on(); ?>
                </em>
                <?php endif; ?>
              </header>

              <section class="post-excerpt">
                <?php the_excerpt(); ?>
              </section>
            </article>

          <?php endwhile; ?>

        </div>
        <div class="large-6 columns">

          <?php query_posts('posts_per_page=3&offset=1'); ?>
          <?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?> TEST" class="acts-as-link" role="article" <?php post_class(); ?>>
              <header class="post-header">
                <h2 class="post-title">
                  <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                </h2>

                <?php if ( 'post' == get_post_type() ) : ?>
                  <em class="post-meta">
                    <?php election_posted_on(); ?>
                  </em>
                <?php endif; ?>
              </header>
            </article>

          <?php endwhile; ?>

        </div>
      </div>
      <div class="row hide-for-small">
        <div class="small-12 columns">
          <div class="cta text-center">
            <a class="blog-cta" href="<?php echo $blog_url; ?>">
              <h1>Blog</h1>
              <p>Read more&hellip;</p>
            </a>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <section class="platform-row">
    <div class="row">
      <div class="small-12 columns">
        <article>
          <header class="text-center">
            <h1>What We'll Do</h1>
          </header>
          <section>
            <p class="lead">With a focused vision&mdash;Communication, Collaboration, and Community&mdash;Team Nova wants to improve your experience at Waterloo. We've put together a set of realistic proposals that we're incredibly excited about.</p>

            <div class="item">
              <div class="circle">
                <div class="icon-wrap">
                  <i class="fa fa-comments-o fa-4x"></i>
                </div>
              </div>
              <div class="vertical">
                <h2>
                  <a href="<?php echo $plat_url; ?>#communication-pillar-make-it-easy-to-get-involved-with-an-event-calendar-and-involvement-compass">Make It Easy to Get Involved with an Event Calendar and Involvement Compass</a>
                </h2>
              </div>
            </div>
            <div class="item">
              <div class="circle">
                <div class="icon-wrap">
                  <i class="fa fa-cogs fa-4x"></i>
                </div>
              </div>
              <div class="vertical">
                <h2>
                  <a href="<?php echo $plat_url; ?>#collaboration-pillar-improve-mental-health-resources-on-campus">Improve Mental Health Resources on Campus</a>
                </h2>
              </div>
            </div>
            <div class="item">
              <div class="circle">
                <div class="icon-wrap">
                  <i class="fa fa-group fa-4x"></i>
                </div>
              </div>
              <div class="vertical">
                <h2>
                  <a href="<?php echo $plat_url; ?>#community-pillar-vote-on-new-student-space-by-february-2015">Vote on New Student Space by February 2015</a>
                </h2>
              </div>
            </div>

            <p class="lead">This is only a taste of what we plan to accomplish.</p>
            <p class="lead"><a href="<?php echo $plat_url; ?>" class="button">Read the Full Platform</a></p>
          </section>
        </article>
      </div>
    </div>
  </section>
</div>

<?php get_footer(); ?>
