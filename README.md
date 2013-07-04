Instalacia
----------

1. `cp mysql/nechceme-sproste-kodovanie.cnf /etc/mysql/conf.d/`
2. Restartni mysql
3. Ako MySQL root: `CREATE USER anketaarena@localhost IDENTIFIED BY 'nejake_heslo'`
4. Ako MySQL root: ```GRANT ALL ON `aa\_%` TO anketaarena@localhost;```
5. `cp apache2/anketaarena /etc/apache2/sites-available` a za `THESECRET` nahrad heslo
6. Do virtualhost configu pridaj `Include sites-available/anketaarena`
7. `mkdir /var/www/anketaarena; cp web/index.php /var/www/anketaarena/`
8. Vytvor skupinu `arena` a pridaj do nej ludi, co maju mat pristup
9. `chown root:arena /var/www/anketaarena; chmod g+w /var/www/anketaarena`
10. Restartni apache2
11. `cp bin/anketaarena /usr/local/bin/`
12. `cp etc/anketaarena.cfg.dist /etc/anketaarena.cfg` a vhodne uprav co treba
13. Bud v configu povedz z akeho serveru sa ma stahovat sql dump, alebo zariad aby sa
    automaticky kopiroval na arena stroj, a do configu daj len lokalnu cestu
