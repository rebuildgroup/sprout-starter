<nav class="navbar navbar-expand-lg" role="navigation">
  <div class="collapse navbar-collapse" id="navbarPrimary">
    <?php // To keep mx-auto , ml-auto, mr-auto functioning properly, you must add 'container' => false to wp_nav_menu function // ?>
    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu( array(
          'theme_location'  => 'primary_navigation',
          'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => false,
          'menu_class'      => 'nav navbar-nav ml-auto',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
      endif;
    ?>
  </div>
</nav>
