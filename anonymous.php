<?php

interface Logger
{
    function log(string $message);
}

function handler(string $message, Logger $logger)
{
    $logger->log($message);
}

handler('Hello', new class('foo') implements Logger {
    private $prefix;

    public function __construct(string $prefix)
    {
        $this->prefix = $prefix;
    }

    public function log(string $message)
    {
        echo $this->prefix . ': ' . $message, PHP_EOL;
    }
});
