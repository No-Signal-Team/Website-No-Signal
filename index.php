<?php require_once "php/config/config.php"; ?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">

        <!-- IMPORT FONTS -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

        <!-- BOOTSTRAP CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <!-- NOTRE CSS -->
        <link rel="stylesheet" href="src/css/style.css">

        <!-- LE NAVIGATEUR SAIT QUE LE SITE EST OPTIMISE SUR MOBILE -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- DESCRIPTION POUR LE NAVIGATEUR -->
        <meta name="description" content="">

        <!-- CONFIGURATION DE LA TAB DANS LE NAVIGATEUR -->
        <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/90/90394.png">
        <title>No Signal</title>
    </head>

    <?php
    $sql = "SELECT * FROM language";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $language = $pre->fetch(PDO::FETCH_ASSOC);
    ?>

    <body>

        <?php require "php/components/nav.php"; ?>

        <?php if ((isset($_POST['email'])) || (isset($_POST["sign"]))){
            require_once "php/queries/newsletter.php";  
        } else if (isset($_SESSION['newsletter_error'])){ ?>
        <!-- Error Alert -->
        <div class="alert alert-danger alert-dismissible fade show alert-fixed">
            <strong>Error !</strong> <?php echo $_SESSION['newsletter_error']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <?php } else if (isset($_SESSION['success'])){ ?>
            <!-- Success Alert -->
            <div class="alert alert-success alert-dismissible fade show alert-fixed">
            <strong>Success !</strong> <?php echo $_SESSION['success']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        <?php } ?>

        <div id="home" class="main">
                <video autoPlay loop muted id='video'>
                    <source src='src/video/castle.mp4' type='video/mp4'/>
                </video>
                <div class="text-center content">
                    <h1>NO SIGNAL</h1>
                    <h2><?php echo $language['promo'] ?></h2>
                    <p class="content-color"><?php echo $language['description'] ?></p>
                    <button type="button" class="btn btn-light btn-lg"><iconify-icon inline icon="majesticons:arrow-up-circle" width="20"></iconify-icon> <?php echo $language['button'] ?></button>
                </div>
        </div>

        <div id="game">
            <h3 class="sub-titles"><?php echo $language['nav1'] ?></h3>
            <div class="game"></div>
        </div>

        <div id="us">
            <h3 class="sub-titles"><?php echo $language['nav2'] ?></h3>
            <div class="us"></div>
        </div>

        <div id="team">
            <div class="team row">
                <div class="col">
                    <h3 class="team-title"><?php echo $language['nav3'] ?></h3>
                    <h4 class="team-subt"><?php echo $language['teamsub'] ?></h4>
                </div>
                <div class="col">
                    <img class="team-img" src="https://fivestarexperiences.com.au/wp-content/uploads/2018/04/Happy-team.jpg" alt="team"/>
                </div>
            </div>
        </div>

        <?php require "php/components/footer.php"; ?>

        <!-- JQUERY -->
        <script src="script/jquery.min.js"></script>
        <!-- BOOTSRAP JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <!-- ICONIFY -->
        <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
        <!-- NOTRE JS -->
        <script src="src/script/script.js"></script>
        
    </body>
</html>