# Crearea unei baze de date folosind phpmyadmin

Trebuie sa aveti instalat git.
Comenzi:
git add .
git status
git commit -m "mesaj"
git push origin master

git pull origin master

git clone link

Din command promt(windows) sau terminal(linux) rulati urmatoarele comenzi:

git clone https://github.com/Trifuu/training.git

Porniti aplicatia Xampp:
  - windows: search and run
  - linux: cd /opt/lampp; sudo ./manager-linux-x64.run

Porniti aplicatia MySQL.

Intrati intr-un browser la link-ul: http://localhost/phpmyadmin

Rulati pe rand fiecare comanda din fisierul db.sql si urmariti ce se intampla folosind pagina phpmyadmin.

# Crearea unei pagini HTML

Rulati in browser pagina index.html.

Editati pagina astfel incat sa apara titlul "training" si un paragraf care sa contina numele vostru.

# Crearea unei pagini php

Deschide-ti fisierul basic.php.

Ce este schimbat fata de index.html?

Cum se declara o variabila in PHP?

Rulati fisierul in browser.

/etc/apache2/mods-enabled/dir.conf

<IfModule mod_dir.c>
    DirectoryIndex index.php index.html index.cgi index.pl index.xhtml index.htm
</IfModule>
