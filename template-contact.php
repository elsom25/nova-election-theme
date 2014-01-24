<?php
/**
 * Template Name: Contact
 *
 * @package Election
 */

get_header(); ?>
<div class="static-page team">
<?php get_template_part( 'template-static-header' ); ?>

<header class="page-header vertical-wrap">
  <div class="row">
    <div class="small-12 columns">
      <div class="vertical">
        <h1>Contact</h1>
        <ul class="inline-list">
          <li><a href="//fb.me/GoForNova"><i class="fa fa-facebook"></i> Facebook</a></li>
          <li class="hide-for-small-only">|</li>
          <li><a href="//twitter.com/GoForNova"><i class="fa fa-twitter"></i> @GoForNova</a></li>
          <li class="hide-for-small-only">|</li>
          <li><a href="mailto:vote@gofornova.com"><i class="fa fa-envelope"></i> vote@gofornova.com</a></li>
        </ul>
        <p class="lead">We’re always looking to start a conversation on our platform, campus life, or new ideas!</p>
      </div>
    </div>
  </div>
</header>
<div class="content fancy-dark" role="main">
  <section class="root-content">
    <div class="row">
      <div class="large-6 columns">
        <article class="pres" id="pres">
          <header>
            <img src="<?php bloginfo('template_url'); ?>/img/profile_jesse.jpg" />
          </header>
          <section>
            <h1>
              Jesse McGinnis
            </h1>
            <h2>
              Presidential Candidate
            </h2>
            <ul class="inline-list">
              <li><a href="//twitter.com/elsom25"><i class="fa fa-twitter"></i> @elsom25</a></li>
              <li class="hide-for-small-only">|</li>
              <li><a href="mailto:jesse.c.mcginnis@uwaterloo.ca"><i class="fa fa-envelope"></i> jesse.c.mcginnis</a></li>
            </ul>
          </section>
        </article>
      </div>
      <div class="large-6 columns">
        <article class="vpof" id="vpof">
          <header>
            <img src="<?php bloginfo('template_url'); ?>/img/profile_elizabeth.jpg" />
          </header>
          <section>
            <h1>
              Elizabeth McFaul
            </h1>
            <h2>
              VP Ops &amp; Finance Candidate
            </h2>
            <ul class="inline-list">
              <li><a href="//twitter.com/lagunacarta"><i class="fa fa-twitter"></i> @lagunacarta</a></li>
              <li class="hide-for-small-only">|</li>
              <li><a href="mailto:elmcfaul@uwaterloo.ca"><i class="fa fa-envelope"></i> elmcfaul</a></li>
            </ul>
          </section>
        </article>
      </div>
    </div>
    <div class="row">
      <div class="large-6 columns">
        <article class="vped" id="vped">
          <header>
            <img src="<?php bloginfo('template_url'); ?>/img/profile_luke.jpg" />
          </header>
          <section>
            <h1>
              Luke MacIntosh
            </h1>
            <h2>
              VP Education Candidate
            </h2>
            <ul class="inline-list">
              <li><a href="//twitter.com/LMMcItosh"><i class="fa fa-twitter"></i> @LMMcItosh</a></li>
              <li class="hide-for-small-only">|</li>
              <li><a href="mailto:lmmcintosh@uwaterloo.ca"><i class="fa fa-envelope"></i> lmmcintosh</a></li>
            </ul>
          </section>
        </article>
      </div>
      <div class="large-6 columns">
        <article class="vpin" id="vpin">
          <header>
            <img src="<?php bloginfo('template_url'); ?>/img/profile_anjali.jpg" />
          </header>
          <section>
            <h1>
              Anjali Gopal
            </h1>
            <h2>
              VP Internal Candidate
            </h2>
            <ul class="inline-list">
              <li><a href="//twitter.com/anjali_gopal"><i class="fa fa-twitter"></i> @anjali_gopal</a></li>
              <li class="hide-for-small-only">|</li>
              <li><a href="mailto:anjali.gopal@uwaterloo.ca"><i class="fa fa-envelope"></i> anjali.gopal</a></li>
            </ul>
          </section>
        </article>
      </div>
    </div>
  </section>
</div>

</div><!--/.static-page-->
<?php get_footer(); ?>
