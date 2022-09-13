<?php

namespace App\Service;

class Log4Php
{
    private $logger;
    public function __construct()
    {
        $this->logger = \Logger::getLogger("Log");
        return $this->logger;
    }

    public function info($message = '')
    {
        $this->logger->info($message);
    }

    public function debug($message = '')
    {
        $this->logger->debug($message);
    }

    public function error($message = '')
    {
        $this->logger->error($message);
    }
}
