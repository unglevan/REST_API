curl -s http://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer

composer global require "fxp/composer-asset-plugin:1.0.0-beta4"
