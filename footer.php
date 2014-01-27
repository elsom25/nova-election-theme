<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Election
 */
?>

  <footer class="site-footer">
    <div class="row">
      <div class="small-12 columns">
        <section class="fancy">
          <div class="site-navigation">
            <a href="http://eepurl.com/MzpNX" rel="external"><i class="fa fa-bullhorn"></i> Get a reminder to vote&mdash;sign-up now!</a>
          </div>
        </section>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <section class="social fancy">
          <div class="site-navigation">
            <a href="//fb.me/GoForNova"><i class="fa fa-facebook"></i> Facebook</a>
            <a href="//twitter.com/GoForNova"><i class="fa fa-twitter"></i> Twitter</a>
            <a href="mailto:vote@gofornova.com"><i class="fa fa-envelope"></i> Email</a>
          </div>
        </section>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <section class="fancy">
          <a href="#html" id="to-top"><i class="fa fa-chevron-up"></i> To Top</a>
        </section>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <section class="simple">
          <ul>
            <li><a href="#" data-reveal-id="acknowledgeModal">Acknowledgments</a></li>
            <li><a href="#" data-reveal-id="voteModal">Vote</a></li>
            <li><a href="<?php bloginfo('rss2_url'); ?>">RSS &rsaquo;</a></li>
            <li><a href="<?php echo site_url( '/contact' ); ?>">Contact Us &rsaquo;</a></li>
            <li><a href="//feds.ca/elections/" rel="external">Feds Election Site &raquo;</a></li>
          </ul>
        </section>
      </div>
    </div>
  </footer>

  <!-- Reveal Modals begin -->
  <div id="voteModal" class="reveal-modal medium title-bar-modal" data-reveal>
    <header>
      <h2>Vote <span class="ir-nova">Team Nova</span> Now!</h2>
    </header>
    <section>
      <p class="lead text-center">Communication, Collaboration, and Community.</p>
      <ul class="no-bullet candidates">
        <li><i class="fa fa-check-square-o"></i> <strong>Jesse McGinnis</strong>&mdash;President</li>
        <li><i class="fa fa-check-square-o"></i> <strong>Luke McIntosh</strong>&mdash;VP Education</li>
        <li><i class="fa fa-check-square-o"></i> <strong>Anjali Gopal</strong>&mdash;VP Internal</li>
        <li><i class="fa fa-check-square-o"></i> <strong>Elizabeth McFaul</strong>&mdash;VP Operations & Finance</li>
      </ul>
      <div class="text-center">
        <p><strong>Voting is taking place February 11-13; Quick and Simple!</strong></p>
        <a href="//vote.feds.uwaterloo.ca/ballot/" class="button radius large vote">Vote <?php bloginfo('name'); ?> Now!</a>
        <p><small>If you're having any difficulties with voting, or experience any other problems relating to the election, <a href="mailto:elections@feds.ca" target="_blank">please message the Electoral Officer</a>.</small></p>
      </div>
    </section>
    <a class="close-reveal-modal">&#215;</a>
  </div>

  <div id="acknowledgeModal" class="reveal-modal medium title-bar-modal" data-reveal>
    <header>
      <h2>Acknowledgments.</h2>
    </header>
    <section>
      <p class="lead">We are a team of many more than just 4.</a></p>
      <p>To those who made this campaign possible, we salute you!</p>
      <ul class="disc">
        <li><strong>Charles Kuno</strong>&mdash;Lead Campaign Manager</li>
        <li><strong>Michael Leung</strong>&mdash;Campaign Manager</li>
        <li><strong>Riddhi Dastidar</strong>&mdash;Campaign Manager</li>
        <li><strong>Andrew Fisher</strong>&mdash;Campaign Review &amp; Strategist</li>
        <li><strong>Mary Hayhow</strong>&mdash;Class Talks</li>
        <li><strong>Chris Vandevelde</strong>&mdash;Social Media</li>

        <li><strong>Kevin Nause</strong>&mdash;Photographer</li>
        <li><strong>Evan &amp; Fay Brotherston</strong>&mdash;Filmographers</li>
        <li><strong>Austin Fisher</strong>&mdash;Video Equipment</li>

        <li><strong>Dia Rahman</strong>&mdash;Graphics</li>
        <li><strong>Lots of lovely people</strong>&mdash;who ran around campus putting up posters</li>
      </ul>
    </section>
    <a class="close-reveal-modal">&#215;</a>
  </div>
  <!-- Reveal Modals end -->

  <?php wp_footer(); ?>
</body>
</html>
