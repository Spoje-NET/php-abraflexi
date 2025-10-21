<!-- Use this file to provide workspace-specific custom instructions to Copilot. For more details, visit https://code.visualstudio.com/docs/copilot/copilot-customization#_use-a-githubcopilotinstructionsmd-file -->

All code comments should be written in English.

All messages, including error messages, should be written in English.

All code should be written in PHP 8.4 or later.

All code should follow the PSR-12 coding standard.

When writing code, always include a docblock for functions and classes, describing their purpose, parameters, and return types.

When writing tests, use PHPUnit and follow the PSR-12 coding standard.

When writing commit messages, use the imperative mood and keep them concise.

When writing code comments, use complete sentences and proper grammar.

When writing code, always use meaningful variable names that describe their purpose.

When writing code, avoid using magic numbers or strings; instead, define constants for them.

When writing code, always handle exceptions properly and provide meaningful error messages.

When writing code, always include type hints for function parameters and return types.

We are using the i18n library for internationalization, so always use the _() functions for strings that need to be translated.

When writing code, always ensure that it is secure and does not expose any sensitive information.

When writing code, always consider performance and optimize where necessary.

When writing code, always ensure that it is compatible with the latest version of PHP and the libraries we are using.

When writing code, always ensure that it is well-tested and includes unit tests where applicable.

When writing code, always ensure that it is maintainable and follows best practices.

When create new class or update existing class, always create or update its phpunit test files.

After every single edit to a PHP file, always run `php -l` on the edited file to lint it and ensure code sanity before proceeding further. This is mandatory for all PHP code changes.
