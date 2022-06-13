<?php
namespace BetterNotice;

/**
 * BetterNotice
 * @package   WP_Better_Notice
 */
class BetterNotice {

	protected static $magic_methods = [
		'Error',
		'Warning',
		'Info',
		'Success',
	];

	private function __construct() {}

	/**
	 * Create a new instance of BetterNotice
	 * @param string $type
	 * @param string $message
	 * @return Notice
	 * TODO: Sanitize $message
	*/
	protected static function _object_maker( string $type, string $message )
	{
		return new Notice( $type, $message );
	}


	/**
	 * Call the method if the method name is in the magic methods list
	 *
	 * @param string $name
	 * @param array $arguments
	 * @return Notice|false
	 */
	public static function __callStatic( string $name, array $arguments)
	{
		if ( ! in_array( $name, self::$magic_methods ) ) {
			return false;
		}

		return self::_object_maker( strtolower( $name ), $arguments[0] );
	}

}
