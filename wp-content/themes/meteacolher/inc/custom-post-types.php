<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

add_action('init', 'create_victims_post_type');
add_action('init', 'create_testimonial_post_type');

if (!function_exists('create_victims_post_type')) {
	function create_victims_post_type()
	{
		$args = [
			'labels' => [
				'name' => 'Vítimas',
				'singular_name' => 'Vítima',
			],
			'public' => true,
			'has_archive' => false,
			'rewrite' => ['slug' => 'victims'],
			'supports' => ['title', 'editor', 'custom-fields'],
			'menu_position' => 5,
		];

		register_post_type('victim', $args);
	}
}
if (!function_exists('create_testimonial_post_type')) {
	function create_testimonial_post_type()
	{
		$args = [
			'labels' => [
				'name' => 'Testemunhos',
				'singular_name' => 'Testemunho',
			],
			'public' => true,
			'has_archive' => false,
			'rewrite' => ['slug' => 'testimonials'],
			'supports' => ['title', 'editor', 'custom-fields'],
			'menu_position' => 5,
		];

		register_post_type('testimonial', $args);
	}
}

