#!/bin/bash
docker stop php-lg-dba20 && docker rm php-lg-dba20
docker build -t php-lg-dba20:latest .
docker run -detach -p 8080:80 --name php-lg-dba20 php-lg-dba20:latest
