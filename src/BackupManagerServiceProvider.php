<?php

declare(strict_types=1);

namespace Tavaan\Engine\Backup;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Backup\Contracts\BackupManagerInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * BackupManagerServiceProvider — ثبت سرویس‌های موتور BackupManager.
 */
final class BackupManagerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(BackupManagerInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new BackupManager($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('backup', $this->app->get(BackupManagerInterface::class));

        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Backup\Console\Backup_runCommand::class;
        $this->commands[] = \Tavaan\Engine\Backup\Console\Backup_listCommand::class;
        $this->commands[] = \Tavaan\Engine\Backup\Console\Backup_verifyCommand::class;
        $this->commands[] = \Tavaan\Engine\Backup\Console\Backup_restoreCommand::class;
        $this->commands[] = \Tavaan\Engine\Backup\Console\Backup_pruneCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            BackupManagerInterface::class,
            'backup',
        ];
    }
}