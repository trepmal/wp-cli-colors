<?php

if ( ! defined( 'WP_CLI' ) ) return;

require_once __DIR__ . '/inc/class-show-cli-colors.php';

WP_CLI::add_command( 'colors', 'Show_CLI_Colors' );