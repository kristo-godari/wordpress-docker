FROM mysql:5.7
MAINTAINER Kristo Godari <kristo.godari@gmail.com>

COPY mysql-entrypoint.sh /workspace/mysql-entrypoint.sh

RUN chmod +x /workspace/mysql-entrypoint.sh

ENTRYPOINT ["/workspace/mysql-entrypoint.sh"]

EXPOSE 3306
