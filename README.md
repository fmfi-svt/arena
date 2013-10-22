Instalacia - Anketa arena
-------------------------

1. `cp mysql/nechceme-sproste-kodovanie.cnf /etc/mysql/conf.d/`
2. Restartni mysql
3. Ako MySQL root: `CREATE USER anketaarena@localhost IDENTIFIED BY 'nejake_heslo'`
4. Ako MySQL root: ```GRANT ALL ON `aa\_%` TO anketaarena@localhost;```
5. `cp apache2/anketaarena /etc/apache2/sites-available` a za `THESECRET` nahrad heslo
6. Do virtualhost configu pridaj `Include sites-available/anketaarena`
7. `mkdir /var/www/anketaarena; cp web/anketaarena.php /var/www/anketaarena/`
8. Vytvor skupinu `arena` a pridaj do nej ludi, co maju mat pristup
9. `chown root:arena /var/www/anketaarena; chmod g+w /var/www/anketaarena`
10. Restartni apache2
11. `cp bin/anketaarena /usr/local/bin/`
12. `cp etc/anketaarena.cfg.dist /etc/anketaarena.cfg` a vhodne uprav co treba
13. Bud v configu povedz z akeho serveru sa ma stahovat sql dump, alebo zariad aby sa
    automaticky kopiroval na arena stroj, a do configu daj len lokalnu cestu


Instalacia - Fajr arena
-----------------------

1. `cp apache2/fajrarena /etc/apache2/sites-available` a za `THESECRET` nahrad heslo
2. Do virtualhost configu pridaj `Include sites-available/fajrarena`
3. `mkdir /var/www/fajrarena; cp web/fajrarena.php /var/www/fajrarena/`
4. Vytvor skupinu `arena` a pridaj do nej ludi, co maju mat pristup
5. `chown root:arena /var/www/fajrarena; chmod g+w /var/www/fajrarena`
6. Restartni apache2
7. `cp bin/fajrarena /usr/local/bin/`
8. `cp etc/fajrarena.cfg.dist /etc/fajrarena.cfg` a vhodne uprav co treba
