#README.md

##Brief Application de Gestion des apprenants

Simplon cherche à s'émanciper des solutions externes utilisées pour ses services. On vous a demandé de créer une application de gestion des élèves, qui permettra de gérer les absences et les retards. 
Le cahier des charges et les maquettes vous sont fournis. L'application devra être fonctionnelle et mise en ligne en fin de brief, pour faire une démo à Simplon.

##Contexte du projet

En tant que développeur full stack, pour arriver au bout de ce gros contrat, vous devrez :
créer un site responsive
gérer un backend avec MVC, qui communiquera avec le front sous format d'API, en JSON
Permettre au front, construit en SPA, de récupérer et interagir avec le back, en asynchrone.
Gérer une base de données
Construire les composants d'accès aux données à la main,
Déployer votre application sur le serveur de Simplon
Faire des tests en développement
proposer un gitflow précis et construit
Donner une documentation de déploiement et de suivi de projet


##Modalités pédagogiques
Projet SOLO.
8,5 jours seront alloués à cette création. Le rendu (Présentation orale avec support de 10min) aura lieu le lundi 22/04 après-midi.


##Modalités d'évaluation
Vous présenterez votre travail à l'oral pendant 10 minutes, avec l'appui d'un support. Vous ferez un tour d'horizon de votre site, avec les spécificité techniques que vous aurez mises en place (sécurisation, responsive, MVC, requêtes SQL préparées, ...)
Votre code sera relu, l'architecture et la propreté du code (commentaires, dry, noms des fonctions et variables, ...) seront évaluées. 


##Livrables
Votre dépôt GIT, qui contiendra :
    • votre code
    • un readme de documentation
    • un dossier annexes avec une image du MCD et MLD, votre fichier SQL
    • Les mots de passes et autres données sensibles auront été enlevés


##Le site en ligne.


Critères de performance
- Votre application sera déployée sur le serveur de Simplon.
- Elle sera fonctionnelle (connexion, affichage des différents espaces en fonction des rôles, ajout d'un retard, validation de présence, ...)
- Elle sera responsive
- Elle sera sécurisée (mot de passe hashé, champs utilisateurs sécurisés, connexions au serveur protégées, ...)
- La documentation de suivi de projet et de déploiement sera produite, à jour et qualitative




​##MCD


La première étape est de créer la MCD
![mcd](https://github.com/DimitriMaurand/aga/assets/156297608/26e8f39d-db1c-4bfe-88cb-39c791822a26)




##La maquette



![maquette](https://github.com/DimitriMaurand/aga/assets/156297608/12346874-bc4d-40d7-9b09-0d169f9ebd0d)


Vue d’ensemble du projet


![maquettezoom](https://github.com/DimitriMaurand/aga/assets/156297608/a8dd33ed-409d-4f82-a925-500ea537a93d)

Zoom sur un élément






##Mon organisation


J'ai pris le parti pris de commencer par le front-end.
De travailler le responsive.
Faire le code JS pour la création du chiffre aléatoire qui servira de code.
La disparition et apparition de div.
Et le code pour le tableau, quand on coche une case au niveau du titre, coche toutes les autres cases.


Après, j'ai commencé à faire mon mvc.
Et de faire apparaître en premier ma page d'accueil bienvenue.
Actuellement, j'essaie de faire apparaître.Une autre page en changeant l'adresse dans la barre.
J'ai commencé à développer mon front end, en code HTML pour pouvoir le découper après en View en PHP. Pour cela, vous pourrez voir dans le MVC un dossier appelé HTML. C'est là où j'ai travaillé mes fichiers HTML pour le front end. 
J'ai tout codé à la main avec tailwind dont j'ai découvert tous les aspects avec ce brief.
