#!/bin/bash

docker stop $(docker ps -a -q)
docker rm $(docker ps -a -q)

docker-compose pull
docker-compose down
docker-compose up -d