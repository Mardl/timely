<?php

/**
 * \Wicked\Timely\Formatter\FormatterInterface
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Bernhard Wick <wick.b@hotmail.de>
 * @copyright 2016 Bernhard Wick
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/wick-ed/timely
 */

namespace Wicked\Timely\Formatter;

use Wicked\Timely\Entities\Booking;

/**
 * Formatter interface
 *
 * @author    Bernhard Wick <wick.b@hotmail.de>
 * @copyright 2016 Bernhard Wick
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/wick-ed/timely
 */
interface FormatterInterface
{

    /**
     * Formats a booking into a string
     *
     * @param \Wicked\Timely\Entities\Booking[]|\Wicked\Timely\Entities\Booking $bookings The bookings to format
     *
     * @return string
     */
    public function toString($bookings);
}
