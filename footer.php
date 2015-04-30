  <?php
    $menuParameters = array(
      'container'       => false,
      'echo'            => false,
      'items_wrap'      => '%3$s',
      'theme_location'  =>'main-menu',
      'walker'          => new MV_Cleaner_Walker_Nav_Menu(),
      'depth'           => 0,
    );
  ?>

  <footer id="footer" class="bg green">
    <div class="fs-row">
      <div class="fs-cell fs-lg-6 fs-md-6 fs-sm-3">
        <div class="logo-wrapper"><img src="/assets/img/gr-logo-dark.png" class="logo" /></div>
        <p class="tagline emphasized">Connecting California-based cannabis patients and doctors online</p>
      </div>
      <div class="fs-cell fs-lg-6 fs-md-6 fs-sm-3 text-right">
        <menu>
          <?php echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' ); ?>
        </menu>
        <a href="/doctors/join" class="underline join">JOIN OUR TEAM OF PHYSICIANS</a>
      </div>

      <div class="lower fs-cell fs-lg-12 fs-md-6 fs-sm-3">
        <div class="fs-row">
          <div class="fs-cell fs-lg-6 fs-md-3 fs-sm-3 text-right">
            <p>© 2015 GreenRecs</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div><!--Wrapper-->

<?php wp_footer(); ?>
</body>
</html>