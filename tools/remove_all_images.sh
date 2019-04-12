#!/usr/bin/env bash

docker stop $(docker ps -a -q)
docker rmi $(docker images -q)