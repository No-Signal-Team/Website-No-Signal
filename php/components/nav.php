<?php require_once "php/config/config.php";

$sql = "SELECT * FROM language";
$pre = $pdo->prepare($sql);
$pre->execute();
$language = $pre->fetch(PDO::FETCH_ASSOC);
?>

<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://cdn-icons-png.flaticon.com/512/90/90394.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
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
          <a class="btn btn-light button-margin" href="#" role="button"><?php echo $language['download'] ?></a>
        </li>
        <li class="nav-item button-margin">
          <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
              <input type="radio" class="btn-check" name="radio" id="french" autocomplete="off" checked>
              <label class="btn btn-outline-light" for="french">FR</label>

              <input type="radio" class="btn-check" name="radio" id="english" autocomplete="off">
              <label class="btn btn-outline-light" for="english">EN</label>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>