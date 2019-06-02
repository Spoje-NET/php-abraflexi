all: build install

fresh:
	git pull
	composer install

install: build
#	cp -rvf src/FlexiPeeHP /usr/share/php/FlexiPeeHP
	
static: 
	composer update
	echo rm -rf static/*
	echo "STATIC  #######################
	cd tools/ ; ./update_all.sh ; cd ..

build: static

clean:
	rm -rf debian/php-flexibee
	rm -rf debian/flexipeehp .phpunit.result.cache debian/flexipeehp.debhelper.log
	rm -rf debian/flexipeehp-doc
	rm -rf debian/*.log
	rm -rf debian/*.substvars
	rm -rf docs/*
	rm -f  debianTest/composer.lock
	rm -rf vendor/* composer.lock

apigen:
	VERSION=`cat debian/composer.json | grep version | awk -F'"' '{print $4}'`; \
	apigen generate --source src --destination docs --title "FlexiPeeHP ${VERSION}" --charset UTF-8 --access-levels public --access-levels protected --php --tree

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

dimage:
	docker build -t vitexsoftware/flexipeehp .

.PHONY : install
	
