<?php

declare(strict_types=1);

namespace Tavaan\Engine\Backup\Contracts;

/**
 * قرارداد BackupManager.
 *
 * @see \Tavaan\Engine\Backup\BackupManager
 * @api 1.0
 */
interface BackupManagerInterface
{
    /**
     * متد run.
     *
     * @return mixed
     */
    public function run(/* ... */): mixed;

    /**
     * متد database.
     *
     * @return mixed
     */
    public function database(/* ... */): mixed;

    /**
     * متد files.
     *
     * @return mixed
     */
    public function files(/* ... */): mixed;

    /**
     * متد restore.
     *
     * @return mixed
     */
    public function restore(/* ... */): mixed;

    /**
     * متد list.
     *
     * @return mixed
     */
    public function list(/* ... */): mixed;

    /**
     * متد verify.
     *
     * @return mixed
     */
    public function verify(/* ... */): mixed;

    /**
     * متد prune.
     *
     * @return mixed
     */
    public function prune(/* ... */): mixed;
}