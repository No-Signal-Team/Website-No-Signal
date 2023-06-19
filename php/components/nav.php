<nav class="navbar navbar-expand-lg bebas-neue">
  <div class="container-fluid">
    <!-- Game Logo -->
    <a class="navbar-brand" href="#home">
      <img src="src/img/logo.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-center">
    </a>
    <!-- Navbar content -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav">
        <li class="nav-item">
          <a class="btn btn-secondary btn-lg button-margin" href="#Site-Jeu" role="button"><?php echo $language['nav1'] ?></a>
        </li>
        <li class="nav-item">
          <a class="btn btn-secondary btn-lg button-margin" href="#us" role="button"><?php echo $language['nav2'] ?></a>
        </li>
        <li class="nav-item">
          <a class="btn btn-secondary btn-lg button-margin" href="#team" role="button"><?php echo $language['nav3'] ?></a>
        </li>
      </ul>
      <ul class="nav right-nav">
        <li class="nav-item">
          <a class="btn btn-light btn-lg button-margin" href="src/file/cdc.docx" role="button" download><?php echo $language['download'] ?></a>
        </li>
        <!-- French and english button switch -->
        <li class="nav-item button-margin lang-button">
          <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <!-- Having the default buttons shown -->
            <?php if (array_key_exists('french', $_POST) == false && array_key_exists('english', $_POST) == false){ ?>
              <form method="post">
                <input type="submit" class="btn-check" name="french" id="french" autocomplete="off">
                <label class="btn btn-light btn-lg" for="french">FR</label>

                <input type="submit" class="btn-check" name="english" id="english" autocomplete="off">
                <label class="btn btn-outline-light btn-lg" for="english">EN</label>
              </form>
            <!-- Showing french as selected if the website is in french -->
            <?php } else if (array_key_exists('french', $_POST)){ ?>
              <form method="post">
                <input type="submit" class="btn-check" name="french" id="french" autocomplete="off">
                <label class="btn btn-light btn-lg" for="french">FR</label>

                <input type="submit" class="btn-check" name="english" id="english" autocomplete="off">
                <label class="btn btn-outline-light btn-lg" for="english">EN</label>
              </form>
            <!-- Showing english as selected if the website is in english -->
            <?php } else if (array_key_exists('english', $_POST)){ ?>
              <form method="post">
              <input type="submit" class="btn-check" name="french" id="french" autocomplete="off">
              <label class="btn btn-outline-light btn-lg" for="french">FR</label>

              <input type="submit" class="btn-check" name="english" id="english" autocomplete="off">
              <label class="btn btn-light btn-lg" for="english">EN</label>
            </form>
            <?php } ?>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>