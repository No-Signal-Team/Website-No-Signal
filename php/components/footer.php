<?php require_once "php/config/config.php";?>

<footer class="footer pt-4">
    <div class="row py-2">
        <div class="col-lg-6 col-sm-12 text-center">
            <!-- Our social medias -->
            <h4 class="bebas-neue"><?php echo $language['socials'] ?></h4>
            <ul class="socials">
                <li><a href="#insta"><iconify-icon inline icon="mdi:youtube"></iconify-icon> Youtube</a></li>
                <li><a href="#twitter"><iconify-icon inline icon="mdi:twitter"></iconify-icon> Twitter</a></li>
                <li><a href="#discord"><iconify-icon inline icon="mdi:instagram"></iconify-icon> Instagram</a></li>
            </ul>
        </div>
        
        <div class="col-lg-6 col-sm-12 text-center">
            <!-- Newsletter form -->
            <form method="post" action="index.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><?php echo $language['newsletter'] ?></label>
                    <input name="email" type="email" class="form-control input-params" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <button type="submit" class="btn btn-light" name="sign"><?php echo $language['submit'] ?></button>
            </form>
        </div>

        <!-- Copyright -->
        <p class="text-center p-4">© 2023 No Signal Studio. All Right Reserved</p>
    </div>
</footer>