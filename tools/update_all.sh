#!/bin/sh

CURRENT=`php -qf current_version.php`
if [ `php -qf time_to_update.php` = "true"  ] 
then
    echo updating for $CURRENT
    ./force_update_all.sh
else
    echo  $CURRENT still fresh
fi
