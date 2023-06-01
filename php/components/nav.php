<?php require_once "php/config/config.php";?>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <!-- Game Logo -->
    <a class="navbar-brand" href="#">
      <img src="src/img/castle.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
    </a>
    <!-- Navbar toggler for mobile -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar content -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav">
        <li class="nav-item">
          <a class="btn btn-secondary button-margin" href="#game" role="button"><?php echo $language['nav1'] ?></a>
        </li>
        <li class="nav-item">
          <a class="btn btn-secondary button-margin" href="#us" role="button"><?php echo $language['nav2'] ?></a>
        </li>
        <li class="nav-item">
        <a class="btn btn-secondary button-margin" href="#team" role="button"><?php echo $language['nav3'] ?></a>
        </li>
      </ul>
      <ul class="nav right-nav">
        <li class="nav-item">
          <a class="btn btn-light button-margin" href="src/file/cdc.docx" role="button" download><?php echo $language['download'] ?></a>
        </li>
        <!-- French and english button switch -->
        <li class="nav-item button-margin">
          <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <!-- Having the default buttons shown -->
            <?php if (array_key_exists('french', $_POST) == false && array_key_exists('english', $_POST) == false){ ?>
              <form method="post">
                <input type="submit" class="btn-check" name="french" id="french" autocomplete="off">
                <label class="btn btn-light" for="french">FR</label>

                <input type="submit" class="btn-check" name="english" id="english" autocomplete="off">
                <label class="btn btn-outline-light" for="english">EN</label>
              </form>
            <!-- Showing french as selected if the website is in french -->
            <?php } else if (array_key_exists('french', $_POST)){ ?>
              <form method="post">
                <input type="submit" class="btn-check" name="french" id="french" autocomplete="off">
                <label class="btn btn-light" for="french">FR</label>

                <input type="submit" class="btn-check" name="english" id="english" autocomplete="off">
                <label class="btn btn-outline-light" for="english">EN</label>
              </form>
            <!-- Showing english as selected if the website is in english -->
            <?php } else if (array_key_exists('english', $_POST)){ ?>
              <form method="post">
              <input type="submit" class="btn-check" name="french" id="french" autocomplete="off">
              <label class="btn btn-outline-light" for="french">FR</label>

              <input type="submit" class="btn-check" name="english" id="english" autocomplete="off">
              <label class="btn btn-light" for="english">EN</label>
            </form>
            <?php } ?>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>