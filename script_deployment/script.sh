#!/bin/bash
sudo mkdir -p /var/www/html
sudo rm -rf /var/www/html/index*

sudo /bin/cp -rf response.php /var/www/html/response.php
sudo /bin/cp -rf display.php /var/www/html/display.php
sudo /bin/cp -rf index.php /var/www/html/index.php

sudo chmod -R 755 /var/www/html/
sudo chown -R www-data:www-data /var/www/html
