<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

if(is_front_page()){


?>

<!doctype html>

<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <div class="page-wrapper wrapper wrapper--wide" role="document">
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>

      <div class="content row">
        <main class="main">




          <?php  include Wrapper\template_path(); ?>
        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
      </div><!-- /.content -->

    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
    </div><!-- /.wrap -->

  </body>
</html>

<?php }else{ ?>
<?php  include Wrapper\template_path(); }?>
