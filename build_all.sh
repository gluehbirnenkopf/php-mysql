#!/bin/bash
docker stop php-lg-dba20 && docker rm php-lg-dba20
docker stop mysql-lg-dba20 && docker rm mysql-lg-dba20
cd db/
docker build -t mysql-lg-dba20:latest .
docker run --detach --name mysql-lg-dba20 -p3306:3306 -p 33060:33060 mysql-lg-dba20:latest
sleep 5
cd ..
docker build -t php-lg-dba20:latest .
docker run -detach -p 8080:80 --name php-lg-dba20 php-lg-dba20:latest
