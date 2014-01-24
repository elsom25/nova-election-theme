<?php
  // EXPECTS: $GLOBALS['category_name'] : STRING
?>

<?php
$args = array( 'internal_category' => $GLOBALS['category_name'], 'post_type' => 'tw_platform_item', 'posts_per_page' => -1 );
$loop = new WP_Query( $args );
if ( $loop->have_posts() ) :
?>
  <dl class="accordion" data-accordion>
    <?php
    while ( $loop->have_posts() ) : $loop->the_post();
      ob_start();
      the_permalink();
      $permalink = ob_get_clean();

      $slug = explode( '/', $permalink );
      $slug = $GLOBALS['category_name'] . '-' . $slug[count($slug)-2];
    ?>
      <dd>
        <a href="#<?php echo $slug; ?>"><?php the_title(); ?></a>
        <div id="<?php echo $slug; ?>" class="content">
          <?php the_content(); ?>
        </div>
      </dd>
    <?php
    endwhile;
    ?>
  </dl>
<?php endif; ?>
