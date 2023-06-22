## Task Management

### Install Requirement
```
Laravel: 10.10
PHP >= 8.1     
Database: sqlite
Bootstrap: 5.3
Jquery
```

### How to run:
- Clone this repository. Then, cd to folder of source.
- Install PHP packages
```
composer install
```
- Copy file .env.example to config environment in .env
```
cp .env.example .env
```
- Generate key in configuration file
```
php artisan key:generate
```
- Run databases migration: 
```
php artisan migrate
```
- Run databases seeder to create fake data.
```
php artisan db:seeder
```
- Run command line below and open browser on [http://127.0.0.1:8000]
```
php artisan server
```
- Run install Node packages (we're using [Vite](https://vitejs.dev/) is available in Laravel)
```
  npm install
  npm run dev
  npm run build
```

### Packages
- [Bootstrap](https://getbootstrap.com/docs/5.0/getting-started/download/): npm install bootstrap
- [Datatables](https://datatables.net/manual/installation): npm install --save datatables.net-dt
- [Fontawesome](https://fontawesome.com/docs/web/setup/packages): npm install --save @fortawesome/fontawesome-free
- [flatpickr](https://flatpickr.js.org/getting-started/): npm i flatpickr --save


## About Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

A simple web for Task Management using Laravel and Sqlite DB

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.
