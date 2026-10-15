<?php

declare(strict_types=1);

namespace Mailster\Gmail\GuzzleHttp\Exception;

use Mailster\Gmail\Psr\Http\Client\ClientExceptionInterface;

interface GuzzleException extends ClientExceptionInterface
{
}
