#!/bin/sh

# Codeigniter .env.php file generator
codeigniter_env_generator() {
	cd /var/www/html
	if [ -f .env.php ]; then
		rm .env.php
	fi

	echo "<?php" >> .env.php
	echo "" >> .env.php
	echo "# Application Environment : development testing production" >> .env.php
	environment=${ENVIRONMENT}
	if [[ -z "${environment}" ]]; then
		echo "define('ENVIRONMENT', 'production');" >> .env.php
	else
		echo "define('ENVIRONMENT', '${environment}');" >> .env.php
	fi
	echo "" >> .env.php

	echo "# Base Site URL" >> .env.php
	env_base_url=${env_BASE_URL}
	if [[ -z "${env_base_url}" ]]; then
		echo "define('env_BASE_URL', 'http://localhost/');" >> .env.php
	else
		echo "define('env_BASE_URL', '${env_base_url}');" >> .env.php
	fi
	echo "" >> .env.php

	echo "# MySQL database hostname" >> .env.php
	env_hostname=${env_HOSTNAME}
	if [[ -z "${env_hostname}" ]]; then
		echo "define('env_HOSTNAME', 'localhost');" >> .env.php
	else
		echo "define('env_HOSTNAME', '${env_hostname}');" >> .env.php
	fi
	echo "" >> .env.php

	echo "# MySQL database username" >> .env.php
	env_username=${env_USERNAME}
	if [[ -z "${env_username}" ]]; then
		echo "define('env_USERNAME', 'username_here');" >> .env.php
	else
		echo "define('env_USERNAME', '${env_username}');" >> .env.php
	fi
	echo "" >> .env.php

	echo "# MySQL database password" >> .env.php
	env_password=${env_PASSWORD}
	if [[ -z "${env_password}" ]]; then
		echo "define('env_PASSWORD', 'password_here');" >> .env.php
	else
		echo "define('env_PASSWORD', '${env_password}');" >> .env.php
	fi
	echo "" >> .env.php

	echo "# The name of the database" >> .env.php
	env_database=${env_DATABASE}
	if [[ -z "${env_database}" ]]; then
		echo "define('env_DATABASE', 'database_name');" >> .env.php
	else
		echo "define('env_DATABASE', '${env_database}');" >> .env.php
	fi
	echo "" >> .env.php

	echo "# Config Google ClientId" >> .env.php
	env_clientid=${env_ClientId}
	if [[ -z "${env_clientid}" ]]; then
		echo "define('env_ClientId', '');" >> .env.php
	else
		echo "define('env_ClientId', '${env_clientid}');" >> .env.php
	fi
	echo "" >> .env.php

	echo "# Config Google ClientSecret" >> .env.php
	env_clientsecret=${env_ClientSecret}
	if [[ -z "${env_clientsecret}" ]]; then
		echo "define('env_ClientSecret', '');" >> .env.php
	else
		echo "define('env_ClientSecret', '${env_clientsecret}');" >> .env.php
	fi
}

codeigniter_env_generator
/usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf