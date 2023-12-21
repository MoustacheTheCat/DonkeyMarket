## Cours symfony

-----------------------------------------------------step 1

Create projet :

        /usr/local/bin/composer create-project symfony/skeleton /home/moustache/Documents/symfony/amazone  --no-interaction
        
Init git :         
        
        git init && \
        git remote add origin git@github.com:MoustacheTheCat/cours-symfony.git && \
        git add . && \
        git commit -m "init" && \
        git push -u origin main

Lancer le serveur :

        symfony server:start

Stoper le serveur :

        symfony server:stop

Crée un controller :

        symfony console make:controller

--------------renseigner ensuite le nom du controller 

Crée la db :

        symfony console doctrine:database:create

Crée une Entity :

        symfony console make:entity

Crée la tabledb :

        symfony console doctrine:schema:update

        --dump-sql

        --force

Crée une fixture : 

        symfony console make:fixtures <nom de la fixture>

envoyer les données en DB

        symfony console doctrine:fixtures:load

envoyer les données en DB sans purge 

        symfony console doctrine:fixtures:load --append

crée une entity User

        symfony console make:user

crée register entity

        symfony console make:registration-form






----------------------------------------------------------Installer les packages

Enabling TLS:

      symfony server:ca:install


Console de debug:

        composer require --dev symfony/profiler-pack 
    
Crée les controller:

        composer require symfony/maker-bundle --dev

ORM 

        composer require symfony/orm-pack

-->editer le fichier .env

-> DATABASE_URL="mysql://<userdbname>:<password>@127.0.0.1:3306/<dbname>?serverVersion=10.11.2-MariaDB&charset=utf8mb4"


ORM FIXTURE

        composer require --dev orm-fixtures

debug template 

        composer require --dev symfony/debug-bundle


validator security-csrf

        composer require -form validator security-csrf

Using bootstrapp

        npm install bootstrap --save-dev

Using make:user

        composer require security

Registration-Form

        composer require symfonycasts/verify-email-bundle

Mailer

        composer require symfony/mailer


symfony console security:hash-password

 Hasher used     Symfony\Component\PasswordHasher\Hasher\MigratingPasswordHasher  
 Password hash   $2y$13$OVOGYo46DaHSWxNZsdkZyePwRae2occukAxbuR5vF2cFWf3SqI4FO     

 $2y$13$1QXKh.p0MdTvFjPRWmfZhuuNFyIkd9fxihBmHH9RD9ECb5I7erOo2 
 $2y$13$au/JtLLylmMsPRTJOM60iOoT/UVO2N8NDmPUW6s5lA0eg8/qH3iTC# DonkeyMarket
