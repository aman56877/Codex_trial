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
