<?php

declare(strict_types=1);

namespace Mailster\Gmail\GuzzleHttp\Handler;

use Mailster\Gmail\GuzzleHttp\Psr7;
use Mailster\Gmail\Psr\Http\Message\UriInterface;

/**
 * @internal
 */
final class UriDiagnostic
{
    private function __construct()
    {
    }

    public static function redactInMessage(
        #[\SensitiveParameter]
        string $message,
        #[\SensitiveParameter]
        UriInterface $uri
    ): string {
        $message = Psr7\Utils::redactUserInfoInString($message, (string) $uri);

        $query = $uri->getQuery();
        if ($query !== '') {
            $message = \str_replace('?'.$query, '', $message);
        }

        $fragment = $uri->getFragment();
        if ($fragment !== '') {
            $message = \str_replace('#'.$fragment, '', $message);
        }

        return Psr7\DiagnosticValue::escape($message);
    }
}
