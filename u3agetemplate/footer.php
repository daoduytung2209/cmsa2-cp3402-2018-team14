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
    <!--this area contains the container for holding the site copyright and location as well as a link to the sponsors-->

    <div class="site-sponsors">
        <a href="<?php echo get_theme_mod( 'footer_url_id') ?>" class='URL-button'> <h1><?php echo get_theme_mod( 'footer_link_text') ?></h1></a href="">
    </div>

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

<!-- this area contains code for the button as well as showing and hiding the button-->
<?php if( get_theme_mod( 'hide_scroll_button', 'show' ) == 'show' ) : ?>
<button class="button-top">Back to Top</button>
<?php endif ?>

</body>

</html>
