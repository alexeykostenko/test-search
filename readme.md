git clone git@github.com:alexeykostenko/test-search.git
cd test-search
composer install
cp .env.example .env
set DB credentials
php artisan key:generate
php artisan migrate
php artisan db:seed
