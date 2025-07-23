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

## Proje'de Kullanımı

```php
use Beytullahk54\SettingsPackage\Facades\SettingFacade;
```

**Ayar eklemek için:**
```php
SettingFacade::setSetting('test', 'test34');
```

**Ayarı çekmek için:**
```php
SettingFacade::getSetting('test');
```

## Özellikler

- Paket geliştirmeleri ile birlikte type güncellemesi gelecektir
- Ayar çekme işlemlerine cache özelliği getirdik
- Bu paketin amacı ayarlarınızı kaydedebilmenizi sağlamaktır