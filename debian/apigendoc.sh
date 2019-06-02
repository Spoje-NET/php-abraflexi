#!/bin/bash
FILE=""
DIR="docs"
if [ "$(ls -A $DIR)" ]; then
     echo "docs already generated. run make clean first"
else
    apigen generate --source src --destination docs --title "FlexiPeeHP `cat debian/version` " --charset UTF-8 --access-levels public --access-levels protected --php --tree
fi
