<?php

namespace App\Service;

use think\facade\Log;

class ThinkLog
{
    private $logger;
    public function __construct()
    {
        return Log::init([
            'default'    =>    'file',
            'channels'    =>    [
                'file'    =>    [
                    'type'    =>    'file',
                    'path'    =>    './logs/',
                ],
            ],
        ]);
    }
    public function info($message = '')
    {
        Log::info($message);
        Log::save();
    }

    public function debug($message = '')
    {
        Log::debug($message);
        Log::save();
    }

    public function error($message = '')
    {
        Log::error($message);
        Log::save();
    }
}
