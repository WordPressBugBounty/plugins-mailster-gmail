<?php
/**
 * @license MIT
 *
 * Modified by __root__ on 27-May-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

declare(strict_types=1);

namespace Mailster\Gmail\GuzzleHttp\Psr7\Exception;

use InvalidArgumentException;

/**
 * Exception thrown if a URI cannot be parsed because it's malformed.
 */
class MalformedUriException extends InvalidArgumentException
{
}
