<?php
function busicare_typography_customizer($wp_customize) {

    $wp_customize->add_panel('busicare_typography_setting', array(
        'priority' => 990,
        'capability' => 'edit_theme_options',
        'title' => esc_html__('Typography Settings', 'busicare'),
    ));


    $font_size = array();
    for ($i = 9; $i <= 100; $i++) {
        $font_size[$i] = $i;
    }

    $line_height = array();
    for($i=1; $i<=100; $i++)
    {           
        $line_height[$i] = $i;
    }

    $font_family = busicare_typo_fonts();

// Header typography section
    $wp_customize->add_section('busicare_header_typography', array(
        'title' => esc_html__('Header', 'busicare'),
        'panel' => 'busicare_typography_setting',
        'priority' => 2,
    ));
// Enable/Disable Header typography section
    $wp_customize->add_setting(
            'enable_header_typography',
            array(
                'default' => false,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_checkbox',
    ));

    $wp_customize->add_control('enable_header_typography', array(
        'label' => esc_html__('Enable Header Typography', 'busicare'),
        'section' => 'busicare_header_typography',
        'setting' => 'enable_header_typography',
        'type' => 'checkbox'
    ));

    class WP_Sitetitle_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Site Title', 'busicare'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'site_title',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Sitetitle_Customize_Control($wp_customize, 'site_title', array(
                'section' => 'busicare_header_typography',
                'setting' => 'site_title',
                    ))
    );
    $wp_customize->add_setting(
            'site_title_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control('site_title_fontfamily', array(
        'label' => esc_html__('Font family', 'busicare'),
        'section' => 'busicare_header_typography',
        'setting' => 'site_title_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));
    $wp_customize->add_setting(
            'site_title_fontsize',
            array(
                'default' => 36,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'absint',
            )
    );
    $wp_customize->add_control('site_title_fontsize', array(
        'label' => esc_html__('Font size (px)', 'busicare'),
        'section' => 'busicare_header_typography',
        'setting' => 'site_title_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));    
    $wp_customize->add_setting(
        'site_title_line_height',
        array(
            'default'           =>  39,
            'capability'        =>  'edit_theme_options',
            'sanitize_callback' =>  'absint',
        )   
    );
    $wp_customize->add_control('site_title_line_height', array(
            'label' => esc_html__('Line height (px)','busicare'),
            'section' => 'busicare_header_typography',
            'setting' => 'site_title_line_height',
            'type'    =>  'select',
            'choices'=>$line_height,
    ));

    class WP_Sitetagline_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Site Tagline', 'busicare'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'site_tagline',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Sitetagline_Customize_Control($wp_customize, 'site_tagline', array(
                'section' => 'busicare_header_typography',
                'setting' => 'site_tagline',
                    ))
    );
    $wp_customize->add_setting(
            'site_tagline_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control('site_tagline_fontfamily', array(
        'label' => esc_html__('Font family', 'busicare'),
        'section' => 'busicare_header_typography',
        'setting' => 'site_tagline_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));
    $wp_customize->add_setting(
            'site_tagline_fontsize',
            array(
                'default' => 20,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'absint',
            )
    );
    $wp_customize->add_control('site_tagline_fontsize', array(
        'label' => esc_html__('Font size (px)', 'busicare'),
        'section' => 'busicare_header_typography',
        'setting' => 'site_tagline_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));
    $wp_customize->add_setting(
        'site_tagline_line_height',
        array(
            'default'           =>  30,
            'capability'        =>  'edit_theme_options',
            'sanitize_callback' =>  'absint',
        )   
    );
    $wp_customize->add_control('site_tagline_line_height', array(
            'label' => esc_html__('Line height (px)','busicare'),
            'section' => 'busicare_header_typography',
            'setting' => 'site_tagline_line_height',
            'type'    =>  'select',
            'choices'=>$line_height,
    ));

    class WP_Menus_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Menus', 'busicare'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'menus_title',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Menus_Customize_Control($wp_customize, 'menus_title', array(
                'section' => 'busicare_header_typography',
                'setting' => 'menus_title',
                    ))
    );
    $wp_customize->add_setting(
            'menu_title_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control('menu_title_fontfamily', array(
        'label' => esc_html__('Font family', 'busicare'),
        'section' => 'busicare_header_typography',
        'setting' => 'menu_title_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));
    $wp_customize->add_setting(
            'menu_title_fontsize',
            array(
                'default' => 15,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'absint',
            )
    );
    $wp_customize->add_control('menu_title_fontsize', array(
        'label' => esc_html__('Font size (px)', 'busicare'),
        'section' => 'busicare_header_typography',
        'setting' => 'menu_title_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));
    $wp_customize->add_setting(
        'menu_line_height',
        array(
            'default'           =>  30,
            'capability'        =>  'edit_theme_options',
            'sanitize_callback' =>  'absint',
        )   
    );
    $wp_customize->add_control('menu_line_height', array(
            'label' => esc_html__('Line height (px)','busicare'),
            'section' => 'busicare_header_typography',
            'setting' => 'menu_line_height',
            'type'    =>  'select',
            'choices'=>$line_height,
    ));


    class WP_SubMenus_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Submenus', 'busicare'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'submenus_title',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_SubMenus_Customize_Control($wp_customize, 'submenus_title', array(
                'section' => 'busicare_header_typography',
                'setting' => 'submenus_title',
                    ))
    );
    $wp_customize->add_setting(
            'submenu_title_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control('submenu_title_fontfamily', array(
        'label' => esc_html__('Font family', 'busicare'),
        'section' => 'busicare_header_typography',
        'setting' => 'submenu_title_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));
    $wp_customize->add_setting(
            'submenu_title_fontsize',
            array(
                'default' => 15,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'absint',
            )
    );
    $wp_customize->add_control('submenu_title_fontsize', array(
        'label' => esc_html__('Font size (px)', 'busicare'),
        'section' => 'busicare_header_typography',
        'setting' => 'submenu_title_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));
    $wp_customize->add_setting(
        'submenu_line_height',
        array(
            'default'           =>  30,
            'capability'        =>  'edit_theme_options',
            'sanitize_callback' =>  'absint',
        )   
    );
    $wp_customize->add_control('submenu_line_height', array(
            'label' => esc_html__('Line height (px)','busicare'),
            'section' => 'busicare_header_typography',
            'setting' => 'submenu_line_height',
            'type'    =>  'select',
            'choices'=>$line_height,
    ));
    

// Slider title typography section
    $wp_customize->add_section('busicare_slider_typography', array(
        'title' => esc_html__('Slider', 'busicare'),
        'panel' => 'busicare_typography_setting',
        'priority' => 4,
    ));
// Enable/Disable Slider title typography section
    $wp_customize->add_setting(
            'enable_slider_title_typography',
            array(
                'default' => false,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_checkbox',
    ));
    $wp_customize->add_control('enable_slider_title_typography', array(
        'label' => esc_html__('Enable Slider Typography', 'busicare'),
        'section' => 'busicare_slider_typography',
        'setting' => 'enable_slider_title_typography',
        'type' => 'checkbox'
    ));
    $wp_customize->add_setting(
            'slider_title_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control('slider_title_fontfamily', array(
        'label' => esc_html__('Font family', 'busicare'),
        'section' => 'busicare_slider_typography',
        'setting' => 'slider_title_fontfamily',
        'type' => 'select',
        'choices' => $font_family,
    ));
    $wp_customize->add_setting(
            'slider_title_fontsize',
            array(
                'default' => 50,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'absint',
            )
    );
    $wp_customize->add_control('slider_title_fontsize', array(
        'label' => esc_html__('Font size (px)', 'busicare'),
        'section' => 'busicare_slider_typography',
        'setting' => 'slider_title_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));
    $wp_customize->add_setting(
        'slider_line_height',
        array(
            'default'           =>  85,
            'capability'        =>  'edit_theme_options',
            'sanitize_callback' =>  'absint',
        )   
    );
    $wp_customize->add_control('slider_line_height', array(
            'label' => esc_html__('Line height (px)','busicare'),
            'section' => 'busicare_slider_typography',
            'setting' => 'slider_line_height',
            'type'    =>  'select',
            'choices'=>$line_height,
    ));

   
// Section title typography section
    $wp_customize->add_section('busicare_section_typography', array(
        'title' => esc_html__('Homepage Sections', 'busicare'),
        'panel' => 'busicare_typography_setting',
        'priority' => 5,
    ));
// Enable/Disable Section title typography section
    $wp_customize->add_setting(
            'enable_section_title_typography',
            array(
                'default' => false,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_checkbox',
    ));

    $wp_customize->add_control('enable_section_title_typography', array(
        'label' => esc_html__('Enable Homepage Sections Typography', 'busicare'),
        'section' => 'busicare_section_typography',
        'setting' => 'enable_section_title_typography',
        'type' => 'checkbox'
    ));

    class WP_Section_Title_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Section Title', 'busicare'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'section_title',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Section_Title_Customize_Control($wp_customize, 'section_title', array(
                'section' => 'busicare_section_typography',
                'setting' => 'section_title',
                    ))
    );

    $wp_customize->add_setting(
            'section_title_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control('section_title_fontfamily', array(
        'label' => esc_html__('Font family', 'busicare'),
        'section' => 'busicare_section_typography',
        'setting' => 'section_title_fontfamily',
        'type' => 'select',
        'choices' => $font_family,
    ));
    $wp_customize->add_setting(
            'section_title_fontsize',
            array(
                'default' => 36,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'absint',
            )
    );
    $wp_customize->add_control('section_title_fontsize', array(
        'label' => esc_html__('Font size (px)', 'busicare'),
        'section' => 'busicare_section_typography',
        'setting' => 'section_title_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));
    $wp_customize->add_setting(
        'section_title_line_height',
        array(
            'default'           =>  54,
            'capability'        =>  'edit_theme_options',
            'sanitize_callback' =>  'absint',
        )   
    );
    $wp_customize->add_control('section_title_line_height', array(
            'label' => esc_html__('Line height (px)','busicare'),
            'section' => 'busicare_section_typography',
            'setting' => 'section_title_line_height',
            'type'    =>  'select',
            'choices'=>$line_height,
    ));

//    section sub-title typography
    class WP_Section_Sub_Title_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Section Sub-Title', 'busicare'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'section_subtitle',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Section_Sub_Title_Customize_Control($wp_customize, 'section_subtitle', array(
                'section' => 'busicare_section_typography',
                'setting' => 'section_subtitle',
                    ))
    );

    $wp_customize->add_setting(
            'section_subtitle_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control('section_subtitle_fontfamily', array(
        'label' => esc_html__('Font family', 'busicare'),
        'section' => 'busicare_section_typography',
        'setting' => 'section_subtitle_fontfamily',
        'type' => 'select',
        'choices' => $font_family,
    ));
    $wp_customize->add_setting(
            'section_subtitle_fontsize',
            array(
                'default' => 15,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'absint',
            )
    );
    $wp_customize->add_control('section_subtitle_fontsize', array(
        'label' => esc_html__('Font size (px)', 'busicare'),
        'section' => 'busicare_section_typography',
        'setting' => 'section_subtitle_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));
    $wp_customize->add_setting(
        'section_description_line_height',
        array(
            'default'           =>  30,
            'capability'        =>  'edit_theme_options',
            'sanitize_callback' =>  'absint',
        )   
    );
    $wp_customize->add_control('section_description_line_height', array(
            'label' => esc_html__('Line height (px)','busicare'),
            'section' => 'busicare_section_typography',
            'setting' => 'section_description_line_height',
            'type'    =>  'select',
            'choices'=>$line_height,
    ));
        
// Content typography section
    $wp_customize->add_section('busicare_content_typography', array(
        'title' => esc_html__('Content', 'busicare'),
        'panel' => 'busicare_typography_setting',
        'priority' => 6,
    ));
// Enable/Disable Content typography section
    $wp_customize->add_setting(
            'enable_content_typography',
            array(
                'default' => false,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_checkbox',
    ));

    $wp_customize->add_control('enable_content_typography', array(
        'label' => esc_html__('Enable Content Typography', 'busicare'),
        'section' => 'busicare_content_typography',
        'setting' => 'enable_content_typography',
        'type' => 'checkbox'
    ));

// h1 typography settings
    class WP_Content_H1_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Heading 1 (H1)', 'busicare'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'content_h1',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Content_H1_Customize_Control($wp_customize, 'content_h1', array(
                'section' => 'busicare_content_typography',
                'setting' => 'content_h1',
                    ))
    );
    $wp_customize->add_setting(
            'h1_typography_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control('h1_typography_fontfamily', array(
        'label' => esc_html__('Font family', 'busicare'),
        'section' => 'busicare_content_typography',
        'setting' => 'h1_typography_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));
    $wp_customize->add_setting(
            'h1_typography_fontsize',
            array(
                'default' => 36,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'absint',
            )
    );
    $wp_customize->add_control('h1_typography_fontsize', array(
        'label' => esc_html__('Font size (px)', 'busicare'),
        'section' => 'busicare_content_typography',
        'setting' => 'h1_typography_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));
    $wp_customize->add_setting(
        'h1_line_height',
        array(
            'default'           =>  54,
            'capability'        =>  'edit_theme_options',
            'sanitize_callback' =>  'absint',
        )   
    );
    $wp_customize->add_control('h1_line_height', array(
            'label' => esc_html__('Line height (px)','busicare'),
            'section' => 'busicare_content_typography',
            'setting' => 'h1_line_height',
            'type'    =>  'select',
            'choices'=>$line_height,
    ));
   
// h2 typography settings
    class WP_Content_H2_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Heading 2 (H2)', 'busicare'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'content_h2',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Content_H2_Customize_Control($wp_customize, 'content_h2', array(
                'section' => 'busicare_content_typography',
                'setting' => 'content_h2',
                    ))
    );
    $wp_customize->add_setting(
            'h2_typography_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control('h2_typography_fontfamily', array(
        'label' => __('Font family', 'busicare'),
        'section' => 'busicare_content_typography',
        'setting' => 'h2_typography_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));
    $wp_customize->add_setting(
            'h2_typography_fontsize',
            array(
                'default' => 30,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'absint',
            )
    );
    $wp_customize->add_control('h2_typography_fontsize', array(
        'label' => esc_html__('Font size (px)', 'busicare'),
        'section' => 'busicare_content_typography',
        'setting' => 'h2_typography_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));
    $wp_customize->add_setting(
        'h2_line_height',
        array(
            'default'           =>  45,
            'capability'        =>  'edit_theme_options',
            'sanitize_callback' =>  'absint',
        )   
    );
    $wp_customize->add_control('h2_line_height', array(
            'label' => esc_html__('Line height (px)','busicare'),
            'section' => 'busicare_content_typography',
            'setting' => 'h2_line_height',
            'type'    =>  'select',
            'choices'=>$line_height,
    ));
    
// h3 typography settings
    class WP_Content_H3_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Heading 3 (H3)', 'busicare'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'content_h3',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Content_H3_Customize_Control($wp_customize, 'content_h3', array(
                'section' => 'busicare_content_typography',
                'setting' => 'content_h3',
                    ))
    );
    $wp_customize->add_setting(
            'h3_typography_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control('h3_typography_fontfamily', array(
        'label' => esc_html__('Font family', 'busicare'),
        'section' => 'busicare_content_typography',
        'setting' => 'h3_typography_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));
    $wp_customize->add_setting(
            'h3_typography_fontsize',
            array(
                'default' => 24,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'absint',
            )
    );
    $wp_customize->add_control('h3_typography_fontsize', array(
        'label' => esc_html__('Font size (px)', 'busicare'),
        'section' => 'busicare_content_typography',
        'setting' => 'h3_typography_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));
    $wp_customize->add_setting(
        'h3_line_height',
        array(
            'default'           =>  36,
            'capability'        =>  'edit_theme_options',
            'sanitize_callback' =>  'absint',
        )   
    );
    $wp_customize->add_control('h3_line_height', array(
            'label' => esc_html__('Line height (px)','busicare'),
            'section' => 'busicare_content_typography',
            'setting' => 'h3_line_height',
            'type'    =>  'select',
            'choices'=>$line_height,
    ));
   
// h4 typography settings
    class WP_Content_H4_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Heading 4 (H4)', 'busicare'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'content_h4',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Content_H4_Customize_Control($wp_customize, 'content_h4', array(
                'section' => 'busicare_content_typography',
                'setting' => 'content_h4',
                    ))
    );
    $wp_customize->add_setting(
            'h4_typography_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control('h4_typography_fontfamily', array(
        'label' => esc_html__('Font family', 'busicare'),
        'section' => 'busicare_content_typography',
        'setting' => 'h4_typography_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));
    $wp_customize->add_setting(
            'h4_typography_fontsize',
            array(
                'default' => 20,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'absint',
            )
    );
    $wp_customize->add_control('h4_typography_fontsize', array(
        'label' => esc_html__('Font size (px)', 'busicare'),
        'section' => 'busicare_content_typography',
        'setting' => 'h4_typography_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));
    $wp_customize->add_setting(
        'h4_line_height',
        array(
            'default'           =>  30,
            'capability'        =>  'edit_theme_options',
            'sanitize_callback' =>  'absint',
        )   
    );
    $wp_customize->add_control('h4_line_height', array(
            'label' => esc_html__('Line height (px)','busicare'),
            'section' => 'busicare_content_typography',
            'setting' => 'h4_line_height',
            'type'    =>  'select',
            'choices'=>$line_height,
    ));


// h5 typography settings
    class WP_Content_H5_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Heading 5 (H5)', 'busicare'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'content_h5',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Content_H5_Customize_Control($wp_customize, 'content_h5', array(
                'section' => 'busicare_content_typography',
                'setting' => 'content_h5',
                    ))
    );
    $wp_customize->add_setting(
            'h5_typography_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control('h5_typography_fontfamily', array(
        'label' => esc_html__('Font family', 'busicare'),
        'section' => 'busicare_content_typography',
        'setting' => 'h5_typography_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));
    $wp_customize->add_setting(
            'h5_typography_fontsize',
            array(
                'default' => 20,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'absint',
            )
    );
    $wp_customize->add_control('h5_typography_fontsize', array(
        'label' => esc_html__('Font size (px)', 'busicare'),
        'section' => 'busicare_content_typography',
        'setting' => 'h5_typography_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));
    $wp_customize->add_setting(
        'h5_line_height',
        array(
            'default'           =>  24,
            'capability'        =>  'edit_theme_options',
            'sanitize_callback' =>  'absint',
        )   
    );
    $wp_customize->add_control('h5_line_height', array(
            'label' => esc_html__('Line height (px)','busicare'),
            'section' => 'busicare_content_typography',
            'setting' => 'h5_line_height',
            'type'    =>  'select',
            'choices'=>$line_height,
    ));

// h6 typography settings
    class WP_Content_H6_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Heading 6 (H6)', 'busicare'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'content_h6',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Content_H6_Customize_Control($wp_customize, 'content_h6', array(
                'section' => 'busicare_content_typography',
                'setting' => 'content_h6',
                    ))
    );
    $wp_customize->add_setting(
            'h6_typography_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control('h6_typography_fontfamily', array(
        'label' => esc_html__('Font family', 'busicare'),
        'section' => 'busicare_content_typography',
        'setting' => 'h6_typography_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));

    $wp_customize->add_setting(
            'h6_typography_fontsize',
            array(
                'default' => 14,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'absint',
            )
    );
    $wp_customize->add_control('h6_typography_fontsize', array(
        'label' => esc_html__('Font size (px)', 'busicare'),
        'section' => 'busicare_content_typography',
        'setting' => 'h6_typography_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));
    $wp_customize->add_setting(
        'h6_line_height',
        array(
            'default'           =>  21,
            'capability'        =>  'edit_theme_options',
            'sanitize_callback' =>  'absint',
        )   
    );
    $wp_customize->add_control('h6_line_height', array(
            'label' => esc_html__('Line height (px)','busicare'),
            'section' => 'busicare_content_typography',
            'setting' => 'h6_line_height',
            'type'    =>  'select',
            'choices'=>$line_height,
    ));

// Paragraph typography settings
    class WP_Content_p_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Paragraph', 'busicare'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'content_p',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Content_p_Customize_Control($wp_customize, 'content_p', array(
                'section' => 'busicare_content_typography',
                'setting' => 'content_p',
                    ))
    );
    $wp_customize->add_setting(
            'p_typography_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control('p_typography_fontfamily', array(
        'label' => esc_html__('Font family', 'busicare'),
        'section' => 'busicare_content_typography',
        'setting' => 'p_typography_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));
    $wp_customize->add_setting(
            'p_typography_fontsize',
            array(
                'default' => 15,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'absint',
            )
    );
    $wp_customize->add_control('p_typography_fontsize', array(
        'label' => esc_html__('Font size (px)', 'busicare'),
        'section' => 'busicare_content_typography',
        'setting' => 'p_typography_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));
    $wp_customize->add_setting(
        'p_line_height',
        array(
            'default'           =>  30,
            'capability'        =>  'edit_theme_options',
            'sanitize_callback' =>  'absint',
        )   
    );
    $wp_customize->add_control('p_line_height', array(
            'label' => esc_html__('Line height (px)','busicare'),
            'section' => 'busicare_content_typography',
            'setting' => 'p_line_height',
            'type'    =>  'select',
            'choices'=>$line_height,
    ));

// Button text typography settings
    class WP_Content_button_text_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Button Text', 'busicare'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'content_button_text',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Content_button_text_Customize_Control($wp_customize, 'content_button_text', array(
                'section' => 'busicare_content_typography',
                'setting' => 'content_button_text',
                    ))
    );
    $wp_customize->add_setting(
            'button_text_typography_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control('button_text_typography_fontfamily', array(
        'label' => esc_html__('Font family', 'busicare'),
        'section' => 'busicare_content_typography',
        'setting' => 'button_text_typography_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));

    $wp_customize->add_setting(
            'button_text_typography_fontsize',
            array(
                'default' => 15,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'absint',
            )
    );
    $wp_customize->add_control('button_text_typography_fontsize', array(
        'label' => esc_html__('Font size (px)', 'busicare'),
        'section' => 'busicare_content_typography',
        'setting' => 'button_text_typography_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));
    $wp_customize->add_setting(
        'button_line_height',
        array(
            'default'           =>  30,
            'capability'        =>  'edit_theme_options',
            'sanitize_callback' =>  'absint',
        )   
    );
    $wp_customize->add_control('button_line_height', array(
            'label' => esc_html__('Line height (px)','busicare'),
            'section' => 'busicare_content_typography',
            'setting' => 'button_line_height',
            'type'    =>  'select',
            'choices'=>$line_height,
    ));
    
// Blog Page/Archive/Single Post typography 
    $wp_customize->add_section('busicare_post_typography', array(
        'title' => esc_html__('Blog / Archive / Single Post', 'busicare'),
        'panel' => 'busicare_typography_setting',
        'priority' => 7,
    ));
// Enable/Disable Blog/Archive/Single Post typography
    $wp_customize->add_setting(
            'enable_post_typography',
            array(
                'default' => false,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_checkbox',
    ));

    $wp_customize->add_control('enable_post_typography', array(
        'label' => esc_html__('Enable Blog / Archive / Single Post Typography', 'busicare'),
        'section' => 'busicare_post_typography',
        'setting' => 'enable_post_typography',
        'type' => 'checkbox'
    ));
    $wp_customize->add_setting(
            'post-title_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control('post-title_fontfamily', array(
        'label' => esc_html__('Font family', 'busicare'),
        'section' => 'busicare_post_typography',
        'setting' => 'post-title_fontfamily',
        'type' => 'select',
        'choices' => $font_family,
    ));
    $wp_customize->add_setting(
            'post-title_fontsize',
            array(
                'default' => 36,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'absint',
            )
    );
    $wp_customize->add_control('post-title_fontsize', array(
        'label' => esc_html__('Font size (px)', 'busicare'),
        'section' => 'busicare_post_typography',
        'setting' => 'post-title_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));
    $wp_customize->add_setting(
        'post-title_line_height',
        array(
            'default'           =>  54,
            'capability'        =>  'edit_theme_options',
            'sanitize_callback' =>  'absint',
        )   
    );
    $wp_customize->add_control('post-title_line_height', array(
            'label' => esc_html__('Line height (px)','busicare'),
            'section' => 'busicare_post_typography',
            'setting' => 'post-title_line_height',
            'type'    =>  'select',
            'choices'=>$line_height,
    ));


// Shop Page typography 
    $wp_customize->add_section('busicare_shop_page_typography', array(
        'title' => esc_html__('Shop Page', 'busicare'),
        'panel' => 'busicare_typography_setting',
        'priority' => 9,
    ));
// Enable/Disable Shop Page typography
    $wp_customize->add_setting(
            'enable_shop_page_typography',
            array(
                'default' => false,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_checkbox',
    ));

    $wp_customize->add_control('enable_shop_page_typography', array(
        'label' => esc_html__('Enable Shop Page Typography', 'busicare'),
        'section' => 'busicare_shop_page_typography',
        'setting' => 'enable_shop_page_typography',
        'type' => 'checkbox'
    ));

// h1 typography settings
    class WP_Shop_Content_H1_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Heading 1 (H1)', 'busicare'); ?></h3>
            <p><?php esc_html_e('Only for product detail page', 'busicare'); ?></p>
            <?php
        }

    }

    $wp_customize->add_setting(
            'shop_content_h1',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Shop_Content_H1_Customize_Control($wp_customize, 'shop_content_h1', array(
                'section' => 'busicare_shop_page_typography',
                'setting' => 'shop_content_h1',
                    ))
    );
    $wp_customize->add_setting(
            'shop_h1_typography_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control('shop_h1_typography_fontfamily', array(
        'label' => esc_html__('Font family', 'busicare'),
        'section' => 'busicare_shop_page_typography',
        'setting' => 'shop_h1_typography_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));
    $wp_customize->add_setting(
            'shop_h1_typography_fontsize',
            array(
                'default' => 36,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'absint',
            )
    );
    $wp_customize->add_control('shop_h1_typography_fontsize', array(
        'label' => esc_html__('Font size (px)', 'busicare'),
        'section' => 'busicare_shop_page_typography',
        'setting' => 'shop_h1_typography_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));
    
    $wp_customize->add_setting(
        'shop_h1_line_height',
        array(
            'default'           =>  48,
            'capability'        =>  'edit_theme_options',
            'sanitize_callback' =>  'absint',
        )   
    );
    $wp_customize->add_control('shop_h1_line_height', array(
            'label' => esc_html__('Line height (px)','busicare'),
            'section' => 'busicare_shop_page_typography',
            'setting' => 'shop_h1_line_height',
            'type'    =>  'select',
            'choices'=>$line_height,
    ));

// h2 typography settings
    class WP_Shop_Content_H2_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Heading 2 (H2)', 'busicare'); ?></h3>
            <p><?php esc_html_e('Only for product title in Shop Page', 'busicare'); ?></p>
            <?php
        }

    }

    $wp_customize->add_setting(
            'shop_content_h2',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Shop_Content_H2_Customize_Control($wp_customize, 'shop_content_h2', array(
                'section' => 'busicare_shop_page_typography',
                'setting' => 'shop_content_h2',
                    ))
    );
    $wp_customize->add_setting(
            'shop_h2_typography_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control('shop_h2_typography_fontfamily', array(
        'label' => esc_html__('Font family', 'busicare'),
        'section' => 'busicare_shop_page_typography',
        'setting' => 'shop_h2_typography_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));
    $wp_customize->add_setting(
            'shop_h2_typography_fontsize',
            array(
                'default' => 18,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'absint',
            )
    );
    $wp_customize->add_control('shop_h2_typography_fontsize', array(
        'label' => esc_html__('Font size (px)', 'busicare'),
        'section' => 'busicare_shop_page_typography',
        'setting' => 'shop_h2_typography_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));
    $wp_customize->add_setting(
        'shop_h2_line_height',
        array(
            'default'           =>  30,
            'capability'        =>  'edit_theme_options',
            'sanitize_callback' =>  'absint',
        )   
    );
    $wp_customize->add_control('shop_h2_line_height', array(
            'label' => esc_html__('Line height (px)','busicare'),
            'section' => 'busicare_shop_page_typography',
            'setting' => 'shop_h2_line_height',
            'type'    =>  'select',
            'choices'=>$line_height,
    ));
   
// h3 typography settings
    class WP_Shop_Content_H3_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Heading 3 (H3)', 'busicare'); ?></h3>
            <p><?php esc_html_e('Only for Product checkout page', 'busicare'); ?></p>
            <?php
        }

    }

    $wp_customize->add_setting(
            'shop_content_h3',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Shop_Content_H3_Customize_Control($wp_customize, 'shop_content_h3', array(
                'section' => 'busicare_shop_page_typography',
                'setting' => 'shop_content_h3',
                    ))
    );
    $wp_customize->add_setting(
            'shop_h3_typography_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control('shop_h3_typography_fontfamily', array(
        'label' => esc_html__('Font family', 'busicare'),
        'section' => 'busicare_shop_page_typography',
        'setting' => 'shop_h3_typography_fontfamily',
        'type' => 'select',
        'choices' => $font_family
    ));
    $wp_customize->add_setting(
            'shop_h3_typography_fontsize',
            array(
                'default' => 24,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'absint',
            )
    );
    $wp_customize->add_control('shop_h3_typography_fontsize', array(
        'label' => esc_html__('Font size (px)', 'busicare'),
        'section' => 'busicare_shop_page_typography',
        'setting' => 'shop_h3_typography_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));
    $wp_customize->add_setting(
        'shop_h3_line_height',
        array(
            'default'           =>  36,
            'capability'        =>  'edit_theme_options',
            'sanitize_callback' =>  'absint',
        )   
    );
    $wp_customize->add_control('shop_h3_line_height', array(
            'label' => esc_html__('Line height (px)','busicare'),
            'section' => 'busicare_shop_page_typography',
            'setting' => 'shop_h3_line_height',
            'type'    =>  'select',
            'choices'=>$line_height,
    ));

// Sidebar typography section
    $wp_customize->add_section('busicare_sidebar_typography', array(
        'title' => esc_html__('Sidebar Widgets', 'busicare'),
        'panel' => 'busicare_typography_setting',
        'priority' => 10,
    ));
// Enable/Disable Sidebar typography section
    $wp_customize->add_setting(
            'enable_sidebar_typography',
            array(
                'default' => false,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_checkbox',
    ));

    $wp_customize->add_control('enable_sidebar_typography', array(
        'label' => esc_html__('Enable Sidebar Widgets Typography', 'busicare'),
        'section' => 'busicare_sidebar_typography',
        'setting' => 'enable_sidebar_typography',
        'type' => 'checkbox'
    ));

    class WP_Sidebar_Widget_title_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Sidebar Widget Title', 'busicare'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'sidebar_widget_title',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Sidebar_Widget_title_Customize_Control($wp_customize, 'sidebar_widget_title', array(
                'section' => 'busicare_sidebar_typography',
                'setting' => 'sidebar_widget_title',
                    ))
    );
    $wp_customize->add_setting(
            'sidebar_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control('sidebar_fontfamily', array(
        'label' => esc_html__('Font family', 'busicare'),
        'section' => 'busicare_sidebar_typography',
        'setting' => 'sidebar_fontfamily',
        'type' => 'select',
        'choices' => $font_family,
    ));
    $wp_customize->add_setting(
            'sidebar_fontsize',
            array(
                'default' => 24,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'absint',
            )
    );
    $wp_customize->add_control('sidebar_fontsize', array(
        'label' => esc_html__('Font size (px)', 'busicare'),
        'section' => 'busicare_sidebar_typography',
        'setting' => 'sidebar_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));
    $wp_customize->add_setting(
        'sidebar_line_height',
        array(
            'default'           =>  36,
            'capability'        =>  'edit_theme_options',
            'sanitize_callback' =>  'absint',
        )   
    );
    $wp_customize->add_control('sidebar_line_height', array(
            'label' => esc_html__('Line height (px)','busicare'),
            'section' => 'busicare_sidebar_typography',
            'setting' => 'sidebar_line_height',
            'type'    =>  'select',
            'choices'=>$line_height,
    ));
    
    class WP_Sidebar_Widget_content_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Sidebar Widget Content', 'busicare'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'sidebar_widget_content',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Sidebar_Widget_content_Customize_Control($wp_customize, 'sidebar_widget_content', array(
                'section' => 'busicare_sidebar_typography',
                'setting' => 'sidebar_widget_content',
                    ))
    );
    $wp_customize->add_setting(
            'sidebar_widget_content_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control('sidebar_widget_content_fontfamily', array(
        'label' => esc_html__('Font family', 'busicare'),
        'section' => 'busicare_sidebar_typography',
        'setting' => 'sidebar_widget_content_fontfamily',
        'type' => 'select',
        'choices' => $font_family,
    ));
    $wp_customize->add_setting(
            'sidebar_widget_content_fontsize',
            array(
                'default' => 15,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'absint',
            )
    );
    $wp_customize->add_control('sidebar_widget_content_fontsize', array(
        'label' => esc_html__('Font size (px)', 'busicare'),
        'section' => 'busicare_sidebar_typography',
        'setting' => 'sidebar_widget_content_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));
    $wp_customize->add_setting(
        'sidebar_widget_content_line_height',
        array(
            'default'           =>  30,
            'capability'        =>  'edit_theme_options',
            'sanitize_callback' =>  'absint',
        )   
    );
    $wp_customize->add_control('sidebar_widget_content_line_height', array(
            'label' => esc_html__('Line height (px)','busicare'),
            'section' => 'busicare_sidebar_typography',
            'setting' => 'sidebar_widget_content_line_height',
            'type'    =>  'select',
            'choices'=>$line_height,
    ));


// Footer Widgets typography section
    $wp_customize->add_section('busicare_widget_typography', array(
        'title' => esc_html__('Footer Widgets', 'busicare'),
        'panel' => 'busicare_typography_setting',
        'priority' => 11,
    ));
// Enable/Disable Footer Widgets typography section
    $wp_customize->add_setting(
            'enable_footer_widget_typography',
            array(
                'default' => false,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_checkbox',
    ));

    $wp_customize->add_control('enable_footer_widget_typography', array(
        'label' => esc_html__('Enable Footer Widgets Typography', 'busicare'),
        'section' => 'busicare_widget_typography',
        'setting' => 'enable_footer_widget_typography',
        'type' => 'checkbox'
    ));

    class WP_Footer_Widget_title_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Footer Widget Title', 'busicare'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'footer_widget_title',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Footer_Widget_title_Customize_Control($wp_customize, 'footer_widget_title', array(
                'section' => 'busicare_widget_typography',
                'setting' => 'footer_widget_title',
                    ))
    );
    $wp_customize->add_setting(
            'footer_widget_title_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control('footer_widget_title_fontfamily', array(
        'label' => esc_html__('Font family', 'busicare'),
        'section' => 'busicare_widget_typography',
        'setting' => 'footer_widget_title_fontfamily',
        'type' => 'select',
        'choices' => $font_family,
    ));
    $wp_customize->add_setting(
            'footer_widget_title_fontsize',
            array(
                'default' => 24,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'absint',
            )
    );
    $wp_customize->add_control('footer_widget_title_fontsize', array(
        'label' => esc_html__('Font size (px)', 'busicare'),
        'section' => 'busicare_widget_typography',
        'setting' => 'footer_widget_title_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));
    $wp_customize->add_setting(
        'footer_widget_title_line_height',
        array(
            'default'           =>  36,
            'capability'        =>  'edit_theme_options',
            'sanitize_callback' =>  'absint',
        )   
    );
    $wp_customize->add_control('footer_widget_title_line_height', array(
            'label' => esc_html__('Line height (px)','busicare'),
            'section' => 'busicare_widget_typography',
            'setting' => 'footer_widget_title_line_height',
            'type'    =>  'select',
            'choices'=>$line_height,
    ));

    
    class WP_Footer_Widget_content_Customize_Control extends WP_Customize_Control {

        public $type = 'new_menu';

        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <h3><?php esc_html_e('Footer Widget Content', 'busicare'); ?></h3>
            <?php
        }

    }

    $wp_customize->add_setting(
            'footer_widget_content',
            array(
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control(new WP_Footer_Widget_content_Customize_Control($wp_customize, 'footer_widget_content', array(
                'section' => 'busicare_widget_typography',
                'setting' => 'footer_widget_content',
                    ))
    );
    $wp_customize->add_setting(
            'footer_widget_content_fontfamily',
            array(
                'default' => 'Open Sans',
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'busicare_sanitize_text',
            )
    );
    $wp_customize->add_control('footer_widget_content_fontfamily', array(
        'label' => esc_html__('Font family', 'busicare'),
        'section' => 'busicare_widget_typography',
        'setting' => 'footer_widget_content_fontfamily',
        'type' => 'select',
        'choices' => $font_family,
    ));
    $wp_customize->add_setting(
            'footer_widget_content_fontsize',
            array(
                'default' => 15,
                'capability' => 'edit_theme_options',
                'sanitize_callback' => 'absint',
            )
    );
    $wp_customize->add_control('footer_widget_content_fontsize', array(
        'label' => esc_html__('Font size (px)', 'busicare'),
        'section' => 'busicare_widget_typography',
        'setting' => 'footer_widget_content_fontsize',
        'type' => 'select',
        'choices' => $font_size,
    ));
    $wp_customize->add_setting(
        'footer_widget_content_line_height',
        array(
            'default'           =>  30,
            'capability'        =>  'edit_theme_options',
            'sanitize_callback' =>  'absint',
        )   
    );
    $wp_customize->add_control('footer_widget_content_line_height', array(
            'label' => esc_html__('Line height (px)','busicare'),
            'section' => 'busicare_widget_typography',
            'setting' => 'footer_widget_content_line_height',
            'type'    =>  'select',
            'choices'=>$line_height,
    ));

}

add_action('customize_register', 'busicare_typography_customizer');
?>