#CIQUALAPI

##HowTo install project back project ?

Back has been made with apiplatform

git clone https://github.com/amikal/ciqualapi.git

```bash
cd ciqualapi
composer install
mysql -u root -p ciqual < sql/ciqual_indexed_003.sql
sudo chmod -R 777 var/cache var/logs var/sessions
php bin/console server:run
```
Goto http://127.0.0.1:8000