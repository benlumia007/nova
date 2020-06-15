<?php
/**
 * Displayable contract.
 *
 * Displayable classes should implement a `display()` method. The intent of this
 * method is to output an HTML string to the screen. This data should already be
 * escaped prior to being output.
 *
 * @package   NovaCore
 * @author    Justin Tadlock <justintadlock@gmail.com>
 * @copyright Copyright (c) 2008 - 2018, Justin Tadlock
 * @link      https://themehybrid.com/hybrid-core
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Nova\Contracts;

/**
 * Displayable interface.
 *
 * @since  5.0.0
 * @access public
 */
interface Displayable {

	/**
	 * Prints the HTML string.
	 *
	 * @since  5.0.0
	 * @access public
	 * @return void
	 */
	public function display();
}
