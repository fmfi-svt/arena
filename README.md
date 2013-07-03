Instalacia
----------

1. Nakopiruj mysql/nechceme-sproste-kodovanie.cnf do /etc/mysql/conf.d
2. Restartni mysql
3. Vytvor DB pouzivatela `anketaarena`
4. ```GRANT ALL ON `aa\_%` TO anketaarena@localhost;```
5. cp apache2/anketaarena /etc/apache2/sites-available
6. Includni tento config vo vhoste
7. Vytvor docroot a nakopiruj veci z web
8. Restartni apache2
9. Nakopiruj bin/anketaarena do /usr/local/bin

