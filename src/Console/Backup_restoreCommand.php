<?php

declare(strict_types=1);

namespace Tavaan\Engine\Backup\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * backup:restore command.
 */
final class Backup_restoreCommand implements CommandInterface
{
    public function name(): string
    {
        return 'backup:restore';
    }

    public function description(): string
    {
        return 'Run backup:restore (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
