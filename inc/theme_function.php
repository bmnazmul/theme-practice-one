<?php
function sm_customizar_register($wp_customize){

    //Header Area Function

    $wp_customize ->add_section('sm_header_area',array(
        'title' =>__('Header Area', 'smnazmul'),
        'description' => 'if you interested to update your header area, you can do it here.'
    ));

    $wp_customize-> add_setting('sm_logo',array(
        'default' => get_bloginfo('template_directory').'/img/site_logo.png',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'sm_logo',array(
        'label' => 'logo uploade',
        'description' => ' if you interested to change or update your logo you can do it.',
        'setting' => 'sm-logo',
        'section' => 'sm_header_area',

    ) ));

    //Menu Position Option
    $wp_customize->add_section('sm_menu_option',array(
        'title'=>__('Menu_position_Option','smnazmul'),
        'description'=>'if you interested to change your menu position you can do it.'
    ));

    $wp_customize->add_setting('sm_menu_position', array(
        'defualt'=>'right_menu',
    ));

   $wp_customize->add_control('sm_menu_position',array(
    'lebel'=>'Menu_Option',
    'description'=>'Select your menu position',
    'setting'=>'sm_menu_position',
    'section'=>'sm_menu_option',
    'type'=>'radio',
    'choices'=> array(
       'left_menu' => 'left_menu',
       'right_menu' => 'right-menu',
    ),
   ));

    //Footer area function

    $wp_customize->add_section('sm_footer_option',array(
        'title'=>__('Footer_Option','smnazmul'),
        'description'=>'if you interested to change or update your footer setting you can do it.'
    ));

    $wp_customize->add_setting('sm_copyright_section', array(
        'default'=> '&copy; Copyright 2024 | smnazmul',
    ));

   $wp_customize->add_control('sm_copyright_section',array(
    'label'=> 'Copyright text',
    'description'=>'if you need you can update your copyright text from here.',
    'setting'=>'sm_copyright_section',
    'section'=>'sm_footer_option',
   ));

}

add_action('customize_register','sm_customizar_register');