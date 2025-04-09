# DocExplorer

<p align="center">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
</p>

## About DocExplorer

DocExplorer helps you discover random documentation pages from your favorite framework. Click a button, get a random page. It's a simple way to explore documentation you might not have found otherwise.

### The Vision

DocExplorer is a community project. The goal is to create a space where developers can:
- Learn through random documentation discovery
- Contribute to an educational project
- Share framework documentation
- Build something meaningful together
- Make documentation exploration more engaging

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

---

Made with care by the PHP community
