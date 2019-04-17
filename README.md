# Mage

## Not for Production

## Install

```
composer require omatech/mage
```

## Setup

```
php artisan vendor:publish --tag=mage-publish
```

Will seed the tables after migrate
```
php artisan migrate
```

### Update assets

```
php artisan vendor:publish --tag=mage-assets --force
```

### Create User

```
php artisan mage:users-create
```

### Blade

Improve @can directive adding guard for spatie
```
@can('permission-name', 'guard')
@elseif('permission-name', 'guard')
@end
```