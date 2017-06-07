<header class="banner">
  
  <!-- <nav class="nav-primary">
    <?php /*
    if (has_nav_menu('primary_navigation')) :
      wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
    endif; */
    ?>
  </nav> -->

  <nav class="navbar navbar-inverse bg-inverse navbar-toggleable-md">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleContainer" aria-controls="navbarsExampleContainer" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>

      <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleContainer">
        <ul class="navbar-nav">
          <li class="nav-item"> <a class="nav-link" href="#home">Home</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#contact">contact</a> </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<div id="home" class="hero">
  <h1>Websites voor iedereen.</h1>
  <h3>Mooie websites hoeven niet duur te zijn.</h3>
</div>
