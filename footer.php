</div>
</div>
<footer class="container-fluid py-4 mt-2">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mt-2">
                <div class="container">
                    <h4 class="logo-container" >
                        <img src="<?php echo get_header_image(); ?>" alt="<?php echo bloginfo('blogname'); ?>" class="footer-logo" />
                    </h4>
                    <h4 class="title" >Online Test Series WordPress Plugin</h4>
                    <p class="text" >test subititlte</p>
                </div>
            </div>

            <div class="col-md-3 px-2 mt-2">
                <h6 class="footer-title" >Widget 1</h6>
                <?php
                    wp_nav_menu(
                        array(
                            "theme_location"=>"widget-1",
                            "menu_class"=>"nav"
                        )
                    ); 
                ?>
            </div>

            <div class="col-md-3 px-2 mt-2">
                <h6 class="footer-title" >Widget 2</h6>
                <?php
                    wp_nav_menu(
                        array(
                            "theme_location"=>"widget-2",
                            "menu_class"=>"nav"
                        )
                    ); 
                ?>
            </div>

            <div class="col-md-3 px-2 mt-2">
                <h6 class="footer-title" >Widget 3</h6>
                <?php
                    wp_nav_menu(
                        array(
                            "theme_location"=>"widget-3",
                            "menu_class"=>"nav"
                        )
                    ); 
                ?>
            </div>
            
        </div>
    <p class="text text-center m-0 pt-5">Copyright 2023,  All Rights Reserved.</p>
    </div>
    <script src="<?php echo get_template_directory_uri()."/assets/js/nav.js"; ?>"></script>
</footer>
</body>
</html>