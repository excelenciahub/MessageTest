# MessageTest

### Project setup

```
Copy .env.example file and create .env file and set the database configuration.
```

```
composer install
php artisan migrate
php artisan db:seed
```

### Send message api
- Method: POST
- URL: /public/api/message
- Request Body: 
```
{
    "author_id": 1,
    "text": "Hello",
    "created_at": "2020-02-11 22:11:20"
}
```

### View messages

URL: /public/message

