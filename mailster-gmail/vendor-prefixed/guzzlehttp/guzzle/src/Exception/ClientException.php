<?php

declare(strict_types=1);

namespace Mailster\Gmail\GuzzleHttp\Exception;

/**
 * Exception thrown for HTTP responses with 4xx status codes.
 */
class ClientException extends BadResponseException
{
}
