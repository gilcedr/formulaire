Exemple de Formulaire de #imeCreative donc j'ai réeditez ajouter du $php pour interagir avec une  BD (Mariadb, Mysql..)
et apporter une couche de sécurité au niveau de ça programmation afin de protéger les entrées utilisateurs contre les attaques d'injection sql ou de cross site xss

@for free just enjoy

~ Mention légale : Je ne suis auçun cas responsable d'une utilisation malveillante du scripts c'est gratuit et à des fins éducatif

Requis pour ça compréhension:
> base en html;
> base en css;
> base en php;
> base en JavaScript;
> base en Mysql ou son fork MariaDb;
> base d'une connexion à la base de donnée via Mysqli (voir dans database.php);


> Pour le Run sur linux :
> Rassurer vous d'avoir installer le php, php -v et que tous ces fichiers sont tous dans le repertoire /var/www/html pour des serveurs comme nginx rassurer vs d'avoir la bonne version du fast_cgi dans
> /etc/nginx/sites-available/default pour vérifier sa version php -v la version doit correspondre à la ligne du fichier config de son fpm ex php8.1-fpm selon ma version  :
> apt install mariadb-server
> apt install nginx
>  sudo apt install  php−fpm php−mysql
> nginx -t (pr voir si le serveur est ok après ça)
> le redemarrer : systemctl restart nginx
==========================================
> Sur un Windows plus facile vous télechargez juste Wampeserver via google et liveserver depuis vscode ou autre éditeurvous mettez les fichiers dans wamp/wwww (cliquue droit sur Wamp et ouvrir à l'emplacement du fichier)
