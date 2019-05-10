# Laravel GraphQL Starter
Basic boilerplate for Laravel GraphQL

**Includes**
- [the-control-group/voyager](https://github.com/the-control-group/voyager) (Admin Panel & Dummy Data)
- [rebing/graphql-laravel](https://github.com/rebing/graphql-laravel) (GraphQL)
- [nohac/laravel-graphiql](https://github.com/Nohac/laravel-graphiql) (GraphiQL Interface)


## Installation
### Step 1
Clone the repository

	git clone https://github.com/ridvankaradag/laravel-graphql-starter.git
	cd laravel-graphql-starter

### Step 2
Install dependencies

	composer install

### Step 3
Create a .env file from an example and configure with your local database

	cp .env.example .env

```env
.env
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```
### Step 4 
Generate key, make migration and seed

	php artisan key:generate
	php artisan migrate
	php artisan db:seed --class=VoyagerDatabaseSeeder
	php artisan db:seed --class=VoyagerDummyDatabaseSeeder

### Step 5
Serve your project

	php artisan serve
	http://localhost:8000/graphiql
	
### Step 6
Yay! Everything is OK. You can run the dummy query
```graphql
{
  posts {
    id
    title
  }
  
  users{
    id
    email
  }
}
```

### Error Handling
*Missing storage symlink*
```bash
php artisan storage:link
```
*Don't forget update your **APP_URL** attribute on **.env** file* 

*Specified key was too long error*
[https://laravel-news.com/laravel-5-4-key-too-long-error](https://laravel-news.com/laravel-5-4-key-too-long-error)

**Admin Dashboard**

	http://localhost:8000/admin
	email: admin@admin.com
	password: password

**Tip**

*Check **App\GraphQL** folder and **config/graphql.php** file*

*For additional information, you can check the repositories in the **Includes** section.*


