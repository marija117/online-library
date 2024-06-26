
## Project Setup 

To be able to run this project you will need to install few things

# If you are using macbook
```bash
# install php
brew install php 

# install composer
curl -sS https://getcomposer.org/installer | php 
mkdir -p /usr/local/bin 
mv composer.phar /usr/local/bin/composer \n
chmod +x /usr/local/bin/composer

# to be sure that composer is successfully installed run
composer

#if you need to update composer
composer self-update 

#install dependencies
composer install

#copy .env.example file and create .env
cp .env.example .env

# install npm
$ npm install

$ npm run build

# run npm to be able to load pages in vite
$ npm run dev

# copy content of .env.example and create .env file 

# run the project with this command
php artisan serve
```

## Static User Credentials

For testing purposes, you can use the following static user credentials:

- Email: ahsoka.tano@q.agency
- Password: Kryze4President

# If you are using ubuntu
```bash

#update package manager
sudo apt update

# install php
sudo apt install php
sudo apt install php-cli unzip

#install composer
curl -sS https://getcomposer.org/installer -o /tmp/composer-setup.php
HASH=`curl -sS https://composer.github.io/installer.sig`
echo $HASH
php -r "if (hash_file('SHA384', '/tmp/composer-setup.php') === '$HASH') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

#to install it globally
sudo php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer
```
# online-library
