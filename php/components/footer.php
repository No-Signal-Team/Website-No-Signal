<?php require_once "php/config/config.php";?>

<footer class="footer pt-4 secondary">
    <div class="row py-2">
        <div class="col-4 text-center">
            <!-- Our social medias -->
            <h4><?php echo $language['socials'] ?></h4>
            <ul class="socials">
                <li><a href="#insta"><iconify-icon icon="mdi:instagram"></iconify-icon> Intagram</a></li>
                <li><a href="#twitter"><iconify-icon icon="mdi:twitter"></iconify-icon> Twitter</a></li>
                <li><a href="#discord"><iconify-icon icon="ic:baseline-discord"></iconify-icon> Discord</a></li>
            </ul>
        </div>
        
        <div class="col-4 offset-4 text-center">
            <!-- Newsletter form -->
            <form class="input-width" method="post" action="index.php">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><?php echo $language['newsletter'] ?></label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <button type="submit" class="btn btn-light" name="sign"><?php echo $language['submit'] ?></button>
            </form>
        </div>

        <!-- Copyright -->
        <p class="text-center pt-4">No Signal © 2023 Copyright</p>
    </div>
</footer>