<?php

declare(strict_types=1);

namespace Tavaan\Engine\Backup\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * backup:list command.
 */
final class Backup_listCommand implements CommandInterface
{
    public function name(): string
    {
        return 'backup:list';
    }

    public function description(): string
    {
        return 'Run backup:list (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
