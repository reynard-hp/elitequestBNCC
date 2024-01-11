## Installation
Run these commands on terminal before running the project:
```
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate –seed
php artisan storage:link
```

There are some additions in .env file
```
FAKER_LOCALE = id_ID
FILESYSTEM_DISK=public
```
and change in .env file:
```
DB_DATABASE=cook_share
```

After all installations complete, start XAMPP (Apache and SQL) and run this command on terminal:
```
php artisan serve
```
