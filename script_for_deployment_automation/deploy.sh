#!/bin/bash

sudo mv response.php /var/www/html/response.php
sudo mv display.php /var/www/html/display.php

sudo chmod -R 755 /var/www/html/
sudo chown -R www-data:www-data /var/www/html
