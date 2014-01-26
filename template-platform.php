<?php
/**
 * Template Name: Platform
 *
 * @package Election
 */

get_header(); ?>
<div class="static-page platform">
<?php get_template_part( 'template-static-header' ); ?>

<header class="page-header vertical-wrap">
  <div class="row">
    <div class="small-12 columns">
      <div class="vertical">
        <h1>Platform</h1>
        <p class="lead">
          Feds needs to build on the incredibly active student community here at Waterloo. With a focused vision—Communication, Collaboration, and Community—Team Nova has the experience, passion, and love of working with students to make these ideas a reality.
        </p>
      </div>
    </div>
  </div>
</header>
<div class="content fancy-dark" role="main">
  <section class="root-content">
    <div class="row">
      <div class="small-12 columns">
        <dl id="platform-filters" class="sub-nav">
          <dt>Display:</dt>
          <dd class="active"><a href="#pillar" data-filter="#by-pillar">By Pillar</a></dd>
          <dd><a href="#portfolio" data-filter="#by-portfolio">By Portfolio</a></dd>
        </dl>
      </div>
    </div>
    <div id="by-pillar" class="row platform-collection">
      <div class="small-12 columns">
        <article class="communication" id="communication">
          <header>
            <div class="content">
              <h1><i class="fa fa-comments-o"></i> Communication</h1>
              <p>
                Team Nova believes that communication is one of Feds' biggest flaws. We'll focus on creating dialogue and interaction, help you find what's happening on campus, and make sure that the information you need is at your fingertips.
              </p>
            </div>
          </header>
          <section>
            <div class="row">
              <div class="small-12 columns">
                <?php
                $category_name = 'communication-pillar';
                include( TEMPLATEPATH . '/template-platform-accordion.php' );
                ?>
              </div>
            </div>
          </section>
        </article>

        <article class="collaboration" id="collaboration">
          <header>
            <div class="content">
              <h1><i class="fa fa-cogs"></i> Collaboration</h1>
              <p>
                Team Nova wants collaborate more with you—the talented students of Waterloo. We'll focus on supporting your success, creating new and exciting opportunities, and supporting student groups.
              </p>
            </div>
          </header>
          <section>
            <div class="row">
              <div class="small-12 columns">
                <?php
                $category_name = 'collaboration-pillar';
                include( TEMPLATEPATH . '/template-platform-accordion.php' );
                ?>
              </div>
            </div>
          </section>
        </article>

        <article class="community" id="community">
          <header>
            <div class="content">
              <h1><i class="fa fa-group"></i> Community</h1>
              <p>
                Team Nova expects the community at Waterloo to meet your needs. We'll focus on improving the physical space, building better community relationships, and making campus a safer place.</p>
            </div>
          </header>
          <section>
            <div class="row">
              <div class="small-12 columns">
                <?php
                $category_name = 'community-pillar';
                include( TEMPLATEPATH . '/template-platform-accordion.php' );
                ?>
              </div>
            </div>
          </section>
        </article>

      </div>
    </div>
    <div id="by-portfolio" class="row platform-collection" style="display:none;">
      <div class="small-12 columns">
        <div data-alert class="alert-box radius text-center">
          Projects duplicate due to overlap of exec responsiblities
          <a href="#" class="close">&times;</a>
        </div>
        <article class="pres radius" id="pres">
          <header>
            <div class="row">
              <div class="large-6 columns">
                <img src="<?php bloginfo('template_url'); ?>/img/profile_jesse.jpg" />
              </div>
              <div class="large-6 columns">
                <h1>
                  President
                </h1>
                <blockquote>
                  I want to create a culture at Feds that not only welcomes students, but encourages and celebrates their involvement in our organization.
                  <cite>Jesse McGinnis</cite>
                </blockquote>
              </div>
            </div>
          </header>
          <section>
            <div class="row">
              <div class="small-12 columns">
                <?php
                $category_name = 'pres';
                include( TEMPLATEPATH . '/template-platform-accordion.php' );
                ?>
              </div>
            </div>
          </section>
        </article>
        <article class="vped" id="vped">
          <header>
            <div class="row">
              <div class="large-6 columns">
                <img src="<?php bloginfo('template_url'); ?>/img/profile_luke.jpg" />
              </div>
              <div class="large-6 columns">
                <h1>
                  Vice-President Education
                </h1>
                <p>
                  Lorem ipsum In voluptate eiusmod aute minim et consequat pariatur dolore deserunt esse ea in exercitation aute laboris veniam ullamco incididunt dolore commodo do sit fugiat
                </p>
              </div>
            </div>
          </header>
          <section>
            <div class="row">
              <div class="small-12 columns">
                <?php
                $category_name = 'vped';
                include( TEMPLATEPATH . '/template-platform-accordion.php' );
                ?>
              </div>
            </div>
          </section>
        </article>
        <article class="vpin" id="vpin">
          <header>
            <div class="row">
              <div class="large-6 columns">
                <img src="<?php bloginfo('template_url'); ?>/img/profile_anjali.jpg" />
              </div>
              <div class="large-6 columns">
                <h1>
                  Vice-President Internal
                </h1>
                <p>
                  Lorem ipsum In voluptate eiusmod aute minim et consequat pariatur dolore deserunt esse ea in exercitation aute laboris veniam ullamco incididunt dolore commodo do sit fugiat
                </p>
              </div>
            </div>
          </header>
          <section>
            <div class="row">
              <div class="small-12 columns">
                <?php
                $category_name = 'vpin';
                include( TEMPLATEPATH . '/template-platform-accordion.php' );
                ?>
              </div>
            </div>
          </section>
        </article>
        <article class="vpof" id="vpof">
          <header>
            <div class="row">
              <div class="large-6 columns">
                <img src="<?php bloginfo('template_url'); ?>/img/profile_elizabeth.jpg" />
              </div>
              <div class="large-6 columns">
                <h1>
                  Vice-President Operations &amp; Finance
                </h1>
                <p>
                  Lorem ipsum In voluptate eiusmod aute minim et consequat pariatur dolore deserunt esse ea in exercitation aute laboris veniam ullamco incididunt dolore commodo do sit fugiat
                </p>
              </div>
            </div>
          </header>
          <section>
            <div class="row">
              <div class="small-12 columns">
                <?php
                $category_name = 'vpof';
                include( TEMPLATEPATH . '/template-platform-accordion.php' );
                ?>
              </div>
            </div>
          </section>
        </article>
      </div>
    </div>
  </section>
</div>

</div><!--/.static-page-->
<?php get_footer(); ?>
