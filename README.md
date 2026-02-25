# Symfony 8 Skeleton with Webpack

A modern Symfony 8 application skeleton with Webpack integration for asset management.

## Features

- Symfony 8.x framework
- Webpack 5 for asset management
- SASS/SCSS support
- Modern JavaScript (ES6+) support
- Hot Module Replacement (HMR) in development
- Asset versioning and optimization for production
- Docker development environment
- Symfony Debug Toolbar
- Twig templating engine

## Requirements

- PHP 8.4 or higher
- Node.js 18.x or higher
- Composer
- Docker and Docker Compose (optional)

## Installation

### Option 1: Clone the repository

1. Clone the repository:
```bash
git clone [repository-url]
cd symfony7-skeleton-webpack
```

### Option 2: Using Composer

Create a new project using Composer:

```bash
composer create-project master-ghd/symfony-skeleton-webpack ./symfony-skeleton-webpack
```

OR using Symfony CLI:

```bash
symfony composer create-project master-ghd/symfony-skeleton-webpack ./symfony-skeleton-webpack
```

Then navigate to the project directory:

```bash
cd symfony-skeleton-webpack
```

### Complete the setup

2. Install PHP dependencies (if not already installed):
```bash
composer install
```

3. Install Node.js dependencies:
```bash
npm install
```

4. Build assets:
```bash
# Development
npm run dev

# Production
npm run build
```

5. Start the Symfony development server:
```bash
symfony serve
```

## Development

- Run `npm run watch` for automatic asset rebuilding during development
- Use `npm run dev` for development builds
- Use `npm run build` for production builds

## Directory Structure

```
├── assets/            # Frontend assets (JS, CSS, images)
├── config/            # Symfony configuration
├── public/           # Web root directory
├── src/              # PHP source code
├── templates/        # Twig templates
└── webpack.config.js # Webpack configuration
```

## Makefile Commands

- `make start` - Start the Docker containers
- `make stop` - Stop the Docker containers
- `make bash` - Enter the PHP container shell
- `make test` - Run PHPUnit tests
- `make cs-fix` - Fix code style issues
- `make stan` - Run PHPStan static analysis
- `make db-diff` - Generate database migration
- `make db-migrate` - Run database migrations

## MDB Bootstrap Integration

This project uses Material Design for Bootstrap (MDB) v5:
- Full Bootstrap 5 compatibility
- Material Design components
- Responsive grid system
- Custom components included
- Dark mode support
- Utility classes available

## Docker Configuration

The development environment includes:
- PHP 8.2 FPM
- Nginx web server
- MySQL 8.0
- Redis for caching
- Mailhog for email testing

Access services at:
- Website: http://localhost:8080
- PHPMyAdmin: http://localhost:8081
- Mailhog: http://localhost:8025

## Current Routes

Main application routes:
- `/` - Homepage
- `/login` - Authentication
- `/register` - User registration
- `/admin` - Admin dashboard
- `/api/v1/*` - REST API endpoints

## Contributing

Please read our [Contributing Guide](CONTRIBUTING.md) for details on our code of conduct and the process for submitting pull requests.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---
Written with assist of AI.
