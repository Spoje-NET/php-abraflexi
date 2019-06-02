#!/bin/bash
docker build -t vitexus/flexipeehp .
docker push vitexus/flexipeehp
cd debian
./deb-package.sh
