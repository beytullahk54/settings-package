# Settings Package

Laravel için ayarlar yönetim paketi.

## Kurulum

```bash
composer require beytullahk54/settings-package
```

Paket otomatik olarak Laravel tarafından keşfedilir ve yüklenir.

## Migration

Ayarlar tablosunu oluşturmak için:

```bash
php artisan migrate --path=packages/beytullahk54/settings-package/src/database/migrations
```

## Kullanım

Paket `/settings-package` route'u üzerinden erişilebilir.

## ServiceProvider

Bu paket `Beytullahk54\SettingsPackage\SettingsPackageServiceProvider` kullanır.
