FROM docker:18.04
MAINTAINER Kristo Godari <kristo.godari@gmail.com>

RUN apk update && apk upgrade && apk add bash zip

# Add crontab file in the cron directory
ADD crontab /etc/cron.d/mysql-backup-cron

# Give execution rights on the cron job
RUN chmod 0644 /etc/cron.d/mysql-backup-cron

# Apply cron job
RUN crontab /etc/cron.d/mysql-backup-cron

# Create the log file to be able to run tail
RUN touch /var/log/mysql-backup-cron.log

CMD /usr/sbin/crond -f -l 8 && tail -f /var/log/mysql-backup-cron.log

