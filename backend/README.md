## JETGO API 

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

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development/)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


## Documentation generate
The command run in a composer install command, but run this command to patch the scribe library:

composer run-script post-install-cmd

## Deploy
the php extencion be are enabled: 
  - require ext-sodium
command to execute composer install command in cpanel:

/opt/cpanel/ea-php82/root/usr/bin/php /opt/cpanel/composer/bin/composer install


## Optimize to deploy
rm bootstrap/cache/config.php
rm bootstrap/cache/packages.php
rm bootstrap/cache/services.php

php artisan config:cache
php artisan route:cache
php artisan view:cache
composer install --optimize-autoloader --no-dev

ea-php82 artisan config:cache
ea-php82 artisan route:cache
ea-php82 artisan view:cache
/opt/cpanel/ea-php82/root/usr/bin/php /opt/cpanel/composer/bin/composer install --optimize-autoloader --no-dev

### commands in chron job
  /usr/local/bin/ea-php82 /home/tvrvlxbv/api.jetgo.mobi/artisan schedule:run >> /home/tvrvlxbv/api.jetgo.mobi/storage/logs/cron.log 2>&1
  ## chron job to queue 
  * * * * * php /home/usuario/public_html/artisan queue:work --once --tries=3 --timeout=60 >> /home/usuario/queue.log 2>&1
  * * * * * sleep 10; php /home/usuario/public_html/artisan queue:work --once --tries=3 --timeout=60 >> /home/usuario/queue.log 2>&1
  * * * * * sleep 20; php /home/usuario/public_html/artisan queue:work --once --tries=3 --timeout=60 >> /home/usuario/queue.log 2>&1
  * * * * * sleep 30; php /home/usuario/public_html/artisan queue:work --once --tries=3 --timeout=60 >> /home/usuario/queue.log 2>&1
  * * * * * sleep 40; php /home/usuario/public_html/artisan queue:work --once --tries=3 --timeout=60 >> /home/usuario/queue.log 2>&1
  * * * * * sleep 50; php /home/usuario/public_html/artisan queue:work --once --tries=3 --timeout=60 >> /home/usuario/queue.log 2>&1


  * * * * * /usr/local/bin/ea-php82 /home/tvrvlxbv/api.jetgo.mobi/artisan queue:work --once --tries=3 --timeout=60 >> /home/tvrvlxbv/api.jetgo.mobi/storage/logs/queue.log 2>&1
  * * * * * sleep 10; /usr/local/bin/ea-php82 /home/tvrvlxbv/api.jetgo.mobi/artisan queue:work --once --tries=3 --timeout=60 >> /home/tvrvlxbv/api.jetgo.mobi/storage/logs/queue.log 2>&1
  * * * * * sleep 20; /usr/local/bin/ea-php82 /home/tvrvlxbv/api.jetgo.mobi/artisan queue:work --once --tries=3 --timeout=60 >> /home/tvrvlxbv/api.jetgo.mobi/storage/logs/queue.log 2>&1
  * * * * * sleep 30; /usr/local/bin/ea-php82 /home/tvrvlxbv/api.jetgo.mobi/artisan queue:work --once --tries=3 --timeout=60 >> /home/tvrvlxbv/api.jetgo.mobi/storage/logs/queue.log 2>&1
  * * * * * sleep 40; /usr/local/bin/ea-php82 /home/tvrvlxbv/api.jetgo.mobi/artisan queue:work --once --tries=3 --timeout=60 >> /home/tvrvlxbv/api.jetgo.mobi/storage/logs/queue.log 2>&1
  * * * * * sleep 50; /usr/local/bin/ea-php82 /home/tvrvlxbv/api.jetgo.mobi/artisan queue:work --once --tries=3 --timeout=60 >> /home/tvrvlxbv/api.jetgo.mobi/storage/logs/queue.log 2>&1
  
  
  
  
  * * * * * sleep 10; php /home/usuario/public_html/artisan queue:work --once --tries=3 --timeout=60 >> /home/usuario/queue.log 2>&1
  * * * * * sleep 20; php /home/usuario/public_html/artisan queue:work --once --tries=3 --timeout=60 >> /home/usuario/queue.log 2>&1
  * * * * * sleep 30; php /home/usuario/public_html/artisan queue:work --once --tries=3 --timeout=60 >> /home/usuario/queue.log 2>&1
  * * * * * sleep 40; php /home/usuario/public_html/artisan queue:work --once --tries=3 --timeout=60 >> /home/usuario/queue.log 2>&1
  * * * * * sleep 50; php /home/usuario/public_html/artisan queue:work --once --tries=3 --timeout=60 >> /home/usuario/queue.log 2>&1

artisan queue:work --once --tries=3 --timeout=60
ea-php82 artisan queue:work  --tries=3 --timeout=60





### limpiar cache del servidor
php artisan optimize:clear
php artisan config:clear
php artisan cache:clear
composer dump-autoload

