srm
===

verseo/srm

Installation
------------

    git clone https://github.com/<username>/srm.git
    cd srm
    git remote add --track master upstream git://github.com/verseo/srm.git
    git fetch upstream
    curl -sS https://getcomposer.org/installer | php
    php composer.phar install
    php app/console doctrine:database:create
    php app/console doctrine:schema:update --force
    php app/console assetic:dump --env="prod"
