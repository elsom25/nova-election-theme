<!--[Begin] Navigation-->
<div class="contain-to-grid fixed main-nav">
  <?php get_template_part( 'template-nav-cta' ); ?>
  <nav class="top-bar" data-topbar>

    <ul class="title-area">
      <li class="name">
        <h1><a href="<?php echo site_url( '/' ); ?>"><?php bloginfo('name'); ?></a></h1>
      </li>
      <li class="toggle-topbar menu-icon">
        <a href="#">
          <span>Menu</span>
        </a>
      </li>
    </ul>

    <section class="top-bar-section">
      <ul class="left">
        <?php
        $menu_params = array(
          'theme_location' => 'primary',
          'container' => false,
          'items_wrap' => '%3$s'
        );
        wp_nav_menu( $menu_params );
        ?>
      </ul>
      <ul class="right">
        <li>
          <a href="//fb.me/GoForNova" rel="external">
            <span class="show-for-medium-up"><i class="fa fa-facebook"></i></span>
            <span class="show-for-small-only"> Facebook &raquo;</span>
          </a>
        </li>
        <li>
          <a href="//twitter.com/GoForNova" rel="external">
            <span class="show-for-medium-up"><i class="fa fa-twitter"></i></span>
            <span class="show-for-small-only"> Twitter &raquo;</span>
          </a>
        </li>
      </ul>
    </section>

  </nav>
</div>
<!--[End] Navigation-->
