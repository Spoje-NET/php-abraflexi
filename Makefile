repoversion=$(shell LANG=C aptitude show php-spojenet-abraflexi | grep Version: | awk '{print $$2}')
currentversion=$(shell dpkg-parsechangelog --show-field Version)
nextversion=$(shell echo $(repoversion) | perl -ne 'chomp; print join(".", splice(@{[split/\./,$$_]}, 0, -1), map {++$$_} pop @{[split/\./,$$_]}), "\n";')

all:

fresh:
	git pull
	composer install

static:
	composer update
	echo rm -rf static/*
	echo "STATIC  #######################"
	cd tools/ ; ./update_all.sh ; cd ..

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

phpunit:
	composer update
	vendor/bin/phpunit --bootstrap testing/bootstrap.php

deb:
	dpkg-buildpackage -A -us -uc

rpm:
	rpmdev-bumpspec --comment="Build" --userstring="Vítězslav Dvořák <info@vitexsoftware.cz>" flexipeehp.spec
	rpmbuild -ba flexipeehp.spec 

verup:
	git commit debian/composer.json debian/version debian/revision  -m "`cat debian/version`-`cat debian/revision`"
	git push origin master

release:
	echo Release v$(nextversion)
	dch -v $(nextversion) `git log -1 --pretty=%B | head -n 1`
	debuild -i -us -uc -b
	git commit -a -m "Release v$(nextversion)"
	git tag -a $(nextversion) -m "version $(nextversion)"



dimage:
	docker build -t vitexsoftware/flexipeehp .

.PHONY: all pretest clean static release verup deb

