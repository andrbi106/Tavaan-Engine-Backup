# Tavaan Engine — Backup

> **پشتیبان‌گیری** — موتور Backup در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.backup` |
| نام | `Backup` |
| عنوان فارسی | پشتیبان‌گیری |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Backup` |
| نوع | `engine` |
| Facade | `Backup` (accessor: `backup`) |

## توضیحات

M5 — DB dump خالص (بدون mysqldump، chunked با cursor → حافظهٔ ثابت)، ZIP خالص (ZipWriterPure + ZipReader خودنوشته)، 🔒 رمزنگاری AES-256-GCM با کلید جدا از APP_KEY، verify (hash+decrypt)، restore با --force + maintenance mode، retention/prune.

## خطاها (Exceptions)

- `Tavaan\Engine\Backup\Exceptions\BackupException`

## Facadeها

- `Tavaan\Engine\Backup\Facades\Backup`

## کلاس‌های اصلی

- `src/BackupEncrypter.php`
- `src/Console/BackupListCommand.php`
- `src/Console/BackupPruneCommand.php`
- `src/Console/BackupRestoreCommand.php`
- `src/Console/BackupRunCommand.php`
- `src/Console/BackupVerifyCommand.php`
- `src/DatabaseDumper.php`
- `src/DatabaseRestorer.php`
- `src/Manifest.php`
- `src/ZipReader.php`
- `src/backup.php`

## Service Providerها

- `Tavaan\Engine\Backup\BackupManagerServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `config`
- `filesystem`

**موتورهای اختیاری:**

- `database`
- `crypt`
- `cache`
- `compat`

## دستورات CLI

- `backup:run`
- `backup:list`
- `backup:verify`
- `backup:restore`
- `backup:prune`

## پیکربندی

- فایل پیکربندی: `config/backup.php`
- کلید: `backup`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Backup.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Backup`** (این مخزن) | موتور Backup |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
