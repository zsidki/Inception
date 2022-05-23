if [ ! -d "/var/lib/mysql/wordpress" ]; then 
    service mysql start
    mysql -u root -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '${MYSQL_ROOT_PASSWORD}'; FLUSH PRIVILEGES;"
    mysql -u root --password=${MYSQL_ROOT_PASSWORD} -e "CREATE USER '${MYSQL_USER}'@'%' IDENTIFIED BY '${MYSQL_PASSWORD}';"
    mysql -u root --password=${MYSQL_ROOT_PASSWORD} -e "CREATE DATABASE ${WORDPRESS_DB_NAME};"
    mysql -u root --password=${MYSQL_ROOT_PASSWORD} -e "USE ${WORDPRESS_DB_NAME}; GRANT ALL PRIVILEGES ON * TO '${MYSQL_USER}'@'%' WITH GRANT OPTION; FLUSH PRIVILEGES;"
    mysql -u root ${WP_DB_NAME} < /wordpress.sql
# else
#     mysqld_safe --skip-grant-tables
fi
    mysqld_safe