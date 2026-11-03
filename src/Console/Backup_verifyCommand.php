<?php

declare(strict_types=1);

namespace Tavaan\Engine\Backup\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * backup:verify command.
 */
final class Backup_verifyCommand implements CommandInterface
{
    public function name(): string
    {
        return 'backup:verify';
    }

    public function description(): string
    {
        return 'Run backup:verify (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
