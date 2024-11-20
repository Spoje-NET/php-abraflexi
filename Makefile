# vim: set tabstop=8 softtabstop=8 noexpandtab:
.PHONY: help
help: ## Displays this list of targets with descriptions
	@grep -E '^[a-zA-Z0-9_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}'

.PHONY: static-code-analysis
static-code-analysis: vendor ## Runs a static code analysis with phpstan/phpstan
	vendor/bin/phpstan analyse --configuration=phpstan-default.neon.dist --memory-limit=-1

.PHONY: static-code-analysis-baseline
static-code-analysis-baseline: check-symfony vendor ## Generates a baseline for static code analysis with phpstan/phpstan
	vendor/bin/phpstan analyze --configuration=phpstan-default.neon.dist --generate-baseline=phpstan-default-baseline.neon --memory-limit=-1

.PHONY: tests
tests: vendor
	vendor/bin/phpunit tests

.PHONY: vendor
vendor: composer.json composer.lock ## Installs composer dependencies
	composer install

.PHONY: cs
cs: ## Update Coding Standards
	vendor/bin/php-cs-fixer fix --config=.php-cs-fixer.dist.php --diff --verbose

.PHONY: cssilent
cssilent: ## Update Coding Standards silently
	vendor/bin/php-cs-fixer fix --config=.php-cs-fixer.dist.php -q

fresh:
	git pull
	composer install

static:
	composer update
	echo rm -rf static/*
	echo "STATIC  #######################"
	cd tools/ ; ./update_all.sh ; cd ..
	make cssilent

clean:
	rm -rf debian/php-abraflexi
	rm -rf debian/flexipeehp .phpunit.result.cache debian/flexipeehp.debhelper.log
	rm -rf debian/flexipeehp-doc
	rm -rf debian/*.log
	rm -rf debian/*.substvars
	rm -rf docs/*
	rm -f  debianTest/composer.lock
	rm -rf vendor/* composer.lock

apigen:
	VERSION=`cat debian/composer.json | grep version | awk -F'"' '{print $4}'`; \
	apigen generate --destination=docs -- src

pretest:
	composer --ansi --no-interaction update
	php -f tests/PrepareForTest.php

deb:
	dpkg-buildpackage -A -us -uc

rpm:
	rpmdev-bumpspec --comment="Build" --userstring="Vítězslav Dvořák <info@vitexsoftware.cz>" flexipeehp.spec
	rpmbuild -ba flexipeehp.spec 

release:
	echo Release v$(nextversion)
	dch -v $(nextversion) `git log -1 --pretty=%B | head -n 1`
	debuild -i -us -uc -b
	git commit -a -m "Release v$(nextversion)"
	git tag -a $(nextversion) -m "version $(nextversion)"

dimage:
	docker build -t vitexsoftware/flexipeehp .

.PHONY: all pretest clean static release verup deb

.PHONY: cs
	vendor/bin/php-cs-fixer fix --config=.php-cs-fixer.dist.php --diff --verbose
