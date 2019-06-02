#!/bin/bash
VERSTR=`dpkg-parsechangelog --show-field Version`
COMPOSER_VERSTR=`echo ${VERSTR}|sed 's/-/./g'`
echo debian/php-flexibee/usr/share/php/FlexiPeeHP/composer.json version to ${COMPOSER_VERSTR}
sed -i -e '/\"version\"/c\    \"version\": \"'${COMPOSER_VERSTR}'",' debian/php-flexibee/usr/share/php/FlexiPeeHP/composer.json
sed -i -e "/public static \$libVersion/c\    public static \$libVersion = '${VERSTR}';" debian/php-flexibee/usr/share/php/FlexiPeeHP/FlexiBeeRO.php
sed -i -e "/public static \$libVersion/c\    public static \$libVersion = '${VERSTR}';" src/FlexiPeeHP/FlexiBeeRO.php

#dch -b -v ${VERSION}-${REVISION} --package "${PACKAGE}" "${CHANGES}"
