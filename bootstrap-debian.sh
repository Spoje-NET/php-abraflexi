#!/usr/bin/env bash
export DEBIAN_FRONTEND="noninteractive"
wget -O - http://v.s.cz/info@vitexsoftware.cz.gpg.key|sudo apt-key add -
echo deb http://v.s.cz/ stable main | tee /etc/apt/sources.list.d/vitexsoftware.list 
apt-get update
apt-get install -y php-cli php-curl php-pear php-intl php-zip composer dpkg-dev devscripts php-apigen-theme-default debhelper gdebi-core
apt-get update

cd /vagrant
debuild -i -us -uc -b

#mkdir -p /vagrant/deb
#mv /*.deb /vagrant/deb
#cd /vagrant/deb
#dpkg-scanpackages . /dev/null | gzip -9c > Packages.gz
#echo "deb file:/vagrant/deb ./" > /etc/apt/sources.list.d/local.list
#apt-get update
export DEBCONF_DEBUG="developer"

#apt-get -y --allow-unauthenticated install flexipeehp
gdebi -n  ../flexipeehp_*_all.deb 

cd /usr/share/doc/FlexiPeeHP/
composer update
php -f /usr/share/doc/FlexiPeeHP/flexibeeping.php




