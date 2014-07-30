#!/bin/sh

source ~/.bash_profile
source ./lib/utils

# PHP

e_header "Tapping josegonzalez/homebrew-php..."
  brew tap josegonzalez/homebrew-php

# PHP 5.4

e_header "Installing PHP 5.4..."
  brew unlink php53
  brew install php54 --with-mysql --with-imap --with-pgsql --with-suhosin
  brew link php54

e_header "Updating the date.timezone setting in /usr/local/etc/php/5.4/php.ini"
    sed -i .bak 's/\;date.timezone =/date.timezone = "Australia\/Sydney"/g' /usr/local/etc/php/5.4/php.ini
    sed -i .bak 's/\;auto_detect_line_endings = Off/auto_detect_line_endings = On/g' /usr/local/etc/php/5.4/php.ini

e_header "Installing PHP 5.4 xDebug..."
  brew install php54-xdebug

e_header "Installing PHP 5.4 APC..."
  brew install php54-apc

e_header "Installing PHP 5.4 Twig..."
  brew install php54-twig

e_header "Installing PHP 5.4 intl..."
  brew install php54-intl

e_header "Installing PHP 5.4 Imagick"
  brew install php54-imagick

e_header "Installing PHP 5.4 MCrypt..."
  brew install php54-mcrypt

e_header "Fixing PEAR permissions"
  chmod -R ug+w $(brew --prefix php54)/lib/php
  pear config-set php_ini /usr/local/etc/php/5.4/php.ini
  pear config-set auto_discover 1

# PHP 5.3

source ~/.bash_profile

e_header "Installing PHP 5.3..."
  brew unlink php54
  brew install php53
  brew link php53

e_header "Updating the date.timezone setting in /usr/local/etc/php/5.3/php.ini"
    sed -i .bak 's/\;date.timezone =/date.timezone = "Australia\/Sydney"/g' /usr/local/etc/php/5.3/php.ini
    sed -i .bak 's/\;auto_detect_line_endings = Off/auto_detect_line_endings = On/g' /usr/local/etc/php/5.3/php.ini


e_header "Installing PHP 5.3 xDebug..."
  brew install php53-xdebug

e_header "Installing PHP 5.3 APC..."
  brew install php53-apc

e_header "Installing PHP 5.3 Twig..."
  brew install php53-twig

e_header "Installing PHP 5.3 intl..."
  brew install php53-intl

e_header "Installing PHP 5.3 Imagick..."
  brew install php53-imagick

e_header "Installing PHP 5.3 MCrypt..."
  brew install php53-mcrypt

e_header "Fixing PEAR permissions"
  chmod -R ug+w $(brew --prefix php53)/lib/php
  pear config-set php_ini /usr/local/etc/php/5.3/php.ini
  pear config-set auto_discover 1

PHP Utils

e_header "Installing Composer (PHP package manager)..."
  brew install composer
  composer self-update

e_header "Installing Capifony..."
  gem install capifony

e_header "Instaling PHP Q/A Tools"

  pear channel-discover pear.pdepend.org
  pear channel-discover pear.phpmd.org
  pear channel-discover pear.phpunit.de
  pear channel-discover pear.phpdoc.org
  pear channel-discover components.ez.no
  pear channel-discover pear.symfony-project.com
  
  pear install pdepend/PHP_Depend
  pear install phpmd/PHP_PMD
  pear install phpunit/phpcpd
  pear install phpunit/phploc
  pear install --alldeps phpunit/PHP_CodeBrowser
  pear install --alldeps phpunit/PHPUnit
  pear install phpdoc/phpDocumentor-alpha
  pear install PHP_CodeSniffer
  pear install pear.phpqatools.org/phpqatools
  pear install pear.netpirates.net/phpDox-alpha

  phpcs --config-set default_standard Symfony2

e_header "Installing PHP CS Fixer..."
  curl http://cs.sensiolabs.org/get/php-cs-fixer.phar -o /usr/local/bin/php-cs-fixer
  chmod a+x /usr/local/bin/php-cs-fixer

source ~/.bash_profile
