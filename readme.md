# PCHC Patient Satisfaction Survey Kiosks

Application for the display and management of patient satisfaction surveys present at PCHC health center checkouts.

## Installation

This application is built using [Laravel](https://laravel.com/) version 5.7.

Documentation can be found at https://laravel.com/docs/5.7.

### Server Requirements

The Laravel framework has a few system requirements:

 - PHP >= 7.1.3
 - OpenSSL PHP Extension
 - PDO PHP Extension
 - Mbstring PHP Extension
 - Tokenizer PHP Extension
 - XML PHP Extension
 - Ctype PHP Extension
 - JSON PHP Extension

 ### Installing Laravel

[Download](https://github.com/PCHC/Patient-Satisfaction-Survey-Kiosk/archive/master.zip) and unpack or clone with git: 

```bash
$ git clone https://github.com/PCHC/Patient-Satisfaction-Survey-Kiosk.git
```

Laravel utilizes [Composer](https://getcomposer.org/) to manage its dependencies. So, before using Laravel, make sure you have Composer installed on your machine.

Then, in a command line, navigate to the project directory and install Laravel and its dependencies:

```bash
$ cd [project-directory]
$ composer install
```

### Installing Development Dependencies

To build new public resources, you'll need to install dependencies via [Node Package Manager](https://www.npmjs.com/get-npm).

With NPM installed on your machine, navigate to the project directory and run:

```bash
$ npm install
```

## Configuration

### Public Directory

After installing Laravel, you should configure your web server's document / web root to be the `public` directory. The `index.php` in this directory serves as the front controller for all HTTP requests entering your application.

### Environment Variables

Environment variables, including database connection information, mail drivers, and more are located in the `.env` file in the project root. If this file is not present, copy the `.env.example` to `.env`.

Generate a new application key for `.env` with the following command:

```bash
$ php artisan key:generate
```

**Important**: Do not add `.env` to version control. This file includes sensitive information like passwords and encryption keys.

### Database

Out of the box, Laravel supports four databases:

 - MySQL
 - PostgreSQL
 - SQLite
 - SQL Server

Database configuration can be found in `config/database.php`. Set database variables like connection settings, users, and passwords in `.env`.

To create the necessary database tables, run:

```bash
$ php artisan migrate
```

### Database Seeding

To set the application up with an initial admin user, you will need to "seed" the database.

Three environment variables can be found in `.env`:

```
ADMIN_USER_NAME
ADMIN_USER_EMAIL
ADMIN_USER_PASSWORD
```

Set these variables and then run:

```bash
$ php artisan db:seed
```

## Development

Documentation for Laravel 5.7 can be found at https://laravel.com/docs/5.7/

### Compiling Assets

Laravel uses [Laravel Mix](https://laravel.com/docs/5.7/mix), an API for defining Webpack build steps, for building assets using common CSS and JavaScript pre-processors.

To build assets, run the following in the project root:

```bash
$ npm run dev
```

To build minified production files, run:

```bash
$ npm run production
```

To watch for changes and automatically recompile as you work, run:

```bash
$ npm run watch
```
