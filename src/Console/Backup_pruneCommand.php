<?php

declare(strict_types=1);

namespace Tavaan\Engine\Backup\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * backup:prune command.
 */
final class Backup_pruneCommand implements CommandInterface
{
    public function name(): string
    {
        return 'backup:prune';
    }

    public function description(): string
    {
        return 'Run backup:prune (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
