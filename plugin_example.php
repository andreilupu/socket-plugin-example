<?php
/**
 * Plugin Name:       Socket Plugin Example
 * Plugin URI:        https://andrei-lupu.com/
 * Description:       This is a Socket Framework Plugin Example
 * Version:           1.1.0
 * Author:            Andrei Lupu
 * Author URI:        https://andrei-lupu.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       socket
 * Domain Path:       /languages
 */

add_filter( 'socket_config_for_plugin_example', function ( $config ) {
	return array(
		'page_title'        => 'My plugin',
		'nav_label'   => 'Plug',
		'options_key' => 'plugin_example',
		'sockets'     => array(
			'grid_example' => array(
				'label' => 'Section Name',
				'items' => array(
					'fselec' => array(
						'type'    => 'select',
						'label'   => 'My Select',
						'default' => 'test2',
						'options' => array(
							'test'  => "Label 1",
							'test2' => "Label 2",
							'test3' => "Label 3",
							'test4' => "Label 4",
						)
					),

					'fmulticheckbox' => array(
						'type'    => 'multicheckbox',
						'label'   => 'Multi checks',
						'default' => array(
							'test2' => 'on',
							'test4' => 'on',
						),
						'options' => array(
							'test'  => "Label 1",
							'test2' => "Label 2",
							'test3' => "Label 3",
							'test4' => "Label 4",
							'test5' => "Label 5",
						)
					),
					'firt_radio'     => array(
						'type'    => 'radio',
						'label'   => 'Radio',
						'default' => 'test2',
						'options' => array(
							'test'  => "Label 1",
							'test2' => "Label 2",
							'test3' => "Label 3",
						)
					),
					'name'           => array(
						'type'        => 'text',
						'label'       => 'Name',
						'placeholder' => 'Just a text field',

					),
					'email'          => array(
						'type'  => 'text',
						'label' => 'Email'
					),
					'first_toggle'   => array(
						'type'    => 'toggle',
						'label'   => 'Just a checkbox',
						'default' => 1
					),
					'anothertext'    => array(
						'type'  => 'text',
						'label' => 'Just Another text'
					),
				)
			),

			'grid_example2' => array(
				'label' => 'Second Section',
				'items' => array(
					'whattext'  => array(
						'type'  => 'text',
						'label' => 'The text'
					),
					'le_toggle' => array(
						'type'  => 'toggle',
						'label' => 'The ctogglejeck'
					),
				)
			),
		)
	);
} );

require_once( plugin_dir_path( __FILE__ ) . 'socket/loader.php' );

$socket = new WP_Socket( 'plugin_example' );

add_filter( 'socket_config_for_another_plugin', function ( $config ) {
	return array(
		'page_title'        => 'Another plugin',
		'nav_label'   => 'A Plug',
		'options_key' => 'another_plugin',
		'sockets'     => array(
			'grid_example3' => array(
				'label' => 'Section Name 3',
				'items' => array(
					'acheckbox' => array(
						'type'  => 'checkbox',
						'label' => 'The cjeck',
						'default' => 1
					),
					'atoggle'   => array(
						'type'  => 'toggle',
						'label' => 'The ctogglejeck',
						'default' => 1
					),
				)
			),

			'grid_example4' => array(
				'label' => ' 4 Section',
				'items' => array(
					'dasdastext'     => array(
						'type'  => 'text',
						'label' => 'The text'
					),
					'dasdasdasoggle' => array(
						'type'  => 'toggle',
						'label' => 'The ctogglejeck'
					),
				)
			),
		)
	);
} );
$socket2 = new WP_Socket( 'another_plugin' );