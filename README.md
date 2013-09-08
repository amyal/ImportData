srm
===

verseo/srm

Installation
------------

    git clone https://github.com/<username>/srm.git
    git remote add upstream https://github.com/verseo/srm.git
    curl -sS https://getcomposer.org/installer | php
    php composer.phar install
    php app/console doctrine:database:create
    php app/console doctrine:schema:update --force
    php app/console assetic:dump --env="prod"
