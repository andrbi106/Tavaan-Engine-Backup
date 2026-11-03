<?php

declare(strict_types=1);

namespace Tavaan\Engine\Backup\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * backup:run command.
 */
final class BackupRunCommand implements CommandInterface
{
    public function name(): string
    {
        return 'backup:run';
    }

    public function description(): string
    {
        return 'Run backup:run (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
