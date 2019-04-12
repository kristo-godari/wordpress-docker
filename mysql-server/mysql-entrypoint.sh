#!/bin/bash

source docker-entrypoint.sh mysqld &

MYSQL_ROOT_PASSWORD=bkaNZLjH

# Returns true once mysql can connect.
mysql_ready() {
    mysqladmin ping --host=localhost --user=root --password=$MYSQL_ROOT_PASSWORD > /dev/null 2>&1
}

while !(mysql_ready)
do
    sleep 3
   echo "Waiting for MYSQL to be UP ..."
done

sleep 5

mysql -uroot -p$MYSQL_ROOT_PASSWORD < /backup/current-backup.sql

tail -f /dev/null