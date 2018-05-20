<?php
/**
 * U3AgeTemplate Theme Customizer
 *
 * @package U3AgeTemplate
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function u3agetemplate_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector' => '.site-title a',
            'render_callback' => 'u3agetemplate_customize_partial_blogname',
        ));
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector' => '.site-description',
            'render_callback' => 'u3agetemplate_customize_partial_blogdescription',
        ));
    }

    /**
     * Custom Customizer Customizations
     */

    $wp_customize->add_setting('theme_bg_color', array(
        'default' => '#002254',
        'transport' => 'postMessage',
        'type' => 'theme_mod',
        'sanitize_callback' => 'sanitize_hex_color'
    ));

    //control, for header and footer background color
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'theme_bg_color', array(
                'label' => __('Header and Footer background color', 'u3agetemplate'),
                'section' => 'colors',
                'settings' => 'theme_bg_color'
            )
        )
    );

    //footer options customiser tab
    $wp_customize->add_section('footer_options',
        array(
            'title' => __('Footer Options', 'u3agetemplate'),
            'priority' => 95,
            'capability' => 'edit_theme_options'

        ));


    //adding setting for footer link text area
    $wp_customize->add_setting('footer_link_text', array(
        'default' => 'Default Text For Footer Section',
    ));

    $wp_customize->add_control('footer_link_text', array(
        'label' => 'Footer Text Here',
        'section' => 'footer_options',
        'type' => 'textarea',
    ));


    //adding setting for footer text area
    $wp_customize->add_setting('footer_copyright_text', array(
        'default' => 'Default Text For Footer Section',
    ));

    $wp_customize->add_control('footer_copyright_text', array(
        'label' => 'Footer Text Here',
        'section' => 'footer_options',
        'type' => 'textarea',
    ));


    //footer option to hide scroll button
    $wp_customize->add_setting('hide_scroll_button', array(
        'default' => false,
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('hide_scroll_button', array(
        'label' => 'Button Display',
        'section' => 'footer_options',
        'settings' => 'hide_scroll_button',
        'type' => 'radio',
        'choices' => array(
            'show' => 'Show Sponsors',
            'hide' => 'Hide Sponsors',
        ),
    ));

    //footer custom url text
    $wp_customize->add_setting( 'footer_url_id', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'footer_sanitize_url',
    ) );

    $wp_customize->add_control( 'footer_url_id', array(
        'type' => 'url',
        'section' => 'footer_options', // Add a default or your own section
        'label' => __( 'Custom Footer URL' ),
        'description' => __( 'Enter a custom URL input' ),
        'input_attrs' => array(
            'placeholder' => __( 'http://www.google.com' ),
        ),
    ) );

}

add_action('customize_register', 'u3agetemplate_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function u3agetemplate_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function u3agetemplate_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function u3agetemplate_customize_preview_js()
{
    wp_enqueue_script('u3agetemplate-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20151215', true);
}

add_action('customize_preview_init', 'u3agetemplate_customize_preview_js');


if (!function_exists('u3agetemplate_header_style')) :
    /**
     * Styles the header image and text displayed on the blog.
     *
     * @see u3agetemplate_custom_header_setup().
     */
    function u3agetemplate_header_style()
    {
        $header_text_color = get_header_textcolor();
        $header_bg_color = get_theme_mod('theme_bg_color');
        /*
         * If no custom options for text are set, let's bail.
         * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
         */
        //if (get_theme_support('custom-header', 'default-text-color') != $header_text_color) {
        if (HEADER_TEXTCOLOR != $header_text_color) {
            // If we get this far, we have custom styles. Let's do this.
            ?>
            <style type="text/css">
                <?php
                // Has the text been hidden?
                if ( ! display_header_text() ) :
                    ?>
                .site-title,
                .site-description {
                    position: absolute;
                    clip: rect(1px, 1px, 1px, 1px);
                }

                <?php
                // If the user has set a custom color for the text use that.
                else :
                    ?>
                .site-title a,
                .site-description {
                    color: #<?php echo esc_attr( $header_text_color ); ?>;
                }

                <?php endif; ?>
            </style>
            <?php
        }
        if ('#002254' != $header_bg_color) { ?>
            <style type="text/css">
                .site-header,
                .site-footer {
                    background-color: <?php echo esc_attr( $header_bg_color); ?>;
                }
            </style>
            <?php
        }
    }
endif;

function footer_sanitize_url( $url ) {
    return esc_url_raw( $url );
}
