<nav class="navbar navbar-dark bg-dark bebas-neue">
  <div class="container-fluid">
   <!-- Game Logo -->
   <a class="navbar-brand" href="#home">
      <img src="src/img/logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
    </a>
    <!-- Toggle button on mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar content -->
    <div class="collapse navbar-collapse" id="navbarToggler">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link mobile-nav-link" href="#Site-Jeu" role="button"><?php echo $language['nav1'] ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link mobile-nav-link" href="#us" role="button"><?php echo $language['nav2'] ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link mobile-nav-link" href="#team" role="button"><?php echo $language['nav3'] ?></a>
        </li>
        <!-- French and english button switch -->
        <li class="nav-item">
          <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <!-- Having the default buttons shown -->
            <?php if (array_key_exists('french', $_POST) == false && array_key_exists('english', $_POST) == false){ ?>
              <form method="post">
                <input type="submit" class="btn-check" name="french" id="french" autocomplete="off">
                <label class="btn btn-secondary btn btn-lg" for="french">FR</label>

                <input type="submit" class="btn-check" name="english" id="english" autocomplete="off">
                <label class="btn btn-outline-secondary btn btn-lg" for="english">EN</label>
              </form>
            <!-- Showing french as selected if the website is in french -->
            <?php } else if (array_key_exists('french', $_POST)){ ?>
              <form method="post">
                <input type="submit" class="btn-check" name="french" id="french" autocomplete="off">
                <label class="btn btn-secondary btn btn-lg" for="french">FR</label>

                <input type="submit" class="btn-check" name="english" id="english" autocomplete="off">
                <label class="btn btn-outline-secondary btn btn-lg" for="english">EN</label>
              </form>
            <!-- Showing english as selected if the website is in english -->
            <?php } else if (array_key_exists('english', $_POST)){ ?>
              <form method="post">
              <input type="submit" class="btn-check" name="french" id="french" autocomplete="off">
              <label class="btn btn-outline-secondary btn btn-lg" for="french">FR</label>

              <input type="submit" class="btn-check" name="english" id="english" autocomplete="off">
              <label class="btn btn-secondary btn btn-lg" for="english">EN</label>
            </form>
            <?php } ?>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>