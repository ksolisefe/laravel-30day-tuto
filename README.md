## Example Laravel Project

Opinionated Laravel starter used for learning and demos.

### Requirements
- PHP 8.2+
- Composer
- Node.js 18+ and npm
- SQLite (or another DB if you configure it)

### First-time setup
```bash
# 1) Install PHP deps
composer install

# 2) Install JS deps
npm install

# 3) Environment
cp .env.example .env
php artisan key:generate

# 4) Database (SQLite by default)
# Ensure this file exists (Laravel will create it if missing):
touch database/database.sqlite

# Set in .env
# DB_CONNECTION=sqlite
# DB_DATABASE=/absolute/path/to/your/project/database/database.sqlite

# 5) Run migrations and seeders (required the first time)
php artisan migrate --seed

# 6) Start servers
php artisan serve
npm run dev
```

After seeding, a test user is created:
- Email: `test@example.com`
- Password: `password`

### Common commands
```bash
# Reset DB and re-seed (useful during development)
php artisan migrate:fresh --seed

# Open tinker REPL
php artisan tinker

# Run tests
php artisan test
```

### Troubleshooting
- If you are using SQLite viewers and do not see foreign-key links, enable them in your client and ensure the connection runs `PRAGMA foreign_keys=ON;`.
- If config changes are not taking effect, clear caches:
```bash
php artisan config:clear && php artisan cache:clear && php artisan view:clear
```

### Project structure highlights
- `app/Models` – Eloquent models (e.g., `Job`, `Tag`, `Employer`)
- `database/migrations` – schema definitions
- `database/seeders/DatabaseSeeder.php` – seeds initial data
- `resources/views` – Blade templates and components
- `routes/web.php` – HTTP routes

### Notes
- This project uses Vite for assets; keep `npm run dev` running during development.
- Default DB is SQLite for simplicity; switch to MySQL/Postgres by updating `.env` and `config/database.php`.

#### Key commands summary for convenience:

```bash
composer install
npm install
cp .env.example .env && php artisan key:generate
touch database/database.sqlite
php artisan migrate --seed
php artisan serve
npm run dev
```