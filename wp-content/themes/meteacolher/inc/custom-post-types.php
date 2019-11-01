<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;

add_action('init', 'create_victims_post_type');

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

