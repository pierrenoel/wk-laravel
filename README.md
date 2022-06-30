# Installer le projet sur votre machine

1. ```git clone git@github.com:pierrenoel/wk-laravel.git``
2.```composer install```

# Database
1. ```touch database/database.sqlite```
2. Duplicate .env.example into .env

## Change mysql to sqlite

```conf
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```
```conf
DB_CONNECTION=slqite
```

3. ```php artisan key:generate```
4. ```php artisan config:clear```

## Migrate the database and seed 
- ```php artisan migrate:fresh --seed```

## Tailwind

1. ```npm install```
2. ```npm run watch```
