# TrelloAssessment

Install
Clone the git repository on your computer

$ git clone repository
You can also download the entire repository as a zip file and unpack in on your computer if you do not have git

After cloning the application, you need to install it's dependencies.

$ cd trello-clone-vue-laravel
$ composer install
Setup
When you are done with installation, copy the .env.example file to .env
$ cp .env.example .env
Generate the application key
$ php artisan key:generate
Add your database credentials to the necessary env fields

Migrate the application

$ php artisan migrate
Seed Database
php artisan db:seed
Install Passport
$ php artisan passport:install
Install node modules
$ npm install
Run the application
$ php artisan serve
