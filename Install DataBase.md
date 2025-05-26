Etant donné que le fichier ./config/services.yaml  est ignoré lors des commits il y a son exemplaire normé ./config/services.test.yaml, 
Renormé le en ./config/services.yaml pour que ça puisse prendre fonction
Il faudrat fait rapeil pour le fichier /config/package/twig.yaml
Etant donné que le fichier .env de la racine de notre projet est ignoré lors des commits, 
# Dupliquer le fichier .env.example puis remormer la copie en .env
# Modifier le fichier .env selon vos données d'environnement 

Le système d'exploitation est à choisir pour le developpement mais pour la produiction  c'est ubuntu

# Le Postgresql est le SGBD qui est utilisé dans le projet 
Pour l'installé sur windows vous pouvez faire un tout sur https://phoenixnap.com/kb/install-postgresql-windows
Après l'installation vous vous déplacrez dans le dossier C:/xampp/php
Ouvrer le fichier php.ini
Rechercher extension dans le fichier
Si vous trouvez ces ligne commenté, décommentez les; s'il n'existe pas ajouter les dans la zones des extensions
# extension = php_pdo_pgsql.dll
# extension = php_pgsql.dll
Rechercher extension_dir dans le fichier
Vérifier si cette ligne est défini si non définissez le
# extension_dir="C:\xampp\php\ext"

Aller dans le dossier C:\xampp\php pour copier le fichier libpq.dll et coller le dans le dossier C:\xampp\apache\bin

Aller dans les variables d'environnement ajouté dans path le chemin qui mène vers le repertoire bin de postgresql
chez moi c'est C:\Program Files\PostgreSQL\14\bin
Rédémarer xampp et votre IDE pour pouvoir l'utilisé.

Pour l'installé sur ubuntu vous pouvez faire un tout sur https://adamtheautomator.com/install-postgresql-on-a-ubuntu/

Pour démarer le server: 
# sudo /etc/init.d/ssh start postgresql.service 
ou vous pouvez aussi faire: 
# su -c ’pg ctl start -D /var/lib/pgsql/9.3 -l /var/log/postgresql/postgresql.conf’ postgres
Pour vérifier le status du server: 
# sudo /etc/init.d/ssh status postgresql.service

Après l'installation bien fait de postgresql positionnez vous dans le dossier racine et tapez dans le termine 

# composer install

# composer update

# npm run build

# symfony console doctrine:database:create
# symfony console make:migration
# symfony console doctrine:migrations:migrate

# symfony console secrets:generate-keys  

Bien Fait les guys
