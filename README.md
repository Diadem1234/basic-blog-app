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
   cd your-repository
2. **Create Laravel 11 Project**
3. **Install dependencies**
4. **Set up Environment Variables**
5. **Create Post Controller, Model, Factory and Seeder** \
    ``` php artisan make:model Post --migration --controller --factory ```
6. **Run Migrations and Seed database**
7. **Create views for app layout, create, delete, edit, list and show post.**
     Create "Delete confirmation view"
8. **Create Create, Read, Update & Delete functions for Post Controller.**
9. **Add routes to web.php**
10. **Run and test the application through http://127.0.0.1:8000** \
    ``` php artisan serve ```
11. **Create a new branch using this command.** \
    ```git checkout -b feature/auth-admin-panel```
12. **Setup new database configuration for MongoDB**\
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
