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
    <div class="sponsors">
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
    </div>
    <div class="site-info">
        <?php
        /* translators: %s: CMS name, i.e. WordPress. */
        printf(esc_html__('All rights reserved U3A %1$s Inc. © %2$s'), 'Townsville', "2018");
        ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<button class="button-top">Back to Top</button>

</body>

</html>
