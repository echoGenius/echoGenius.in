<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <!-- <h1 class="text-light"><a href="index.html"><span>Test</span></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="?page=home"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
          <?php
          // Assume you have a parameter named 'page' in the URL
          $activePage = isset($_GET['page']) ? $_GET['page'] : 'home';
          ?>
        <ul>
          <li><a class=" <?= ($activePage == 'home') ? 'active':''; ?> " href="?page=home">Home</a></li>
          <li><a class=" <?= ($activePage == 'about') ? 'active':''; ?> " href="?page=about">About</a></li>
          <!-- <li><a class=" <?= ($activePage == 'products') ? 'active':''; ?> " href="?page=products">Products</a></li> -->
          <!-- <li><a class=" <?= ($activePage == 'services') ? 'active':''; ?> " href="?page=services">Services</a></li> -->
          <li><a class=" <?= ($activePage == 'team') ? 'active':''; ?> " href="?page=team">Team</a></li>
          <!-- <li><a class=" <?= ($activePage == 'blog') ? 'active':''; ?> " href="?page=blog">Blog</a></li> -->
          <li><a class=" <?= ($activePage == 'contact') ? 'active':''; ?> " href="?page=contact">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>