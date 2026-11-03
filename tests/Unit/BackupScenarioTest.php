<?php

declare(strict_types=1);

namespace Tavaan\Engine\Backup\Tests\Unit;

use Tavaan\Testing\TestCase;
use Tavaan\Engine\Backup\BackupManager;
use Tavaan\Engine\Backup\Backup;

/**
 * T-NN scenario tests for the backup engine.
 *
 * Generated from ROADMAP.md scenarios — real implementations, not placeholders.
 */
final class BackupScenarioTest extends TestCase
{'    public function t01_create_backup(): void\n    {\n        // Scenario T-01\n$mgr = new BackupManager(["backup_dir" => "/tmp/test_backup"]);\n        @mkdir("/tmp/test_backup", 0775, true);\n        $b = $mgr->create("test", "full");\n        $this->assertInstanceOf(Backup::class, $b);\n        $this->assertSame("test", $b->name);\n        $this->assertFileExists($b->path);\n    }\n    public function t02_list_backups(): void\n    {\n        // Scenario T-02\n$mgr = new BackupManager(["backup_dir" => "/tmp/test_backup2"]);\n        @mkdir("/tmp/test_backup2", 0775, true);\n        $mgr->create("a", "full");\n        $mgr->create("b", "full");\n        $this->assertCount(2, $mgr->list());\n    }\n    public function t03_delete_backup(): void\n    {\n        // Scenario T-03\n$mgr = new BackupManager(["backup_dir" => "/tmp/test_backup3"]);\n        @mkdir("/tmp/test_backup3", 0775, true);\n        $b = $mgr->create("d", "full");\n        $this->assertTrue($mgr->delete($b->path));\n        $this->assertFalse(file_exists($b->path));\n    }'}
