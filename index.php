<?php require_once "php/config/config.php";?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">

        <!-- Import fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

        <!-- Bootsrap css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <!-- Our css -->
        <link rel="stylesheet" href="src/css/style.css">

        <!-- Browser knows the website is optimised for mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Browser's description of the website -->
        <meta name="description" content="Website for the horror game by No Signal Studio">

        <!-- Tab configuration in browser -->
        <link rel="icon" href="src/img/castle.png">
        <title>No Signal</title>
    </head>

    <body>

        <?php 
        
        // Call the function to switch language
        require "php/queries/lang.php";

        // Call the fonction for the navbar
        require "php/components/nav.php";

        // Verification for the newsletter's form
        if ((isset($_POST['email'])) || (isset($_POST["sign"]))){
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

        <!-- Main section -->
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

        <!-- Section about the game -->
        <div id="game">
            <h3 class="sub-titles"><?php echo $language['nav1'] ?></h3>
            <div class="game"></div>
        </div>

        <!-- Section about us -->
        <div id="us">
            <h3 class="sub-titles"><?php echo $language['nav2'] ?></h3>
            <div class="us"></div>
        </div>

        <!-- Section about the team -->
        <div id="team">
            <div class="team row">
                <div class="col">
                    <h3 class="team-title"><?php echo $language['nav3'] ?></h3>
                    <h4 class="team-subt"><?php echo $language['teamsub'] ?></h4>
                </div>
                <div class="col">
                    <img class="team-img" src="src/img/team.jpg" alt="team"/>
                </div>
            </div>
        </div>

        <!-- Call the fonction for the footer -->
        <?php require "php/components/footer.php"; ?>

        <!-- Import Jquery -->
        <script src="script/jquery.min.js"></script>
        <!-- Bootstrap js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <!-- Iconify -->
        <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
        <!-- Our js -->
        <script src="src/script/script.js"></script>
        
    </body>
</html>