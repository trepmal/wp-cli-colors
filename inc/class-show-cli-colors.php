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

		$colors = [
			'%y' => 'yellow',
			'%g' => 'green',
			'%b' => 'blue',
			'%r' => 'red',
			'%p' => 'magenta',
			'%m' => 'magenta',
			'%c' => 'cyan',
			'%w' => 'grey',
			'%k' => 'black',
			'%n' => 'reset',
			'%Y' => 'bright-yellow',
			'%G' => 'bright-green',
			'%B' => 'bright-blue',
			'%R' => 'bright-red',
			'%P' => 'bright-magenta',
			'%M' => 'bright-magenta',
			'%C' => 'bright-cyan',
			'%W' => 'bright-grey',
			'%K' => 'bright-black',
			'%N' => 'bright-reset',
			'%3' => 'background-yellow',
			'%2' => 'background-green',
			'%4' => 'background-blue',
			'%1' => 'background-red',
			'%5' => 'background-magenta',
			'%6' => 'background-cyan',
			'%7' => 'background-grey',
			'%0' => 'background-black',
			'%F' => 'blink',
			'%U' => 'underline',
			'%8' => 'inverse',
			'%9' => 'bright',
			'%_' => 'bright',
		];

		foreach ( $colors as $code => $description ) {
			WP_CLI::line( WP_CLI::colorize(
				sprintf(
					'%1$s%%%1$s [ %2$s ] The quick brown fox jumps over the lazy dog%%n',
					$code,
					$description
			) ) );
		}

	}

}