# DocExplorer

## Table of Contents
- [About DocExplorer](#about-docexplorer)
  - [Goal](#goal)
- [Getting Started](#getting-started)
  - [Installation](#installation)
- [Testing](#testing)
- [Contributing](#contributing)
  - [Contribution Guidelines](#contribution-guidelines)
- [License](#license)
- [Acknowledgments](#acknowledgments)

## About DocExplorer

DocExplorer helps you discover random documentation pages from your favorite framework. Click a button, get a random page. It's a simple way to explore documentation you might not have found otherwise.

### Goal

- Learn about framework documentation through random discovery
- Study and improve your skills by working on the project
- Share your knowledge with others
- Help build something useful for the community

## Getting Started

### Installation

1. Clone the repository:
```bash
git clone https://github.com/yourusername/doc-explorer.git
cd doc-explorer
```

2. Install dependencies:
```bash
composer install
npm install
```

3. Set up environment:
```bash
cp .env.example .env
php artisan key:generate
```

4. Configure your database in `.env`

5. Run migrations:
```bash
php artisan migrate
```

6. Start the development server:
```bash
php artisan serve
npm run dev
```

## Testing

The project uses Pest PHP for testing. Run tests with:

```bash
php artisan test
```

## Contributing

To contribute to the project:

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

### Contribution Guidelines

- Follow PSR-12 coding standards
- Write tests for new features
- Update documentation as needed
- Use meaningful commit messages
- Keep PRs focused and manageable
- Consider adding support for new frameworks

## License

This project is open-sourced under the [MIT license](https://opensource.org/licenses/MIT).

## Acknowledgments

- [Laravel](https://laravel.com) - The PHP framework
- [Livewire](https://livewire.laravel.com) - Full-stack framework for Laravel
- [FilamentPHP](https://filamentphp.com) - Admin panel framework
- All contributors and supporters