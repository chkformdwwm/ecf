**Problèmes apparus lors du rendu de la copie d'ECF (mentionnés dans la copie) :**
Problème concernant la connexion au back office : ce problème s'est résolu immédiatement en modifiant le nom du domaine servant à recevoir le cookie de session (session_set_cookie_params dans le fichier session.php). Il fallait remplacer '.localhost' par le domaine fourni par l'hébergeur du site.

Problème de commit : le dossier à commiter était beaucoup trop lourd, le problème a pu se résoudre en uploadant les dossiers un par un (cette solution n'a été trouvée que le 23/07 matin).




**Mise en place de l'environnement de travail (question de la copie de rendu ECF) :**
Visual Studio Code sous Windows 10 : outil gratuit et performant, léger comparativement à d’autres outils et intéressant pour ses extensions.
Xampp : gratuit, facilité d’installation pour débuter, outil "prêt à l’emploi".
Installation de Bootstrap via Node pour faciliter la personnalisation du css.
