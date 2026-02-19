# Laravel Authentication Implementation

This repository now includes concrete Laravel auth code for:

- Register
- Login / Logout
- Forgot password (email reset link)
- Reset password

## Implemented files

- Routes: `routes/web.php`
- Controllers:
  - `app/Http/Controllers/Auth/RegisterController.php`
  - `app/Http/Controllers/Auth/LoginController.php`
  - `app/Http/Controllers/Auth/ForgotPasswordController.php`
  - `app/Http/Controllers/Auth/ResetPasswordController.php`
- Form Requests:
  - `app/Http/Requests/Auth/RegisterRequest.php`
  - `app/Http/Requests/Auth/LoginRequest.php`
- Model:
  - `app/Models/User.php`
- Migrations:
  - `database/migrations/2024_01_01_000000_create_users_table.php`
  - `database/migrations/2024_01_01_000001_create_password_reset_tokens_table.php`
- Views:
  - `resources/views/layouts/app.blade.php`
  - `resources/views/welcome.blade.php`
  - `resources/views/dashboard.blade.php`
  - `resources/views/auth/register.blade.php`
  - `resources/views/auth/login.blade.php`
  - `resources/views/auth/forgot-password.blade.php`
  - `resources/views/auth/reset-password.blade.php`

## How to test

1. Ensure your Laravel dependencies are installed:
   ```bash
   composer install
   ```
2. Configure your `.env` (database + mail).
3. Run migrations:
   ```bash
   php artisan migrate
   ```
4. Start app:
   ```bash
   php artisan serve
   ```
5. Test flows:
   - Register at `/register`
   - Login at `/login`
   - Request reset link at `/forgot-password`
   - Reset password from email link (`/reset-password/{token}`)
# Laravel Authentication Setup (Register, Login, Forgot Password)

This project environment cannot download Composer packages right now (`curl error 56` / `403` from Packagist), so I could not scaffold a full Laravel app directly in this repository.

Use the steps below inside your Laravel project to enable exactly what you asked for:

- Register
- Login
- Forgot password (email reset link + reset form)

## 1) Install Laravel Breeze

```bash
composer require laravel/breeze --dev
php artisan breeze:install
npm install
npm run build
php artisan migrate
```

Breeze ships all core auth pages and logic:
- Registration
- Login / Logout
- Password reset request (`forgot-password`)
- Password reset form (`reset-password/{token}`)

## 2) Mail configuration (required for forgot password)

In `.env`, configure SMTP (example Mailtrap):

```env
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your_username
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="noreply@example.com"
MAIL_FROM_NAME="${APP_NAME}"
```

Then clear cached config:

```bash
php artisan config:clear
```

## 3) Run and verify routes

Start app:

```bash
php artisan serve
```

Default Breeze auth endpoints include:
- `GET /register`
- `GET /login`
- `GET /forgot-password`
- `POST /forgot-password`
- `GET /reset-password/{token}`
- `POST /reset-password`

## 4) Quick test flow

1. Open `/register` and create an account.
2. Log out.
3. Open `/login` and sign in.
4. Click **Forgot your password?**.
5. Submit email and confirm reset email is sent.
6. Open reset link, set a new password, and log in with it.

## 5) If you only want API auth later

For SPA/mobile token auth use Sanctum instead of Breeze sessions, but for your current request (register/login/forgot password) Breeze is the fastest and standard Laravel approach.
