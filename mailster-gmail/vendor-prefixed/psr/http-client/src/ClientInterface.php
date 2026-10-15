<?php

namespace Mailster\Gmail\Psr\Http\Client;

use Mailster\Gmail\Psr\Http\Message\RequestInterface;
use Mailster\Gmail\Psr\Http\Message\ResponseInterface;

interface ClientInterface
{
    /**
     * Sends a PSR-7 request and returns a PSR-7 response.
     *
     * @param RequestInterface $request
     *
     * @return ResponseInterface
     *
     * @throws \Mailster\Gmail\Psr\Http\Client\ClientExceptionInterface If an error happens while processing the request.
     */
    public function sendRequest(RequestInterface $request): ResponseInterface;
}
