srm
===

verseo/srm

Installation
------------

    git clone https://github.com/verseo/srm.git
    cd srm
    php composer.phar install --prefer-dist

    # set timezone in php.ini
    date.timezone = Europe/Paris

    php app/console doctrine:database:create
    php app/console doctrine:schema:update --force
    php app/console assetic:dump --env="prod"
