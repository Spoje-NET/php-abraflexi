# WARP.md

This file provides guidance to WARP (warp.dev) when working with code in this repository.

## Project Overview

PHP AbraFlexi is a PHP 8.1+ library for easy interaction with the Czech economic system AbraFlexi. It provides a complete REST API client with object-oriented interface for all AbraFlexi evidences (entities).

## Development Commands

### Package Management
```bash
composer install          # Install dependencies
composer update           # Update dependencies
composer require <package> # Add new dependency
```

### Testing
```bash
phpunit                   # Run all tests
phpunit --testsuite=all   # Run full test suite
phpunit tests/src/AbraFlexi/ActionsTest.php  # Run specific test
```

### Code Quality
```bash
vendor/bin/php-cs-fixer fix                    # Fix code style issues
vendor/bin/php-cs-fixer fix --dry-run         # Check code style without fixing
vendor/bin/phpstan analyze                     # Run static analysis
```

### Evidence Classes Generation
```bash
cd tools/
./update_all.sh           # Update evidence classes from AbraFlexi API
./force_update_all.sh     # Force update all classes regardless of version
```

## Core Architecture

### Class Hierarchy

The library follows a layered architecture with these core base classes:

- **`RO` (Read Only)**: Base class for reading data from AbraFlexi
  - Located: `src/AbraFlexi/RO.php`
  - Handles HTTP communication, authentication, and data parsing
  - Contains curl operations, URL building, and response processing

- **`RW` (Read Write)**: Extends RO for write operations
  - Located: `src/AbraFlexi/RW.php`
  - Adds insert, update, delete functionality
  - Supports transactions (`atomic` mode) and dry-run testing

### Evidence System

AbraFlexi uses "evidences" (entities/records). Each evidence has:
- Auto-generated class derived from RO or RW
- Class naming: evidence name converted to PascalCase (e.g., `faktura-vydana` → `FakturaVydana`)
- Each class defines `$evidence` property with the API endpoint name

### Evidence Class Generation

Classes are auto-generated from AbraFlexi API using tools in `tools/` directory:
- `update_evidencelist_class.php` - Updates available evidences
- `update_properties_class.php` - Updates field definitions
- `update_actions_class.php` - Updates available actions
- `generate_evidence_classes.php` - Generates individual evidence classes

### Configuration

Connection can be configured via:
1. Constants: `ABRAFLEXI_URL`, `ABRAFLEXI_LOGIN`, `ABRAFLEXI_PASSWORD`, `ABRAFLEXI_COMPANY`
2. Environment variables with same names
3. Constructor parameters (highest priority)

### Data Types

The library automatically converts AbraFlexi data types to PHP equivalents:
- `date` → `\DateTime`
- `datetime` → `\DateTime` 
- `integer` → `int`
- `numeric` → `float`
- `logic` → `bool`
- `relation` → `\AbraFlexi\Relation`

## Testing Infrastructure

### Test Configuration
- Bootstrap: `tests/bootstrap.php`
- Configuration: `phpunit.xml`
- Test server: Uses demo.flexibee.eu by default, configurable via `.env`

### Test Structure
- Unit tests in `tests/src/AbraFlexi/`
- Each main class should have corresponding test
- Tests extend base test classes for consistency

## Code Standards

### From GitHub Copilot Instructions:
- **PHP Version**: PHP 8.4 or later
- **Code Style**: PSR-12 coding standard
- **Documentation**: Include docblocks for all functions and classes with parameters and return types
- **Type Hints**: Always include type hints for parameters and return types
- **Internationalization**: Use `_()` functions for translatable strings
- **Security**: Never expose sensitive information
- **Testing**: Create/update PHPUnit tests for new/modified classes
- **Comments**: Write in English using complete sentences
- **Variables**: Use meaningful, descriptive names
- **Constants**: Define constants instead of magic numbers/strings
- **Error Handling**: Handle exceptions properly with meaningful messages

### Code Formatting
The project uses `friendsofphp/php-cs-fixer` with custom configuration in `.php-cs-fixer.dist.php`.

## Project Structure

```
src/AbraFlexi/           # Main library classes
├── RO.php               # Base read-only class
├── RW.php               # Base read-write class
├── Actions.php          # Available actions (auto-generated)
├── EvidenceList.php     # Evidence list (auto-generated)
├── Relations.php        # Relations between evidences (auto-generated)
├── Formats.php          # Supported formats (auto-generated)
├── Structure.php        # Evidence structure definitions
└── [Evidence classes]   # Individual evidence classes

Examples/                # Usage examples for different operations
tests/                   # PHPUnit tests
tools/                   # Code generation and update scripts
static/                  # Generated JSON metadata files
```

## Important Implementation Notes

### Evidence Class Creation Pattern
```php
class NewEvidence extends \AbraFlexi\RW {
    public $evidence = 'evidence-name';
}
```

### Object Instantiation with Options
```php
$invoice = new \AbraFlexi\FakturaVydana('code:VF2-12345', [
    'company' => 'demo',
    'url' => 'https://demo.flexibee.eu',
    'debug' => true,
    'nativeTypes' => false,  // Disable automatic type conversion
    'ignore404' => true      // Don't throw exception for missing records
]);
```

### Authentication Methods
1. Username/password
2. AuthSessionId for web application integration
3. Environment variables or constants

### Debug Mode Features
- Validates field existence and permissions
- Logs all requests/responses to `/tmp/`
- Automatic error reporting with detailed information
- Enhanced error messages for development

## Dependencies

- **Runtime**: PHP 8.1+, ext-json, ext-curl, ext-gettext, vitexsoftware/ease-core
- **Development**: PHPUnit, PHP-CS-Fixer, PHPStan, Phing

## License

MIT License - allows commercial use and modification.