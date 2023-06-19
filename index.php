<?php require_once "php/config/config.php";?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">

        <!-- Import fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barlow&family=Raleway:wght@900&display=swap" rel="stylesheet">

        <!-- Bootsrap css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <!-- Our css -->
        <link rel="stylesheet" href="src/css/style.css">

        <!-- Browser knows the website is optimised for mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Browser's description of the website -->
        <meta name="description" content="Website for the horror game by No Signal Studio">

        <!-- Tab configuration in browser -->
        <link rel="icon" href="src/img/logo.png">
        <title>No Signal</title>
    </head>

    <body>

    <div id="video-container">
        <video id="intro-video" autoplay muted>
            <source src="src/video/FINAL.mp4" type="video/mp4">
        </video>

        <div id="content-container">
            <header>
                <?php 
                // Call the function to switch language
                require "php/queries/lang.php";

                // Call the fonction to display the navbar on mobile or desktop
                function isMobile() {
                    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
                }

                if (isMobile()) {
                    require "php/components/navMobile.php";
                } else {
                    require "php/components/nav.php";
                }

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
            </header>

            <main>
                <!-- Main section -->
                <div id="home" class="tv-img">
                    <div class="text-center content content-mobile">
                        <h1 class="bebas-neue">NO SIGNAL</h1>
                        <h2 class="bebas-neue"><?php echo $language['promo'] ?></h2>
                        <p class="content-color"><?php echo $language['description'] ?></p>
                        <button type="button" class="btn btn-light btn-lg bebas-neue"><iconify-icon inline icon="majesticons:arrow-up-circle" width="20"></iconify-icon> <?php echo $language['button'] ?></button>
                    </div> 
                </div>

                <!-- Section about the news -->
                <div id="news">
                    <div class="row align-items-center news-space">
                        <div class="col-lg-6 col-sm-12"><h3 class="sub-titles bebas-neue"><?php echo $language['actus'] ?></h3></div>
                        <div class="col-lg-6 col-sm-12 d-flex justify-content-end"><p class="rec raleway"><span class="dot"></span> REC</p></div>
                    </div>
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6 col-sm-12">
                            <img class="news-img news-img-space" src="src/img/placeholder.png" alt="">
                        </div>
                        <div class="col-lg-4 col-sm-12 news-list">
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h4 class="card-text"><?php echo $language['actu1'] ?></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="src/img/placeholder.png" class="img-fluid rounded-end" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h4 class="card-title"><?php echo $language['actu2'] ?></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="src/img/placeholder.png" class="img-fluid rounded-end" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h4 class="card-title"><?php echo $language['actu3'] ?></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="src/img/placeholder.png" class="img-fluid rounded-end" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3" style="max-width: 540px;">
                                <div class="row g-0">
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h4 class="card-title"><?php echo $language['actu4'] ?></h4>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <img src="src/img/placeholder.png" class="img-fluid rounded-end" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>

                <!-- Section about us -->
                <div id="us">
                    <div class="row">
                        <div class="col"><h3 class="us-title bebas-neue"><?php echo $language['nav2'] ?></h3></div>
                        <div class="col d-flex justify-content-end"><img class="us-img" src="src/img/gopro.png" alt=""></div>
                    </div>
                    <h4 class="text-center pillar-title"><?php echo $language['piliers'] ?></h4>
                    <div class="row us-sapce">
                        <div class="col text-center">
                            <img class="img-pilier" src="src/img/placeholder.png" alt=""><br>
                            <span class="badge text-bg-dark">1</span>
                            <h5 class="font-weight-bold"><?php echo $language['pilier1'] ?></h5>
                            <p><?php echo $language['pdesc1'] ?></p>
                        </div>
                        <div class="col text-center">
                            <img class="img-pilier" src="src/img/placeholder.png" alt=""><br>
                            <span class="badge text-bg-dark">2</span>
                            <h5 class="font-weight-bold"><?php echo $language['pilier2'] ?></h5>
                            <p><?php echo $language['pdesc2'] ?></p>
                        </div>
                        <div class="col text-center">
                            <img class="img-pilier" src="src/img/placeholder.png" alt=""><br>
                            <span class="badge text-bg-dark">3</span>
                            <h5 class="font-weight-bold"><?php echo $language['pilier3'] ?></h5>
                            <p><?php echo $language['pdesc3'] ?></p>
                        </div>
                        <div class="col text-center">
                            <img class="img-pilier" src="src/img/placeholder.png" alt=""><br>
                            <span class="badge text-bg-dark">4</span>
                            <h5 class="font-weight-bold"><?php echo $language['pilier4'] ?></h5>
                            <p><?php echo $language['pdesc4'] ?></p>
                        </div>
                    </div>
                </div>

                <!-- Section about the team -->
                <div id="team">
                    <div class="row team">
                        <div class="col-lg-6 col-sm-12">
                            <h3 class="team-title bebas-neue"><?php echo $language['nav3'] ?></h3>
                            <h4 class="team-subt bebas-neue"><?php echo $language['teamsub'] ?></h4>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <img class="team-img" src="src/img/team.jpg" alt="team"/>
                        </div>
                    </div>
                </div>

                <!-- Newsletter Section -->
                <div id="#newsletter">
                    <div class="row mb-4">
                        <div class="col-lg-6 col-md-12">
                            <h3 class="newsletter-title bebas-neue"><?php echo $language['newsletter'] ?></h3>
                            <div class="d-flex justify-content-center">
                                <img class="newsletter-img m-4" src="src/img/placeholder.png" alt="">
                            </div>
                        </div>
                        <div class="col d-flex-column justify-content-center align-self-center">
                            <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit debitis autem illum quos optio non aliquid. Ad sequi voluptates quisquam ullam vel deleniti consectetur pariatur in, soluta veniam, unde nostrum!</p>
                            <form method="post" action="index.php">
                                <div class="row m-3">
                                    <div class="col">
                                        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-secondary" name="sign"><?php echo $language['submit'] ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Call the fonction for the footer -->
                <?php require "php/components/footer.php"; ?>
            </main>
        </div>
    </div>

    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!-- Iconify -->
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <!-- Our js -->
    <script src="src/script/script.js"></script>
        
    </body>
</html>