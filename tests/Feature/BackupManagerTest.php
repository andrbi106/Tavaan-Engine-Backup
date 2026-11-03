<?php

declare(strict_types=1);

namespace Tavaan\Engine\Backup\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Engine\Backup\BackupManager;
use Tavaan\Engine\Backup\BackupManagerServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور BackupManager.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class BackupManagerTest extends TestCase
{
    private BackupManager $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new BackupManager($config);
    }

    /**
     * T-01: backup full → manifest + hash
     */
    public function test_t01_backup_full__manifest__hash(): void
    {
        // TODO: پیاده‌سازی سناریوی T-01 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-01 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-02: DB dump (chunked، حافظه ثابت)
     */
    public function test_t02_db_dump_chunked__(): void
    {
        // TODO: پیاده‌سازی سناریوی T-02 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-02 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-03: رمزنگاری/رمزگشایی roundtrip
     */
    public function test_t03__roundtrip(): void
    {
        // TODO: پیاده‌سازی سناریوی T-03 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-03 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-04: verify: دستکاری → fail
     */
    public function test_t04_verify___fail(): void
    {
        // TODO: پیاده‌سازی سناریوی T-04 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-04 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-05: restore
     */
    public function test_t05_restore(): void
    {
        // TODO: پیاده‌سازی سناریوی T-05 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-05 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-06: retention/prune
     */
    public function test_t06_retentionprune(): void
    {
        // TODO: پیاده‌سازی سناریوی T-06 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-06 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-07: ZIP خالص (بدون ext-zip)
     */
    public function test_t07_zip___extzip(): void
    {
        // TODO: پیاده‌سازی سناریوی T-07 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-07 هنوز پیاده‌سازی نشده است.');
    }

}