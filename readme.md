<<<<<<< HEAD
=======


>>>>>>> 29ffa792131da005ff2f6cadcb4a6e5f3fc81c73
Clone the repository

composer install

Copy the example env file and make the required configuration changes in the .env file

cp .env.example .env

Generate a new application key

php artisan key:generate
<<<<<<< HEAD

=======
    
>>>>>>> 29ffa792131da005ff2f6cadcb4a6e5f3fc81c73
Run the database migrations (Set the database connection in .env before migrating)

php artisan migrate

start the web browser at address localhost/shortenURL/public
