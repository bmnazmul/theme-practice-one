
<?php
/*
*Theme footer section
*It will be visible on everypage
*/

?>



<!-- Footer section started -->
    <footer id="footer area">
        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <?php dynamic_sidebar('Footer-1'); ?>
                    </div>
                    <div class="col-md-4">
                        <?php dynamic_sidebar('Footer-2'); ?>
                    </div>
                    <div class="col-md-4">
                        <?php dynamic_sidebar('Footer-3'); ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="copy_right_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p><?php echo get_theme_mod('sm_copyright_section'); ?></p>
                    </div>
                </div>
            </div>
        </section>
    </footer>

<?php wp_footer(); ?>
</body>
</html>