# cine-mood
mini-site web dynamique en PHP


Bienvenue sur **CineMood**, un mini-site web dynamique développé en PHP qui permet de consulter, d'ajouter et de modifier des critiques de films et de séries.

##  À propos de ce projet
CineMood est un **projet personnel** que j'ai entièrement réalisé sur mon temps libre. Mon objectif principal était de **découvrir et d'apprendre les bases du développement backend avec PHP**, en créant un cas d'usage concret et fonctionnel qui me passionne (le cinéma). 

Ce projet m'a permis de comprendre concrètement la logique de la programmation côté serveur, la gestion des requêtes, et la manipulation de données.
![Uploading la page.png…]()

##  Fonctionnalités implémentées

- **Architecture centralisée** : Utilisation d'un contrôleur principal (`index.php`) pour charger dynamiquement le contenu des pages.
- **Gestion des données (CRUD basique)** : Lecture, ajout et modification d'avis via un formulaire.
- **Stockage local** : Afin de me concentrer sur la logique PHP, les données sont stockées et manipulées directement via un fichier texte (`donnees.txt`), sans base de données externe.
- **Interactivité** : Système de filtre en JavaScript pour trier les critiques selon leur note.

##  Technologies utilisées
- **Backend** : PHP natif
- **Frontend** : HTML5, CSS3 (utilisation du framework [W3.CSS](https://www.w3schools.com/w3css/) pour le design responsive)
- **Scripting** : JavaScript (pour le filtrage dynamique)

##  Comment tester le projet en local ?

1. Téléchargez et installez un serveur local comme [XAMPP](https://www.apachefriends.org/fr/index.html) ou [WAMP](https://www.wampserver.com/).
2. Clonez ou téléchargez ce dépôt.
3. Placez le dossier `CineMood` dans le répertoire web de votre serveur local (ex: `htdocs` pour XAMPP).
4. Démarrez les services Apache de votre serveur.
5. Ouvrez votre navigateur et accédez à : `http://localhost/CineMood`

##  Auteur
Projet conçu et développé par **MEDANI Imene** dans le cadre de mon apprentissage en développement web.
