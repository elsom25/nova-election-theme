<?php get_search_form(); ?>

<fieldset>
  <legend>Recent Posts</legend>

  <div class="row">
    <div class="small-12 columns">
      <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
    </div>
  </div>
</fieldset>

<?php // Only show the widget if site has multiple categories. ?>
<?php if ( election_categorized_blog() ) : ?>
<fieldset>
  <legend><?php _e( 'Most Used Categories', 'election' ); ?></legend>

  <div class="row">
    <div class="small-12 columns">
      <div class="widget">
        <ul>
        <?php
          wp_list_categories( array(
            'orderby'    => 'count',
            'order'      => 'DESC',
            'show_count' => 1,
            'title_li'   => '',
            'number'     => 10,
          ) );
        ?>
        </ul>
      </div>
    </div>
  </div>
</fieldset>
<?php endif; ?>
