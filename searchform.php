<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url(); ?>/">
  <fieldset>
    <legend>Search</legend>

    <div class="row">
      <div class="small-12 columns">
        <div class="row collapse">
          <div class="small-10 columns">
            <input type="text" value="<?php echo esc_html($s, 1); ?>" name="s" id="s" placeholder="What are you looking for?">
          </div>
          <div class="small-2 columns">
            <input class="button postfix" type="submit" id="searchsubmit" value="Search">
          </div>
        </div>
    </div>
  </fieldset>
</form>
