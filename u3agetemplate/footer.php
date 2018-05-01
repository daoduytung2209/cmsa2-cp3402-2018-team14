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
    <div class="site-info">
        <?php
        /* translators: %s: CMS name, i.e. WordPress. */
        printf(esc_html__('All rights reserved U3A %1$s Inc. © %2$s'), 'Townsville', "2018");
        ?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<button class="button-top">↑</button>

</body>

</html>
