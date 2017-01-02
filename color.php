<?php

/**
 * Show CLI Colors
 */
class Show_CLI_Colors extends WP_CLI_Command {

	/**
	 * Show CLI colors
	 *
	 * ## OPTIONS
	 *
	 * ## EXAMPLES
	 *
	 *     wp colors
	 */
	function __invoke( $args, $assoc_args ) {

		WP_CLI::line( WP_CLI::colorize( "%y%%y : ['color' => 'yellow'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%g%%g : ['color' => 'green'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%b%%b : ['color' => 'blue'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%r%%r : ['color' => 'red'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%p%%p : ['color' => 'magenta'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%m%%m : ['color' => 'magenta'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%c%%c : ['color' => 'cyan'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%w%%w : ['color' => 'grey'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%k%%k : ['color' => 'black'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%n%%n : ['color' => 'reset'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%Y%%Y : ['color' => 'yellow', 'style' => 'bright'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%G%%G : ['color' => 'green', 'style' => 'bright'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%B%%B : ['color' => 'blue', 'style' => 'bright'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%R%%R : ['color' => 'red', 'style' => 'bright'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%P%%P : ['color' => 'magenta', 'style' => 'bright'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%M%%M : ['color' => 'magenta', 'style' => 'bright'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%C%%C : ['color' => 'cyan', 'style' => 'bright'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%W%%W : ['color' => 'grey', 'style' => 'bright'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%K%%K : ['color' => 'black', 'style' => 'bright'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%N%%N : ['color' => 'reset', 'style' => 'bright'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%3%%3 : ['background' => 'yellow'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%2%%2 : ['background' => 'green'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%4%%4 : ['background' => 'blue'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%1%%1 : ['background' => 'red'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%5%%5 : ['background' => 'magenta'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%6%%6 : ['background' => 'cyan'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%7%%7 : ['background' => 'grey'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%0%%0 : ['background' => 'black'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%F%%F : ['style' => 'blink'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%U%%U : ['style' => 'underline'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%8%%8 : ['style' => 'inverse'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%9%%9 : ['style' => 'bright'] : Lorem ipsum%n" ) );
		WP_CLI::line( WP_CLI::colorize( "%_%%_ : ['style' => 'bright'] : Lorem ipsum%n" ) );

	}

}
WP_CLI::add_command( 'colors', 'Show_CLI_Colors' );