<?php

function slider_customize_register($wp_customize){
    $wp_customize->add_section('dogri_slider_section', array(
        'title'    => __('Slider', 'ayush'),
        'description' => '',
        'priority' => 120,
        'active_callback' => 'is_front_page',
    ));

    function dogri_sanitize_select($input){
        return ($input === "No") ? "No" : "Yes";
    }

    $wp_customize->add_setting('slider-display-setting', array(
        'default'           => 'No',
        'sanitize_callback' => 'dogri_sanitize_select'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'slider-display-setting-control', array(
        'label'             =>  'Display this section?',
        'section'           =>  'dogri_slider_section',
        'settings'          =>  'slider-display-setting',
        'type'              =>  'select',
        'choices'           =>  array('No' => 'No', 'Yes' => 'Yes')
    )));

    $wp_customize->add_setting('slider-image-one', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'slider-image-one-control', array(
        'label'    => 'Slider 1',
        'section'  => 'dogri_slider_section',
        'settings' => 'slider-image-one',
    )));

    $wp_customize->add_setting('banner_url_one', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'banner_url_one_control', array(
        'label'    => 'Slider 1 Url',
        'section'  => 'dogri_slider_section',
        'settings' => 'banner_url_one',
    )));

    $wp_customize->add_setting('slider-image-two', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'slider-image-two-control', array(
        'label'    => 'Slider 2',
        'section'  => 'dogri_slider_section',
        'settings' => 'slider-image-two',
    )));

    $wp_customize->add_setting('banner_url_two', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'banner_url_two_control', array(
        'label'    => 'Slider 2 Url',
        'section'  => 'dogri_slider_section',
        'settings' => 'banner_url_two',
    )));

    $wp_customize->add_setting('slider-image-three', array(
        'default'           => '',
        'type'              => 'theme_mod',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'slider-image-three-control', array(
        'label'    => 'Slider 3',
        'section'  => 'dogri_slider_section',
        'settings' => 'slider-image-three',
    )));

    $wp_customize->add_setting('banner_url_three', array(
        'default'           => '#',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'banner_url_three_control', array(
        'label'    => 'Slider 3 Url',
        'section'  => 'dogri_slider_section',
        'settings' => 'banner_url_three',
    )));

}

add_action('customize_register', 'slider_customize_register');
