### Project Setup

First Clone the repository:

```bash
git clone https://github.com/sohan065/laravel_real_time_chat_app.git

```

Go to the project directory.

```bash
cd laravel_real_time_chat_app
```

Install the composer & npm dependencies.

```bash
composer install
```

#### Env Configuration.

Copy the `.env.example` file to `.env` and update the database credentials.

Generate artisan key.

```bash
php artisan key:generate
```

#### Database Migration & Seeding.

Configure your database in `.env` file.

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=chat_app
DB_USERNAME=root
DB_PASSWORD=your_db_password
```

Then run the database migration command to create the tables.

```bash
php artisan migrate
```

Run the server.

```bash
php artisan serve
```

It will serve the app on `http://127.0.0.1:8000` by default.

### Configuration Pusher

1. go to https://pusher.com/
2. log in and create app and then you will get app_key, secret_key

```dotenv
PUSHER_APP_ID=your_app_id
PUSHER_APP_KEY=your_app_key
PUSHER_APP_SECRET=your_secret
PUSHER_APP_CLUSTER=

```

Now go to browser and open two tab and browse `http://127.0.0.1:8000` and enter name and start chat
