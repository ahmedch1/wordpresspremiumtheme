<?php
/**
 * Check if the screen-reader-text class is included
 *
 * @package Theme Check
 */

/**
 * Check if the screen-reader-text class is included.
 */
class Screen_Reader_Text_Check implements themecheck {
	/**
	 * Error messages, warnings and info notices.
	 *
	 * @var array $error
	 */
	protected $error = array();

	/**
	 * Check that return true for good/okay/acceptable, false for bad/not-okay/unacceptable.
	 *
	 * @param array $php_files File paths and content for PHP files.
	 * @param array $css_files File paths and content for CSS files.
	 * @param array $other_files Folder names, file paths and content for other files.
	 */
	public function check( $php_files, $css_files, $other_files ) {

		$css = implode( ' ', $css_files );
		$ret = true;

		$checks = array(
			'\.screen-reader-text' => __( '<strong>.screen-reader-text</strong> CSS class is generated by WordPress and needs to be styled with your theme CSS. See <a href="http://codex.wordpress.org/CSS#WordPress_Generated_Classes">the Codex</a> for an example implementation.', 'theme-check' ),
		);

		foreach ( $checks as $key => $check ) {
			checkcount();
			if ( ! preg_match( '/' . $key . '/i', $css, $matches ) ) {
				$this->error[] = sprintf(
					'<span class="tc-lead tc-required">%s</span> %s',
					__( 'REQUIRED', 'theme-check' ),
					$check
				);
				$ret           = false;
			}
		}

		return $ret;
	}

	/**
	 * Get error messages from the checks.
	 *
	 * @return array Error message.
	 */
	public function getError() {
		return $this->error;
	}
}

$themechecks[] = new Screen_Reader_Text_Check();
