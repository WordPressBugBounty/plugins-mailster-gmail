<?php

declare(strict_types=1);

namespace Mailster\Gmail\GuzzleHttp;

use Mailster\Gmail\Psr\Http\Message\MessageInterface;

final class BodySummarizer implements BodySummarizerInterface
{
    private ?int $truncateAt;

    public function __construct(?int $truncateAt = null)
    {
        $this->truncateAt = $truncateAt;
    }

    /**
     * Returns a summarized message body.
     */
    public function summarize(MessageInterface $message): ?string
    {
        try {
            return Psr7\Message::bodySummary($message, $this->truncateAt);
        } catch (\Exception $e) {
            return null;
        }
    }
}
