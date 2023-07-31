<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
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

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Clone Repo Projects

```bash
https://github.com/9Alpha9/travel-web.git
```

## NPM Installation
Install via npm for add node-packages modules Tailwind Css 

```bash
> cd travel-web
npm install
```
## Composer Installation
Install via artisan for run laravel packages modules 

```bash
> locate to travel-web folder

composer install
mv .env.example .env

> create DB name birentcar_travel
> Migration database with run this command on your terminal

php artisan migrate
```

## Add Google configuration
first of all locate to google services to app/Http/config/services.php and add this command 
```bash
'google' => [
    'client_id'     => env('GOOGLE_CLIENT_ID'),
    'client_secret' => env('GOOGLE_APP_SECRET'),
    'redirect'      => env('GOOGLE_REDIRECT'),
],
```
Next add this code to .env 

```bash
GOOGLE_CLIENT_ID=your-client-ID
GOOGLE_APP_SECRET=google-secreat-key
GOOGLE_REDIRECT=http://127.0.0.1:8000/auth/callback
```
> **Note**
> please register your Google API Token to [Google Console Cloud](https://console.cloud.google.com/)


## Add Midtrans Configuration
locate to .env and add this code
```bash
MIDTRANS_IS_PRODUCTION=false
MIDTRANS_MERCHAT_ID=your-merchant-ID
MIDTRANS_CLIENT_KEY=SB-Mid-client-your-client-KEY
MIDTRANS_SERVER_KEY=SB-Mid-server-your-server-KEY
```
> **Note**
> please register your Midtrans API to [Midtrans Official Website](https://midtrans.com/id)
> for testing Midtrans you can visit [Midtrans Mock Payment Testing](https://simulator.sandbox.midtrans.com/bca/klikbca/index)

Next generate key php artisan.

```bash
php artisan key:generate
```
> **Note**
> this command for generate APP_KEY on your .env


## Run The Projects
run the projects by type this command in to terminal
```bash
> run Xampp or another Database engine
npm run watch
php artisan serve
```


