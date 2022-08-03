## Installation instructions

 1.  Run cp .env.example .env file to copy example file to .env
 2.  Run composer install command
 3.  Run php artisan migrate --seed command.
 4.  Run php artisan key:generate command.

 ## for Iseed to convert Tables to seeder classe FOR DEVELOPMENT ONLY
 1.  Run php artisan world:init - command.
 2.  Run php artisan db:seed --class=CounriesTableSeeder.
 3.  Run php artisan db:seed --class=CitiesTableSeeder

 4. php artisan iseed cities,countries
 5. php artisan iseed cities --classnameprefix=blcts


## Admin credentials

    **Username**: admin@admin.com
    **Password**: password