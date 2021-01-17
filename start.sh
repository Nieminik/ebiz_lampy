#!/bin/bash

if [[ $EUID -ne 0 ]]; then
   echo "This script must be run as root" 
   exit 1
fi

sudo rm -rf docker/db/.db_data
sudo rm -rf docker/ssl/*
./generate_cert.sh
docker-compose up
