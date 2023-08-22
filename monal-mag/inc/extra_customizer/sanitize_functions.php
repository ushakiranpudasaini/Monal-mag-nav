<?php

/**
 * Sanitization functions.
 *
 * @package monal-mag
 */

if (!function_exists('monal_mag_sanitize_select')) :

    function monal_mag_sanitize_select($input, $setting)
    {
        // Ensure input is a slug.
        $input = sanitize_key($input);
        // Get list of choices from the control associated with the setting.
        $choices = $setting->manager->get_control($setting->id)->choices;
        // If the input is a valid key, return it; otherwise, return the default.
        return (array_key_exists($input, $choices) ? $input : $setting->default);
    }
endif;


if (!function_exists('monal_mag_sanitize_positive_integer')) :

    /**
     * Sanitize positive integer.
     *
     * @since 1.0.0
     *
     * @param int $input Number to sanitize.
     * @param WP_Customize_Setting $setting WP_Customize_Setting instance.
     * @return int Sanitized number; otherwise, the setting default.
     */
    function monal_education_sanitize_positive_integer($input, $setting)
    {

        $input = absint($input);

        // If the input is an absolute integer, return it.
        // otherwise, return the default.
        return ($input ? $input : $setting->default);
    }

endif;


if (!function_exists('monal_education_sanitize_checkbox')) :

    /**
     * Sanitize checkbox.
     *
     * @since 1.0.0
     *
     * @param bool $checked Whether the checkbox is checked.
     * @return bool Whether the checkbox is checked.
     */
    function monal_education_sanitize_checkbox($checked)
    {
        return ((isset($checked) && true === $checked) ? true : false);
    }

endif;

// sanitize_hex_color function for background color
// if (!function_exists('sanitize_hex_color')) :
// function sanitize_hex_color($color) {
//     if ($unhashed = sanitize_hex_color_no_hash($color)) {
//         return '#' . $unhashed;
//     }
//     return $color;
// }
// endif;

// sanitize_hex_color function for background color
if (!function_exists('sanitize_hex_color')) :
    function sanitize_hex_color($color) {
        return ((isset($color) && true === $color) ? true : false);
    }
    endif;