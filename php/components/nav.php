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
          <button href="#game" type="button" class="btn btn-secondary button-margin"><?php echo $language['nav1'] ?></button>
        </li>
        <li class="nav-item">
          <button href="#us" type="button" class="btn btn-secondary button-margin"><?php echo $language['nav2'] ?></button>
        </li>
        <li class="nav-item">
          <button href="#team" type="button" class="btn btn-secondary button-margin"><?php echo $language['nav3'] ?></button>
        </li>
      </ul>
      <ul class="nav right-nav">
        <li class="nav-item">
          <button href="#" type="button" class="btn btn-light button-margin"><?php echo $language['download'] ?></button>
        </li>
        <li class="nav-item">
          <div class="btn-group button-margin" role="group" aria-label="Basic radio toggle button group">
            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
            <label class="btn btn-outline-light" for="btnradio1">FR</label>

            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
            <label class="btn btn-outline-light" for="btnradio2">EN</label>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>