# Getting Started

1. Install WAMP
	1. Click on WAMP tray icon > phpmyadmin
	2. Login with user: "root" pass: ""
	3. On side nav click _new+_
	4. Add database "homestead"
2. Install Composer
3. Clone this repo into C:\wamp\www
4. `cd our-food-farm`
5. `composer install`
6. `php artisan migrate`
7. Click on WAMP tray icon > Apache > Alias directories > Add an alias
8. `our-food-farm`
9. `C:\wamp\www\our-food-farm\public`
10. Ensure browsing to *localhost/our-food-farm/* works.

_If not already done:_
1. Go to C:\wamp\www\our-food-farm\public\.htaccess
2. Below line `RewriteEngine On` add `RewriteBase /our-food-farm/`




# Laravel readme below:

# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).