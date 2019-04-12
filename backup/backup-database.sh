#!/usr/bin/env bash

cd /workspace

DATE=`date +%Y-%m-%d`

CONTAINER_NAME="wordpress_mysql"
DB_NAME="wordpress"
DB_USERNAME="root"
DB_PASS="bkaNZLjH"

HISTORY_FOLDER="history"
CURRENT_BACKUP_FILE="current-backup.sql"
NEW_BACKUP_FILE="new-backup.sql"
BACKUP_ZIP_FILE_NAME="wordpress_db-$DATE.zip"

# create the new backup file
docker exec ${CONTAINER_NAME} \
            /usr/bin/mysqldump -u ${DB_USERNAME} -p${DB_PASS} \
            --routines --triggers ${DB_NAME} \
            --skip-lock-tables | sed 's/`$DB_NAME`\.//g' | sed 's/\/\*\![0-9]* DEFINER=[^*]*\*\///g' \
            > ${NEW_BACKUP_FILE}


# if the new backup file is created
if [[ -e ${NEW_BACKUP_FILE} ]]; then

    # get each file fize
    CURRENT_BACKUP_FILE_SIZE=$(stat -c%s ${CURRENT_BACKUP_FILE})
    NEW_BACKUP_FILE_SIZE=$(stat -c%s ${NEW_BACKUP_FILE})

    # if the new backup file size is greater than the old one, we need to create a new backup
    if [[ ${NEW_BACKUP_FILE_SIZE} -gt ${CURRENT_BACKUP_FILE_SIZE} ]]; then

    zip "$HISTORY_FOLDER/$BACKUP_ZIP_FILE_NAME" ${NEW_BACKUP_FILE}

    cp ./${CURRENT_BACKUP_FILE} temp.sql && rm ./${CURRENT_BACKUP_FILE}
    cp ${NEW_BACKUP_FILE} ${CURRENT_BACKUP_FILE} && rm ${NEW_BACKUP_FILE}

    sed -i '1s/^/CREATE DATABASE IF NOT EXISTS `wordpress`;USE wordpress;\n/' ${CURRENT_BACKUP_FILE}

        if [[ -e ${CURRENT_BACKUP_FILE} ]]; then
            rm temp.sql
        fi

    fi

fi

if [[ -e ${NEW_BACKUP_FILE} ]]; then
   rm ${NEW_BACKUP_FILE}
fi





