srm
===

verseo/srm

Installation
------------

    # set timezone in php.ini
    date.timezone = Europe/Paris

    git clone https://github.com/verseo/srm.git
    cd srm
    php composer.phar install --prefer-dist
    php app/console doctrine:database:create
    php app/console doctrine:schema:update --force
    php app/console assetic:dump --env="prod"
