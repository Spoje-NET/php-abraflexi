#!/bin/sh
mkdir -p ../static
CURRENT=`php -qf current_version.php`
php  -qf update_evidencelist_class.php
mv -f EvidenceList.php ../src/AbraFlexi/EvidenceList.php
php -qf update_properties_class.php 
php -qf update_actions_class.php 
mv Actions.php  ../src/AbraFlexi/Actions.php
php -qf update_relations_class.php 
mv Relations.php ../src/AbraFlexi/Relations.php
php -qf update_formats_class.php 
mv Formats.php ../src/AbraFlexi/Formats.php
mv -fv Actions.json  EvidenceFullList.json  EvidenceList.json  Formats.json  Properties*.json  Relations.json  ../static/

echo git commit ../src ../static -m \"Update for AbraFlexi ${CURRENT}\"
echo git commit ./src ./static -m \"Update for AbraFlexi ${CURRENT}\"
