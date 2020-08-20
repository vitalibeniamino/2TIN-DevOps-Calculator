# 2TIN DevOps Calculator
## Requirements & configuration
Install PHP >7.3
```
https://www.php.net/downloads
```

Install Composer
```
https://getcomposer.org/download/
```
## Testing & running the project
Install dependencies (--no-dev when in production)
```
composer install
```
Regenerate autoload classmap (run once)
```
composer dump-autoload
```

Run unit tests
```
./vendor/bin/phpunit tests
```
Use the PHP binary built in webserver to run in a development environment
```
php -S localhost:8080
```
