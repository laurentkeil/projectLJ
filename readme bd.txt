créer bd "projetlj" sur phpmyadmin avec interclassement utf 8 general ci

mettre les migrations générées de schema designer, les seeds (sauf dataBaseSeeder) et les models (sauf User)

composer dump-autoload

composer update

php artisan migrate:install

php artisan auth:reminders-table

php artisan auth:reminders-controller (si n'existe pas)

php artisan migrate

php artisan db:seed



(ou pour tout refaire : php artisan migrate:refresh --seed)