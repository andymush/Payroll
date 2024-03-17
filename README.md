
## ABOUT 
The app is a simple Payroll Management system that manages HR operations such as queueing payroll documents while also providing a platform for employees to view their payroll details. 


## FEATURES

* Employee Clock In/Out
* Employee Payroll Details
* Employee Payroll Documents
* Employee Company Registration
* Employee Leave Application/Approval


## TECHNOLOGIES USED
* Laravel 10
* MySQL
* Vue 3
* Vuetify

## REQUIREMENTS
* PHP 8.0
* Git 
* Composer
* Node.js v18.0 or higher
* NPM v9.0 or higher
* MySQL
* XAMPP or WAMPP server

## INSTALLATION/RUNNING THE APP LOCALLY
To run the app locally, follow the steps below:

1. Clone the repository
    git clone https://github.com/andymush/Payroll.git


2. cd into the project directory & Install composer dependencies & npm dependencies

    composer install 
    npm install

3. Create a copy of your .env file

    cp .env.example .env

4. Generate an app encryption key

    php artisan key:generate

5. Create an empty database for our application

    e.g "payroll"

6. Add database information to the .env file

    DB_DATABASE=payroll
    DB_USERNAME=root
    DB_PASSWORD=

7. Migrate the database

    php artisan migrate

8. Seed the database

    php artisan db:seed

9. Run the server on two separate terminals

    terminal 1 - php artisan serve 
    terminal 2 - npm run dev

10. Visit the application on your browser

11. Login with the following credentials

    Employee : 
            email => employee1@gmail.com
            password => 1234567890

    Admin/HR Manager:
            'email => admin@gmail.com
            password => 1234567890

    