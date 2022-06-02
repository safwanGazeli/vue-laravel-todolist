# TODOLIST 
To run this application you require to install: 

### Laravel: 

composer create-project laravel/laravel PROJECTNAME

composer require laravel/ui

### Vue.js: 

php artisan ui vue

php artisan ui vue --auth

npm install vue-router@3

### Tailwind:

npm install -D tailwindcss@latest postcss@latest autoprefixer@latest

then run, 

npx tailwindcss init

set this path below in tailwind.config.js

    content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    ],
    
there are a few package can be installed and it was a option:

npm install laravel-mix-purgecss --save-dev


### laravel Sanctum

In this application use laravel sanctum authertication, so in terms to install this you can run command below:

Composer require laravel/sanctum

php artisan vendor:publish --provider=”Laravel\SanctumServiceProvider”



This is a faker code that can be used in term to create a dummy data in userFactory : 

            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            
After paste this code, uncoment  \App\Models\User::factory(10)->create(); in DatabaseSeeder. Then, you can run php artisan db:seed
This application consist of 2 role which is admin and user. Each user have different function, either to access the application as a admin, you need to set the role as admin in database while for user you need to set role as user.

### API
Here is api link that show all the list of todos task:

localhost:8000/api/todos

## NOTE:

I was change table name Todo_File_Upload to File_Uploads_todos, it is because for relationship between Todos table and File_uploads table must in alphabetical order. 


