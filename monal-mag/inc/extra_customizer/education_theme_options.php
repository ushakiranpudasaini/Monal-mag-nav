<?php

$wp_customize->add_panel('navbar_field', array(
    'title' => __('Theme Options', 'monal-mag'),
    'priority' => 12,
));
// TOPBAR 
// Show hide Topbar
$wp_customize->add_setting(
    'topbar_visibility',
    array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'monal_education_sanitize_checkbox',
        'transport' => 'postMessage'
    )
);
$wp_customize->add_control(
    'topbar_visibility',
    array(
        'label'    => __('Show Topbar', 'monal-mag'),
        'section'  => 'topbar_box',
        'type'     => 'checkbox',
        'priority' => 6,
    )
);

// Location
$wp_customize->add_section('topbar_box', array(
    'title'   => __('Top Bar', 'monal-mag'),
    'priority'    => 131,
    'panel' => 'navbar_field',
));

$wp_customize->add_setting('topbar_phone', array(
    'default'   => __('+21-323-435', 'monal-mag'),
    'sanitize_callback' => 'sanitize_text_field',
    'type'      => 'theme_mod'
));
$wp_customize->add_control('topbar_phone', array(
    'label'   => __('Phone Number', 'monal-mag'),
    'section' => 'topbar_box',
    'priority'  => 7
));

$wp_customize->add_setting('topbar_location', array(
    'default'   => __('Rato Bangla, Kathmandu', 'monal-mag'),
    'sanitize_callback' => 'sanitize_text_field',
    'type'      => 'theme_mod'
));
$wp_customize->add_control('topbar_location', array(
    'label'   => __('Location', 'monal-mag'),
    'section' => 'topbar_box',
    'priority'  => 7
));

$wp_customize->add_setting('topbar_email', array(
    'default'   => __('john.doe@gmail.com', 'monal-mag'),
    'sanitize_callback' => 'sanitize_text_field',
    'type'      => 'theme_mod'
));
$wp_customize->add_control('topbar_email', array(
    'label'   => __('Email', 'monal-mag'),
    'section' => 'topbar_box',
    'priority'  => 7
));


// Setting - Background Color.
$wp_customize->add_setting(
    'edu_background_color',
    array(
        'default'           => '#2C2D60',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'edu_background_color',
        array(
            'label'      => __('Background Color', 'monal-mag'),
            'section'    => 'topbar_box',
            'settings'   => 'edu_background_color',
            'priority'   => 8,
        )
    )
);

$wp_customize->add_setting(
    'edu_text_color',
    array(
        'default'           => '#FFFFFF',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'edu_text_color',
        array(
            'label'      => __('Text Color', 'monal-mag'),
            'section'    => 'topbar_box',
            'settings'   => 'edu_text_color',
            'priority'   => 8,
        )
    )
);


$wp_customize->add_setting('topbar_facebook', array(
    'default'   => __('https://facebook.com', 'monal-mag'),
    'sanitize_callback' => 'sanitize_text_field',
    'type'      => 'theme_mod'
));
$wp_customize->add_control('topbar_facebook', array(
    'label'   => __('Facebook Link', 'monal-mag'),
    'section' => 'topbar_box',
    'priority'  => 9
));

$wp_customize->add_setting('topbar_twitter', array(
    'default'   => __('https://twitter.com', 'monal-mag'),
    'sanitize_callback' => 'sanitize_text_field',
    'type'      => 'theme_mod'
));
$wp_customize->add_control('topbar_twitter', array(
    'label'   => __('Twitter Link', 'monal-mag'),
    'section' => 'topbar_box',
    'priority'  => 9
));

$wp_customize->add_setting('topbar_instagram', array(
    'default'   => __('https://instagram.com', 'monal-mag'),
    'sanitize_callback' => 'sanitize_text_field',
    'type'      => 'theme_mod'
));
$wp_customize->add_control('topbar_instagram', array(
    'label'   => __('Instagram Link', 'monal-mag'),
    'section' => 'topbar_box',
    'priority'  => 9
));
// END TOPBAR

///// ==================
///// HEADER SECTION 
///// ==================

$wp_customize->add_section('header_section', array(
    'title'   => __('Navbar', 'monal-mag'),
    'priority'    => 131,
    'panel' => 'navbar_field',
));



$wp_customize->add_setting('navbar_select', array(
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'monal_mag_sanitize_select',
    'default' => 'box',
));

$wp_customize->add_control('navbar_select', array(
    'type' => 'select',
    'section' => 'header_section',
    'label' => __('Select Navbar Types', 'monal-mag'),
    'choices' => array(
        'fullwidth' => __('Full Width Layout', 'monal-mag'),
        'box' => __('Box Layout', 'monal-mag'),
    ),
));

// Navbar choices
$wp_customize->add_setting('navbar_choices', array(
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'monal_mag_sanitize_select',
    'default' =>  '1',
));
$wp_customize->add_control('navbar_choices', array(
    'type' => 'select',
    'section' => 'header_section',
    'label' => __('Select Navbar ', 'monal-mag'),
    'priority' => 7,
    'choices' => array(
        '1' => __('Navbar 1', 'monal-mag'),
        '2' => __('Navbar 2', 'monal-mag'),
        '3' => __('Navbar 3', 'monal-mag'),
        '4' => __('Navbar 4', 'monal-mag'),
        '5' => __('Navbar 5', 'monal-mag'),
        '6' => __('Navbar 6', 'monal-mag'),
        '7' => __('Navbar 7', 'monal-mag'),
        '8' => __('Navbar 8', 'monal-mag'),
        '9' => __('Navbar 9', 'monal-mag'),
        '10' => __('Navbar 10', 'monal-mag'),
        '11' => __('Navbar 11', 'monal-mag'),
        
    ),
));
$wp_customize->add_section( 'button_settings', array(
    'title' => 'Button Settings',
    'priority' => 8,
) );

    // Add setting for button text color
    $wp_customize->add_setting( 'button_text_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
// Add control for button text color
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_text_color', array(
    'label' => 'Button Text Color',
    'section' => 'button_settings',
    'settings' => 'button_text_color',
) ) );

    // Add setting for button background color
    $wp_customize->add_setting( 'button_background_color', array(
        'default' => '#007bff',
        'sanitize_callback' => 'sanitize_hex_color',
     
    ) );
    // Add control for button background color
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_background_color', array(
        'label' => 'Button Background Color',
        'section' => 'button_settings',
        'settings' => 'button_background_color',
       
    ) ) );
     // Add setting for button border color
     $wp_customize->add_setting( 'button_border_color', array(
        'default' => '#007bff',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
     // Add control for button border color
     $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_border_color', array(
        'label' => 'Button Border Color',
        'section' => 'button_settings',
        'settings' => 'button_border_color',
    ) ) );


// Show hide Search Button
$wp_customize->add_setting('heart_button_visibility',array(
    'default'           => 'show',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'postMessage'
)
);
$wp_customize->add_control('heart_button_visibility',array(
    'label'    => 'Heart Button Visibility',
    'section' => 'button_settings',
	'settings' => 'heart_button_visibility',
    'priority' => 1,
    'type' => 'radio',
	'choices' => array(
		'show' => 'Show',
		'hide' => 'Hide',
    ),
));

// $wp_customize->add_section( 'button_settings', array(
//     'title' => 'Button Settings',
//     'priority' => 10,
// ) );

// // Add setting for button text color
// $wp_customize->add_setting( 'button_text_color', array(
//     'default' => '#ffffff',
//     'sanitize_callback' => 'sanitize_hex_color',
// ) );

	// Container Width
    $wp_customize->add_setting( 'logo_width',
    array(
        'default' => __('58', 'monal-mag'),
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'monal_mag_sanitize_positive_integer',
    'transport' => 'postMessage'
    )
);
$wp_customize->add_control( new Monal_Mag_Slider_Custom_Control( $wp_customize, 'logo_width',
    array(
        'label' => __( 'Logo Width (px)', 'monal-mag' ),
        'section' => 'header_section',
        'priority' => 8,
        'input_attrs' => array(
            'min' => 20,
            'max' => 400,
            'step' => 1,
        ),
    )
) );


// Button  Text Color

$wp_customize->add_setting(
    'button_text',
    array(
        'default'           => '#ffffff',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage'

    )
);

$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'button_text',
        array(
            'label'      => __('Button Text Color', 'monal-mag'),
            'section'    => 'header_section',
            'settings'   => 'button_text_color',
            'priority'   => 60,
        )
    )
);


// Button  Background Color
$wp_customize->add_setting(
    'button_background',
    array(
        'default'           => '#ffffff',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage'
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'button_background',
        array(
            'label'      => __('Button Background Color', 'monal-mag'),
            'section'    => 'header_section',
            'settings'   => 'button_background',
            'priority'   => 90,
        )
    )
);

// Header Background Color
$wp_customize->add_setting(
    'header_background',
    array(
        'default'           => '#ffffff',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage'
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'header_background',
        array(
            'label'      => __('Header Background Color', 'monal-mag'),
            'section'    => 'header_section',
            'settings'   => 'header_background',
            'priority'   => 100,
        )
    )
);


// Header Text Color
$wp_customize->add_setting(
    'header_text_color',
    array(
        'default'           => '#000000',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage'

    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'header_text_color',
        array(
            'label'      => __('Header Text Color', 'monal-mag'),
            'section'    => 'header_section',
            'settings'   => 'header_text_color',
            'priority'   => 100,
        )
    )
);

// Header Hover Color
$wp_customize->add_setting(
    'header_hover_color',
    array(
        'default'           => '#000000',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage'
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'header_hover_color',
        array(
            'label'      => __('Header Hover Color', 'monal-mag'),
            'section'    => 'header_section',
            'settings'   => 'header_hover_color',
            'priority'   => 100,
        )
    )
);

// Header Dropdown Background
$wp_customize->add_setting(
    'dropdown_background',
    array(
        'default'           => '#d6d6d6',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage'
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'dropdown_background',
        array(
            'label'      => __('Dropdown Background', 'monal-mag'),
            'section'    => 'header_section',
            'settings'   => 'dropdown_background',
            'priority'   => 100,
        )
    )
);

// Header Dropdown Text
$wp_customize->add_setting(
    'dropdown_color',
    array(
        'default'           => '#000000',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'postMessage'
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'dropdown_color',
        array(
            'label'      => __('Dropdown Text Color', 'monal-mag'),
            'section'    => 'header_section',
            'settings'   => 'dropdown_color',
            'priority'   => 100,
        )
    )
);


// Dropdown Hover Color
$wp_customize->add_setting(
    'dropdown_hover_color',
    array(
        'default'           => '#e2e2e2',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
        // 'transport' => 'postMessage'
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'dropdown_hover_color',
        array(
            'label'      => __('Dropdown Hover Color', 'monal-mag'),
            'section'    => 'header_section',
            'settings'   => 'dropdown_hover_color',
            'priority'   => 100,
        )
    )
);


// Navbar Width Container
$wp_customize->add_setting( 'nav_width_container',
array(
    'default' => __('1280', 'monal-mag'),
    'transport' => 'postMessage',
    'sanitize_callback' => 'absint'
)
);
$wp_customize->add_control( new Monal_Mag_Slider_Custom_Control( $wp_customize, 'nav_width_container',
array(
    'label' => __( 'Navbar Container Width', 'monal-mag' ),
    'section' => 'header_section',
    'input_attrs' => array(
        'min' => 800,
        'max' => 1600,
        'step' => 1,
    ),
)
) );


///// ==================
///// END HEADER SECTION 
///// ==================

// ==================
// SIDENAV SECTION 
// ==================

$wp_customize->add_section('sidenav_section', array(
    'title'   => __('Side Navbar', 'monal-mag'),
    'priority'    => 131,
    'panel' => 'navbar_field',
));

// Sidenav Background Color
$wp_customize->add_setting(
    'sidenav_background',
    array(
        'default'           => '#000000',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'sidenav_background',
        array(
            'label'      => __('Background Color', 'monal-mag'),
            'section'    => 'sidenav_section',
            'settings'   => 'sidenav_background',
            'priority'   => 100,
        )
    )
);

// Sidenav Hover Color
$wp_customize->add_setting(
    'sidenav_hover_bg',
    array(
        'default'           => '#EF4444',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'sidenav_hover_bg',
        array(
            'label'      => __('On Hover', 'monal-mag'),
            'section'    => 'sidenav_section',
            'settings'   => 'sidenav_hover_bg',
            'priority'   => 100,
        )
    )
);


// Sidenav Text Color
$wp_customize->add_setting(
    'sidenav_text_color',
    array(
        'default'           => '#ffffff',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);


$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'sidenav_text_color',
        array(
            'label'      => __('Sidenav Text', 'monal-mag'),
            'section'    => 'sidenav_section',
            'settings'   => 'sidenav_text_color',
            'priority'   => 100,
        )
    )
);

// Sidenav SubMenu Background
$wp_customize->add_setting(
    'sidenav_submenu',
    array(
        'default'           => '#2C2C2C',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'sidenav_submenu',
        array(
            'label'      => __('SubMenu Background', 'monal-mag'),
            'section'    => 'sidenav_section',
            'settings'   => 'sidenav_submenu',
            'priority'   => 100,
        )
    )
);

// Sidenav SubMenu Background Hover
$wp_customize->add_setting(
    'sidenav_submenu_hover',
    array(
        'default'           => '#5C5C5C',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'sidenav_submenu_hover',
        array(
            'label'      => __('SubMenu Hover', 'monal-mag'),
            'section'    => 'sidenav_section',
            'settings'   => 'sidenav_submenu_hover',
            'priority'   => 100,
        )
    )
);

// SideNav Sub Menu Text
$wp_customize->add_setting(
    'sidenav_submenu_text',
    array(
        'default'           => '#FFFFFF',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'sidenav_submenu_text',
        array(
            'label'      => __('Sub Menu Text', 'monal-mag'),
            'section'    => 'sidenav_section',
            'settings'   => 'sidenav_submenu_text',
            'priority'   => 100,
        )
    )
);


///// ==================
///// SIDENAV SECTION 
///// ==================


// FOOTER SECTION 

$wp_customize->add_section('footer_section', array(
    'title'   => __('Footer', 'monal-mag'),
    'description' => sprintf(__('Options for footer Section', 'monal-mag')),
    'priority'    => 131,
    'panel' => 'navbar_field',
));


$wp_customize->add_setting('footer_select', array(
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'monal_mag_sanitize_select',
    'default' => 'box',
));
$wp_customize->add_control('footer_select', array(
    'type' => 'select',
    'section' => 'footer_section',
    'label' => __('Select Footer Types', 'monal-mag'),
    'choices' => array(
        'fullwidth' => __('Full Width Layout', 'monal-mag'),
        'box' => __('Box Layout', 'monal-mag'),
    ),
));

// Footer  choices
$wp_customize->add_setting('footer_choices', array(
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'monal_mag_sanitize_select',
    'default' =>  '1',
));
$wp_customize->add_control('footer_choices', array(
    'type' => 'select',
    'section' => 'footer_section',
    'label' => __('Select Footer ', 'monal-mag'),
    'priority' => 7,
    'choices' => array(
        '1' => __('Footer 1', 'monal-mag'),
        '2' => __('Footer 2', 'monal-mag'),
  
    ),
));


// Copyright Text 
$wp_customize->add_setting('copyright_text_footer', array(
    'default' => __('© 2021 - WordPress Theme : monal-mag', 'monal-mag'),
    'capability'        => 'edit_theme_options',
    'transport' => 'postMessage',
    'sanitize_callback' => 'sanitize_text_field'
));

$wp_customize->add_control('copyright_text_footer', array(
    'label' => __('Text for Copyright Section', 'monal-mag'),
    'section' => 'footer_section',
    'priority' => 7
));

// Copyright Background.
$wp_customize->add_setting(
    'copyright_background',
    array(
        'default'           => '#000000',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'copyright_background',
        array(
            'label'      => esc_html__('Copyright Background', 'monal-mag'),
            'section'    => 'footer_section',
            'settings'   => 'copyright_background',
            'priority'   => 8,
        )
    )
);

// Copyright Display
$wp_customize->add_setting('copyright_display', array(
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'monal_mag_sanitize_select',
    'default' => 'show',
    'transport' => 'postMessage'
));

$wp_customize->add_control('copyright_display', array(
    'type' => 'select',
    'section' => 'footer_section',
    'label' => __('Display Copyright Section', 'monal-mag'),
    'description' => __('Options', 'monal-mag'),
    'choices' => array(
        'show' => __('Show', 'monal-mag'),
        'hide' => __('Hide', 'monal-mag'),
    ),
));

// Copyright Text
$wp_customize->add_setting(
    'copyright_text_color',
    array(
        'default'           => '#FFFFFF',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'copyright_text_color',
        array(
            'label'      => __('Copyright Text', 'monal-mag'),
            'section'    => 'footer_section',
            'settings'   => 'copyright_text_color',
            'priority'   => 8,
        )
    )
);


// Footer Background.
$wp_customize->add_setting(
    'footer_background_color',
    array(
        'default'           => '#2C2D60',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'footer_background_color',
        array(
            'label'      => __('Footer Background', 'monal-mag'),
            'section'    => 'footer_section',
            'settings'   => 'footer_background_color',
            'priority'   => 8,
        )
    )
);

// Footer Text.
$wp_customize->add_setting(
    'footer_text_color',
    array(
        'default'           => '#FFFFFF',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'footer_text_color',
        array(
            'label'      => __('Footer Text Color', 'monal-mag'),
            'section'    => 'footer_section',
            'settings'   => 'footer_text_color',
            'priority'   => 8,
        )
    )
);

//footer widget-title
$wp_customize->add_setting(
    'footer_head_color',
    array(
        'default'           => '#FFFFFF',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'footer_head_color',
        array(
            'label'      => __('Footer Head Color', 'monal-mag'),
            'section'    => 'footer_section',
            'settings'   => 'footer_head_color',
            'priority'   => 8,
        )
    )
);


// END FOOTER


//SIDEBAR

///// SIDEBAR 

$wp_customize->add_section('sidebar_section', array(
    'title'   => __('Sidebar Options', 'monal-mag'),
    'priority'    => 131,
    'panel' => 'navbar_field',
));
// Sidebar Single Post
$wp_customize->add_setting(
    'enable_sidebar_option_single_post',
    array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'monal_mag_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'enable_sidebar_option_single_post',
    array(
        'label'    => __('Enable Sidebar on Single Post', 'monal-mag'),
        'section'  => 'sidebar_section',
        'type'     => 'checkbox',
        'priority' => 150,
    )
);



// Sidebar Archive Page
$wp_customize->add_setting(
    'enable_sidebar_option_single_page',
    array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'monal_mag_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'enable_sidebar_option_single_page',
    array(
        'label'    => __('Enable Sidebar on Page Post', 'monal-mag'),
        'section'  => 'sidebar_section',
        'type'     => 'checkbox',
        'priority' => 150,
    )
);


// Sticky Sidebar
// $wp_customize->add_setting('sidebar_option', array(
//     'capability' => 'edit_theme_options',
//     'sanitize_callback' => 'monal_mag_sanitize_select',
//     'default' => 'default',
// ));

// $wp_customize->add_control('sidebar_option', array(
//     'type' => 'select',
//     'section' => 'sidebar_section',
//     'label' => __('Select Sidebar Options', 'monal-mag'),
//     'choices' => array(
//         'default' => __('Default', 'monal-mag'),
//         'sticky_top' => __('Sticky Top', 'monal-mag'),
//         'sticky_bottom' => __('Sticky Bottom', 'monal-mag'),
//     ),
// ));
// END SIDEBAR




$wp_customize->add_section('archive_section', array(
    'title'   => __('Archive Options', 'monal-mag'),
    'description' => __('Changes For Archive Page', 'monal-mag'),
    'priority'    => 131,
    'panel' => 'navbar_field',
));


// Archive Grid Columns

$wp_customize->add_setting('columns_archive', array(
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'monal_mag_sanitize_select',
    'default' => '2',
));

$wp_customize->add_control('columns_archive', array(
    'type' => 'select',
    'section' => 'archive_section',
    'label' => __('Number of Columns in Archive ( Grid Only )', 'monal-mag'),
    'priority' => 151,
    'choices' => array(
        '1' => __('1', 'monal-mag'),
        '2' => __('2', 'monal-mag'),
        '3' => __('3', 'monal-mag'),
        '4' => __('4', 'monal-mag'),
    ),
));


// ARchive End 



// Sidebar Archive Page
$wp_customize->add_setting(
    'enable_sidebar_option_archive',
    array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport' => 'refresh',
        'sanitize_callback' => 'monal_mag_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'enable_sidebar_option_archive',
    array(
        'label'    => __('Enable Sidebar', 'monal-mag'),
        'section'  => 'archive_section',
        'type'     => 'checkbox',
        'priority' => 150,
    )
);


// Archive Layout 
$wp_customize->add_setting('archive_layout', array(
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'monal_mag_sanitize_select',
    'default' => 'list',
));

$wp_customize->add_control('archive_layout', array(
    'type' => 'select',
    'section' => 'archive_section',
    'label' => __('Archive Layout', 'monal-mag'),
    'priority' => 151,
    'choices' => array(
        'list' => __('List', 'monal-mag'),
        'grid' => __('Grid', 'monal-mag'),
    ),
));

// Show Excerpt
$wp_customize->add_setting(
    'show_excerpt_archive',
    array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport' => 'refresh',
        'sanitize_callback' => 'monal_mag_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'show_excerpt_archive',
    array(
        'label'    => __('Show Excerpt', 'monal-mag'),
        'section'  => 'archive_section',
        'type'     => 'checkbox',
        'priority' => 151,
    )
);

// Show Author And Date Tags
$wp_customize->add_setting(
    'show_author_date_archive',
    array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport' => 'refresh',
        'sanitize_callback' => 'monal_mag_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'show_author_date_archive',
    array(
        'label'    => __('Show Author and Date', 'monal-mag'),
        'section'  => 'archive_section',
        'type'     => 'checkbox',
        'priority' => 152,
    )
);

// Show Archive Tags
$wp_customize->add_setting(
    'show_tags_archive',
    array(
        'default'           => 1,
        'capability'        => 'edit_theme_options',
        'transport' => 'refresh',
        'sanitize_callback' => 'monal_mag_sanitize_checkbox',
    )
);
$wp_customize->add_control(
    'show_tags_archive',
    array(
        'label'    => __('Show Tags', 'monal-mag'),
        'section'  => 'archive_section',
        'type'     => 'checkbox',
        'priority' => 153,
    )
);




// Link Section

$wp_customize->add_section('color_section', array(
    'title'   => __('Colors', 'monal-mag'),
    'priority'    => 131,
    'panel' => 'navbar_field',
));


// GLobal Colors
$wp_customize->add_setting(
    'link_color',
    array(
        'default'           => '#000000',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'link_color',
        array(
            'label'      => __('Link Color', 'monal-mag'),
            'section'    => 'color_section',
            'settings'   => 'link_color',
            'priority'   => 8,
        )
    )
);

$wp_customize->add_setting(
    'link_hover_color',
    array(
        'default'           => '#1787bd',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'link_hover_color',
        array(
            'label'      => __('Link HOver Color', 'monal-mag'),
            'section'    => 'color_section',
            'settings'   => 'link_hover_color',
            'priority'   => 8,
        )
    )
);

// Setting - primary_color.
$wp_customize->add_setting(
    'primary_color',
    array(
        'default'           => '#EF4444',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'primary_color',
        array(
            'label'      => __('Primary Color', 'monal-mag'),
            'section'    => 'color_section',
            'settings'   => 'primary_color',
            'priority'   => 100,
        )
    )
);


$wp_customize->add_setting(
    'secondary_color',
    array(
        'default'           => '#ffffff',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'secondary_color',
        array(
            'label'      => __('Secondary Color', 'monal-mag'),
            'section'    => 'color_section',
            'settings'   => 'secondary_color',
            'priority'   => 100,
        )
    )
);

/// Body Color
$wp_customize->add_setting(
    'bodybg_color',
    array(
        'default'           => '#ffffff',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'bodybg_color',
        array(
            'label'      => __('Background Color', 'monal-mag'),
            'section'    => 'color_section',
            'settings'   => 'bodybg_color',
            'priority'   => 100,
        )
    )
);


/// POst Heading
$wp_customize->add_setting(
    'postheading_color',
    array(
        'default'           => '#000000',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'bodybg_color',
        array(
            'label'      => __('Post Heading Color', 'monal-mag'),
            'section'    => 'color_section',
            'settings'   => 'postheading_color',
            'priority'   => 100,
        )
    )
);

// Post Text 
$wp_customize->add_setting(
    'posttext_color',
    array(
        'default'           => '#585858',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'posttext_color',
        array(
            'label'      => __('Post Paragraph Color', 'monal-mag'),
            'section'    => 'color_section',
            'settings'   => 'posttext_color',
            'priority'   => 100,
        )
    )
);


// Homepage Widget Heading
$wp_customize->add_setting(
    'home_widget',
    array(
        'default'           => '#000000',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'home_widget',
        array(
            'label'      => __('Homepage Widget Heading', 'monal-mag'),
            'section'    => 'color_section',
            'settings'   => 'home_widget',
            'priority'   => 100,
        )
    )
);

// Background Color
$wp_customize->add_setting(
    'body_background_color',
    array(
        'default'           => '#f3f4f5',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control(
    new WP_Customize_Color_Control(
        $wp_customize,
        'body_background_color',
        array(
            'label'      => __('Body Background Color', 'monal-mag'),
            'section'    => 'color_section',
            'settings'   => 'body_background_color',
            'priority'   => 100,
        )
    )
);





/// Single Page Options



// Archive Section 
$wp_customize->add_section('single_section', array(
    'title'   => __('Single Page Options', 'monal-mag'),
    'description' => __('The page for displaying the full content of a post', 'monal-mag'),
    'priority'    => 131,
    'panel' => 'navbar_field',
));


// Archive  Grid Columns

$wp_customize->add_setting('single_choices', array(
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'monal_mag_sanitize_select',
    'default' => '1',
));

$wp_customize->add_control('single_choices', array(
    'type' => 'select',
    'section' => 'single_section',
    'label' => __('Choose The Style of Single Page', 'monal-mag'),
    'priority' => 151,
    'choices' => array(
        '1' => __('Style 1', 'monal-mag'),
        '2' => __('Style 2', 'monal-mag'),
    ),
));

// Layout Options

$wp_customize->add_section('layout_options', array(
    'title' => 'Layout Options',
    'priority'    => 131,
    'panel' => 'navbar_field',
));

	// Container Width
    $wp_customize->add_setting( 'body_width_container',
    array(
        'default' => __('1280', 'monal-mag'),
        'transport' => 'postMessage',
        'sanitize_callback' => 'absint'
    )
);
$wp_customize->add_control( new Monal_Mag_Slider_Custom_Control( $wp_customize, 'body_width_container',
    array(
        'label' => __( 'Body Container Width', 'monal-mag' ),
        'section' => 'layout_options',
        'input_attrs' => array(
            'min' => 800,
            'max' => 1600,
            'step' => 1,
        ),
    )
) );