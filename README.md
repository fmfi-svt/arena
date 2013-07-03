Instalacia
----------

1. Nakopiruj mysql/nechceme-sproste-kodovanie.cnf do /etc/mysql/conf.d
2. Restartni mysql
3. Vytvor DB pouzivatela `anketaarena`
4. ```GRANT ALL ON `aa\_%` TO anketaarena@localhost;```
5. cp apache2/anketaarena /etc/apache2/sites-available
6. Includni tento config vo vhoste
7. Vytvor docroot a nakopiruj veci z web
8. Vytvor skupinu `arena` a pridaj do nej ludi, co maju mat pristup
9. `sudo chown root:arena /var/www/anketaarena && sudo chmod g+w /var/www/anketaarena`
10. Restartni apache2
11. Nakopiruj bin/anketaarena do /usr/local/bin
12. Nakopiruj etc/anketaarena.cfg.dist do /etc/anketaarena.cfg a vhodne uprav
13. Bud v configu povedz z akeho serveru sa ma stahovat sql dump, alebo zariad aby sa
    automaticky kopiroval na arena stroj, a do configu daj len lokalnu cestu
