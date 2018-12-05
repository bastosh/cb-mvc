# CB-MVC

Version minimaliste du framework utilisé en NFA017, pour démarrer rapidement des projets dans le cadre de l’UE.

## Installation
- Prérequis : avoir [Composer](https://getcomposer.org/doc/00-intro.md) installé globalement sur sa machine
- Télécharger ou cloner le repository :
```
$ git clone https://github.com/bastosh/cb-mvc.git
```
- Une fois dans le dossier, lancer la commande :
```
$ npm install && composer install
```
Cela permet de générer l’autoload et d’installer les dépendances. Sans cela, le projet ne peut fonctionner.

Enfin, compiler le CSS depuis les sources scss :
```
$ gulp sass
```
Il est également possible de compiler et de surveiller les changements : 
```
$ gulp
```
