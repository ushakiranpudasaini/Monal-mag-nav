<?php
$wp_customize->add_panel('general_options', array(
    'title' => __('Typography', 'monal-mag'),
    'priority' => 12,
));

// === TYPOGRAPHY SECTION ===
$wp_customize->add_section('typography_settings', array(
    'title' => __('Font Sizes', 'monal-mag'),
    'priority' => 10,
    'panel' => 'general_options'
));

// Heading One
$wp_customize->add_setting('edu_heading_one_size', array(
    'default' => __('30', 'monal-mag'),
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'monal_mag_sanitize_positive_integer',
    'transport' => 'postMessage'
));

$wp_customize->add_control('edu_heading_one_size', array(
    'label' => __('Heading 1', 'monal-mag'),
    'section' => 'typography_settings',
    'type' => 'number',
    'priority' => 7
));

// Heading Two
$wp_customize->add_setting('edu_heading_two_size', array(
    'default' => __('24', 'monal-mag'),
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'monal_mag_sanitize_positive_integer',
    'transport' => 'postMessage'
));
$wp_customize->add_control('edu_heading_two_size', array(
    'label' => __('Heading 2', 'monal-mag'),
    'section' => 'typography_settings',
    'type' => 'number',
    'priority' => 8
));

// Heading Three
$wp_customize->add_setting('edu_heading_three_size', array(
    'default' => __('22', 'monal-mag'),
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'monal_mag_sanitize_positive_integer',
    'transport' => 'postMessage'
));
$wp_customize->add_control('edu_heading_three_size', array(
    'label' => __('Heading 3', 'monal-mag'),
    'section' => 'typography_settings',
    'type' => 'number',
    'priority' => 9
));

// Heading four
$wp_customize->add_setting('edu_heading_four_size', array(
    'default' => __('20', 'monal-mag'),
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'monal_mag_sanitize_positive_integer',
    'transport' => 'postMessage'
));
$wp_customize->add_control('edu_heading_four_size', array(
    'label' => __('Heading 4', 'monal-mag'),
    'section' => 'typography_settings',
    'type' => 'number',
    'priority' => 10
));

// Heading five
$wp_customize->add_setting('edu_heading_five_size', array(
    'default' => __('18', 'monal-mag'),
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'monal_mag_sanitize_positive_integer',
    'transport' => 'postMessage'
));
$wp_customize->add_control('edu_heading_five_size', array(
    'label' => __('Heading 5', 'monal-mag'),
    'section' => 'typography_settings',
    'type' => 'number',
    'priority' => 10
));

// Heading six
$wp_customize->add_setting('edu_heading_six_size', array(
    'default' => __('16', 'monal-mag'),
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'monal_mag_sanitize_positive_integer',
    'transport' => 'postMessage'
));
$wp_customize->add_control('edu_heading_six_size', array(
    'label' => __('Heading 6', 'monal-mag'),
    'section' => 'typography_settings',
    'type' => 'number',
    'priority' => 10
));
// P tag Size
$wp_customize->add_setting('edu_paragraph_size', array(
    'default' => __('15', 'monal-mag'),
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'monal_mag_sanitize_positive_integer',
    'transport' => 'postMessage'
));

$wp_customize->add_control('edu_paragraph_size', array(
    'label' => __('Paragraph Font Size', 'monal-mag'),
    'section' => 'typography_settings',
    'type' => 'number',
    'priority' => 13
));

// Meta
$wp_customize->add_setting('edu_meta_size', array(
    'default' => __('14', 'monal-mag'),
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'monal_mag_sanitize_positive_integer',
    'transport' => 'postMessage'
));

$wp_customize->add_control('edu_meta_size', array(
    'label' => __('Meta Data', 'monal-mag'),
    'section' => 'typography_settings',
    'type' => 'number',
    'priority' => 12
));


// Widget Title Size 
$wp_customize->add_setting('edu_widget_title_size', array(
    'default' => __('24', 'monal-mag'),
    'capability' => 'edit_theme_options',
    'sanitize_callback' => 'monal_mag_sanitize_positive_integer',
    'transport' => 'postMessage'
));
$wp_customize->add_control('edu_widget_title_size', array(
    'label' => __('Widget Title Font Size', 'monal-mag'),
    'section' => 'typography_settings',
    'type' => 'number',
    'priority' => 13
));