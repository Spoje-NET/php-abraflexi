#!/bin/bash
VERSTR=`dpkg-parsechangelog --show-field Version`
COMPOSER_VERSTR=`echo ${VERSTR}|sed 's/-/./g'`
sed -i -e "/public static \$libVersion/c\    public static \$libVersion = '${VERSTR}-deb';" debian/php-spojenet-flexibee/usr/share/php/FlexiPeeHP/FlexiBeeRO.php
sed -i -e "/public static \$libVersion/c\    public static \$libVersion = '${VERSTR}';" src/FlexiPeeHP/FlexiBeeRO.php
