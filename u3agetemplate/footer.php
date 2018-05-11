<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package U3AgeTemplate
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">

    <!--this area contains the containers for holding site map info-->
    <!--
    <section class="site-map">
        <div class="container-1">
            <?php
            //printf(esc_html__('Site maps 1 for here'));
            ?>
        </div>

        <div class="container-2">
            <?php
            //printf(esc_html__('Site maps 2 for here'));
            ?>
        </div>

        <div class="container-3">
            <?php
            //printf(esc_html__('Site maps 3 for here'));
            ?>
        </div>
    </section>
    -->

    <!--this area contains the container for holding the sponsors-->
    <?php if( get_theme_mod( 'hide_sponsor_button', 'show' ) == 'show' ) : ?>
    <section class="sponsors">
        <?php
        printf(esc_html__('Sponsors of U3A'));
        ?>
        <div class="sponsor-images-container">
            <?php
            echo '<a href=\"footer.php" id="Cota-img" title="Cota Queensland" alt="Cota Queensland"><img src="https://sites.google.com/site/u3anetworkqld/_/rsrc/1468856246500/home/LifeTec%20RGB%20current%20use.jpg?height=122&width=320"></a>';
            echo '<a href=\"footer.php" id="LifeTec-img" title="LifeTec" alt="LifeTec"><img src="https://sites.google.com/site/u3anetworkqld/_/rsrc/1496389600536/home/COTA%20Qld.png"></a>';
            echo '<a href=\"footer.php" id="JCU-img" title="JCU" alt="JCU"><img src="https://www.jcu.edu.au/__data/assets/image/0013/4441/jcua-logo.png"></a>';
            ?>
        </div>
    </section>
    <?php endif ?>

    <!--this area contains the container for holding the site copyright and location-->
    <div class="site-info">
        <?php
        /* translators: %s: CMS name, i.e. WordPress. */
        /*<a href="" class='button'><?php echo get_theme_mod( 'footer_copyright_text') ?></a href="">*/
        printf(get_theme_mod( 'footer_copyright_text'));
        ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<button class="button-top">Back to Top</button>

</body>

</html>
