# wp-scaffold
WP CLI command to scaffold new functionality

## Installation

### From Git Repository

Install this package as a WP CLI package directly from the git repository:

```bash
wp package install git@github.com:jonathanbossenger/wp-scaffold.git
```

### From Composer (when published)

Once published to Packagist, you can install with:

```bash
wp package install jonathanbossenger/wp-scaffold
```

Or require it in your project:

```bash
composer require jonathanbossenger/wp-scaffold
```

## Usage

### Hello Command

Test the extension with the hello command:

```bash
wp scaffold hello
```

This will output: `Success: Hello World`

## Development

### Requirements

- PHP 7.4 or higher
- Composer

### Setup

Clone the repository and install dependencies:

```bash
git clone https://github.com/jonathanbossenger/wp-scaffold.git
cd wp-scaffold
composer install
```

## Structure

- `command.php` - Registers commands with WP CLI
- `src/HelloCommand.php` - Hello World command implementation
- `composer.json` - Package configuration and autoloading
