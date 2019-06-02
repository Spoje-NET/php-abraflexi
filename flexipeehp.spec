# Copyright (c) 2018 Vítězslav Dvořák <info@vitexsoftware.cz>
#
# License: GPLv2+
# http://opensource.org/licenses/MIT
#
# Please preserve changelog entries
#

%global github_owner     Spoje-NET
%global github_name      FlexiPeeHP
%global github_version   1.8.7.3
%global github_commit    f588af6c05085db3ff0158e73de9f08169ed56ea

%global composer_vendor  spoje.net
%global composer_project flexipeehp

# "php": "^5.6|^7.0"
%global php_min_ver 5.6

# Build using "--without tests" to disable tests
%global with_tests  %{?_without_tests:0}%{!?_without_tests:1}

%{!?phpdir:  %global phpdir  %{_datadir}/php}

Name:          php-%{github_name}
Version:       %{github_version}
Release:       3%{?dist}
Summary:       PHP Based Library for easy interaction with czech accounting system Flexibee. 

Group:         Development/Libraries
License:       GPLv2+
URL:           https://github.com/%{github_owner}/%{github_name}
Source0:       %{url}/archive/%{github_commit}/%{name}-%{github_version}-%{github_commit}.tar.gz

Patch0:        https://patch-diff.githubusercontent.com/raw/fzaninotto/Faker/pull/1348.patch
Patch1:        https://patch-diff.githubusercontent.com/raw/fzaninotto/Faker/pull/1365.patch

# remirepo:3
# For test build on all available arch
#global debug_package %{nil}
#global __debug_install_post /bin/true
BuildArch:     noarch
# Tests
%if %{with_tests}
## composer.json
BuildRequires: php(language) >= %{php_min_ver}
BuildRequires: php-composer(phpunit/phpunit)
BuildRequires: php-intl
## phpcompatinfo (computed from version 1.6.0)
BuildRequires: php-ctype
BuildRequires: php-curl
BuildRequires: php-date
BuildRequires: php-dom
BuildRequires: php-hash
BuildRequires: php-json
BuildRequires: php-mbstring
BuildRequires: php-pcre
BuildRequires: php-reflection
BuildRequires: php-spl
## Autoloader
BuildRequires: php-fedora-autoloader-devel
%endif

# composer.json
Requires:      php(language) >= %{php_min_ver}
# phpcompatinfo (computed from version 1.6.0)
Requires:      php-curl
Requires:      php-date
Requires:      php-dom
Requires:      php-hash
Requires:      php-json
Requires:      php-mbstring
Requires:      php-pcre
Requires:      php-reflection
Requires:      php-spl
# Autoloader
Requires:      php-composer(fedora/autoloader)

# php-{COMPOSER_VENDOR}-{COMPOSER_PROJECT}
Provides:      php-%{composer_vendor}-%{composer_project}           = %{version}-%{release}
# Composer
Provides:      php-composer(%{composer_vendor}/%{composer_project}) = %{version}

%description
Faker is a PHP library that generates fake data for you. Whether you need
to bootstrap your database, create good-looking XML documents, fill-in your
persistence to stress test it, or anonymize data taken from a production
service, Faker is for you.

Faker is heavily inspired by Perl's Data::Faker [1], and by Ruby's Faker [2].

Autoloader: %{phpdir}/Faker/autoload.php

Optional:
* CakePHP (http://cakephp.org/)
* Doctrine ORM (php-doctrine-orm)
* Mandango (http://mandango.org/)
* Propel (http://propelorm.org/)

[1] http://search.cpan.org/~jasonk/Data-Faker/
[2] http://faker.rubyforge.org/


%prep
%setup -qn %{github_name}-%{github_commit}
%patch0 -p1
%patch1 -p1

%if 0%{?el6}
# For old PHPUnit
for test in $(find test -name \*Test.php); do
  sed -e '/assertNotFalse/s/);/, false);/;s/assertNotFalse/assertNotSame/' -i $test
done
%endif

: Create autoloader
cat <<'AUTOLOAD' | tee src/Faker/autoload.php
<?php
/**
 * Autoloader for %{name} and its' dependencies
 * (created by %{name}-%{version}-%{release}).
 *
 * @return \Symfony\Component\ClassLoader\ClassLoader
 */

require_once '%{phpdir}/Fedora/Autoloader/autoload.php';
\Fedora\Autoloader\Autoload::addPsr4('Faker\\', __DIR__);

AUTOLOAD


%build
# Empty build section, nothing to build


%install
mkdir -p %{buildroot}%{phpdir}
cp -rp src/%{github_name} %{buildroot}%{phpdir}/


%check
%if %{with_tests}
mkdir vendor
cat << 'EOF' | tee vendor/autoload.php
<?php
require_once '%{buildroot}%{phpdir}/Faker/autoload.php';
\Fedora\Autoloader\Autoload::addPsr4('Faker\\Test\\', dirname(__DIR__).'/test/Faker');
EOF

ret=0
for cmd in php php56 php70 php71 php72; do
  if which $cmd; then
    $cmd  %{_bindir}/phpunit --verbose || ret=1
  fi
done
exit $ret
%else
: Tests skipped
%endif


%files
%{!?_licensedir:%global license %%doc}
%license LICENSE
%doc *.md
%doc composer.json
%{phpdir}/%{github_name}


%changelog
* Tue Nov 28 2017 Remi Collet <remi@remirepo.net> - 1.7.1-3
- run full test suite on all arches
- add patch for 32-bits from
  https://github.com/fzaninotto/Faker/pull/1348
- add patch for big endian from
  https://github.com/fzaninotto/Faker/pull/1365
- fix dependencies

* Fri Nov 10 2017 Remi Collet <remi@remirepo.net> - 1.7.1-2
- fix skip result condition

