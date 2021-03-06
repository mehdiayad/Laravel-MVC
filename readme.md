<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

## About the project

- Reproduce Amazon website as a training (MVC Architecture)

## Project Version

- Version : 1.0.0-SNAPSHOT


## Project requirements

- Server : MAMP / WAMP / XAMPP
- Browser : Chrome / Mozilla

## Project components version

- Laravel 5.8
- Lavarel Debugbar : 4.1 (*)
- Collective HTML : 5.8 (*)
- PHP : 7.3.1
- Bootstrap 4.2.1
- JQuery : 3.3.1
- Popper : 1.14.6
- FontAwesome : 5.7.0

## Project setup

- install MAMP
- Open MAMP application
- Go to webstart page -> tools -> phpMyAdmin
- create a database name 'laravel'
- download the project from github and put it in the default Mamp server directory
- Come back to webstart page, you should see all MySQL informations connections 
- update project/.env databases informations with MySQL informations connections  (Default & Additionnal)
- update project/config/database.php databases informations with MySQL informations connections (Default & Additionnal)
- Open the terminal from your project root folder
- Run the command php artisan migrate:install
- Run the command php artisan migrate:refresh --seed
- Go to webstart page -> MyWebsite -> laravel* -> public
- Now you are able to use and see the application
- You can connect to the app with (email:super@gmail.com / password:super)

## Project concepts used

- Authentification
- Eloquent ORM
- Query Builder
- Migrations
- Seeding
- Middleware
- Dependency Injection
- Hashing
- Pagination
- Relationship 1:N
- Error Handling
- Unit testing

