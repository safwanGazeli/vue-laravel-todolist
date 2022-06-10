# TODOLIST 
To run this application you have to clone this repo from the instructions below:

### Clone: 

```git clone --single-branch --branch master https://github.com/safwanGazeli/vue-laravel-todolist.git```


### Install : 

Then you need to install: 

```composer install```

```npm install```


After finishing all the steps above, you need to add a new .env file and set up your database name. Then run to get all the tables and generate App Key using:

```php artisan key:generate```

```php artisan migrate```


### API
Here is an API link that shows all the list of todos tasks:

localhost:8000/api/todos

## NOTE:

I changed the table name Todo_File_Upload to File_Uploads_todos, it is because the relationship between the Todos table and the File_uploads table must in alphabetical order.
