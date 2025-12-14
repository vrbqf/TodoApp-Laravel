<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

Project Requirements

To run this project correctly, the following software must be installed:

🧑‍💻 Basic Tools

PHP 8.1 or higher

Composer (PHP dependency manager)

Web server

Apache / Nginx or Laravel built-in server (php artisan serve)

Database

MySQL / MariaDB
(This project does not use SQLite)

⚙️ Framework & Libraries

Laravel 12

Bootstrap 5 (frontend styling)

Laravel Authentication (login & registration system)

🚀 Project Installation

Clone the repository:

git clone <repository_url>
cd <project_name>


Install dependencies:

composer install


Create the environment configuration file:

cp .env.example .env


Generate the application key:

php artisan key:generate


Configure the database in the .env file:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database_name
DB_USERNAME=username
DB_PASSWORD=password


Run database migrations:

php artisan migrate


Start the application:

php artisan serve


The application will be available at:

http://127.0.0.1:8000

🗂 Technologies Used

PHP

Laravel (MVC architecture)

Blade templating engine

MySQL database

Bootstrap 5

Git & GitHub

📝 Notes

This project is a school To-Do / Task Manager application with the following features:

user registration and login

adding new tasks

marking tasks as completed

deleting tasks

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
