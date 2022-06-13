<?php
namespace BetterNotice;

/**
 * BetterNotice
 * @package   WP_Better_Notice
 */
class Notice {

	protected $message;
	protected $type;

	public function __construct( string $type, string $message ) {
		$this->message = $message;
		$this->type = $type;

		add_action( 'admin_notices', array( $this, 'print_notice' ) );

		return $this;
	}


	/**
	 * Body of the notice
	 * @return string
	 * TODO: Sanitize HTML Tags
	 */
	protected function _notice_body()
	{
		$notice_body = '<div class="notice notice-' . $this->type . ' is-dismissible">';
		$notice_body .= '<p>' . $this->message . '</p>';
		$notice_body .= '</div>';
		return $notice_body;
	}

	/**
	 * Print the notice
	 */
	public function print_notice()
	{
		echo $this->_notice_body();

		return true;
	}
}
