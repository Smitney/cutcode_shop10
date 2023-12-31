<?php

declare(strict_types=1);

namespace App\Logging\Telegram;

use Monolog\Logger;

final class TelegramLoggerFactory
{
    public function __invoke(array $config)
    {
        $logger = new Logger('telegram');

        $logger->pushHandler(new TelegramLoggerHendler($config));

        return $logger;
    }
}


