# Laravel Projet Duo : CRUD

**Par équipe deux 2 et à l'aide du template fourni, reproduire le site comme suit**

### Partie une : INTERGRATION du template
- une navbar fonctionnelle : 
	- nom de l'entreprise avec les variables env
	- un onglet home qui renvoie vers la page home
	- un onglet blog qui renvoie vers la page blog
	- un onglet portfolio qui renvoie vers la page portfolio
	- un onglet contact qui renvoie vers la page contact

- La page home : 
	- tout le contenu doit être présent avec le stystème de partial. (ne pas mettre les données dans la DB)

- la page blog :
	- il doit y avoir maximum 4 articles affichés
	- le contenu des articles doit être rajouté manuellement dans votre DB
		- le titre sera en string, limité à 30 caractères
		- l'image sera en string, limité à 100 caractères
		- la description sera en text
- la page portfolio 
	- il doit avoir maximum 15 projets affichés
	- le contenu des projets doit être rajouté manuellement dans votre DB
		- le titre sera en string, limité à 50 caractères
		- la description sera en text
		
- la page contact : 
	- la garder telle quelle

- le footer
	- le garder tel quel



### Partie deux : REALISATION d'un backoffice

- Réaliser une page back office contenant : 
	- un menu redirigeant vers les différentes pages du back offices ( blog & portfolio)
	- Sur chaque page, il faut des form pour pouvoir ajouter du contenu (CRUD create)
	- Rajouter également un tableau récapitulatif du contenu des tables
- Attention de bien organiser votre dossier view ! (Création du dossier 'backoffice', à vous de gérer la structure de dossier d'une manière cohérente)


### RAPPEL : 
- Un repo GITHUB -> laravel_projet_duo
- Faire des commit régulièrement
- Partager le travail EQUITABLEMENT. Faire ATTENTION à vos migrate au risque de perdre toutes vos données rajoutées manuellement. Organiser vous d'une manière efficace. Prenez du temps pour discuter de la décomposition du travail. 
- Prendre un projet laravel sur github: https://devmarketer.io/learn/setup-laravel-project-cloned-github-com/