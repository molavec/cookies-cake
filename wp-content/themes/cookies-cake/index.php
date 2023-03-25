<?php 
$PAGE_TITLE = 'COOKIE CAKE'
?>

<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $PAGE_TITLE ?></title>
</head>
<body>
  <!-- HEADER -->
  <header class='header'>
    <div class="container bg-red-600">
      <div class="logo-header">
        <img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="" width="200">
        <p>header</p>
      </div>
      
      <div class="main-menu">
        <?php 
          $args = array(
            'theme_location' => 'menu-principal',
            'container' => 'nav',
            'container_class' => 'main-menu-container'
          );

          wp_nav_menu($args);
        ?>
      </div>

    </div>
    
  </header>

  <!-- MAIN -->
  <main>
    <?php
      while( have_posts() ): the_post();
        the_title();
        the_content();
      endwhile;
    ?>
  </main>

  <!-- FOOTER -->
  <footer></footer>
</body>
</html>
