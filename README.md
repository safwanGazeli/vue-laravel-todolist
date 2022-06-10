# TODOLIST 
To run this application you have to clone this repo from instructions below: 

### Clone: 

git clone --single-branch --branch master https://github.com/safwanGazeli/vue-laravel-todolist.git


### Install : 

Then you need to install: 

composer install / composer i

npm install 


After finish all the step above, you need to add a new .env file and setup your database name. Then run to get all the tables using:

php artisan migrate


### API
Here is api link that show all the list of todos task:

localhost:8000/api/todos

## NOTE:

I was change table name Todo_File_Upload to File_Uploads_todos, it is because for relationship between Todos table and File_uploads table must in alphabetical order. 
