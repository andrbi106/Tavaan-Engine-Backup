<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Backup Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور backup — همهٔ کلیدهای مستندشده در `docs/03-engines/backup.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/backup.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('BACKUP_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('BACKUP_PREFIX', 'backup:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('BACKUP_LOG_CHANNEL', 'backup'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Backup',
        'accessor' => 'backup',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];