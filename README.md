# Laravel Project - Enhanced Blog Application with Authentication and Admin Panel

## GitHub Repository
[GitHub Repository URL](https://github.com/Diadem1234/basic-blog-app.git)


### Prerequisites
- **Install and set up Visual Studio(VS Code)**
- **Install Node.js**
- **Install Git and create an account**
- **Install Composer**
- **Install Laragon (Windows)**
- **Install MongoDB (Windows)**

## Features
- Create, Read, Update, Delete functions for Post and User
- MongoDB integration with Laravel


### Installation
1. **Clone the Repository**:
   git clone https://github.com/Diadem1234/basic-blog-app.git
   cd basic-blog-app
3. **Create Laravel 11 Project**
4. **Install dependencies**
5. **Set up Environment Variables**
6. **Create Post Controller, Model, Factory and Seeder** \
    ``` php artisan make:model Post --migration --controller --factory ```
7. **Run Migrations and Seed database**
8. **Create views for app layout, create, delete, edit, list and show post.**
     Create "Delete confirmation view"
9. **Create Create, Read, Update & Delete functions for Post Controller.**
10. **Add routes to web.php**
11. **Run and test the application through http://127.0.0.1:8000** \
    ``` php artisan serve ```
12. **Create a new branch using this command.** \
    ```git checkout -b feature/auth-admin-panel```
13. **Setup new database configuration for MongoDB**\
    Add this to your .env file
    ```
    MONGODB_CONNECTION=mongodb
    MONGODB_HOST=127.0.0.1
    MONGODB_PORT=27017
    MONGODB_DATABASE=laravel_project
    ``` \
    Add this to your database.php, under 'connection' field.
    ```
    'mongodb' => [
    'driver'    => 'mongodb',
    'dsn'       => env('MONGODB_CONNECTION').'://'.env('MONGODB_HOST').':'.env('MONGODB_PORT'),
    'database'  => env('MONGODB_DATABASE'),
    ],
    ```
14. **Setup laravel/ui and bootstrap for authentication using these commands** \
    ```
    composer require laravel/ui  \
    php artisan ui bootstrap --auth
    ```
15. **Create a migration that will add role field in users table** \ 
    ``` php artisan make:migration add_role_to_users --table=users ```
    ``` php artisan migrate ```

16. **Create Admin controllers for Users and Post**\
    ``` php artisan make:controller Admin\UserController --resource ```\
    ``` php artisan make:controller Admin\PostController --resource ```\
17. **Add admin routes for Posts, Users resources in web.php**

18. **Install mongodb extension using this command** \
    ``` composer require mongodb/laravel-mongodb```

19. **Added default admin user upon migration** \
    Using this email and password.\
    ```
    admin@blog.com
    admin123
    ```

20. **Added Create, Read, Update & Delete functions in Users & Post controllers** 

21. **Install Laravel Sanctum for API** \
    Using this command. \
    ```
    php artisan install:api
    ```
