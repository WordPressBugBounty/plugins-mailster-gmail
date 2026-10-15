<?php

declare(strict_types=1);

namespace Mailster\Gmail\GuzzleHttp;

use Mailster\Gmail\Psr\Http\Message\MessageInterface;

interface BodySummarizerInterface
{
    /**
     * Returns a summarized message body.
     */
    public function summarize(MessageInterface $message): ?string;
}
