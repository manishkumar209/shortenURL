

Clone the repository

composer install

Copy the example env file and make the required configuration changes in the .env file

cp .env.example .env

Generate a new application key

php artisan key:generate
    
Run the database migrations (Set the database connection in .env before migrating)

php artisan migrate

start the web browser at address localhost/shortenURL/public
