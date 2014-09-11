vendor/autoload.php:
	composer install --no-interaction --prefer-source --dev

.PHONY: sniff
sniff: vendor/autoload.php
	vendor/bin/phpcs -n --standard=PSR2 -- src tests

.PHONY: test
test: vendor/autoload.php
	vendor/bin/phpunit --verbose
