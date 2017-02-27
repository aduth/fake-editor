<?php

function fe_setup() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'fe_setup' );

function fe_enqueue_scripts() {
	wp_enqueue_style( 'fake-editor-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'fe_enqueue_scripts' );
