<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Management System

A modern Laravel 12 application with Shadcn/ui components and comprehensive authentication system.

## Features

- **Modern UI**: Built with Shadcn/ui components and Tailwind CSS v4
- **Authentication System**: Complete login, registration, and password reset functionality
- **Social Media Login**: Google, Facebook, and Twitter integration (UI ready)
- **Responsive Design**: Mobile-first approach with modern navigation
- **Dashboard**: Comprehensive management dashboard with statistics and quick actions
- **Form Builder**: Example form demonstrating Shadcn/ui components

## Tech Stack

- **Backend**: Laravel 12.0
- **Frontend**: Tailwind CSS v4, Shadcn/ui components
- **Build Tool**: Vite
- **Styling**: Modern CSS with CSS variables and design tokens

## Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd managementsys
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Database setup**
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

## Development

### Starting the development servers

1. **Laravel development server**
   ```bash
   php artisan serve
   ```
   Access your app at: http://localhost:8000

2. **Vite development server**
   ```bash
   npm run dev
   ```
   Vite will run at: http://localhost:5173

### Alternative: Use the combined dev command
```bash
composer run dev
```

## Pages & Routes

### Public Pages
- **Home** (`/`) - Welcome page with features overview
- **Login** (`/login`) - User authentication with social media options
- **Register** (`/register`) - User registration with form validation
- **Forgot Password** (`/forgot-password`) - Password reset functionality

### Protected Pages (Demo)
- **Dashboard** (`/dashboard`) - Management dashboard with statistics
- **Forms** (`/form`) - Example form with Shadcn/ui components

## Authentication Features

### Social Media Integration
- Google OAuth (UI ready)
- Facebook OAuth (UI ready)
- Twitter OAuth (UI ready)

### Form Validation
- Client-side validation with JavaScript
- Password strength requirements
- Terms and conditions agreement
- Newsletter subscription option

### User Experience
- Loading states with spinners
- Error handling and display
- Success messages and redirects
- Remember me functionality
- Forgot password workflow

## Shadcn/ui Components

The system includes the following Shadcn/ui components:
- Button
- Card
- Input
- Form
- Label
- Dialog
- Table
- Badge
- Alert
- Sonner (Toast notifications)
- Loading (Custom spinner)

## Customization

### Styling
- All styles use CSS variables defined in `resources/css/app.css`
- Color scheme can be customized through CSS custom properties
- Dark mode support built-in
- Responsive breakpoints follow Tailwind CSS conventions

### Components
- Add new Shadcn/ui components: `npx shadcn@latest add <component-name>`
- Custom components can be added to `resources/js/components/`
- Utility functions available in `resources/js/lib/utils.js`

## File Structure

```
managementsys/
├── app/                    # Laravel application logic
├── resources/
│   ├── css/
│   │   └── app.css       # Main CSS with Tailwind and Shadcn/ui
│   ├── js/
│   │   ├── components/   # Shadcn/ui components
│   │   └── lib/          # Utility functions
│   └── views/
│       ├── auth/          # Authentication pages
│       ├── dashboard.blade.php
│       ├── form.blade.php
│       └── welcome.blade.php
├── routes/
│   └── web.php           # Web routes including auth routes
└── vite.config.js        # Vite configuration
```

## Next Steps

### Backend Implementation
1. Implement actual authentication logic in Laravel
2. Add user management and roles
3. Set up OAuth providers for social media login
4. Add email verification and password reset functionality

### Frontend Enhancements
1. Add more Shadcn/ui components as needed
2. Implement dark mode toggle
3. Add more interactive dashboard features
4. Create user profile management pages

### Production Deployment
1. Set up proper environment variables
2. Configure database connections
3. Set up email services
4. Configure OAuth providers
5. Add proper security headers and CSRF protection

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Support

For support and questions, please open an issue on GitHub or contact the development team.
